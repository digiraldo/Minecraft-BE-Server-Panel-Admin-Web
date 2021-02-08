<?php
require '../includes/_login.php';
/**/
if ($datalogin[$key]['id_rol'] != 1) {
  header("location: ../../index.php");
}

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="";
    $active_admin="";
    $active_mundo="";
    $active_backups="";
    $active_propiedades="";
    $active_logs="active";	
    $title="Minecraft SRV | Simple Invoice"; 


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registros</title>
    <?php include "../includes/scripts.php" ?>

  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Registros</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>

<div class="container">
    <form action="index.php" method="post" enctype="multipart/form-data">

    <div class="card text-center">
  <div class="card-header">
    <b>Ejecutar Acciones</b><br>
  </div>
  <div class="card-body">
    <h5 class="card-title">Control del Servidor</h5>
    <p class="card-text">
    <label for="validationServer01">Shell</label>
                <input type="text" name="command" value="" class="form-control" 
                        id="validationServer01" aria-describedby="validationServer01Feedback" required>
                <div id="validationServer01Feedback" class="invalid-feedback">
                </div>
                <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
    <div class="form-group">
    <?php 
    $command = $_POST['command'];
    echo "<pre>";
    echo shell_exec($command);
    echo "</pre>";   
    ?>
    </div>
    </p>
  </div>
  <div class="card-footer text-muted">
  Consola Shell
  </div>
</div>
</div>



<div class="container">
      <div class="section">
        <button type="button" class="btn btn-primary" id="botonLogs">Registros</button> 
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <!-- <th scope="col">#</th>
                <th scope="col">Nombre de Obción</th> -->
                <th scope="col">Logs o Registros</th>
              </tr>
            </thead>
		        <tbody id="registros">
              
            </tbody>
          </table>
      </div>
    </div>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
    
   <!-- <script src="includes/ajax1.js"> </script> -->
   <script src="../includes/js/logs.js"> </script>



  </body>
</html>