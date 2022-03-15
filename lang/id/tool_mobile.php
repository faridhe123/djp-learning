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
 * Strings for component 'tool_mobile', language 'id', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Awakutu ADOdb diaktifkan. Ini harus dinonaktifkan dalam autentikasi basis data eksternal atau setelan pengaya pendaftaran basis data eksternal.';
$string['androidappid'] = 'pengenal unik aplikasi Android';
$string['androidappid_desc'] = 'Setelan ini dapat dibiarkan sebagai bawaan kecuali Anda memiliki aplikasi Android khusus.';
$string['apppolicy'] = 'URL kebijakan aplikasi';
$string['apppolicy_help'] = 'URL kebijakan untuk pengguna aplikasi yang tercantum di halaman Tentang di aplikasi. Jika bidang dibiarkan kosong, URL kebijakan situs akan digunakan sebagai gantinya.';
$string['apprequired'] = 'Fungsionalitas ini hanya tersedia saat diakses melalui aplikasi seluler atau desktop Moodle.';
$string['autologinkeygenerationlockout'] = 'Pembuatan kunci masuk otomatis diblokir. Anda harus menunggu 6 menit di antara permintaan.';
$string['autologinnotallowedtoadmins'] = 'Log masuk otomatis tidak diizinkan untuk admin situs.';
$string['cachedef_plugininfo'] = 'Ini menyimpan daftar pengaya dengan tambahan seluler';
$string['cachedef_subscriptiondata'] = 'Ini menyimpan informasi langganan aplikasi Moodle.';
$string['clickheretolaunchtheapp'] = 'Klik di sini jika aplikasi tidak terbuka secara otomatis.';
$string['configmobilecssurl'] = 'Berkas CSS untuk menyesuaikan antarmuka aplikasi seluler Anda.';
$string['customlangstrings'] = 'String bahasa kustom';
$string['customlangstrings_desc'] = 'Kata dan frasa yang ditampilkan di aplikasi dapat disesuaikan di sini. Masukkan setiap string bahasa kustom pada baris baru dengan format: pengidentifikasi string, string bahasa kustom, dan kode bahasa, dipisahkan oleh karakter pipa. Sebagai contoh:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>';
$string['custommenuitems'] = 'Untuk daftar lengkap pengidentifikasi string, lihat dokumentasi.';
$string['custommenuitems_desc'] = 'Item tambahan dapat ditambahkan ke menu utama aplikasi dengan menentukannya di sini. Masukkan setiap item menu tersuai pada baris baru dengan format: teks item, URL tautan, metode pembukaan tautan, dan kode bahasa (opsional, untuk menampilkan item kepada pengguna bahasa tertentu saja), dipisahkan dengan karakter pipa.

Metode pembukaan tautan adalah: aplikasi (untuk menautkan ke aktivitas yang didukung oleh aplikasi), inappbrowser (untuk membuka tautan di peramban tanpa keluar dari aplikasi), peramban (untuk membuka tautan di peramban bawaan perangkat di luar aplikasi) dan disematkan (untuk menampilkan tautan di iframe di halaman baru di aplikasi).

Saat item tidak memiliki terjemahan untuk bahasa tertentu, item tersebut akan menggunakan bahasa lain sebagai pengganti kecuali "_only" ditambahkan ke kode bahasa.

