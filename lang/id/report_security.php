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
 * Strings for component 'report_security', language 'id', version '3.11'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Direkomendasikan bahwa izin file <code>config.php</code> diubah setelah instalasi sehingga berkas tidak dapat dimodifikasi oleh server web. Harap perhatikan bahwa tindakan ini tidak meningkatkan keamanan server secara signifikan, meskipun dapat memperlambat atau membatasi eksploitasi umum.</p>';
$string['check_configrw_name'] = 'config.php yang dapat ditulis';
$string['check_configrw_ok'] = 'config.php tidak dapat dimodifikasi oleh skrip PHP.';
$string['check_configrw_warning'] = 'Skrip PHP dapat memodifikasi config.php.';
$string['check_cookiesecure_details'] = '<p>Jika komunikasi https diaktifkan, disarankan untuk mengaktifkan pengiriman kuki yang aman. Anda harus memiliki pengalihan permanen dari http ke https dan idealnya juga melayani header HSTS.</p>';
$string['check_cookiesecure_error'] = 'Harap aktifkan cookie aman';
$string['check_cookiesecure_http'] = 'Anda harus mengaktifkan https untuk menggunakan cookie yang aman';
$string['check_cookiesecure_name'] = 'Cookie yang aman';
$string['check_cookiesecure_ok'] = 'Kuki aman diaktifkan.';
$string['check_crawlers_details'] = '<p>Setelan "Buka untuk mesin telusur" memungkinkan mesin telusur memasuki kursus dengan akses tamu. Tidak ada gunanya mengaktifkan setelan ini jika log masuk tamu tidak diizinkan.</p>';
$string['check_crawlers_error'] = 'Akses mesin pencari diperbolehkan tetapi akses tamu dinonaktifkan.';
$string['check_crawlers_info'] = 'Mesin pencari dapat masuk sebagai tamu.';
$string['check_crawlers_name'] = 'Terbuka untuk mesin pencari';
$string['check_crawlers_ok'] = 'Akses mesin pencari tidak diaktifkan.';
$string['check_defaultuserrole_details'] = '<p>Semua pengguna yang masuk diberi kemampuan peran pengguna bawaan. Pastikan tidak ada kemampuan berisiko yang diizinkan dalam peran ini.</p><p>Satu-satunya jenis warisan yang didukung untuk peran pengguna bawaan adalah <em>Pengguna yang diautentikasi</em>. Kemampuan tampilan kursus tidak boleh diaktifkan.</p>';
$string['check_defaultuserrole_error'] = 'Peran pengguna bawaan "{$a}" salah didefinisikan!';
$string['check_defaultuserrole_name'] = 'Peran bawaan untuk semua pengguna';
$string['check_defaultuserrole_notset'] = 'Peran bawaan tidak disetel.';
$string['check_defaultuserrole_ok'] = 'Peran bawaan untuk semua definisi pengguna adalah OK.';
$string['check_dirindex_info'] = 'Indeks direktori tidak boleh diaktifkan';
$string['check_displayerrors_details'] = '<p>Mengaktifkan setelan PHP <code>display_errors</code> tidak disarankan di situs produksi karena pesan kesalahan dapat mengungkapkan informasi sensitif tentang server Anda.</p>';
$string['check_displayerrors_error'] = 'Setelan PHP untuk menampilkan kesalahan diaktifkan. Disarankan agar ini dinonaktifkan.';
$string['check_displayerrors_name'] = 'Menampilkan kesalahan PHP';
$string['check_displayerrors_ok'] = 'Menampilkan kesalahan PHP dinonaktifkan.';
$string['check_dotfiles_info'] = 'Semua dotfile kecuali /.well-known/* tidak boleh bersifat publik';
$string['check_emailchangeconfirmation_details'] = '<p>Direkomendasikan bahwa langkah konfirmasi surel diperlukan saat pengguna mengubah alamat surel mereka di profil mereka. Jika dinonaktifkan, spammer dapat mencoba mengeksploitasi server untuk mengirim spam.</p>
<p>Ruas email mungkin juga dikunci dari pengaya autentikasi, kemungkinan ini tidak dipertimbangkan di sini.</p>';
$string['check_emailchangeconfirmation_error'] = 'Pengguna dapat memasukkan alamat surel apa pun.';
$string['check_emailchangeconfirmation_info'] = 'Pengguna dapat memasukkan alamat surel dari domain yang diizinkan saja.';
$string['check_emailchangeconfirmation_name'] = 'Konfirmasi perubahan surel';
$string['check_emailchangeconfirmation_ok'] = 'Konfirmasi perubahan alamat surel di profil pengguna.';
$string['check_embed_details'] = '<p>Penyematan objek tak terbatas sangat berbahaya - setiap pengguna terdaftar dapat meluncurkan serangan XSS terhadap pengguna server lain. Setelan ini harus dinonaktifkan di server produksi.</p>';
$string['check_embed_error'] = 'Filter media flash diaktifkan - ini sangat berbahaya bagi sebagian besar server.';
$string['check_embed_name'] = 'Izinkan EMBED dan OBJECT';
$string['check_embed_ok'] = 'Penyematan objek tanpa batas tidak diperbolehkan.';
$string['check_frontpagerole_details'] = '<p>Peran halaman depan bawaan diberikan kepada semua pengguna terdaftar untuk aktivitas halaman depan. Pastikan tidak ada kemampuan berisiko yang diizinkan untuk peran ini.</p>
<p>Direkomendasikan agar peran khusus dibuat untuk tujuan ini dan peran jenis warisan tidak digunakan.</p>';
$string['check_frontpagerole_error'] = 'Peran halaman depan yang salah didefinisikan "{$a}" terdeteksi!';
$string['check_frontpagerole_name'] = 'Peran halaman depan';
$string['check_frontpagerole_notset'] = 'Peran halaman depan belum disetel.';
$string['check_frontpagerole_ok'] = 'Definisi peran halaman depan OK.';
$string['check_guestrole_details'] = '<p>Peran tamu digunakan untuk tamu, bukan pengguna yang login dan akses kursus tamu sementara. Pastikan tidak ada kemampuan berisiko yang diizinkan dalam peran ini.</p><p>Satu-satunya jenis warisan yang didukung untuk peran tamu adalah <em>Tamu</em>.</p>';
$string['check_guestrole_error'] = 'Peran tamu "{$a}" salah didefinisikan!';
$string['check_guestrole_name'] = 'Peran tamu';
$string['check_guestrole_notset'] = 'Peran tamu tidak disetel.';
$string['check_guestrole_ok'] = 'Definisi peran tamu tidak masalah.';
$string['check_mediafilterswf_details'] = '<p>Penyematan swf otomatis sangat berbahaya - setiap pengguna terdaftar dapat meluncurkan serangan XSS terhadap pengguna server lain. Harap nonaktifkan di server produksi.</p>';
$string['check_mediafilterswf_error'] = 'Filter media flash diaktifkan - ini sangat berbahaya bagi sebagian besar server.';
$string['check_mediafilterswf_name'] = 'Filter media .swf diaktifkan';
$string['check_mediafilterswf_ok'] = 'Filter media flash tidak diaktifkan.';
$string['check_nodemodules_details'] = '<p>Direktori <code>{$a->path}</code> berisi modul Node.js dan dependensinya, biasanya diinstal oleh utilitas NPM. Modul-modul ini mungkin diperlukan untuk pengembangan Moodle lokal, seperti untuk menggunakan kerangka kerja kasar. Mereka tidak diperlukan untuk menjalankan situs Moodle dalam produksi dan mereka dapat berisi kode yang berpotensi berbahaya yang mengekspos situs Anda ke serangan jarak jauh.</p><p>Sangat disarankan untuk menghapus direktori jika situs tersedia melalui URL publik, atau setidaknya melarang akses web ke dalam konfigurasi server web Anda.</p>';
$string['check_nodemodules_info'] = 'Direktori node_modules tidak boleh ada di situs publik.';
$string['check_nodemodules_name'] = 'Direktori modul Node.js';
$string['check_openprofiles_details'] = 'Profil pengguna yang terbuka dapat disalahgunakan oleh spammer. Disarankan agar <code>Paksa pengguna untuk masuk untuk profil</code> atau <code>Paksa pengguna untuk masuk</code> diaktifkan.';
$string['check_openprofiles_error'] = 'Siapa pun dapat melihat profil pengguna tanpa masuk.';
$string['check_openprofiles_name'] = 'Buka profil pengguna';
$string['check_openprofiles_ok'] = 'Log masuk diperlukan sebelum melihat profil pengguna.';
$string['check_passwordpolicy_details'] = '<p> Direkomendasikan agar kebijakan kata sandi ditetapkan, karena menebak sandi seringkali merupakan cara termudah untuk mendapatkan akses tidak sah. Namun, jangan membuat persyaratan yang terlalu ketat, karena hal ini dapat mengakibatkan pengguna tidak dapat mengingat kata sandi mereka dan melupakan atau menuliskannya. </p>';
$string['check_passwordpolicy_error'] = 'Kebijakan kata sandi tidak disetel.';
$string['check_passwordpolicy_name'] = 'Kebijakan kata sandi';
$string['check_passwordpolicy_ok'] = 'Kebijakan kata sandi diaktifkan.';
$string['check_preventexecpath_details'] = '<p>Mengizinkan jalur yang dapat dieksekusi untuk disetel melalui GUI Admin adalah vektor untuk eskalasi hak istimewa. Ini harus dipaksakan di config.php:</p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'Jalur yang dapat dieksekusi';
$string['check_preventexecpath_ok'] = 'Jalur yang dapat dieksekusi hanya dapat diatur di config.php.';
$string['check_preventexecpath_warning'] = 'Jalur yang dapat dieksekusi dapat diatur di GUI Admin.';
$string['check_publicpaths_403'] = '(Mengembalikan 403, idealnya harus 404)';
$string['check_publicpaths_generic'] = '{$a} berkas tidak boleh bersifat publik';
$string['check_publicpaths_name'] = 'Periksa semua jalur publik / pribadi';
$string['check_riskadmin_detailsok'] = '<p>Harap verifikasi daftar administrator sistem berikut:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Harap verifikasi daftar administrator sistem berikut:</p>{$a->admins}
<p>Disarankan untuk menetapkan peran administrator dalam konteks sistem saja. Pengguna berikut memiliki penetapan peran admin (tidak didukung) dalam konteks lain:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administrator';
$string['check_riskadmin_ok'] = 'Ditemukan {$a} administrator server.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) tinjau penetapan peran</a>';
$string['check_riskadmin_warning'] = 'Ditemukan {$a->admincount} administrator server dan {$a->unsupcount} penetapan peran admin yang tidak didukung.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Penggantian aktif ini memberi pengguna kemampuan untuk menyertakan data pengguna dalam cadangan. Pastikan izin ini diperlukan.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Peran sistem berikut saat ini memungkinkan pengguna untuk menyertakan data pengguna dalam cadangan. Pastikan izin ini diperlukan.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p> Karena peran di atas atau penggantian lokal, akun pengguna berikut saat ini memiliki izin untuk membuat cadangan yang berisi data pribadi dari pengguna mana pun yang terdaftar dalam kursus mereka. Pastikan mereka (a) tepercaya dan (b) dilindungi oleh sandi yang kuat: </p> {$a}';
$string['check_riskbackup_detailsok'] = 'Tidak ada peran yang secara eksplisit mengizinkan pencadangan data pengguna. Namun, perhatikan bahwa admin dengan kemampuan "melakukan apa saja" kemungkinan masih dapat melakukan ini.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} dalam {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Cadangan data pengguna';
$string['check_riskbackup_ok'] = 'Tidak ada peran yang secara eksplisit mengizinkan pencadangan data pengguna';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) in {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Ditemukan peran {$a->rolecount}, penggantian {$a->overridecount} dan pengguna {$a->usercount} dengan kemampuan untuk mencadangkan data pengguna.';
$string['check_riskxss_details'] = '<p>RISK_XSS menunjukkan semua kemampuan berbahaya yang hanya dapat digunakan oleh pengguna tepercaya.</p> <p>Harap verifikasi daftar pengguna berikut dan pastikan Anda memercayai mereka sepenuhnya di server ini:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Pengguna tepercaya XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - menemukan {$a} pengguna yang harus dipercaya.';
$string['check_unsecuredataroot_details'] = '<p>Direktori dataroot tidak boleh diakses melalui web. Cara terbaik untuk memastikan direktori tidak dapat diakses adalah dengan menggunakan direktori di luar direktori web publik.</p> <p>Jika Anda memindahkan direktori, Anda perlu memperbarui setelan <code>$CFG->dataroot</code> di <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Direktori dataroot Anda <code>{$a}</code> berada di lokasi yang salah dan terekspos ke web!';
$string['check_unsecuredataroot_name'] = 'dataroot tidak aman';
$string['check_unsecuredataroot_ok'] = 'Direktori dataroot tidak boleh diakses melalui web.';
$string['check_unsecuredataroot_warning'] = 'Direktori dataroot Anda <code>{$a}</code> berada di lokasi yang salah dan mungkin terekspos ke web.';
$string['check_vendordir_details'] = '<p>Direktori <code>{$a->path}</code> berisi berbagai pustakan pihak ketiga dan dependensinya, biasanya diinstal oleh PHP Composer. Pustaka ini mungkin diperlukan untuk pengembangan Moodle lokal, seperti untuk menginstal kerangka kerja PHPUnit. Mereka tidak diperlukan untuk menjalankan situs Moodle dalam produksi dan mereka dapat berisi kode yang berpotensi berbahaya yang mengekspos situs Anda ke serangan jarak jauh.</p><p>Sangat disarankan untuk menghapus direktori jika situs tersedia melalui URL publik, atau setidaknya melarang akses web ke dalam konfigurasi server web Anda.</p>';
$string['check_vendordir_info'] = 'Direktori vendor tidak boleh ada di situs publik.';
$string['check_vendordir_name'] = 'Direktori vendor';
$string['check_webcron_details'] = '<p> Menjalankan cron dari peramban web dapat memaparkan informasi yang memiliki hak istimewa kepada pengguna anonim. Direkomendasikan untuk hanya menjalankan cron dari baris perintah atau menyetel sandi cron untuk akses jarak jauh. </p>';
$string['check_webcron_name'] = 'Cron web';
$string['check_webcron_ok'] = 'Pengguna anonim tidak dapat mengakses cron.';
$string['check_webcron_warning'] = 'Pengguna anonim dapat mengakses cron.';
$string['configuration'] = 'Konfigurasi';
$string['description'] = 'Keterangan';
$string['details'] = 'Detail';
$string['eventreportviewed'] = 'Melihat laporan pemeriksaan keamanan';
$string['issue'] = 'Isu';
$string['pluginname'] = 'Pemeriksaan keamanan';
$string['privacy:metadata'] = 'Pengaya Ikhtisar keamanan tidak menyimpan data pribadi apa pun.';
$string['security:view'] = 'Lihat laporan keamanan';
$string['timewarning'] = 'Pemrosesan data mungkin memakan waktu lama, harap bersabar...';
