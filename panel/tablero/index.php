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

// echo "<pre>$controlsrv</pre>";

?>

<!DOCTYPE html>
<html lang="en">

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
        Solicitud Ingreso al Servidor: servername
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
      <!-- php include '../includes/modal.php'?> -->

</body>

</html>