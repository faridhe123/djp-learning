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
 * Strings for component 'mnet', language 'id', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (ditandatangani sendiri)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (ditandatangani)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP tidak terenkripsi';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (ditandatangani sendiri)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (ditandatangani)';
$string['aboutyourhost'] = 'Tentang server Anda';
$string['accesslevel'] = 'Level akses';
$string['addhost'] = 'Tambahkan hos';
$string['addnewhost'] = 'Tambahkan hos baru';
$string['addtoacl'] = 'Tambahkan ke kontrol akses';
$string['allhosts'] = 'Semua hos';
$string['allhosts_no_options'] = 'Tidak ada opsi yang tersedia saat melihat banyak hos';
$string['allow'] = 'Izinkan';
$string['applicationtype'] = 'Tipe aplikasi';
$string['authfail_nosessionexists'] = 'Otorisasi gagal: sesi mnet tidak ada.';
$string['authfail_sessiontimedout'] = 'Otorisasi gagal: sesi mnet telah habis.';
$string['authfail_usermismatch'] = 'Otorisasi gagal: pengguna tidak cocok.';
$string['authmnetdisabled'] = 'Pengaya autentikasi MNet <strong>dinonaktifkan</strong>.';
$string['badcert'] = 'Ini bukan sertifikat valid.';
$string['certdetails'] = 'Detail sertifikat';
$string['configmnet'] = 'MNet memungkinkan komunikasi server ini dengan server atau layanan lain.';
$string['couldnotgetcert'] = 'Tidak ada sertifikat yang ditemukan di <br />{$a}. <br />Host mungkin sedang down atau salah konfigurasi.';
$string['couldnotmatchcert'] = 'Ini tidak cocok dengan sertifikat yang saat ini diterbitkan oleh server web.';
$string['courses'] = 'Kursus';
$string['courseson'] = 'kursus di';
$string['current_transport'] = 'Transportasi saat ini';
$string['currentkey'] = 'Kunci publik saat ini';
$string['databaseerror'] = 'Tidak dapat menulis detail ke basis data.';
$string['deleteaserver'] = 'Menghapus server';
$string['deletedhostinfo'] = 'Hos ini telah dihapus. Jika Anda ingin membatalkan penghapusan, alihkan status yang dihapus kembali ke \'Tidak\'.';
$string['deletedhosts'] = 'Hos yang dihapus: {$a}';
$string['deletehost'] = 'Hapus hos';
$string['deletekeycheck'] = 'Anda yakin benar-benar ingin menghapus kunci ini?';
$string['deleteoutoftime'] = 'Jendela 60 detik Anda untuk menghapus kunci ini telah kedaluwarsa. Silakan mulai lagi.';
$string['deleteuserrecord'] = 'SSO ACL: hapus catatan untuk pengguna \'{$a->user}\' dari {$a->host}.';
$string['deletewrongkeyvalue'] = 'Sebuah kesalahan telah terjadi. Jika Anda tidak mencoba untuk menghapus kunci SSL server Anda, mungkin Anda telah menjadi sasaran serangan berbahaya. Tidak ada tindakan yang diambil.';
$string['deny'] = 'Tolak';
$string['description'] = 'Deskripsi';
$string['duplicate_usernames'] = 'Kami gagal membuat indeks pada kolom "mnethostid" dan "username" di tabel pengguna Anda. <br /> Ini dapat terjadi bila Anda memiliki <a href="{$a}" target="_blank"> nama pengguna duplikat di tabel pengguna Anda </a>. <br /> Peningkatan Anda seharusnya masih berhasil diselesaikan. Klik tautan di atas, dan petunjuk untuk memperbaiki masalah ini akan muncul di jendela baru. Anda dapat melakukannya di akhir peningkatan versi. <br />';
$string['enabled_for_all'] = '(Layanan ini telah diaktifkan untuk semua hos).';
$string['enterausername'] = 'Silakan masukkan nama pengguna, atau daftar nama pengguna dibatasi dengan koma.';
$string['error7020'] = 'Kesalahan ini biasanya terjadi jika situs jarak jauh telah membuat rekaman untuk Anda dengan wwwroot yang salah, misalnya, https://situsAnda.com alih-alih https://www.situsAnda.com. Silakan hubungi administrator situs jarak jauh dengan wwwroot Anda (seperti yang ditentukan dalam config.php) dan minta mereka untuk memperbarui rekaman untuk hos Anda.';
$string['error7022'] = 'Pesan yang Anda kirim ke situs jarak jauh dienkripsi dengan benar, tetapi tidak ditandatangani. Ini sangat tidak terduga; Anda mungkin harus mengajukan awakutu jika ini terjadi (memberikan informasi sebanyak mungkin tentang versi aplikasi yang dimaksud, dll).';
$string['error7023'] = 'Situs jarak jauh telah mencoba mendekripsi pesan Anda dengan semua kunci yang tercatat untuk situs Anda. Mereka semua telah gagal. Anda mungkin dapat memperbaiki masalah ini dengan memasukkan ulang secara manual dengan situs jarak jauh. Ini tidak mungkin terjadi kecuali jika Anda tidak berkomunikasi dengan situs jarak jauh selama beberapa bulan.';
$string['error7024'] = 'Anda mengirim pesan tidak terenkripsi ke situs jarak jauh, tetapi situs jarak jauh tidak menerima komunikasi tidak terenkripsi dari situs Anda. Ini sangat tidak terduga; Anda mungkin harus mengajukan awakutu jika ini terjadi (memberikan informasi sebanyak mungkin tentang versi aplikasi yang dimaksud, dll).';
$string['error7026'] = 'Kunci yang digunakan untuk menandatangani pesan Anda berbeda dari kunci yang dimiliki host jarak jauh di file untuk server Anda. Selanjutnya, host jarak jauh mencoba mengambil kunci Anda saat ini dan gagal melakukannya. Harap masukkan ulang secara manual dengan host jarak jauh dan coba lagi.';
$string['error709'] = 'Situs jarak jauh gagal mendapatkan kunci SSL dari Anda.';
$string['eventaccesscontrolcreated'] = 'Kontrol akses dibuat';
$string['eventaccesscontrolupdated'] = 'Kontrol akses diperbarui';
$string['expired'] = 'Kunci ini kedaluwarsa pada';
$string['expires'] = 'Berlaku hingga';
$string['expireyourkey'] = 'Hapus kunci ini';
$string['expireyourkeyexplain'] = 'Moodle secara otomatis merotasi kunci Anda setiap 28 hari (secara bawaan) tetapi Anda memiliki opsi untuk <em>secara manual</em> kedaluwarsa kunci ini kapan saja. Ini hanya akan berguna jika Anda yakin kunci ini telah disusupi. Pengganti akan segera dibuat secara otomatis.<br />Menghapus kunci ini akan membuat aplikasi lain tidak dapat berkomunikasi dengan Anda, hingga Anda menghubungi setiap administrator secara manual dan memberikan kunci baru Anda kepada mereka.';
$string['exportfields'] = 'Ruas untuk diekspor';
$string['failedaclwrite'] = 'Gagal menulis ke daftar kontrol akses MNet untuk pengguna \'{$a}\'.';
$string['findlogin'] = 'Temukan log masuk';
$string['forbidden-function'] = 'Fungsi itu belum diaktifkan untuk RPC.';
$string['forbidden-transport'] = 'Metode transportasi yang Anda coba gunakan tidak diizinkan.';
$string['forcesavechanges'] = 'Paksa simpan perubahan';
$string['helpnetworksettings'] = 'Konfigurasikan komunikasi MNet';
$string['hidelocal'] = 'Sembunyikan pengguna lokal';
$string['hideremote'] = 'Sembunyikan pengguna jarak jauh';
$string['host'] = 'hos';
$string['hostcoursenotfound'] = 'Hos atau kursus tidak ditemukan';
$string['hostdeleted'] = 'Hos dihapus';
$string['hostexists'] = 'Catatan sudah ada untuk hos dengan nama hos tersebut (dapat dihapus). <a href="{$a}">klik di sini</a> untuk mengedit rekaman itu.';
$string['hostlist'] = 'Daftar hos jaringan';
$string['hostname'] = 'Nama hos';
$string['hostnamehelp'] = 'Nama domain yang sepenuhnya memenuhi syarat dari host jarak jauh, mis. www.example.com';
$string['hostnotconfiguredforsso'] = 'Server ini tidak dikonfigurasi untuk login jarak jauh.';
$string['hostsettings'] = 'Setelan hos';
$string['http_self_signed_help'] = 'Izinkan koneksi menggunakan sertifikat SSL DIY yang ditandatangani sendiri di host jarak jauh.';
$string['http_verified_help'] = 'Izinkan koneksi menggunakan sertifikat SSL terverifikasi di PHP pada host jarak jauh, tetapi melalui http (bukan https).';
$string['https_self_signed_help'] = 'Izinkan koneksi menggunakan SSL DIY yang ditandatangani sendiri di PHP pada host jarak jauh melalui http.';
$string['https_verified_help'] = 'Izinkan koneksi menggunakan sertifikat SSL terverifikasi pada host jarak jauh.';
$string['id'] = 'ID';
$string['idhelp'] = 'Nilai ini ditetapkan secara otomatis dan tidak dapat diubah';
$string['importfields'] = 'Ruas untuk diimpor';
$string['inspect'] = 'Inspeksi';
$string['installnosuchfunction'] = 'Kesalahan pengkodean! Sesuatu mencoba menginstal fungsi mnet xmlrpc ({$a->method}) dari berkas ({$a->file}) dan tidak dapat ditemukan!';
$string['installnosuchmethod'] = 'Kesalahan pengkodean! Sesuatu sedang mencoba menginstal metode mnet xmlrpc ({$a->method}) di kelas ({$a->class}) dan tidak dapat ditemukan!';
$string['installreflectionclasserror'] = 'Kesalahan pengkodean! Introspeksi MNet gagal untuk metode \'{$a->method}\' di kelas \'{$a->class}\'. Pesan kesalahan asli, jika membantu, adalah: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Kesalahan pengkodean! Introspeksi MNet gagal untuk fungsi \'{$a->method}\' di berkas \'{$a->file}\'. Pesan kesalahan asli, jika membantu, adalah: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Parameter akses tidak valid.';
$string['invalidactionparam'] = 'Parameter akses tidak valid.';
$string['invalidhost'] = 'Anda harus memberikan pengidentifikasi hos yang valid';
$string['invalidpubkey'] = 'Kuncinya bukan kunci SSL yang valid. ({$a})';
$string['invalidurl'] = 'Parameter URL tidak valid.';
$string['ipaddress'] = 'Alamat IP';
$string['is_in_range'] = 'Alamat IP <code>{$a}</code> mewakili hos tepercaya yang valid.';
$string['ispublished'] = '{$a} telah mengaktifkan layanan ini untuk Anda.';
$string['issubscribed'] = '{$a} berlangganan layanan ini di hos Anda.';
$string['keydeleted'] = 'Kunci Anda telah berhasil dihapus dan diganti.';
$string['keymismatch'] = 'Kunci publik yang Anda pegang untuk hos ini berbeda dengan kunci publik yang saat ini diterbitkan. Kunci yang saat ini diterbitkan adalah:';
$string['last_connect_time'] = 'Waktu koneksi terakhir';
$string['last_connect_time_help'] = 'Waktu terakhir Anda terhubung ke hos ini.';
$string['last_transport_help'] = 'Transportasi yang Anda gunakan untuk koneksi terakhir ke hos ini.';
$string['leavedefault'] = 'Gunakan setelan bawaan sebagai gantinya';
$string['listservices'] = 'Daftar layanan';
$string['loginlinkmnetuser'] = '<br />Jika Anda adalah pengguna jarak jauh MNet dan dapat <a href="{$a}">mengkonfirmasi alamat surel Anda di sini</a>, Anda dapat diarahkan ke halaman masuk Anda.<br />';
$string['logs'] = 'log';
$string['managemnetpeers'] = 'Kelola rekan-rekan';
$string['method'] = 'Metode';
$string['methodhelp'] = 'Bantuan metode untuk {$a}';
$string['methodsavailableonhost'] = 'Metode yang tersedia di {$a}';
$string['methodsavailableonhostinservice'] = 'Metode yang tersedia untuk {$a->service} di {$a->host}';
$string['methodsignature'] = 'Tanda tangan metode untuk {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Gabungkan (hingga) 3 string dan kembalikan hasilnya';
$string['mnet_session_prohibited'] = 'Pengguna dari server rumah Anda saat ini tidak diizinkan untuk menjelajah ke {$a}.';
$string['mnetdisabled'] = 'MNet <strong>dinonaktifkan</strong>.';
$string['mnetidprovider'] = 'Penyedia ID MNet';
$string['mnetidproviderdesc'] = 'Anda dapat menggunakan fasilitas ini untuk mengambil tautan yang dapat Anda gunakan untuk masuk, jika Anda dapat memberikan alamat email yang benar agar sesuai dengan nama pengguna yang Anda coba masuki sebelumnya.';
$string['mnetidprovidermsg'] = 'Anda seharusnya bisa login di penyedia {$a} Anda.';
$string['mnetidprovidernotfound'] = 'Maaf, tetapi tidak ada informasi lebih lanjut yang dapat ditemukan.';
$string['mnetpeers'] = 'Rekan';
$string['mnetservices'] = 'Layanan';
$string['mnetsettings'] = 'Setelan MNet';
$string['moodle_home_help'] = 'Jalur ke beranda aplikasi MNet di hos jarak jauh, mis. /mood/.';
$string['name'] = 'Nama';
$string['net'] = 'Jaringan';
$string['networksettings'] = 'Setelan jaringan';
$string['never'] = 'Tidak pernah';
$string['noaclentries'] = 'Tidak ada entri dalam daftar kontrol akses SSO';
$string['noaddressforhost'] = 'Maaf, tetapi nama hos itu ({$a}) tidak dapat diselesaikan!';
$string['nocurl'] = 'Pustaka cURL PHP tidak diinstal';
$string['nolocaluser'] = 'Tidak ada rekaman lokal untuk pengguna jarak jauh, dan tidak dapat dibuat, karena hos ini tidak akan membuat pengguna secara otomatis. Silakan hubungi administrator Anda!';
$string['nomodifyacl'] = 'Anda tidak diizinkan untuk mengubah daftar kontrol akses MNet.';
$string['nonmatchingcert'] = 'Subjek sertifikat: <br /><em>{$a->subject}</em><br />tidak cocok dengan hos asalnya:<br /><em>{$a->host }</em>';
$string['nopubkey'] = 'Terjadi masalah saat mengambil kunci publik.<br />Mungkin hos tidak mengizinkan MNet atau kuncinya tidak valid.';
$string['nosite'] = 'Tidak dapat menemukan kursus tingkat situs';
$string['nosuchfile'] = 'Berkas/fungsi {$a} tidak ada.';
$string['nosuchfunction'] = 'Tidak dapat menemukan fungsi, atau fungsi yang dilarang untuk RPC.';
$string['nosuchmodule'] = 'Fungsi tersebut salah ditangani dan tidak dapat ditemukan. Silakan gunakan format mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Tidak dapat memperoleh kunci publik untuk verifikasi tanda tangan.';
$string['nosuchservice'] = 'Layanan RPC tidak berjalan di hos ini.';
$string['nosuchtransport'] = 'Tidak ada transportasi dengan ID itu.';
$string['notBASE64'] = 'String ini tidak dalam format yang disandikan base64. Itu tidak bisa menjadi kunci yang valid.';
$string['notPEM'] = 'Kunci ini tidak dalam format PEM. Itu tidak akan bekerja.';
$string['not_in_range'] = 'Alamat IP <code>{$a}</code> tidak mewakili hos tepercaya yang valid.';
$string['notenoughidpinfo'] = 'Penyedia identitas Anda tidak memberi kami informasi yang cukup untuk membuat atau memperbarui akun Anda secara lokal. Maaf!';
$string['notinxmlrpcserver'] = 'Mencoba mengakses klien jarak jauh MNet, bukan selama eksekusi server XMLRPC';
$string['notmoodleapplication'] = 'PERINGATAN: Ini bukan aplikasi Moodle, jadi beberapa metode pemeriksaan mungkin tidak bekerja dengan benar.';
$string['notpermittedtojump'] = 'Anda tidak memiliki izin untuk memulai sesi jarak jauh dari server Moodle ini.';
$string['notpermittedtojumpas'] = 'Anda tidak dapat memulai sesi jarak jauh saat Anda masuk sebagai pengguna lain.';
$string['notpermittedtoland'] = 'Anda tidak memiliki izin untuk memulai sesi jarak jauh.';
$string['off'] = 'Padam';
$string['on'] = 'Menyala';
$string['options'] = 'Opsi';
$string['peerprofilefielddesc'] = 'Di sini Anda dapat mengganti setelan global untuk ruas profil mana yang akan dikirim dan diimpor saat pengguna baru dibuat';
$string['permittedtransports'] = 'Transportasi yang diizinkan';
$string['phperror'] = 'Kesalahan internal PHP mencegah permintaan Anda terpenuhi.';
$string['position'] = 'Posisi';
$string['postrequired'] = 'Fungsi hapus memerlukan permintaan POST.';
$string['privacy:metadata'] = 'Pengaya MNet tidak menyimpan data pribadi apa pun.';
$string['profileexportfields'] = 'Ruas untuk dikirim';
$string['profilefielddesc'] = 'Di sini Anda dapat mengonfigurasi daftar ruas profil yang dikirim dan diterima melalui MNet saat akun pengguna dibuat, atau diperbarui. Anda juga dapat mengganti ini untuk setiap rekan MNet satu per satu. Perhatikan bahwa ruas berikut selalu dikirim dan bukan opsional: {$a}';
$string['profilefields'] = 'Ruas profil';
$string['profileimportfields'] = 'Ruas untuk diimpor';
$string['promiscuous'] = 'Kacau';
$string['publickey'] = 'Kunci publik';
$string['publickey_help'] = 'Kunci publik secara otomatis diperoleh dari server jauh.';
$string['publickeyrequired'] = 'Anda harus memberikan kunci publik.';
$string['publish'] = 'Terbitkan';
$string['reallydeleteserver'] = 'Anda yakin ingin menghapus server?';
$string['receivedwarnings'] = 'Peringatan berikut diterima:';
$string['recordnoexists'] = 'Rekaman tidak ada.';
$string['reenableserver'] = 'Tidak - pilih opsi ini untuk mengaktifkan kembali server ini.';
$string['registerallhosts'] = 'Daftarkan semua hos (mode promiscuous)';
$string['registerallhostsexplain'] = 'Anda dapat memilih untuk mendaftarkan semua hos yang mencoba terhubung dengan Anda secara otomatis. Ini berarti bahwa rekaman akan muncul di daftar hos Anda untuk situs MNet mana pun yang terhubung dengan Anda dan meminta kunci publik Anda.<br /> Anda memiliki opsi di bawah ini untuk mengonfigurasi layanan untuk \'Semua hos\' dan dengan mengaktifkan beberapa layanan di sana, Anda dapat memberikan layanan ke server jarak jauh mana pun tanpa pandang bulu.';
$string['registerhostsoff'] = 'Daftar semua hos saat ini <b>padam</b>';
$string['registerhostson'] = 'Daftarkan semua hos saat ini <b>menyala</b>';
$string['remotecourses'] = 'Kursus jarak jauh';
$string['remotehost'] = 'Hos jarak jauh';
$string['remotehosts'] = 'Hos jarak jauh';
$string['remoteuser'] = 'Pengguna {$a->remotetype} jarak jauh';
$string['remoteuserinfo'] = 'Profil diambil dari <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Jaringan memerlukan ekstensi OpenSSL';
$string['restore'] = 'Pulihkan';
$string['returnvalue'] = 'Nilai kembali';
$string['reviewhostdetails'] = 'Tinjau detail hos';
$string['reviewhostservices'] = 'Tinjau layanan hos';
$string['selectaccesslevel'] = 'Silakan pilih tingkat akses dari daftar.';
$string['selectahost'] = 'Silakan pilih hos jarak jauh.';
$string['service'] = 'Nama layanan';
$string['serviceid'] = 'ID layanan';
$string['servicesavailableonhost'] = 'Layanan tersedia di {$a}';
$string['serviceswepublish'] = 'Layanan yang kami publikasikan ke {$a}.';
$string['serviceswesubscribeto'] = 'Layanan di {$a} yang kami langgani.';
$string['settings'] = 'Setelan';
$string['showlocal'] = 'Tampilkan pengguna lokal';
$string['showremote'] = 'Tampilkan pengguna jarak jauh';
$string['ssl_acl_allow'] = 'SSO ACL: Izinkan pengguna \'{$a->user}\' dari \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Tolak pengguna \'{$a->user}\' dari \'{$a->host}\'';
$string['sslverification'] = 'Verifikasi SSL';
$string['sslverification_help'] = 'Opsi ini memungkinkan Anda untuk mengonfigurasi tingkat keamanan saat menghubungkan ke rekan menggunakan HTTPS.

