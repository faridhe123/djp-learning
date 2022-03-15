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
 * Strings for component 'tool_monitor', language 'id', version '3.11'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Tambahkan aturan baru';
$string['allevents'] = 'Semua acara';
$string['allmodules'] = 'Semua model';
$string['area'] = 'Area';
$string['areatomonitor'] = 'Area untuk dipantau';
$string['cachedef_eventsubscriptions'] = 'Ini menyimpan daftar langganan acara untuk kursus individu';
$string['contactadmin'] = 'Hubungi administrator Anda untuk mengaktifkannya.';
$string['core'] = 'Inti';
$string['currentsubscriptions'] = 'Langganan Anda saat ini';
$string['defaultmessagetemplate'] = 'Nama aturan: {rulename}<br />Deskripsi: {description}<br />Nama peristiwa: {eventname}';
$string['deleterule'] = 'Hapus aturan';
$string['deletesubscription'] = 'Hapus langganan';
$string['description'] = 'Deskripsi:';
$string['disablefieldswarning'] = 'Beberapa ruas tidak dapat diedit karena aturan ini sudah memiliki langganan.';
$string['duplicaterule'] = 'Aturan duplikat';
$string['editrule'] = 'Sunting aturan';
$string['enablehelp'] = 'Aktifkan/nonaktifkan pemantauan acara';
$string['enablehelp_help'] = 'Pemantauan acara harus diaktifkan sebelum Anda dapat membuat dan berlangganan aturan. Perhatikan bahwa mengaktifkan pemantauan acara dapat memengaruhi kinerja situs Anda.';
$string['errorincorrectevent'] = 'Silakan pilih acara yang terkait dengan pengaya yang dipilih';
$string['event'] = 'Acara';
$string['eventnotfound'] = 'Acara tidak ditemukan';
$string['eventrulecreated'] = 'Aturan dibuat';
$string['eventruledeleted'] = 'Aturan dihapus';
$string['eventruleupdated'] = 'Aturan diperbarui';
$string['eventsubcreated'] = 'Langganan dibuat';
$string['eventsubcriteriamet'] = 'Kriteria berlangganan terpenuhi';
$string['eventsubdeleted'] = 'Langganan dihapus';
$string['freqdesc'] = '{$a->freq} waktu dalam {$a->mins} menit';
$string['frequency'] = 'Ambang batas notifikasi';
$string['frequency_help'] = 'Jumlah peristiwa dalam jangka waktu tertentu yang diperlukan untuk mengirim pesan pemberitahuan.';
$string['inminutes'] = 'dalam menit';
$string['invalidmodule'] = 'Modul tidak valid';
$string['manage'] = 'Kelola';
$string['managerules'] = 'Aturan pemantauan acara';
$string['manageruleslink'] = 'Anda dapat mengelola aturan dari halaman {$a}.';
$string['managesubscriptions'] = 'Pemantauan acara';
$string['managesubscriptionslink'] = 'Anda dapat berlangganan aturan dari halaman {$a}.';
$string['messageprovider:notification'] = 'Pemberitahuan langganan aturan';
$string['messagetemplate'] = 'Pesan pemberitahuan';
$string['messagetemplate_help'] = 'Pesan notifikasi dikirim ke pelanggan setelah ambang notifikasi tercapai. Ini dapat mencakup salah satu atau semua placeholder berikut:

