<?php
/*
$jsonString = file_get_contents(__DIR__ . '../../../config/tmp.json');
$data = json_decode($jsonString, true);

$data[0]['id'] = '';
$data[0]['usuario'] = '';
$data[0]['pais'] = '';
$data[0]['ciudad'] = '';
$data[0]['gamertag'] = '';
$data[0]['id_rol'] = '';
$data[0]['rol'] = '';
$data[0]['contacto'] = '';
$data[0]['img'] = '';

$newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
file_put_contents(__DIR__ . '../../../config/tmp.json', $newJsonString);
*/
unset($_POST);
unset($_REQUEST);
header('location: ../../index.php');

?>