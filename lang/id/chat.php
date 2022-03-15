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
 * Strings for component 'chat', language 'id', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Anda masih dalam percakapan';
$string['ajax'] = 'Versi menggunakan AJAX';
$string['autoscroll'] = 'Gulir otomatis';
$string['beep'] = 'Beep';
$string['bubble'] = 'Gelembung';
$string['cantlogin'] = 'Tidak dapat login ke dalam ruang ngobrol!!';
$string['chat:addinstance'] = 'Tambah percakapan baru';
$string['chat:chat'] = 'Mengakses ruang ngobrol';
$string['chat:deletelog'] = 'Hapus rekaman obrolan';
$string['chat:exportparticipatedsession'] = 'Ekspor sesi obrolan yang Anda ikuti';
$string['chat:exportsession'] = 'Ekspor setiap sesi obrolan';
$string['chat:readlog'] = 'Baca log obrolan';
$string['chat:talk'] = 'Ikut mengobrol';
$string['chat:view'] = 'Lihat aktivitas percakana';
$string['chatintro'] = 'Deskripsi';
$string['chatname'] = 'Nama ruang ngobrol ini';
$string['chatreport'] = 'Sesi obrolan';
$string['chattime'] = 'Waktu ngobrol berikutnya';
$string['compact'] = 'Ringkas';
$string['composemessage'] = 'Menulis sebuah pesan';
$string['configmethod'] = 'Metode obrolan AJAX menyediakan antarmuka obrolan berbasis AJAX yang menghubungi server secara teratur untuk pembaruan. Metode obrolan normal melibatkan klien yang secara teratur menghubungi server untuk pembaruan. Itu tidak memerlukan konfigurasi dan berfungsi di mana-mana, tetapi dapat membuat beban besar di server jika banyak pengguna mengobrol. Menggunakan daemon server memerlukan akses shell ke Unix, tetapi menghasilkan lingkungan obrolan yang dapat diskalakan dengan cepat.';
$string['confignormalupdatemode'] = 'Pembaruan ruang obrol biasanya dilayani secara efisien menggunakan fitur <em>Keep-Alive </em> HTTP 1.1, tetapi ini masih cukup berat bagi server. Sebuah metode yang lebih canggih adalah dengan menggunakan strategi <em>Stream</em> untuk mengirimkan pembaruan ke pengguna. Menggunakan <em>Streaming</em> jauh lebih baik (mirip dengan metode chatd) tetapi mungkin tidak didukung oleh server Anda.';
$string['configoldping'] = 'Berapa waktu maksimum yang dibolehkan sebelum kita mendeteksi bahwa seorang pengguna telah terputus (dalam detik)? Ini hanya sebuah batas atas, karena biasanya ini terdeteksi sangat cepat. Nilai yang lebih rendah akan lebih menuntut pada server Anda. Jika Anda menggunakan metode normal, <strong>jangan</strong> set ini lebih rendah dari 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Seberapa sering seharusnya ruang obrol diperbarui? (dalam detik). Pengaturan rendah ini akan membuat ruang chatting tampak lebih cepat, tetapi dapat menempatkan beban yang lebih tinggi pada server web Anda ketika banyak orang yang mengobrol. Jika Anda menggunakan pembaruan <em>Streaming</em>, Anda dapat memilih frekuensi yang lebih tinggi - coba dengan 2.';
$string['configrefreshuserlist'] = 'Seberapa sering daftar pengguna akan direfresh? (dalam detik)';
$string['configserverhost'] = 'Nama host dari komputer dimana daemon server berada';
$string['configserverip'] = 'Alamat IP numerik yang sesuai nama host di atas';
$string['configservermax'] = 'Jumlah maksimum klien yang diperbolehkan';
$string['configserverport'] = 'Port untuk digunakan server untuk daemon';
$string['coursetheme'] = 'Tema kursus';
$string['crontask'] = 'Pemrosesan latar belakang untuk modul obrolan';
$string['currentchats'] = 'Sesi obrolan aktif';
$string['currentusers'] = 'Pengguna saat ini';
$string['deletesession'] = 'Hapus sesi ini';
$string['deletesessionsure'] = 'Apakah Anda yakin ingin menghapus sesi ini?';
$string['donotusechattime'] = 'Jangan publikasikan waktu obrolan';
$string['enterchat'] = 'Klik di sini untuk masuk obrolan sekarang';
$string['entermessage'] = 'Tulis pesan Anda';
$string['errornousers'] = 'Tidak dapat menemukan satu pun pengguna.';
$string['eventmessagesent'] = 'Pesan terkirim';
$string['eventsessionsviewed'] = 'Sesi yang dilihat';
$string['explaingeneralconfig'] = 'Pengaturan ini <strong>selalu</strong> digunakan';
$string['explainmethoddaemon'] = 'Setelan ini hanya berpengaruh jika \'Daemon server obrolan\' dipilih sebagai metode obrolan.';
$string['explainmethodnormal'] = 'Setelan ini hanya berpengaruh jika Normal dipilih sebagai metode obrolan.';
$string['generalconfig'] = 'Konfigurasi umum';
$string['idle'] = 'Diam';
$string['indicator:cognitivedepth'] = 'Obrolan kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai siswa dalam suatu kegiatan mengobrol.';
$string['indicator:cognitivedepthdef'] = 'Obrolan kognitif';
$string['indicator:cognitivedepthdef_help'] = 'Peserta telah mencapai persentase keterlibatan kognitif yang ditawarkan oleh aktivitas Obrolan selama interval analisis ini (Tingkat = Tidak ada tampilan, Lihat, Kirim, Lihat umpan balik, Komentari umpan balik)';
$string['indicator:socialbreadth'] = 'Obrolan sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada keluasan sosial yang dicapai siswa dalam suatu kegiatan obrolan.';
$string['indicator:socialbreadthdef'] = 'Obrolan sosial';
$string['indicator:socialbreadthdef_help'] = 'Peserta telah mencapai persentase keterlibatan sosial yang ditawarkan oleh aktivitas Obrolan selama interval analisis ini (Level = Tidak ada partisipasi, Peserta sendiri, Peserta dengan orang lain)';
$string['inputarea'] = 'Area masukan';
$string['invalidid'] = 'Tidak dapat menemukan ruang chat!';
$string['list_all_sessions'] = 'Daftar seluruh sesi.';
$string['list_complete_sessions'] = 'Daftar hanya sesi yang telah selesai.';
$string['listing_all_sessions'] = 'Daftar seluruh sesi.';
$string['messagebeepseveryone'] = '{$a} beep semua!';
$string['messagebeepsyou'] = '{$a} baru saja membeep Anda!';
$string['messageenter'] = '{$a} baru saja memasuki obrolan ini';
$string['messageexit'] = '{$a} telah meninggalkan obrolan ini';
$string['messages'] = 'Pesan';
$string['messageyoubeep'] = 'Anda membeep {$a}';
$string['method'] = 'Metode obrolan';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Daemon Chat Server';
$string['methodnormal'] = 'Normal';
$string['modulename'] = 'Obrolan';
$string['modulename_help'] = 'Modul aktivitas obrolan memungkinkan peserta untuk melakukan diskusi sinkron sewaktu berbasis teks.

