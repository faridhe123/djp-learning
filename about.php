<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('admin');
$PAGE->set_title("About DJP Learning");
$PAGE->set_heading("DJP Learning");
$PAGE->set_url($CFG->wwwroot.'/blank_page.php');

echo $OUTPUT->header();
echo "
    <ul>
        <li>
            <span> <b> Pengertian Learning Management System (LMS) secara umum adalah
            perangkat lunak yang dirancang untuk membuat, mendistribusikan, 
            dan mengatur penyampaian materi pembelajaran. </b></span>
        </li>
        <li>____________________________</li>
        <li>
            <span> Moodle adalah kepanjangan dari Modular Object Oriented Dynamic
            Learning Environment merupakan software e-learning berbasis
            website yang dapat digunakan untuk keperluan belajar mengajar
            dengan prinsip social construction pedagogy.</span>
        </li>
    <ul>
";
echo $OUTPUT->footer();
?>
