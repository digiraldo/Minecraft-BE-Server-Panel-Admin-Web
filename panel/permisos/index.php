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
    <title>Permisos</title>
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
        <a class="btn btn-primary" href="agregar.php"><i class="fas fa-user-plus"></i> Añadir Permiso</a>
    </p>
  
      <div class="section">
      
        <table id="tablaPermisos" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
              <th scope="col">Gamertag</th>
              <!-- <th scope="col">Id Usuario XUID</th> -->
              <th scope="col">Nivel de Permiso</th>
              <th scope="col">Acciones</th>
              </tr>
            </thead>
		        <tbody>
              <?php foreach ($permisos as $permiso): ?>
              <tr>
                  <td>
                  <a href="# " data-toggle="tooltip" data-placement="left" 
                  title="<i class='fas fa-id-card'></i> xuid: <?php echo $permiso['xuid']; ?>">
                  <?php echo $permiso['name']; ?></a>
                  </td>
                  <!-- 
                  <td>
                  <?php echo $permiso['xuid']; ?></a>
                  </td>
                  -->
                  <td>
                  <a href="# " data-toggle="tooltip" data-placement="left" 
                  title="<i class='fas fa-id-card'></i> xuid: <?php echo $permiso['xuid']; ?>">
                  <?php echo $permiso['spain']; ?></a>
                  
                  </td>
                  <td>
                  
                  <!--
                  <a href="ver.php?name=<?php echo $permiso['name'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Ver" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></a>
                  -->
                  
                  <a href="editar.php?xuid=<?php echo $permiso['xuid'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Editar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-pencil-alt"></i></a>
                  
                  <!-- 
                  <a href="eliminar.php?xuid=<?php echo $permiso['xuid'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Quitar" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-trash-alt"></i></a>
                  --> 
                <form style="display: inline-block" method="POST" action="eliminar.php">
                <input type="hidden" name="name" value="<?php echo $permiso['xuid'] ?>">
                <button value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Quitar" onclick="return Confirmar('Realmente desea quitar el permiso a este jugador en el Servidor: servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></button>
                </form>
                  
                  </td>
              <?php endforeach; ?>
              </tr>  
          </tbody>
        </table>
      </div>
    </div>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
    




  </body>
</html>