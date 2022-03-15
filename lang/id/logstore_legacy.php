<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'logstore_legacy', language 'id', version '3.11'.
 *
 * @package     logstore_legacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventlegacylogged'] = 'Log Peristiwa lama';
$string['loglegacy'] = 'Log data lama';
$string['loglegacy_help'] = 'Pengaya ini mencatat data log ke tabel log lama (mdl_log). Fungsionalitas ini telah digantikan oleh pengaya log yang lebih baru, lebih kaya dan lebih efisien, jadi Anda sebaiknya hanya menjalankan pengaya ini jika Anda memiliki laporan tersuai lama yang secara langsung menanyakan tabel log lama. Menulis ke log lama akan meningkatkan beban, jadi sebaiknya Anda menonaktifkan pengaya ini karena alasan kinerja saat tidak diperlukan.';
$string['pluginname'] = 'Log lawas';
$string['pluginname_desc'] = 'Pengaya log yang menyimpan entri log di tabel log lama.';
$string['privacy:metadata:log'] = 'Kumpulan acara masa lalu';
$string['privacy:metadata:log:action'] = 'Deskripsi aksi';
$string['privacy:metadata:log:info'] = 'Informasi tambahan';
$string['privacy:metadata:log:ip'] = 'Alamat IP yang digunakan pada saat acara';
$string['privacy:metadata:log:time'] = 'Waktu terjadinya aksi';
$string['privacy:metadata:log:url'] = 'URL terkait acara tersebut';
$string['privacy:metadata:log:userid'] = 'ID pengguna yang melakukan aksi';
$string['taskcleanup'] = 'Pembersihan tabel log lama';
