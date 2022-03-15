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
 * Strings for component 'tool_oauth2', language 'id', version '3.11'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconfirm'] = 'Tindakan ini akan memberikan akses API permanen ke Moodle untuk akun yang diautentikasi. Ini dimaksudkan untuk digunakan sebagai akun sistem untuk mengelola berkas yang dimiliki oleh Moodle.';
$string['authconnected'] = 'Akun sistem sekarang terhubung untuk akses luring';
$string['authnotconnected'] = 'Akun sistem tidak terhubung untuk akses luring';
$string['configured'] = 'Dikonfigurasi';
$string['configuredstatus'] = 'Dikonfigurasi';
$string['connectsystemaccount'] = 'Hubungkan ke akun sistem';
$string['createfromtemplate'] = 'Buat layanan OAuth 2 dari templat';
$string['createfromtemplatedesc'] = 'Pilih salah satu dari templat layanan OAuth 2 di bawah ini untuk membuat layanan OAuth dengan konfigurasi yang valid untuk salah satu jenis layanan yang dikenal. Ini akan membuat layanan OAuth 2, dengan semua titik akhir yang benar dan parameter yang diperlukan untuk autentikasi, meskipun Anda masih harus memasukkan ID klien dan rahasia untuk layanan baru sebelum dapat digunakan.';
$string['createnewendpoint'] = 'Buat titik akhir baru untuk penerbit "{$a}"';
$string['createnewfacebookissuer'] = 'Buat layanan Facebook baru';
$string['createnewgoogleissuer'] = 'Buat layanan Google baru';
$string['createnewissuer'] = 'Buat layanan Google baru';
$string['createnewmicrosoftissuer'] = 'Buat layanan Microsoft baru';
$string['createnewnextcloudissuer'] = 'Buat layanan Nextcloud baru';
$string['createnewservice'] = 'Buat layanan baru:';
$string['createnewuserfieldmapping'] = 'Buat pemetaan ruas pengguna baru untuk penerbit "{$a}"';
$string['custom_service'] = 'Kustom';
$string['deleteconfirm'] = 'Yakin ingin menghapus penerbit identitas "{$a}"? Pengaya apa pun yang mengandalkan penerbit ini akan berhenti berfungsi.';
$string['deleteendpointconfirm'] = 'Yakin ingin menghapus titik akhir "{$a->endpoint}" untuk penerbit "{$a->issuer}"? Pengaya apa pun yang mengandalkan titik akhir ini akan berhenti berfungsi.';
$string['deleteuserfieldmappingconfirm'] = 'Anda yakin ingin menghapus pemetaan ruas pengguna untuk penerbit "{$a}"?';
$string['discovered'] = 'Penemuan layanan berhasil';
$string['discovered_help'] = 'Penemuan berarti bahwa titik akhir OAuth 2 dapat ditentukan secara otomatis dari URL dasar untuk layanan OAuth. Tidak semua layanan harus "ditemukan", tetapi jika tidak, maka titik akhir dan informasi pemetaan pengguna perlu dimasukkan secara manual.';
$string['discoverystatus'] = 'Discovery';
$string['editendpoint'] = 'Edit endpoint: {$a->endpoint} untuk penerbit {$a->issuer}';
$string['editendpoints'] = 'Konfigurasikan titik akhir';
$string['editissuer'] = 'Edit penerbit identitas: {$a}';
$string['edituserfieldmapping'] = 'Edit pemetaan ruas pengguna untuk penerbit {$a}';
$string['edituserfieldmappings'] = 'Konfigurasikan pemetaan ruas pengguna';
$string['endpointdeleted'] = 'Titik akhir dihapus';
$string['endpointname'] = 'Nama';
$string['endpointname_help'] = 'Kunci yang digunakan untuk mencari titik akhir ini. Harus diakhiri dengan "_endpoint".';
$string['endpointsforissuer'] = 'Titik akhir untuk penerbit: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL untuk titik akhir ini. Harus menggunakan protokol https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Login domain';
$string['issueralloweddomains_help'] = 'Jika disetel, setelan ini adalah daftar domain yang dipisahkan koma yang akan dibatasi untuk masuk saat menggunakan penyedia ini.';
$string['issuerbaseurl'] = 'URL Layanan dasar';
$string['issuerbaseurl_help'] = 'URL dasar yang digunakan untuk mengakses layanan.';
$string['issuerclientid'] = 'ID Klien';
$string['issuerclientid_help'] = 'ID klien OAuth untuk penerbit ini.';
$string['issuerclientsecret'] = 'Klien rahasia';
$string['issuerclientsecret_help'] = 'Rahasia klien OAuth untuk penerbit ini.';
$string['issuerdeleted'] = 'Penerbit identitas dihapus';
$string['issuerdisabled'] = 'Penerbit identitas dinonaktifkan';
$string['issuerenabled'] = 'Penerbit identitas diaktifkan';
$string['issuerimage'] = 'URL logo';
$string['issuerimage_help'] = 'URL gambar yang digunakan untuk menampilkan logo penerbit ini. Dapat ditampilkan pada halaman masuk.';
$string['issuerloginpagename'] = 'Nama yang ditampilkan di halaman log masuk';
$string['issuerloginpagename_help'] = 'Jika ditentukan, nama ini akan digunakan pada halaman log masuk alih-alih nama layanan.';
$string['issuerloginparams'] = 'Parameter tambahan disertakan dalam permintaan log masuk.';
$string['issuerloginparams_help'] = 'Beberapa sistem memerlukan parameter tambahan untuk permintaan login agar dapat membaca profil dasar pengguna.';
$string['issuerloginparamsoffline'] = 'Parameter tambahan termasuk dalam permintaan login untuk akses luring.';
$string['issuerloginparamsoffline_help'] = 'Setiap sistem OAuth menentukan cara berbeda untuk meminta akses offline. Misalnya. Google memerlukan parameter tambahan: "access_type=offline&Prompt=consent". Parameter ini harus dalam format parameter kueri URL.';
$string['issuerloginscopes'] = 'Cakupan termasuk dalam permintaan log masuk.';
$string['issuerloginscopes_help'] = 'Beberapa sistem memerlukan cakupan tambahan untuk permintaan log masuk agar dapat membaca profil dasar pengguna. Cakupan standar untuk sistem yang sesuai dengan OpenID Connect adalah "surel profil openid".';
$string['issuerloginscopesoffline'] = 'Cakupan termasuk dalam permintaan log masuk untuk akses luring.';
$string['issuerloginscopesoffline_help'] = 'Setiap sistem OAuth menentukan cara berbeda untuk meminta akses luring. Misalnya. Microsoft memerlukan ruang lingkup tambahan "akses luring".';
$string['issuername'] = 'Nama';
$string['issuername_help'] = 'Nama penerbit identitas. Dapat ditampilkan pada halaman log masuk.';
$string['issuerrequireconfirmation'] = 'Wajib verifikasi surel';
$string['issuerrequireconfirmation_help'] = 'Mengharuskan semua pengguna memverifikasi alamat surel mereka sebelum mereka dapat masuk dengan OAuth. Ini berlaku untuk akun yang baru dibuat sebagai bagian dari proses log masuk, atau ketika akun Moodle yang ada terhubung ke log masuk OAuth melalui alamat surel yang cocok.';
$string['issuers'] = 'Penerbit';
$string['issuersetup'] = 'Petunjuk mendetail tentang mengonfigurasi layanan OAuth 2 umum';
$string['issuersetuptype'] = 'Petunjuk mendetail tentang menyiapkan {$a} penyedia OAuth 2';
$string['issuershowonloginpage'] = 'Tampilkan pada halaman log masuk';
$string['issuershowonloginpage_help'] = 'Jika pengaya autentikasi OAuth 2 diaktifkan, penerbit log masuk ini akan dicantumkan pada halaman masuk untuk memungkinkan pengguna masuk dengan akun dari penerbit ini.';
$string['issuersservicesallow'] = 'Izinkan layanan';
$string['issuersservicesnotallow'] = 'Jangan izinkan layanan';
$string['issuerusedforinternal'] = 'Layanan internel';
$string['issuerusedforlogin'] = 'Log masuk';
$string['issuerusein'] = 'Layanan ini akan digunakan';
$string['issuerusein_help'] = 'Layanan OAuth 2 dapat digunakan untuk layanan internal, pada halaman log masuk, atau keduanya, jika diperlukan.';
$string['issueruseineverywhere'] = 'Halaman log masuk dan layanan internal';
$string['issueruseininternalonly'] = 'Hanya layanan internal';
$string['issueruseinloginonly'] = 'Hanya halaman masuk';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Tampilan di halaman log masuk sebagai';
$string['loginissuer'] = 'Izinkan masuk';
$string['microsoft_service'] = 'Microsoft';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Tidak dikonfigurasi';
$string['notdiscovered'] = 'Penemuan layanan tidak berhasil';
$string['notloginissuer'] = 'Jangan izinkan masuk';
$string['pluginname'] = 'Layanan OAuth 2';
$string['privacy:metadata'] = 'Pengaya layanan OAuth 2 tidak menyimpan data pribadi apa pun.';
$string['savechanges'] = 'Simpan perubahan';
$string['serviceshelp'] = 'Petunjuk penyiapan penyedia layanan.';
$string['systemaccountconnected'] = 'Akun sistem terkoneksi';
$string['systemaccountconnected_help'] = 'Akun sistem digunakan untuk menyediakan fungsionalitas lanjutan untuk pengaya. Mereka tidak diperlukan untuk fungsi login saja, tetapi pengaya lain yang menggunakan layanan OAuth mungkin menawarkan serangkaian fitur yang dikurangi jika akun sistem belum terhubung. Misalnya repositori tidak dapat mendukung "tautan terkontrol" tanpa akun sistem untuk menjalankan berkas';
$string['systemaccountnotconnected'] = 'Akun sistem tidak terkoneksi';
$string['systemauthstatus'] = 'Akun sistem tidak terkoneksi';
$string['usebasicauth'] = 'Mengautentikasi permintaan token melalui header HTTP';
$string['usebasicauth_help'] = 'Memanfaatkan skema autentikasi HTTP dasar saat mengirim ID klien dan kata sandi dengan permintaan token penyegaran. Direkomendasikan oleh standar OAuth 2, tetapi mungkin tidak tersedia dengan beberapa penerbit.';
$string['userfieldexternalfield'] = 'Nama ruas eksternal';
$string['userfieldexternalfield_error'] = 'Ruas ini tidak boleh berisi HTML.';
$string['userfieldexternalfield_help'] = 'Nama ruas yang disediakan oleh sistem OAuth eksternal.';
$string['userfieldinternalfield'] = 'Nama ruas internal';
$string['userfieldinternalfield_help'] = 'Nama bidang pengguna Moodle yang harus dipetakan dari ruas eksternal.';
$string['userfieldmappingdeleted'] = 'Pemetaan ruas pengguna dihapus';
$string['userfieldmappingsforissuer'] = 'Pemetaan ruas pengguna untuk penerbit: {$a}';
