<?php
$txtCopia=(isset($_POST['copia']))?$_POST['copia']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

// marcar datos obligatorios en el Modal
$error=array();

switch ($accion) {

  // REalizar Copia de Serguridad
  case 'btnCopia':
    $txtCopia = shell_exec("sudo zip -r /home/usr/minecraftbe/Parce/backups/$(date +%d.%m.%Y_%H\:%M\:%S_servername).zip /home/usr/minecraftbe/Parce/worlds");
    $btnaccion = 'Servidor Reiniciado';
    
   // $txtReiniciar = shell_exec("sudo systemctl restart servername");
   break;

}

// Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "../../servername/backups/".$fichero["name"]);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>