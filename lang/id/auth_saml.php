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
 * Strings for component 'auth_saml', language 'id', version '3.11'.
 *
 * @package     auth_saml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_saml_course_mapping_dsn'] = 'Kursus dsn';
$string['auth_saml_course_mapping_sql'] = 'Kursus sql';
$string['auth_saml_course_not_found'] = 'Kursus saml {\\$a->course} tidak ditemukan untuk pengguna saml {\\$a->user} \\n';
$string['auth_saml_coursemapping'] = 'Pemetaan Kursus';
$string['auth_saml_disable_debugdisplay'] = '* Nonaktifkan debugdisplay untuk menyembunyikan kesalahan dalam proses masuk/pendaftaran';
$string['auth_saml_dosinglelogout'] = 'Log keluar tunggal';
$string['auth_saml_dosinglelogout_description'] = 'Centang untuk mengaktifkan log keluar tunggal. Ini akan mengeluarkan Anda dari Moodle, penyedia identitas dan semua penyedia layanan yang terhubung.';
$string['auth_saml_duplicated_lms_data'] = 'Data lms berikut digandakan:';
$string['auth_saml_duplicated_saml_data'] = 'Data saml berikut digandakan:';
$string['auth_saml_error_attribute_course_mapping'] = 'Kesalahan dalam nama atribut (indeks) dari pemetaan tabel kursus. Periksa sintaks ql externalcoursemappingsql';
$string['auth_saml_error_attribute_role_mapping'] = 'Kesalahan dalam nama atribut (indeks) pemetaan tabel peran. Periksa sintaks eksternalrolemappingsql';
$string['auth_saml_error_authentication_process'] = 'Kesalahan dalam proses autentikasi {\\$a}';
$string['auth_saml_error_complete_user_data'] = 'Gagal melengkapi data pengguna {\\$a}';
$string['auth_saml_error_complete_user_login'] = 'Gagal menyelesaikan login pengguna {\\$a}';
$string['auth_saml_error_creating_course_mapping'] = 'Galat saat membuat course_mapping di basis data moodle';
$string['auth_saml_error_creating_role_mapping'] = 'Galat saat membuat role_mapping di basis data moodle';
$string['auth_saml_error_executing'] = 'Galat saat menjalankan';
$string['auth_saml_error_executing_course_mapping_query'] = 'Galat saat menjalankan kueri pemetaan kursus';
$string['auth_saml_error_executing_role_mapping_query'] = 'Galat saat menjalankan kueri pemetaan peran';
$string['auth_saml_error_role_not_found'] = 'Galat saat mendaftar. Peran {\\$a} tidak ada di Moodle';
$string['auth_saml_errorbadlib'] = 'Direktori lib SimpleSAMLphp {\\$a} salah.';
$string['auth_saml_ignoreinactivecourses'] = 'Abaikan tidak aktif';
$string['auth_saml_ignoreinactivecourses_description'] = 'Jika tidak dicentang, pengaya akan membatalkan pendaftaran pengguna \'tidak aktif\' dari kursus';
$string['auth_saml_initialize_roles'] = 'Inisialisasi peran';
$string['auth_saml_jit_not_active'] = 'Akun pengguna {\\$a} tidak ada dan penyediaan just-in-time dinonaktifkan';
$string['auth_saml_logextrainfo'] = 'Catat info tambahan';
$string['auth_saml_logextrainfo_description'] = 'Aktifkan untuk mencatat info tambahan seperti tindakan masuk dan perubahan peran sistem pengguna yang dijalankan oleh plugin';
$string['auth_saml_logfile'] = 'Jalur berkas log';
$string['auth_saml_loginusing'] = 'Masuk di sini menggunakan nama pengguna dan kata sandi Anda';
$string['auth_saml_logo_info'] = 'Deskripsi log masuk SAML';
$string['auth_saml_logo_info_description'] = 'Deskripsi yang akan ditampilkan di bawah tombol masuk SAML.';
$string['auth_saml_logo_path'] = 'Gambar SAML';
$string['auth_saml_logo_path_description'] = 'Jalur gambar untuk tombol log masuk SAML.';
$string['auth_saml_mapping_export'] = 'Ekspor ke CSV';
$string['auth_saml_mapping_external_warning'] = 'Catatan: Ketika basis data pemetaan dan moodle memiliki tipe yang sama, koneksi gagal. Jadi dalam hal ini lebih baik gunakan mode pemetaan kursus internal dan sebelumnya buang semua data di dalam basis data secara manual';
$string['auth_saml_missed_data'] = 'Data berikut berisi atribut yang terlewat:';
$string['auth_saml_not_authorize'] = '{\\$a} tidak memiliki kursus CAV aktif.';
$string['auth_saml_role'] = 'Pemetaan peran sistem SAML';
$string['auth_saml_role_mapping_dsn'] = 'Peran dsn';
$string['auth_saml_role_mapping_sql'] = 'Peran sql';
$string['auth_saml_role_not_found'] = 'Tidak dapat mengambil info peran. Tinjau pemetaan peran, Respons SAML, dan hook.';
$string['auth_saml_rolemapping'] = 'Pemetaan Peran';
$string['auth_saml_rolemapping_head'] = 'IdP dapat menggunakan nama pendek perannya sendiri. Atur di bagian ini pemetaan antara peran IdP dan Moodle. Menerima beberapa nilai dipisahkan koma.';
$string['auth_saml_samlhookfile'] = 'Jalur berkas hook';
$string['auth_saml_samlhookfile_description'] = 'Tetapkan jalur jika Anda ingin menggunakan berkas hook yang berisi fungsi spesifik Anda. Jalurnya bisa absolut atau relatif terhadap direktori root Moodle Anda.';
$string['auth_saml_samllib'] = 'Jalur pustaka SimpleSAMLphp';
$string['auth_saml_sucess_creating_course_mapping'] = 'Tabel course_mapping dibuat dalam database moodle';
$string['auth_saml_sucess_creating_role_mapping'] = 'Tabel course_role dibuat dalam database moodle';
$string['auth_saml_supportcourses'] = 'Kursus dukungan SAML';
$string['auth_saml_syncusersfrom'] = 'Sinkronkan pengguna dari modul';
$string['pluginnotenabled'] = 'Pengaya tidak diaktifkan!';
