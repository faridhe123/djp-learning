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
 * @package    local_core
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */

defined('MOODLE_INTERNAL') || die;

use core_course\external\course_summary_exporter;
use core_availability\info;

require_once($CFG->libdir . "/externallib.php");
require_once($CFG->libdir . "/filelib.php");

class local_files_external extends external_api {


    /**
     * Returns description of upload parameters
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function upload_parameters() {
        return new external_function_parameters(
            array(
                'contextid' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'component' => new external_value(PARAM_COMPONENT, 'component'),
                'filearea'  => new external_value(PARAM_AREA, 'file area'),
                'itemid'    => new external_value(PARAM_INT, 'associated id'),
                'filepath'  => new external_value(PARAM_PATH, 'file path'),
                'filename'  => new external_value(PARAM_FILE, 'file name'),
                'filecontent' => new external_value(PARAM_TEXT, 'file content'),
                'contextlevel' => new external_value(PARAM_ALPHA, 'The context level to put the file in,
                        (block, course, coursecat, system, user, module)', VALUE_DEFAULT, null),
                'instanceid' => new external_value(PARAM_INT, 'The Instance id of item associated
                         with the context level', VALUE_DEFAULT, null)
            )
        );
    }

    /**
     * TEST PARAMETER
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
//    public static function upload_parameters() {
//        return new external_function_parameters(
//            array(
//                'parameter' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
//            )
//        );
//    }

    /**
     * Uploading a file to moodle
     *
     * @param int    $contextid    context id
     * @param string $component    component
     * @param string $filearea     file area
     * @param int    $itemid       item id
     * @param string $filepath     file path
     * @param string $filename     file name
     * @param string $filecontent  file content
     * @param string $contextlevel Context level (block, course, coursecat, system, user or module)
     * @param int    $instanceid   Instance id of the item associated with the context level
     * @return array
     * @since Moodle 2.2
     */
//    public static function upload($contextid, $component, $filearea, $itemid, $filepath, $filename, $filecontent, $contextlevel, $instanceid) {
//        global $USER, $CFG;
//
//        $fileinfo = self::validate_parameters(self::upload_parameters(), array(
//            'contextid' => $contextid, 'component' => $component, 'filearea' => $filearea, 'itemid' => $itemid,
//            'filepath' => $filepath, 'filename' => $filename, 'filecontent' => $filecontent, 'contextlevel' => $contextlevel,
//            'instanceid' => $instanceid));
//
//        if (!isset($fileinfo['filecontent'])) {
//            throw new moodle_exception('nofile');
//        }
//        // Saving file.
//        $dir = make_temp_directory('wsupload');
//
//        if (empty($fileinfo['filename'])) {
//            $filename = uniqid('wsupload', true).'_'.time().'.tmp';
//        } else {
//            $filename = $fileinfo['filename'];
//        }
//
//        if (file_exists($dir.$filename)) {
//            $savedfilepath = $dir.uniqid('m').$filename;
//        } else {
//            $savedfilepath = $dir.$filename;
//        }
//
//        file_put_contents($savedfilepath, base64_decode($fileinfo['filecontent']));
//        @chmod($savedfilepath, $CFG->filepermissions);
//        unset($fileinfo['filecontent']);
//
//        if (!empty($fileinfo['filepath'])) {
//            $filepath = $fileinfo['filepath'];
//        } else {
//            $filepath = '/';
//        }
//
//        // Only allow uploads to draft area
//        if (!($fileinfo['component'] == 'user' and $fileinfo['filearea'] == 'draft')) {
//            throw new coding_exception('File can be uploaded to user draft area only');
//        } else {
//            $component = 'user';
//            $filearea = $fileinfo['filearea'];
//        }
//
//        $itemid = 0;
//        if (isset($fileinfo['itemid'])) {
//            $itemid = $fileinfo['itemid'];
//        }
//        if ($filearea == 'draft' && $itemid <= 0) {
//            // Generate a draft area for the files.
//            $itemid = file_get_unused_draft_itemid();
//        } else if ($filearea == 'private') {
//            // TODO MDL-31116 in user private area, itemid is always 0.
//            $itemid = 0;
//        }
//
//        // We need to preserve backword compatibility. Context id is no more a required.
//        if (empty($fileinfo['contextid'])) {
//            unset($fileinfo['contextid']);
//        }
//
//        // Get and validate context.
//        $context = self::get_context_from_params($fileinfo);
//        self::validate_context($context);
//        if (($fileinfo['component'] == 'user' and $fileinfo['filearea'] == 'private')) {
//            throw new moodle_exception('privatefilesupload');
//        }
//
//        $browser = get_file_browser();
//
//        // Check existing file.
//        if ($file = $browser->get_file_info($context, $component, $filearea, $itemid, $filepath, $filename)) {
//            throw new moodle_exception('fileexist');
//        }
//
//        // Move file to filepool.
//        if ($dir = $browser->get_file_info($context, $component, $filearea, $itemid, $filepath, '.')) {
//            $info = $dir->create_file_from_pathname($filename, $savedfilepath);
//            $params = $info->get_params();
//            unlink($savedfilepath);
//            return array(
//                'contextid'=>$params['contextid'],
//                'component'=>$params['component'],
//                'filearea'=>$params['filearea'],
//                'itemid'=>$params['itemid'],
//                'filepath'=>$params['filepath'],
//                'filename'=>$params['filename'],
//                'url'=>$info->get_url()
//            );
//        } else {
//            throw new moodle_exception('nofile');
//        }
//    }

