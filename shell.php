<?php
session_start();
if ($_SESSION['id_rol'] != 0) {
header("location: ../../");
}

$active_tablero = "";
$active_whitelist = "";
$active_permisos = "";
$active_admin = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "";
$active_logs = "active";
$title = "Minecraft SRV | Simple Invoice";


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consola</title>
  <?php include "panel/includes/scripts.php" ?>

</head>

<body>


  <div class="container">
    <form action="shell.php" method="post" enctype="multipart/form-data">

      <div class="card text-center text-white bg-secondary">
        <div class="card-header">
          <b>Ejecutar Acciones</b><br>
        </div>
        <div class="card-body">
          <h5 class="card-title">Control del Servidor</h5>
          <p class="card-text text-warning">
            <label for="validationServer01">Shell</label>
            <input type="text" name="command" value="" class="form-control" id="validationServer01" aria-describedby="validationServer01Feedback" required>
          <div id="validationServer01Feedback" class="invalid-feedback">
          </div>
          <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
          <div class="form-group">
            <h5 class="text-warning text-left">
              <?php
              $command = $_POST['command'];
              echo "<pre>";
              echo shell_exec($command);
              echo "</pre>";
              ?>
            </h5>
          </div>
          </p>
        </div>
        <div class="card-footer text-muted">
          <a href="panel/mundo/" value="btnCerrar" class="btn btn-danger" type="submit" name="accion"><i class="fas fa-close"></i> Cerrar Consola</a>
        </div>
      </div>
    </form>
  </div>

  <?php include 'panel/includes/footer.php' ?>
  <!-- php include '../includes/modal.php'?> -->


  <!-- <script src="includes/ajax1.js"> </script> -->
  <script src="panel/includes/js/logs.js"> </script>



</body>

</html>