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
 * @package    mod_user
 * @category   external
 * @copyright  2022 Muhammad Dhea Farizka <farizkadhea@gmail.com>
 */

defined('MOODLE_INTERNAL') || die;

//require_once("../../../config.php");
/*CORE LIB*/
require_once($CFG->libdir . '/externallib.php');
require_once($CFG->libdir.'/filelib.php');
require_once($CFG->libdir . '/gradelib.php');
require_once($CFG->libdir . '/completionlib.php');
require_once($CFG->libdir . '/plagiarismlib.php');

/*MOD LIB*/
require_once($CFG->dirroot . '/mod/page/locallib.php');
require_once($CFG->dirroot . '/course/modlib.php');
require_once($CFG->dirroot . '/question/editlib.php');
require_once($CFG->dirroot . '/mod/quiz/locallib.php');


/**
 * Quiz external functions
 *
 * @package    mod_quiz
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */
class local_user_external extends external_api {

    /**
     * TEST PARAMETER
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function get_users_by_field_parameters() {
        return new external_function_parameters(
            array(
                'parameter' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_users_by_field($parameter)
    {
        return ['value' => var_dump("TEST")];
    }


    public static function test_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }
}
