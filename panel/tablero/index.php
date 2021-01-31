<?php

  $active_tablero="active";
  $active_whitelist="";
  $active_permisos="";
  $active_admin="";
  $active_mundo="";
  $active_backups="";
  $active_propiedades="";
  $active_logs="";
  $title="Minecraft SRV | Simple Invoice";

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

<?php include '../includes/navbar.php'?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">


    <div class="card text-center">
  <div class="card-header">
    <b>Panel Principal</b><br>
    Ingreso al Servidor: <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?>
  </div>
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
  //ob_end_flush();
  //flush();
  //usleep(1500000);
  //echo "Ingreso al Servidor: {$data[12]['spain']} Puerto: {$data[8]['spain']}";


  ?>
  <!-- 
  Ingreso al Servidor: <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?>
  -->
  </div>
</div>

<br>

<div class="row">

<div class="bg-danger col-sm-3 card text-white">
  <div class="card-header font-weight-bold">Jugando En Linea</div>
  <div class="card-body">
  <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
  <span class="fas fa-server fa-4x"></span>
  <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark">0/<?php echo $data[6]['btn']; ?></span></h4>
  </div>
  <a href="ver_pro.php" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="0/<?php echo $data[6]['spain']; ?> Jugando Ahora">Ver Propiedades</a>
</div>

<div class="bg-primary col-sm-3 card text-white">
  <div class="card-header font-weight-bold">Whitelist Gamertag</div>
  <div class="card-body">
  <!-- <h3 class="card-title font-italic">AGREGADOS</h3> -->
  <i class="fas fa-user fa-4x"></i>
  <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($usuarios); ?></span></h4>
  </div>
  <a href="../usuarios" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($usuarios); ?> Jugadores Agregados">Ver Whitelist</a>
</div>

<div class="bg-warning col-sm-3 card text-white">
  <div class="card-header font-weight-bold">Operadores Minecraft</div>
  <div class="card-body">
  <!-- <h3 class="card-title font-italic">OPERADORES</h3> -->
  <i class="fas fa-user-edit fa-4x"></i>
  <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark badge-10x"><?php echo count($permisos); ?></span></h4>
  </div>
  <a href="../permisos" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($permisos); ?> Operadores">Ver Permisos</a>
</div>

  <div class="bg-success col-sm-3 card text-white">
    <div class="card-header font-weight-bold">Rol Admin Web</div>
    <div class="card-body">
    <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
    <i class="fas fa-user-cog fa-4x"></i>
    <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php  echo count($roles); ?></span></h4>
    </div>
  <a href="../administradores" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php  echo count($roles); ?> Roles">Ver Roles</a>
</div>

<div class="bg-info col-sm-3 card text-white">
    <div class="card-header font-weight-bold">Respaldos del Mundo</div>
    <div class="card-body">
    <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
    <i class="fas fa-archive fa-4x"></i>
    <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php  echo $respaldos; ?></span></h4>
    </div>
  <a href="../respaldos" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php  echo $respaldos; ?> Respaldos">Ver Respaldos</a>
</div>

</div>

<?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->

</body>
</html>