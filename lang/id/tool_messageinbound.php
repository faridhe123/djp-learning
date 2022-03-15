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
 * Strings for component 'tool_messageinbound', language 'id', version '3.11'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nama kelas';
$string['component'] = 'Komponen';
$string['configmessageinboundhost'] = 'Alamat server tempat Moodle harus memeriksa surel. Untuk menentukan porta non-bawaan, gunakan [server]:[port], misalnya mail.example.com:993. Jika porta tidak ditentukan, porta bawaan untuk jenis server surel akan digunakan.';
$string['defaultexpiration'] = 'Periode kedaluwarsa alamat bawaan';
$string['defaultexpiration_help'] = 'Ketika alamat surel dibuat oleh penangan, alamat surel tersebut dapat diatur untuk kedaluwarsa secara otomatis setelah jangka waktu tertentu, sehingga tidak dapat digunakan lagi. Dianjurkan untuk mengatur periode kedaluwarsa.';
$string['description'] = 'Deskripsi';
$string['domain'] = 'Domain surel';
$string['edit'] = 'Edit';
$string['edithandler'] = 'Edit setelan untuk penangan {$a}';
$string['editinghandler'] = 'Mengedit {$a}';
$string['enabled'] = 'Diaktifkan';
$string['fixedenabled_help'] = 'Anda tidak dapat mengubah status penangan ini. Ini mungkin karena penangan dibutuhkan oleh penangan lain.';
$string['fixedvalidateaddress'] = 'Validasi alamat pengirim';
$string['fixedvalidateaddress_help'] = 'Anda tidak dapat mengubah validasi alamat untuk penangan ini. Ini mungkin karena pawang memerlukan pengaturan tertentu.';
$string['handlerdisabled'] = 'Penangan surel yang Anda coba hubungi telah dinonaktifkan. Tidak dapat memproses pesan saat ini.';
$string['incomingmailconfiguration'] = 'Konfigurasi surat masuk';
$string['incomingmailserversettings'] = 'Setelan server email masuk';
$string['incomingmailserversettings_desc'] = 'Moodle mampu terhubung ke server IMAP yang dikonfigurasi dengan tepat. Anda dapat menentukan setelan yang digunakan untuk menyambung ke server IMAP Anda di sini.';
$string['invalid_recipient_handler'] = 'Jika pesan yang valid diterima tetapi pengirim tidak dapat diautentikasi, pesan disimpan di server email dan pengguna dihubungi menggunakan alamat surel di profil pengguna mereka.

Penangan ini memproses balasan tersebut.';
$string['invalid_recipient_handler_name'] = 'Pengendali pengirim tidak valid';
$string['invalidrecipientdescription'] = 'Pesan "{$a->subject}" tidak dapat diautentikasi, karena dikirim dari alamat surel yang berbeda dengan yang ada di profil pengguna Anda. Agar pesan diautentikasi, Anda harus membalas pesan ini.';
$string['invalidrecipientdescriptionhtml'] = 'Pesan "{$a->subject}" tidak dapat diautentikasi, karena dikirim dari alamat surel yang berbeda dengan yang ada di profil pengguna Anda. Agar pesan diautentikasi, Anda harus membalas pesan ini.';
$string['invalidrecipientfinal'] = 'Pesan "{$a->subject}" tidak dapat diautentikasi. Harap periksa apakah Anda mengirim pesan dari alamat surel yang sama seperti di profil Anda.';
$string['mailbox'] = 'Nama kotak surat';
$string['mailboxconfiguration'] = 'Konfigurasi kotak surat';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Setelan surel';
$string['message_handlers'] = 'Pengendali pesan';
$string['messageinbound'] = 'Pesan Masuk';
$string['messageinboundenabled'] = 'Aktifkan pemrosesan surel masuk';
$string['messageinboundenabled_desc'] = 'Pemrosesan surat masuk harus diaktifkan agar pesan dapat dikirim dengan informasi yang sesuai.';
$string['messageinboundgeneralconfiguration'] = 'Konfigurasi umum';
$string['messageinboundgeneralconfiguration_desc'] = 'Pemrosesan pesan masuk memungkinkan Anda menerima dan memproses surel dalam Moodle. Ini memiliki aplikasi seperti mengirim balasan surel ke kiriman forum atau menambahkan berkas ke berkas pribadi pengguna.';
$string['messageinboundhost'] = 'Server Surat Masuk';
$string['messageinboundhostpass'] = 'Kata sandi';
$string['messageinboundhostpass_desc'] = 'Ini adalah kata sandi yang akan diberikan penyedia layanan Anda untuk masuk ke akun surel Anda.';
$string['messageinboundhostssl'] = 'Gunakan SSL';
$string['messageinboundhostssl_desc'] = 'Beberapa server surel mendukung tingkat keamanan tambahan dengan mengenkripsi komunikasi antara Moodle dan server Anda. Sebaiknya gunakan enkripsi SSL ini jika server Anda mendukungnya.';
$string['messageinboundhosttype'] = 'Jenis server';
$string['messageinboundhostuser'] = 'Nama pengguna';
$string['messageinboundhostuser_desc'] = 'Ini adalah nama pengguna yang disediakan oleh penyedia layanan Anda untuk masuk ke akun surel Anda.';
$string['messageinboundmailboxconfiguration_desc'] = 'Saat pesan dikirim, mereka masuk ke dalam format alamat+data@example.com. Untuk menghasilkan alamat dari Moodle dengan andal, harap tentukan alamat yang biasanya Anda gunakan sebelum tanda @, dan domain setelah tanda @ secara terpisah. Misalnya, nama Kotak Surat dalam contoh akan menjadi "alamat", dan domain surel akan menjadi "example.com". Anda harus menggunakan akun surel khusus untuk tujuan ini.';
$string['messageprocessingerror'] = 'Anda baru saja mengirim surel "{$a->subject}" tetapi sayangnya surel tersebut tidak dapat diproses.

