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

    <div class="panel panel-primary">
      <div class="panel-heading">
        <!--<h6 class="panel-title">Respaldos Disponibles</h6>-->
      </div>
      <div class="panel-body">
        <!-- <button type="button" class="btn btn-primary" id="botonLogs">Registros</button> -->
        <table id="tablaRegistros" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th width="3%" scope="col">#</th>
              <!--<th width="7%" scope="col">#</th>-->
              <th scope="col">Nombre de Registro</th>
              <th width="4%" scope="col">Acciones</th>
              <!--<th width="10%" scope="col">Acciones</th>-->
            </tr>
          </thead>
          <tbody id="respaldos">
            <?php
            require 'logs.php';
            for ($i = 2; $i < count($archivos); $i++) {
              $num++;
            ?>
              <p>
              </p>
              <tr>
                <th scope="row"><?php echo $num; ?></th>
                <td><?php echo $archivos[$i]; ?></td>
                <td>
                <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) : ?>
                  <a href="../../servername/logs/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-download"></i></a>  
                  <?php else : ?>
              
              <?php endif ?>
                  
                 
                  <form style="display: inline-block" method="POST" action="ver_log.php">
                    <input type="hidden" name="log" value="<?php echo $archivos[$i] ?>">
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


    <?php include '../includes/footer.php' ?>
    <!-- php include '../includes/modal.php'?> -->


    <!-- <script src="includes/ajax1.js"> </script> -->
    <script src="../includes/js/logs.js"> </script>



</body>

</html>