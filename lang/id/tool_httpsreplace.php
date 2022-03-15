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
 * Strings for component 'tool_httpsreplace', language 'id', version '3.11'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Lengkap';
$string['count'] = 'Jumlah item konten yang disematkan';
$string['disclaimer'] = 'Saya mengerti risiko dari operasi ini';
$string['doclink'] = 'Alat konversi HTTPS';
$string['doit'] = 'Lakukan konversi';
$string['domain'] = 'Domain bermasalah';
$string['domainexplain'] = 'Saat situs dipindahkan dari HTTP ke HTTPS, semua konten HTTP yang disematkan akan berhenti berfungsi. Alat ini memungkinkan Anda untuk secara otomatis mengonversi konten HTTP ke HTTPS.

Sebelum melakukan konversi, konten akan dipindai untuk menemukan URL yang mungkin tidak berfungsi setelah konversi. Anda mungkin ingin memeriksa masing-masing memiliki HTTPS yang tersedia, atau mencari sumber alternatif.';
$string['domainexplainhelp'] = 'Domain ini ditemukan di konten Anda, tetapi tampaknya tidak mendukung konten HTTPS. Setelah beralih ke HTTPS, konten yang disertakan dari situs ini tidak akan lagi ditampilkan dalam Moodle untuk pengguna dengan peramban modern yang aman. Ada kemungkinan bahwa situs-situs ini untuk sementara atau permanen tidak tersedia dan tidak akan berfungsi dengan setelan keamanan mana pun. Lanjutkan hanya setelah meninjau hasil ini dan menentukan apakah konten yang dihosting secara eksternal ini tidak penting. Catatan: Konten ini tidak akan berfungsi lagi setelah beralih ke HTTPS.';
$string['httpwarning'] = 'Model ini masih berjalan di HTTP. Anda masih dapat menjalankan alat ini dan konten eksternal akan diubah menjadi HTTPS, tetapi konten internal akan tetap di HTTP. Anda perlu menjalankan skrip ini lagi setelah beralih ke HTTPS untuk mengonversi konten internal.';
$string['notimplemented'] = 'Maaf, fitur ini tidak diterapkan di pengandar basis data Anda.';
$string['oktoprocede'] = 'Pemindaian tidak menemukan masalah dengan konten Anda. Anda dapat melanjutkan untuk meningkatkan konten HTTP apa pun untuk menggunakan HTTPS.';
$string['pageheader'] = 'Tingkatkan URL konten yang dihosting secara eksternal ke HTTPS';
$string['pluginname'] = 'Alat konversi HTTPS';
$string['privacy:metadata'] = 'Pengaya alat konversi HTTPS tidak menyimpan data pribadi apa pun.';
$string['replacing'] = 'Mengganti konten HTTP dengan HTTPS...';
$string['searching'] = 'Mencari {$a}';
$string['takeabackupwarning'] = 'Peringatan: Setelah menjalankan alat ini, perubahan tidak dapat dikembalikan. Sebaiknya pencadangan situs dilakukan sebelum melanjutkan, karena ada risiko kecil penggantian konten yang salah.';
$string['toolintro'] = 'Jika Anda berencana mengonversi situs Anda ke HTTPS, Anda dapat menggunakan <a href="{$a}">alat konversi HTTPS</a> untuk mengonversi konten yang disematkan ke HTTPS.';
