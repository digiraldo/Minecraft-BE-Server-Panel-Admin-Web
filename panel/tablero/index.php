<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3 && $_SESSION['id_rol'] != 4)
{
  header("location: ../../");
}


$active_tablero = "active";
$active_whitelist = "";
$active_permisos = "";
$active_admin = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "";
$active_logs = "";
$title = "Minecraft SRV | Simple Invoice";

require 'shell.php';
$mostrarModal='';
// echo "<pre>$controlsrv</pre>";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tablero</title>
  <?php include "../includes/scripts.php" ?>

</head>

<body>

  <?php include '../includes/navbar.php' ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../tablero">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
  </nav>

<!-- Modal -->
<div class="modal fade" id="modalReglas" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalReglasLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalReglasLabel"><i class="fas fa-tasks"></i> Reglas del Juego</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<i class="fas fa-check"></i> No invadir propiedad privada. <br>
<i class="fas fa-check"></i> No ser tóxicos. <br>
<i class="fas fa-check"></i> No pedir comandos, trucos y demás. <br>
<i class="fas fa-check"></i> Cero conflictos o riñas. <br>
<i class="fas fa-check"></i> No destruir el ambiente. <br>
<i class="fas fa-check"></i> Pueden marcar o etiquetar sus propiedades o construcciones. <br>
<i class="fas fa-check"></i> La Casa o Cabaña que esta delante del Spawn es de todos, así que pueden guardar objetos en los baúles para los otros o nuevos jugadores. <br>
<i class="fas fa-check"></i> La versión del Servidor es Minecraft Bedrock Edición, se actualiza solo desde la pagina original de Minecraft cuando encuentra nuevos archivos o actualizaciones. <br>

<i class="fas fa-check"></i> El Servidor es privado y lo estoy pagando con un amigo, así que mantiene encendido las 24 horas para que ingresen dependiendo de su tiempo, son 10 jugadores simultáneos para no saturarlo ya que la maquina que alquilamos es pequeña. <br>

<i class="fas fa-check"></i> Los que estén interesados envíen sus Gamertag por Telegram o Discord para darles el permiso, si no ingresan al instante deben esperar a que hayan el mínimo de jugadores ya que al agregar un jugador toca reiniciar el servidor. <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>



  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">

      <div class="card text-center card text-white bg-dark border-info mb-3">
        <div class="card-header">
          <b>Panel Principal</b><br>
          Ingreso al Servidor: <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?>
        </div>
        <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1) : ?>
        <div class="card-body">
          <h5 class="card-title">Control del Servidor: servername</h5>
          <p class="card-text">Aqui puede detener, iniciar y/o reiniciar el servidor, se recomienda reiniciar cada vez que realicen cambios en Whitelist, Permisos y/o Propiedades.</p>

          <button value="btnDetener" class="btn btn-danger" type="submit" name="accion"><i class="fas fa-stop"></i> Detener</button>
          <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
          <button value="btnReiniciar" class="btn btn-primary" type="submit" name="accion"><i class="fas fa-redo-alt"></i> Reiniciar</button>

        </div>
        <div class="card-footer text-muted">
          <?php
          echo "<pre>";
          echo $txtDetener;
          echo $txtIniciar;
          echo $txtReiniciar;
          echo "</pre>";
          ?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalReglas">
<i class="fas fa-tasks"></i> Ver Reglas
</button>

        </div>

        <?php elseif ($_SESSION['id_rol'] == 2) : ?>

          <div class="card-body">
          <h5 class="card-title">Control del Servidor: servername</h5>
          <p class="card-text">Aqui puede detener, iniciar y/o reiniciar el servidor, se recomienda reiniciar cada vez que realicen cambios en Whitelist, Permisos y/o Propiedades.</p>

          <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
          <button value="btnReiniciar" class="btn btn-primary" type="submit" name="accion"><i class="fas fa-redo-alt"></i> Reiniciar</button>

        </div>
        <div class="card-footer text-muted">
          <?php
          echo "<pre>";
          echo $txtIniciar;
          echo $txtReiniciar;
          echo "</pre>";
          ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalReglas">
