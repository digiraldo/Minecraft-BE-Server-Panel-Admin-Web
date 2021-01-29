<?php

if (isset($_POST['zip_file'])) {

    $filename = $_POST['zip_file'];
    $source = $_POST['zip_file'];
    $type = 'zip';

    $name = explode("../../servername/backups/", $filename);
    $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
    foreach ($accepted_types as $mime_type) {
        if ($mime_type == $type) {
            $okay = true;
            break;
        }
    }

    /* Ruta actual de PHP */
    $pathz = dirname(__FILE__) . '../../servername/';
    $path = dirname(__FILE__) . '../../servername/backups/';  // ruta absoluta al directorio donde se encuentra zipper.php
    $filenoext = basename($filename, '../../servername/backups/.zip');   // ruta absoluta al directorio donde se encuentra zipper.php (minúsculas)
    $filenoext = basename($filenoext, '../../servername/backups/.ZIP');  // ruta absoluta al directorio donde se encuentra zipper.php (cuando está en mayúsculas)
    $targetdir = $pathz . $filenoext; // directorio de destino
    $targetzip = $pathz . $filename; // archivo zip de destino
  
    /* crear directorio si no existe ', de lo contrario sobrescribir
    el directorio de destino es el mismo que el nombre del archivo sin extensión */
  
    if (is_dir($targetdir))
        rmdir_recursive($targetdir);
  
    mkdir($targetdir, 0777);
  
    /* aquí realmente está sucediendo */
    $zip = new ZipArchive();
    $x = $zip->open($targetzip);  // abre el archivo zip para extraer
    if ($x === true) {
        try {
            $zip->extractTo($targetdir); // colocar en el directorio con el mismo nombre
        } catch (Exception $e) {
            echo 'Algo salió mal aquí, tal vez nada esté descomprimido';
        }
        $zip->close();
        // desvincular ($ targetzip);
        echo "Su archivo .zip fue cargado y desempaquetado.";
    }
  }

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
echo '<title>Descomprime un archivo zip que ya está en el servidor web</title>';
echo '</head>';

echo '<body>';

echo '<h1>Descomprime un archivo que ya está en el servidor</h1>';
echo '<br/>Utilice su programa ftp favorito para subir archivos zip grandes al servidor.<br/>';
echo 'Ponlo en el mismo directorio que este archivo unzip.php, se recomienda crear un directorio "zipper".<br/>';
echo 'Después de cargar el archivo, seleccione el archivo aquí y haga clic en el botón descomprimir. Se descomprime en poco tiempo<br/>';

if ($message)
    echo '<p>$message</p>';

echo '<form method="post" action="">';
echo '<select name="zip_file">';

$dir = '../../servername/backups/';
$dh = opendir($dir);
while (false !== ($fn = readdir($dh))) {
    $ext = substr($fn, strrpos($fn, '.') + 1);
    if (in_array($ext, array("zip", "ZIP"))) {
        echo '<option value="' . $fn . '">' . $fn . '</option>';
    }
}
echo '</select>';
echo '<br /><br />';
echo '<input type="submit" name="submit" value="Unzip" />';
echo '</form>';
echo '</body>';
echo '</html>';

 

?>