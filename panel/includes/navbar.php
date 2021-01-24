<?php
/*-------------------------
    Autor: Didier Giraldo
    Mail: disaned@gmail.com
    ---------------------------*/
    require '../usuarios/usuarios.php';
    $usuarios = obtenerUsuarios();
    $usuarioP = obtenerUsuarios();
    require '../permisos/permisos.php';
    $permisos = obtenerPermisos();
    require '../administradores/administradores.php';
    $roles = obtenerRol();
    $archivos = scandir("../../servername/backups");
    $num=0;
    for ($i=2; $i<count($archivos); $i++)
    {$num++;
      $respaldos = $num;
    }
    //print_r(array_column($permisos, 'permission'));

   // $percount = array_count_values(array_column($permisos, 'permission'))['operator'];  

   

      
  //count($permisos) >= 0  


    //echo $percount;
?>
<link rel="icon" href="../../favicon.ico" type="image/x-icon" />     
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="#"><a class="navbar-brand" href="../tablero"><img src="https://www.minecraft.net/etc.clientlibs/minecraft/clientlibs/main/resources/img/menu/menu-buy.gif" alt="" width="30" height="24" class="d-inline-block align-top">
      Panel Minecraft BE</a>

      <div class="dropdown-divider"></div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="<?php echo $active_tablero;?>">
          <a class="nav-link" aria-current="page" href="../tablero" data-toggle="tooltip" data-placement="bottom" title="<?php  echo ('-') ?> Jugando Ahora"><i class="fas fa-tachometer-alt"></i> Tablero<span class="badge badge-pill badge-danger"><?php  echo ('-') ?></span></a>
        </li>

        <li class="<?php echo $active_whitelist;?>">
          <a class="nav-link" aria-current="page" href="../usuarios" data-toggle="tooltip" data-placement="bottom" title="<?php echo count($usuarios); ?> Jugadores Agregados"><i class="fas fa-user"></i> Whitelist<span class="badge badge-pill badge-primary"><?php echo count($usuarios); ?></span></a>
        </li>

        <li class="<?php echo $active_permisos;?>">
          <a class="nav-link" aria-current="page" href="../permisos" data-toggle="tooltip" data-placement="bottom" title="<?php echo count($permisos); ?> Permisos"><i class="fas fa-user-edit"></i> Permisos<span class="badge badge-pill badge-warning"><?php echo count($permisos); ?></span></a>
        </li>

        <li class="<?php echo $active_admin;?>">
          <a class="nav-link" aria-current="page" href="../administradores" data-toggle="tooltip" data-placement="bottom" title="<?php echo count($roles); ?> Roles"><i class="fas fa-user-tie"></i> Roles<span class="badge badge-pill badge-success"><?php echo count($roles); ?></span></a>
        </li>

        <li class="<?php echo $active_mundo;?>">
          <a class="nav-link" aria-current="page" href="../mundo"><i class="fas fa-globe"></i> Mundo</a>
        </li>

        <li class="<?php echo $active_backups;?>">
          <a class="nav-link" aria-current="page" href="../respaldos" data-toggle="tooltip" data-placement="bottom" title="<?php echo $respaldos; ?> Respaldos"><i class="fas fa-archive"></i> Respaldos<span class="badge badge-pill badge-info"><?php echo $respaldos; ?></span></a>
        </li>

        <li class="<?php echo $active_propiedades;?>">
          <a class="nav-link" aria-current="page" href="../propiedades"><i class="fas fa-cog"></i> Propiedades</a>
        </li>

        <li class="<?php echo $active_logs;?>">
          <a class="nav-link" aria-current="page" href="../registros"><i class="fas fa-history"></i> Registros</a>
        </li>

      </ul>

    </div>
  </div>
</nav>
