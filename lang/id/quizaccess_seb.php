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
 * Strings for component 'quizaccess_seb', language 'id', version '3.11'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Tambahkan templat baru';
$string['allowedbrowserkeysdistinct'] = 'Semua kuncinya harus berbeda.';
$string['allowedbrowserkeyssyntax'] = 'Kunci harus berupa string hex 64 karakter.';
$string['cachedef_config'] = 'Tembolok konfigurasi SEB';
$string['cachedef_configkey'] = 'Tembolok kunci konfigurasi SEB';
$string['cachedef_quizsettings'] = 'Tembolok setelan kuis SEB';
$string['cantdelete'] = 'Templat tidak dapat dihapus karena telah digunakan untuk satu atau lebih kuis.';
$string['cantedit'] = 'Templat tidak dapat diedit karena telah digunakan untuk satu atau lebih kuis.';
$string['clientrequiresseb'] = 'Kuis ini telah dikonfigurasi untuk menggunakan "Safe Exam Browser"dengan konfigurasi klien.';
$string['confirmtemplateremovalquestion'] = 'Apakah Anda yakin ingin menghapus templat ini?';
$string['confirmtemplateremovaltitle'] = 'Konfirmasikan penghapusan templat?';
$string['conflictingsettings'] = 'Anda tidak memiliki izin untuk memperbarui setelan "Safe Exam Browser" yang ada.';
$string['content'] = 'Templat';
$string['description'] = 'Deskripsi';
$string['disabledsettings'] = 'Nonaktifkan setelan.';
$string['disabledsettings_help'] = 'Setelan kuis "Safe Exam Browser" tidak dapat diubah jika kuis telah dikerjakan. Untuk mengubah setelan, semua upaya pengerjaan kuis harus dihapus dahulu.';
$string['downloadsebconfig'] = 'Unduh berkas konfigurasi SEB';
$string['duplicatetemplate'] = 'Templat dengan nama yang sama sudah ada.';
$string['edittemplate'] = 'Edit templat';
$string['enabled'] = 'Diaktifkan';
$string['event:accessprevented'] = 'Menjegah akses kuis';
$string['event:templatecreated'] = 'Membuat template SEB';
$string['event:templatedeleted'] = 'Menghapus templat SEB';
$string['event:templatedisabled'] = 'Menonaktifkan templat SEB';
$string['event:templateenabled'] = 'Mengaktifkan templat SEB';
$string['event:templateupdated'] = 'Memperbarui templat SEB';
$string['exitsebbutton'] = 'Keluar "Safe Exam Browser"';
$string['filemanager_sebconfigfile'] = 'Unggah berkas konfigurasi "Safe Exam Browser"';
$string['filemanager_sebconfigfile_help'] = 'Harap unggah berkas  konfigurasi "Safe Exam Browser" Anda sendiri untuk kuis ini.';
$string['filenotpresent'] = 'Harap unggah file konfigurasi SEB.';
$string['fileparsefailed'] = 'Berkas yang diunggah tidak dapat disimpan sebagai berkas konfigurasi SEB.';
$string['httplinkbutton'] = 'Unduh konfigurasi';
$string['invalid_browser_key'] = 'Kunci peramban SEB tidak valid';
$string['invalid_config_key'] = 'Kunci konfigurasi SEB tidak valid';
$string['invalidkeys'] = 'Kunci konfigurasi atau kunci ujian peramban tidak dapat divalidasi. Harap pastikan Anda menggunakan "Safe Exam Browser" dengan berkas konfigurasi yang benar.';
$string['invalidtemplate'] = 'Templat konfigurasi SEB tidak valid';
$string['manage_templates'] = 'Templat Safe Exam Browser';
$string['managetemplates'] = 'Kelola templat';
$string['missingrequiredsettings'] = 'Setelan konfigurasi kehilangan beberapa nilai yang diperlukan.';
$string['name'] = 'Nama';
$string['newtemplate'] = 'Templat baru';
$string['noconfigfilefound'] = 'Tidak ada berkas konfigurasi SEB yang ditemukan untuk kuis dengan cmid: {$a}';
$string['noconfigfound'] = 'Tidak ada konfigurasi SEB yang ditemukan untuk kuis dengan cmid: {$a}';
$string['not_seb'] = 'Tidak ada Peramban \'Safe Exam Browser\' yang digunakan.';
$string['notemplate'] = 'Tak ada templat';
$string['passwordnotset'] = 'Setelan saat ini memerlukan kuis menggunakan \'Save Exam Browser\' untuk menyetel kata sandi kuis.';
$string['pluginname'] = 'Aturan akses "Safe Exam Browser"';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Setelan "Safe Exam Browser" untuk kuis. Ini termasuk ID pengguna terakhir untuk membuat atau mengubah setelan.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID kuis yang setelannya ada.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Setelan waktu Unix dibuat.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Setelan waktu Unix dimodifikasi.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID pengguna yang terakhir membuat atau mengubah setelan.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Setelan templat "Safe Exam Browser". Ini termasuk ID pengguna terakhir untuk membuat atau memodifikasi templat.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Setelan templat waktu Unix dibuat.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Setelan templat waktu Unix dimodifikasi.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID pengguna yang terakhir membuat atau memodifikasi templat.';
$string['quizsettings'] = 'Setelan kuis';
$string['restoredfrom'] = '{$a->name} (dipulihkan via cmid {$a->cmid})';
$string['seb'] = '"Safe Exam Browser"';
$string['seb:bypassseb'] = 'Lewati persyaratan untuk melihat kuis di Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Ubah setelan kuis SEB: Pilih berkas konfigurasi SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Ubah setelan kuis SEB: Aktifkan pemfilteran URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Ubah setelan kuis SEB: Kunci ujian peramban yang diizinkan';
$string['seb:manage_seb_allowreloadinexam'] = 'Ubah setelan kuis SEB: Izinkan memuat ulang';
$string['seb:manage_seb_allowspellchecking'] = 'Ubah setelan kuis SEB: Aktifkan pemeriksaan ejaan';
$string['seb:manage_seb_allowuserquitseb'] = 'Ubah setelan kuis SEB: Izinkan berhenti';
$string['seb:manage_seb_enableaudiocontrol'] = 'Ubah setelan kuis SEB: Aktifkan kontrol audio';
$string['seb:manage_seb_expressionsallowed'] = 'Ubah setelan kuis SEB: Ekspresi sederhana diperbolehkan';
$string['seb:manage_seb_expressionsblocked'] = 'Ubah setelan kuis SEB: Ekspresi sederhana diblokir';
$string['seb:manage_seb_filterembeddedcontent'] = 'Ubah setelan kuis SEB: Filter konten yang disematkan';
$string['seb:manage_seb_linkquitseb'] = 'Ubah setelan kuis SEB: Keluar dari tautan';
$string['seb:manage_seb_muteonstartup'] = 'Ubah setelan kuis SEB: Bisukan saat mulai';
$string['seb:manage_seb_quitpassword'] = 'SEB mengubah setelan kuis: Keluar dari kata sandi';
$string['seb:manage_seb_regexallowed'] = 'Ubah setelan kuis SEB: Ekspresi regex diizinkan';
$string['seb:manage_seb_regexblocked'] = 'Ubah setelan kuis SEB: Ekspresi regex diblokir';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Ubah setelan kuis SEB: Memerlukan Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Ubah setelan kuis SEB: Tampilkan tata letak papan ketik';
$string['seb:manage_seb_showreloadbutton'] = 'Ubah setelan kuis SEB: Tampilkan tombol muat ulang';
$string['seb:manage_seb_showsebdownloadlink'] = 'Ubah setelan kuis SEB: Tampilkan tautan unduhan';
$string['seb:manage_seb_showsebtaskbar'] = 'Ubah pengaturan kuis SEB: Tampilkan bilah tugas';
$string['seb:manage_seb_showtime'] = 'Ubah setelan kuis SEB: Tampilkan waktu';
$string['seb:manage_seb_showwificontrol'] = 'Ubah setelan kuis SEB: Tampilkan kontrol Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Ubah setelan kuis SEB: Pilih templat SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Ubah setelan kuis SEB: Konfirmasi saat keluar';
$string['seb:managetemplates'] = 'Kelola templat konfigurasi SEB';
$string['seb_activateurlfiltering'] = 'Aktifkan filter URL';
$string['seb_activateurlfiltering_help'] = 'Jika diaktifkan, URL akan difilter saat memuat halaman web. Set filter harus didefinisikan di bawah ini.';
$string['seb_allowedbrowserexamkeys'] = 'Kunci ujian peramban yang diizinkan';
$string['seb_allowedbrowserexamkeys_help'] = 'Di ruas ini Anda dapat memasukkan kunci ujian peramban yang diizinkan untuk versi "Safe Exam Browser" yang diizinkan untuk mengakses kuis ini. Jika tidak ada kunci yang dimasukkan, maka kunci ujian peramban tidak dicentang.';
$string['seb_allowreloadinexam'] = 'Aktifkan muat ulang dalam ujian';
$string['seb_allowreloadinexam_help'] = 'Jika diaktifkan, pemuatan ulang halaman diizinkan (tombol muat ulang di bilah tugas SEB, bilah alat browser, menu penggeser sisi iOS, pintasan keyboard F5/cmd+R). Perhatikan bahwa tembolok luring dapat rusak jika pengguna mencoba memuat ulang halaman tanpa koneksi internet.';
$string['seb_allowspellchecking'] = 'Aktifkan pemeriksaan ejaan';
$string['seb_allowspellchecking_help'] = 'Jika diaktifkan, pemeriksaan ejaan di peramban SEB diperbolehkan.';
$string['seb_allowuserquitseb'] = 'Aktifkan penghentian SEB';
$string['seb_allowuserquitseb_help'] = 'Jika diaktifkan, pengguna dapat keluar dari SEB dengan tombol "Keluar" di bilah tugas SEB atau dengan menekan tombol Ctrl-Q atau dengan mengklik tombol tutup jendela peramban utama.';
$string['seb_enableaudiocontrol'] = 'Aktifkan kontrol audio';
$string['seb_enableaudiocontrol_help'] = 'Jika diaktifkan, ikon kontrol audio ditampilkan di bilah tugas SEB.';
$string['seb_expressionsallowed'] = 'Ekspresi diizinkan';
$string['seb_expressionsallowed_help'] = 'Ruas teks yang berisi ekspresi pemfilteran yang diizinkan untuk URL yang diizinkan. Penggunaan karakter wildcard \'\\*\' dimungkinkan. Contoh ekspresi: \'example.com\' atau \'example.com/stuff/\\*\'. \'example.com\' cocok dengan \'example.com\', \'www.example.com\', dan \'www.mail.example.com\'. \'example.com/stuff/\\*\' cocok dengan semua permintaan ke subdomain \'example.com\' mana pun yang memiliki \'stuff\' sebagai segmen pertama jalur.';
$string['seb_expressionsblocked'] = 'Ekspresi diblokir';
$string['seb_expressionsblocked_help'] = 'Ruas teks yang berisi ekspresi pemfilteran untuk URL yang diblokir. Penggunaan karakter wildcard \'\\*\' dimungkinkan. Contoh ekspresi: \'example.com\' atau \'example.com/stuff/\\*\'. \'example.com\' cocok dengan \'example.com\', \'www.example.com\', dan \'www.mail.example.com\'. \'example.com/stuff/\\*\' cocok dengan semua permintaan ke subdomain \'example.com\' mana pun yang memiliki \'stuff\' sebagai segmen pertama jalur.';
$string['seb_filterembeddedcontent'] = 'Filter juga konten yang disematkan';
$string['seb_filterembeddedcontent_help'] = 'Jika diaktifkan, sumber yang disematkan juga akan difilter menggunakan kumpulan filter.';
$string['seb_help'] = 'Siapkan kuis untuk menggunakan "Safe Exam Browser"';
$string['seb_linkquitseb'] = 'Tampilkan tombol Keluar dari "Safe Exam Browser", dikonfigurasi dengan tautan keluar ini';
$string['seb_linkquitseb_help'] = 'Di kolom ini Anda dapat memasukkan tautan untuk keluar dari SEB. Ini akan digunakan pada tombol "Keluar dari Browser Ujian Aman" di halaman yang muncul setelah ujian diserahkan. Saat mengklik tombol atau tautan yang ditempatkan di mana pun Anda ingin meletakkannya, dimungkinkan untuk keluar dari SEB tanpa harus memasukkan kata sandi keluar. Jika tidak ada tautan yang dimasukkan, maka tombol "Keluar dari Save Exam Browser" tidak muncul dan tidak ada tautan yang disetel untuk keluar dari SEB.';
$string['seb_managetemplates'] = 'Kelola templat "Safe Exam Browser"';
$string['seb_muteonstartup'] = 'Bisukan saat mulai';
$string['seb_muteonstartup_help'] = 'Jika diaktifkan, audio awalnya dibisukan saat memulai SEB.';
$string['seb_quitpassword'] = 'Kata sandi keluar';
$string['seb_quitpassword_help'] = 'Kata sandi ini diminta ketika pengguna mencoba untuk keluar dari SEB dengan tombol "Quit", Ctrl-Q atau tombol tutup di jendela browser utama. Jika tidak ada kata sandi keluar yang ditetapkan, maka SEB hanya meminta "Apakah Anda yakin ingin keluar dari SEB?".';
$string['seb_regexallowed'] = 'Regex diperbolehkan';
$string['seb_regexallowed_help'] = 'Ruas teks yang berisi ekspresi pemfilteran untuk URL yang diizinkan dalam format ekspresi reguler (Regex).';
$string['seb_regexblocked'] = 'Ekspresi reguler diblokir';
$string['seb_regexblocked_help'] = 'Ruas teks yang berisi ekspresi pemfilteran untuk URL yang diblokir dalam format ekspresi reguler (Regex).';
$string['seb_requiresafeexambrowser'] = 'Mewajibkan penggunaan Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Jika diaktifkan, siswa hanya dapat mencoba kuis menggunakan "Safe Exam Browser". Pilihan yang tersedia adalah: * Tidak <br/>"Safe Exam Browser" tidak diperlukan untuk mencoba kuis. * Ya – Gunakan templat yang sudah ada <br/>Template untuk konfigurasi "Safe Exam Browser" dapat digunakan. Templat dikelola dalam administrasi situs. Setelan manual Anda menimpa setelan di templat. * Ya – Konfigurasi secara manual <br/>Tidak ada templat untuk konfigurasi "Safe Exam Browser" yang akan digunakan. Anda dapat mengkonfigurasi "Safe Exam Browser" secara manual. * Ya – Unggah konfigurasi saya sendiri <br/>Anda dapat mengunggah berkas konfigurasi Safe Exam Browser Anda sendiri. Semua pengaturan manual dan penggunaan templat akan dinonaktifkan. * Ya – Gunakan konfigurasi klien SEB <br/>Tidak ada konfigurasi "Safe Exam Browser" di sisi Moodle. Kuis dapat dicoba dengan konfigurasi apa pun dari "Safe Exam Browser".';
$string['seb_showkeyboardlayout'] = 'Tampilkan tata letak papan ketik';
$string['seb_showkeyboardlayout_help'] = 'Jika diaktifkan, tata letak papan ketik saat ini ditampilkan di bilah tugas SEB. Ini memungkinkan Anda untuk beralih ke tata letak papan ketik lain, yang telah diaktifkan di sistem operasi.';
$string['seb_showreloadbutton'] = 'Tampilkan tombol muat ulang';
$string['seb_showreloadbutton_help'] = 'Jika diaktifkan, tombol muat ulang ditampilkan di bilah tugas SEB, memungkinkan halaman web saat ini untuk dimuat ulang.';
$string['seb_showsebdownloadlink'] = 'Tampilkan tombol unduh "Safe Exam Browser"';
$string['seb_showsebdownloadlink_help'] = 'Jika diaktifkan, tombol untuk mengunduh "Safe Exam Browser" akan ditampilkan di halaman awal kuis.';
$string['seb_showsebtaskbar'] = 'Tampilkan bilah tugas SEB';
$string['seb_showsebtaskbar_help'] = 'Jika diaktifkan, bilah tugas muncul di bagian bawah jendela browser SEB. Bilah tugas diperlukan untuk menampilkan item seperti kontrol Wi-Fi, tombol muat ulang, waktu, dan tata letak papan ketik.';
$string['seb_showtime'] = 'Tampilkan waktu';
$string['seb_showtime_help'] = 'Jika diaktifkan, waktu saat ini ditampilkan di bilah tugas SEB.';
$string['seb_showwificontrol'] = 'Tampilkan kontrol Wi-Fi';
$string['seb_showwificontrol_help'] = 'Jika diaktifkan, tombol kontrol Wi-Fi muncul di bilah tugas SEB. Tombol tersebut memungkinkan pengguna untuk menyambung kembali ke jaringan Wi-Fi yang sebelumnya telah tersambung.';
$string['seb_templateid'] = 'Templat konfigurasi \'Safe Exam Browser\'';
$string['seb_templateid_help'] = 'Setelan di templat konfigurasi yang dipilih akan digunakan untuk konfigurasi \'Safe Exam Browser\' saat mencoba kuis. Anda dapat menimpa setelan di templat dengan setelan manual Anda.';
$string['seb_use_client'] = 'Ya – Gunakan konfigurasi klien SEB';
$string['seb_use_manually'] = 'Ya – Konfigurasikan secara manual';
$string['seb_use_template'] = 'Ya – Gunakan templat yang sudah ada';
$string['seb_use_upload'] = 'Ya - Unggah konfigurasi saya sendiri';
$string['seb_userconfirmquit'] = 'Minta pengguna untuk mengonfirmasi berhenti';
$string['seb_userconfirmquit_help'] = 'Jika diaktifkan, pengguna harus mengonfirmasi penghentian SEB saat tautan keluar terdeteksi.';
$string['sebdownloadbutton'] = 'Unduh Safe Exam Browser';
$string['seblinkbutton'] = 'Luncurkan Safe Exam Browser';
$string['sebrequired'] = 'Kuis ini telah dikonfigurasi sehingga siswa hanya dapat mengerjakannya menggunakan Safe Exam Browser';
$string['setting:autoreconfigureseb'] = 'Konfigurasi otomatis SEB';
$string['setting:autoreconfigureseb_desc'] = 'Jika diaktifkan, pengguna yang menavigasi ke kuis menggunakan Safe Exam Browser akan otomatis dipaksa untuk mengonfigurasi ulang Safe Exam Browser mereka.';
$string['setting:displayblocksbeforestart'] = 'Tampilkan blok sebelum memulai kuis';
$string['setting:displayblocksbeforestart_desc'] = 'Jika diaktifkan, blok akan ditampilkan sebelum pengguna mengerjakan kuis.';
$string['setting:displayblockswhenfinished'] = 'Tampilkan blok setelah menyelesaikan kuis';
$string['setting:displayblockswhenfinished_desc'] = 'Jika diaktifkan, blok akan ditampilkan setelah pengguna mengerjakan kuis mereka.';
$string['setting:downloadlink'] = 'Tautan unduhan Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL untuk mengunduh Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Kata sandi kuis harus diisi';
$string['setting:quizpasswordrequired_desc'] = 'Jika diaktifkan, semua kuis yang memerlukan Save Exam Browser harus memiliki sandi kuis yang disetel.';
$string['setting:showhttplink'] = 'Tampilkan tautan  http://';
$string['setting:showseblink'] = 'Tampilkan tautan seb://';
$string['setting:showseblinks'] = 'Tampilkan tautan konfigurasi Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Apakah akan menampilkan tautan bagi pengguna untuk mengakses file konfigurasi Safe Exam Browser saat akses ke kuis dicegah. Perhatikan bahwa tautan seb:// mungkin tidak berfungsi di setiap peramban.';
$string['setting:supportedversions'] = 'Harap dicatat bahwa versi minimum berikut dari klien Safe Exam Browser diperlukan untuk menggunakan fitur kunci konfigurasi: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Karena kuis telah dikerjakan, setelan \'Safe Exam Browser\' tidak lagi dapat diubah.';
$string['unknown_reason'] = 'Alasan yang tidak diketahui';
$string['used'] = 'sedang digunakan';
