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
 * Strings for component 'media_videojs', language 'id', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Class CSS untuk audio';
$string['audioextensions'] = 'Ekstensi berkas audio';
$string['configaudiocssclass'] = 'Kelas CSS yang akan ditambahkan ke elemen &lt;audio&gt;.';
$string['configaudioextensions'] = 'Daftar ekstensi file audio yang didukung yang dipisahkan koma. VideoJS akan mencoba menggunakan pemutar video asli peramban jika tersedia atau fungsi VideoJS asli, dan kembali ke pemutar Flash untuk format lain jika Flash didukung oleh peramban dan penggantian Flash diaktifkan di bawah.';
$string['configlimitsize'] = 'Jika diaktifkan, dan lebar dan tinggi tidak ditentukan, video akan ditampilkan dengan lebar dan tinggi bawaan. Kalau tidak, itu akan meregang ke lebar maksimum yang mungkin.';
$string['configrtmp'] = 'Jika diaktifkan, tautan yang dimulai dengan rtmp:// akan ditangani oleh pengaya, terlepas dari apakah ekstensi diaktifkan di setelan Ekstensi berkas video (ekstensi video). Penggantian flash harus diaktifkan agar RTMP berfungsi.';
$string['configuseflash'] = 'Gunakan Flash player jika format video tidak didukung secara native oleh peramban dan/atau native oleh VideoJS player. Jika diaktifkan, VideoJS akan digunakan untuk ekstensi berkas apa pun dari daftar di atas tanpa pemeriksaan peramban. Harap perhatikan bahwa Flash tidak tersedia di peramban seluler dan tidak disarankan di banyak peramban desktop.';
$string['configvideocssclass'] = 'Class CSS yang akan ditambahkan ke elemen <video>. Misalnya, class CSS "vjs-big-play-center" akan menempatkan tombol putar di tengah. Untuk detailnya, termasuk cara menyetel skin khusus, lihat docs.videojs.com.';
$string['configvideoextensions'] = 'Daftar ekstensi file video yang didukung yang dipisahkan koma. VideoJS akan mencoba menggunakan pemutar video asli peramban jika tersedia, dan beralih kembali ke pemutar Flash untuk format lain jika Flash didukung oleh peramban dan penggantian Flash diaktifkan di bawah.';
$string['configyoutube'] = 'Gunakan VideoJS untuk memutar video YouTube. Perhatikan bahwa daftar putar YouTube belum didukung oleh VideoJS.';
$string['limitsize'] = 'Batasi ukuran';
$string['pluginname'] = 'Pemutar VideoJS';
$string['pluginname_help'] = 'Pembungkus JavaScript untuk berkas video yang diputar oleh pemutar video asli peramban dengan cadangan pemutar Flash. (Dukungan format tergantung pada peramban.)';
$string['privacy:metadata'] = 'Pengaya media pemutar VideoJS tidak menyimpan data pribadi apa pun.';
$string['rtmp'] = 'aliran RTMP';
$string['useflash'] = 'Gunakan penggantian Flash';
$string['videocssclass'] = 'Class CSS untuk video';
$string['videoextensions'] = 'Ekstensi berkas video';
$string['youtube'] = 'Video Youtube';
