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
 * Quiz external API
 *
 * @package    mod_quiz
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */

require_once($CFG->libdir . '/externallib.php');

// add local class
require_once($CFG->dirroot . '/local/files/classes/external.php');
require_once($CFG->dirroot . '/local/module/classes/external.php');

require_once($CFG->dirroot . '/course/externallib.php');


defined('MOODLE_INTERNAL') || die;

class local_one_api_external extends external_api {

    /**
     * TEST PARAMETER
     *
     */
//    public static function create_parameters() {
//        return new external_function_parameters(
//            array(
//                'fullname' => new external_value(PARAM_TEXT, 'full name'),
//                'shortname' => new external_value(PARAM_TEXT, 'course short name'),
//                'categoryid' => new external_value(PARAM_TEXT, 'category id'),
//                'idnumber' => new external_value(PARAM_RAW, 'id number', VALUE_OPTIONAL),
//                'summary' => new external_value(PARAM_RAW, 'summary', VALUE_OPTIONAL),
//                'numsection' => new external_value(PARAM_RAW, 'summary', VALUE_OPTIONAL),
//            )
//        );
//    }

    public static function create_parameters() {
        return new external_function_parameters(
            array(
                'courses' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'fullname' => new external_value(PARAM_TEXT, 'full name'),
                            'shortname' => new external_value(PARAM_TEXT, 'course short name'),
                            'categoryid' => new external_value(PARAM_TEXT, 'Pilih satu, ID atau NAME', VALUE_OPTIONAL),
                            'categoryname' => new external_value(PARAM_TEXT, 'Pilih satu, ID atau NAME', VALUE_OPTIONAL),
                            'idnumber' => new external_value(PARAM_RAW, 'id number', VALUE_OPTIONAL),
                            'summary' => new external_value(PARAM_RAW, 'summary', VALUE_OPTIONAL),
                            'numsections' => new external_value(PARAM_INT, 'numsections', VALUE_OPTIONAL),
//                            // Input modules
                            'modules' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
//                                        'courseid' => new external_value(PARAM_TEXT, 'full name'), # Ambil dari balikan create course
                                        'section' => new external_value(PARAM_INT,'', VALUE_DEFAULT,1),
                                        'modulename' => new external_value(PARAM_TEXT,''),
                                        'name' => new external_value(PARAM_TEXT,''),
                                        'intro' => new external_value(PARAM_RAW,'',VALUE_OPTIONAL),
                                        'restricted' => new external_value(PARAM_BOOL,'',VALUE_OPTIONAL),
                                        'content' => new external_value(PARAM_RAW,'',VALUE_OPTIONAL),
                                    )),
                                'additional options for particular course format', VALUE_OPTIONAL)
                        )
                    ), 'courses to create'
                ),
            )
        );
    }

    public static function create($courses)
    {
        global $DB, $USER, $CFG;

        $params = self::validate_parameters(self::create_parameters(),
            array('courses' => $courses,));


//        TEST PAKE FUNGSI STATIS
//        $return = local_files_external::upload(null,'course','overviewfiles',null,null,null,null,'course','5');

        $x = 1;
        foreach($params['courses'] as $course) {
            if($course['categoryid']){
                $categoryid = $course['categoryid'];
            } else {
                $category = core_course_external::get_categories([
                    'criteria'=> ['key'=> 'name', 'value'=> $course['categoryname'] ]
                ])[0];
                $categoryid = $category['id'];
            }

            $createdCourse = core_course_external::create_courses([
                'courses' => [
                    'fullname'=> $course['fullname'],
                    'shortname' => $course['shortname'],
                    'categoryid' => $categoryid,
                    'summary' => $course['summary'],
                    'numsections' => $course['numsections'],
                    'idnumber' => $course['idnumber'],
                    'newsitems' => "0",  // Hilangkan announcement
            ]]);

//            $status_course['course_'.$createdCourse['id']] = "Course ".$createdCourse['id']." created!";

            $y = 1;
            foreach($course['modules'] as $module ) {
                $createdModule = local_module_external::create_module(
                    $module['modulename'],
                    $createdCourse[0]['id'],
                    $module['section'],
                    $module['name'],
                    $module['intro'],
                    $module['content'],
                    null
                );
//                $status_course['course_'.$x]['module_'.$y] = "Module $x created!";
                $modules_created[] = [
                    'cmid'=> $createdModule['cmid'],
                    'section'=> $createdModule['section'],
                    'modulename'=> $createdModule['modulename'],
                    'moduleid'=> $createdModule['moduleid'],
                ];
            }

            $course_created[] = [
                'id' => $createdCourse[0]['id'],
                'shortname' => $createdCourse[0]['shortname'],
                'idnumber' => $course['idnumber'],
                'modules' => $modules_created,
            ];

        }

        return $course_created;
    }

    public static function create_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id'       => new external_value(PARAM_INT, 'course id'),
                    'shortname' => new external_value(PARAM_RAW, 'short name'),
                    'idnumber' => new external_value(PARAM_RAW, 'idnumber name'),
                    'modules' => new external_multiple_structure(
                        new external_single_structure(
                            array(
                               'cmid'=>new external_value(PARAM_INT, 'course id'),
                               'section'=>new external_value(PARAM_INT, 'nama modul'),
                               'modulename'=>new external_value(PARAM_RAW, 'jenis modul'),
                               'moduleid'=>new external_value(PARAM_INT, 'jenis modul'),
                            ))))));
    }

    /**
     * TEST PARAMETER
     *
     */
    public static function test_parameters() {
        return new external_function_parameters(
            array(
                'parameter' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
            )
        );
    }

    public static function test($parameter)
    {
        global $DB, $USER, $CFG;

//        TEST PAKE FUNGSI STATIS
//        $return = local_files_external::upload(null,'course','overviewfiles',null,null,null,null,'course','5');
        $course = core_course_external::create_courses(['courses' => [
            'fullname'=> 'test TOBE DELETED2',
            'shortname' => 'test TOBE DELETED2',
            'categoryid' => '1',
            'summary' => 'this is summary',
            'numsections' => '1',
        ] ]);

        $module = local_module_external::create_module(
            'h5pactivity',
            $course[0]['id'],
            1,
            'MODULE TOBE DELETED2',
            'INTRO',
            null,
            null
        );

        $params = self::validate_parameters(self::test_parameters(),
            array(
                'parameter' => $parameter,
            )
        );

        return ['value'=> var_dump($module)];
    }

    public static function test_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }

}