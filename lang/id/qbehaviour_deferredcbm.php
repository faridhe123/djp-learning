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
 * Strings for component 'qbehaviour_deferredcbm', language 'id', version '3.11'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Akurasi';
$string['accuracyandbonus'] = 'Akurasi + Bonus';
$string['assumingcertainty'] = 'Anda tidak memilih kepastian. Dengan asumsi: {$a}.';
$string['averagecbmmark'] = 'poin CBM rata-rata';
$string['basemark'] = 'Poin dasar {$a}';
$string['breakdownbycertainty'] = 'Hancur dengan pasti';
$string['cbmbonus'] = 'Bonus CBM';
$string['cbmgradeexplanation'] = 'Untuk CBM, nilai di atas ditampilkan relatif terhadap maksimum untuk semua benar pada C=1.';
$string['cbmgrades'] = 'Nilai CBM';
$string['cbmgrades_help'] = 'Dengan Penandaan Berbasis Kepastian (CBM) mendapatkan setiap pertanyaan benar dengan C=1 (kepastian rendah) memberikan nilai 100%. Nilai mungkin setinggi 300% jika setiap pertanyaan benar dengan C=3 (kepastian tinggi). Kesalahpahaman (tanggapan yang salah percaya diri) nilai lebih rendah lebih dari tanggapan salah yang diakui tidak pasti. Ini bahkan dapat menyebabkan nilai keseluruhan negatif.

**Akurasi** adalah % kepastian pengabaian yang benar tetapi berbobot untuk nilai maksimum setiap pertanyaan. Berhasil membedakan tanggapan yang lebih dan kurang dapat diandalkan memberikan nilai yang lebih baik daripada memilih kepastian yang sama untuk setiap pertanyaan. Hal ini tercermin dalam **Bonus CBM**. **Akurasi** + **Bonus CBM** adalah ukuran pengetahuan yang lebih baik daripada **Akurasi**. Kesalahpahaman dapat menyebabkan bonus negatif, peringatan untuk melihat dengan cermat apa yang diketahui dan tidak diketahui.';
$string['cbmmark'] = 'Poin CBM {$a}';
$string['certainty'] = 'Kepastian';
$string['certainty-1'] = 'Tidak ada ide';
$string['certainty1'] = 'C=1 (Tidak yakin: <67%)';
$string['certainty2'] = 'C=2 (Pertengahan: >67%)';
$string['certainty3'] = 'C=3 (Cukup yakin: >80%)';
$string['certainty_help'] = 'Penilaian berbasis kepastian mengharuskan Anda untuk menunjukkan seberapa andal menurut Anda jawaban Anda. Level yang tersedia adalah:

Tingkat kepastian | C=1 (Tidak yakin) | C=2 (Pertengahan) | C=3 (Cukup yakin)
------------------- | ------------ | --------- | ----------------
Tandai jika benar | 1 | 2 | 3
Tandai jika salah | 0 | -2 | -6
Probabilitas benar | <67% | 67-80% | >80%

Nilai terbaik diperoleh dengan mengakui ketidakpastian. Misalnya, jika menurut Anda ada lebih dari 1 dalam 3 kemungkinan salah, Anda harus memasukkan C=1 dan menghindari risiko nilai negatif.';
$string['certaintyshort-1'] = 'Tidak ada ide';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Tidak ada ide';
$string['foransweredquestions'] = 'Hasil hanya untuk {$a} pertanyaan yang dijawab';
$string['forentirequiz'] = 'Hasil untuk seluruh kuis ({$a} pertanyaan)';
$string['howcertainareyou'] = 'Kepastian {$a->help}: {$a->choices}';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Tanggapan: {$a->tanggapan}. Akurasi: {$a->fraksi}. (Rentang optimal {$a->idealrangelow} hingga {$a->idealrangehigh}). Anda {$a->judgement} menggunakan tingkat kepastian ini.';
$string['noquestions'] = 'Tidak ada tanggapan';
$string['overconfident'] = 'terlalu percaya diri';
$string['pluginname'] = 'Umpan balik yang ditangguhkan dengan CBM';
$string['privacy:metadata'] = 'Pengaya umpan balik yang ditangguhkan dengan perilaku soal CBM tidak menyimpan data pribadi apa pun.';
$string['slightlyoverconfident'] = 'sedikit terlalu percaya diri';
$string['slightlyunderconfident'] = 'agak kurang percaya diri';
$string['underconfident'] = 'kurang percaya diri';
$string['weightx'] = 'Bobot {$a}';
