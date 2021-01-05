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
  <p>
    <button type="button" class="btn btn-primary" id="boton"><i class="fas fa-user-plus"></i> Agregar Jugador</button>
  </p>
  
 
      <div class="section">
      
        <table id="tablaPermisos" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
              <th scope="col">Gamertag</th>
              <th scope="col">Id Usuario XUID</th>
                <th scope="col">Acciones</th>
            <!--  <th scope="col">Id usuario (XUID)</th> -->
              </tr>
            </thead>
		      <tbody>
              <?php foreach ($permisos as $permiso): ?>
                <tr>
                  <td><?php echo $usuario['name'] ?></td>
                  <td><a href="# " data-toggle="tooltip" data-placement="left" title="<i class='fas fa-id-card'></i> Usuario XUID<br><?php echo $permiso['xuid']; ?>"><?php echo $permiso['permission']; ?></a></td>
                </tr>
                <tr>
                  <td><?php echo $permiso['xuid'] ?></td>
                  <td><a href="# " data-toggle="tooltip" data-placement="left" title="<i class='fas fa-id-card'></i> Usuario XUID<br><?php echo $permiso['xuid']; ?>"><?php echo $permiso['permission']; ?></a></td>
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