<?php 


$jsonStringsrv = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$datasrv = json_decode($jsonStringsrv, true);
$IpSrv = $datasrv[12]['spain'];
$PortSrv = $datasrv[8]['spain'];

//echo $IpSrv;
//echo $PortSrv;


?>