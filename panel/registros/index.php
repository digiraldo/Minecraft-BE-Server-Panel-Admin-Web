<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

$active_tablero = "";
$active_allowlist = "";
$active_permisos = "";
$active_admin = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "";
$active_logs = "active";
$title = "Minecraft SRV | Simple Invoice";

$carpeta = "../../servername/logs";
$archivosb = scandir($carpeta);


function convert_filesize($bytes, $decimals = 2){
  $size = array(' B',' kB',' MB',' GB',' TB', 'PB',' EB',' ZB',' YB');
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}


// Get file size
$size = filesize($carpeta);

// Convert file size
//echo convert_filesize($size);

/**
 * Funcion que muestra la estructura de carpetas a partir de la ruta dada.
*/ 
/** 
*function listar_archivos($carpeta){

*  if(is_dir($carpeta)){
*      if($dir = opendir($carpeta)){
*          while(($archivo = readdir($dir)) !== false){
            
*            $realfile = $carpeta . "/" . $archivo;
*            $filesize = filesize($realfile);

*              if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
*                  echo '<li><a target="_blank" href="'.$carpeta.'/'.$archivo.'">'.$archivo.'</a>'.' Tamaño: '.convert_filesize($filesize).'</li>';
*                  //echo $filesize;
*              }
*          }
*        }
*          closedir($dir);
      
*  }
*}

*echo listar_archivos($carpeta);
*/

function folderSize ($dir)
{
    $size = 0;
    $contents = glob(rtrim($dir, '/').'/*', GLOB_NOSORT);

    foreach ($contents as $contents_value) {
        if (is_file($contents_value)) {
            $size += filesize($contents_value);
        } else {
            $size += realFolderSize($contents_value);
        }
    }

    return $size;
}

$sizef = folderSize($carpeta);
//echo convert_filesize($sizef);

require '../tablero/info.php';

?>

<!doctype html>
<html lang="es">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registros</title>
  <?php include "../includes/scripts.php" ?>

</head>

<body>

  <?php include '../includes/navbar.php' ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="">Registros</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
  </nav>

  <div class="container">

  <p>
      <a class="btn btn-primary text-white">
        <i class="fas fa-archive"></i> Tamaño Archivos: <span class="badge badge-light"><?php echo convert_filesize($sizef); ?></span>
      </a>
    </p>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <!--<h6 class="panel-title">Respaldos Disponibles</h6>-->
      </div>
      <div class="panel-body">
        <!-- <button type="button" class="btn btn-primary" id="botonLogs">Registros</button> -->
        <table id="tablaRegistros" class="table table-dark table-striped table-bordered display" style="width:100%">
          <thead>
            <tr>
              <th width="3%" scope="col">#</th>
              <!--<th width="7%" scope="col">#</th>-->
              <th scope="col">Nombre de Registro</th>
              <th scope="col">Tamaño</th>
              <th width="4%" scope="col">Acciones</th>
              <!--<th width="10%" scope="col">Acciones</th>-->
            </tr>
          </thead>
          <tbody id="registros">
            <?php
            $num = 0;
            for ($i = 2; $i < count($archivosb); $i++) {
              $realfile = $carpeta . "/" . $archivosb[$i];
              $filesizea = filesize($realfile);
              $num++;
            ?>
              <p>
              </p>
              <tr>
                <th scope="row"><?php echo $num; ?></th>
                <td><?php echo $archivosb[$i]; ?></td>
                <td><?php echo convert_filesize($filesizea); ?></td>
                <td>
                <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) : ?>
                  <a href="../../servername/logs/<?php echo $archivosb[$i]; ?>" download="<?php echo $archivosb[$i]; ?>" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-download"></i></a>  
                  <?php else : ?>
              
              <?php endif ?>
                  
                 
                  <form style="display: inline-block" method="POST" action="ver_log.php">
                    <input type="hidden" name="log" value="<?php echo $archivosb[$i] ?>">
                    <input type="hidden" name="num" value="<?php echo $num ?>">
                    <button value="log" data-toggle="tooltip" data-placement="top" title="Ver Log # <?php echo $num; ?>" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></button>
                  </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    </div>

    <?php include '../includes/footer.php' ?>
    <!-- php include '../includes/modal.php'?> -->


    <!-- <script src="includes/ajax1.js"> </script> -->
    <script src="../includes/js/logs.js"> </script>



</body>

</html>