* Tautan ke lokasi acara {link}
* Tautan ke area yang dipantau {modulelink}
* Nama aturan {rulename}
* Deskripsi {description}
* Acara {eventname}';
$string['moduleinstance'] = 'Model';
$string['monitor:managerules'] = 'Kelola aturan pemantauan acara';
$string['monitor:managetool'] = 'Aktifkan/nonaktifkan pemantauan acara';
$string['monitor:subscribe'] = 'Berlangganan aturan pemantau acara';
$string['monitordisabled'] = 'Pemantauan acara saat ini dinonaktifkan.';
$string['monitorenabled'] = 'Pemantauan acara saat ini diaktifkan.';
$string['norules'] = 'Tidak ada aturan pemantauan acara.';
$string['pluginname'] = 'Pemantau acara';
$string['privacy:createdrules'] = 'Aturan monitor acara yang saya buat';
$string['privacy:metadata:description'] = 'Deskripsi aturan';
$string['privacy:metadata:eventname'] = 'Nama acara yang memenuhi syarat';
$string['privacy:metadata:frequency'] = 'Frekuensi notifikasi';
$string['privacy:metadata:historysummary'] = 'Menyimpan riwayat pemberitahuan pesan yang dikirim';
$string['privacy:metadata:inactivedate'] = 'Jangka waktu, dalam beberapa hari, setelah itu langganan yang tidak aktif akan dihapus sepenuhnya';
$string['privacy:metadata:lastnotificationsent'] = 'Kapan pemberitahuan terakhir dikirim untuk langganan ini.';
$string['privacy:metadata:messagesummary'] = 'Pemberitahuan dikirim ke sistem pesan.';
$string['privacy:metadata:name'] = 'Nama aturan';
$string['privacy:metadata:plugin'] = 'Nama pengaya Frankenstlye';
$string['privacy:metadata:rulessummary'] = 'Ini menyimpan aturan pemantauan.';
$string['privacy:metadata:subscriptionssummary'] = 'Menyimpan langganan pengguna ke berbagai aturan';
$string['privacy:metadata:template'] = 'Templat pesan';
$string['privacy:metadata:timecreatedrule'] = 'Kapan aturan ini dibuat';
$string['privacy:metadata:timecreatedsub'] = 'Kapan langganan ini dibuat';
$string['privacy:metadata:timemodifiedrule'] = 'Kapan aturan ini terakhir diubah';
$string['privacy:metadata:timesent'] = 'Saat pesan terkirim';
$string['privacy:metadata:timewindow'] = 'Jendela waktu dalam hitungan detik';
$string['privacy:metadata:userid'] = 'ID pengguna yang membuat aturan.';
$string['privacy:metadata:useridhistory'] = 'ID pengguna yang menerima pemberitahuan ini';
$string['privacy:metadata:useridsub'] = 'ID pelanggan.';
$string['privacy:subscriptions'] = 'Langganan monitor acara saya';
$string['processevents'] = 'Proses acara';
$string['ruleareyousure'] = 'Anda yakin ingin menghapus aturan "{$a}"?';
$string['ruleareyousureextra'] = 'Terdapat {$a} langganan untuk aturan ini yang juga akan dihapus.';
$string['rulecopysuccess'] = 'Aturan berhasil digandakan';
$string['ruledeletesuccess'] = 'Aturan berhasil dihapus';
$string['rulehelp'] = 'Detail aturan';
$string['rulehelp_help'] = 'Aturan ini mendengarkan ketika acara \'{$a->eventname}\' di \'{$a->eventcomponent}\' telah dipicu {$a->frequency} waktu dalam {$a->minutes} menit.';
$string['rulename'] = 'Nama aturan';
$string['rulenopermission'] = 'Anda tidak memiliki izin untuk berlangganan acara apa pun.';
$string['rulenopermissions'] = 'Anda tidak memiliki izin untuk "aturan {$a}"';
$string['rulescansubscribe'] = 'Aturan Anda dapat berlangganan';
$string['selectacourse'] = 'Pilih kursus';
$string['selectcourse'] = 'Kunjungi laporan ini di tingkat kursus untuk mendapatkan daftar kemungkinan modul';
$string['subareyousure'] = 'Yakin ingin menghapus langganan untuk aturan "{$a}"?';
$string['subcreatesuccess'] = 'Langganan berhasil dibuat';
$string['subdeletesuccess'] = 'Langganan berhasil dihapus';
$string['subhelp'] = 'Detail berlangganan';
$string['subhelp_help'] = 'Langganan ini mendengarkan ketika acara \'{$a->eventname}\' telah dipicu dalam \'{$a->moduleinstance}\' {$a->frequency} waktu dalam {$a->minutes} menit.';
$string['subscribeto'] = 'Berlangganan aturan "{$a}"';
$string['taskchecksubscriptions'] = 'Aktifkan/nonaktifkan langganan aturan yang tidak valid';
$string['taskcleanevents'] = 'Acara pemantau acara pembersihan';
$string['unsubscribe'] = 'Berhenti berlangganan';
