<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

$active_tablero = "";
$active_whitelist = "";
$active_permisos = "";
$active_admin = "";
$active_mundo = "active";
$active_backups = "";
$active_propiedades = "";
$active_logs = "";
$title = "Minecraft SRV | Simple Invoice";

$jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$data = json_decode($jsonString, true);


// Obtener el contenido del archivo de propiedades como una matriz de líneas
$myFile = '../../servername/server.properties';
$lines = file($myFile);
// Obtener el contenido del archivo como cadena
$content = file_get_contents($myFile);

$directorioW = '../../servername/worlds/';
$directorioM = '../../servername/worlds';

if (!file_exists($directorioW)) {
  $ficheros  = '';
  $rutaw = 'Directorio no Encontrado';
  $subdirectorios = '';
} else {
  $ficheros  = scandir($directorioW);
  if (!empty($ficheros[2])) {
    $rutaw = ($ficheros[2]);
    $subdirectorios = scandir($directorioW . $rutaw);
  }else {
    $rutaw = 'Directorio no Encontrado';
  }
}



require '../tablero/info.php';

function directorioMundo($directorio){
  $listado = scandir($directorio);
  unset($listado[array_search('.', $listado, true)]);
  unset($listado[array_search('..', $listado, true)]);
  if (count($listado) < 1) {
      return;
  }
  foreach($listado as $elemento){
    if(!is_dir($directorio.'/'.$elemento)) {
        echo "<li><i class='fas fa-file-alt'></i> <a href='$directorio/$elemento'>$elemento</a></li>";
      }
      if(is_dir($directorio.'/'.$elemento)) {
        echo '<li class="open-dropdown"><i class="fas fa-folder-open"></i> '.$elemento.'</li>';
      echo '<ul class="dropdown d-none">';
      echo '<ul>';
          directorioMundo($directorio.'/'.$elemento);
      echo '</ul>';
      echo '</ul>';
      }
  }
}

?>

<!doctype html>
<html lang="es">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mundo</title>
  <?php include "../includes/scripts.php" ?>
	<script>
		$(document).ready(function(){
		  $(".open-dropdown").click(function(){
		    $(this).next( "ul.dropdown" ).toggleClass('d-none');
		  });
		});
	</script>
</head>

<body>

  <?php include '../includes/navbar.php' ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="">Mundo</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
  </nav>

  <!-- Inicio cardbody -->
  <div class="card-body">
    <!-- Inicio Tarjeta subir mundo -->
    <div class="card text-center card text-white bg-dark border-info mb-3">
      <div class="card-header">
      <div class="card-header"><i><?php echo $data[12]['name']; ?> <?php echo $data[13]['spain']; ?>: </i> <b><?php echo $data[12]['spain']; ?></b> Puerto: <b><?php echo $data[8]['spain']; ?></b><br />
      </div>

      <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) : ?>
      <div class="card-body">
        <h5 class="card-title">
          <?php print_r("<i class='fas fa-folder-open'></i> <b>$rutaw</b><br>"); ?>
        </h5>
        <p class="card-text">

        <form method="POST" action="subido.php" enctype="multipart/form-data">
          <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Ejemplo de ruta de los directorios del archivo comprimido zip para subir: <b>worlds/Bedrock level/db.</b></small>
            <label class="btn btn-outline-secondary" for="my-file-selector">Subir archivo ZIP:
              <input required="" type="file" name="zip_file" id="">
              <button class="btn btn-info" name="submit" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
            </label>
          </div>
        </form>

        <form method="POST" action="select.php" enctype="multipart/form-data">
          <div class="form-group">
            <label class="btn btn-outline-secondary" for="my-file-selector">Seleccionar zip de Respaldo:
              <select type="file" name="zip_file" class="custom-select" id="validationServer02" aria-describedby="validationServer02Feedback" required>
                <option selected><?php print_r($rutaw); ?></option>
                <?php
                $archivos = scandir("../../servername/backups");
                $num = 0;
                for ($i = 2; $i < count($archivos); $i++) {
                  $num++;
                ?>
                  <?php
                  echo "<option value=" . $archivos[$i] . " select>" . "#" . "<b>" . $num . "</b>" . " -- " . $archivos[$i] . "</option>";
                  ?>
                <?php } ?>
              </select>
              <button class="btn btn-info" name="submit" type="submit"><i class="fas fa-upload"></i> Recuperar</button>
            </label>
          </div>
        </form>
        </p>
      </div>
            <?php else : ?>
              
            <?php endif ?>


      <div class="card-footer text-muted">
        <b><?php echo $data[14]['name']; ?></b> <i><?php echo $data[14]['icon']; ?></i> <?php echo $data[14]['spain']; ?>
      </div>
      <!-- Fin Tarjeta subir mundo -->
    </div>


    <!-- Inicio Tarjeta Directorio del Mundo mundo -->
    <div class="card text-center card text-white bg-dark border-info mb-3">
      <div class="card-header">
        <b><?php echo $data[1]['name']; ?></b> <i><?php echo $data[1]['btn']; ?></i> <?php echo $data[1]['spain']; ?><br />
        <b><?php echo $data[7]['name']; ?></b> <i><?php echo $data[7]['btn']; ?></i> <?php echo $data[7]['spain']; ?><br />
        <b><i>DIRECTORIOS DEL MUNDO</i></b>
      </div>
      <div class="card-body text-info">
        <p class="card-text text-success">
          <?php
          if (empty($ficheros)) {
            echo "<b>MUNDO NO DETECTADO</b><br/>";
            echo "No existen los directorios del Mundo<br/>";
            echo "Seleccione uno de Respaldo<br/>";
            echo "o Suba uno comprimido Zip<br/>";
          } else {
            echo '<h4 class="card-title">';
            echo directorioMundo($directorioM);
            echo '</h4>';
          }
          ?>
        </p>
        <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) : ?>
        <a href="../respaldos/index.php" class="btn btn-primary">Ir a Respaldos <span class="badge badge-light"><?php echo $num; ?></span></a>
        <?php else : ?>
              
        <?php endif ?>
      </div>
      <div class="card-footer text-muted">
      <?php if ($_SESSION['id_rol'] == 0) : ?>
        <a href="../../shell.php" type="submit" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-code'></i> <?php echo $data[13]['spain']; ?>">Contol</a>
            <?php else : ?>
              
            <?php endif ?>
        
      </div>
      <!-- Fin Tarjeta Directorio del Mundo mundo -->
    </div>

    <!-- Fin cardbody -->
  </div>


  <?php include '../includes/footer.php' ?>
  <!-- php include '../includes/modal.php'?> -->

</body>

</html>