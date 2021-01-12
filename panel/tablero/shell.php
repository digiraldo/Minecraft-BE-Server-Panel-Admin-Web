<?php

$txtDetener=(isset($_POST['detener']))?$_POST['detener']:"";
$txtIniciar=(isset($_POST['iniciar']))?$_POST['iniciar']:"";
$txtReiniciar=(isset($_POST['reiniciar']))?$_POST['reiniciar']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

// marcar datos obligatorios en el Modal

$error=array();


switch ($accion) {

  // Agregar Nombre sel Servidor
  case 'btnDetener':
    shell_exec("sudo systemctl stop servername");
  break;

  case 'btnIniciar':
    shell_exec("sudo systemctl start servername");
  break;

  case 'btnReiniciar':
    shell_exec("sudo systemctl restart servername");
  break;

}
?>