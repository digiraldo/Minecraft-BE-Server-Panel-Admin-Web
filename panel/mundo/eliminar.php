<?php
// Usamos el comando "unlink" para borrar el fichero
shell_exec('sudo chmod -R 775 username:www-data dirname/minecraftbe/servername');
$getname = $_GET["name"];
unlink($getname);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"])
//echo $getname;
//header('Location: ../../'.$getname);
?>