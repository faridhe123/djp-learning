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
 * Strings for component 'mlbackend_python', language 'id', version '3.11'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Konfigurasi server belum lengkap.';
$string['errorserver'] = 'Galat server {$a}';
$string['host'] = 'Hos';
$string['hostdesc'] = 'Hos';
$string['packageinstalledshouldbe'] = 'Paket Python moodlemlbackend harus diperbarui. Versi yang diperlukan adalah "{$a->required}" dan versi yang diinstal adalah "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Paket moodlemlbackend Python tidak kompatibel dengan versi Moodle ini. Versi yang diperlukan adalah "{$a->required}" atau lebih tinggi asalkan kompatibel dengan API. Versi terinstal "{$a->installed}" terlalu tinggi.';
$string['password'] = 'Kata sandi';
$string['passworddesc'] = 'String karakter yang digunakan sebagai kata sandi untuk berkomunikasi antara server Moodle dan server Python.';
$string['pluginname'] = 'Bagian belakang pembelajaran mesin Python';
$string['port'] = 'Porta';
$string['portdesc'] = 'Porta';
$string['privacy:metadata'] = 'Pengaya backend pembelajaran mesin Python tidak menyimpan data pribadi apa pun.';
$string['pythonpackagenotinstalled'] = 'Paket moodlemlbackend Python tidak diinstal atau ada masalah dengannya. Silakan jalankan "{$a}" dari antarmuka baris perintah untuk info lebih lanjut.';
$string['pythonpathnotdefined'] = 'Jalur ke biner Python yang dapat dieksekusi belum ditentukan. Kunjungi "{$a}" untuk menyetelnya.';
$string['secure'] = 'Gunakan HTTPS';
$string['securedesc'] = 'Apakah akan menggunakan HTTP atau HTTPS.';
$string['serversettingsinfo'] = 'Jika \'Gunakan server\' diaktifkan, setelan server akan ditampilkan.';
$string['tensorboardinfo'] = 'Luncurkan TensorBoard dari baris perintah dengan mengetikkan tensorboard --logdir=\'{$a}\' di server web Anda.';
$string['username'] = 'Nama pengguna';
$string['usernamedesc'] = 'String karakter yang digunakan sebagai username untuk berkomunikasi antara server Moodle dan server Python.';
$string['useserver'] = 'Gunakan server';
$string['useserverdesc'] = 'Paket bagian belakang pembelajaran mesin Python tidak dipasang di server web tetapi di server yang berbeda.';
