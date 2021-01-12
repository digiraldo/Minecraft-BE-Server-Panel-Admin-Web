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
    Panel Principal
  </div>
  <div class="card-body">
    <h5 class="card-title">Control del Servidor</h5>
    <p class="card-text">Aqui puede detener, iniciar y/o reiniciar el servidor, se recomienda reiniciar cada vez que realicen cambios en Whitelist, Permisos y/o Propiedades.</p>

    <button value="btnDetener" class="btn btn-danger" type="submit" name="accion"><i class="fas fa-stop"></i> Detener</button>
    <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
    <button value="btnReiniciar" class="btn btn-primary" type="submit" name="accion"><i class="fas fa-redo-alt"></i> Reiniciar</button>
    <!-- <input class="btn btn-danger" type="submit" name="detener" value="Detener">
    <input class="btn btn-success" type="submit" name="iniciar" value="Iniciar">
    <input class="btn btn-warning" type="submit" name="reiniciar" value="Reiniciar"> -->

    <!-- <button value="btnDetener" colacarsimbolo?php echo system('sudo docker container stop mcpe');die;?-> class="btn btn-primary" type="submit" name="accion"><i class="fas fa-stop-circle"></i> Detener</button> -->

<!-- This link will add ?run=true to your URL, myfilename.php?run=true 
<a href="?run=true">Click Me!</a> -->
    
  </div>
  <div class="card-footer text-muted">
  Servidor configurado: servername
  </div>
</div>

<br>

<div class="row">

<div class="bg-danger col-sm-3 card text-white">
  <div class="card-header font-weight-bold">Jugando En Linea</div>
  <div class="card-body">
  <!-- <h3 class="card-title font-italic">EN LÍNEA</h3> -->
  <span class="fas fa-server fa-4x"></span>
  <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php  echo ('-/10') ?></span></h4>
  </div>
  <a href="../usuarios" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php  echo ('-/10') ?> Jugando Ahora">Ver Jugaodres</a>
</div>

<div class="bg-primary col-sm-3 card text-white">
  <div class="card-header font-weight-bold">Whitelist Gamertag</div>
  <div class="card-body">
  <!-- <h3 class="card-title font-italic">AGREGADOS</h3> -->
  <i class="fas fa-user fa-4x"></i>
  <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php echo count($usuarios); ?></span></h4>
  </div>
  <a href="../usuarios" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php echo count($usuarios); ?> Jugdores Agregados">Ver Whitelist</a>
</div>

<br/>

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
    <div class="card-header font-weight-bold">Administradores Web</div>
    <div class="card-body">
    <!-- <h3 class="card-title font-italic">USUARIOS</h3> -->
    <i class="fas fa-user-cog fa-4x"></i>
    <h4 class="card-text float-right display-4"><span class="badge badge-pill badge-dark"><?php  echo ('0') ?></span></h4>
    </div>
  <a href="../propiedades" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="<?php  echo ('0') ?> Administradores">Ver Usuarios</a>
</div>

</div>

<?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->

</body>
</html>