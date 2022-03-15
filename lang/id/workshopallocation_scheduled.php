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
 * Strings for component 'workshopallocation_scheduled', language 'id', version '3.11'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Pemrosesan latar belakang untuk alokasi terjadwal';
$string['currentstatus'] = 'Status terkini';
$string['currentstatusexecution'] = 'Status';
$string['currentstatusexecution1'] = 'Dieksekusi pada {$a->datetime}';
$string['currentstatusexecution2'] = 'Untuk dieksekusi lagi pada {$a->datetime}';
$string['currentstatusexecution3'] = 'Untuk dieksekusi pada {$a->datetime}';
$string['currentstatusexecution4'] = 'Menunggu eksekusi';
$string['currentstatusnext'] = 'Eksekusi selanjutnya';
$string['currentstatusnext_help'] = 'Dalam beberapa kasus, alokasi dijadwalkan untuk dijalankan kembali secara otomatis meskipun sudah dijalankan. Ini mungkin terjadi jika batas waktu pengiriman diperpanjang, sebagai contoh.';
$string['currentstatusreset'] = 'Reset';
$string['currentstatusreset_help'] = 'Menyimpan formulir dengan mencentang kotak ini akan mengakibatkan reset status saat ini. Semua informasi tentang eksekusi sebelumnya akan dihapus sehingga alokasi dapat dijalankan kembali (jika diaktifkan di atas).';
$string['currentstatusresetinfo'] = 'Centang kotak dan simpan formulir untuk mengatur ulang hasil eksekusi';
$string['currentstatusresult'] = 'Hasil eksekusi terkini';
$string['enablescheduled'] = 'Aktifkan alokasi terjadwal';
$string['enablescheduledinfo'] = 'Alokasikan kiriman secara otomatis di akhir fase pengajuan';
$string['pluginname'] = 'Alokasi terjadwal';
$string['privacy:metadata'] = 'Pengaya Alokasi Terjadwal tidak menyimpan data pribadi apa pun. Data pribadi aktual tentang siapa yang akan menilai siapa yang disimpan oleh modul Lokakarya itu sendiri dan mereka menjadi dasar untuk mengekspor detail penilaian.';
$string['randomallocationsettings'] = 'Setelan alokasi';
$string['randomallocationsettings_help'] = 'Parameter untuk metode alokasi acak didefinisikan di sini. Mereka akan digunakan oleh pengaya alokasi acak untuk alokasi pengiriman yang sebenarnya.';
$string['resultdisabled'] = 'Alokasi terjadwal dinonaktifkan';
$string['resultenabled'] = 'Alokasi terjadwal diaktifkan';
$string['resultexecuted'] = 'Berhasil';
$string['resultfailed'] = 'Tidak dapat mengalokasikan ajuan secara otomatis';
$string['resultfailedconfig'] = 'Alokasi terjadwal salah dikonfigurasi';
$string['resultfaileddeadline'] = 'Lokakarya tidak menetapkan batas waktu pengiriman';
$string['resultfailedphase'] = 'Lokakarya tidak dalam tahap pengajuan';
$string['resultvoid'] = 'Tidak ada ajuan yang dialokasikan';
$string['resultvoiddeadline'] = 'Belum setelah batas waktu pengiriman';
$string['resultvoidexecuted'] = 'Alokasi telah dijalankan';
$string['scheduledallocationsettings'] = 'Setelan alokasi terjadwal';
$string['scheduledallocationsettings_help'] = 'Jika diaktifkan, metode alokasi terjadwal akan secara otomatis mengalokasikan ajuan untuk penilaian di akhir fase pengajuan. Akhir fase dapat ditentukan dalam setelan lokakarya \'Batas waktu pengiriman\'. Secara internal, metode alokasi acak dijalankan dengan parameter yang telah ditentukan sebelumnya dalam formulir ini. Artinya, alokasi terjadwal berfungsi seolah-olah guru melaksanakan sendiri alokasi acak di akhir tahap pengajuan menggunakan setelan alokasi di bawah ini. Perhatikan bahwa alokasi terjadwal * tidak * dilaksanakan jika Anda secara manual mengalihkan lokakarya ke fase penilaian sebelum batas waktu pengajuan. Anda harus mengalokasikan sendiri pengiriman dalam kasus itu. Metode alokasi terjadwal sangat berguna bila digunakan bersama dengan fitur pengalihan fase otomatis.';
$string['setup'] = 'Siapkan alokasi terjadwal';
