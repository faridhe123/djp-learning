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

use http\Env\Response;

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/externallib.php");


require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->dirroot . '/lib/gradelib.php');
require_once($CFG->dirroot . '/local/course/classes/external.php');

require_once($CFG->dirroot . '/completion/classes/external.php');
require_once($CFG->dirroot . '/grade/report/user/externallib.php');
require_once($CFG->dirroot . '/mod/feedback/classes/external.php');

class local_grade_external extends external_api {


    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function get_grade_completion_parameters() {
        return new external_function_parameters(
            array(
                'moduleid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'username' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'userid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'courseid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'courseidnumber' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_grade_completion($moduleid,$username,$userid,$courseid,$courseidnumber) {
        global $DB,$CFG;

        $params = self::validate_parameters(self::get_grade_completion_parameters(),
            [
                'moduleid' => $moduleid,
                'username' => $username,
                'userid' => $userid,
                'courseid' => $courseid,
                'courseidnumber' => $courseidnumber,
            ]);
        if(!isset($moduleid)) {
            if($courseidnumber || $courseid) {
                $courseid = $courseid ?? $DB->get_record('course', array('idnumber' => $courseidnumber))->id;
            } else {
                throw new moodle_exception('missingparameter');
            }

            if(!$courseid) {
                throw new moodle_exception('unknowncourserequest');
            }

            // ambil module h5p pertama untuk CTAS
            $moduleid = local_course_external::get_course_module(
                null,
                'h5pactivity',
                $courseid
            )['data'][0]['cmid'];
        }

        $userid = $userid ?? $DB->get_record('user', array('username' => $username))->id;
        $courseid = $courseid ?? $DB->get_record('course_modules', array('id' => $moduleid))->course;

        $activity = core_completion_external::get_activities_completion_status($courseid,$userid);
        $grade = gradereport_user_external::get_grade_items($courseid,$userid);
//        $feedback = mod_feedback_external::get_feedbacks_by_courses([$courseid]);
        $param_grade['userid'] = $userid;

        foreach($activity['statuses'] as $status) {
            if($status['cmid'] == $moduleid) {
                $param_grade['modname'] = $status['modname'];
                $param_grade['completion_state'] = $status['state'];
                $param_grade['timecompleted'] = $status['timecompleted'];
            }
        }

        if(!isset($param_grade['modname']))
            print_error('module tidak ditemukan!');
//            throw new moodle_exception('cannotaccess', 'mod_feedback');

        foreach($grade['usergrades'][0]['gradeitems'] as $usergrades) {
            if($usergrades['cmid'] == $moduleid) {
                if($param_grade['modname'] == 'h5pactivity') {

                    $sql_params = [
                      'userid' => $userid,
                      'grade' => $usergrades['graderaw'],
                      'timcreated' => $usergrades['gradedatesubmitted'],
                      'moduleid' => $usergrades['cmid'],
                    ];
                    /**  JABARKAN SKORE YG DISUBMIT DARI SUMMARY */
                    $sub_contents = $DB->get_records_sql("
                            select * 
                                from {h5pactivity_attempts_results} 
                                where attemptid = (
                                    -- JABARKAN SKORE YG DISUBMIT DARI SUMMARY
                                select id from {h5pactivity_attempts} a
                                where 
                                    -- ambil param dari kembalian api sebelumnya
                                    a.userid = :userid
                                    and (a.scaled*100) = :grade
                                    and a.timecreated = :timcreated
                                    and a.h5pactivityid = (
                                        -- dapatkan module id dari id h5p
                                        select c.id from {course_modules} a
                                            inner join {modules} b on a.module = b.id and b.name = 'h5pactivity'
                                            inner join {h5pactivity} c on c.id = a.`instance`
                                        where a.id = :moduleid)
                                )
                                order by id DESC",$sql_params);


                    $x = 0;
                    foreach($sub_contents as $sub_content){
                        if($sub_content->maxscore != 0 && $x<=1) {
                            $jenis = $x == 0 ? 'posttest' : 'pretest';

                            $param_grade["graderaw_$jenis"] = $sub_content->rawscore;
                            $param_grade["grademax_$jenis"] = $sub_content->maxscore;
                            $param_grade["grade_$jenis"] = (int) ($sub_content->rawscore/$sub_content->maxscore*100);
                            $x++;
                        }
                    }
                }

                $param_grade['grade'] = (int)$usergrades['graderaw'];
                $param_grade['grademax'] = (float)$usergrades['grademax'];
                $param_grade['gradesubmitted'] = $usergrades['gradedatesubmitted'];
                $param_grade['itemmodule'] = $usergrades['itemmodule'];
                $param_grade['iteminstance'] = $usergrades['iteminstance'];
            }
        }

        $grading_info = grade_get_grades($courseid, 'mod', 'quiz', $param_grade['iteminstance'], $userid);

        if($grading_info->items[0]->gradepass) $param_grade['gradepass'] = $grading_info->items[0]->gradepass;

        switch($param_grade['completion_state']) {
            case 0: $param_grade['keterangan_state'] = 'belum mengerjakan';break;
            case 1: $param_grade['keterangan_state'] = ($param_grade['modname'] == 'feedback' || $param_grade['modname'] == 'h5pactivity')? 'User telah menyelesaikan activity' : 'User mengklik manual completion';break;
            case 2: $param_grade['keterangan_state'] = 'Sudah mengerjakan, LULUS passing grade';break;
            case 3: $param_grade['keterangan_state'] = 'Sudah mengerjakan, BELUM LULUS passing grade';break;
        }

        if($param_grade['modname'] == 'h5pactivity') {
            $param_grade['timecompleted'] = $param_grade['timecompleted'] ? date('Y-m-d H:i:s',$param_grade['timecompleted']) : null;
            $param_grade['gradesubmitted'] = $param_grade['gradesubmitted'] ? date('Y-m-d H:i:s',$param_grade['gradesubmitted']) : null;
        }


        return $param_grade;
    }

    public static function get_grade_completion_returns() {
        return new external_single_structure(
            array(
//                'itemmodule' => new external_value(PARAM_TEXT, ''),
//                'iteminstance' => new external_value(PARAM_TEXT, ''),
                'modname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                'gradesubmitted' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                'grade' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'gradepass' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'grademax' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),

                "grade_pretest" => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                "graderaw_pretest" => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                "grademax_pretest" => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),

                'grade_posttest' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'graderaw_posttest' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'grademax_posttest' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),

                'completion_state' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                'timecompleted' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                'keterangan_state' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
            )
        );
    }

    public static function get_grade_items_parameters() {
        return new external_function_parameters(
            array(
                'userid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'courseid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_grade_items($userid,$courseid) {
        global $DB;


        $params = self::validate_parameters(self::get_grade_items_parameters(),
            [
                'userid' => $userid,
                'courseid' => $courseid,
            ]);

//        echo json_encode($params,JSON_PRETTY_PRINT);exit();
        $courseid = $DB->get_record('course',['idnumber' => $params['courseid']])->id;
        $userid = $DB->get_record('user',['idnumber' => $params['userid']])->id;

//        echo json_encode([$courseid,$userid],JSON_PRETTY_PRINT);exit();
        $grade = gradereport_user_external::get_grade_items($courseid,$userid);
//        $gradetable = gradereport_user_external::get_grades_table($courseid,$userid);
//        echo json_encode(['GRADE'=> $grade, 'TABLE' => $gradetable],JSON_PRETTY_PRINT);exit();

        return $grade;
    }

    public static function get_grade_items_returns() {
        return new external_single_structure(
            array(
                'usergrades' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'courseid' => new external_value(PARAM_INT, 'course id'),
                            'courseidnumber' => new external_value(PARAM_TEXT, 'course idnumber'),
                            'userid'   => new external_value(PARAM_INT, 'user id'),
                            'userfullname' => new external_value(PARAM_TEXT, 'user fullname'),
                            'useridnumber' => new external_value(
                                core_user::get_property_type('idnumber'), 'user idnumber'),
                            'maxdepth'   => new external_value(PARAM_INT, 'table max depth (needed for printing it)'),
                            'gradeitems' => new external_multiple_structure(
                                new external_single_structure(
                                    array(
                                        'id' => new external_value(PARAM_INT, 'Grade item id'),
                                        'itemname' => new external_value(PARAM_TEXT, 'Grade item name'),
                                        'itemtype' => new external_value(PARAM_ALPHA, 'Grade item type'),
                                        'itemmodule' => new external_value(PARAM_PLUGIN, 'Grade item module'),
                                        'iteminstance' => new external_value(PARAM_INT, 'Grade item instance'),
                                        'itemnumber' => new external_value(PARAM_INT, 'Grade item item number'),
                                        'idnumber' => new external_value(PARAM_TEXT, 'Grade item idnumber'),
                                        'categoryid' => new external_value(PARAM_INT, 'Grade item category id'),
                                        'outcomeid' => new external_value(PARAM_INT, 'Outcome id'),
                                        'scaleid' => new external_value(PARAM_INT, 'Scale id'),
                                        'locked' => new external_value(PARAM_BOOL, 'Grade item for user locked?', VALUE_OPTIONAL),
                                        'cmid' => new external_value(PARAM_INT, 'Course module id (if type mod)', VALUE_OPTIONAL),
                                        'weightraw' => new external_value(PARAM_FLOAT, 'Weight raw', VALUE_OPTIONAL),
                                        'weightformatted' => new external_value(PARAM_NOTAGS, 'Weight', VALUE_OPTIONAL),
                                        'status' => new external_value(PARAM_ALPHA, 'Status', VALUE_OPTIONAL),
                                        'graderaw' => new external_value(PARAM_FLOAT, 'Grade raw', VALUE_OPTIONAL),
                                        'gradedatesubmitted' => new external_value(PARAM_INT, 'Grade submit date', VALUE_OPTIONAL),
                                        'gradedategraded' => new external_value(PARAM_INT, 'Grade graded date', VALUE_OPTIONAL),
                                        'gradehiddenbydate' => new external_value(PARAM_BOOL, 'Grade hidden by date?', VALUE_OPTIONAL),
                                        'gradeneedsupdate' => new external_value(PARAM_BOOL, 'Grade needs update?', VALUE_OPTIONAL),
                                        'gradeishidden' => new external_value(PARAM_BOOL, 'Grade is hidden?', VALUE_OPTIONAL),
                                        'gradeislocked' => new external_value(PARAM_BOOL, 'Grade is locked?', VALUE_OPTIONAL),
                                        'gradeisoverridden' => new external_value(PARAM_BOOL, 'Grade overridden?', VALUE_OPTIONAL),
                                        'gradeformatted' => new external_value(PARAM_NOTAGS, 'The grade formatted', VALUE_OPTIONAL),
                                        'grademin' => new external_value(PARAM_FLOAT, 'Grade min', VALUE_OPTIONAL),
                                        'grademax' => new external_value(PARAM_FLOAT, 'Grade max', VALUE_OPTIONAL),
                                        'rangeformatted' => new external_value(PARAM_NOTAGS, 'Range formatted', VALUE_OPTIONAL),
                                        'percentageformatted' => new external_value(PARAM_NOTAGS, 'Percentage', VALUE_OPTIONAL),
                                        'lettergradeformatted' => new external_value(PARAM_NOTAGS, 'Letter grade', VALUE_OPTIONAL),
                                        'rank' => new external_value(PARAM_INT, 'Rank in the course', VALUE_OPTIONAL),
                                        'numusers' => new external_value(PARAM_INT, 'Num users in course', VALUE_OPTIONAL),
                                        'averageformatted' => new external_value(PARAM_NOTAGS, 'Grade average', VALUE_OPTIONAL),
                                        'feedback' => new external_value(PARAM_RAW, 'Grade feedback', VALUE_OPTIONAL),
                                        'feedbackformat' => new external_format_value('feedback', VALUE_OPTIONAL),
                                    ), 'Grade items'
                                )
                            )
                        )
                    )
                ),
                'warnings' => new external_warnings()
            )
        );
    }

}
