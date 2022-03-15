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
 * Strings for component 'auth_email', language 'id', version '3.11'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p> Pendaftaran mandiri berbasis surel memungkinkan pengguna untuk membuat akun mereka sendiri melalui tombol \'Buat akun baru\' pada halaman masuk. Pengguna kemudian menerima surel yang berisi tautan aman ke halaman tempat mereka dapat mengonfirmasi akun mereka. Masuk selanjutnya cukup periksa nama pengguna dan kata sandi dengan nilai yang disimpan dalam basis data Moodle. </p> <p> Catatan: Selain mengaktifkan pengaya, pendaftaran mandiri berbasis surel juga harus dipilih dari menu tarik-turun pendaftaran mandiri menu di halaman \'Kelola autentikasi\'. </p>';
$string['auth_emailnoemail'] = 'Mencoba mengirimi Anda surel tetapi gagal!';
$string['auth_emailrecaptcha'] = 'Menambahkan elemen formulir konfirmasi visual/audio ke halaman pendaftaran untuk pengguna yang mendaftar sendiri via surel. Ini melindungi situs Anda dari spammer dan berkontribusi pada tujuan yang bermanfaat. Lihat https://www.google.com/recaptcha untuk detail selengkapnya.';
$string['auth_emailrecaptcha_key'] = 'Aktifkan elemen reCAPTCHA';
$string['auth_emailsettings'] = 'Setelan';
$string['pluginname'] = 'Pendaftaran mandiri berbasis surel';
$string['privacy:metadata'] = 'Pengaya Autentikasi mandiri berbasis surel tidak menyimpan data pribadi apa pun.';
