<?php

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