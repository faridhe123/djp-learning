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
 * Strings for component 'block_completion_progress', language 'id', version '3.11'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Kode Warna HTML untuk elemen yang telah selesai';
$string['completed_colour_title'] = 'Warna selesai';
$string['completion_not_enabled'] = 'Pelacakan penyelesaian tidak diaktifkan di situs ini.';
$string['completion_not_enabled_course'] = 'Pelacakan penyelesaian tidak diaktifkan dalam kursus ini.';
$string['completion_progress:addinstance'] = 'Tambahkan blok Progres Penyelesaian baru';
$string['completion_progress:myaddinstance'] = 'Tambahkan blok Progres Penyelesaian ke halaman beranda saya';
$string['completion_progress:overview'] = 'Lihat ikhtisar kursus tentang Progres Penyelesaian untuk semua siswa';
$string['completion_progress:showbar'] = 'Tampilkan bilah di blok Progres Penyelesaian';
$string['config_activitiesincluded'] = 'Sertakan aktivitas';
$string['config_activitycompletion'] = 'Semua aktivitas dengan set penyelesaian';
$string['config_default_title'] = 'Progres Penyelesaian';
$string['config_group'] = 'Hanya terlihat oleh grup atau pengelompokan';
$string['config_header_monitored'] = 'Terpantau';
$string['config_icons'] = 'Gunakan ikon di bilah';
$string['config_longbars'] = 'Cara menyajikan bilah panjang';
$string['config_orderby'] = 'Urut bilah berdasarkan';
$string['config_orderby_course_order'] = 'Urutan dalam kursus';
$string['config_orderby_due_time'] = 'Waktu menggunakan tanggal "{$a}"';
$string['config_percentage'] = 'Tunjukkan persentase kepada siswa';
$string['config_scroll'] = 'Gulung';
$string['config_selectactivities'] = 'Pilih aktivitas';
$string['config_selectedactivities'] = 'Aktivitas terpilih';
$string['config_squeeze'] = 'Remas';
$string['config_title'] = 'Judul alternatif';
$string['config_wrap'] = 'Bungkus';
$string['coursenametoshow'] = 'Nama kursus yang ditampilkan di Dasbor';
$string['defaultlongbars'] = 'Presentasi bawaan untuk bilah panjang';
$string['forceiconsinbar'] = 'Paksa ikon di bilah progres';
$string['fullname'] = 'Nama lengkap kursus';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Kode warna HTML untuk elemen mendatang yang belum selesai';
$string['futureNotCompleted_colour_title'] = 'Warna untuk progres mendatang yang belum selesai';
$string['how_activitiesincluded_works'] = 'Bagaimana cara kerja aktivitas';
$string['how_activitiesincluded_works_help'] = '<p>Secara bawaan, semua aktivitas dengan setelan Penyelesaian aktivitas disertakan di bilah.</p><p>Anda juga dapat memilih aktivitas yang akan disertakan secara manual.</p>';
$string['how_group_works'] = 'Cara kerja grup yang terlihat';
$string['how_group_works_help'] = '<p>Memilih grup atau pengelompokan akan membatasi tampilan blok ini hanya untuk grup atau pengelompokan tersebut.</p>';
$string['how_longbars_works'] = 'Berapa panjang bilah yang disajikan';
$string['how_longbars_works_help'] = '<p>Bila bilah melebihi panjang yang ditetapkan, bagaimana bilah tersebut dapat disajikan dalam salah satu cara berikut.</p><ul><li>Dipadatkan menjadi satu batang horizontal</li><li>Menggulir ke samping untuk menampilkan bilah yang meluap segmen</li><li>Lipatkan untuk menampilkan semua segmen bilah pada beberapa baris</li></ul><p>Perhatikan bahwa ketika bilah dilipat, indikator SEKARANG tidak akan ditampilkan.</p>';
$string['how_ordering_works'] = 'Bagaimana pengurutan bekerja';
$string['how_ordering_works_help'] = '<p>Ada dua cara untuk mengurutkan aktivitas di blok Progres Penyelesaian.</p><ul><li><em>Waktu menggunakan tanggal "Perkirakan penyelesaian pada"</em> (default)<br />Waktu yang diharapkan tanggal penyelesaian aktivitas/sumber digunakan untuk mengurutkan bilah. Jika aktivitas/sumber tidak memiliki tanggal penyelesaian yang diharapkan, pengurutan dalam kursus digunakan sebagai gantinya. Saat opsi ini digunakan, indikator SEKARANG akan ditampilkan.</li><li><em>Pengurutan kursus</em><br />Aktivitas/sumber disajikan dalam urutan yang sama seperti di halaman kursus. Saat opsi ini digunakan, tanggal penyelesaian yang diharapkan akan diabaikan. Saat opsi ini digunakan, indikator SEKARANG tidak ditampilkan.</li></ul>';
$string['how_selectactivities_works'] = 'Bagaimana menyertakan aktivitas bekerja';
$string['how_selectactivities_works_help'] = '<p>Untuk memilih aktivitas yang akan disertakan di bilah secara manual, pastikan "Aktivitas yang disertakan" disetel ke "aktivitas yang dipilih".</p><p>Hanya aktivitas dengan setelan penyelesaian aktivitas yang dapat disertakan.</p> <p>Tahan tombol CTRL untuk memilih beberapa aktivitas.</p>';
$string['lastonline'] = 'Terakhir di kursus';
$string['mouse_over_prompt'] = 'Arahkan tetikus atau sentuh bilah untuk info.';
$string['no_activities_config_message'] = 'Tidak ada aktivitas atau sumber dengan set penyelesaian aktivitas atau tidak ada aktivitas atau sumber yang dipilih. Tetapkan penyelesaian aktivitas pada aktivitas dan sumber lalu konfigurasikan blok ini.';
$string['no_activities_message'] = 'Tidak ada aktivitas atau sumber yang dipantau. Gunakan konfigurasi untuk mengatur pemantauan.';
$string['no_blocks'] = 'Tidak ada blok Progres Penyelesaian yang disiapkan untuk kursus Anda.';
$string['no_courses'] = 'Anda tidak terdaftar dalam kursus apa pun. Hanya bilah dari kursus terdaftar yang akan ditampilkan.';
$string['no_visible_activities_message'] = 'Tak satu pun dari aktivitas yang dipantau saat ini terlihat.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Kode warna HTML untuk elemen saat ini yang belum selesai';
$string['notCompleted_colour_title'] = 'Warna belum selesai';
$string['not_all_expected_set'] = 'Tidak semua aktivitas dengan penyelesaian memiliki set tanggal "{$a}".';
$string['now_indicator'] = 'SEKARANG';
$string['overview'] = 'Ikhtisar kemajuan siswa';
$string['pluginname'] = 'Progres Penyelesaian';
$string['privacy:metadata'] = 'Blok Progres Penyelesaian hanya menampilkan data penyelesaian yang ada.';
$string['progress'] = 'Progres';
$string['progressbar'] = 'Progres Penyelesaian';
$string['selectitem'] = 'Pilih \'{$a}\'';
$string['shortname'] = 'Nama singkat kursus';
$string['showallinfo'] = 'Tampilkan semua info';
$string['showinactive'] = 'Tampilkan siswa yang tidak aktif di Ikhtisar';
$string['showlastincourse'] = 'Tampilkan waktu kursus terakhir siswa di Ikhtisar';
$string['submitted'] = 'Dikirim';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Kode warna HTML untuk elemen yang telah dikirimkan, tetapi belum lengkap';
$string['submittednotcomplete_colour_title'] = 'Warna telah dikirim namun belum lengkap';
$string['time_expected'] = 'Diharapkan';
$string['why_set_the_title'] = 'Mengapa Anda mungkin ingin menetapkan judul model blok?';
$string['why_set_the_title_help'] = '<p>Ada beberapa model blok Progres Penyelesaian. Anda dapat menggunakan blok Progres Penyelesaian yang berbeda untuk memantau rangkaian aktivitas atau sumber daya yang berbeda. Misalnya Anda dapat melacak kemajuan dalam tugas di satu blok dan kuis di blok lain. Untuk alasan ini, Anda dapat mengganti judul bawaan dan menetapkan judul blok yang lebih sesuai untuk setiap model.</p>';
$string['why_show_precentage'] = 'Mengapa menunjukkan persentase kemajuan kepada siswa?';
$string['why_show_precentage_help'] = '<p>Ada kemungkinan untuk menunjukkan persentase kemajuan keseluruhan kepada siswa.</p><p>Ini dihitung sebagai jumlah aktivitas yang diselesaikan dibagi dengan jumlah total aktivitas di bilah.</p><p> Persentase kemajuan muncul hingga siswa mengarahkan tetikus ke item di bilah.</p>';
$string['why_use_icons'] = 'Mengapa Anda ingin menggunakan ikon?';
$string['why_use_icons_help'] = '<p>Anda mungkin ingin menambahkan ikon centang dan tanda silang di Kemajuan Penyelesaian untuk membuat blok ini lebih dapat diakses secara visual oleh siswa yang buta warna.</p><p>Ini juga dapat membuat makna blok lebih jelas jika Anda yakin warna tidak intuitif, baik karena alasan budaya atau pribadi.</p>';
$string['wrapafter'] = 'Saat membungkus, batasi baris ke';
