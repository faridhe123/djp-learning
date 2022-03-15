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
 * Strings for component 'auth_db', language 'id', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Tidak dapat terhubung ke basis data eksternal.';
$string['auth_dbcannotreadtable'] = 'Tidak dapat membaca tabel eksternal.';
$string['auth_dbcantconnect'] = 'Tidak dapat terhubung ke basis data autentikasi yang ditentukan...';
$string['auth_dbchangepasswordurl_key'] = 'URL penggantian kata sandi';
$string['auth_dbcolumnlist'] = 'Tabel eksternal berisi kolom berikut:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Awakutu ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Awakutu koneksi ADOdb ke basis data eksternal - gunakan saat mendapatkan halaman kosong saat log masuk. Tidak cocok untuk lokasi produksi.';
$string['auth_dbdeleteuser'] = 'ID pengguna {$a->name} yang dihapus {$a->id}';
$string['auth_dbdeleteusererror'] = 'Galat menghapus pengguna {$a}';
$string['auth_dbdescription'] = 'Metode ini menggunakan tabel basis data eksternal untuk memeriksa apakah nama pengguna dan kata sandi yang dimasukkan adalah sah. Jika keanggotaan adalah keanggotaan baru, maka informasi dari ruas yang lain juga bisa disalin ke Moodle.';
$string['auth_dbextencoding'] = 'Pengodean db eksternal';
$string['auth_dbextencodinghelp'] = 'Pengodean yang digunakan dalam basis data eksternal';
$string['auth_dbextrafields'] = 'Bidang-bidang ini opsional. Anda dapat memilih untuk mengisi beberapa bidang pengguna Moodle sebelumnya dengan informasi dari <b> bidang basis data eksternal </b> yang Anda tentukan di sini. <p> Jika Anda membiarkannya kosong, maka default akan digunakan. </p> <p> Dalam kedua kasus, pengguna akan dapat mengedit semua bidang ini setelah mereka masuk. </p>';
$string['auth_dbfieldpass'] = 'Nama dari ruas yang berisi kata sandi';
$string['auth_dbfieldpass_key'] = 'Ruas kata sandi';
$string['auth_dbfielduser'] = 'Nama ruas yang berisi nama pengguna. Ruas ini harus berupa tipe data varchar.';
$string['auth_dbfielduser_key'] = 'ruas username';
$string['auth_dbhost'] = 'Komputer yang menghosting server basis data. Gunakan entri DSN sistem jika menggunakan ODBC. Gunakan entri DSN PDO jika menggunakan PDO.';
$string['auth_dbhost_key'] = 'Hos';
$string['auth_dbinsertuser'] = 'ID pengguna {$a->name} yang dimasukkan {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Galat memasukkan pengguna {$a->username} - pengguna dengan nama pengguna ini telah dibuat melalui plugin \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'Galat memasukkan pengguna {$a}';
$string['auth_dbname'] = 'Nama basis data itu sendiri. Biarkan kosong jika menggunakan ODBC DSN. Biarkan kosong jika PDO DSN Anda sudah berisi nama basis data.';
$string['auth_dbname_key'] = 'Nama DB';
$string['auth_dbnoexttable'] = 'Tabel eksternal tidak ditentukan.';
$string['auth_dbnouserfield'] = 'Ruas pengguna eksternal belum ditentukan.';
$string['auth_dbpass'] = 'Kata sandi sama dengan nama pengguna di atas';
$string['auth_dbpass_key'] = 'Kata sandi';
$string['auth_dbpasstype'] = '<p> Tentukan format yang digunakan ruas kata sandi. </p> <p> Gunakan \'internal\' jika Anda ingin basis data eksternal untuk mengelola nama pengguna dan alamat surel, tetapi Moodle untuk mengelola kata sandi. Jika Anda menggunakan \'internal\', Anda harus menyediakan ruas alamat surel terisi di basis data eksternal, dan Anda harus mengaktifkan tugas terjadwal \\auth_db\\task\\sync_users. Moodle akan mengirim surel ke pengguna baru dengan kata sandi sementara. </p>';
$string['auth_dbpasstype_key'] = 'Format kata sandi';
$string['auth_dbreviveduser'] = 'https://lang.moodle.org/local/amos/view.php?fpg=51';
$string['auth_dbrevivedusererror'] = 'Galat saat mengaktifkan kembali pengguna {$a}';
$string['auth_dbsaltedcrypt'] = 'Crypt string hashing satu arah';
$string['auth_dbsetupsql'] = 'Perintah setelan SQL';
$string['auth_dbsetupsqlhelp'] = 'Perintah SQL untuk setelan basis data khusus, sering digunakan untuk mengatur pengodean komunikasi - contoh untuk MySQL dan PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Pengguna ditangguhkan {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Galat saat menangguhkan pengguna {$a}';
$string['auth_dbsybasequoting'] = 'Gunakan kutipan sybase';
$string['auth_dbsybasequotinghelp'] = 'Pelepasan kutipan tunggal gaya Sybase - diperlukan untuk Oracle, MS SQL, dan beberapa basis data lainnya. Jangan gunakan untuk MySQL!';
$string['auth_dbsyncuserstask'] = 'Sinkronkan tugas pengguna';
$string['auth_dbtable'] = 'Nama dari tabel pada basis data';
$string['auth_dbtable_key'] = 'Tabel';
$string['auth_dbtableempty'] = 'Tabel eksternal kosong';
$string['auth_dbtype'] = 'Jenis basis data (lihat dokumentasi <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Lapisan Abstraksi Basis Data untuk PHP</a> untuk detailnya).';
$string['auth_dbtype_key'] = 'Basis data';
$string['auth_dbupdateerror'] = 'Galat memperbarui basis data eksternal';
$string['auth_dbupdateusers'] = 'Perbarui pengguna';
$string['auth_dbupdateusers_description'] = 'Selain memasukkan pengguna baru, perbarui pengguna yang sudah ada.';
$string['auth_dbupdatinguser'] = 'Memperbarui pengguna {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Nama pengguna yang mempunyai akses pembacaan ke basis data';
$string['auth_dbuser_key'] = 'Pengguna DB';
$string['auth_dbuserstoadd'] = 'Entri pengguna yang ditambahkan: {$a}';
$string['auth_dbuserstoremove'] = 'Entri pengguna yang dihapus: {$a}';
$string['pluginname'] = 'Gunakan basis data eksternal';
$string['privacy:metadata'] = 'Pengaya Autentikasi basis data eksternal tidak menyimpan data pribadi apa pun.';
