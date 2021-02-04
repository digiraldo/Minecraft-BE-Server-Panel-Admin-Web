<?php
  $jsonTemp = file_get_contents(__DIR__ . '../../../config/tmp.json');
  $tmp = json_decode($jsonTemp, true);

  if ($tmp[0]['id_rol'] != 1)
  {
    header("location: ../../log.php");
 }

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
     <!-- https://codepen.io/nisharg/pen/mdJmywW -->
    <style type="text/css" media="screen">
      @import '../includes/css/checkbox.css';
    </style>
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

<!-- Inicio cardbody -->
<div class="card-body">
<!-- Inicio Tarjeta respaldo mundo -->
<div class="card text-center card text-white bg-dark border-info mb-3">
  <div class="card-header">
  <div class="card-header"><b><?php echo $data[12]['name']; ?></b> <i><?php echo $data[13]['spain']; ?></i> <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?><br/>
  </div>
  <div class="card-body">
    <h5 class="card-title">

    <form method="POST" action="CargarFicheros.php" enctype="multipart/form-data">
<div class="form-group">
    <label class="btn btn-outline-secondary" for="my-file-selector">
      <input required="" type="file" name="file" id="exampleInputFile">
      <button class="btn btn-info" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>                            
</div>
</form>

<!-- Inicio Respaldos Automaticos mundo -->
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
        <form method="POST" action="" enctype="multipart/form-data">
        <button value="btnCopia" class="btn btn-secondary" type="submit" name="accion"><i class="fas fa-folder-plus"></i> Realizar Respaldo</button>
          <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              echo $btnaccion; 
            }
            else {
              echo $data[14]['data'];
            }
          ?>
        </form>
        </div>
        <div class="col-md-auto">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="custom-control custom-switch custom-switch-md">
            <input type="checkbox" class="custom-control-input" name="CopiaSw" id="CopiaSw" <?php echo $data[14]['btn']; ?>>
            <label class="custom-control-label" for="CopiaSw" data-toggle="tooltip" data-placement="top" title="<?php echo $data[14]['data']; ?>"><?php echo $data[14]['spain']; ?></label>
            <button name="accion" type="submit" value="btnCopiaSw" class="btn btn-outline-light btn-sm badge-pill" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
          </div>
        </form>
        </div>
        <div class="col-md-auto">
            Respaldos:
            <span class="badge badge-info badge-pill"> <?php  echo $respaldos; ?></span>
        </div>
    </div>
<!-- Fin Respaldos Automaticos mundo -->
</div>

  </div>
  <div class="card-footer text-muted">
  <b><?php echo $data[14]['name']; ?></b> <i><?php echo $data[14]['icon']; ?></i> <?php echo $data[14]['spain']; ?>
  </div>
<!-- Fin Tarjeta respaldo mundo -->
</div>

<!-- Fin cardbody -->
</div>




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
                <th width="3%" scope="col">#</th> <!--<th width="7%" scope="col">#</th>-->
                <th scope="col">Nombre de Respaldo</th>
                <th width="4%" scope="col">Acciones</th> <!--<th width="10%" scope="col">Acciones</th>-->
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
  


    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->

</html>