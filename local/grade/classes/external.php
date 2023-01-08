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
                'moduleid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, "INI DEFAULT VALUE NYA"),
                'username' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'userid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
                'courseid' => new external_value(PARAM_TEXT, 'context id', VALUE_DEFAULT, null),
            )
        );
    }

    public static function get_grade_completion($moduleid,$username,$userid,$courseid) {
        global $DB,$CFG;

        $params = self::validate_parameters(self::get_grade_completion_parameters(),
            [
                'moduleid' => $moduleid,
                'username' => $username,
                'userid' => $userid,
                'courseid' => $courseid,
            ]);

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
                $param_grade['grade'] = (float)$usergrades['graderaw'];
                $param_grade['grademax'] = (float)$usergrades['grademax'];
                $param_grade['gradesubmitted'] = (float)$usergrades['gradedatesubmitted'];
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

        return $param_grade;
    }

    public static function get_grade_completion_returns() {
        return new external_single_structure(
            array(
//                'itemmodule' => new external_value(PARAM_TEXT, ''),
//                'iteminstance' => new external_value(PARAM_TEXT, ''),
                'modname' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
                'gradesubmitted' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                'grade' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'gradepass' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'grademax' => new external_value(PARAM_FLOAT, '',VALUE_DEFAULT,null),
                'completion_state' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                'timecompleted' => new external_value(PARAM_INT, '',VALUE_DEFAULT,null),
                'keterangan_state' => new external_value(PARAM_TEXT, '',VALUE_DEFAULT,null),
            )
        );
    }

}
