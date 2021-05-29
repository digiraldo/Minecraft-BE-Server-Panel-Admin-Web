<?php

/*
$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'php.ini Cargado: ' . $inipath."</br>";
} else {
   echo 'Archivo php.ini no Cargado'."</br>";
}
*/

//; Maximum allowed size for uploaded files.
//upload_max_filesize = 4000M

//; Must be greater than or equal to upload_max_filesize
//post_max_size = 4000M

// Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "../../servername/backups/".$fichero["name"]);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"]);

//echo "../../servername/backups/".$fichero["name"]."</br>";
//print_r($fichero);
?>