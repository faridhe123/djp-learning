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
 * @package    local_files
 * @category   external
 * @copyright  2016 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since      Moodle 3.1
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(
    'local_files_test' => array(
        'classname' => 'local_files_external',
        'methodname' => 'test',
        'description' => 'test',
        'type'        => 'write',
        'classpath'   => 'files/externallib.php',
    ),
    'local_files_upload' => array(
        'classname' => 'local_files_external',
        'methodname' => 'upload',
        'description' => 'upload a file to moodle TEST',
        'type'        => 'write',
        'classpath'   => 'files/externallib.php',
    ),
    'local_files_upload_tfg' => array(
        'classname' => 'local_files_external',
        'methodname' => 'upload_tfg',
        'description' => 'upload a file to moodle',
        'type'        => 'write',
        'classpath'   => 'files/externallib.php',
    ),
);