    /**
     * MODIFIKASI FUNGSI UPLOAD
     *
     * @param int    $contextid    context id
     * @param string $component    component
     * @param string $filearea     file area
     * @param int    $itemid       item id
     * @param string $filepath     file path
     * @param string $filename     file name
     * @param string $filecontent  file content
     * @param string $contextlevel Context level (block, course, coursecat, system, user or module)
     * @param int    $instanceid   Instance id of the item associated with the context level
     * @return array
     * @since Moodle 2.2
     */
    public static function upload($contextid, $component, $filearea, $itemid, $filepath, $filename, $filecontent, $contextlevel, $instanceid) {
        global $USER, $CFG;

        $fileinfo = self::validate_parameters(self::upload_parameters(), array(
            'contextid' => $contextid, 'component' => $component, 'filearea' => $filearea, 'itemid' => $itemid,
            'filepath' => $filepath, 'filename' => $filename, 'filecontent' => $filecontent, 'contextlevel' => $contextlevel,
            'instanceid' => $instanceid));

        # ganti sistem filecontent tidak perlu menggunanaka base64
        if (!isset($fileinfo['filecontent'])) {
            throw new moodle_exception('nofile');
        }

        // Saving file.
        $dir = make_temp_directory('wsupload').'/';

        $elname = 'file_1';

        if(!empty($_FILES)){
            $filename = $_FILES[$elname]['name'];
        }
        elseif (empty($fileinfo['filename'])) {
            $filename = uniqid('wsupload', true).'_'.time().'.tmp';
        } else {
            $filename = $fileinfo['filename'];
        }

        if (file_exists($dir.$filename)) {
            $savedfilepath = $dir.uniqid('m').$filename;
        } else {
            $savedfilepath = $dir.$filename;
        }

        # Menggunakan base64
//        file_put_contents($savedfilepath, base64_decode($fileinfo['filecontent']));

        # coba pakai $_FILES
        # bisa pakai copy(source,destination)
        file_put_contents($savedfilepath, file_get_contents($_FILES[$elname]['tmp_name']));

        @chmod($savedfilepath, $CFG->filepermissions);
        unset($fileinfo['filecontent']);

        if (!empty($fileinfo['filepath'])) {
            $filepath = $fileinfo['filepath'];
        } else {
            $filepath = '/';
        }


        // Only allow uploads to draft area
        # Seharusnya bisa untuk semua AREA
//        if (!($fileinfo['component'] == 'user' and $fileinfo['filearea'] == 'draft')) {
//            throw new coding_exception('File can be uploaded to user draft area only');
//        } else {
//            $component = 'user';
//            $filearea = $fileinfo['filearea'];
//        }

        $itemid = 0;
        if (isset($fileinfo['itemid'])) {
            $itemid = $fileinfo['itemid'];
        }

        # Hanya bisa untuk draft area ?
//        if ($filearea == 'draft' && $itemid <= 0) {
//            // Generate a draft area for the files.
//            $itemid = file_get_unused_draft_itemid();
//        } else if ($filearea == 'private') {
//            // TODO MDL-31116 in user private area, itemid is always 0.
//            $itemid = 0;
//        }

        // We need to preserve backword compatibility. Context id is no more a required.
        # Context ID Bisa Kosong !
        if (empty($fileinfo['contextid'])) {
            unset($fileinfo['contextid']);
        }

        // Get and validate context.
        # Memproses context_level dan context_instance JIKA tidak ada context ID
        $context = self::get_context_from_params($fileinfo);
        self::validate_context($context);
//        if (($fileinfo['component'] == 'user' and $fileinfo['filearea'] == 'private')) {
//            throw new moodle_exception('privatefilesupload');
//        }
        $browser = get_file_browser();

        // Check existing file.
        if ($file = $browser->get_file_info($context, $component, $filearea, $itemid, $filepath, $filename)) {
            throw new moodle_exception('fileexist');
        }

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
        # ini untuk TEST
//        return ['value' => var_dump($context)];

    }

