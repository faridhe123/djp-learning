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