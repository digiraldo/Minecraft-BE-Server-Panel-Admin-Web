<?php

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="";
    $active_admin="";
    $active_mundo="";
    $active_backups="active";
    $active_propiedades="";
    $active_logs="";	
    $title="Minecraft SRV | Simple Invoice"; 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respaldo</title>
    <?php include "../includes/scripts.php" ?>

  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Respaldo</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>



    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
  </body>
</html>