<?php

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="";
    $active_admin="";
    $active_mundo="active";
    $active_backups="";
    $active_propiedades="";
    $active_logs="";
    $title="Minecraft SRV | Simple Invoice";

    require '../propiedades/editar.php';
    $jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
    $data = json_decode($jsonString, true);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mundo</title>
    <?php include "../includes/scripts.php" ?>

  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="index.php">Mundo</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>


<?php

if (isset($_POST['zip_file']))
{

      $nombre = $_POST['zip_file'];
      $ruta = $_POST['zip_file'];
      $tipo = 'zip'; 

      shell_exec("sudo zip -r dirname/minecraftbe/servername/backups/$(date +%d.%m.%Y_%H\:%M\:%S_Wo_servername).zip dirname/minecraftbe/servername/worlds");

      $rut = "../../servername/backups/"."$nombre";
      $name = explode("../../servername/backups/", $nombre);
      $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
      foreach ($accepted_types as $mime_type) {
        if ($mime_type == $tipo) {
            $okay = true;
            break;
        }
    }

    /* Ruta actual de PHP */
    $pathz = dirname(__FILE__) . '../../servername/';
    $path = dirname(__FILE__) . '../../servername/backups/';  // ruta absoluta al directorio donde se encuentra zipper.php
    $filenoext = basename($nombre, '../../servername/backups/.zip');   // ruta absoluta al directorio donde se encuentra zipper.php (minúsculas)
    $filenoext = basename($filenoext, '../../servername/backups/.ZIP');  // ruta absoluta al directorio donde se encuentra zipper.php (cuando está en mayúsculas)
    $targetdir = $pathz . $filenoext; // directorio de destino
    $targetzip = $pathz . $nombre; // archivo zip de destino
 

    //$carpeta = glob('../../servername/worlds'); //obtenemos todos los nombres de los ficheros
    $zip = new ZipArchive;
    if ($zip->open($rut) === TRUE){
      $cmdBorDir = "rm -R dirname/minecraftbe/servername/worlds/";
      shell_exec($cmdBorDir);
    // Función descomprimir ficheros en formato ZIP
    //creamos un array para guardar el nombre de los archivos que contiene el ZIP
        try {
            $zip->extractTo('../../servername/'); // colocar en el directorio con el mismo nombre
        } catch (Exception $e) {
            echo 'Algo salió mal aquí, tal vez nada esté descomprimido';
        }
        $zip->close();
        // desvincular ($ targetzip);
        echo "Su archivo .zip fue cargado y desempaquetado.";
    


 
   //descomprimimos zip
   //$zip->extractTo('../../servername/');
   //$zip->close();

		
		// Visualizar contenido d ela carpeta
$directorio = opendir("../../servername/"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
      echo $archivo . "<br />";
      //echo "Eliminados : <strong>". $ficherosEliminados ."</strong>" . "<br />";   
    }
}
// Fin de mostrar ficheros de carpetas
echo '<br><ul class="list-group">';
echo'<li class="list-group-item">';
echo "Mundo cargado correctamente, reinicia el servidor";
echo'</li></ul>';
$line = $lines[57];
$input = $txtSemilla . "\n";
// Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
$linetext = "level-seed=";
$output = "$linetext$input";
$newcontent = str_replace($line, $output, $content);
file_put_contents($myFile, $newcontent);

foreach ($data as $key) {
          $data[7]['data'] = '';
          $data[7]['spain'] = 'Restaurado';
          $data[7]['btn'] = '<i class="fas fa-undo-alt"></i>';
        }
$newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);
	}else {
 echo '<br><ul class="list-group">';
 echo'<li class="list-group-item">';
 echo "Ocurrió un error y el archivo no se pudo descomprimir y/o formato no es ZIP<br/>";
 echo $rut;
 echo'</li></ul>';
}

}



?>

<!-- Button trigger modal -->
<p>
<a type="button" class="btn btn-primary" href="index.php" data-target="#modalAdmin">
<i class="fas fa-globe"></i> Volver
</a>
</p>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
  </body>
</html>