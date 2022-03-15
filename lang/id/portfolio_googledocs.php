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
 * Strings for component 'portfolio_googledocs', language 'id', version '3.11'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID Klien';
$string['noauthtoken'] = 'Token autentikasi belum diterima dari Google. Harap pastikan Anda mengizinkan Moodle untuk mengakses akun Google Anda';
$string['nooauthcredentials'] = 'Kredensial OAuth diperlukan.';
$string['nooauthcredentials_help'] = 'Untuk menggunakan pengaya portofolio Google Drive, Anda harus mengonfigurasi kredensial OAuth di setelan portofolio.';
$string['nosessiontoken'] = 'Token sesi tidak ada yang mencegah ekspor ke Google.';
$string['oauthinfo'] = '<p>Untuk menggunakan pengaya ini, Anda harus mendaftarkan situs Anda ke Google, seperti yang dijelaskan dalam dokumentasi <a href="{$a->docsurl}">Penyiapan Google OAuth 2.0</a>.</p><p >Sebagai bagian dari proses pendaftaran, Anda harus memasukkan URL berikut sebagai \'URI Pengalihan Resmi\':</p><p>{$a->callbackurl}</p><p>Setelah terdaftar, Anda akan disediakan dengan ID klien dan rahasia yang dapat digunakan untuk mengonfigurasi semua pengaya Google Drive dan Picasa.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Pengaya ini mengirimkan data secara eksternal ke akun Google yang ditautkan. Itu tidak menyimpan data secara lokal.';
$string['privacy:metadata:data'] = 'Data pribadi melewati dari subsistem portofolio.';
$string['secret'] = 'Rahasia';
$string['sendfailed'] = 'Berkas {$a} gagal ditransfer ke Google';
