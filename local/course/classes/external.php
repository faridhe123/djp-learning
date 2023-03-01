<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External course participation api.
 *
 * This api is mostly read only, the actual enrol and unenrol
 * support is in each enrol plugin.
 *
 * @package    local_enrol
 * @category   external
 * @copyright  2022 Muhammad Dhea Farizka
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/externallib.php");

require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->dirroot . '/course/externallib.php');

require_once($CFG->dirroot . '/lib/gradelib.php');

require_once($CFG->dirroot . '/mod/quiz/classes/external.php');
require_once($CFG->dirroot . '/completion/classes/external.php');
require_once($CFG->dirroot . '/grade/report/user/externallib.php');
require_once($CFG->dirroot . '/mod/feedback/classes/external.php');

class local_course_external extends external_api {

    public static function get_course_module_parameters() {
        return new external_function_parameters(
            array(
                'moduleid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'modulename' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'courseid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'idnumber' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'categoryid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'start' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'length' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'sort' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_course_module($moduleid,$modulename,$courseid,$idnumber,$categoryid,$start,$length,$sort) {
        global $DB,$CFG;

        $params = self::validate_parameters(self::get_course_module_parameters(),
            [
                'moduleid' => $moduleid,
                'modulename' => $modulename,
                'courseid' => $courseid,
                'idnumber' => $idnumber,
                'categoryid' => $categoryid,
                'start' => $start,
                'length' => $length,
                'sort' => $sort,
            ]);

        $db_params['deletioninprogress'] = '0';

        if($moduleid)
            $db_params['id'] = $moduleid;

        if($modulename) {
            if(strtolower($modulename) == 'survey') $modulename = 'feedback';
            $moduleid = $DB->get_record('modules', array('name' => $modulename))->id;
            $db_params['module'] = $moduleid;
        }

        $recordsTotal = $DB->count_records('course_modules');

//        if($modulename == 'quiz') {
//            if($courseid) {
//                $course = $DB->get_record('course', array('id' => $courseid));
//            }
//            else {
//                $courses = $DB->get_records('course');
//                foreach($courses as $course){
//                    $quizzes = mod_quiz_external::get_quizzes_by_courses([$course->id]);
//                    print_r($quizzes);
//                }
//            }die();
//        }
        $modules = $DB->get_records('course_modules',$db_params,'id '.($sort??'desc'),'*',$start,$length);
        foreach($modules as $module){
            $cm = get_coursemodule_from_id(null, $module->id, 0, true, MUST_EXIST);

            $course = $DB->get_record('course', array('id' => $cm->course));
            $category = core_course_category::get($course->category);
            if($courseid && $courseid !== $course->id)
                continue;

            if($idnumber && $idnumber !== $course->idnumber)
                continue;

            if($categoryid && $categoryid !== $category->id) {
                $category_and_childs = array();
                $category_and_childs[] = (string)$categoryid;
                $childs = core_course_external::get_categories([['key'=>'parent','value'=>$categoryid]]);

                foreach($childs as $child) {
                    $category_and_childs[] = $child['id'];
                    $grandchilds = core_course_external::get_categories([['key'=>'parent','value'=>$child['id']]]);

                    foreach($grandchilds?$grandchilds:[] as $grandchild) {
                        $category_and_childs[] = $grandchild['id'];
                    }
                }

                if(!in_array($category->id,$category_and_childs))
                    continue;
            }

            $grade = gradereport_user_external::get_grade_items($cm->course,null);

            foreach($grade['usergrades'][0]['gradeitems'] as $usergrades) {
                if($usergrades['cmid'] == $cm->id) {
                    $param_grade['grademax'] = (float) $usergrades['grademax'];
                    $iteminstance = $usergrades['iteminstance'];
                }
            }

            $grading_info = grade_get_grades($cm->course, 'mod', 'quiz', $iteminstance);
            if($grading_info->items[0]->gradepass) $param_grade['gradepass'] = $grading_info->items[0]->gradepass;

            $array_cm[] = [
                'cmid' => $cm->id,
                'title' => $cm->name,
                'url' => $CFG->fronturl."/mod/{$cm->modname}/view.php?id={$cm->id}",
                'modulename' => $cm->modname,
                'courseid' => $cm->course,
                'idnumber' => $course->idnumber,
                'categoryid' => $category->id,
                'categoryname' => $category->name,
                'gradepass' => (float) $param_grade['gradepass'],
                'grademax' => (float) $param_grade['grademax']
            ];

        }

        if(!$array_cm) {
            $array_cm = [];
        }

        $recordsFiltered = count($array_cm);

//        die(var_dump($array_cm));

        return [
            'data' => $array_cm,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered
        ];
    }

    public static function get_course_module_returns() {
        return new external_single_structure(
            array(
                'data' => new external_multiple_structure(
                    new external_single_structure([
                        'cmid' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                        'title' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                        'url' => new external_value(PARAM_URL, '',VALUE_DEFAULT,null),
                        'modulename' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                        'courseid' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                        'idnumber' => new external_value(PARAM_RAW, '',VALUE_DEFAULT,null),
                        'categoryid' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                        'categoryname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                        'gradepass' => new external_value(PARAM_INT, '',VALUE_DEFAULT,0),
                        'grademax' => new external_value(PARAM_INT, '',VALUE_DEFAULT,0),
                    ])),
                'recordsTotal' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                'recordsFiltered' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
            )
        );
    }

    public static function get_courses_parameters() {
        return new external_function_parameters(
            array(
                'categoryid' => new external_value(PARAM_INT, 'Category ID', VALUE_DEFAULT, null),
                'courseid' => new external_value(PARAM_INT, 'Category ID', VALUE_DEFAULT, null),
                'module_exists' => new external_value(PARAM_TEXT, 'Category ID', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_courses($categoryid, $courseid, $module_exists) {
        global $DB,$CFG;

        $params = self::validate_parameters(self::get_courses_parameters(),
            [
                'categoryid' => $categoryid,
                'courseid' => $courseid,
                'module_exists' => $module_exists,
            ]);

        if($module_exists) {
            if(strtolower($module_exists) == 'survey') $module_exists = 'feedback';
           $exists = self::get_course_module(null,$module_exists,null,null,null,null,null,null);
           $course_exists = array_column($exists['data'], 'courseid');
        }

        $all_course = $DB->get_records('course',null,null,'id');
        $recordsTotal= count($all_course);

        $category_and_childs = array();
        $category_and_childs[] = (string)$categoryid;
        $childs = core_course_external::get_categories([['key'=>'parent','value'=>$categoryid]]);

        foreach($childs as $child) {
            $category_and_childs[] = $child['id'];
            $grandchilds = core_course_external::get_categories([['key'=>'parent','value'=>$child['id']]]);

            foreach($grandchilds?$grandchilds:[] as $grandchild) {
                $category_and_childs[] = $grandchild['id'];
            }
        }

        $array_course = array();

        if($courseid) {
            $course = core_course_external::get_courses_by_field('id', $courseid)['courses'];
            if($course['id'])
                $array_course[] = [
                    'courseid' => $course['id'],
                    //                'idnumber' => $course['idnumber'],
                    'fullname' => $course['fullname'],
                    'url' => $CFG->fronturl."/course/view.php?id={$course['id']}",
                    //                'fullname' => $course['fullname'],
                    'startdate' => $course['startdate'],
                    'enddate' => $course['enddate'],
                    //                'timecreated' => $course['timecreated'],
                ];
        }
        else {
            if($categoryid)
                foreach($category_and_childs as $the_category) {
                    $thisCourse = core_course_external::get_courses_by_field('category', $the_category);
                    if(!empty($thisCourse))
                        foreach($thisCourse['courses'] as $course){
                            if($module_exists && !in_array($course['id'],$course_exists)) continue;

                            $array_course[] = [
                                'courseid' => $course['id'],
                                //                'idnumber' => $course['idnumber'],
                                'fullname' => $course['fullname'],
                                'url' => $CFG->fronturl."/course/view.php?id={$course['id']}",
                                //                'fullname' => $course['fullname'],
                                'startdate' => $course['startdate'],
                                'enddate' => $course['enddate'],
                                //                'timecreated' => $course['timecreated'],
                            ];
                        }
                }
            else core_course_external::get_courses_by_field();
        }

//        $recordsFiltered = count($courses['courses']);

//        die(var_dump($array_course));

        $recordsFiltered = count($array_course);

        return [
            'data' => $array_course,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered
        ];
    }

    public static function get_courses_returns() {
        return new external_single_structure(
            array(
                'data' => new external_multiple_structure(
                    new external_single_structure([
                        'courseid' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                        'fullname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                        'url' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                        'startdate' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                        'enddate' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                    ])),
                'recordsTotal' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                'recordsFiltered' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
//                'modname' => new external_value(PARAM_TEXT, '',VALUE_OPTIONAL),
            )
        );
    }


    public static function get_course_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'Category ID', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_course($courseid) {
        global $DB,$CFG;

        $params = self::validate_parameters(self::get_course_parameters(),
            [
                'courseid' => $courseid,
            ]);

        $course = core_course_external::get_courses_by_field('id',$courseid)['courses'][$courseid];
        $return_course = [
            'courseid' => $course['id'],
            'fullname' => $course['fullname'],
            'url' => $CFG->fronturl."/course/view.php?id={$course['id']}",
            'startdate' => $course['startdate'],
            'enddate' => $course['enddate'],
        ];

        return $return_course;
    }
    public static function get_course_returns() {
        return new external_single_structure([
            'courseid' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
            'fullname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
            'url' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
            'startdate' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
            'enddate' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
        ]);
    }

}
