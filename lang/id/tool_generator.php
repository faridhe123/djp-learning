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
 * Strings for component 'tool_generator', language 'id', version '3.11'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Berkas besar {$a}';
$string['courseexplanation'] = 'Alat ini membuat kursus tes standar yang mencakup banyak
bagian, aktivitas, dan berkas.

Ini dimaksudkan untuk memberikan ukuran standar untuk memeriksa keandalan dan kinerja berbagai komponen sistem (seperti pencadangan dan pemulihan).

Tes ini penting karena sudah banyak kasus sebelumnya di mana,
dihadapkan dengan kasus penggunaan kehidupan nyata (misalnya kursus dengan 1.000 aktivitas), sistem tidak bekerja.

Kursus yang dibuat menggunakan fitur ini dapat menempati basis data dalam jumlah besar dan ruang sistem berkas (puluhan gigabyte). Anda harus menghapus kursus (dan tunggu berbagai pembersihan berjalan) untuk membersihkan ruang ini lagi.

**Jangan gunakan fitur ini pada sistem live**. Gunakan hanya di server pengembang.
(Untuk menghindari penggunaan yang tidak disengaja, fitur ini dinonaktifkan kecuali Anda juga telah memilih
tingkat awakutu PENGEMBANG.)';
$string['coursesize_0'] = 'XS (~10KB; dibuat dalam ~1 detik)';
$string['coursesize_1'] = 'S (~10MB; dibuat dalam ~30 detik)';
$string['coursesize_2'] = 'M (~100MB; dibuat dalam ~2 menit)';
$string['coursesize_3'] = 'L (~1GB; dibuat dalam ~30 menit)';
$string['coursesize_4'] = 'XL (~10GB; dibuat dalam ~2 jam)';
$string['coursesize_5'] = 'XXL (~20GB; dibuat dalam ~4 jam)';
$string['coursewithoutusers'] = 'Kursus yang dipilih tidak memiliki pengguna';
$string['createcourse'] = 'Buat kursus';
$string['createtestplan'] = 'Buat rencana pengujian';
$string['creating'] = 'Membuat kursus';
$string['done'] = 'selesai {$a}';
$string['downloadtestplan'] = 'Unduh rencana pengujian';
$string['downloadusersfile'] = 'Unduh berkas pengguna';
$string['error_nocourses'] = 'Tidak ada kursus untuk menghasilkan rencana pengujian';
$string['error_noforumdiscussions'] = 'Kursus yang dipilih tidak berisi diskusi forum';
$string['error_noforuminstances'] = 'Kursus yang dipilih tidak berisi contoh modul forum';
$string['error_noforumreplies'] = 'Kursus yang dipilih tidak mengandung balasan forum';
$string['error_nonexistingcourse'] = 'Kursus yang ditentukan tidak ada';
$string['error_nopageinstances'] = 'Kursus yang dipilih tidak berisi model modul halaman';
$string['error_notdebugging'] = 'Tidak tersedia di server ini karena pengawakutuan tidak disetel ke DEVELOPER';
$string['error_nouserspassword'] = 'Anda perlu menyetel $CFG->tool_generator_users_password di config.php untuk membuat rencana pengujian';
$string['fullname'] = 'Kursus tes : {$a->size}';
$string['maketestcourse'] = 'Buat kursus tes';
$string['maketestplan'] = 'Buat rencana pengujian JMeter';
$string['notenoughusers'] = 'Kursus yang dipilih tidak memiliki cukup pengguna';
$string['pluginname'] = 'Pembuat data pengembangan';
$string['privacy:metadata'] = 'Pengaya generator data pengembangan tidak menyimpan data pribadi apa pun.';
$string['progress_checkaccounts'] = 'Memeriksa akun pengguna ({$a})';
$string['progress_coursecompleted'] = 'Kursus selesai ({$a})';
$string['progress_createaccounts'] = 'Membuat akun pengguna ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Membuat penugasan';
$string['progress_createbigfiles'] = 'Membuat berkas besar ({$a})';
$string['progress_createcourse'] = 'Membuat kursus {$a}';
$string['progress_createforum'] = 'Membuat forum ({$a} kiriman)';
$string['progress_createpages'] = 'Membuat halaman ({$a})';
$string['progress_createsmallfiles'] = 'Membuat berkas kecil ({$a})';
$string['progress_enrol'] = 'Mendaftarkan pengguna ke kursus ({$a})';
$string['progress_sitecompleted'] = 'Situs selesai ({$a})';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 kursus, dibuat dalam ~30 detik)';
$string['sitesize_1'] = 'S (~50MB; 8 kursus, dibuat dalam ~2 menit)';
$string['sitesize_2'] = 'M (~200MB; 73 kursus, dibuat dalam ~10 menit)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 kursus, dibuat dalam ~1\'5 jam)';
$string['sitesize_4'] = 'XL (~10GB; 1065 kursus, dibuat dalam ~5 jam)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 kursus, dibuat dalam ~10 jam)';
$string['size'] = 'Ukuran kursus';
$string['smallfiles'] = 'Berkas kecil';
$string['targetcourse'] = 'Kursus target tes';
$string['testplanexplanation'] = 'Alat ini membuat file rencana pengujian JMeter bersama dengan berkas kredensial pengguna.