Sebagai contoh:
<pra>
Bantuan aplikasi|https://someurl.xyz/help|inappbrowser
Nilai saya|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Anda hanya akan melihat ini dalam bahasa Inggris|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Mode gelap';
$string['disabledfeatures'] = 'Fitur yang dinonaktifkan';
$string['disabledfeatures_desc'] = 'Pilih di sini fitur yang ingin Anda nonaktifkan di aplikasi Seluler untuk situs Anda. Harap dicatat bahwa beberapa fitur yang tercantum di sini mungkin sudah dinonaktifkan melalui setelan situs lain. Anda harus keluar dan masuk lagi di aplikasi untuk melihat perubahannya.';
$string['displayerrorswarning'] = 'Tampilan pesan awakutu (debugdisplay) diaktifkan. Ini harus dinonaktifkan.';
$string['downloadcourse'] = 'Unduh kursus';
$string['downloadcourses'] = 'Unduh kursus';
$string['enablesmartappbanners'] = 'Aktifkan Spanduk Aplikasi';
$string['enablesmartappbanners_desc'] = 'Jika diaktifkan, spanduk yang mempromosikan aplikasi seluler akan ditampilkan saat mengakses situs menggunakan peramban seluler.';
$string['filetypeexclusionlist'] = 'Daftar pengecualian jenis berkas';
$string['filetypeexclusionlist_desc'] = 'Pilih semua jenis berkas yang tidak untuk digunakan pada perangkat seluler. Berkas tersebut akan terdaftar dalam kursus, kemudian jika pengguna mencoba untuk membukanya, peringatan akan ditampilkan yang memberitahukan bahwa jenis berkas tidak dimaksudkan untuk digunakan pada perangkat seluler. Pengguna kemudian dapat membatalkan atau mengabaikan peringatan dan tetap membuka berkas.';
$string['filetypeexclusionlistplaceholder'] = 'Daftar pengecualian jenis berkas seluler';
$string['forcedurlscheme'] = 'Jika Anda ingin hanya mengizinkan aplikasi bermerek khusus Anda untuk dibuka melalui jendela peramban, tentukan skema URL-nya di sini. Jika Anda hanya ingin mengizinkan aplikasi resmi, setel nilai bawaan. Biarkan ruas kosong jika Anda ingin mengizinkan aplikasi apa pun.';
$string['forcedurlscheme_key'] = 'Skema URL';
$string['forcelogout'] = 'Paksa keluar';
$string['forcelogout_desc'] = 'Jika diaktifkan, pengguna akan selalu keluar sepenuhnya bahkan saat berpindah akun. Mereka kemudian harus memasukkan kembali kata sandi mereka saat berikutnya mereka ingin mengakses situs.';
$string['getmoodleonyourmobile'] = 'Dapatkan aplikasi seluler';
$string['h5poffline'] = 'Lihat konten H5P secara luring';
$string['httpsrequired'] = 'Wajib HTTPS';
$string['insecurealgorithmwarning'] = 'Tampaknya sertifikat HTTPS menggunakan algoritme yang tidak aman untuk penandatanganan (SHA-1). Coba perbarui sertifikat.';
$string['invalidcertificatechainwarning'] = 'Tampaknya rantai sertifikat tidak valid. Sertifikat ini mungkin berfungsi untuk peramban tetapi tidak untuk aplikasi seluler.';
$string['invalidcertificateexpiredatewarning'] = 'Tampaknya sertifikat HTTPS untuk situs tersebut telah kedaluwarsa.';
$string['invalidcertificatestartdatewarning'] = 'Tampaknya sertifikat HTTPS untuk situs tersebut belum valid (dengan tanggal mulai di masa mendatang).';
$string['invalidprivatetoken'] = 'Token pribadi tidak valid. Token tidak boleh kosong atau diteruskan melalui parameter GET.';
$string['invaliduserquotawarning'] = 'Kuota pengguna (userquota) disetel ke nomor yang tidak valid. Ini harus diatur ke nomor yang valid (nilai integer) dalam setelan keamanan Situs.';
$string['iosappid'] = 'Pengenal unik aplikasi iOS';
$string['iosappid_desc'] = 'Setelan ini dapat dibiarkan sebagai default kecuali Anda memiliki aplikasi iOS khusus.';
$string['launchviasiteinbrowser'] = 'Luncurkan melalui situs di peramban sistem';
$string['loginintheapp'] = 'Via aplikasi';
$string['logininthebrowser'] = 'Melalui jendela peramban (untuk pengaya SSO)';
$string['loginintheembeddedbrowser'] = 'Melalui peramban tersemat (untuk pengaya SSO)';
$string['logoutconfirmation'] = 'Anda yakin ingin keluar dari aplikasi seluler di perangkat seluler Anda? Dengan keluar, Anda harus memasukkan kembali nama pengguna dan kata sandi Anda di aplikasi seluler di semua perangkat tempat Anda menginstal aplikasi tersebut.';
$string['mainmenu'] = 'Menu utama';
$string['managefiletypes'] = 'Kelola jenis berkas';
$string['minimumversion'] = 'Jika versi aplikasi ditentukan (3.8.0 atau lebih tinggi), pengguna mana pun yang menggunakan versi aplikasi yang lebih lama akan diminta untuk meningkatkan aplikasi mereka sebelum diizinkan mengakses situs.';
$string['minimumversion_key'] = 'Diperlukan versi aplikasi minimum';
$string['mobileapp'] = 'Aplikasi seluler';
$string['mobileappconnected'] = 'Aplikasi seluler terhubung';
$string['mobileappearance'] = 'Tampilan seluler';
$string['mobileappenabled'] = 'Situs ini mengaktifkan akses aplikasi seluler.<br /><a href="{$a}">Unduh aplikasi seluler</a>.';
$string['mobileappsubscription'] = 'Berlangganan aplikasi Moodle';
$string['mobileauthentication'] = 'Autentikasi seluler';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Fitur seluler';
$string['mobilenotificationsdisabledwarning'] = 'Notifikasi seluler tidak diaktifkan. Mereka harus diaktifkan di setelan notifikasi.';
$string['mobilesettings'] = 'Setelan seluler';
$string['moodleappsportalfeatureswarning'] = 'Harap dicatat bahwa beberapa fitur mungkin dibatasi tergantung pada langganan aplikasi Moodle Anda. Untuk detailnya, kunjungi <a href="{$a}" target="_blank">Portal Aplikasi Moodle</a>.';
$string['notifications'] = 'Pemberitahuan';
$string['notificationsactivedevices'] = 'Perangkat aktif';
$string['notificationscurrentactivedevices'] = 'Perangkat yang menerima notifikasi bulan ini';
$string['notificationsignorednotifications'] = 'Notifikasi tidak terkirim';
$string['notificationslimitreached'] = 'Batas perangkat pengguna aktif bulanan telah terlampaui. Pemberitahuan untuk beberapa pengguna tidak akan dikirim. Disarankan agar Anda meningkatkan paket aplikasi Anda di <a href="{$a}" target="_blank"> Portal Aplikasi Moodle </a>.';
$string['notificationsmissingwarning'] = 'Statistik pemberitahuan aplikasi Moodle tidak dapat diambil. Ini kemungkinan besar karena notifikasi seluler belum diaktifkan di situs. Anda dapat mengaktifkannya di Administrasi Situs/Olah Pesan/Seluler.';
$string['notificationsnewdevices'] = 'Perangkat baru';
$string['notificationsseemore'] = 'Catatan: Statistik penggunaan aplikasi Moodle tidak dihitung secara langsung. Untuk mengakses statistik yang lebih detail, termasuk data dari bulan-bulan sebelumnya, harap masuk ke <a href="{$a}" target="_blank">Portal Aplikasi Moodle</a>.';
$string['notificationssentnotifications'] = 'Notifikasi terkirim';
$string['oauth2identityproviders'] = 'Penyedia identitas OAuth 2';
$string['offlineuse'] = 'Penggunaan luring';
$string['openusingembeddedbrowser'] = 'Buka menggunakan peramban tersemat';
$string['pluginname'] = 'Alat aplikasi Moodle';
$string['pluginnotenabledorconfigured'] = 'Pengaya tidak diaktifkan atau dikonfigurasi.';
$string['privacy:metadata:core_userkey'] = 'Kunci pengguna digunakan untuk membuat kunci masuk otomatis untuk pengguna saat ini.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Tanggal permintaan kunci masuk otomatis terakhir. Di antara setiap permintaan diperlukan 6 menit.';
$string['qrcodedisabled'] = 'Akses melalui kode QR dinonaktifkan';
$string['qrcodeformobileappaccess'] = 'Kode QR untuk akses aplikasi seluler';
$string['qrcodeformobileapploginabout'] = 'Pindai kode QR dengan aplikasi seluler Anda dan Anda akan masuk secara otomatis. Kode QR akan kedaluwarsa dalam {$a} menit.';
$string['qrcodeformobileappurlabout'] = 'Pindai kode QR dengan aplikasi seluler Anda untuk mengisi URL situs di aplikasi Anda.';
$string['qrcodetype'] = 'Akses kode QR';
$string['qrcodetype_desc'] = 'Kode QR dapat disediakan untuk dipindai oleh pengguna aplikasi seluler. Ini dapat digunakan untuk mengisi URL situs, atau di mana situs diamankan menggunakan HTTPS, untuk memasukkan pengguna secara otomatis tanpa harus memasukkan nama pengguna dan kata sandi mereka.';
$string['qrcodetypelogin'] = 'Kode QR dengan login otomatis';
$string['qrcodetypeurl'] = 'Kode QR dengan URL situs';
$string['qrsiteadminsnotallowed'] = 'Untuk alasan keamanan log masuk melalui kode QR tidak diperbolehkan untuk administrator situs atau jika Anda masuk sebagai pengguna lain.';
$string['readingthisemailgettheapp'] = 'Membaca ini di surel? <a href="{$a}">Unduh aplikasi seluler dan terima pemberitahuan di perangkat seluler Anda</a>.';
$string['remoteaddons'] = 'Pengaya jarak jauh';
$string['responsivemainmenuitems'] = 'Item menu responsif';
$string['scanqrcode'] = 'Pindai kode QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Tampaknya sertifikat HTTPS ditandatangani sendiri atau tidak dipercaya. Aplikasi seluler hanya akan berfungsi dengan situs tepercaya. Silakan, gunakan alat pemeriksa SSL daring apa pun untuk mendiagnosis masalah lebih lanjut. Jika alat ini menunjukkan bahwa sertifikat Anda OK, Anda dapat mengabaikan peringatan ini.';
$string['setuplink'] = 'Halaman unduh aplikasi';
$string['setuplink_desc'] = 'URL halaman dengan opsi untuk mengunduh aplikasi seluler dari App Store dan Google Play. Tautan halaman unduhan aplikasi ditampilkan di footer halaman dan di profil pengguna. Biarkan kosong agar tidak menampilkan tautan.';
$string['smartappbanners'] = 'Spanduk Aplikasi';
$string['subscription'] = 'Berlangganan';
$string['subscriptioncreated'] = 'Mulai tanggal';
$string['subscriptionerrorrequest'] = 'Terjadi kesalahan tak terduga saat mencoba mengambil informasi langganan aplikasi Moodle Anda.';
$string['subscriptionexpiration'] = 'Tanggal kedaluwarsa';
$string['subscriptionfeaturenotapplied'] = 'Fitur ini dikonfigurasi di situs Anda tetapi tidak termasuk dalam paket aplikasi Moodle Anda. Dengan demikian, setelan tidak akan berpengaruh.';
$string['subscriptionfeatures'] = 'Fitur berlangganan';
$string['subscriptionlimitsurpassed'] = 'Batas berlangganan terlampaui';
$string['subscriptionregister'] = 'Untuk detail berbagai paket aplikasi, dan untuk mengakses statistik penggunaan aplikasi Moodle, silakan kunjungi <a href="{$a}" target="_blank">Portal Aplikasi Moodle</a>.';
$string['subscriptionsseemore'] = 'Catatan: Informasi yang ditampilkan tidak diperbarui secara real time. Anda mungkin perlu keluar dan masuk lagi untuk melihat pembaruan. Untuk informasi tentang meningkatkan paket aplikasi Anda, harap masuk ke <a href="{$a}" target="_blank">Portal Aplikasi Moodle</a>.';
$string['switchaccount'] = 'Beralih akun';
$string['typeoflogin'] = 'Jenis login';
$string['typeoflogin_desc'] = 'Jika situs menggunakan metode autentikasi SSO, pilih melalui jendela peramban atau melalui peramban tersemat. Peramban tersemat memberikan pengalaman pengguna yang lebih baik, meskipun tidak berfungsi dengan semua pengaya SSO.';
$string['viewqrcode'] = 'Lihat kode QR';
