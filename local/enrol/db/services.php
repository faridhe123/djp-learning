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
 * Custom ENROL Webservice
 *
 * @package    local_enrol
 * @category   external
 * @copyright  2022 Muhammad Dhea Farizka <farizkadhea@gmail.com>
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(

    'local_enrol_manual_enrol_users' => array(
        'classname'     => 'local_enrol_external',
        'methodname'    => 'manual_enrol_users',
        'description'   => 'Enrol user berdasarkan field spesifik',
        'type'          => 'write',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
    ),
    'local_enrol_manual_unenrol_users' => array(
        'classname'     => 'local_enrol_external',
        'methodname'    => 'manual_unenrol_users',
        'description'   => 'Unenrol user berdasarkan field spesifik',
        'type'          => 'write',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
    ),

);
