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

    public static function get_course_module($moduleid=null,$modulename=null,$courseid=null,$idnumber=null,$categoryid=null,$start=null,$length=null,$sort=null) {
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

        $recordsTotal = $DB->count_records('course_modules');
        $sql_params = [
            'moduleid' => $moduleid,
            'modulename' => $modulename??'',
            'courseid' => $courseid,
            'idnumber' => $idnumber,
            'categoryid' => $categoryid,
        ];

        $sub_contents = $DB->get_records_sql("
                    select a.id,a.course,a.idnumber, # DETIL MODUL dan GRADE GRADEnya
                       c.id course_id,
                       c.fullname course_fullname,
                       c.shortname course_shortname,
                       m.name modname,
                       CASE
                           WHEN m.name = 'assign' THEN (SELECT name FROM mdl_assign WHERE id = a.instance)
                           WHEN m.name = 'chat' THEN (SELECT name FROM mdl_chat WHERE id = a.instance)
                           WHEN m.name = 'choice' THEN (SELECT name FROM mdl_choice WHERE id = a.instance)
                           WHEN m.name = 'data' THEN (SELECT name FROM mdl_data WHERE id = a.instance)
                           WHEN m.name = 'feedback' THEN (SELECT name FROM mdl_feedback WHERE id = a.instance)
                           WHEN m.name = 'forum' THEN (SELECT name FROM mdl_forum WHERE id = a.instance)
                           WHEN m.name = 'glossary' THEN (SELECT name FROM mdl_glossary WHERE id = a.instance)
                           WHEN m.name = 'lesson' THEN (SELECT name FROM mdl_lesson WHERE id = a.instance)
                           WHEN m.name = 'quiz' THEN (SELECT name FROM mdl_quiz WHERE id = a.instance)
                           WHEN m.name = 'resource' THEN (SELECT name FROM mdl_resource WHERE id = a.instance)
                           WHEN m.name = 'scorm' THEN (SELECT name FROM mdl_scorm WHERE id = a.instance)
                           WHEN m.name = 'survey' THEN (SELECT name FROM mdl_survey WHERE id = a.instance)
                           WHEN m.name = 'wiki' THEN (SELECT name FROM mdl_wiki WHERE id = a.instance)
                           WHEN m.name = 'workshop' THEN (SELECT name FROM mdl_workshop WHERE id = a.instance)
                           WHEN m.name = 'book' THEN (SELECT name FROM mdl_book WHERE id = a.instance)
                           WHEN m.name = 'folder' THEN (SELECT name FROM mdl_folder WHERE id = a.instance)
                           WHEN m.name = 'page' THEN (SELECT name FROM mdl_page WHERE id = a.instance)
                           WHEN m.name = 'url' THEN (SELECT name FROM mdl_url WHERE id = a.instance)
                           WHEN m.name = 'h5pactivity' THEN (SELECT name FROM mdl_h5pactivity WHERE id = a.instance)
                           WHEN m.name = 'ompdf' THEN (SELECT name FROM mdl_ompdf WHERE id = a.instance)
                           ELSE 'Unknown Module'
                           END name,
                       g.grademax,
                       g.gradepass,
                       g.grademin,
                       cat.id categoryid,
                       cat.name categoryname
                from mdl_course_modules a
                    left join mdl_modules m on m.id = a.module
                    left join mdl_course c on c.id = a.course
                     left join mdl_grade_items g on g.itemmodule = m.name and g.iteminstance = a.instance
                    left join mdl_course_categories cat on cat.id = c.category
                where a.deletioninprogress = '0' 
                    ".($moduleid ? " and a.id = :moduleid " : " " )."
                    ".($modulename ? " and m.name = :modulename " : " " )."
                    ".($courseid ? " and c.id = :courseid " : " " )."
                    ".($idnumber ? " and a.idnumber = :idnumber " : " " )."
                    ".($categoryid ? " and c.category = :categoryid " : " " )."
                 ",
            $sql_params,
            $start,$length
        );

        foreach($sub_contents as $content){
            $array_cm[] = [
                'cmid' => $content->id,
                'title' => $content->name,
                'url' => $CFG->fronturl."/mod/{$content->modname}/view.php?id={$content->id}",
                'modulename' => $content->modname,
                'courseid' => $content->course_id,
                'idnumber' => $content->idnumber,
                'coursename' => $content->course_fullname,
                'categoryid' => $content->categoryid,
                'categoryname' => $content->categoryname,
                'gradepass' => (float) $content->gradepass ,
                'grademax' => (float) $content->grademax
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
                        'coursename' => new external_value(PARAM_RAW, '',VALUE_DEFAULT,null),
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
//           $exists = self::get_course_module(null,$module_exists,null,null,null,null,null,null);
//           $course_exists = array_column($exists['data'], 'courseid');
//
//            echo print_r($course_exists);
//            die();
            $sql_params = [
                'modulename' => $module_exists,
            ];

            /**  GET LIST COURSE dg MODULE EXIST */
            $sub_contents = $DB->get_records_sql("SELECT distinct course -- get module sesuai tipe yg dicari
                            from mdl_course_modules
                            where module =
                                  (SELECT mdl_modules.id -- get id module yg dicari
                                            FROM mdl_modules
                                            WHERE name = :modulename)",$sql_params);
            $course_exists = array_keys(($sub_contents));
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
            // jika tidak ada paramss
            else {
                $thisCourse = core_course_external::get_courses_by_field();
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
