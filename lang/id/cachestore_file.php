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
 * Strings for component 'cachestore_file', language 'id', version '3.11'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Buat direktori otomatis';
$string['autocreate_help'] = 'Jika diaktifkan, direktori yang ditentukan di jalur akan dibuat secara otomatis jika belum ada.';
$string['path'] = 'Jalur tembolok';
$string['path_help'] = 'Direktori yang harus digunakan untuk menyimpan berkas untuk penyimpanan tembolok ini. Jika dibiarkan kosong (bawaan) sebuah direktori akan secara otomatis dibuat di direktori moodledata. Ini dapat digunakan untuk mengarahkan penyimpanan berkas ke direktori pada drive yang berkinerja lebih baik (seperti yang ada di memori).';
$string['pluginname'] = 'Tembolok berkas';
$string['prescan'] = 'Pra pindai direktori';
$string['prescan_help'] = 'Jika diaktifkan, direktori dipindai saat cache pertama kali digunakan dan permintaan berkas diperiksa terlebih dahulu dengan data pindaian. Ini dapat membantu jika Anda memiliki sistem berkas yang lambat dan menemukan bahwa operasi berkas menyebabkan Anda mengalami \'bottleneck\'.';
$string['privacy:metadata'] = 'Pengaya penyimpan berkas tembolok menyimpan data secara singkat sebagai bagian dari fungsi cachingnya tetapi data ini dibersihkan secara teratur.';
$string['singledirectory'] = 'Penyimpanan direktori tunggal';
$string['singledirectory_help'] = 'Jika berkas yang diaktifkan (item yang di-cache) akan disimpan dalam satu direktori daripada dipecah menjadi beberapa direktori.

Mengaktifkan ini akan mempercepat interaksi berkas tetapi harus dibayar dengan peningkatan risiko mengenai batasan sistem berkas.

Dianjurkan untuk hanya mengaktifkan ini jika hal berikut ini benar:

* Jika Anda tahu jumlah item dalam cache akan cukup kecil sehingga tidak akan menyebabkan masalah pada sistem berkas yang Anda jalankan.
* Data yang di-cache tidak mahal untuk dihasilkan. Jika tetap menggunakan bawaan mungkin masih menjadi pilihan yang lebih baik karena mengurangi kemungkinan masalah.';
