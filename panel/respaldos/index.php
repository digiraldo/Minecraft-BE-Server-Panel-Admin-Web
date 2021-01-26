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

    $directorio = "../../servername/backups";
    $archivos = scandir($directorio, 1);

    require 'editar.php';
    //print_r($archivos);
    //require 'CargarFicheros.php';
  //  $respaldo = $_POST['respaldo'];
  //  shell_exec($respaldo);  



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
    <li class="breadcrumb-item"><a href="">Respaldos</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>

<div class="container">
<div class="section">

<form method="POST" action="CargarFicheros.php" enctype="multipart/form-data">
<div class="form-group">
    <label class="btn btn-outline-info" for="my-file-selector">
      <input required="" type="file" name="file" id="exampleInputFile">
      <button class="btn btn-info" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>                            
</div>
</form>

<ul class="list-group list-group-horizontal-sm">
  <li class="list-group-item">
   <form method="POST" action="" enctype="multipart/form-data">                   
   <button value="btnCopia" class="btn btn-secondary btn-sm" type="submit" name="accion"><i class="fas fa-folder-plus"></i> Realizar Respaldo</button>
   <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo $btnaccion; 
}
else {
  echo $data[14]['data'];
}
?>
   </form>  
  </li>
  <li class="list-group-item">
  <form method="POST" action="" enctype="multipart/form-data">   
   <div class="custom-control custom-switch">
   <input type="checkbox" class="custom-control-input" name="CopiaSw" id="CopiaSw" <?php echo $data[14]['btn']; ?>>
   <label class="custom-control-label" for="CopiaSw" data-toggle="tooltip" data-placement="top" title="<?php echo $data[14]['data']; ?>"><?php echo $data[14]['spain']; ?></label>
   <button name="accion" type="submit" value="btnCopiaSw" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
   </div>
   </form>  
  </li>
</ul>









      <!--tabla-->
    <div class="panel panel-primary">
      <div class="panel-heading">
        <!--<h6 class="panel-title">Respaldos Disponibles</h6>-->
      </div>
      <div class="panel-body">
       <!-- <button type="button" class="btn btn-primary" id="botonLogs">Registros</button> -->
        <table id="tablaRespaldos" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th width="7%" scope="col">#</th>
                <th scope="col">Nombre de Respaldo</th>
                <th width="10%" scope="col">Acciones</th>
              </tr>
            </thead>
		        <tbody id="respaldos">
            <?php
                $archivos = scandir("../../servername/backups");
                $num=0;
                for ($i=2; $i<count($archivos); $i++)
                {$num++;
            ?>
                <p>  
                </p>
              <tr>
              <th scope="row"><?php echo $num;?></th>
              <td><?php echo $archivos[$i]; ?></td>
              <td>
              <a href="../../servername/backups/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-download"></i></a>
              <a href="eliminar.php?name=../../servername/backups/<?php echo $archivos[$i]; ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></a>
              </td>
              </tr>
            <?php }?> 

            </tbody>
          </table>
      </div>
    </div>

  </div>
</div>

    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->

</html>