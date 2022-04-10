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

class local_enrol_external extends external_api {

    /**
     * TEST PARAMETER
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
//    public static function manual_enrol_users_parameters() {
//        return new external_function_parameters(
//            array(
//                'parameter' => new external_value(PARAM_TEXT, 'context id', VALUE_OPTIONAL, "INI DEFAULT VALUE NYA"),
//            )
//        );
//    }
    /*TEST FUNCTION*/
//    public static function manual_enrol_users($parameter)
//    {
//        $params = self::validate_parameters(self::manual_enrol_users_parameters(),
//            array(
//                'parameter' => $parameter,
//            ));
//
//        return ['value' => var_dump($params)];
//    }
    /*TEST RETURN*/
//    public static function manual_enrol_users_returns() {
//        return new external_single_structure(
//            array(
//                'value' => new external_value(PARAM_TEXT, ''),
//            )
//        );
//    }

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     * @since Moodle 2.2
     */
    public static function manual_enrol_users_parameters() {
        return new external_function_parameters(
            array(
                'enrolments' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'roleid' => new external_value(PARAM_INT, 'Role to assign to the user'),
                            'userid' => new external_value(PARAM_INT, 'The user that is going to be enrolled',VALUE_DEFAULT,null),
                            'otherkey' => new external_value(PARAM_TEXT, 'Nama Kolom lain untuk dijadikan parameter',VALUE_DEFAULT,null),
                            'keyvalue' => new external_value(PARAM_TEXT, 'Value key untuk dicari',VALUE_DEFAULT,null),
                            'courseid' => new external_value(PARAM_INT, 'The course to enrol the user role in'),
                            'timestart' => new external_value(PARAM_INT, 'Timestamp when the enrolment start', VALUE_OPTIONAL),
                            'timeend' => new external_value(PARAM_INT, 'Timestamp when the enrolment end', VALUE_OPTIONAL),
                            'suspend' => new external_value(PARAM_INT, 'set to 1 to suspend the enrolment', VALUE_OPTIONAL)
                        )
                    )
                )
            )
        );
    }
    /**
     * Enrolment of users.
     *
     * Function throw an exception at the first error encountered.
     * @param array $enrolments  An array of user enrolment
     * @since Moodle 2.2
     */
    public static function manual_enrol_users($enrolments) {
        global $DB, $CFG;

        require_once($CFG->libdir . '/enrollib.php');

        $params = self::validate_parameters(self::manual_enrol_users_parameters(),
            array('enrolments' => $enrolments));

        $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs
        // (except if the DB doesn't support it).

        // Retrieve the manual enrolment plugin.
        $enrol = enrol_get_plugin('manual');
        if (empty($enrol)) {
            throw new moodle_exception('manualpluginnotinstalled', 'enrol_manual');
        }

        foreach ($params['enrolments'] as $enrolment) {

            # Jika ada key lain untuk parameter pencarian selain ID
            if($enrolment['otherkey']) {
                $user = $DB->get_record('user', array($enrolment['otherkey'] => $enrolment['keyvalue']));
                $enrolment['userid'] = $user->id;
            } elseif (!$enrolment['userid']) {
                print_error("Masukkan ID / Key lainnya!");
            }

            // Ensure the current user is allowed to run this function in the enrolment context.
            $context = context_course::instance($enrolment['courseid'], IGNORE_MISSING);
            self::validate_context($context);

            // Check that the user has the permission to manual enrol.
            require_capability('enrol/manual:enrol', $context);

            // Throw an exception if user is not able to assign the role.
            $roles = get_assignable_roles($context);
            if (!array_key_exists($enrolment['roleid'], $roles)) {
                $errorparams = new stdClass();
                $errorparams->roleid = $enrolment['roleid'];
                $errorparams->courseid = $enrolment['courseid'];
                $errorparams->userid = $enrolment['userid'];
                throw new moodle_exception('wsusercannotassign', 'enrol_manual', '', $errorparams);
            }

            // Check manual enrolment plugin instance is enabled/exist.
            $instance = null;
            $enrolinstances = enrol_get_instances($enrolment['courseid'], true);

            foreach ($enrolinstances as $courseenrolinstance) {
                if ($courseenrolinstance->enrol == "manual") {
                    $instance = $courseenrolinstance;
                    break;
                }
            }
            if (empty($instance)) {
                $errorparams = new stdClass();
                $errorparams->courseid = $enrolment['courseid'];
                throw new moodle_exception('wsnoinstance', 'enrol_manual', $errorparams);
            }

            // Check that the plugin accept enrolment (it should always the case, it's hard coded in the plugin).
            if (!$enrol->allow_enrol($instance)) {
                $errorparams = new stdClass();
                $errorparams->roleid = $enrolment['roleid'];
                $errorparams->courseid = $enrolment['courseid'];
                $errorparams->userid = $enrolment['userid'];
                throw new moodle_exception('wscannotenrol', 'enrol_manual', '', $errorparams);
            }

            // Finally proceed the enrolment.
            $enrolment['timestart'] = isset($enrolment['timestart']) ? $enrolment['timestart'] : 0;
            $enrolment['timeend'] = isset($enrolment['timeend']) ? $enrolment['timeend'] : 0;
            $enrolment['status'] = (isset($enrolment['suspend']) && !empty($enrolment['suspend'])) ?
                ENROL_USER_SUSPENDED : ENROL_USER_ACTIVE;


//            return ['value' => var_dump($instance)];
            unset($enrolment['otherkey']);
            unset($enrolment['keyvalue']);
//            die(var_dump($enrolment));
            $enrol->enrol_user($instance, $enrolment['userid'], $enrolment['roleid'],
                $enrolment['timestart'], $enrolment['timeend'], $enrolment['status']);

            # tidak boleh ada return ... kalau ada user tidak bisa dienrol

        }

        $transaction->allow_commit();
    }
    /**
     * Returns description of method result value.
     *
     * @return null
     * @since Moodle 2.2
     */
    public static function manual_enrol_users_returns() {
        return null;
    }

    /**
     * Returns description of method parameters.
     *
     * @return external_function_parameters
     */
    public static function manual_unenrol_users_parameters() {
        return new external_function_parameters(array(
            'enrolments' => new external_multiple_structure(
                new external_single_structure(
                    array(
                        'userid' => new external_value(PARAM_INT, 'The user that is going to be enrolled',VALUE_DEFAULT,null),
                        'otherkey' => new external_value(PARAM_TEXT, 'Nama Kolom lain untuk dijadikan parameter',VALUE_DEFAULT,null),
                        'keyvalue' => new external_value(PARAM_TEXT, 'Value key untuk dicari',VALUE_DEFAULT,null),
                        'courseid' => new external_value(PARAM_INT, 'The course to unenrol the user from'),
                        'roleid' => new external_value(PARAM_INT, 'The user role', VALUE_OPTIONAL),
                    )
                )
            )
        ));
    }

    /**
     * Unenrolment of users.
     *
     * @param array $enrolments an array of course user and role ids
     * @throws coding_exception
     * @throws dml_transaction_exception
     * @throws invalid_parameter_exception
     * @throws moodle_exception
     * @throws required_capability_exception
     * @throws restricted_context_exception
     */
    public static function manual_unenrol_users($enrolments) {
        global $CFG, $DB;
        $params = self::validate_parameters(self::manual_unenrol_users_parameters(), array('enrolments' => $enrolments));
        require_once($CFG->libdir . '/enrollib.php');
        $transaction = $DB->start_delegated_transaction(); // Rollback all enrolment if an error occurs.
        $enrol = enrol_get_plugin('manual');
        if (empty($enrol)) {
            throw new moodle_exception('manualpluginnotinstalled', 'enrol_manual');
        }

        foreach ($params['enrolments'] as $enrolment) {
            # Jika ada key lain untuk parameter pencarian selain ID
            if($enrolment['otherkey']) {
                $user = $DB->get_record('user', array($enrolment['otherkey'] => $enrolment['keyvalue']));
                $enrolment['userid'] = $user->id;
            } elseif (!$enrolment['userid']) {
                print_error("Masukkan ID / Key lainnya!");
            }

            $context = context_course::instance($enrolment['courseid']);
            self::validate_context($context);
            require_capability('enrol/manual:unenrol', $context);
            $instance = $DB->get_record('enrol', array('courseid' => $enrolment['courseid'], 'enrol' => 'manual'));
            if (!$instance) {
                throw new moodle_exception('wsnoinstance', 'enrol_manual', $enrolment);
            }
            $user = $DB->get_record('user', array('id' => $enrolment['userid']));
            if (!$user) {
                throw new invalid_parameter_exception('User id not exist: '.$enrolment['userid']);
            }
            if (!$enrol->allow_unenrol($instance)) {
                throw new moodle_exception('wscannotunenrol', 'enrol_manual', '', $enrolment);
            }
            $enrol->unenrol_user($instance, $enrolment['userid']);
        }
        $transaction->allow_commit();
    }

    /**
     * Returns description of method result value.
     *
     * @return null
     */
    public static function manual_unenrol_users_returns() {
        return null;
    }

}