<i class="fas fa-tasks"></i> Ver Reglas
</button>


        </div>

        <?php else : ?>
          <?php if ($_SESSION['id_rol'] == 3) : ?>
          <div class="card-body">Para comunicarse con los jugadores y/o administradores, lo puede hacer en:</h5>
          <?php else : ?>
          <div class="card-body">Una vez inscrito, soliciar acceso al servidor tomando contacto con los administradores en:</h5>
          <?php endif ?>
          <p class="card-text"></p>
          <?php if ($data[16]['btn'] == ""):  ?>
            <?php else : ?>
          <a href="<?php echo $data[16]['btn']; ?>" class="btn btn-primary btn-lg"><?php echo $data[16]['icon']; ?> <?php echo $data[16]['spain']; ?></a>
          <?php endif ?>
         
          <?php if ($data[10]['btn'] == ""):  ?>
            <?php else : ?>
              <a href="<?php echo $data[10]['btn']; ?>" class="btn btn-info btn-lg"><?php echo $data[10]['icon']; ?> <?php echo $data[10]['spain']; ?></a>
          <?php endif ?>
        </div>
        <div class="card-footer text-muted">
        Solicitud Ingreso al Servidor: servername <br>
        
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalReglas">
<i class="fas fa-tasks"></i> Ver Reglas
</button>

        </div>
        </div>
          <?php endif ?>
      </div>

      <br>

      <div class="row">
      <?php if ($_SESSION['id_rol'] == 4) : ?>
        <div class="bg-danger col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Jugadores</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-server fa-4x"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $data[6]['btn']; ?></span></h4>
          </div>
          <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="0/<?php echo $data[6]['spain']; ?> Jugadores Max.">Ver Propiedades <span class="badge badge-light"><?php echo $data[6]['spain']; ?></span></a>
        </div>
<!--
        <div class="bg-primary col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Whitelist Gamertag</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">AGREGADOS</h3> -->
<!--            <i class="fas fa-user fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($usuarios); ?></span></h4>
          </div>
          <a href="#" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($usuarios); ?> Jugadores Agregados">Ver Whitelist <span class="badge badge-light"><?php echo count($usuarios); ?></span></a>
        </div>
-->
        <div class="bg-info col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Inscritos</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
            <i class="fas fa-users fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($rolesJ); ?></span></h4>
          </div>
          <a href="#" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($rolesJ); ?> Inscritos">Registrados <span class="badge badge-light"><?php echo count($rolesJ); ?></span></a>
        </div>

<?php $mostrarToast=true; ?>

<div id="toast3" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="50000" style="position: absolute; top: 0; right: 0;">
  <div class="toast-header">
    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
      <rect width="100%" height="100%" fill="#ff0000"></rect>
    </svg>
    <strong class="mr-auto">Alerta</strong>
    <small>Reglas del Juego</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="toast-body">
<strong>¡Te damos la Bienvenida!</strong> <br>
<strong>REGLAS EN EL JUEGO</strong> <br>
<i class="fas fa-check"></i> No invadir propiedad privada. <br>
<i class="fas fa-check"></i> No ser tóxicos. <br>
<i class="fas fa-check"></i> No pedir comandos, trucos y demás. <br>
<i class="fas fa-check"></i> Cero conflictos o riñas. <br>
<i class="fas fa-check"></i> No destruir el ambiente. <br>
<i class="fas fa-check"></i> Pueden marcar o etiquetar sus propiedades o construcciones. <br>
<i class="fas fa-check"></i> La Casa o Cabaña que esta delante del Spawn es de todos, así que pueden guardar objetos en los baúles para los otros o nuevos jugadores. <br>
<i class="fas fa-check"></i> La versión del Servidor es Minecraft Bedrock Edición, se actualiza solo desde la pagina original de Minecraft cuando encuentra nuevos archivos o actualizaciones. <br>

<i class="fas fa-check"></i> El Servidor es privado y lo estoy pagando con un amigo, así que mantiene encendido las 24 horas para que ingresen dependiendo de su tiempo, son 10 jugadores simultáneos para no saturarlo ya que la maquina que alquilamos es pequeña. <br>

<i class="fas fa-check"></i> Los que estén interesados envíen sus Gamertag por Telegram o Discord para darles el permiso, si no ingresan al instante deben esperar a que hayan el mínimo de jugadores ya que al agregar un jugador toca reiniciar el servidor. <br>
  </div>
