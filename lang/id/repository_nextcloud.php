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
 * Strings for component 'repository_nextcloud', language 'id', version '3.11'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Internal dan eksternal';
$string['cannotconnect'] = 'Pengguna tidak dapat diautentikasi. Silakan masuk dan kemudian unggah berkas.';
$string['chooseissuer'] = 'Penerbit';
$string['chooseissuer_help'] = 'Untuk menambahkan penerbit baru, buka Administrasi situs / Peladen / layanan OAuth 2.';
$string['configplugin'] = 'Konfigurasi repositori nextcloud';
$string['configuration_exception'] = 'Galat konfigurasi klien OAuth 2: {$a}';
$string['contactadminwith'] = 'Tindakan yang diminta tidak dapat dijalankan. Jika ini terjadi berulang kali, harap hubungi administrator situs dengan informasi tambahan berikut:<br>"<i>{$a}</i>".';
$string['couldnotmove'] = 'Berkas yang diminta tidak dapat dipindahkan di folder {$a}.';
$string['defaultreturntype'] = 'Jenis pengembalian bawaan';
$string['endpointnotdefined'] = 'Titik akhir {$a} tidak ditentukan.';
$string['external'] = 'Eksternal (hanya tautan yang disimpan di Moodle)';
$string['externalpubliclinkwarning'] = 'Peringatan: Berkas ini akan menjadi publik.';
$string['filenotaccessed'] = 'Berkas yang diminta tidak dapat diakses. Harap periksa apakah Anda telah memilih berkas yang valid dan Anda diautentikasi dengan akun yang benar.';
$string['fileoptions'] = 'Jenis dan bawaan untuk berkas yang dikembalikan dapat dikonfigurasi di sini. Perhatikan bahwa semua berkas yang ditautkan secara eksternal akan diperbarui sehingga pemiliknya adalah akun sistem Moodle.';
$string['foldername'] = 'Jenis dan bawaan untuk berkas yang dikembalikan dapat dikonfigurasi di sini. Perhatikan bahwa semua berkas yang ditautkan secara eksternal akan diperbarui sehingga pemiliknya adalah akun sistem Moodle.';
$string['foldername_help'] = 'Untuk memastikan bahwa pengguna menemukan berkas yang dibagikan dengan mereka, berkas disimpan ke dalam folder tertentu.

Pengaturan ini menentukan nama folder. Disarankan untuk memilih nama yang terkait dengan model Moodle Anda.';
$string['internal'] = 'Internal (berkas yang disimpan di Moodle)';
$string['invalidresponse'] = 'Respons server tidak valid.';
$string['issuervalidation_invalid'] = 'Saat ini penerbit {$a} aktif, namun tidak mengimplementasikan semua titik akhir yang diperlukan. Repositori tidak akan berfungsi.';
$string['issuervalidation_valid'] = 'Saat ini penerbit {$a} aktif.';
$string['issuervalidation_without'] = 'Anda belum memilih server Nextcloud sebagai penerbit OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Lihat Nextcloud';
$string['no_right_issuers'] = 'Tak satu pun dari penerbit yang ada menerapkan semua titik akhir yang diperlukan. Harap daftarkan penerbit yang sesuai.';
$string['noclientconnection'] = 'Klien OAuth tidak dapat dihubungkan.';
$string['notauthorized'] = 'Anda tidak berwenang untuk menjalankan permintaan ini. Pastikan Anda diautentikasi dengan akun yang benar.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Tautan ke konfigurasi layanan OAuth 2"> Konfigurasi layanan OAuth 2</a>';
$string['pathnotcreated'] = 'Jalur folder {$a} tidak dapat dibuat di akun sistem.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Ropository Nextcloud';
$string['privacy:metadata'] = 'Pengaya repositori Nextcloud tidak menyimpan data pribadi apa pun atau mengirimkan data pengguna ke sistem jarak jauh.';
$string['request_exception'] = 'Permintaan untuk {$a->instance} gagal. {$a->errormessage}';
$string['requestnotexecuted'] = 'Permintaan tidak dapat dijalankan. Jika ini terjadi berulang kali, silakan hubungi administrator situs.';
$string['right_issuers'] = 'Penerbit berikut menerapkan titik akhir yang diperlukan: <br> {$a}';
$string['supportedreturntypes'] = 'Berkas yang didukung';
