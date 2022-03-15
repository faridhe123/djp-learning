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
 * Strings for component 'filter_mathjaxloader', language 'id', version '3.11'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Pembatas persamaan tambahan';
$string['additionaldelimiters_help'] = 'Filter MathJax mem-parsing teks untuk persamaan yang terdapat dalam karakter pembatas.

Ini adalah pesan percobaan untuk mengonfirmasi bahwa Anda telah berhasil mengonfigurasi surel keluar situs Anda.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'URL Mathjax';
$string['httpsurl_help'] = 'URL lengkap ke pustaka MathJax.';
$string['localinstall'] = 'Instalasi MathJax lokal';
$string['localinstall_help'] = 'Konfigurasi MathJax bawaan menggunakan MathJax versi CDN, tetapi MathJax dapat diinstal secara lokal jika diperlukan.

Ini dapat berguna untuk menghemat lebar pita atau karena pembatasan proksi lokal.

Untuk menggunakan instalasi lokal MathJax, pertama-tama unduh pustaka MathJax lengkap dari https://www.mathjax.org/. Kemudian instal di server web. Terakhir, perbarui setelan filter MathJax httpurl dan/atau httpsurl untuk menunjuk ke URL MathJax.js lokal.';
$string['mathjaxsettings'] = 'Konfigurasi MathJax';
$string['mathjaxsettings_desc'] = 'Konfigurasi MathJax bawaan harus sesuai untuk sebagian besar pengguna, tetapi MathJax sangat dapat dikonfigurasi dan salah satu opsi konfigurasi MathJax standar dapat ditambahkan di sini.';
$string['privacy:metadata'] = 'Pengaya Mathjax tidak menyimpan data pribadi apa pun.';
$string['texfiltercompatibility'] = 'Kompatibilitas filter TeX';
$string['texfiltercompatibility_help'] = 'Filter MathJax dapat digunakan sebagai pengganti filter notasi TeX.

Untuk mendukung semua pembatas yang didukung oleh filter notasi TeX, MathJax akan dikonfigurasi untuk menampilkan semua persamaan "sejajar" dengan teks.';
