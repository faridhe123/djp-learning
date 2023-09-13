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
                'fullname' => new external_value(PARAM_TEXT, 'full name'),
                'shortname' => new external_value(PARAM_TEXT, 'course short name'),
                'categoryid' => new external_value(PARAM_TEXT, 'Pilih satu, ID atau NAME', VALUE_DEFAULT,null),
                'categoryname' => new external_value(PARAM_TEXT, 'Pilih satu, ID atau NAME', VALUE_DEFAULT,null),
                'idnumber' => new external_value(PARAM_RAW, 'id number', VALUE_DEFAULT,null),
                'summary' => new external_value(PARAM_RAW, 'summary', VALUE_DEFAULT,null),
                'numsections' => new external_value(PARAM_INT, 'numsections', VALUE_DEFAULT,null),
                'section' => new external_value(PARAM_INT,'', VALUE_DEFAULT,1),
                'modulename' => new external_value(PARAM_TEXT,''),
                'name' => new external_value(PARAM_TEXT,''),
                'intro' => new external_value(PARAM_RAW,'',VALUE_DEFAULT,null),
                'restricted' => new external_value(PARAM_BOOL,'',VALUE_DEFAULT,0),
                'content' => new external_value(PARAM_RAW,'',VALUE_DEFAULT,null),
            )
        );
    }

    public static function create(
        $fullname,
        $shortname,
        $categoryid = null,
        $categoryname = null,
        $idnumber = null,
        $summary = null,
        $numsections = null,
        $section = null,
        $modulename = null,
        $name = null,
        $intro = null,
        $restricted = null,
        $content = null
    )
    {
        global $DB, $USER, $CFG;
        $params = self::validate_parameters(self::create_parameters(),
            array(
                'fullname'=> $fullname,
                'shortname' => $shortname,
                'categoryid' => $categoryid,
                'categoryname' => $categoryname,
                'idnumber' => $idnumber,
                'summary' => $summary,
                'numsections' => $numsections,
                'section' => $section,
                'modulename' => $modulename,
                'name' => $name,
                'intro' => $intro,
                'restricted' => $restricted,
                'content' => $content,
                )
        );

        if($params['categoryid']){
            $categoryid = $params['categoryid'];
        } else {
            $category = core_course_external::get_categories([
                'criteria'=> ['key'=> 'name', 'value'=> $params['categoryname'] ]
            ])[0];
            $categoryid = $category['id'];
        }

        try {
            $createdCourse = core_course_external::create_courses([
                'courses' => [
                    'fullname'=> $params['fullname'],
                    'shortname' => $params['shortname'],
                    'categoryid' => $categoryid,
                    'summary' => $params['summary'],
                    'numsections' => $params['numsections'],
                    'idnumber' => $params['idnumber'],
                    'newsitems' => "0",  // Hilangkan announcement
                ]]);


        } catch(Exception $e) {
            return [
                'id' => null,
                'message' => '(Error Create Course) '.get_class($e). ' : '.  $e->getMessage()
            ];
        }

        try {
            $createdModule = local_module_external::create_module(
                $params['modulename'],
                $createdCourse[0]['id'],
                $params['section'],
                $params['name'],
                $params['intro'],
                $params['content'],
                $params['restricted']
            );
        } catch(Exception $e) {
            return [
                'id' => null,
                'message' => '(Error Create Module) '.get_class($e). ' : '.  $e->getMessage()
            ];
        }

//        $one_api_created = [
//            'id' => $createdCourse[0]['id'],
//            'shortname' => $createdCourse[0]['shortname'],
//            'idnumber' => $params['idnumber'],
//            'module_cmid'=> $createdModule['cmid'],
//            'module_section'=> $createdModule['section'],
//            'module_modulename'=> $createdModule['modulename'],
//            'module_moduleid'=> $createdModule['moduleid'],
//        ];
        $one_api_created = [
            'id' => $createdCourse[0]['id'],
            'message' => 'success'
        ];

        // ganti gambar overviews
            local_files_external::upload(
                null,
                'course',
                'overviewfiles',
                null,
                null,
                'defautl-thumbnail.jpg',
                null,
                'course',
                $createdCourse[0]['id'],
                $CFG->wwwroot.'/kpdjp.jpg',
            );

        return $one_api_created;
    }

    public static function create_returns() {
        return new external_single_structure(
            array(
                'id' => new external_value(PARAM_INT, 'course id'),
                'message' => new external_value(PARAM_TEXT, 'Penjelasan error'),));
//                'id' => new external_value(PARAM_INT, 'course id'),
//                'shortname' => new external_value(PARAM_RAW, 'short name'),
//                'idnumber' => new external_value(PARAM_RAW, 'idnumber name'),
//                'module_cmid'=>new external_value(PARAM_INT, 'course id'),
//                'module_section'=>new external_value(PARAM_INT, 'nama modul'),
//                'module_modulename'=>new external_value(PARAM_RAW, 'jenis modul'),
//                'module_moduleid'=>new external_value(PARAM_INT, 'jenis modul'),));
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