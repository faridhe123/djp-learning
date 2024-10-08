<?php

require_once('../config.php');
global $CFG,$DB,$USER,$PAGE;

header('Content-Type: application/json');
$useridnumberparams   = optional_param('useridnumber', 0, PARAM_ALPHANUM);
$useridparams   = optional_param('userid', 0, PARAM_ALPHANUM);

if (empty($useridparams) && empty($useridnumberparams)) {
    http_response_code(404);
    echo json_encode([
        'message' => "Paramater tidak ditemukan: userid / useridnumber",
        'code' => 404
    ]);
    die();
}
//die();

$user = !empty($useridparams) ? $DB->get_record('user', array('id'=>$useridparams)) :
    $DB->get_record('user', array('idnumber'=>$useridnumberparams));

if(empty($user)) {
    http_response_code(404);
    echo json_encode([
        'message' => "User " .( !$useridparams ? 'id number: ' . $useridnumberparams : 'id: ' . $useridparams ). " not exists!",
        'code' => 404
    ]);
    die();
}

$session = $DB->get_record('sessions', array('userid'=>$user->id));
if(empty($session)) {
    http_response_code(400);
    echo json_encode([
        'message' => "User " . (!$useridparams ? 'id number: ' . $useridnumberparams : 'id: ' . $useridparams) . " already logout!",
        'code' => 400
    ]);
    die();
}

$DB->delete_records('sessions', array('userid'=>$user->id));
echo json_encode([
    'message' => "Sukses logout ". (!$useridparams ? 'id number: ' . $useridnumberparams : 'id: ' . $useridparams),
    'code' => 200
]);

?>