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
require_once($CFG->dirroot . '/lib/gradelib.php');

require_once($CFG->dirroot . '/completion/classes/external.php');
require_once($CFG->dirroot . '/grade/report/user/externallib.php');
require_once($CFG->dirroot . '/mod/feedback/classes/external.php');

class local_course_external extends external_api {

    /**
     * TEST PARAMETER
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
//    public static function manual_enrol_users_parameters() {
//        return new external_function_parameters(
//            array(
//                'parameter' => new external_value(PARAM_TEXT, 'context id', VALUE_OPTIONAL, "INI DEFAULT VALUE NYA"),
//            )
//        );
//    }
    /*TEST FUNCTION*/
//    public static function manual_enrol_users($parameter)
//    {
//        $params = self::validate_parameters(self::manual_enrol_users_parameters(),
//            array(
//                'parameter' => $parameter,
//            ));
//
//        return ['value' => var_dump($params)];
//    }
    /*TEST RETURN*/
//    public static function manual_enrol_users_returns() {
//        return new external_single_structure(
//            array(
//                'value' => new external_value(PARAM_TEXT, ''),
//            )
//        );
//    }

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
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
        $modules = $DB->get_records('course_modules',$db_params,'id '.($sort??'desc'),'*',$start,$length);
        foreach($modules as $module){
            $cm = get_coursemodule_from_id(null, $module->id, 0, true, MUST_EXIST);
            $course = $DB->get_record('course', array('id' => $cm->course));
            $category = core_course_category::get($course->category);
//            $array_cm[] = $cm;
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
//        var_dump($array_cm);die('oke');

        if(!$array_cm) {
            $array_cm = [];
        }

        $recordsFiltered = count($array_cm);

//        echo "<pre>",print_r($array_cm);die();

        return [
            'data' => $array_cm,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered
        ];


//        return ['__TEST'=> '<pre>',var_dump($courseid)];

//        return ['__TEST'=> ($moduleid??'kosong')];
    }

//    public static function get_grade_completion_returns() {
//        return new external_single_structure(
//            array(
//                'value' => new external_value(PARAM_TEXT, ''),
//            )
//        );
//    }

    /**
     * Returns description of method result value.
     *
     * @return null
     * @since Moodle 2.2
     */
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
//                'modname' => new external_value(PARAM_TEXT, '',VALUE_OPTIONAL),
            )
        );
    }

}
