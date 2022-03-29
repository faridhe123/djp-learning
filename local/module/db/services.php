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
 * Quiz external functions and service definitions.
 *
 * @package    local_quiz
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(

    'local_module_create_module' => array(
        'classname'     => 'local_module_external',
        'methodname'    => 'create_module',
        'description'   => 'membuat Activity module Sesuai modulename',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
    ),
    'local_module_create_page' => array(
        'classname'     => 'local_module_external',
        'methodname'    => 'create_page_module',
        'description'   => 'membuat Activity module PAGE',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
    ),
    'local_module_create_quiz' => array(
        'classname'     => 'local_module_external',
        'methodname'    => 'create_quiz_module',
        'description'   => 'Membuat activity module QUIZ',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
    ),
    'local_module_create_scorm' => array(
        'classname'     => 'local_module_external',
        'methodname'    => 'create_scorm_module',
        'description'   => 'Membuat activity module SCORM',
        'type'          => 'write',
        'capabilities'  => 'mod/quiz:view',
        'services'      => array(MOODLE_OFFICIAL_MOBILE_SERVICE)
    ),

);
