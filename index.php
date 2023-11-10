<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: https://dougdragon.com');

$ipAddress = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$arr = array('ipAddress' => $ipAddress, 'hostname' => $hostname);
echo json_encode($arr)
?>
