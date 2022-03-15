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
 * Strings for component 'search_solr', language 'id', version '3.11'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Server Solr yang ditentukan tidak tersedia atau indeks yang ditentukan tidak ada';
$string['connectionsettings'] = 'Setelan koneksi';
$string['errorcreatingschema'] = 'Galat saat membuat skema Solr: {$a}';
$string['errorsolr'] = 'Mesin telusur Solr melaporkan kesalahan: {$a}';
$string['errorvalidatingschema'] = 'Kesalahan memvalidasi skema Solr: bidang {$a->fieldname} tidak ada. Harap <a href="{$a->setupurl}">ikuti tautan ini</a> untuk menyiapkan ruas yang diperlukan.';
$string['extensionerror'] = 'Ekstensi Apache Solr PHP tidak diinstal. Silakan periksa dokumentasi.';
$string['fileindexing'] = 'Aktifkan pengindeksan berkas';
$string['fileindexing_help'] = 'Jika instalasi Solr Anda mendukungnya, fitur ini memungkinkan Moodle mengirim berkas untuk diindeks.<br/>
Anda perlu mengindeks ulang semua konten situs setelah mengaktifkan opsi ini agar semua berkas dapat ditambahkan.';
$string['fileindexsettings'] = 'Setelan pengindeksan berkas';
$string['maxindexfilekb'] = 'Ukuran berkas maksimum untuk diindeks (kB)';
$string['maxindexfilekb_help'] = 'Berkas yang lebih besar dari jumlah kilobyte ini tidak akan disertakan dalam pengindeksan pencarian. Jika disetel ke nol, berkas dengan ukuran berapa pun akan diindeks.';
$string['minimumsolr4'] = 'Solr 4.0 adalah versi minimum yang diperlukan untuk Moodle';
$string['missingconfig'] = 'Server Apache Solr Anda belum dikonfigurasi di Moodle.';
$string['multivaluedfield'] = 'Ruas "{$a}" mengembalikan array alih-alih skalar. Harap hapus indeks saat ini, buat yang baru dan jalankan setup_schema.php sebelum mengindeks data di Solr.';
$string['nodatafromserver'] = 'Tidak ada data dari server';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Pengaya ini mengirimkan data secara eksternal ke mesin pencari Solr yang terhubung. Itu tidak menyimpan data secara lokal.';
$string['privacy:metadata:data'] = 'Data pribadi melewati dari subsistem pencarian.';
$string['schemafieldautocreated'] = 'Ruas "{$a}" sudah ada di skema Solr. Anda mungkin lupa menjalankan skrip ini sebelum mengindeks data dan bidang dibuat otomatis oleh Solr. Harap hapus indeks saat ini, buat yang baru dan jalankan setup_schema.php lagi sebelum mengindeks data di Solr.';
$string['schemasetupfromsolr5'] = 'Versi server Solr Anda lebih rendah dari 5.0. Skrip ini hanya dapat mengatur skema Anda jika versi Solr Anda 5.0 atau lebih tinggi. Anda perlu mengatur ruas dalam skema Anda secara manual sesuai dengan \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Kueri penelusuran';
$string['searchinfo_help'] = 'Bidang yang akan ditelusuri dapat ditentukan dengan mengawali kueri penelusuran dengan \'title:\', \'content:\', \'name:\', atau \'intro:\'. Misalnya, mencari \'title:news\' akan mengembalikan hasil dengan kata \'news\' di judulnya.

Operator Boolean (\'AND\', \'OR\', \'NOT\') dapat digunakan untuk menggabungkan atau mengecualikan kata kunci.

Karakter wildcard (\'*\' atau \'?\' ) dapat digunakan untuk mewakili karakter dalam kueri penelusuran.';
$string['setupok'] = 'Skema siap digunakan.';
$string['solrauthpassword'] = 'Kata sandi autentikasi HTTP';
$string['solrauthuser'] = 'Nama pengguna otentikasi HTTP';
$string['solrhttpconnectionport'] = 'Porta';
$string['solrhttpconnectiontimeout'] = 'Waktu habis';
$string['solrhttpconnectiontimeout_desc'] = 'Batas waktu koneksi HTTP adalah waktu maksimum dalam detik yang diizinkan untuk operasi transfer data HTTP.';
$string['solrindexname'] = 'Nama indeks';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Mesin Solr bukan mesin pencari yang dikonfigurasi';
$string['solrsecuremode'] = 'Mode aman';
$string['solrserverhostname'] = 'Nama hos';
$string['solrserverhostname_desc'] = 'Nama domain server Solr';
$string['solrsetting'] = 'Setelan Solr';
$string['solrsslcainfo'] = 'Nama sertifikat CA SSL';
$string['solrsslcainfo_desc'] = 'Nama berkas yang memegang satu atau lebih sertifikat CA untuk memverifikasi dengan rekan';
$string['solrsslcapath'] = 'Jalur sertifikat SSL CA';
$string['solrsslcapath_desc'] = 'Jalur direktori yang menyimpan beberapa sertifikat CA untuk memverifikasi dengan rekan';
$string['solrsslcert'] = 'Sertifikat SSL';
$string['solrsslcert_desc'] = 'Nama file ke sertifikat pribadi berformat PEM';
$string['solrsslkey'] = 'Kunci SSL';
$string['solrsslkey_desc'] = 'Nama berkas ke kunci pribadi berformat PEM';
$string['solrsslkeypassword'] = 'Kata sandi kunci SSL';
$string['solrsslkeypassword_desc'] = 'Kata sandi untuk berkas kunci pribadi berformat PEM';