</div>

          <?php elseif ($_SESSION['id_rol'] == 3) : ?>
        <div class="bg-danger col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Jugadores</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-server fa-4x"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $data[6]['btn']; ?></span></h4>
          </div>
          <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="0/<?php echo $data[6]['spain']; ?> Jugadores Max.">Ver Propiedades <span class="badge badge-light"><?php echo $data[6]['spain']; ?></span></a>
        </div>

        <div class="bg-primary col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Whitelist Gamertag</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">AGREGADOS</h3> -->
            <i class="fas fa-user fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($usuarios); ?></span></h4>
          </div>
          <a href="../usuarios" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($usuarios); ?> Jugadores Agregados">Ver Whitelist <span class="badge badge-light"><?php echo count($usuarios); ?></span></a>
        </div>

        <div class="bg-success col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Respaldos del Mundo</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
            <i class="fas fa-archive fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $respaldos; ?></span></h4>
          </div>
          <a href="../respaldos" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $respaldos; ?> Respaldos">Ver Respaldos <span class="badge badge-light"><?php echo $respaldos; ?></span></a>
        </div>

        <div class="bg-secondary col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Logs o Registros</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
            <i class="fas fa-history fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $registros; ?></span></h4>
          </div>
          <a href="../registros" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $registros; ?> Registros">Ver Registros <span class="badge badge-light"><?php echo $registros; ?></span></a>
        </div>

        <?php else : ?>
        <div class="bg-danger col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Jugadores</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-server fa-4x"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $data[6]['btn']; ?></span></h4>
          </div>
          <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="0/<?php echo $data[6]['spain']; ?> Jugando Ahora">Ver Propiedades <span class="badge badge-light"><?php echo $data[6]['spain']; ?></span></a>
        </div>

        <div class="bg-primary col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Whitelist Gamertag</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">AGREGADOS</h3> -->
            <i class="fas fa-user fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($usuarios); ?></span></h4>
          </div>
          <a href="../usuarios" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($usuarios); ?> Jugadores Agregados">Ver Whitelist <span class="badge badge-light"><?php echo count($usuarios); ?></span></a>
        </div>

        <div class="bg-warning col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Operadores Minecraft</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">OPERADORES</h3> -->
            <i class="fas fa-user-edit fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark badge-10x"><?php echo count($permisos); ?></span></h4>
          </div>
          <a href="../permisos" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($permisos); ?> Operadores">Ver Permisos <span class="badge badge-light"><?php echo count($permisos); ?></span></a>
        </div>

        <div class="bg-info col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Rol Admin Web</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
            <i class="fas fa-user-cog fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($rolesJ); ?></span></h4>
          </div>
          <a href="../rol" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($rolesJ); ?> Roles">Ver Roles <span class="badge badge-light"><?php echo count($rolesJ); ?></span></a>
        </div>

        <div class="bg-success col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Respaldos del Mundo</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
            <i class="fas fa-archive fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $respaldos; ?></span></h4>
          </div>
          <a href="../respaldos" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $respaldos; ?> Respaldos">Ver Respaldos <span class="badge badge-light"><?php echo $respaldos; ?></span></a>
        </div>

        <div class="bg-secondary col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Logs o Registros</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
            <i class="fas fa-history fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $registros; ?></span></h4>
          </div>
          <a href="../registros" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $registros; ?> Registros">Ver Registros <span class="badge badge-light"><?php echo $registros; ?></span></a>
        </div>




</div>
<br>
<div class="card text-center card text-white bg-dark border-info mb-3">
  <div class="card-header">
  Para comunicarse con los jugadores y/o administradores, lo puede hacer en:
  </div>
  <div class="card-body">
    <p class="card-text">
    <?php if ($data[16]['btn'] == ""):  ?>
            <?php else : ?>
          <a href="<?php echo $data[16]['btn']; ?>" class="btn btn-primary btn-sm"><?php echo $data[16]['icon']; ?> <?php echo $data[16]['spain']; ?></a>
          <?php endif ?>
         
          <?php if ($data[10]['btn'] == ""):  ?>
            <?php else : ?>
              <a href="<?php echo $data[10]['btn']; ?>" class="btn btn-info btn-sm"><?php echo $data[10]['icon']; ?> <?php echo $data[10]['spain']; ?></a>
          <?php endif ?>
    </p>

  </div>

</div>

        <?php endif ?>
      </div>
</form>
      </div>

      <?php include '../includes/footer.php' ?>
      <?php //include '../includes/modal.php'?>


<?php if ($mostrarModal) { ?>
    <script>
        $('#modalReglas').modal('show');
    </script>
<?php } ?>


<?php if ($mostrarToast) { ?>
  <script>
    $(document).ready(function() {
      $('.toast').toast('show');
    });
  </script>
<?php } ?>

</body>

</html>