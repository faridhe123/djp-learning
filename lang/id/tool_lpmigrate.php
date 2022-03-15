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
 * Strings for component 'tool_lpmigrate', language 'id', version '3.11'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Kursus diperbolehkan';
$string['allowedcourses_help'] = 'Pilih kursus yang akan dimigrasikan ke kerangka kerja baru. Jika tidak ada kursus yang ditentukan, maka semua kursus akan dimigrasikan.';
$string['continuetoframeworks'] = 'Lanjutkan ke kerangka kerja';
$string['coursecompetencymigrations'] = 'Migrasi kompetensi kursus';
$string['coursemodulecompetencymigrations'] = 'Aktivitas kursus dan migrasi kompetensi sumber';
$string['coursemodulesfound'] = 'Kegiatan kursus atau sumber ditemukan';
$string['coursesfound'] = 'Kursus ditemukan';
$string['coursestartdate'] = 'Tanggal mulai kursus';
$string['coursestartdate_help'] = 'Jika diaktifkan, kursus dengan tanggal mulai sebelum tanggal yang ditentukan tidak akan dimigrasikan.';
$string['disallowedcourses'] = 'Kursus yang tidak diizinkan';
$string['disallowedcourses_help'] = 'Pilih kursus apa pun yang TIDAK boleh dimigrasikan ke kerangka kerja baru.';
$string['errorcannotmigratetosameframework'] = 'Tidak dapat bermigrasi dari dan ke kerangka kerja yang sama.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Tidak dapat memetakan ke kompetensi apa pun dalam kerangka kerja ini.';
$string['errors'] = 'Galat';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Kesalahan saat memigrasikan kompetensi kursus: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Kesalahan saat memigrasikan aktivitas atau kompetensi sumber daya: {$a}';
$string['excludethese'] = 'Kecualikan ini';
$string['explanation'] = 'Alat ini dapat digunakan untuk memperbarui kerangka kompetensi ke versi yang lebih baru. Ini mencari kompetensi dalam kursus dan kegiatan menggunakan kerangka kerja yang lebih lama, dan memperbarui tautan untuk menunjuk ke kerangka kerja baru.

Tidak disarankan untuk mengedit kumpulan kompetensi lama secara langsung, karena ini akan mengubah semua kompetensi yang telah diberikan dalam rencana pembelajaran pengguna.

Biasanya Anda akan mengimpor kerangka kerja versi baru, menyembunyikan kerangka kerja lama, lalu menggunakan alat ini untuk memigrasikan kursus baru ke kerangka kerja baru.';
$string['findingcoursecompetencies'] = 'Menemukan kompetensi kursus';
$string['findingmodulecompetencies'] = 'Menemukan aktivitas dan kompetensi sumber daya';
$string['frameworks'] = 'Kerangka kerja';
$string['limittothese'] = 'Batasi untuk ini';
$string['lpmigrate:frameworksmigrate'] = 'Migrasi kerangka kerja';
$string['migrateframeworks'] = 'Migrasi kerangka kerja';
$string['migratefrom'] = 'Migrasi dari';
$string['migratefrom_help'] = 'Pilih kerangka kerja lama yang sedang digunakan.';
$string['migratemore'] = 'Migrasi lebih banyak';
$string['migrateto'] = 'Migrasi ke';
$string['migrateto_help'] = 'Pilih versi kerangka kerja yang lebih baru. Hanya mungkin untuk memilih kerangka kerja yang tidak disembunyikan.';
$string['migratingcourses'] = 'Migrasi kursus';
$string['missingmappings'] = 'Pemetaan tidak ada';
$string['performmigration'] = 'Lakukan migrasi';
$string['pluginname'] = 'Alat migrasi kompetensi';
$string['privacy:metadata'] = 'Pengaya Perkakas migrasi kompetensi tidak menyimpan data pribadi apa pun.';
$string['results'] = 'Hasil';
$string['startdatefrom'] = 'Tanggal mulai sejak';
$string['unmappedin'] = 'Belum dipetakan di {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Kompetensi kursus tidak dapat dihapus.';
$string['warningcouldnotremovemodulecompetency'] = 'Aktivitas atau kompetensi sumber tidak dapat dihapus.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Kompetensi kursus tujuan sudah ada.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Aktivitas tujuan atau kompetensi sumber sudah ada.';
$string['warnings'] = 'Peringatan';
