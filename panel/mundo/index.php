<?php

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="";
    $active_admin="";
    $active_mundo="active";
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
    <title>Mundo</title>
    <?php include "../includes/scripts.php" ?>

  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Mundo</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>

<form method="POST" action="cargarfichero.php" enctype="multipart/form-data">
<div class="form-group">
    <label class="btn btn-outline-info" for="my-file-selector">Subir archivo ZIP: 
      <input required="" type="file" name="zip_file" id="">
      <button class="btn btn-info" name="submit" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>                            
</div>
</form>

</br>
<!--
<form enctype="multipart/form-data" method="POST" action="maneja.php">
    <label>Subir archivo ZIP: <input type="file" name="zip_file" /></label>
    <br />
    <input type="submit" name="submit" value="Subir" />
</form>
-->
</br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdmin">
<i class="fas fa-user-plus"></i> Añadir Usuario
</button>

<!-- Modal -->
<div class="modal fade" id="modalAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdminLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>







    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
  </body>
</html>