<?php

require_once('../config.php');
global $CFG,$DB,$USER,$PAGE;

$useridnumber   = optional_param('useridnumber', 0, PARAM_ALPHANUM);
$userid   = optional_param('userid', 0, PARAM_ALPHANUM);
//$userid = $DB->get_record('user', array('idnumber' => $useridnumber))->id;

$params = array();
if (empty($userid) && empty($useridnumber)) {
    print_error('unspecifycourseid', 'error');
}

$user = !empty($userid) ? $DB->get_record('course', array('id'=>$userid), '*', MUST_EXIST)[0] :
    $DB->get_record('course', array('idnumber'=>$useridnumber), '*', MUST_EXIST)[0];
$DB->delete_records('sessions', array('userid'=>$userid->id));

echo "Session untuk user :".PHP_EOL;
echo "ID: ".$userid.PHP_EOL;
echo "ID Number: ".$useridnumber.PHP_EOL;
echo "Nama: ".$useridnumber.PHP_EOL;

?>