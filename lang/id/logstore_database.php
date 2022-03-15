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
 * Strings for component 'logstore_database', language 'id', version '3.11'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Ukuran buffer';
$string['buffersize_help'] = 'Jumlah entri log yang disisipkan dalam satu operasi massal basis data, yang meningkatkan kinerja.';
$string['conectexception'] = 'Tidak tersambung basis data.';
$string['create'] = 'Buat';
$string['databasecollation'] = 'Kolasi basis data';
$string['databasehandlesoptions'] = 'Opsi penanganan basis data';
$string['databasehandlesoptions_help'] = 'Apakah basis data jarak jauh menangani opsinya sendiri.';
$string['databasepersist'] = 'koneksi basis data persisten jarak jauh';
$string['databaseschema'] = 'Skema basis data';
$string['databasesettings'] = 'Setelan basis data';
$string['databasesettings_help'] = 'Detail koneksi untuk log basis data eksternal: {$a}';
$string['databasetable'] = 'Tabel basis data';
$string['databasetable_help'] = 'Nama tabel tempat log akan disimpan. Tabel ini harus memiliki struktur yang identik dengan yang digunakan oleh logstore_standard (mdl_logstore_standard_log).';
$string['filters'] = 'Filter log';
$string['filters_help'] = 'Aktifkan filter yang mengecualikan beberapa aksi agar tidak dicatat.';
$string['includeactions'] = 'Sertakan aksi tipe ini';
$string['includelevels'] = 'Sertakan aksi dengan level edukasi';
$string['jsonformat'] = 'Format JSON';
$string['jsonformat_desc'] = 'Gunakan format JSON standar sebagai ganti data serial PHP di ruas basis data \'other\'.';
$string['logguests'] = 'Log aksi tamu';
$string['other'] = 'Lainnya';
$string['participating'] = 'Berpartisipasi';
$string['pluginname'] = 'Log basis data eksternal';
$string['pluginname_desc'] = 'Pengaya log yang menyimpan entri log di tabel basis data eksternal.';
$string['privacy:metadata:log'] = 'Kumpulan acara masa lalu';
$string['privacy:metadata:log:anonymous'] = 'Apakah acara ditandai sebagai anonim';
$string['privacy:metadata:log:eventname'] = 'Nama acara';
$string['privacy:metadata:log:ip'] = 'Alamat IP yang digunakan pada saat acara';
$string['privacy:metadata:log:origin'] = 'Asal mula acara';
$string['privacy:metadata:log:other'] = 'Informasi tambahan tentang acara';
$string['privacy:metadata:log:realuserid'] = 'Informasi tambahan acara tersebut';
$string['privacy:metadata:log:relateduserid'] = 'ID pengguna yang terkait dengan acara ini';
$string['privacy:metadata:log:timecreated'] = 'ID pengguna yang terkait dengan acara ini';
$string['privacy:metadata:log:userid'] = 'ID pengguna yang memicu peristiwa ini';
$string['read'] = 'Baca';
$string['tablenotfound'] = 'Tabel yang ditentukan tidak ditemukan';
$string['teaching'] = 'Mengajar';
$string['testingsettings'] = 'Menguji pengaturan basis data ...';
$string['testsettings'] = 'Uji koneksi';
$string['update'] = 'Perbarui';
