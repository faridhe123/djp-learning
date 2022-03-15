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
 * Strings for component 'message_airnotifier', language 'id', version '3.11'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Kelola perangkat';
$string['airnotifieraccesskey'] = 'Kunci akses airnotifier';
$string['airnotifierappname'] = 'Nama aplikasi airnotifier';
$string['airnotifierfielderror'] = 'Harap hapus spasi kosong atau karakter yang tidak perlu dari ruas berikut: {$a}';
$string['airnotifiermobileappname'] = 'Nama aplikasi seluler';
$string['airnotifierport'] = 'Porta airnotifier';
$string['airnotifierurl'] = 'URL Airnotifier';
$string['checkconfiguration'] = 'Periksa dan uji konfigurasi pemberitahuan push';
$string['configairnotifieraccesskey'] = 'Kunci akses untuk menghubungkan ke server Airnotifier. Anda dapat memperoleh kunci akses dengan mengeklik tautan "Minta kunci akses" di bawah (hanya situs terdaftar) atau dengan membuat akun di <a href="https://apps.moodle.com">Portal Aplikasi Moodle</a >.';
$string['configairnotifierappname'] = 'Pengidentifikasi nama aplikasi di Airnotifier.';
$string['configairnotifiermobileappname'] = 'Pengidentifikasi unik aplikasi Seluler (biasanya seperti com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Porta yang digunakan saat menghubungkan ke server airnotifier.';
$string['configairnotifierurl'] = 'URL server yang akan disambungkan untuk mengirim pemberitahuan push.';
$string['configured'] = 'Dikonfigurasi';
$string['deletecheckdevicename'] = 'Hapus perangkat Anda: {$a->name}';
$string['deletedevice'] = 'Hapus perangkat. Perhatikan bahwa aplikasi dapat mendaftarkan perangkat lagi. Jika perangkat terus muncul kembali, nonaktifkan.';
$string['devicetoken'] = 'Token perangkat';
$string['enableprocessor'] = 'Aktifkan notifikasi seluler';
$string['errorretrievingkey'] = 'Terjadi kesalahan saat mengambil kunci akses. Situs Anda harus terdaftar untuk menggunakan layanan ini. Jika situs Anda sudah terdaftar, silakan coba perbarui pendaftaran Anda. Atau, Anda dapat memperoleh kunci akses dengan membuat akun di <a href="https://apps.moodle.com">Portal Aplikasi Moodle</a>.';
$string['keyretrievedsuccessfully'] = 'Kunci akses berhasil diambil. Untuk mengakses statistik penggunaan aplikasi Moodle, buat akun di <a href="https://apps.moodle.com">Portal Aplikasi Moodle</a>.';
$string['messageprovidersempty'] = 'Tidak ada notifikasi seluler yang diaktifkan di preferensi notifikasi bawaan.';
$string['messageproviderslow'] = 'Hanya beberapa notifikasi seluler yang diaktifkan di preferensi notifikasi bawaan.';
$string['moodleappsportallimitswarning'] = 'Harap dicatat bahwa jumlah perangkat pengguna yang diizinkan untuk menerima pemberitahuan tergantung pada langganan aplikasi Moodle Anda. Untuk detailnya, kunjungi <a href="{$a}" target="_blank">Portal Aplikasi Moodle</a>.';
$string['nodevices'] = 'Tidak ada perangkat yang terdaftar. Perangkat akan muncul secara otomatis setelah Anda menginstal aplikasi Moodle dan menambahkan situs ini.';
$string['nopermissiontomanagedevices'] = 'Anda tidak memiliki izin untuk mengelola perangkat.';
$string['notconfigured'] = 'Server Airnotifier belum dikonfigurasi sehingga pemberitahuan push tidak dapat dikirim.';
$string['notificationsserverconfiguration'] = 'Konfigurasi server notifikasi (Airnotifier)';
$string['pluginname'] = 'Seluler';
$string['privacy:appiddescription'] = 'Ini adalah pengidentifikasi untuk aplikasi yang digunakan.';
$string['privacy:enableddescription'] = 'Jika perangkat ini diaktifkan untuk airnotifier.';
$string['privacy:metadata:date'] = 'Tanggal saat pesan dikirim.';
$string['privacy:metadata:enabled'] = 'Apakah perangkat airnotifier diaktifkan.';
$string['privacy:metadata:externalpurpose'] = 'Informasi ini dikirim ke situs eksternal untuk akhirnya dikirimkan ke perangkat seluler pengguna.';
$string['privacy:metadata:fullmessage'] = 'Pesan lengkapnya.';
$string['privacy:metadata:notification'] = 'Jika pesan ini adalah pemberitahuan.';
$string['privacy:metadata:smallmessage'] = 'Bagian dari pesan.';
$string['privacy:metadata:subject'] = 'Baris subjek pesan.';
$string['privacy:metadata:tableexplanation'] = 'Informasi perangkat airnotifier disimpan di sini.';
$string['privacy:metadata:userdeviceid'] = 'ID yang tertaut ke perangkat seluler pengguna';
$string['privacy:metadata:userfromfullname'] = 'Nama lengkap pengguna yang mengirim pesan.';
$string['privacy:metadata:userfromid'] = 'ID pengguna penulis pesan.';
$string['privacy:metadata:userid'] = 'ID pengguna yang mengirim pesan.';
$string['privacy:metadata:username'] = 'Nama pengguna.';
$string['privacy:metadata:usersubsystem'] = 'Pengaya ini terhubung ke subsistem pengguna.';
$string['privacy:subcontext'] = 'Pesan Airnotifier';
$string['requestaccesskey'] = 'Minta kunci akses';
$string['sendtest'] = 'Kirim pemberitahuan push uji ke perangkat saya';
$string['sendtestconfirmation'] = 'Notifikasi push uji akan dikirim ke perangkat yang Anda gunakan untuk terhubung ke situs ini. Pastikan perangkat Anda terhubung ke Internet dan aplikasi seluler tidak terbuka (karena pemberitahuan push hanya ditampilkan saat diterima di latar belakang).';
$string['serverconnectivityerror'] = 'Situs ini tidak dapat terhubung ke server notifikasi {$a}';
$string['showhide'] = 'Mengaktifkan/menonaktifkan perangkat.';
$string['sitemustberegistered'] = 'Untuk menggunakan model Airnotifier publik, situs Anda harus terdaftar. Atau, Anda bisa mendapatkan kunci akses dengan membuat akun di <a href="https://apps.moodle.com"> Portal Aplikasi Moodle </a>.';
$string['unknowndevice'] = 'Perangkat tidak dikenal';
$string['userdevices'] = 'Perangkat pengguna';
