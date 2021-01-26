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
    <li class="breadcrumb-item"><a href="">Mundo</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>

<form method="POST" action="cargarfichero.php" enctype="multipart/form-data">
<div class="form-group">
    <label class="btn btn-outline-info" for="my-file-selector">Subir archivo ZIP: 
      <input required="" type="file" name="zip_file" id="">
      <button class="btn btn-info" name="submit" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>                            
</div>
</form>

</br>
<?php
//comprobamos si se ha recibido el nombre del ZIP
if ($_FILES["zip_file"]["name"]) 
{
    //obtenemos datos de nuestro ZIP
    $nombre = $_FILES["zip_file"]["name"];
    $ruta = $_FILES["zip_file"]["tmp_name"];
    $tipo = $_FILES["zip_file"]["type"];
 
    // Función descomprimir ficheros en formato ZIP
//creamos un array para guardar el nombre de los archivos que contiene el ZIP
$nombresFichZIP = array();
$zip = new ZipArchive;
 
if ($zip->open($ruta) === TRUE)
{
   for($i = 0; $i < $zip->numFiles; $i++)
   {
	//obtenemos ruta que tendrán los documentos cuando los descomprimamos
	$nombresFichZIP['tmp_name'][$i] = 'almacen/'.$zip->getNameIndex($i);
	//obtenemos nombre del fichero
	$nombresFichZIP['name'][$i] = $zip->getNameIndex($i);
   }
 
   //descomprimimos zip
   $zip->extractTo('almacen/');
   $zip->close();

		
		// Visualizar contenido d ela carpeta
$directorio = opendir("almacen/"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo $archivo . "<br />";
    }
}
// Fin de mostrar ficheros de carpetas
echo '<br><ul class="list-group">';
echo'<li class="list-group-item">';
echo "Mundo cargado correctamente, reinicia el servidor";
echo'</li></ul>';
	}else {
 echo '<br><ul class="list-group">';
 echo'<li class="list-group-item">';
 echo "Ocurrió un error y el archivo no se pudo descomprimir y/o formato no es ZIP";
 echo'</li></ul>';
}

}
?>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
  </body>
</html>