Rincian kesalahan ditunjukkan di bawah ini.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Baru-baru ini Anda mengirim surel "{$a->subject}" tetapi sayangnya tidak dapat diproses.</p>
<p>Rincian kesalahan ditampilkan di bawah.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Surel "{$a->subject}" tidak dapat diproses. Kesalahannya adalah sebagai berikut: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'Surel "{$a->subject}" tidak dapat diproses. Hubungi administrator Anda untuk informasi lebih lanjut.';
$string['messageprocessingsuccess'] = '{$a->plain}

Jika Anda tidak ingin menerima pemberitahuan ini di masa mendatang, Anda dapat mengedit preferensi perpesanan pribadi Anda dengan membuka {$a->messagepreferencesurl} di peramban Anda.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Jika Anda tidak ingin menerima pemberitahuan ini di masa mendatang, Anda dapat <a href="{$a->messagepreferencesurl}"> mengedit preferensi perpesanan pribadi Anda</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Pesan untuk mengonfirmasi bahwa pesan masuk datang dari Anda';
$string['messageprovider:messageprocessingerror'] = 'Peringatan saat pesan masuk tidak dapat diproses';
$string['messageprovider:messageprocessingsuccess'] = 'Konfirmasi bahwa pesan berhasil diproses';
$string['name'] = 'Nama';
$string['noencryption'] = 'Padam - Tanpa enkripsi';
$string['noexpiry'] = 'Tidak ada kedaluwarsa';
$string['oldmessagenotfound'] = 'Anda mencoba mengautentikasi pesan secara manual, tetapi pesan tidak dapat ditemukan. Ini bisa jadi karena sudah diproses, atau karena pesan kedaluwarsa.';
$string['oneday'] = 'Satu hari';
$string['onehour'] = 'Satu jam';
$string['oneweek'] = 'Satu minggu';
$string['oneyear'] = 'Satu tahun';
$string['pluginname'] = 'Konfigurasi pesan masuk';
$string['privacy:metadata:coreuserkey'] = 'Kunci pengguna untuk memvalidasi surel yang diterima';
$string['privacy:metadata:messagelist'] = 'Daftar pengidentifikasi pesan yang gagal validasi dan memerlukan otorisasi lebih lanjut';
$string['privacy:metadata:messagelist:address'] = 'Alamat tempat surel dikirim';
$string['privacy:metadata:messagelist:messageid'] = 'ID pesan';
$string['privacy:metadata:messagelist:timecreated'] = 'Waktu ketika rekaman dibuat';
$string['privacy:metadata:messagelist:userid'] = 'ID pengguna yang perlu menyetujui pesan';
$string['replysubjectprefix'] = 'Balasan:';
$string['requirevalidation'] = 'Validasi alamat pengirim';
$string['ssl'] = 'SSL (Deteksi otomatis versi SSL)';
$string['sslv2'] = 'SSLv2 (Paksa SSL Versi 2)';
$string['sslv3'] = 'SSLv3 (Paksa SSL Versi 3)';
$string['taskcleanup'] = 'Pembersihan surel masuk yang belum diverifikasi';
$string['taskpickup'] = 'Pengambilan surel masuk';
$string['tls'] = 'TLS (TLS; dimulai melalui negosiasi tingkat protokol melalui saluran yang tidak terenkripsi; cara yang DIREKOMENDASIKAN untuk memulai koneksi aman)';
$string['tlsv1'] = 'TLSv1 (koneksi langsung ke server TLS versi 1.x)';
$string['validateaddress'] = 'Validasi alamat surel pengirim';
$string['validateaddress_help'] = 'Ketika pesan diterima dari pengguna, Moodle mencoba untuk memvalidasi pesan dengan membandingkan alamat surel pengirim dengan alamat surel di profil pengguna mereka.

Jika pengirim tidak cocok, maka pengguna dikirimi pemberitahuan untuk mengonfirmasi bahwa mereka benar-benar mengirim surel.

Jika pengaturan ini dinonaktifkan, maka alamat surel pengirim tidak dicentang sama sekali.';
