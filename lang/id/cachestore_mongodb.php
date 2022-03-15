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
 * Strings for component 'cachestore_mongodb', language 'id', version '3.11'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Basis data';
$string['database_help'] = 'Nama database yang akan digunakan.';
$string['extendedmode'] = 'Gunakan kunci yang diperluas';
$string['extendedmode_help'] = 'Jika diaktifkan, set kunci lengkap akan digunakan saat bekerja dengan pengaya. Ini belum digunakan secara internal tetapi akan memungkinkan Anda untuk dengan mudah mencari dan menyelidiki pengaya MongoDB secara manual jika Anda mau. Mengaktifkan ini akan menambah sedikit \'overhead\' sehingga hanya boleh dilakukan jika Anda memerlukannya.';
$string['password'] = 'Kata sandi';
$string['password_help'] = 'Kata sandi pengguna yang digunakan untuk koneksi.';
$string['pleaseupgrademongo'] = 'Anda menggunakan versi lama dari ekstensi PHP Mongo (< 1.3). Dukungan untuk versi lama ekstensi Mongo akan dihentikan di masa mendatang. Harap pertimbangkan untuk meningkatkan.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'Pengaya penyimpan tembolok MongoDB menyimpan data secara singkat sebagai bagian dari fungsionalitas caching-nya. Data ini disimpan di server MongoDB tempat data dihapus secara berkala.';
$string['privacy:metadata:mongodb:data'] = 'Berbagai data yang disimpan dalam tembolok';
$string['replicaset'] = 'Set replika';
$string['replicaset_help'] = 'Nama replika yang akan disambungkan. Jika ini diberikan master akan ditentukan dengan menggunakan perintah database ismaster pada seed, sehingga driver mungkin akan terhubung ke server yang bahkan tidak terdaftar.';
$string['server'] = 'Server';
$string['server_help'] = 'Ini adalah string koneksi untuk server yang ingin Anda gunakan. Beberapa server dapat ditentukan menggunakan daftar yang dipisahkan koma.';
$string['testserver'] = 'Uji server';
$string['testserver_desc'] = 'String koneksi untuk server yang akan digunakan untuk pengujian. Jika server uji telah ditentukan maka kinerja MongoDB dapat diuji menggunakan halaman kinerja tembolok di blok administrasi.';
$string['username'] = 'Nama pengguna';
$string['username_help'] = 'Nama pengguna yang akan digunakan saat membuat koneksi.';
$string['usesafe'] = 'Gunakan aman';
$string['usesafe_help'] = 'Jika diaktifkan, opsi usesafe akan digunakan selama operasi penyisipan, pengambilan, dan penghapusan. Jika Anda telah menentukan set replika, ini akan tetap dipaksakan.';
$string['usesafevalue'] = 'Gunakan nilai aman';
$string['usesafevalue_help'] = 'Anda dapat memilih untuk memberikan nilai tertentu untuk penggunaan yang aman. Ini akan menentukan jumlah server yang operasinya harus diselesaikan sebelum dianggap selesai.';