* Tidak ada: tidak ada tingkat keamanan
* Verifikasi host saja: memvalidasi domain sertifikat SSL
* Verifikasi host dan rekan (disarankan): memvalidasi domain dan penerbit sertifikat SSL';
$string['ssoaccesscontrol'] = 'Kontrol akses SSO';
$string['ssoacldescr'] = 'Gunakan halaman ini untuk memberikan/menolak akses ke pengguna tertentu dari host MNet jarak jauh. Ini berfungsi saat Anda menawarkan layanan SSO kepada pengguna jarak jauh. Untuk mengontrol kemampuan pengguna <em>lokal</em> Anda untuk menjelajah ke host MNet lainnya, gunakan sistem peran untuk memberi mereka kemampuan <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Agar fungsi ini berfungsi, Anda harus mengaktifkan Jaringan, ditambah pengaya autentikasi MNet yang diaktifkan.';
$string['strict'] = 'Ketat';
$string['subscribe'] = 'Langganan';
$string['system'] = 'Sistem';
$string['testclient'] = 'Klien uji MNet';
$string['testtrustedhosts'] = 'Uji alamat';
$string['testtrustedhostsexplain'] = 'Masukkan alamat IP untuk melihat apakah itu host tepercaya.';
$string['theypublish'] = 'Mereka menerbitkan';
$string['theysubscribe'] = 'Mereka berlangganan';
$string['transport_help'] = 'Opsi ini bersifat timbal balik, jadi Anda hanya dapat memaksa hos jarak jauh untuk menggunakan sertifikat SSL yang ditandatangani jika server Anda juga memiliki sertifikat SSL yang ditandatangani.';
$string['trustedhosts'] = 'Hos XML-RPC';
$string['trustedhostsexplain'] = '<p>Mekanisme host tepercaya memungkinkan mesin tertentu untuk mengeksekusi panggilan melalui XML-RPC ke bagian mana pun dari API Moodle. Ini tersedia untuk skrip untuk mengontrol perilaku Moodle dan bisa menjadi opsi yang sangat berbahaya untuk diaktifkan. Jika ragu, tutup saja.</p>
<p><strong>Ini tidak diperlukan untuk fitur MNet standar apa pun!</strong> Aktifkan hanya jika Anda tahu apa yang Anda lakukan.</p> <p>Untuk mengaktifkannya, masukkan daftar alamat IP atau jaringan, satu di setiap baris. Beberapa contoh:</p>
Hos lokal Anda:<br />127.0.0.1<br />Hos lokal Anda (dengan blok jaringan):<br />127.0.0.1/32<br />Hanya host dengan alamat IP 192.168.0.7:<br />192.168.0.7/32<br /> Setiap host dengan alamat IP antara 192.168.0.1 dan 192.168.0.255:<br />192.168.0.0/24<br />Host apa pun:<br />192.168.0.0/0<br />Jelas contoh terakhir adalah <strong>bukan</strong> konfigurasi yang disarankan.';
$string['turnitoff'] = 'Matikan';
$string['turniton'] = 'Nyalakan';
$string['type'] = 'Tipe';
$string['unknown'] = 'Tidak dikenal';
$string['unknownerror'] = 'Terjadi kesalahan yang tidak diketahui selama negosiasi.';
$string['usercannotchangepassword'] = 'Anda tidak dapat mengubah kata sandi Anda di sini karena Anda adalah pengguna jarak jauh.';
$string['userchangepasswordlink'] = '<br /> Anda mungkin dapat mengubah sandi Anda di penyedia <a href="{$a->wwwroot}/login/change_password.php "> {$a->description} </a>.';
$string['usernotfullysetup'] = 'Akun pengguna Anda tidak lengkap. Anda harus <a href="{$a}">kembali ke penyedia Anda</a> dan memastikan profil Anda selesai di sana. Anda mungkin perlu keluar dan masuk lagi agar ini berlaku.';
$string['usersareonline'] = 'Peringatan: {$a} pengguna dari server itu saat ini masuk ke situs Anda.';
$string['validated_by'] = 'Ini divalidasi oleh jaringan: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Verifikasi hos dan rekan';
$string['verifyhostonly'] = 'Verifikasi hos saja';
$string['verifysignature-error'] = 'Verifikasi tanda tangan gagal. Sebuah kesalahan telah terjadi.';
$string['verifysignature-invalid'] = 'Verifikasi tanda tangan gagal. Tampaknya payload ini tidak ditandatangani oleh Anda.';
$string['version'] = 'Versi';
$string['warning'] = 'Peringatan';
$string['wrong-ip'] = 'Alamat IP Anda tidak cocok dengan alamat yang kami catat.';
$string['xmlrpc-missing'] = 'Anda harus menginstal XML-RPC di PHP build Anda untuk dapat menggunakan fitur ini.';
$string['yourhost'] = 'Hos Anda';
$string['yourpeers'] = 'Rekan Anda';
