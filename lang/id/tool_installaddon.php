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
 * Strings for component 'tool_installaddon', language 'id', version '3.11'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Pengakuan';
$string['acknowledgementtext'] = 'Saya mengerti bahwa itu adalah tanggung jawab saya untuk memiliki cadangan penuh dari situs ini sebelum memasang pengaya tambahan. Saya menerima dan memahami bahwa pengaya (terutama tetapi tidak hanya yang berasal dari sumber tidak resmi) mungkin mengandung lubang keamanan, dapat membuat situs tidak tersedia, atau menyebabkan kebocoran atau kehilangan data pribadi.';
$string['featuredisabled'] = 'Penginstal pengaya dinonaktifkan di situs ini.';
$string['installaddon'] = 'Pasang pengaya!';
$string['installaddons'] = 'Pasang pengaya';
$string['installfromrepo'] = 'Pasang pengaya dari direktori pengaya Moodle';
$string['installfromrepo_help'] = 'Anda akan diarahkan ke direktori pengaya Moodle untuk mencari dan menginstal pengaya. Perhatikan bahwa nama lengkap situs Anda, URL dan versi Moodle akan dikirim juga, untuk mempermudah proses instalasi bagi Anda.';
$string['installfromzip'] = 'Pasang pengaya dari berkas ZIP';
$string['installfromzip_help'] = 'Alternatif untuk menginstal pengaya langsung dari direktori pengaya Moodle adalah dengan mengunggah pengaya paket ZIP.';
$string['installfromzipfile'] = 'Paket ZIP';
$string['installfromzipfile_help'] = 'Paket pengaya ZIP harus berisi hanya satu direktori, dinamai sesuai dengan nama pengaya.';
$string['installfromzipinvalid'] = 'Paket pengaya ZIP harus berisi hanya satu direktori, dinamai sesuai dengan nama pengaya. Pengaya yang disediakan bukan paket pengaya ZIP yang valid.';
$string['installfromziprootdir'] = 'Ganti nama direktori root';
$string['installfromziprootdir_help'] = 'Beberapa paket ZIP, seperti yang dihasilkan oleh Github, mungkin berisi nama direktori root yang salah. Jika demikian, nama yang benar dapat dimasukkan di sini.';
$string['installfromzipsubmit'] = 'Pasang pengaya dari berkas zip';
$string['installfromziptype'] = 'Jenis pengaya';
$string['installfromziptype_help'] = 'Untuk pengaya yang mendeklarasikan nama komponennya dengan benar, penginstal dapat mendeteksi jenis pengaya secara otomatis. Jika deteksi otomatis gagal, pilih jenis pengaya yang benar secara manual. Peringatan: Prosedur pemasangan bisa sangat gagal jika jenis pengaya yang salah ditentukan.';
$string['permcheck'] = 'Pastikan lokasi root jenis pengaya dapat ditulis oleh proses server web.';
$string['permcheckerror'] = 'Kesalahan saat memeriksa izin menulis';
$string['permcheckprogress'] = 'Memeriksa izin menulis...';
$string['permcheckrepeat'] = 'Periksa lagi';
$string['permcheckresultno'] = 'Lokasi jenis pengaya <em>{$a->path}</em> tidak dapat ditulis';
$string['permcheckresultyes'] = 'Lokasi jenis pengaya <em>{$a->path}</em> dapat ditulis';
$string['pluginname'] = 'Pemasang pengaya';
$string['privacy:metadata'] = 'Pengaya penginstal pengaya tidak menyimpan data pribadi apa pun.';
$string['remoterequestalreadyinstalled'] = 'Ada permintaan untuk menginstal pengaya {$a->name} ({$a->component}) versi {$a->version} dari direktori pengaya Moodle di situs ini. Namun, pengaya ini <strong>sudah terpasang</strong> di situs.';
$string['remoterequestconfirm'] = 'Ada permintaan untuk menginstal pengaya <strong>{$a->name}</strong> ({$a->component}) versi {$a->version} dari direktori pengaya Moodle di situs ini.';
$string['remoterequestinvalid'] = 'Ada permintaan untuk menginstal pengaya dari direktori pengaya Moodle di situs ini. Sayangnya permintaan tersebut tidak valid sehingga pengaya tidak dapat diinstal.';
$string['remoterequestnoninstallable'] = 'Ada permintaan untuk menginstal pengaya {$a->name} ({$a->component}) versi {$a->version} dari direktori pengaya Moodle di situs ini. Namun, pra-pemeriksaan instalasi pengaya gagal (kode alasan: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Ada permintaan untuk menginstal pengaya {$a->name} ({$a->component}) versi {$a->version} dari direktori pengaya Moodle di situs ini. Namun, lokasi <strong>{$a->typepath}</strong> <strong>tidak dapat ditulis</strong>. Anda perlu memberikan akses tulis untuk pengguna server web ke lokasi, lalu tekan tombol lanjutkan untuk mengulangi pemeriksaan.';
$string['remoterequestpluginfoexception'] = 'Ups... Galat saat mencoba mendapatkan informasi tentang pengaya {$a->name} ({$a->component}) versi {$a->version}. Pengaya tidak dapat diinstal. Aktifkan mode awakutu untuk melihat detail kesalahan.';
$string['typedetectionfailed'] = 'Tidak dapat mendeteksi jenis pengaya. Silakan pilih jenis pengaya secara manual.';
$string['typedetectionmismatch'] = 'Jenis pengaya yang dipilih tidak cocok dengan yang dideklarasikan oleh pengaya: {$a}';
