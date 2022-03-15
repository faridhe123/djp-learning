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
 * Strings for component 'portfolio_flickr', language 'id', version '3.11'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Kunci API';
$string['contenttype'] = 'Jenis konten';
$string['err_noapikey'] = 'Tidak ada kunci API';
$string['err_noapikey_help'] = 'Tidak ada kunci API yang dikonfigurasi untuk pengaya ini. Anda bisa mendapatkan salah satunya dari halaman layanan Flickr.';
$string['hidefrompublicsearches'] = 'Sembunyikan gambar ini dari pencarian publik?';
$string['isfamily'] = 'Terlihat oleh keluarga';
$string['isfriend'] = 'Terlihat oleh teman';
$string['ispublic'] = 'Publik (siapa pun dapat melihatnya)';
$string['moderate'] = 'Moderat';
$string['noauthtoken'] = 'Tidak dapat mengambil token autentikasi untuk digunakan dalam sesi ini';
$string['other'] = 'Seni, ilustrasi, CGI, atau gambar nonfotografi lainnya';
$string['photo'] = 'Foto';
$string['pluginname'] = 'Flickr.com';
$string['privacy:metadata'] = 'Pengaya ini mengirimkan data secara eksternal ke akun Flickr yang ditautkan. Itu tidak menyimpan data secara lokal.';
$string['privacy:metadata:data'] = 'Data pribadi melewati dari subsistem portofolio.';
$string['restricted'] = 'Terbatas';
$string['safe'] = 'Aman';
$string['safetylevel'] = 'Tingkat keamanan';
$string['screenshot'] = 'Tangkapan layar';
$string['set'] = 'Set';
$string['setupinfo'] = 'Petunjuk penyetelan';
$string['setupinfodetails'] = 'Untuk mendapatkan kunci API dan string rahasia, masuk ke Flickr dan <a href="{$a->applyurl}">daftar untuk kunci baru</a>. Setelah kunci dan rahasia baru dibuat untuk Anda, ikuti tautan \'Edit alur autentikasi untuk aplikasi ini\' di laman. Pilih \'Jenis Aplikasi\' ke \'Aplikasi Web\'. Ke dalam bidang \'URL Panggilan Balik\', masukkan nilai: <br /><code>{$a->callbackurl}</code><br />Opsional, Anda juga dapat memberikan deskripsi dan logo situs Moodle Anda. Nilai ini dapat disetel nanti di <a href="{$a->keysurl}">halaman</a> yang mencantumkan aplikasi Flickr Anda.';
$string['sharedsecret'] = 'String rahasia';
$string['title'] = 'Judul';
$string['uploadfailed'] = 'Gagal mengunggah gambar ke flickr.com: {$a}';
