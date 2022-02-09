<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

    $active_tablero="";
    $active_allowlist="";
    $active_permisos="";
    $active_admin="";
    $active_mundo="active";
    $active_backups="";
    $active_propiedades="";
    $active_logs="";
    $title="Minecraft SRV | Simple Invoice";

    $jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
    $data = json_decode($jsonString, true);

    // Obtener el contenido del archivo de propiedades como una matriz de líneas
    $myFile = '../../servername/server.properties';
    $lines = file($myFile);
    // Obtener el contenido del archivo como cadena
    $content = file_get_contents($myFile);

    $directorio = '../../servername/worlds/';
    if (!file_exists($directorio)) {
      $ficheros  = '';
      $rutaw = 'Directorio no Encontrado';
      $subdirectorios = '';
    } else {
      $ficheros  = scandir($directorio);
      if (!empty($ficheros[2])) {
        $rutaw = ($ficheros[2]);
        $subdirectorios = scandir($directorio . $rutaw);
      }else {
        $rutaw = 'Directorio no Encontrado';
      }
    }

    // Obtener el contenido del archivo de propiedades como una matriz de líneas
    $myFiletxt = "../../servername/worlds/"."$rutaw"."/levelname.txt";
    $linestxt = file($myFiletxt);

    require '../tablero/info.php';

?>

<!doctype html>
<html lang="es">
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



<div class="card-body">
  <!-- Button trigger modal
  <a type="button" class="btn btn-primary" href="index.php" data-target="#modalAdmin">
    <i class="fas fa-globe"></i> Volver
  </a> -->
<div class="card-deck">
<div class="card text-center card text-white bg-dark border-info mb-3" >

  <div class="card-header"><b><?php echo $data[12]['name']; ?></b> <i><?php echo $data[13]['spain']; ?></i> <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?>
  <br/>
  <b><i>DIRECTORIOS DEL MUNDO</i></b>
  </div>
  <div class="card-body text-info">
    <h5 class="card-title">
    <?php
//comprobamos si se ha recibido el nombre del ZIP		
        // Visualizar contenido d ela carpeta
if (is_dir($directorio)) {
$directorio = opendir("$directorio"."$rutaw"."/"); //ruta actual
echo "<i class='fas fa-folder-open'></i>" . " " . $rutaw . "<br />";
echo'</h5>';
echo'<p class="card-text text-success">';
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
        // Fin de mostrar ficheros de carpetas
    }else{
      echo $archivo . "<br/>";
      //echo "Eliminados : <strong>". $ficherosEliminados ."</strong>" . "<br />";       
        }
}
echo'<p>';
echo'</div>';
echo'<div class="card-footer text-white text-muted">';
echo "Mundo cargado correctamente, reinicia el servidor</br>";
echo '<a type="button" class="btn btn-primary" href="index.php" data-target="#modalAdmin">';
echo '<i class="fas fa-globe"></i> Volver';
echo '</a>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';

    $linestxt = $linestxt[0];
    $lineb = $lines[64];
    $inputb = $linestxt . "\n";
    $linetextb = "level-name=";
    $outputb = "$linetextb$inputb";
    $newcontentb = str_replace($lineb, $outputb, $content);
    file_put_contents($myFile, $newcontentb);

    foreach ($data as $key) {
    $data[1]['data'] = $linestxt;
    $data[1]['spain'] = $linestxt;
    $data[1]['btn'] = '<i class="fas fa-undo-alt"></i>';
    }
    $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);
} else {
    echo '<br><ul class="list-group">';
    echo'<li class="list-group-item">';
    echo "Ocurrió un error y la ruta como directorio no es valido";
    echo'</li></ul>';
}
?>





</p>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
  </body>
</html>