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
 * Strings for component 'antivirus_clamav', language 'id', version '3.11'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Ada masalah dengan pemindaian AntiVirus saat ini. Berkas {$a->item} Anda belum diunggah. Silakan coba lagi nanti.';
$string['clamfailed'] = 'Clam AV gagal beroperasi. Pesan kesalahannya adalah {$a}. Berikut keluaran dari Clam:';
$string['clamfailureonupload'] = 'Pada kegagalan ClamAV';
$string['configclamactlikevirus'] = 'Perlakukan berkas seperti virus';
$string['configclamdonothing'] = 'Perlakukan berkas OK';
$string['configclamfailureonupload'] = 'Jika \'Perlakukan berkas OK\' dipilih, berkas akan dipindahkan ke direktori tujuan. Jika \'Tolak unggah, coba lagi\' dipilih, pengguna akan diminta untuk mencoba lagi nanti. Jika \'Perlakukan berkas seperti virus\' dipilih, berkas akan dipindahkan ke area karantina, atau dihapus. Peringatan: Dengan opsi ini, jika karena alasan tertentu clam gagal dijalankan (biasanya karena pathtoklam yang tidak valid), maka SEMUA berkad yang diunggah akan dipindahkan ke area karantina yang diberikan, atau dihapus.';
$string['configclamtryagain'] = 'Tolak unggah, coba lagi';
$string['errorcantopensocket'] = 'Menghubungkan ke soket domain Unix mengakibatkan galat {$a}';
$string['errorclamavnoresponse'] = 'ClamAV tidak merespons; periksa status menjalankan daemon.';
$string['errornounixsocketssupported'] = 'Transportasi soket domain Unix tidak didukung pada sistem ini. Silakan gunakan opsi baris perintah sebagai gantinya.';
$string['invalidpathtoclam'] = 'Moodle dikonfigurasi untuk menjalankan clam saat file diunggah, namun path yang diberikan kepada Clam AV, {$a}, tidak valid.';
$string['pathtoclam'] = 'Baris perintah';
$string['pathtoclamdesc'] = 'Jika metode yang berjalan diatur ke "baris perintah", masukkan letak ClamAV di sini. Di Linux ini akan menjadi /usr/bin/clamscan atau /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Soket domain Unix';
$string['pathtounixsocketdesc'] = 'Jika metode yang dijalankan diatur ke "soket domain Unix", masukkan letak soket ClamAV Unix di sini. Di Debian Linux ini akan menjadi /var/run/clamav/clamd.ctl. Harap pastikan bahwa clamav daemon memiliki akses baca ke berkas yang diunggah, cara termudah untuk memastikannya adalah dengan menambahkan pengguna \'clamav\' ke grup server web Anda (\'www-data\' di Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'Pengaya antivirus ClamAV tidak menyimpan data pribadi apa pun.';
$string['quarantinedir'] = 'Direktori karantina';
$string['runningmethod'] = 'Metode proses';
$string['runningmethodcommandline'] = 'Baris perintah';
$string['runningmethoddesc'] = 'Metode menjalankan ClamAV. Baris perintah digunakan secara bawaan, namun pada sistem Unix, kinerja yang lebih baik dapat diperoleh dengan menggunakan soket sistem.';
$string['runningmethodtcpsocket'] = 'Soket TCP';
$string['runningmethodunixsocket'] = 'Soket domain Unix';
$string['tcpsockethost'] = 'Nama hos soket TCP';
$string['tcpsockethostdesc'] = 'Nama domain server ClamAV';
$string['tcpsocketport'] = 'porta soket TCP';
$string['tcpsocketportdesc'] = 'Porta yang akan digunakan saat menghubungkan ke ClamAV';
$string['tries'] = 'Upaya pemindaian';
$string['tries_desc'] = 'Jumlah upaya yang dilakukan oleh ClamAV jika terjadi galat selama proses pemindaian.';
$string['tries_notice'] = 'Pemindaian clamav telah mencoba {$a->tries} kali. {$a->notice}';
$string['unknownerror'] = 'Ada kesalahan dengan clam yang tidak diketahui';
