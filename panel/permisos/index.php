<?php

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="active";
    $active_admin="";
    $active_mundo="";
    $active_backups="";
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
    <title>Usuarios</title>
    <?php include "../includes/scripts.php" ?>

  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Permisos</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>


  <div class="container">
 <!-- <p>
    <button type="button" class="btn btn-primary" id="boton"><i class="fas fa-user-plus"></i> Agregar Jugador</button>
  </p> -->
  
 
      <div class="section">
      
        <table id="tablaPermisos" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
              <th scope="col">Gamertag</th>
              <!--<th scope="col">Id Usuario XUID</th> -->
              <th scope="col">Nivel de Permso</th>
            <!--  <th scope="col">Id usuario (XUID)</th> -->
              </tr>
            </thead>
		      <tbody>
              <?php foreach ($permisos as $permiso): ?>
                  <td>
                  <?php if ($permiso['permission'] == 'operator') { ?>
                  <a href="# " data-toggle="tooltip" data-placement="left" 
                  title="<i class='fas fa-id-card'></i> xuid: <?php echo $permiso['xuid']; ?>">
                  <?php echo $permiso['name']; ?></a>
                  <?php }else {
                    array();
                  }
                  ?>
                  </td>
                  <!--
                  <td>
                  <?php if ($permiso['permission'] == 'operator') { 
                    echo $permiso['xuid'];
                  } else {
                    array();
                  } 
                  ?> 
                  </td>
                  -->
                  <td>
                  <?php if ($permiso['permission'] == 'operator') { ?>
                  <a href="# " data-toggle="tooltip" data-placement="left" 
                  title="<i class='fas fa-id-card'></i> xuid: <?php echo $permiso['xuid']; ?>">
                  <?php echo $permiso['spain']; ?></a>
                  <?php }else {
                    array();
                  }
                  ?>
                  
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
    




  </body>
</html>