Paket pengujian ini dirancang untuk bekerja bersama dengan {$a}, yang mempermudah menjalankan rencana pengujian di lingkungan Moodle tertentu, mengumpulkan informasi tentang proses dan membandingkan hasilnya, jadi Anda perlu mengunduhnya dan menggunakannya test_runner.sh atau ikuti petunjuk pemasangan dan penggunaan.

Anda perlu menyetel kata sandi untuk pengguna kursus di config.php (mis. $CFG->tool_generator_users_password = \'moodle\';). Tidak ada nilai bawaan untuk kata sandi ini untuk mencegah penggunaan alat yang tidak diinginkan. Anda perlu menggunakan opsi perbarui kata sandi jika pengguna kursus Anda memiliki kata sandi lain atau dibuat oleh tool_generator tetapi tanpa menyetel nilai
$CFG->tool_generator_users_password.

Ini adalah bagian dari tool_generator sehingga bekerja dengan baik dengan kursus yang dihasilkan oleh kursus dan generator situs, itu dapat
juga digunakan dengan kursus apa pun yang berisi, setidaknya:

* Pengguna yang cukup terdaftar (tergantung pada ukuran paket pengujian yang Anda pilih) dengan pengaturan ulang kata sandi ke \'moodle\'
* Sebuah model modul halaman
* Sebuah model modul forum dengan setidaknya satu diskusi dan satu balasan

Anda mungkin ingin mempertimbangkan kapasitas server Anda saat menjalankan rencana pengujian besar sebagai jumlah untuk memuat yang dihasilkan oleh JMeter
bisa menjadi sangat besar. Periode peningkatan telah disesuaikan dengan jumlah thread (pengguna) untuk mengurangi jenis ini masalah tetapi bebannya masih besar.

** Jangan menjalankan rencana pengujian pada sistem langsung **. Fitur ini hanya membuat berkas untuk mengumpan JMeter sehingga tidak berbahaya sendiri, tetapi Anda harus ** TIDAK PERNAH ** menjalankan rencana pengujian ini di lokasi produksi.';
$string['testplansize_0'] = 'XS (pengguna {$a->users}, loop {$a->loop} dan periode rampup {$a->rampup})';
$string['testplansize_1'] = 'S (pengguna {$a->users}, loop {$a->loop} dan periode rampup {$a->rampup})';
$string['testplansize_2'] = 'M (pengguna {$a->users}, loop {$a->loop} dan periode rampup {$a->rampup})';
$string['testplansize_3'] = 'L (pengguna {$a->users}, loop {$a->loop} dan periode rampup {$a->rampup})';
$string['testplansize_4'] = 'XL (pengguna {$a->users}, loop {$a->loop} dan periode rampup {$a->rampup})';
$string['testplansize_5'] = 'XXL (pengguna {$a->users}, loop {$a->loop} dan periode rampup {$a->rampup})';
$string['updateuserspassword'] = 'Perbarui kata sandi pengguna kursus';
$string['updateuserspassword_help'] = 'JMeter perlu log masuk sebagai pengguna kursus, Anda dapat mengatur kata sandi pengguna menggunakan $CFG->tool_generator_users_password di config.php; setelan ini memperbarui sandi pengguna kursus sesuai dengan $CFG->tool_generator_users_password. Ini bisa berguna jika Anda menggunakan kursus yang tidak dibuat oleh tool_generator atau $CFG->tool_generator_users_password tidak disetel saat Anda membuat kursus pengujian.';
