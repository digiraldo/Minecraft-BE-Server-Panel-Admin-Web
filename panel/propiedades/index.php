<?php

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="";
    $active_mundo="";
    $active_backups="";
    $active_propiedades="active";
    $active_logs="";	
    $title="Minecraft SRV | Simple Invoice"; 

    //if ($_POST) {
     // $prop = shell_exec('sudo sh dirname/minecraftbe/servername/prop.sh');
      //echo $prop;
   // }

    

  //  require 'propiedades.php';
      //obtenerPermisos();
      //$propiedades = obtenerPropiedades();
  //  $propiedades = propiedadesSrv();

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
    <li class="breadcrumb-item"><a href="../paginas/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Propiedades</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>


  <div class="container">
 <!--   <button type="button" class="btn btn-primary" id="boton"><i class="fas fa-user-plus"></i> Mostrar Propiedades</button>  -->
  <br>
      <div class="section">
      
        <table id="tablaPropiedades" class="table table-striped table-bordered" style="width:100%" action="" method="post" enctype="multipart/form-data">
            <thead>
              <tr>
                <!-- <th scope="col">Descripción</th> -->
                <th scope="col">Configuración</th>
              </tr>
            </thead>
		      <tbody>
           <!--  <?php foreach ($propiedades as $propiedad): ?>  -->
          
                <tr>
                  <td><?php echo shell_exec("sudo sh dirname/minecraftbe/servername/prop.sh"); ?></td>
                </tr>
           <!--    <?php endforeach;; ?> -->
          </tbody>
        </table>


      </div>
    </div>



    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
    




  </body>
</html>