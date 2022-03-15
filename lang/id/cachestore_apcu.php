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
 * Strings for component 'cachestore_apcu', language 'id', version '3.11'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Perlu diketahui bahwa APCu hanya merupakan pilihan yang cocok untuk situs node tunggal atau tembolok yang dapat disimpan secara lokal.
Untuk informasi lebih lanjut, lihat <a href="{$a}">dokumentasi cache pengguna APC</a>.';
$string['notice'] = 'Perhatian';
$string['pluginname'] = 'Tembolok pengguna APC (APCu)';
$string['prefix'] = 'Prefiks';
$string['prefix_help'] = 'Prefiks di atas digunakan untuk semua kunci yang disimpan dalam model penyimpanan APC ini. Secara bawaan prefiks basis data digunakan.';
$string['prefixinvalid'] = 'Prefiks yang Anda pilih tidak valid. Anda hanya dapat menggunakan a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Prefiks yang Anda pilih tidak unik. Harap pilih prefiks yang unik.';
$string['privacy:metadata'] = 'Pengaya tembolok pengguna APC (APCu) menyimpan data secara singkat sebagai bagian dari fungsi tembolok tetapi data ini dibersihkan secara teratur dan tidak dikirim secara eksternal dengan cara apa pun.';
$string['testperformance'] = 'Uji kinerja';
$string['testperformance_desc'] = 'Jika diaktifkan, kinerja APCu akan disertakan saat melihat halaman Uji kinerja. Mengaktifkan ini di situs produksi tidak disarankan.';
