<?php

session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3 && $_SESSION['id_rol'] != 4)
{
  header("location: ../../");
}


if (empty($_SESSION['active'])) {
  header('location: ../../');
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
require 'rendimiento.php';
require 'info.php';
require '../respaldos/size.php';
$mostrarModal='';
// echo "<pre>$controlsrv</pre>";

?>

<?php //echo $online; ?>
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
      <!--<a class="btn btn-dark btn-sm" href="../includes/salir.php" role="button" alt="Salir del sistema" data-toggle="tooltip" data-placement="bottom" title="Cerrar Sesión"><i class="fas fa-sign-out-alt"></i> Salir</a>-->
    </ol>
  </nav>

<!-- Modal -->
<div class="modal fade" id="modalReglas" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalReglasLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalReglasLabel"><i class="fas fa-tasks"></i> <?php echo $data[18]['name'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<?php if (empty($data[18]['data'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data0'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data0']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data1'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data1']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data2'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data2']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data3'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data3']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data4'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data4']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data5'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data5']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data6'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data6']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data7'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data7']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data8'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data8']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data9'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data9']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data10'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data10']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data11'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data11']; ?> <br>
<?php endif ?>

<?php if (empty($data[18]['data12'])):  ?>
<?php else : ?>
<?php echo $data[18]['icon']; echo " ".$data[18]['data12']; ?> <br>
<?php endif ?>

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
          Ingreso al Servidor: <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?></br>
          Versión Minecraft: <?php echo $versionsrv; ?></br>
          Consultado en: <?php echo $Timer; ?>s
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
        <pre>
          <?php
          echo "";
          echo "<font color='red'>$txtDetener</font>";
          echo "<font color='lime'>$txtIniciar</font>";
          echo "<font color='blue'>$txtReiniciar</font>";
          echo "";
          ?>
        </pre>

<?php if (empty($data[18]['name'])):  ?>

<?php else : ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalReglas">
<i class="fas fa-tasks"></i>  Ver: <?php echo $data[18]['name'] ?>
</button>
<?php endif ?> 

</div>
        <?php elseif ($_SESSION['id_rol'] == 2) : ?>

          <div class="card-body">
          <h5 class="card-title">Control del Servidor: <?php echo $data[0]['spain']; ?></h5>
          <p class="card-text">Aqui puede detener, iniciar y/o reiniciar el servidor, se recomienda reiniciar cada vez que realicen cambios en Whitelist, Permisos y/o Propiedades.</p>

          <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
          <button value="btnReiniciar" class="btn btn-primary" type="submit" name="accion"><i class="fas fa-redo-alt"></i> Reiniciar</button>

        </div>
        <div class="card-footer text-muted">
          <?php
          echo "<pre>";
          echo "<font color='lime'>$txtIniciar</font>";
          echo "<font color='blue'>$txtReiniciar</font>";
          echo "</pre>";
          ?>

<?php if (empty($data[18]['name'])):  ?>

<?php else : ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalReglas">
<i class="fas fa-tasks"></i> Ver: <?php echo $data[18]['name'] ?>
</button>
<?php endif ?> 

<?php if (empty($data[18]['name'])):  ?>
<?php $mostrarToast=true; ?>

<div id="toast" class="toast text-white bg-danger" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000" style="position: absolute; top: 0; right: 0;">
  <div class="toast-header">
    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
      <rect width="100%" height="100%" fill="#ff0000"></rect>
    </svg>
    <strong class="mr-auto">Alerta</strong>
    <small>Inserar Título</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="toast-body">
<strong><?php echo strtoupper('Inserar Título') ?></strong> <br>
Inserar tíulo y esablecer las normas del juego o mundo en Editar.
  </div>
  <div class="mt-2 pt-2 border-top">
      <a href="../propiedades/reglas.php" type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</a href="">
    </div>
</div>
<?php else : ?>

<?php endif ?>
        
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
        Solicitud Ingreso al Servidor: <?php echo $data[0]['spain']; ?> <br>


<?php if (!empty($data[18]['name'])) { ?>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalReglas">
<i class="fas fa-tasks"></i>  Ver: <?php echo $data[18]['name'] ?>
</button>
  <?php } ?>

        </div>
        </div>
          <?php endif ?>
      </div>

      <br>

      <div class="row">
      <?php if ($_SESSION['id_rol'] == 4) : ?>
        <div class="bg-danger col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Jugadores Online</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-server fa-4x"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $online; ?>/<?php echo $data[6]['spain']; ?></span></h4>
          </div>
          <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $online; ?>/<?php echo $data[6]['spain']; ?> Jugadores Max.">Ver Propiedades <span class="badge badge-light"><?php echo $online; ?>/<?php echo $data[6]['spain']; ?></span></a>
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
          <div class="card-header font-weight-bold">Jugadores Online</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-server fa-4x"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $online; ?>/<?php echo $data[6]['spain']; ?></span></h4>
          </div>
          <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $online; ?>/<?php echo $data[6]['spain']; ?> Jugadores Max.">Ver Propiedades <span class="badge badge-light"><?php echo $online; ?>/<?php echo $data[6]['spain']; ?></span></a>
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
        <!-- CONFIGURAR div class="bg-danger col-sm-6 card text-white">   A 4 -->
        <div class="bg-secondary col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Disco Duro</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-hdd fa-4x" style="color: <?php echo $hddcolorIcono ?>;"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $hddporcentaje." %"; ?></span></h4>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-<?php echo $hddcolorPorcentaje; ?>" role="progressbar" style="width: <?php echo $hddporcentaje."%"; ?>" aria-valuenow="<?php echo $do; ?>" aria-valuemin="0" aria-valuemax="<?php echo $ds; ?>"><?php echo $hddporcentaje." %"; ?></div>
              </div>
          </div>
          <a class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Espacio Servidor">HDD Usado: <?php echo $hddusado; ?> / <?php echo $hddtotal; ?> <span class="badge badge-<?php echo $hddcolorPorcentaje; ?>"><?php echo $hddporcentaje."%"; ?></span></a>
        </div>
        <div class="bg-secondary col-sm-6 card text-white">
          <div class="card-header font-weight-bold">Memoria Ram</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">AGREGADOS</h3> -->
            <i class="fas fa-memory fa-4x" style="color: <?php echo $ramcolorIcono ?>;"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $ramporcentaje . " %"; ?></span></h4>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-<?php echo $ramcolorPorcentaje; ?>" role="progressbar" style="width: <?php echo $ramporcentaje."%"; ?>" aria-valuenow="<?php echo $usadoram; ?>" aria-valuemin="0" aria-valuemax="<?php echo $totalram; ?>"><?php echo $ramporcentaje." %"; ?></div>
              </div>
          </div>
          <a class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Memoria del Servidor">RAM Usado: <?php echo $ramusado; ?> / <?php echo $ramtotal; ?> <span class="badge badge-<?php echo $ramcolorPorcentaje; ?>"><?php echo $ramporcentaje."%"; ?></span></a>
        </div>
<!--
        <div class="bg-secondary col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Procesador</div>
          <div class="card-body">
              
            <i class="fas fa-microchip fa-4x"></i>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark badge-10x"><?php echo count($permisos); ?></span></h4>
          </div>
        </div>
-->

        <div class="bg-danger col-sm-4 card text-white">
          <div class="card-header font-weight-bold">Jugadores Online</div>
          <div class="card-body">
            <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
            <span class="fas fa-server fa-4x"></span>
            <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo $online; ?>/<?php echo $data[6]['spain']; ?></span></h4>
          </div>
          <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo $online; ?>/<?php echo $data[6]['spain']; ?> Jugando Ahora">Ver Propiedades <span class="badge badge-light"><?php echo $online; ?>/<?php echo $data[6]['spain']; ?></span></a>
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


      <?php if ($_SESSION['id_rol'] == 4 && !empty($data[18]['name']) && $data[19]['data'] == 'true'){  ?>
  <script>
  toastr.info('<?php if (!empty($data[18]['data'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data0'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data0']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data1'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data1']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data2'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data2']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data3'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data3']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data4'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data4']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data5'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data5']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data6'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data6']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data7'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data7']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data8'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data8']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data9'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data9']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data10'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data10']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data11'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data11']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data12'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data12']."<br>"; ?>
  <?php } ?>', '<i class="fas fa-edit" style="color: #DAF7A6;"></i> <?php echo strtoupper($data[18]['name'])."<br>"; ?>', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "600",
  "hideDuration": "1000",
  "timeOut": "50000",
  "extendedTimeOut": "20000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "slideDown",
  "hideMethod": "slideUp"
}
)
</script> 
<?php } ?>


      <?php include '../includes/footer.php' ?>
      <?php include '../includes/toast.php' ?>
      <?php //include '../includes/modal.php'?>


<?php if ($mostrarModal) { ?>
    <script>
        $('#modalReglas').modal('show');
    </script>
<?php } ?>



</body>

</html>