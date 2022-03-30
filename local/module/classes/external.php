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
     * CREATE MODULE
     *
     * versi lebih ringkas dari fungsi sebelumnya
     */
    public static function create_module_parameters() {
        return new external_function_parameters(
            array(
                'modulename' => new external_value(PARAM_TEXT, 'page, quiz, scorm, h5p', VALUE_DEFAULT, null),
                'courseid' => new external_value(PARAM_INT, 'ID Dari Course', VALUE_DEFAULT, null),
                'section' => new external_value(PARAM_INT, 'urutan section/topic, default: 1', VALUE_DEFAULT, null),
                'name' => new external_value(PARAM_TEXT, 'Nama Module Activity', VALUE_DEFAULT, null),
                'intro' => new external_value(PARAM_RAW, 'Deskripsi dari module yang akan dibuat', VALUE_DEFAULT, null),
                'content' => new external_value(PARAM_RAW, 'Content', VALUE_DEFAULT, null),
            )
        );
    }
    public static function create_module($modulename,$courseid,$section,$name,$intro,$content=null) {
        global $DB, $USER,$CFG;

        $params = self::validate_parameters(self::create_module_parameters(),
            array(
                'modulename' => $modulename,
                'courseid' => $courseid,
                'section' => $section,
                'name' => $name,
                'intro' => $intro,
                'content' => $content,
            ));

        # get course
        $course = $DB->get_record('course', array('id'=>$params['courseid']), '*', MUST_EXIST);
        $courseformat = course_get_format($course);
        $maxsections = $courseformat->get_max_sections();
        # Apakah section sesuai
        if ($section > $maxsections) {
            throw new \core\session\exception("INVALID_SECTION");
        }
        list($module, $context, $cw, $cm, $data) = prepare_new_moduleinfo_data($course, $params['modulename'], $section);
        $modmoodleform = "$CFG->dirroot/mod/$module->name/mod_form.php";
        if (file_exists($modmoodleform)) require_once($modmoodleform);
        else print_error('noformdesc');
        $mformclassname = 'mod_'.$module->name.'_mod_form';
        $mform = new $mformclassname($data, $cw->section, $cm, $course);
        $mform->set_data($data);

        # Switch untuk data form
        switch ($modulename) {
            case 'page':
                $data = self::process_page_data($params['name'],$params['intro'],$params['section'],$params['content']);
                break;
            case 'quiz':
                $data = self::process_quiz_data($params['name'],$params['intro'],$params['section']);
                break;
            case 'scorm':
                $allowed = array('zip');
                $packagefiles = self::process_draft_files($_FILES,$allowed);
                $data = self::process_scorm_data($params['name'],$params['intro'],$params['section'],$packagefiles);
                break;
            case 'h5pactivity':
                $allowed = array('h5p');
                $packagefiles = self::process_draft_files($_FILES,$allowed);
                $data = self::process_h5p_data($params['name'],$params['intro'],$params['section'],$packagefiles);
                break;
            default:
                print_error('Fungsi belum ada');
        }

        # Mulai membuat module berdasarkan data form
        $fromform = add_moduleinfo($data, $course,$mform);

        return ['value'=> var_dump($fromform)];
    }
    public static function create_module_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }

    /**
     * FUNGSI PER MODUL ACTIVITY
     *
     */
    static function process_page_data($name,$intro,$section,$content) {
        $data = (object) [
            # biasa diedit
            'name' => $name,
            'introeditor' => [
                'text' => $intro,
                'format' => "1",
            ],
            'showdescription' => "0",
            'page' => [
                'text' => $content,
                'format' => "1",
            ],
            'section' => $section,
            # Biarkan Default
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
            'tags' => [],
            'course' => 30,
            'coursemodule' => 0,
            'module' => 16,
            'modulename' => "page",
            'instance' => 0,
            'add' => "page",
            'update' => 0,
            'return' => 0,
            'sr' => 0,
            'competencies' => [],
            'competency_rule' => "0",
            'submitbutton2' => "Save and return to course",
            'revision' => 1,
        ];

        return $data;
    }
    static function process_quiz_data($name,$intro,$section) {
        $data = (object) [
            # Biasa diedit
            "name" => $name,
            "introeditor" => [
                "text" => $intro,
                "format" => "1",
            ],
            "section" => $section,

            # Biarkan default
            "showdescription" => "0",
            "timeopen" => 0,
            "timeclose" => 0,
            "timelimit" => 0,
            "overduehandling" => "autosubmit",
            "graceperiod" => 0,
            "gradecat" => "2",
            "gradepass" => null,
            "grade" => 10.0,
            "attempts" => "0",
            "grademethod" => "1",
            "questionsperpage" => "1",
            "navmethod" => "free",
            "shuffleanswers" => "1",
            "preferredbehaviour" => "deferredfeedback",
            "canredoquestions" => "0",
            "attemptonlast" => "0",
            "attemptimmediately" => "1",
            "correctnessimmediately" => "1",
            "marksimmediately" => "1",
            "specificfeedbackimmediately" => "1",
            "generalfeedbackimmediately" => "1",
            "rightanswerimmediately" => "1",
            "overallfeedbackimmediately" => "1",
            "attemptopen" => "1",
            "correctnessopen" => "1",
            "marksopen" => "1",
            "specificfeedbackopen" => "1",
            "generalfeedbackopen" => "1",
            "rightansweropen" => "1",
            "overallfeedbackopen" => "1",
            "showuserpicture" => "0",
            "decimalpoints" => "2",
            "questiondecimalpoints" => "-1",
            "showblocks" => "0",
            "seb_requiresafeexambrowser" => "0",
            "filemanager_sebconfigfile" => 155298126,
            "seb_showsebdownloadlink" => "1",
            "seb_linkquitseb" => "",
            "seb_userconfirmquit" => "1",
            "seb_allowuserquitseb" => "1",
            "seb_quitpassword" => "",
            "seb_allowreloadinexam" => "1",
            "seb_showsebtaskbar" => "1",
            "seb_showreloadbutton" => "1",
            "seb_showtime" => "1",
            "seb_showkeyboardlayout" => "1",
            "seb_showwificontrol" => "0",
            "seb_enableaudiocontrol" => "0",
            "seb_muteonstartup" => "0",
            "seb_allowspellchecking" => "0",
            "seb_activateurlfiltering" => "0",
            "seb_filterembeddedcontent" => "0",
            "seb_expressionsallowed" => "",
            "seb_regexallowed" => "",
            "seb_expressionsblocked" => "",
            "seb_regexblocked" => "",
            "seb_allowedbrowserexamkeys" => "",
            "quizpassword" => "",
            "subnet" => "",
            "delay1" => 0,
            "delay2" => 0,
            "browsersecurity" => "-",
            "boundary_repeats" => 1,
            "feedbacktext" => [
                0 => [
                    "text" => "",
                    "format" => "1",
                    "itemid" => "838518230"
                ],
                1 => [
                    "text" => "",
                    "format" => "1",
                    "itemid" => 31616220
                ]],
            "feedbackboundaries" => [
                0 => ""],
            "visible" => 1,
            "visibleoncoursepage" => 1,
            "cmidnumber" => "",
            "groupmode" => "0",
            "groupingid" => "0",
            "availabilityconditionsjson" => '{"op":"&","c":[],"showc":[]}',
            "completionunlocked" => 1,
            "completion" => "1",
            "completionpass" => 0,
            "completionattemptsexhausted" => 0,
            "completionminattempts" => 0,
            "completionexpected" => 0,
            "tags" => [],
            "course" => 33,
            "coursemodule" => 0,
            "module" => 17,
            "modulename" => "quiz",
            "instance" => 0,
            "add" => "quiz",
            "update" => 0,
            "return" => 0,
            "sr" => 0,
         "competencies" => [],
         "competency_rule" => "0",
            "submitbutton2" => "Save and return to course",
        ];

        return $data;
    }
    static function process_scorm_data($name,$intro,$section,$packagefiles) {
        $data = (object) [
            # UNTUK PARAMETER
            "name" => $name,
            "introeditor" => [
                "text" => $intro,
                "format" => "1"],
            "section" => $section,
            "packagefile" => $packagefiles['itemid'],

            # DEFAULT VALUE
            "showdescription" => "0",
            "mform_isexpanded_id_packagehdr" => 1,
            "scormtype" => "local",
            "updatefreq" => "0",
            "popup" => "0",
            "width" => "100",
            "height" => "500",
            "displayactivityname" => "1",
            "skipview" => "0",
            "hidebrowse" => "0",
            "displaycoursestructure" => "0",
            "hidetoc" => "0",
            "nav" => "1",
            "navpositionleft" => "-100",
            "navpositiontop" => "-100",
            "displayattemptstatus" => "1",
            "timeopen" => 0,
            "timeclose" =>  0,
            "grademethod" => "1",
            "maxgrade" => "100",
            "maxattempt" => "0",
            "whatgrade" => "0",
            "forcenewattempt" => "0",
            "lastattemptlock" => "0",
            "forcecompleted" => "0",
            "auto" => "0",
            "autocommit" => "0",
            "masteryoverride" => "1",
            "datadir" => "",
            "pkgtype" => "",
            "launch" => "",
            "redirect" => "no",
            "redirecturl" => "http://localhost/djp-learning-git/mod/scorm/view.php?id=",
            "visible" => 1,
            "visibleoncoursepage" => 1,
            "cmidnumber" => "",
            "groupmode" => "0",
            "groupingid" => "0",
            "availabilityconditionsjson" => '{"op":"&","c":[],"showc":[]}',
            "completionunlocked" =>  1,
            "completion" => "1",
            "completionscorerequired" => null,
            "completionexpected" => 0,
            "tags" => [],
            "course" => 33,
            "coursemodule" => 0,
            "module" => 19,
            "modulename" => "scorm",
            "instance" => 0,
            "add" => "scorm",
            "update" => 0,
            "return" => 0,
            "sr" => 0,
            "competencies" => [],
            "competency_rule" => "0",
            "submitbutton2" => "Save and return to course",
            "completionstatusrequired" => null,
        ];

        return $data;
    }
    static function process_h5p_data($name,$intro,$section,$packagefiles) {
        $data = (object) [
             "name" => $name,
             "introeditor" => [
              "text" => $intro,
              "format" => "1",
              "itemid" => 3167154],
             "section" => $section,
            "packagefile" => $packagefiles['itemid'],
            "showdescription" => "0",
             "grade" => 100,
             "grade_rescalegrades" => null,
             "gradecat" => "2",
             "gradepass" => 70.0,
             "enabletracking" => "1",
             "grademethod" => "1",
             "reviewmode" => "1",
             "visible" => 1,
             "visibleoncoursepage" => 1,
             "cmidnumber" => "",
             "groupmode" => "0",
             "groupingid" => "0",
             "availabilityconditionsjson" => '{"op":"&","c":[{"type":"completion","cm":-1,"e":1}],"showc":[true]}',
             "completionunlocked" => 1,
             "completion" => "2",
             "completionusegrade" => "1",
             "completionexpected" => 0,
             "tags" => [],
             "course" => 33,
             "coursemodule" => 0,
             "module" => 11,
             "modulename" => "h5pactivity",
             "instance" => 0,
             "add" => "h5pactivity",
             "update" => 0,
             "return" => 0,
             "sr" => 0,
             "competencies" => [],
             "competency_rule" => "0",
             "submitbutton2" => "Save and return to course",
             "displayoptions" => 15,
        ];

        /* VERSI SIMPLE DATA

        $data = (object) [
             "name" => $name,
             "introeditor" => [
              "text" => $intro,
              "format" => "1",
              "itemid" => 845194538],
            "section" => $section,
            "packagefile" => $packagefiles,
            "showdescription" => "0",
            "grade" => 100,
            "grade_rescalegrades" => null,
            "gradecat" => "2",
            "gradepass" => 70.0, #### null,
            "enabletracking" => "1",
            "grademethod" => "1",
            "reviewmode" => "1",
            "visible" => 1,
            "visibleoncoursepage" => 1,
            "cmidnumber" => "",
            "groupmode" => "0",
            "groupingid" => "0",

            # ternyata ini, harus ada permission view restricted activity
            "availabilityconditionsjson" => '{"op":"&","c":[{"type":"completion","cm":-1,"e":1}],"showc":[true]}', ###  '{"op":"&","c":[],"showc":[]}',
            "completionunlocked" => 1,
            "completion" => "1",
            "completionexpected" => 0,
            "tags" => [],
            "course" => 33,
            "coursemodule" => 0,
             "module" => 11,
             "modulename" => "h5pactivity",
             "instance" => 0,
             "add" => "h5pactivity",
             "update" => 0,
             "return" => 0,
             "sr" => 0,
             "competencies" => [],
             "competency_rule" => "0",
             "submitbutton" => "Save and display",
             "displayoptions" => 15,
        ];*/

        return $data;
    }

    /**
     * BUAT DRAFT FILE
     *
     */
    static function process_draft_files($files,$allowed) {

        # Hanya menerima file ZIP
        $ext = pathinfo($files['file']['name'], PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            print_error("Ekstensi file tidak seuai !");
        }

        global $DB, $USER,$CFG;

        // Saving file.
        $dir = make_temp_directory('wsupload').'/';
        $elname = 'file';
        $filename = $_FILES[$elname]['name'];

        if (file_exists($dir.$filename)) $savedfilepath = $dir.uniqid('m').$filename;
        else $savedfilepath = $dir.$filename;
        file_put_contents($savedfilepath, file_get_contents($_FILES[$elname]['tmp_name']));
        @chmod($savedfilepath, $CFG->filepermissions);

        $filepath = '/';
        $context = context_user::instance($USER->id);
        $component = 'user';
        $filearea = 'draft';
        $itemid = file_get_unused_draft_itemid();
        $browser = get_file_browser();

        // Move file to filepool.
        if ($dir = $browser->get_file_info($context, $component, $filearea, $itemid, $filepath, '.')) {
            $info = $dir->create_file_from_pathname($filename, $savedfilepath);
            $params = $info->get_params();
            unlink($savedfilepath);
            return array(
                'contextid'=>$params['contextid'],
                'component'=>$params['component'],
                'filearea'=>$params['filearea'],
                'itemid'=>$params['itemid'],
                'filepath'=>$params['filepath'],
                'filename'=>$params['filename'],
                'url'=>$info->get_url()
            );
        } else {
            throw new moodle_exception('nofile');
        }
    }

    /**
     * CREATE QUESTION
     *
     */
    public static function create_question_parameters() {
        return new external_function_parameters(
            array(
                'parameter' => new external_value(PARAM_TEXT, 'test parameter', VALUE_DEFAULT, null),
            )
        );
    }
    public static function create_question($parameter) {
        global $DB, $USER,$CFG;

        $params = self::validate_parameters(self::create_question_parameters(),
            array(
                'parameter' => $parameter,
            ));

        return ['value'=> var_dump($params)];
    }
    public static function create_question_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }

    /**
     * CREATE PAGE MODULE
     *
     */
    public static function create_page_module_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'section' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'name' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'intro' => new external_value(PARAM_RAW, 'context id', VALUE_DEFAULT, null),
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
    public static function create_page_module_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }

    /**
     * CREATE QUIZ MODULE
     *
     */
    public static function create_quiz_module_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'section' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'name' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'intro' => new external_value(PARAM_RAW, 'context id', VALUE_DEFAULT, null),
            )
        );
    }
    public static function create_quiz_module($courseid,$section,$name,$intro) {
        global $DB, $USER,$CFG;

        # hardcode parameter
//        $courseid = 33;
        $module = 'quiz';
//        $section = 1;

//        $params = self::validate_parameters(self::create_quiz_module_parameters(),
//            array(
//                'parameter' => $parameter,
//            ));

        $params = self::validate_parameters(self::create_page_module_parameters(),
            array(
                'courseid' => $courseid,
                'section' => $section,
                'name' => $name,
                'intro' => $intro,
            ));

        $course = $DB->get_record('course', array('id'=>$params['courseid']), '*', MUST_EXIST);
        $courseformat = course_get_format($course);
        $maxsections = $courseformat->get_max_sections();

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

//        return ['value'=> var_dump($mform)];

        $data = (object) [
         "name" => $params['name'],
         "introeditor" => [
          "text" => $params['intro'],
          "format" => "1",
//          "itemid" => 82087916,
             ],
         "showdescription" => "0",
         "timeopen" => 0,
         "timeclose" => 0,
         "timelimit" => 0,
         "overduehandling" => "autosubmit",
         "graceperiod" => 0,
         "gradecat" => "2",
         "gradepass" => null,
         "grade" => 10.0,
         "attempts" => "0",
         "grademethod" => "1",
         "questionsperpage" => "1",
         "navmethod" => "free",
         "shuffleanswers" => "1",
         "preferredbehaviour" => "deferredfeedback",
         "canredoquestions" => "0",
         "attemptonlast" => "0",
         "attemptimmediately" => "1",
         "correctnessimmediately" => "1",
         "marksimmediately" => "1",
         "specificfeedbackimmediately" => "1",
         "generalfeedbackimmediately" => "1",
         "rightanswerimmediately" => "1",
         "overallfeedbackimmediately" => "1",
         "attemptopen" => "1",
         "correctnessopen" => "1",
         "marksopen" => "1",
         "specificfeedbackopen" => "1",
         "generalfeedbackopen" => "1",
         "rightansweropen" => "1",
         "overallfeedbackopen" => "1",
         "showuserpicture" => "0",
         "decimalpoints" => "2",
         "questiondecimalpoints" => "-1",
         "showblocks" => "0",
         "seb_requiresafeexambrowser" => "0",
         "filemanager_sebconfigfile" => 155298126,
         "seb_showsebdownloadlink" => "1",
         "seb_linkquitseb" => "",
         "seb_userconfirmquit" => "1",
         "seb_allowuserquitseb" => "1",
         "seb_quitpassword" => "",
         "seb_allowreloadinexam" => "1",
         "seb_showsebtaskbar" => "1",
         "seb_showreloadbutton" => "1",
         "seb_showtime" => "1",
         "seb_showkeyboardlayout" => "1",
         "seb_showwificontrol" => "0",
         "seb_enableaudiocontrol" => "0",
         "seb_muteonstartup" => "0",
         "seb_allowspellchecking" => "0",
         "seb_activateurlfiltering" => "0",
         "seb_filterembeddedcontent" => "0",
         "seb_expressionsallowed" => "",
         "seb_regexallowed" => "",
         "seb_expressionsblocked" => "",
         "seb_regexblocked" => "",
         "seb_allowedbrowserexamkeys" => "",
         "quizpassword" => "",
         "subnet" => "",
         "delay1" => 0,
         "delay2" => 0,
         "browsersecurity" => "-",
         "boundary_repeats" => 1,
         "feedbacktext" => [
          0 => [
           "text" => "",
           "format" => "1",
           "itemid" => "838518230"
          ],
          1 => [
           "text" => "",
           "format" => "1",
           "itemid" => 31616220
          ]],
         "feedbackboundaries" => [
          0 => ""],
         "visible" => 1,
         "visibleoncoursepage" => 1,
         "cmidnumber" => "",
         "groupmode" => "0",
         "groupingid" => "0",
         "availabilityconditionsjson" => '{"op":"&","c":[],"showc":[]}',
         "completionunlocked" => 1,
         "completion" => "1",
         "completionpass" => 0,
         "completionattemptsexhausted" => 0,
         "completionminattempts" => 0,
         "completionexpected" => 0,
         "tags" => [],
         "course" => 33,
         "coursemodule" => 0,
         "section" => $params['section'],
         "module" => 17,
         "modulename" => "quiz",
         "instance" => 0,
         "add" => "quiz",
         "update" => 0,
         "return" => 0,
         "sr" => 0,
//         "competencies" => [0],
//         "competency_rule" => "0",
         "submitbutton2" => "Save and return to course",
        ];

        /* TEST AREA END */

        $fromform = add_moduleinfo($data, $course,$mform);

        return ['value'=> var_dump($fromform)];
    }
    public static function create_quiz_module_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }

    /**
     * CREATE SCORM MODULE
     *
     */
    public static function create_scorm_module_parameters() {
        return new external_function_parameters(
            array(
                'courseid' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'section' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'name' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'intro' => new external_value(PARAM_RAW, 'context id', VALUE_DEFAULT, null),
            )
        );
    }
    public static function create_scorm_module($courseid,$section,$name,$intro) {
        global $DB, $USER,$CFG;

        # hardcode parameter
//        $courseid = 33;
        $module = 'scorm';
//        $section = 1;

//        $params = self::validate_parameters(self::create_quiz_module_parameters(),
//            array(
//                'parameter' => $parameter,
//            ));

        $params = self::validate_parameters(self::create_scorm_module_parameters(),
            array(
                'courseid' => $courseid,
                'section' => $section,
                'name' => $name,
                'intro' => $intro,
            ));

        $course = $DB->get_record('course', array('id'=>$params['courseid']), '*', MUST_EXIST);
        $courseformat = course_get_format($course);
        $maxsections = $courseformat->get_max_sections();

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

//        return ['value'=> var_dump($mform)];

        $data = (object) [
         "name" => $params['name'],
         "introeditor" => [
          "text" => $params['intro'],
          "format" => "1",
          /*"itemid" => 685469029*/],
         "showdescription" => "0",
         "mform_isexpanded_id_packagehdr" => 1,
         "scormtype" => "local",
         "packagefile" => 454642527,
         "updatefreq" => "0",
         "popup" => "0",
         "width" => "100",
         "height" => "500",
         "displayactivityname" => "1",
         "skipview" => "0",
         "hidebrowse" => "0",
         "displaycoursestructure" => "0",
         "hidetoc" => "0",
         "nav" => "1",
         "navpositionleft" => "-100",
         "navpositiontop" => "-100",
         "displayattemptstatus" => "1",
         "timeopen" => 0,
         "timeclose" =>  0,
         "grademethod" => "1",
         "maxgrade" => "100",
         "maxattempt" => "0",
         "whatgrade" => "0",
         "forcenewattempt" => "0",
         "lastattemptlock" => "0",
         "forcecompleted" => "0",
         "auto" => "0",
         "autocommit" => "0",
         "masteryoverride" => "1",
         "datadir" => "",
         "pkgtype" => "",
         "launch" => "",
         "redirect" => "no",
         "redirecturl" => "http://localhost/djp-learning-git/mod/scorm/view.php?id=",
         "visible" => 1,
         "visibleoncoursepage" => 1,
         "cmidnumber" => "",
         "groupmode" => "0",
         "groupingid" => "0",
         "availabilityconditionsjson" => '{"op":"&","c":[],"showc":[]}',
         "completionunlocked" =>  1,
         "completion" => "1",
         "completionscorerequired" => null,
         "completionexpected" => 0,
         "tags" => [],
         "course" => 33,
         "coursemodule" => 0,
         "section" => 1,
         "module" => 19,
         "modulename" => "scorm",
         "instance" => 0,
         "add" => "scorm",
         "update" => 0,
         "return" => 0,
         "sr" => 0,
         "competencies" => [],
         "competency_rule" => "0",
         "submitbutton2" => "Save and return to course",
         "completionstatusrequired" => null,
        ];

        /* TEST AREA END */

        $fromform = add_moduleinfo($data, $course,$mform);

        return ['value'=> var_dump($fromform)];
    }
    public static function create_scorm_module_returns() {
        return new external_single_structure(
            array(
                'value' => new external_value(PARAM_TEXT, ''),
            )
        );
    }
}
