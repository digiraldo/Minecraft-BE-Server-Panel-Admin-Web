<?php

$jsonString = file_get_contents(__DIR__ . '../../../servername/panelpro/srvdatos.json');
$data = json_decode($jsonString, true);

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

// marcar datos obligatorios en el Modal
$error=array();

switch ($accion) {

  // Agregar Nombre sel Servidor
  case 'btnDetener':
   $controlsrv = shell_exec("sudo systemctl stop servername");
   //$txtDetener = shell_exec("sudo systemctl stop servername");
  break;

  case 'btnIniciar':
   $controlsrv = shell_exec("sudo systemctl start servername");
   //$txtIniciar = shell_exec("sudo systemctl start servername");
  break;

  case 'btnReiniciar':
   $controlsrv = shell_exec('sudo sh res.sh');
   //$controlsrv = shell_exec("sudo sh res.sh");
  // $txtReiniciar = shell_exec("sudo systemctl restart servername");
  break;

}
?>