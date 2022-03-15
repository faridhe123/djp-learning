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
 * Strings for component 'auth_cas', language 'id', version '3.11'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'PIlihan autentikasi';
$string['accesCAS'] = 'Pengguna CAS';
$string['accesNOCAS'] = 'pengguna lainnya';
$string['auth_cas_auth_logo'] = 'Logo metode autentikasi';
$string['auth_cas_auth_logo_description'] = 'Berikan logo untuk metode autentikasi CAS yang familiar bagi pengguna Anda.';
$string['auth_cas_auth_name'] = 'Nama metode autentikasi';
$string['auth_cas_auth_name_description'] = 'Berikan nama untuk metode autentikasi CAS yang familiar bagi pengguna Anda.';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_auth_user_create'] = 'Buat pengguna secara eksternal';
$string['auth_cas_baseuri'] = 'URI server (tidak ada jika tidak ada baseUri)<br />Misalnya, jika server CAS merespons host.domaine.fr/CAS/ maka<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URI dasar';
$string['auth_cas_broken_password'] = 'Anda tidak dapat melanjutkan tanpa mengubah kata sandi Anda, namun tidak ada halaman yang tersedia untuk mengubahnya. Silakan hubungi Administrator Moodle Anda.';
$string['auth_cas_cantconnect'] = 'Bagian LDAP dari modul CAS tidak dapat terhubung ke server: {$a}';
$string['auth_cas_casversion'] = 'Versi protokol CAS';
$string['auth_cas_certificate_check'] = 'Pilih \'ya\' jika Anda ingin memvalidasi sertifikat server';
$string['auth_cas_certificate_check_key'] = 'Validasi server';
$string['auth_cas_certificate_path'] = 'Jalur file rantai CA (Format PEM) untuk memvalidasi sertifikat server';
$string['auth_cas_certificate_path_empty'] = 'Jika Anda mengaktifkan validasi Server, Anda perlu menentukan jalur sertifikat';
$string['auth_cas_certificate_path_key'] = 'Jalur sertifikat';
$string['auth_cas_changepasswordurl'] = 'URL penggantian kata sandi';
$string['auth_cas_create_user'] = 'Aktifkan ini jika Anda ingin memasukkan pengguna yang diautentikasi CAS dalam basis data Moodle. Jika tidak maka hanya pengguna yang sudah ada di basis data Moodle yang bisa masuk.';
$string['auth_cas_create_user_key'] = 'Buat pengguna';
$string['auth_cas_curl_ssl_version'] = 'Versi SSL (2 atau 3) yang akan digunakan. Secara bawaan PHP akan mencoba menentukan ini sendiri, meskipun dalam beberapa kasus ini harus diatur secara manual.';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_default'] = 'Bawaan';
$string['auth_cas_curl_ssl_version_key'] = 'Versi cURL SSL';
$string['auth_cas_enabled'] = 'Aktifkan ini jika Anda ingin menggunakan autentikasi CAS.';
$string['auth_cas_hostname'] = 'Nama hos dari server CAS <br /> misalnya: host.domain.id';
$string['auth_cas_hostname_key'] = 'Nama hos';
$string['auth_cas_invalidcaslogin'] = 'Maaf, login Anda gagal - Anda tidak dapat diotorisasi';
$string['auth_cas_language'] = 'Pilih bahasa untuk halaman otentikasi';
$string['auth_cas_language_key'] = 'Bahasa';
$string['auth_cas_logincas'] = 'Akses koneksi aman';
$string['auth_cas_logout_return_url'] = 'Berikan URL tujuan pengalihan pengguna CAS setelah keluar.<br />Jika dibiarkan kosong, pengguna akan diarahkan ke lokasi yang akan diarahkan oleh Moodle';
$string['auth_cas_logout_return_url_key'] = 'URL pengembalian log keluar alternatif';
$string['auth_cas_logoutcas'] = 'Pilih \'ya\' jika Anda ingin keluar dari CAS saat Anda memutuskan sambungan dari Moodle';
$string['auth_cas_logoutcas_key'] = 'Opsi log keluar CAS';
$string['auth_cas_multiauth'] = 'Pilih \'ya\' jika Anda ingin memiliki multi-otentikasi (CAS + otentikasi lainnya)';
$string['auth_cas_multiauth_key'] = 'Multi-autentikasi';
$string['auth_cas_port'] = 'Porta server CAS';
$string['auth_cas_port_key'] = 'Porta';
$string['auth_cas_proxycas'] = 'Pilih \'ya\' jika Anda menggunakan CAS dalam mode proksi';
$string['auth_cas_proxycas_key'] = 'Mode proksi';
$string['auth_cas_server_settings'] = 'Konfigurasi server CAS';
$string['auth_cas_text'] = 'Koneksi aman';
$string['auth_cas_use_cas'] = 'Gunakan CAS';
$string['auth_cas_version'] = 'Versi protokol CAS untuk digunakan';
$string['auth_casdescription'] = 'Metode ini menggunakan server CAS (Central Authentication Service) untuk mengautentikasi pengguna di lingkungan Single Sign On (SSO). Anda juga dapat menggunakan autentikasi LDAP sederhana. Jika nama pengguna dan kata sandi yang diberikan valid menurut CAS, Moodle membuat entri pengguna baru di basis datanya, mengambil atribut pengguna dari LDAP jika diperlukan. Pada log masuk berikut, hanya nama pengguna dan kata sandi yang diperiksa.';
$string['auth_casnotinstalled'] = 'Tidak dapat menggunakan otentikasi CAS. Modul PHP LDAP tidak diinstal.';
$string['noldapserver'] = 'Tidak ada server LDAP yang dikonfigurasi untuk CAS! Sinkronisasi dinonaktifkan.';
$string['pluginname'] = 'Server CAS (SSO)';
$string['privacy:metadata'] = 'Pengaya Autentikasi CAS Server (SSO) tidak menyimpan data pribadi apa pun.';
$string['synctask'] = 'Pekerjaan sinkronisasi pengguna CAS';
