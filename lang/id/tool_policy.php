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
 * Strings for component 'tool_policy', language 'id', version '3.11'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Saya mengakui bahwa saya telah menerima permintaan untuk memberikan persetujuan atas nama pengguna di atas.';
$string['acceptancenote'] = 'Catatan';
$string['acceptancepolicies'] = 'Kebijakan';
$string['acceptancessavedsucessfully'] = 'Perjanjian telah berhasil disimpan.';
$string['acceptancestatusaccepted'] = 'Disetujui';
$string['acceptancestatusacceptedbehalf'] = 'Diterima atas nama pengguna';
$string['acceptancestatusdeclined'] = 'Ditolak';
$string['acceptancestatusdeclinedbehalf'] = 'Ditolak atas nama pengguna';
$string['acceptancestatusoverall'] = 'Keseluruhan';
$string['acceptancestatuspartial'] = 'Diterima sebagian';
$string['acceptancestatuspending'] = 'Tertunda';
$string['acceptanceusers'] = 'Pengguna';
$string['actions'] = 'Aksi';
$string['activate'] = 'Setel status ke "Aktif"';
$string['activateconfirm'] = '<p>Anda akan mengaktifkan kebijakan <em>\'{$a->name}\'</em> dan menjadikan versi <em>\'{$a->revision}\'</em> yang sekarang.< /p><p>Semua pengguna akan diminta untuk menyetujui versi kebijakan baru ini agar dapat menggunakan situs.</p>';
$string['activateconfirmyes'] = 'Aktivasi';
$string['activating'] = 'Mengaktifkan kebijakan';
$string['agreepolicies'] = 'Harap setujui kebijakan berikut';
$string['backtoprevious'] = 'Kembali ke halaman sebelumnya';
$string['backtotop'] = 'Kembali ke atas';
$string['cachedef_policy_optional'] = 'Cache flag opsional/wajib untuk versi kebijakan';
$string['consentbulk'] = 'Izin';
$string['consentpagetitle'] = 'Izin';
$string['contactdpo'] = 'Untuk pertanyaan tentang kebijakan, silakan hubungi petugas privasi.';
$string['dataproc'] = 'Pemrosesan data pribadi';
$string['declineacknowledgement'] = 'Saya mengakui bahwa saya telah menerima permintaan untuk menolak persetujuan atas nama pengguna di atas.';
$string['declinethepolicy'] = 'Tolak persetujuan pengguna';
$string['deleteconfirm'] = '<p>Yakin ingin menghapus kebijakan <em>\'{$a->name}\'</em>?</p><p>Operasi ini tidak dapat diurungkan.</p>';
$string['deleting'] = 'Menghapus versi';
$string['editingpolicydocument'] = 'Menyunting kebijakan';
$string['errorpolicyversioncompulsory'] = 'Kebijakan wajib tidak dapat ditolak!';
$string['errorpolicyversionnotfound'] = 'Tidak ada versi kebijakan dengan pengenal ini.';
$string['errorsaveasdraft'] = 'Perubahan kecil tidak dapat disimpan sebagai draf';
$string['errorusercantviewpolicyversion'] = 'Pengguna tidak memiliki akses ke versi kebijakan ini.';
$string['event_acceptance_created'] = 'Perjanjian kebijakan pengguna dibuat';
$string['event_acceptance_updated'] = 'Perjanjian kebijakan pengguna diperbarui';
$string['filtercapabilityno'] = 'Izin: Tidak setuju';
$string['filtercapabilityyes'] = 'Izin: Bisa setuju';
$string['filterplaceholder'] = 'Cari kata kunci atau pilih filter';
$string['filterpolicy'] = 'Kebijakan: {$a}';
$string['filterrevision'] = 'Versi: {$a}';
$string['filterrevisionstatus'] = 'Versi: {$a->name} ({$a->status})';
$string['filterrole'] = 'Peran: {$a}';
$string['filters'] = 'Filter';
$string['filterstatusdeclined'] = 'Status: Ditolak';
$string['filterstatuspending'] = 'Status: Tertunda';
$string['filterstatusyes'] = 'Status: Disetujui';
$string['guestconsent:continue'] = 'Lanjutkan';
$string['guestconsentmessage'] = 'Jika Anda terus menjelajahi situs web ini, Anda menyetujui kebijakan kami:';
$string['iagree'] = 'Saya setuju dengan {$a}';
$string['iagreetothepolicy'] = 'Berikan persetujuan';
$string['idontagree'] = 'Tidak, terima kasih, saya menolak {$a}';
$string['inactivate'] = 'Setel status ke "Nonaktifkan"';
$string['inactivating'] = 'Menonaktifkan kebijakan';
$string['inactivatingconfirm'] = '<p>Anda akan menonaktifkan kebijakan <em>\'{$a->name}\'</em> versi <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Nonaktifkan';
$string['invalidversionid'] = 'Tidak ada kebijakan dengan pengenal ini!';
$string['irevokethepolicy'] = 'Tarik persetujuan pengguna';
$string['listactivepolicies'] = 'Daftar kebijakan aktif';
$string['managepolicies'] = 'Kelola kebijakan';
$string['minorchange'] = 'Perubahan minor';
$string['minorchangeinfo'] = 'Perubahan kecil tidak mengubah arti kebijakan. Pengguna tidak diharuskan untuk menyetujui kebijakan lagi jika hasil edit ditandai sebagai perubahan kecil.';
$string['movedown'] = 'Turunkan';
$string['moveup'] = 'Naikkan';
$string['mustagreetocontinue'] = 'Sebelum melanjutkan, Anda harus menyetujui semua kebijakan ini.';
$string['newpolicy'] = 'Kebijakan baru';
$string['newversion'] = 'Versi baru';
$string['noactivepolicies'] = 'Tidak ada kebijakan dengan versi aktif.';
$string['nofiltersapplied'] = 'Tidak ada filter yang diterapkan';
$string['nopermissiontoagreedocs'] = 'Tidak ada izin untuk menyetujui kebijakan';
$string['nopermissiontoagreedocs_desc'] = 'Maaf, Anda tidak memiliki izin yang diperlukan untuk menyetujui kebijakan.<br />Anda tidak akan dapat menggunakan situs ini sampai kebijakan berikut disetujui:';
$string['nopermissiontoagreedocsbehalf'] = 'Tidak ada izin untuk menyetujui kebijakan atas nama pengguna ini';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Maaf, Anda tidak memiliki izin yang diperlukan untuk menyetujui kebijakan berikut atas nama {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Untuk bantuan lebih lanjut, silakan hubungi';
$string['nopermissiontoviewpolicyversion'] = 'Anda tidak memiliki izin untuk melihat versi kebijakan ini.';
$string['nopolicies'] = 'Tidak ada kebijakan untuk pengguna terdaftar dengan versi aktif.';
$string['pluginname'] = 'Kebijakan';
$string['policiesagreements'] = 'Kebijakan dan kesepakatan';
$string['policy:accept'] = 'Setuju dengan kebijakan';
$string['policy:acceptbehalf'] = 'Memberikan persetujuan untuk kebijakan atas nama orang lain';
$string['policy:managedocs'] = 'Kelola kebijakan';
$string['policy:viewacceptances'] = 'Lihat laporan perjanjian pengguna';
$string['policydocaudience'] = 'Persetujuan pengguna';
$string['policydocaudience0'] = 'Semua pengguna';
$string['policydocaudience1'] = 'Pengguna terautentikasi';
$string['policydocaudience2'] = 'Tamu';
$string['policydoccontent'] = 'Kebijakan penuh';
$string['policydochdrpolicy'] = 'Kebijakan';
$string['policydochdrversion'] = 'Versi dokumen';
$string['policydocname'] = 'Nama';
$string['policydocoptional'] = 'Persetujuan opsional';
$string['policydocoptionalno'] = 'Wajib';
$string['policydocoptionalyes'] = 'Opsional';
$string['policydocrevision'] = 'Versi';
$string['policydocsummary'] = 'Ringkasan';
$string['policydocsummary_help'] = 'Teks ini harus memberikan ringkasan kebijakan, kemungkinan dalam bentuk yang disederhanakan dan mudah diakses, menggunakan bahasa yang jelas dan sederhana.';
$string['policydoctype'] = 'Jenis';
$string['policydoctype0'] = 'Kebijakan situs';
$string['policydoctype1'] = 'Kebijakan privasi';
$string['policydoctype2'] = 'Kebijakan pihak ketiga';
$string['policydoctype99'] = 'Kebijakan lainnya';
$string['policydocuments'] = 'Dokumen kebijakan';
$string['policynamedversion'] = 'Kebijakan {$a->name} (versi {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Tampilkan kebijakan sebelum menampilkan kebijakan lain';
$string['policyversionacceptedinbehalf'] = 'Persetujuan untuk kebijakan ini telah diberikan atas nama Anda.';
$string['policyversionacceptedinotherlang'] = 'Persetujuan untuk versi kebijakan ini telah diberikan dalam bahasa yang berbeda.';
$string['previousversions'] = '{$a} versi sebelumnya';
$string['privacy:metadata:acceptances'] = 'Informasi tentang perjanjian kebijakan yang dibuat oleh pengguna.';
$string['privacy:metadata:acceptances:lang'] = 'Bahasa yang digunakan untuk menampilkan kebijakan saat persetujuan diberikan.';
$string['privacy:metadata:acceptances:note'] = 'Setiap komentar yang ditambahkan oleh pengguna saat memberikan persetujuan atas nama pengguna lain.';
$string['privacy:metadata:acceptances:policyversionid'] = 'Versi kebijakan yang persetujuannya diberikan.';
$string['privacy:metadata:acceptances:status'] = 'Status perjanjian.';
$string['privacy:metadata:acceptances:timecreated'] = 'Waktu ketika pengguna menyetujui kebijakan.';
$string['privacy:metadata:acceptances:timemodified'] = 'Waktu ketika pengguna memperbarui perjanjian mereka.';
$string['privacy:metadata:acceptances:userid'] = 'Pengguna yang terkait dengan perjanjian kebijakan ini.';
$string['privacy:metadata:acceptances:usermodified'] = 'Pengguna yang memberikan persetujuan atas kebijakan tersebut, jika dibuat atas nama pengguna lain.';
$string['privacy:metadata:subsystem:corefiles'] = 'Alat kebijakan menyimpan berkas yang disertakan dalam ringkasan dan kebijakan lengkap.';
$string['privacy:metadata:versions'] = 'Informasi versi kebijakan.';
$string['privacy:metadata:versions:archived'] = 'Status kebijakan (aktif atau tidak aktif).';
$string['privacy:metadata:versions:audience'] = 'Jenis pengguna yang diperlukan untuk memberikan persetujuan mereka.';
$string['privacy:metadata:versions:content'] = 'Konten versi kebijakan ini.';
$string['privacy:metadata:versions:contentformat'] = 'Format ruas konten.';
$string['privacy:metadata:versions:name'] = 'Nama kebijakan.';
$string['privacy:metadata:versions:policyid'] = 'Kebijakan yang terkait dengan versi ini.';
$string['privacy:metadata:versions:revision'] = 'Nama revisi versi kebijakan ini.';
$string['privacy:metadata:versions:summary'] = 'Ringkasan versi kebijakan ini.';
$string['privacy:metadata:versions:summaryformat'] = 'Format ruas ringkasan.';
$string['privacy:metadata:versions:timecreated'] = 'Waktu versi kebijakan ini dibuat.';
$string['privacy:metadata:versions:timemodified'] = 'Waktu versi kebijakan ini diperbarui.';
$string['privacy:metadata:versions:type'] = 'Jenis kebijakan.';
$string['privacy:metadata:versions:usermodified'] = 'Pengguna yang mengubah kebijakan.';
$string['privacysettings'] = 'Setelan Privasi';
$string['readpolicy'] = 'Harap baca {$a} kami';
$string['refertofullpolicytext'] = 'Silakan merujuk ke {$a} lengkap jika Anda ingin meninjau teks.';
$string['response'] = 'Tanggapan';
$string['responseby'] = 'Responden';
$string['responseon'] = 'Tanggal';
$string['revokeacknowledgement'] = 'Saya mengakui bahwa saya telah menerima permintaan untuk menarik persetujuan atas nama pengguna di atas.';
$string['save'] = 'Simpan';
$string['saveasdraft'] = 'Simpan sebagai konsep';
$string['selectpolicyandversion'] = 'Gunakan filter di atas untuk memilih kebijakan dan/atau versi';
$string['selectuser'] = 'Pilih pengguna {$a}';
$string['selectusersforconsent'] = 'Pilih pengguna untuk memberikan persetujuan atas nama.';
$string['settodraft'] = 'Buat draf baru';
$string['status'] = 'Status kebijakan';
$string['status0'] = 'Draf';
$string['status1'] = 'Aktif';
$string['status2'] = 'Tidak aktif';
$string['statusformtitleaccept'] = 'Menerima kebijakan';
$string['statusformtitledecline'] = 'Menolak kebijakan';
$string['statusformtitlerevoke'] = 'Kebijakan penarikan';
$string['statusinfo'] = 'Kebijakan dengan status \'Aktif\' mengharuskan pengguna untuk memberikan persetujuan mereka, baik saat pertama kali masuk, atau dalam kasus pengguna yang sudah ada saat mereka masuk berikutnya.';
$string['steppolicies'] = 'Kebijakan {$a->numpolicy} dari {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = 'Setuju';
$string['useracceptanceactionacceptone'] = 'Setujui';
$string['useracceptanceactionacceptpending'] = 'Terima kebijakan yang tertunda';
$string['useracceptanceactiondecline'] = 'Menolak';
$string['useracceptanceactiondeclineone'] = 'Tolak {$a}';
$string['useracceptanceactiondeclinepending'] = 'Tolak kebijakan yang tertunda';
$string['useracceptanceactiondetails'] = 'Detail';
$string['useracceptanceactionrevoke'] = 'Penarikan';
$string['useracceptanceactionrevokeall'] = 'Tarik kebijakan yang diterima';
$string['useracceptanceactionrevokeone'] = 'Tarik penerimaan {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} dari {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Persetujuan pengguna';
$string['userpolicysettings'] = 'Kebijakan';
$string['usersaccepted'] = 'Persetujuan';
$string['viewarchived'] = 'Lihat versi sebelumnya';
$string['viewconsentpageforuser'] = 'Melihat halaman ini atas nama {$a}';
