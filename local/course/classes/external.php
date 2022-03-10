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

defined('MOODLE_INTERNAL') || die;

use core_course\external\course_summary_exporter;
use core_availability\info;

require_once("$CFG->libdir/externallib.php");
require_once(__DIR__ . "/lib.php");

/**
 * Local Course external functions
 *
 * @package    local_course
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */
class local_course_external extends external_api {

    public static function test_parameters() {
        return new external_function_parameters(
            array(
                'param_text' => new external_value(PARAM_TEXT, 'CONTOH PARAMS TIPE TEXT', VALUE_REQUIRED, 'ABC', NULL_NOT_ALLOWED),
                'param_int' => new external_value(PARAM_INT, 'CONTOH PARAMS TIPE INTEGER', VALUE_REQUIRED, 1, NULL_NOT_ALLOWED)
            )
        );
    }

    public static function test($param_text,$param_int) {
        $params = self::validate_parameters(self::test_parameters(),
            array(
                'param_text' => $param_text,
                'param_int' => $param_int
            ));

        $result = array();
        $result['status'] = 'OKE ' . $params['param_text'] . ' - '. $params['param_int'] ;
        $result['pesan'] = 'INI TEST';

        return $result;
    }

    public static function test_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_TEXT, 'TEST'),
                'pesan' => new external_value(PARAM_TEXT, 'TEST'),
            )
        );
    }

    /**
     * Returns description of method parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function create_courses_parameters() {
        $courseconfig = get_config('moodlecourse'); //needed for many default values
        return new external_function_parameters(
            array(
                'courses' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'fullname' => new external_value(PARAM_TEXT, 'full name'),
                            'shortname' => new external_value(PARAM_TEXT, 'course short name'),
                            'categoryid' => new external_value(PARAM_INT, 'category id'),
                            'idnumber' => new external_value(PARAM_RAW, 'id number', VALUE_OPTIONAL),
                            'summary' => new external_value(PARAM_RAW, 'summary', VALUE_OPTIONAL),
                            'summaryformat' => new external_format_value('summary', VALUE_DEFAULT),
                            'format' => new external_value(PARAM_PLUGIN,
                                'course format: weeks, topics, social, site,..',
                                VALUE_DEFAULT, $courseconfig->format),
                            'showgrades' => new external_value(PARAM_INT,
                                '1 if grades are shown, otherwise 0', VALUE_DEFAULT,
                                $courseconfig->showgrades),
                            'newsitems' => new external_value(PARAM_INT,
                                'number of recent items appearing on the course page',
                                VALUE_DEFAULT, $courseconfig->newsitems),
                            'startdate' => new external_value(PARAM_INT,
                                'timestamp when the course start', VALUE_OPTIONAL),
                            'enddate' => new external_value(PARAM_INT,
                                'timestamp when the course end', VALUE_OPTIONAL),
                            'numsections' => new external_value(PARAM_INT,
                                '(deprecated, use courseformatoptions) number of weeks/topics',
                                VALUE_OPTIONAL),
                            'maxbytes' => new external_value(PARAM_INT,
                                'largest size of file that can be uploaded into the course',
                                VALUE_DEFAULT, $courseconfig->maxbytes),
                            'showreports' => new external_value(PARAM_INT,
                                'are activity report shown (yes = 1, no =0)', VALUE_DEFAULT,
                                $courseconfig->showreports),
                            'visible' => new external_value(PARAM_INT,
                                '1: available to student, 0:not available', VALUE_OPTIONAL),
                            'hiddensections' => new external_value(PARAM_INT,
                                '(deprecated, use courseformatoptions) How the hidden sections in the course are displayed to students',
                                VALUE_OPTIONAL),
                            'groupmode' => new external_value(PARAM_INT, 'no group, separate, visible',
                                VALUE_DEFAULT, $courseconfig->groupmode),
                            'groupmodeforce' => new external_value(PARAM_INT, '1: yes, 0: no',
                                VALUE_DEFAULT, $courseconfig->groupmodeforce),
                            'defaultgroupingid' => new external_value(PARAM_INT, 'default grouping id',
                                VALUE_DEFAULT, 0),
                            'enablecompletion' => new external_value(PARAM_INT,
                                'Enabled, control via completion and activity settings. Disabled,
                                        not shown in activity settings.',
                                VALUE_OPTIONAL),
                            'completionnotify' => new external_value(PARAM_INT,
                                '1: yes 0: no', VALUE_OPTIONAL),
                            'lang' => new external_value(PARAM_SAFEDIR,
                                'forced course language', VALUE_OPTIONAL),
                            'forcetheme' => new external_value(PARAM_PLUGIN,
                                'name of the force theme', VALUE_OPTIONAL),
                            'courseformatoptions' => new external_multiple_structure(
                                new external_single_structure(
                                    array('name' => new external_value(PARAM_ALPHANUMEXT, 'course format option name'),
                                        'value' => new external_value(PARAM_RAW, 'course format option value')
                                    )),
                                'additional options for particular course format', VALUE_OPTIONAL),
                            'customfields' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'shortname'  => new external_value(PARAM_ALPHANUMEXT, 'The shortname of the custom field'),
                                        'value' => new external_value(PARAM_RAW, 'The value of the custom field'),
                                    )), 'custom fields for the course', VALUE_OPTIONAL
                            )
                        )), 'courses to create'
                )
            )
        );
    }

    /**
     * Create  courses
     *
     * @param array $courses
     * @return array courses (id and shortname only)
     * @since Moodle 2.2
     */
    public static function create_courses($courses) {
        global $CFG, $DB;
        require_once($CFG->dirroot . "/course/lib.php");
        require_once($CFG->libdir . '/completionlib.php');

        $params = self::validate_parameters(self::create_courses_parameters(),
            array('courses' => $courses));

        $availablethemes = core_component::get_plugin_list('theme');
        $availablelangs = get_string_manager()->get_list_of_translations();

        $transaction = $DB->start_delegated_transaction();

        foreach ($params['courses'] as $course) {

            // Ensure the current user is allowed to run this function
            $context = context_coursecat::instance($course['categoryid'], IGNORE_MISSING);
            try {
                self::validate_context($context);
            } catch (Exception $e) {
                $exceptionparam = new stdClass();
                $exceptionparam->message = $e->getMessage();
                $exceptionparam->catid = $course['categoryid'];
                throw new moodle_exception('errorcatcontextnotvalid', 'webservice', '', $exceptionparam);
            }
            require_capability('moodle/course:create', $context);

            // Fullname and short name are required to be non-empty.
            if (trim($course['fullname']) === '') {
                throw new moodle_exception('errorinvalidparam', 'webservice', '', 'fullname');
            } else if (trim($course['shortname']) === '') {
                throw new moodle_exception('errorinvalidparam', 'webservice', '', 'shortname');
            }

            // Make sure lang is valid
            if (array_key_exists('lang', $course)) {
                if (empty($availablelangs[$course['lang']])) {
                    throw new moodle_exception('errorinvalidparam', 'webservice', '', 'lang');
                }
                if (!has_capability('moodle/course:setforcedlanguage', $context)) {
                    unset($course['lang']);
                }
            }

            // Make sure theme is valid
            if (array_key_exists('forcetheme', $course)) {
                if (!empty($CFG->allowcoursethemes)) {
                    if (empty($availablethemes[$course['forcetheme']])) {
                        throw new moodle_exception('errorinvalidparam', 'webservice', '', 'forcetheme');
                    } else {
                        $course['theme'] = $course['forcetheme'];
                    }
                }
            }

            //force visibility if ws user doesn't have the permission to set it
            $category = $DB->get_record('course_categories', array('id' => $course['categoryid']));
            if (!has_capability('moodle/course:visibility', $context)) {
                $course['visible'] = $category->visible;
            }

            //set default value for completion
            $courseconfig = get_config('moodlecourse');
            if (completion_info::is_enabled_for_site()) {
                if (!array_key_exists('enablecompletion', $course)) {
                    $course['enablecompletion'] = $courseconfig->enablecompletion;
                }
            } else {
                $course['enablecompletion'] = 0;
            }

            $course['category'] = $course['categoryid'];

            // Summary format.
            $course['summaryformat'] = external_validate_format($course['summaryformat']);

            if (!empty($course['courseformatoptions'])) {
                foreach ($course['courseformatoptions'] as $option) {
                    $course[$option['name']] = $option['value'];
                }
            }

            // Custom fields.
            if (!empty($course['customfields'])) {
                foreach ($course['customfields'] as $field) {
                    $course['customfield_'.$field['shortname']] = $field['value'];
                }
            }

            //Note: create_course() core function check shortname, idnumber, category
            $course['id'] = create_course((object) $course)->id;

            $resultcourses[] = array('id' => $course['id'], 'shortname' => $course['shortname']);
        }

        $transaction->allow_commit();

        return $resultcourses;
    }

    /**
     * Returns description of method result value
     *
     * @return external_description
     * @since Moodle 2.2
     */
    public static function create_courses_returns() {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id'       => new external_value(PARAM_INT, 'course id'),
                    'shortname' => new external_value(PARAM_RAW, 'short name'),
                )
            )
        );
    }
}
