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

//require_once("../../../config.php");
require_once($CFG->libdir . '/externallib.php');
require_once($CFG->libdir.'/filelib.php');
require_once($CFG->dirroot . '/mod/page/locallib.php');
require_once($CFG->dirroot . '/course/modlib.php');

/**
 * Quiz external functions
 *
 * @package    mod_quiz
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */
class local_module_external extends external_api {

    /**
     * TEST PARAMETER
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
//    public static function create_page_module_parameters() {
//        return new external_function_parameters(
//            array(
//                'parameter' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
//            )
//        );
//    }

    /**
     * CREATE PAGE PARAMETER
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function create_page_module_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'section' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'name' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'intro' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'content' => new external_value(PARAM_RAW, 'context id', VALUE_DEFAULT, null),
            )
        );
    }



    public static function create_page_module($courseid,$section,$name,$intro,$content) {
        global $DB, $USER,$CFG;

        # hardcode parameter
//        $courseid = 33;
        $module = 'page';
//        $section = 1;


//
//        $params = self::validate_parameters(self::create_page_module_parameters(),
//            array(
//                'parameter' => $parameter,
//            ));

        $params = self::validate_parameters(self::create_page_module_parameters(),
            array(
                'courseid' => $courseid,
                'section' => $section,
                'name' => $name,
                'intro' => $intro,
                'content' => $content,
            ));

        /*TEST AREA START*/

        $course = $DB->get_record('course', array('id'=>$params['courseid']), '*', MUST_EXIST);
        $courseformat = course_get_format($course);
        $maxsections = $courseformat->get_max_sections();

        # Apakah section sesuai
//        if ($section > $maxsections) {
//            throw new \core\session\exception("INVALID_SECTION");
//        }

        list($module, $context, $cw, $cm, $data) = prepare_new_moduleinfo_data($course, $module, $section);
        $sectionname = get_section_name($course, $cw);
        $fullmodulename = get_string('modulename', $module->name);

        $pageheading = get_string('addinganew', 'moodle', $fullmodulename);

        $navbaraddition = $pageheading;

        $pagepath = 'mod-' . $module->name . '-';
        $pagepath .= 'mod';

        $modmoodleform = "$CFG->dirroot/mod/$module->name/mod_form.php";
        if (file_exists($modmoodleform)) {
            require_once($modmoodleform);
        } else {
            print_error('noformdesc');
        }

        $mformclassname = 'mod_'.$module->name.'_mod_form';
        $mform = new $mformclassname($data, $cw->section, $cm, $course);
        $mform->set_data($data);

        /* Mulai Input Data */

        /* Coba buat POST Hardcode */
//        $_POST = [
//            'display' => "5",
//            'completionunlocked' => "1",
//            'course' => "2",
//            'coursemodule' => "",
//            'section' => "2",
//            'module' => "16",
//            'modulename' => "page",
//            'instance' => "",
//            'add' => "page",
//            'update' => "0",
//            'return' => "0",
//            'sr' => "0",
//            'revision' => "1",
//            'sesskey' => "epGJOwerq5",
//            '_qf__mod_page_mod_form' => "1",
//            'mform_isexpanded_id_general' => "1",
//            'mform_isexpanded_id_contentsection' => "1",
//            'mform_isexpanded_id_appearancehdr' => "0",
//            'mform_isexpanded_id_modstandardelshdr' => "0",
//            'mform_isexpanded_id_availabilityconditionsheader' => "0",
//            'mform_isexpanded_id_activitycompletionheader' => "0",
//            'mform_isexpanded_id_tagshdr' => "0",
//            'mform_isexpanded_id_competenciessection' => "0",
//            'name' => "XDEBUG TEST",
//            'introeditor' => [
//                'text' => '<p dir=>"ltr" style=>"text-align: left;">XDEBUG TEST<br></p>',
//                'format' => "1",
//                'itemid' => "399597115",
//            ],
//            'showdescription' => "0",
//            'page' => [
//                'text' => '<p dir=>"ltr" style=>"text-align: left;">XDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TESTXDEBUG TEST<br></p>',
//                'format' => "1",
//                'itemid' => "798293012",
//            ],
//            'printheading' => "1",
//            'printintro' => "0",
//            'printlastmodified' => "1",
//            'visible' => "1",
//            'cmidnumber' => "",
//            'availabilityconditionsjson' => '{"op":"&","c":[],"showc":[]}',
//            'completion' => "1",
//            'tags' => "_qf__force_multiselect_submission",
//            'competencies' => "_qf__force_multiselect_submission",
//            'competency_rule' => "0",
//            'submitbutton' => "Save and display"
//        ];

        // MANUAL FROMFORM

        $data = (object) [
            'name' => $params['name'],
            'introeditor' => [
//                'text' => '<p dir=>"ltr" style=>"text-align: left;">DESC DEBUG</p>',
                'text' => $params['intro'],
                'format' => "1",
//                'itemid' => 103621196
            ],
            'showdescription' => "0",
            'page' => [
//                'text' => '<p dir=>"ltr" style=>"text-align: left;">CONTENT DEBUG</p>',
                'text' => $params['content'],
                'format' => "1",
//                'itemid' => 892530102
            ],
            'display' => 5,
            'printheading' => "1",
            'printintro' => "0",
            'printlastmodified' => "1",
            'visible' => 1,
            'visibleoncoursepage' => 1,
            'cmidnumber' => "",
            'availabilityconditionsjson' => '{"op":"&","c":[],"showc":[]}',
            'completionunlocked' => 1,
            'completion' => "1",
            'completionexpected' => 0,
            'tags' => array(),
            'course' => 30,
            'coursemodule' => 0,
            'section' => $params['section'],
            'module' => 16,
            'modulename' => "page",
            'instance' => 0,
            'add' => "page",
            'update' => 0,
            'return' => 0,
            'sr' => 0,
//            'competencies' => [0],
//            'competency_rule' => "0",
            'submitbutton2' => "Save and return to course",
            'revision' => 1,
        ];

//        $fromform = $mform->get_data();

        /* TEST AREA END */

//        return ['value'=> var_dump(get_class_methods($mform))];

        $fromform = add_moduleinfo($data, $course,$mform);

        return ['value'=> var_dump($fromform)];
    }

    /**
     * TEST RETURNS
     */
    public static function create_page_module_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }
}
