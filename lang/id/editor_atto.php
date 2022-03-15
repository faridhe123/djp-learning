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
 * Strings for component 'editor_atto', language 'id', version '3.11'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Tidak dapat terhubung ke server. Jika Anda mengirimkan halaman ini sekarang, perubahan Anda mungkin akan hilang.';
$string['autosavefrequency'] = 'Frekuensi simpan otomatis';
$string['autosavefrequency_desc'] = 'Ini adalah jumlah detik antara upaya penyimpanan otomatis. Atto akan secara otomatis menyimpan teks di editor sesuai dengan setelan ini, sehingga teks dapat dipulihkan secara otomatis ketika pengguna yang sama kembali ke formulir yang sama.';
$string['autosaves'] = 'Informasi simpan otomatis editor';
$string['autosavesucceeded'] = 'Draf disimpan.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Baris \'{$a}\' tidak dalam format yang benar.';
$string['errorgroupisusedtwice'] = 'Grup \'{$a}\' didefinisikan dua kali; nama grup harus unik.';
$string['errornopluginsorgroupsfound'] = 'Tidak ada pengaya atau grup yang ditemukan; silakan tambahkan beberapa grup dan pengaya.';
$string['errorpluginisusedtwice'] = 'Pengaya \'{$a}\' digunakan dua kali; plugin hanya dapat ditentukan satu kali.';
$string['errorpluginnotfound'] = 'Pengaya \'{$a}\' tidak dapat digunakan; sepertinya tidak terpasang.';
$string['errortextrecovery'] = 'Sayangnya versi draf tidak dapat dipulihkan.';
$string['infostatus'] = 'Informasi';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Editor HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Draf editor teks disimpan secara otomatis.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Teks yang disimpan.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Waktu konten diubah.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID pengguna yang datanya disimpan.';
$string['recover'] = 'Pulihkan';
$string['settings'] = 'Setelan bilah alat Atto';
$string['subplugintype_atto'] = 'Pengaya Atto';
$string['subplugintype_atto_plural'] = 'Pengaya Atto';
$string['taskautosavecleanup'] = 'Hapus draf simpan otomatis yang kedaluwarsa';
$string['textrecovered'] = 'Versi konsep teks ini dipulihkan secara otomatis.';
$string['toolbarconfig'] = 'Konfigurasi bilah alat';
$string['toolbarconfig_desc'] = 'Daftar pengaya dan urutan tampilannya dapat dikonfigurasi di sini. Konfigurasi terdiri dari grup (satu per baris) diikuti oleh daftar plugin yang dipesan untuk grup itu. Grup dipisahkan dari plugin dengan tanda sama dengan dan plugin dipisahkan dengan koma. Nama grup harus unik dan harus menunjukkan kesamaan tombol. Nama tombol dan grup tidak boleh diulang dan hanya boleh berisi karakter alfanumerik.';
$string['warningstatus'] = 'Peringatan';
