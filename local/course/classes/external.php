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

        if($moduleid)
            $db_params['id'] = $moduleid;

        if($modulename) {
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

            if($categoryid && $categoryid !== $category->id)
                continue;

            $array_cm[] = [
                'cmid' => $cm->id,
                'title' => $cm->name,
                'url' => "http://10.244.66.78/djp-learning/mod/{$cm->modname}/view.php?id={$cm->id}",
                'modulename' => $cm->modname,
                'courseid' => $cm->course,
                'idnumber' => $course->idnumber,
                'categoryid' => $category->id,
                'categoryname' => $category->name
            ];
        }

        if(!$array_cm) {
            $array_cm = [];
        }

        $recordsFiltered = count($array_cm);

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
           $exists = self::get_course_module(null,$module_exists,null,null,null,null,null,null);
           $course_exists = array_column($exists['data'], 'courseid');
        }

        $all_course = $DB->get_records('course',null,null,'id');
        $recordsTotal= count($all_course);

        if($courseid)
            $courses = core_course_external::get_courses_by_field('id',$courseid);
        else
            $courses =
                $categoryid ?
                core_course_external::get_courses_by_field('category',$categoryid) :
                core_course_external::get_courses_by_field();
//        $recordsFiltered = count($courses['courses']);

        foreach($courses['courses'] as $course){
            if($module_exists && !in_array($course['id'],$course_exists)) continue;

            $array_course[] = [
                'courseid' => $course['id'],
//                'idnumber' => $course['idnumber'],
                'shortname' => $course['shortname'],
                'url' => "http://10.244.66.78/djp-learning/course/view.php?id={$course['id']}",
//                'fullname' => $course['fullname'],
                'startdate' => $course['startdate'],
                'enddate' => $course['enddate'],
//                'timecreated' => $course['timecreated'],
            ];
        }

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
                        'shortname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
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
            'shortname' => $course['shortname'],
            'url' => "http://10.244.66.78/djp-learning/course/view.php?id={$course['id']}",
            'startdate' => $course['startdate'],
            'enddate' => $course['enddate'],
        ];

        return $return_course;
    }
    public static function get_course_returns() {
        return new external_single_structure([
            'courseid' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
            'shortname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
            'url' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
            'startdate' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
            'enddate' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
        ]);
    }

}
