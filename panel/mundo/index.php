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

    $jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
    $data = json_decode($jsonString, true);


    // Obtener el contenido del archivo de propiedades como una matriz de líneas
    $myFile = '../../servername/server.properties';
    $lines = file($myFile);
    // Obtener el contenido del archivo como cadena
    $content = file_get_contents($myFile);

    $directorio = '../../servername/worlds/';
    $ficheros  = scandir($directorio);
    $rutaw = ($ficheros[2]);
    $subdirectorios = scandir($directorio . $rutaw);

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

<form method="POST" action="subido.php" enctype="multipart/form-data">
<div class="form-group">
<small id="emailHelp" class="form-text text-muted">Ejemplo de ruta de los directorios del archivo comprimido zip para subir: worlds/Bedrock level/db.</small>
    <label class="btn btn-outline-info" for="my-file-selector">Subir archivo ZIP: 
      <input required="" type="file" name="zip_file" id="">
      <button class="btn btn-info" name="submit" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>
</div>
</form>
<form method="POST" action="select.php" enctype="multipart/form-data">
<div class="form-group">
<label class="btn btn-outline-info" for="my-file-selector">Seleccionar zip de Respaldo: 
  <select type="file" name="zip_file" class="custom-select" 
    id="validationServer02" aria-describedby="validationServer02Feedback" required>
    <option selected><?php print_r($rutaw); ?></option>
      <?php
          $archivos = scandir("../../servername/backups");
          $num=0;
          for ($i=2; $i<count($archivos); $i++)
          {$num++;
      ?>
    <?php
    echo "<option value=".$archivos[$i]." select>"."#"."<b>".$num."</b>"." -- ".$archivos[$i]."</option>";
    ?>
    <?php }?> 
  </select>
  <button class="btn btn-info" name="submit" type="submit"><i class="fas fa-upload"></i> Recuperar</button>                          
</div>
</label>
</div>
</form>

</br>

<div class="card-body">

<div class="card-deck">
<div class="card text-center border-info mb-3">
  <div class="card-header"><b><?php echo $data[12]['name']; ?></b> <i><?php echo $data[13]['spain']; ?></i> <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?></div>
  <div class="card-body text-info">
    <h5 class="card-title"><?php print_r("<i class='fas fa-folder-open'></i> <b>$rutaw</b><br>"); ?></h5>
    <p class="card-text text-success">
    <?php
        if ($subdirectorios[2] == '') {
          echo "<b>MUNDO NO DETECTADO</b><br/>";
        } else {
          print_r("<i class='fas fa-folder'></i> $subdirectorios[2]<br>");
        }
        if ($subdirectorios[3] == '') {
          echo "No existen los directorios del Mundo<br/>"; 
        } else {
          print_r("<i class='fas fa-database'></i> $subdirectorios[3]<br>");
        }
        if ($subdirectorios[4] == '') {
          echo "Seleccione uno de Respaldo<br/>";  
        } else {
          print_r("<i class='fas fa-database'></i> $subdirectorios[4]<br>");
        }
        if ($subdirectorios[5] == '') {
          echo "o Suba uno compimido Zip<br/>";
        } else {
          print_r("<i class='fas fa-file-alt'></i> $subdirectorios[5]<br>");
        }
        if ($subdirectorios[6] == '') {
        } else {
          print_r("$subdirectorios[5]<br>");
        }
        if ($subdirectorios[7] == '') {
        } else {
          print_r("$subdirectorios[5]<br>");
        }

    ?>
    
    </p>
  </div>
  <div class="card-footer text-muted">
  <a href="../tablero/ver_pro.php" type="submit" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-database'></i> <?php echo $data[13]['spain']; ?>">Ver Propiedades</a>
  </div>
</div>
</div>

</div>

<?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
  </body>
</html>