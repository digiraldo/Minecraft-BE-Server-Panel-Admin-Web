<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}


$dirlog = "../../servername/server.properties";
$archivo = fopen("$dirlog", 'r');

?>

<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Info server_properties</title>
  <?php include "../includes/scripts.php" ?>

</head>

<body>
  <div class="container-fluid">
    <div class="card text-white bg-dark">
      <div class="card-header text-info">
        <h4 class="card-title">
        <i class="fas fa-tasks"></i> Nombre: <b>server.properties</b>
        </h4>
        <h5 class="card-title text-success">
          <i class="fas fa-server"></i> Servidor: <b>servername</b>
        </h5>
      </div>
      <div class="card-body">

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
        <a href="index.php" type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-cog'></i> Propiedades">Cerrar</a>
      </div>
    </div>
  </div>

  <?php include '../includes/footer.php' ?>
</body>

</html>