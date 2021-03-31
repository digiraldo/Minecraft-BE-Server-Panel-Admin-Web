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
<html lang="es">

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


   <!--tabla-->
   <div class="panel panel-primary">
      <div class="panel-heading">
        <!--<h6 class="panel-title">Respaldos Disponibles</h6>-->
      </div>
      <div class="panel-body">
        <!-- <button type="button" class="btn btn-primary" id="botonLogs">Registros</button> -->
        <table id="tablaRespaldos" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th width="3%" scope="col">#</th>
              <!--<th width="7%" scope="col">#</th>-->
              <th scope="col">Nombre Archivo</th>
              <th width="26%" scope="col">Acciones</th>
              <!--<th width="10%" scope="col">Acciones</th>-->
            </tr>
          </thead>
          <tbody id="respaldos">
            <?php
            $archivos = scandir("config");
            $num = 0;
            for ($i = 2; $i < count($archivos); $i++) {
              $num++;
            ?>
              <p>
              </p>
              <tr>
                <th scope="row"><?php echo $num; ?></th>
                <td><?php echo $archivos[$i]; ?></td>
                <td>
                  <a href="config/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-download"></i></a>                  
                  <form style="display: inline-block" method="POST" action="panel/propiedades/ver_archivo.php">
                    <input type="hidden" name="log" value="<?php echo $archivos[$i] ?>">
                    <input type="hidden" name="num" value="<?php echo $num ?>">
                    <button value="log" data-toggle="tooltip" data-placement="top" title="Ver Archivo # <?php echo $num; ?>" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></button>
                  </form>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>

  </div>


 

  <?php include 'panel/includes/footer.php' ?>
  <!-- php include '../includes/modal.php'?> -->


  <!-- <script src="includes/ajax1.js"> </script> -->
  <script src="panel/includes/js/logs.js"> </script>



</body>

</html>