   /**
    * Returns description of upload returns
    *
    * @return external_single_structure
    * @since Moodle 2.2
    */
    public static function upload_returns() {
        return new external_single_structure(
            array(
                'contextid' => new external_value(PARAM_INT, ''),
                'component' => new external_value(PARAM_COMPONENT, ''),
                'filearea'  => new external_value(PARAM_AREA, ''),
                'itemid'   => new external_value(PARAM_INT, ''),
                'filepath' => new external_value(PARAM_TEXT, ''),
                'filename' => new external_value(PARAM_FILE, ''),
                'url'      => new external_value(PARAM_TEXT, ''),
            )
        );
    }

        /**
         * TEST RETURNS
         */
    //    public static function upload_returns() {
    //        return new external_single_structure(
    //            array(
    //                'value' => new external_value(PARAM_TEXT, ''),
    //            )
    //        );
    //    }



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
        $numFiles = count($_FILES);
        if($numFiles > 0){
            $result['jumlah_files'] = $numFiles;
            $result['files'] = print_r($_FILES);
        }else {
            $result['jumlah_files'] = 0;
            $result['files'] = 'tidak ada';
        }

        return $result;
    }

    public static function test_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_TEXT, 'TEST'),
                'pesan' => new external_value(PARAM_TEXT, 'TEST'),
                'jumlah_files' => new external_value(PARAM_INT, 'APAKAH ADA FILE?'),
                'files' => new external_value(PARAM_TEXT, 'DETIL FILENYA'),
            )
        );
    }



    public static function get_files_parameters() {
        return new external_function_parameters(
            array(
                'param_text' => new external_value(PARAM_TEXT, 'CONTOH PARAMS TIPE TEXT', VALUE_REQUIRED, 'ABC', NULL_NOT_ALLOWED),
                'param_int' => new external_value(PARAM_INT, 'CONTOH PARAMS TIPE INTEGER', VALUE_REQUIRED, 1, NULL_NOT_ALLOWED)
            )
        );
    }

    public static function get_files($param_text,$param_int) {
        $params = self::validate_parameters(self::test_parameters(),
            array(
                'param_text' => $param_text,
                'param_int' => $param_int
            ));

        $result = array();
        $result['status'] = 'OKE ' . $params['param_text'] . ' - '. $params['param_int'] ;
        $result['pesan'] = 'INI TEST';
        $numFiles = count($_FILES);
        if($numFiles > 0){
            $result['jumlah_files'] = $numFiles;
            $result['files'] = print_r($_FILES);
        }else {
            $result['jumlah_files'] = 0;
            $result['files'] = 'tidak ada';
        }

        return $result;
    }

    public static function get_files_returns() {
        return new external_single_structure(
            array(
                'status' => new external_value(PARAM_TEXT, 'TEST'),
                'pesan' => new external_value(PARAM_TEXT, 'TEST'),
                'jumlah_files' => new external_value(PARAM_INT, 'APAKAH ADA FILE?'),
                'files' => new external_value(PARAM_TEXT, 'DETIL FILENYA'),
            )
        );
    }



    /**
     * Returns description of upload parameters
     *
     * @return external_function_parameters
     */
    public static function upload_test_parameters() {
        return new external_function_parameters(
            array(
//                'param_text' => new external_value(PARAM_TEXT, 'CONTOH PARAMS TIPE TEXT', VALUE_REQUIRED, 'ABC', NULL_NOT_ALLOWED),
                'contextid' => new external_value(PARAM_INT, 'context id', VALUE_DEFAULT, null),
                'component' => new external_value(PARAM_COMPONENT, 'component'),
                'filearea'  => new external_value(PARAM_AREA, 'file area'),
                'itemid'    => new external_value(PARAM_INT, 'associated id'),
                'filepath'  => new external_value(PARAM_PATH, 'file path'),
                'filename'  => new external_value(PARAM_FILE, 'file name'),
//                'filecontent' => new external_value(PARAM_TEXT, 'file content'),
                'contextlevel' => new external_value(PARAM_ALPHA, 'The context level to put the file in,
                        (block, course, coursecat, system, user, module)', VALUE_DEFAULT, null),
                'instanceid' => new external_value(PARAM_INT, 'The Instance id of item associated
                         with the context level', VALUE_DEFAULT, null)
            )
        );
    }

    /**
     * Uploading a file to moodle
     *
     * @param int    $contextid    context id
     * @return array
     */
    public static function upload_test(
//          $param_text
            $contextid, $component, $filearea, $itemid, $filepath, $filename,
//            $filecontent,
            $contextlevel, $instanceid
        ) {
        global $USER, $CFG;

        $fileinfo = self::validate_parameters(self::upload_parameters(), array(
//                'param_text' => $param_text
            'contextid' => $contextid,
            'component' => $component,
            'filearea' => $filearea,
            'itemid' => $itemid,
            'filepath' => $filepath,
            'filename' => $filename,
//            'filecontent' => $filecontent,
            'contextlevel' => $contextlevel,'instanceid' => $instanceid
        ));

//        return(['result_test' => var_dump($context)]);

        $contextid = $fileinfo['contextid'];

        if  ($fileinfo['context_level'] == CONTEXT_SYSTEM )       $contextid = 1;
        elseif  ($fileinfo['context_level'] == CONTEXT_USER )     $contextid = context_user::instance($fileinfo['instanceid']);
        elseif  ($fileinfo['context_level'] == CONTEXT_COURSECAT) $contextid = context_coursecat::instance($fileinfo['instanceid']);
        elseif  ($fileinfo['context_level'] == CONTEXT_COURSE )   $contextid = context_course::instance($fileinfo['instanceid']);
        elseif  ($fileinfo['context_level'] == CONTEXT_MODULE )   $contextid = context_module::instance($fileinfo['instanceid']);
        else                                                      $contextid = context_block::instance($fileinfo['instanceid']);

        $elname = 'file_1';
        $fs = get_file_storage();

        $record = new stdClass();
        $record->contextid = $contextid;
        $record->component = $fileinfo['component'];
        $record->filearea = $fileinfo['filearea'];
        $record->filepath = $fileinfo['filepath'];
        $record->itemid   = $fileinfo['itemid'];
        $record->license  = '-';
        $record->author   = 'MDF';
        $record->userid    = $USER->id;
        $record->source    = self::build_source_field($_FILES[$elname]['name']);
        $record->filename = clean_param($_FILES[$elname]['name'], PARAM_FILE);

        if (empty($record->itemid)) {
            $record->itemid = 0;
        }

        # Kalau Pluginfile

//        $syscontext = \context_system::instance();

//        $filerecord = [
//            'contextid' => $fileinfo['context'],
//            'component' => 'mod_quiz',
//            'filearea' => 'intro',
//            'itemid' => 0,
//            'filepath' => '/',
//            'filename' => $filename,
//            'source' => $sourcefield,
//        ];

        $stored_file = $fs->create_file_from_pathname($record, $_FILES[$elname]['tmp_name']);

        return array(
//            'url'=>moodle_url::make_draftfile_url($record->itemid, $record->filepath, $record->filename)->out(false),
//            'url'=>moodle_url::make_pluginfile_url(
//                $filerecord['contextid'],
//                $filerecord['component'],
//                $filerecord['filearea'],
//                $filerecord['itemid'],
//                $filerecord['filepath'],
//                $filerecord['filename'])->out(false),
            'url'=>moodle_url::make_pluginfile_url(
                $filerecord['contextid'],
                $filerecord['component'],
                $filerecord['filearea'],
                null,
                $filerecord['filepath'],
                $filerecord['filename'])->out(false),
            'id'=>$record->itemid,
            'file'=>$record->filename);
    }

    public static function build_source_field($source) {
        $sourcefield = new stdClass;
        $sourcefield->source = $source;
        return serialize($sourcefield);
    }

    /**
     * Returns description of upload returns
     *
     * @return external_single_structure
     * @since Moodle 2.2
     */
    public static function upload_test_returns() {
        return new external_single_structure(
            array(
//                'contextid' => new external_value(PARAM_INT, ''),
//                'component' => new external_value(PARAM_COMPONENT, ''),
//                'filearea'  => new external_value(PARAM_AREA, ''),
//                'itemid'   => new external_value(PARAM_INT, ''),
//                'filepath' => new external_value(PARAM_TEXT, ''),
//                'filename' => new external_value(PARAM_FILE, ''),
//                'url'      => new external_value(PARAM_TEXT, ''),

//                'result_test'      => new external_value(PARAM_TEXT, 'TEST RETURNS VALUE'),

                'url'      => new external_value(PARAM_TEXT, 'TEST RETURNS VALUE'),
                'id'      => new external_value(PARAM_TEXT, 'TEST RETURNS VALUE'),
                'file'      => new external_value(PARAM_TEXT, 'TEST RETURNS VALUE'),
            )
        );
    }

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function upload_tfg_parameters() {
        return new external_function_parameters(
            array('community_key' => new external_value(PARAM_TEXT, 'Comunidad a la que se subira el TFG o TFM.', VALUE_REQUIRED, '', NULL_NOT_ALLOWED),
                'username' => new external_value(PARAM_TEXT, 'Usuario que sube el archivo.', VALUE_REQUIRED, '', NULL_NOT_ALLOWED),
                'folder_name' => new external_value(PARAM_TEXT, 'Directorio donde se subira el archivo.', VALUE_REQUIRED, '', NULL_NOT_ALLOWED))
        );
    }

    public static function upload_tfg($community_key, $username, $folder_name) {
        global $CFG, $DB, $USER;
        require_once($CFG->dirroot . "/mod/forum/lib.php");

        $params = self::validate_parameters(self::upload_tfg_parameters(),
            array(
                'community_key' => $community_key,
                'username' => $username,
                'folder_name' => $folder_name
            ));

        //Context validation
        //OPTIONAL but in most web service it should present
        $contextoUser = get_context_instance(CONTEXT_USER, $USER->id);
        self::validate_context($contextoUser);

        $fs = get_file_storage();

        $warnings = array();

        //We get the course to which the file must be uploaded
        $sql = "SELECT id FROM mdl_course WHERE idnumber = ?";
        $result = $DB->get_records_sql($sql, array($community_key));

        foreach ( $result as $n ) {
            $courseid = $n->id;
        }

        if( is_null($courseid)){
            throw new moodle_exception('no_course','No existe el curso');
        }

        //e get the forum to upload the file
        $sql = "SELECT f.id FROM mdl_forum f , mdl_course c WHERE c.idnumber = ? AND c.id = f.course AND f.name = ?";
        $result = $DB->get_records_sql($sql, array($community_key, $folder_name));

        foreach ( $result as $n ) {
            $forumid = $n->id;
        }

        if( is_null($forumid)){
            throw new moodle_exception('no_forum','No existe el foro');
        }

        //We get the user who wants to upload the file
        $sql = "SELECT id FROM mdl_user WHERE username = ?";
        $result = $DB->get_records_sql($sql, array($username));

        foreach ( $result as $n ) {

            $userid = $n->id;
        }

        if( is_null($userid)){
            throw new moodle_exception('no_user','No existe el usuario');
        }

        //We check if the user belongs to the course
        $contextCourse = context_course::instance($courseid);
        $enrolled = is_enrolled($contextCourse, $userid, '', true);

        if( !$enrolled){
            throw new moodle_exception('user_no_enrolled','El usuario no está en el curso');
        }

        //Files received
        $numFiles = count($_FILES);

        if($numFiles > 0){
            // Request and permission validation.
            $forum = $DB->get_record('forum', array('id' => $forumid), '*', MUST_EXIST);
            list($course, $cm) = get_course_and_cm_from_instance($forum, 'forum');

            $context = context_module::instance($cm->id);
            self::validate_context($context);

            // Normalize group.
            if (!groups_get_activity_groupmode($cm)) {
                // Groups not supported, force to -1.
                $groupid = -1;
            } else {
                // Check if we receive the default or and empty value for groupid,
                // in this case, get the group for the user in the activity.
                if ($groupid === -1 ) {
                    $groupid = groups_get_activity_group($cm);
                } else{
                    $groupid = -1;
                }
            }

            if (!forum_user_can_post_discussion($forum, $groupid, -1, $cm, $context)) {
                throw new moodle_exception('cannotcreatediscussion', 'forum');
            }

            $thresholdwarning = forum_check_throttling($forum, $cm);
            forum_check_blocking_threshold($thresholdwarning);

            foreach ($_FILES as $fieldname=>$uploaded_file) {

                // check upload errors
                if (!empty($_FILES[$fieldname]['error'])) {

                    switch ($_FILES[$fieldname]['error']) {
                        case UPLOAD_ERR_INI_SIZE:
                            throw new moodle_exception('upload_error_ini_size', 'repository_upload');
                            break;
                        case UPLOAD_ERR_FORM_SIZE:
                            throw new moodle_exception('upload_error_form_size', 'repository_upload');
                            break;
                        case UPLOAD_ERR_PARTIAL:
                            throw new moodle_exception('upload_error_partial', 'repository_upload');
                            break;
                        case UPLOAD_ERR_NO_FILE:
                            throw new moodle_exception('upload_error_no_file', 'repository_upload');
                            break;
                        case UPLOAD_ERR_NO_TMP_DIR:
                            throw new moodle_exception('upload_error_no_tmp_dir', 'repository_upload');
                            break;
                        case UPLOAD_ERR_CANT_WRITE:
                            throw new moodle_exception('upload_error_cant_write', 'repository_upload');
                            break;
                        case UPLOAD_ERR_EXTENSION:
                            throw new moodle_exception('upload_error_extension', 'repository_upload');
                            break;
                        default:
                            throw new moodle_exception('nofile');
                    }
                }

                /*$file = new stdClass();
                $file->filename = clean_param($_FILES[$fieldname]['name'], PARAM_FILE);
                // check system maxbytes setting
                if (($_FILES[$fieldname]['size'] > get_max_upload_file_size($CFG->maxbytes))) {
                    // oversize file will be ignored, error added to array to notify web service client
                    $file->errortype = 'fileoversized';
                    $file->error = get_string('maxbytes', 'error');
                } else {
                    $file->filepath = $_FILES[$fieldname]['tmp_name'];
                    // calculate total size of upload
                    //$totalsize += $_FILES[$fieldname]['size'];
                }
                $files[] = $file;*/

                $filename = $_FILES[$fieldname]['name'];
                $filepath = $_FILES[$fieldname]['tmp_name'];

                // Create the discussion.
                $discussion = new stdClass();
                $discussion->course = $course->id;
                $discussion->forum = $forum->id;
                $discussion->message = "<p>".$filename."</p>";
                $discussion->messageformat = FORMAT_HTML;   // Force formatting for now.
                $discussion->messagetrust = trusttext_trusted($context);
                $discussion->itemid = 0;
                $discussion->groupid = $groupid;
                $discussion->mailnow = 0;
                $discussion->subject = $filename;
                $discussion->name = $discussion->subject;
                $discussion->timestart = 0;
                $discussion->timeend = 0;

                if ($discussionid = forum_add_discussion($discussion)) {
                    $discussion->id = $discussionid;

                    //We update the user of the discursion to the one of the user received
                    $sql = "UPDATE mdl_forum_discussions SET userid= ? WHERE id = ?";
                    $DB->execute($sql, array($userid, $discussionid));
                    /*
                                        // Trigger events and completion.
                                        $params = array(
                                            'context' => $context,
                                            'objectid' => $discussion->id,
                                            'other' => array(
                                                'forumid' => $forum->id,
                                            )
                                        );
                                        $event = \mod_forum\event\discussion_created::create($params);
                                        $event->add_record_snapshot('forum_discussions', $discussion);
                                        $event->trigger();

                                        $completion = new completion_info($course);
                                        if ($completion->is_enabled($cm) && ($forum->completiondiscussions || $forum->completionposts)) {
                                            $completion->update_state($cm, COMPLETION_COMPLETE);
                                        }

                                        $settings = new stdClass();
                                        $settings->discussionsubscribe = false; //discussionsubscribe (bool); subscribe to the discussion?, default to true
                                        forum_post_subscription($settings, $forum, $discussion

                                        //se guardara el fichero

                                        // Get any existing file size limits.
                                        //$maxareabytes = FILE_AREA_MAX_BYTES_UNLIMITED;
                                        //$maxupload = get_user_max_upload_file_size($context, $CFG->maxbytes);

                                        // Check the size of this upload.
                                        //if ($maxupload !== USER_CAN_IGNORE_FILE_SIZE_LIMITS && $totalsize > $maxupload) {
                                        //  throw new file_exception('userquotalimit');
                                        //}
                                        */

                    //We get the course to which the file must be uploaded
                    $sql = "SELECT id FROM mdl_forum_posts WHERE discussion = ? ORDER BY id ASC LIMIT 1";
                    $result = $DB->get_records_sql($sql, array($discussionid));

                    foreach ( $result as $n ) {
                        $postid = $n->id;
                    }

                    if( is_null($postid)){
                        throw new moodle_exception('no_post','No existe el post');
                    }

                    //We update the post to put the user that they send us and indicate that they have a file
                    $sql = "UPDATE mdl_forum_posts SET userid= ?, attachment= 1 WHERE id = ?";
                    $DB->execute($sql, array($userid, $postid));

                    $user = $DB->get_record('user', array('id'=>$userid), '*', MUST_EXIST);

                    $file_record = new stdClass;
                    $file_record->component = 'mod_forum';
                    $file_record->contextid = $context->id;
                    $file_record->userid    = $userid;
                    $file_record->filearea  = 'attachment';
                    $file_record->filename = $filename;
                    $file_record->filepath  = '/';
                    $file_record->itemid    = $postid;
                    $file_record->license   = $CFG->sitedefaultlicense;
                    $file_record->author    = fullname($user);
                    $file_record->source    = $filename;

                    //Check if the file already exist
                    $existingfile = $fs->file_exists($file_record->contextid, $file_record->component, $file_record->filearea,
                        $file_record->itemid, $file_record->filepath, $file_record->filename);
                    if ($existingfile) {
                        throw new file_exception('filenameexist');
                    } else {
                        $stored_file = $fs->create_file_from_pathname($file_record, $filepath);
                    }
                } else {
                    throw new moodle_exception('couldnotadd', 'forum');
                }
            }
        }else{
            throw new moodle_exception('nofile');
        }

        $result = array();
        $result['discussionid'] = $discussionid;
        $result['warnings'] = $warnings;
        return $result;
    }

    /**
     * Returns description of method result value
     * @return external_multiple_structure
     */
    public static function upload_tfg_returns() {
        return new external_single_structure(
            array(
                'discussionid' => new external_value(PARAM_INT, 'New Discussion ID'),
                'warnings' => new external_warnings()
            )
        );
    }

}
