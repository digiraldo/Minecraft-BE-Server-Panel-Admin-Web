<?php
include "../includes/scripts.php";
require __DIR__ . '/logs.php';
$txtInLog = (isset($_POST['log'])) ? $_POST['log'] : "";
$txtNumLog = (isset($_POST['num'])) ? $_POST['num'] : "";
//include "../includes/footer.php";
//include "../includes/scripts.php";
$dirlog = "../../servername/logs/";
$archivo = fopen("$dirlog$txtInLog", 'r');
//echo "$dirlog$txtInLog";

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Info Registro</title>

</head>

<body>
  <div class="container-fluid">
    <div class="card text-white bg-dark">
      <div class="card-header text-info">
        <h4 class="card-title">
          <i class="fas fa-list-ol"></i> Número: <b><?php echo $txtNumLog; ?></b> de <?php echo $registrosb; ?>
        </h4>
      </div>
      <div class="card-body">
        <h5 class="card-title text-success">
          <i class="fas fa-history"></i> Nombre: <b><?php echo $txtInLog; ?></b>
        </h5>
        <p class="card-text">
          <?php while ($linea = fgets($archivo)) {
            echo $linea . '<br/>';
            $aux[] = $linea;
            //  $numlinea++;
          }
          ?>
        </p>

      </div>
      <div class="card-footer text-muted">
        <a href="index.php" type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-tachometer-alt'></i> Panel Principal">Cerrar</a>
      </div>
    </div>
  </div>

</body>