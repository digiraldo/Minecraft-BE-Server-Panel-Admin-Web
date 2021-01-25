<?php

// Obtener el contenido del archivo de texto como una matriz de líneas
//$myFile1 = '../../servername/srvdatos.txt';
//$lines1 = file($myFile1);

$jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$data = json_decode($jsonString, true);

$txtDetener=(isset($_POST['detener']))?$_POST['detener']:"";
$txtIniciar=(isset($_POST['iniciar']))?$_POST['iniciar']:"";
$txtReiniciar=(isset($_POST['reiniciar']))?$_POST['reiniciar']:"";
$txtCopia=(isset($_POST['copia']))?$_POST['copia']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

// marcar datos obligatorios en el Modal
$error=array();

switch ($accion) {

  // Agregar Nombre sel Servidor
  case 'btnDetener':
   $txtDetener = shell_exec("sudo systemctl stop servername");
   $btnaccion = 'Servidor Detenido';
  break;

  case 'btnIniciar':
   $txtIniciar = shell_exec("sudo systemctl start servername");
   $btnaccion = 'Servidor Iniciado';
  break;

  case 'btnReiniciar':
   $txtReiniciar = shell_exec("sudo sh res.sh");
   $btnaccion = 'Servidor Reiniciado';
  // $txtReiniciar = shell_exec("sudo systemctl restart servername");
  break;

  case 'btnCopia':
    $txtCopia = shell_exec("sudo zip -r /home/usr/minecraftbe/Parce/backups/$(date +%d.%m.%Y_%H\:%M\:%S_servername).zip /home/usr/minecraftbe/Parce/worlds");
    $btnaccion = 'Servidor Reiniciado';
    
   // $txtReiniciar = shell_exec("sudo systemctl restart servername");
   break;

}

?>