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
 * Strings for component 'url', language 'id', version '3.11'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Pilih variabel...';
$string['clicktoopen'] = 'Klik tautan {$a} untuk membuka sumber.';
$string['configdisplayoptions'] = 'Pilih semua opsi yang seharusnya tersedia, setelan yang ada tidak diubah. Tahan tombol CTRL untuk memilih beberapa bidang.';
$string['configframesize'] = 'Saat halaman web atau berkas yang diunggah ditampilkan dalam bingkai, nilai ini adalah tinggi (dalam piksel) bingkai atas (yang berisi navigasi).';
$string['configrolesinparams'] = 'Aktifkan jika Anda ingin memasukkan nama peran yang dilokalkan dalam daftar variabel parameter yang tersedia.';
$string['configsecretphrase'] = 'Frase rahasia ini digunakan untuk menghasilkan nilai kode terenkripsi yang dapat dikirim ke beberapa server sebagai parameter. Kode terenkripsi dihasilkan oleh nilai md5 dari alamat IP pengguna saat ini yang digabungkan dengan frasa rahasia Anda. yaitu kode = md5(IP.secretphrase). Harap dicatat bahwa ini tidak dapat diandalkan karena alamat IP dapat berubah dan sering digunakan bersama oleh komputer yang berbeda.';
$string['contentheader'] = 'Konten';
$string['createurl'] = 'Buat URL';
$string['displayoptions'] = 'Opsi tampilan yang tersedia';
$string['displayselect'] = 'Tampilan';
$string['displayselect_help'] = 'Setelan ini, bersama dengan jenis berkas URL dan apakah peramban mengizinkan penyematan, menentukan cara URL ditampilkan. Opsi dapat mencakup:

* Otomatis - Opsi tampilan terbaik untuk URL dipilih secara otomatis
* Sematkan - URL ditampilkan dalam halaman di bawah bilah navigasi bersama dengan deskripsi URL dan blok apa pun
* Buka - Hanya URL yang ditampilkan di jendela peramban
* Dalam sembulan - URL ditampilkan di jendela peramban baru tanpa menu atau bilah alamat
* Dalam bingkai - URL ditampilkan dalam bingkai di bawah bilah navigasi dan deskripsi URL
* Jendela baru - URL ditampilkan di jendela peramban baru dengan menu dan bilah alamat';
$string['displayselectexplain'] = 'Pilih jenis tampilan, sayangnya tidak semua jenis cocok untuk semua URL.';
$string['externalurl'] = 'URL eksternal';
$string['framesize'] = 'Tinggi bingkai';
$string['indicator:cognitivedepth'] = 'URL kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai siswa dalam sumber URL.';
$string['indicator:cognitivedepthdef'] = 'URL kognitif';
$string['indicator:cognitivedepthdef_help'] = 'Peserta telah mencapai persentase keterlibatan kognitif yang ditawarkan oleh sumber URL selama interval analisis ini (Level = Tidak ada tampilan, Tampilan)';
$string['indicator:socialbreadth'] = 'URL sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada jangkauan sosial yang dicapai oleh siswa dalam sumber URL.';
$string['indicator:socialbreadthdef'] = 'URL sosial';
$string['indicator:socialbreadthdef_help'] = 'Peserta telah mencapai persentase keterlibatan sosial yang ditawarkan oleh sumber URL selama interval analisis ini (Tingkat = Tidak ada partisipasi, Peserta saja)';
$string['invalidstoredurl'] = 'Tidak dapat menampilkan sumber ini, URL tidak valid.';
$string['invalidurl'] = 'URL yang dimasukkan tidak valid';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Modul URL memungkinkan pengajar untuk menyediakan tautan web sebagai sumber kursus. Apa pun yang tersedia secara online secara gratis, seperti dokumen atau gambar, dapat ditautkan ke; URL tidak harus menjadi halaman beranda situs web. URL halaman web tertentu dapat disalin dan ditempel atau pengajar dapat menggunakan pemilih berkas dan memilih tautan dari repositori seperti Flickr, YouTube atau Wikimedia (tergantung pada repositori mana yang diaktifkan untuk situs tersebut).

Ada sejumlah opsi tampilan untuk URL, seperti tertanam atau membuka di jendela baru dan opsi lanjutan untuk meneruskan informasi, seperti nama siswa, ke URL jika diperlukan.

Perhatikan bahwa URL juga dapat ditambahkan ke sumber atau jenis aktivitas lainnya melalui editor teks.';
$string['modulenameplural'] = 'URLs';
$string['page-mod-url-x'] = 'Setiap halaman modul URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variabel URL';
$string['parametersheader_help'] = 'Bagian ini memungkinkan Anda meneruskan informasi internal sebagai bagian dari URL. Ini berguna jika URL adalah halaman web interaktif yang mengambil parameter, dan Anda ingin memberikan sesuatu seperti nama pengguna saat ini, misalnya. Masukkan nama parameter URL di kotak teks lalu pilih variabel situs yang sesuai.';
$string['pluginadministration'] = 'Administrasi modul URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Tinggi sembulan (dalam piksel)';
$string['popupheightexplain'] = 'Spesifik ketinggian baawaan jendela sembulan.';
$string['popupwidth'] = 'Lebar sembulan (dalam piksel)';
$string['popupwidthexplain'] = 'Spesifik lebar bawaan jendela sembulan.';
$string['printintro'] = 'Deskripsi URL tampilan';
$string['printintroexplain'] = 'Tampilkan deskripsi URL di bawah konten? Beberapa jenis tampilan mungkin tidak menampilkan deskripsi meskipun diaktifkan.';
$string['privacy:metadata'] = 'Pengaya sumber daya URL tidak menyimpan data pribadi apa pun.';
$string['rolesinparams'] = 'Sertakan nama peran dalam parameter';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL server';
$string['url:addinstance'] = 'Tambahkan sumber URL';
$string['url:view'] = 'Lihat URL';