Obrolan mungkin merupakan aktivitas satu kali atau dapat diulang pada waktu yang sama setiap hari atau setiap minggu. Sesi obrolan disimpan dan dapat tersedia bagi semua orang untuk dilihat atau dibatasi untuk pengguna dengan kemampuan untuk melihat log sesi obrolan.

Obrolan sangat berguna ketika obrolan grup tidak dapat bertemu tatap muka, seperti

* Pertemuan reguler siswa yang berpartisipasi dalam kursus daring untuk memungkinkan mereka berbagi pengalaman dengan orang lain dalam kursus yang sama tetapi di lokasi yang berbeda
* Seorang siswa sementara tidak dapat hadir secara langsung mengobrol dengan guru mereka untuk mengejar pekerjaan
* Siswa keluar pada pengalaman kerja berkumpul untuk mendiskusikan pengalaman mereka satu sama lain dan guru mereka
* Anak-anak yang lebih kecil menggunakan obrolan di rumah di malam hari sebagai pengenalan (dimonitor) dunia jejaring sosial
* Sesi tanya jawab dengan pembicara yang diundang di lokasi yang berbeda
* Sesi untuk membantu siswa mempersiapkan ujian di mana guru, atau siswa lain, akan mengajukan pertanyaan contoh';
$string['modulenameplural'] = 'Obrolan';
$string['neverdeletemessages'] = 'Jangan pernah menghapus pesan';
$string['nextchattime'] = 'Waktu obrolan berikutnya:';
$string['nextsession'] = 'Sesi terjadwal selanjutnya';
$string['no_complete_sessions_found'] = 'Tidak ditemukan sesi yang telah selesai';
$string['nochat'] = 'Tidak ditemukan obrolan';
$string['noguests'] = 'Obrolan tidak terbuka untuk tamu';
$string['nomessages'] = 'Tidak ada pesan';
$string['nopermissiontoseethechatlog'] = 'Anda tidak memiliki izin untuk melihat log obrolan';
$string['normalkeepalive'] = 'Keep Alive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Tidak ada sesi terjadwal';
$string['notallowenter'] = 'Anda tidak diperbolehkan memasuki ruang obrolan.';
$string['notlogged'] = 'Anda belum login!';
$string['oldping'] = 'Putus batas waktu';
$string['page-mod-chat-x'] = 'Setiap halaman modul obrolan';
$string['pastchats'] = 'Sesi obrolan lalu';
$string['pluginadministration'] = 'Administrasi obrolan';
$string['pluginname'] = 'Obrolan';
$string['privacy:metadata:chat_messages_current'] = 'Sesi obrolan saat ini. Data ini bersifat sementara dan dihapus setelah sesi obrolan dihapus';
$string['privacy:metadata:chat_users'] = 'Melacak pengguna mana yang berada di ruang obrolan mana';
$string['privacy:metadata:chat_users:firstping'] = 'Waktu akses pertama ke ruang obrolan';
$string['privacy:metadata:chat_users:ip'] = 'IP pengguna';
$string['privacy:metadata:chat_users:lang'] = 'Bahasa pengguna';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Waktu pesan terakhir di ruang obrolan ini';
$string['privacy:metadata:chat_users:lastping'] = 'Waktu akses terakhir ke ruang obrolan';
$string['privacy:metadata:chat_users:userid'] = 'ID pengguna';
$string['privacy:metadata:chat_users:version'] = 'Bagaimana pengguna mengakses obrolan (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Rekaman pesan yang dikirim selama sesi obrolan';
$string['privacy:metadata:messages:issystem'] = 'Apakah pesan tersebut adalah pesan yang dihasilkan sistem';
$string['privacy:metadata:messages:message'] = 'Pesan';
$string['privacy:metadata:messages:timestamp'] = 'Waktu saat pesan dikirim.';
$string['privacy:metadata:messages:userid'] = 'ID pengguna penulis pesan';
$string['refreshroom'] = 'Perbarui ruangan';
$string['refreshuserlist'] = 'Perbarui daftar pengguna';
$string['removemessages'] = 'Hapus semua pesan';
$string['repeatdaily'] = 'Pada waktu yang sama setiap hari';
$string['repeatnone'] = 'Tidak berulang - hanya publikasikan pada waktu yang ditentukan';
$string['repeattimes'] = 'Ulangi/terbitkan waktu sesi';
$string['repeatweekly'] = 'Pada waktu yang sama setiap minggu';
$string['saidto'] = 'Dikatakan ke';
$string['savemessages'] = 'Simpan sesi sebelumnya';
$string['search:activity'] = 'Percakapan - informasi aktivitas';
$string['seesession'] = 'Lihat sesi';
$string['send'] = 'Kirim';
$string['sending'] = 'Mengirimkan';
$string['serverhost'] = 'Nama server';
$string['serverip'] = 'IP server';
$string['servermax'] = 'Maksimal pengguna';
$string['serverport'] = 'Port server';
$string['sessions'] = 'Sesi percakapan';
$string['sessionstart'] = 'Sesi obrolan berikutnya akan dimulai pada {$a->date}, ({$a->fromnow} dari sekarang)';
$string['sessionstartsin'] = 'Sesi obrolan berikutnya akan dimulai {$a} dari sekarang.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Semua pengguna dapat melihat sesi sebelumnya';
$string['studentseereports_help'] = 'Jika pilihan Tidak, hanya pengguna yang memiliki mod/chat:readlog dengan statusnya tersedia yang bisa melihat rekaman percakapan';
$string['talk'] = 'Cakap';
$string['updatemethod'] = 'Ubah metode';
$string['updaterate'] = 'Ubah rating:';
$string['userlist'] = 'Dapat pengguna';
$string['usingchat'] = 'Menggunakan fitur percakapan';
$string['usingchat_help'] = 'Modul obrolan berisi beberapa fitur untuk membuat obrolan sedikit lebih menyenangkan. * Smilies - Setiap wajah smiley (emotikon) yang dapat Anda ketik di tempat lain di Moodle juga dapat diketik di sini, misalnya :-) * Tautan - Alamat situs web akan diubah menjadi tautan secara otomatis * Emoting - Anda dapat memulai baris dengan "/ saya " atau ":" untuk mengeluarkan, misalnya jika nama Anda Kim dan Anda mengetik ":laughs!" atau "/aku tertawa!" maka semua orang akan melihat "Kim tertawa!" * Bip - Anda dapat mengirim suara ke peserta lain dengan mengklik tautan "bip" di sebelah nama mereka. Cara pintas yang berguna untuk membunyikan \'bip\' semua orang dalam obrolan sekaligus adalah dengan mengetik "bip semua". * HTML - Jika Anda mengetahui beberapa kode HTML, Anda dapat menggunakannya dalam teks untuk melakukan hal-hal seperti menyisipkan gambar, memutar suara, atau membuat teks berwarna berbeda';
$string['viewreport'] = 'Lihat sesi percakapan sebelumnya';
