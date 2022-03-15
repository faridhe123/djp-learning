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
 * Strings for component 'portfolio_mahara', language 'id', version '3.11'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Aktifkan dukungan portofolio Leap2A (memerlukan Mahara 1.3 atau lebih tinggi)';
$string['err_invalidhost'] = 'Hos MNet hos';
$string['err_invalidhost_help'] = 'Pengaya ini salah dikonfigurasi untuk menunjuk ke hos MNet yang tidak valid (atau dihapus). Pengaya ini bergantung pada rekan-rekan Jaringan Moodle dengan SSO IDP diterbitkan, SSO_SP berlangganan, dan portofolio berlangganan <b>dan</b> diterbitkan.';
$string['err_networkingoff'] = 'MNet dipadamkan';
$string['err_networkingoff_help'] = 'Autentikasi MNet saat ini dinonaktifkan. Harap aktifkan sebelum mencoba mengkonfigurasi pengaya ini. Semua model pengaya ini telah disembunyikan sampai MNet diaktifkan. Mereka kemudian perlu diatur secara manual agar terlihat lagi.';
$string['err_nomnetauth'] = 'Pengaya autentikasi MNET dinonaktifkan';
$string['err_nomnetauth_help'] = 'Pengaya autentikasi MNet dinonaktifkan, tetapi diperlukan untuk layanan ini';
$string['err_nomnethosts'] = 'Mengandalkan MNet';
$string['err_nomnethosts_help'] = 'Pengaya ini mengandalkan rekan MNet dengan SSO IDP diterbitkan, SSO SP berlangganan, layanan portofolio diterbitkan <b> dan </b> berlangganan serta pengaya autentikasi MNet. Semua model pengaya ini telah disembunyikan sampai kondisi ini terpenuhi. Mereka kemudian akan membutuhkan setelan secara manual agar terlihat lagi.';
$string['failedtojump'] = 'Gagal memulai komunikasi dengan server jarak jauh';
$string['failedtoping'] = 'Gagal memulai komunikasi dengan server jauh: {$a}';
$string['mnet_nofile'] = 'Tidak dapat menemukan berkas dalam objek transfer - kesalahan aneh';
$string['mnet_nofilecontents'] = 'Berkas ditemukan di objek transfer, tetapi tidak bisa mendapatkan konten - kesalahan aneh: {$a}';
$string['mnet_noid'] = 'Tidak dapat menemukan catatan transfer yang cocok untuk token ini';
$string['mnet_notoken'] = 'Tidak dapat menemukan token yang cocok dengan transfer ini';
$string['mnet_wronghost'] = 'Hos jarak jauh tidak cocok dengan catatan transfer untuk token ini';
$string['mnethost'] = 'Hos MNet';
$string['pf_description'] = 'Izinkan pengguna untuk mendorong konten Moodle ke host ini<br />Berlangganan <b>dan</b> publikasikan layanan ini untuk memungkinkan pengguna yang diautentikasi di situs Anda untuk mendorong konten ke {$a}<br /> <ul><li><em>Ketergantungan</em>: Anda juga harus <strong>memublikasikan</strong> layanan SSO (Identifikasi Provider) ke {$a}.</li><li><em>Ketergantungan </em>: Anda juga harus <strong>berlangganan</strong> ke layanan SSO (Penyedia Layanan) di {$a}</li><li><em>Ketergantungan</em>: Anda juga harus mengaktifkan pengaya autentikasi MNet.</li></ul><br />';
$string['pf_name'] = 'Layanan portofolio';
$string['pluginname'] = 'ePortofolio Mahara';
$string['privacy:metadata'] = 'Pengaya ini mengirimkan data secara eksternal ke aplikasi Mahara yang terhubung. Itu tidak menyimpan data secara lokal.';
$string['privacy:metadata:data'] = 'Data pribadi melewati dari subsistem portofolio.';
$string['senddisallowed'] = 'Anda tidak dapat mentransfer berkas ke Mahara saat ini';
$string['url'] = 'URL';
