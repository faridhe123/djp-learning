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
 * Strings for component 'auth_shibboleth', language 'id', version '3.11'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'Logo metode autentikasi';
$string['auth_shib_auth_logo_description'] = 'Berikan logo untuk metode autentikasi Shibboleth yang familiar bagi pengguna Anda. Ini bisa menjadi logo federasi Shibboleth Anda, mis. <tt>Login SWITCHAai</tt> atau <tt>Login Biasa</tt> atau yang serupa.';
$string['auth_shib_auth_method'] = 'Nama metode autentikasi';
$string['auth_shib_auth_method_description'] = 'Berikan nama untuk metode autentikasi Shibboleth yang familiar bagi pengguna Anda. Ini bisa menjadi nama federasi Shibboleth Anda, mis. <tt>Login SWITCHAai</tt> atau <tt>Login Biasa</tt> atau yang serupa.';
$string['auth_shib_changepasswordurl'] = 'URL perubahan kata sandi';
$string['auth_shib_contact_administrator'] = 'Jika Anda tidak terkait dengan organisasi tertentu dan Anda memerlukan akses ke kursus di server ini, harap hubungi <a href="mailto:{$a}">Administrator Moodle</a>.';
$string['auth_shib_convert_data'] = 'API modifikasi data';
$string['auth_shib_convert_data_description'] = 'Anda dapat menggunakan API ini untuk memodifikasi lebih lanjut data yang disediakan oleh Shibboleth. Baca <a href="{$a}">README</a> untuk petunjuk lebih lanjut.';
$string['auth_shib_convert_data_filepath_warning'] = 'Anda tidak dapat menggunakan berkas yang terletak di dalam direktori data situs saat ini ($CFG->dataroot) sebagai API modifikasi data.';
$string['auth_shib_convert_data_warning'] = 'Berkas tidak ada atau tidak dapat dibaca oleh proses server web!';
$string['auth_shib_idp_list'] = 'Penyedia identitas';
$string['auth_shib_idp_list_description'] = 'Berikan daftar ID entitas Penyedia Identitas agar pengguna dapat memilih dari halaman login.<br />Di setiap baris harus ada tupel yang dipisahkan koma untuk ID entitas IdP (lihat file metadata Shibboleth) dan Nama IdP sebagai itu akan ditampilkan dalam daftar tarik-turun.<br />Sebagai parameter ketiga opsional, Anda dapat menambahkan lokasi inisiator sesi Shibboleth yang akan digunakan jika instalasi Moodle Anda adalah bagian dari pengaturan multi federasi.';
$string['auth_shib_instructions'] = 'Gunakan <a href="{$a}">Log masuk Shibboleth</a> untuk mendapatkan akses melalui Shibboleth, jika institusi Anda mendukungnya. Jika tidak, gunakan formulir log masuk normal yang ditunjukkan di sini.';
$string['auth_shib_instructions_help'] = 'Di sini Anda harus memberikan instruksi kustom bagi pengguna Anda untuk menjelaskan Shibboleth. Ini akan ditampilkan pada halaman login di bagian instruksi. Petunjuk harus menyertakan tautan ke "<b>{$a}</b>" yang diklik pengguna saat mereka ingin masuk.';
$string['auth_shib_instructions_key'] = 'Petunjuk masuk';
$string['auth_shib_integrated_wayf'] = 'Layanan Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Jika Anda mengaktifkan ini, Moodle akan menggunakan layanan WAYF-nya sendiri alih-alih yang dikonfigurasi untuk Shibboleth. Moodle akan menampilkan daftar tari-turun pada halaman log masuk alternatif ini di mana pengguna harus memilih Penyedia Identitasnya.';
$string['auth_shib_logout_return_url'] = 'URL pengembalian log keluar alternatif';
$string['auth_shib_logout_return_url_description'] = 'Berikan URL tujuan pengalihan pengguna Shibboleth setelah keluar.<br />Jika dibiarkan kosong, pengguna akan diarahkan ke lokasi yang akan diarahkan oleh moodle';
$string['auth_shib_logout_url'] = 'URL pengendali log keluar Penyedia Layanan Shibboeth';
$string['auth_shib_logout_url_description'] = 'Berikan URL ke pengendali log keluar  URL penangan logout Penyedia Layanan Shibboeth. Ini biasanya <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Jika Anda ingin menggunakan layanan WAYF terintegrasi, Anda harus memberikan daftar ID entitas Penyedia Identitas yang dipisahkan koma, namanya, dan inisiator sesi secara opsional.';
$string['auth_shib_only'] = 'Hanya Shibboleth';
$string['auth_shib_only_description'] = 'Centang opsi ini jika otentikasi Shibboleth harus ditegakkan';
$string['auth_shib_username_description'] = 'Nama variabel lingkungan Shibboleth server web yang akan digunakan sebagai nama pengguna Moodle';
$string['auth_shibboleth_errormsg'] = 'Silakan pilih organisasi tempat Anda menjadi anggota!';
$string['auth_shibboleth_login'] = 'Log masuk shibboleth';
$string['auth_shibboleth_login_long'] = 'Masuk ke Moodle melalui Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Log masuk manual';
$string['auth_shibboleth_select_member'] = 'saya anggota...';
$string['auth_shibboleth_select_organization'] = 'Untuk otentikasi melalui Shibboleth, silakan pilih organisasi Anda dari menu tarik-turun:';
$string['auth_shibbolethdescription'] = 'Dengan menggunakan metode ini, pengguna dibuat dan diautentikasi menggunakan Shibboleth. Untuk detail pengaturan, lihat <a href="{$a}">Shibboleth README</a>.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Pengaya autentikasi Shibboleth tidak menyimpan data pribadi apa pun.';
$string['shib_invalid_account_error'] = 'Anda tampaknya terautentikasi Shibboleth tetapi Moodle tidak memiliki akun yang valid untuk nama pengguna Anda. Akun Anda mungkin tidak ada atau mungkin telah ditangguhkan.';
$string['shib_no_attributes_error'] = 'Anda tampaknya terautentikasi Shibboleth tetapi Moodle tidak menerima atribut pengguna apa pun. Harap periksa bahwa Penyedia Identitas Anda merilis atribut yang diperlukan ({$a}) ke Penyedia Layanan Moodle yang sedang berjalan atau beri tahu webmaster server ini.';
$string['shib_not_all_attributes_error'] = 'Moodle membutuhkan atribut Shibboleth tertentu yang tidak ada dalam kasus Anda. Atributnya adalah: {$a}<br />Harap hubungi webmaster server ini atau Penyedia Identitas Anda.';
$string['shib_not_set_up_error'] = 'Autentikasi Shibboleth tampaknya tidak diatur dengan benar karena tidak ada variabel lingkungan Shibboleth untuk halaman ini. Silakan baca <a href="{$a}">README</a> untuk instruksi lebih lanjut tentang cara mengatur autentikasi Shibboleth atau hubungi webmaster instalasi Moodle ini.';
