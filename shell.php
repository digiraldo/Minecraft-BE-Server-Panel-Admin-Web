<?php
session_start();
if ($_SESSION['id_rol'] != 0) {
header("location: ../../");
}

$active_tablero = "";
$active_whitelist = "";
$active_permisos = "";
$active_admin = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "";
$active_logs = "active";
$title = "Minecraft SRV | Simple Invoice";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
$error = array();

switch ($accion) {
        // REalizar Copia de Serguridad
        case 'btnCopia':
          $txtCopia = shell_exec("sudo zip -r dirname/minecraftbe/panel/config/$(date +%d.%m.%Y_%H\:%M\:%S_servername).zip dirname/minecraftbe");
          $btnaccion = 'Respaldo o copia de seguridad manual realizado con exito';
          unset($_POST);
          unset($_REQUEST);
          header("Location: " . $_SERVER['PHP_SELF']);
          break;
}


include "panel/includes/scripts.php";

function listadoDirectorio($directorio){
  $listado = scandir($directorio);
  unset($listado[array_search('.', $listado, true)]);
  unset($listado[array_search('..', $listado, true)]);
  if (count($listado) < 1) {
      return;
  }
  foreach($listado as $elemento){
    if(!is_dir($directorio.'/'.$elemento)) {
        echo "<li><i class='fas fa-minus'></i> <a href='$directorio/$elemento'>$elemento</a></li>";
      }
      if(is_dir($directorio.'/'.$elemento)) {
        echo '<li class="open-dropdown"><i class="fas fa-plus"></i> '.$elemento.'</li>';
      echo '<ul class="dropdown d-none">';
          listadoDirectorio($directorio.'/'.$elemento);
      echo '</ul>';
      }
  }
}

if ($_GET['stop']) {
  # This code will run if ?run=true is set.
  exec("dirname/minecraftbe/servername/stop.sh");
}

if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("dirname/minecraftbe/servername/start.sh");
}

if ($_GET['restart']) {
  # This code will run if ?run=true is set.
  exec("dirname/minecraftbe/servername/restart.sh");
}
?>





<!doctype html>
<html lang="es">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consola</title>
  <?php  ?>
	<script>
		$(document).ready(function(){
		  $(".open-dropdown").click(function(){
		    $(this).next( "ul.dropdown" ).toggleClass('d-none');
		  });
		});
	</script>
</head>

<body>


  <div class="container">
    <form action="shell.php" method="post" enctype="multipart/form-data">

      <div class="card text-center text-white bg-secondary">
        <div class="card-header">
          <b>Ejecutar Acciones</b><br>
        </div>
        <div class="card-body">
          <h5 class="card-title">Control del Servidor</h5>
          <p class="card-text text-warning">
            <label for="validationServer01">Shell</label>
            <input type="text" name="command" value="" class="form-control" id="validationServer01" aria-describedby="validationServer01Feedback" required>
          <div id="validationServer01Feedback" class="invalid-feedback">
          </div>
          <button value="btnIniciar" class="btn btn-success" type="submit" name="accion"><i class="fas fa-play"></i> Iniciar</button>
          <div class="form-group">
            <h5 class="text-warning text-left">
              <?php
              if (empty($_POST['command'])) {

              } else {
              $command = $_POST['command'];
              echo "<pre>";
              echo shell_exec($command);
              echo "</pre>";
              }
              

              ?>
            </h5>
          </div>
          </p>
        </div>
        <div class="card-footer text-muted">
          <a href="panel/mundo/" value="btnCerrar" class="btn btn-danger" type="submit" name="accion"><i class="fas fa-close"></i> Cerrar Consola</a>
          <a href="archivos.php" value="btnCerrar" class="btn btn-warning" type="submit" name="accion"><i class="fas fa-close"></i> Gestión Archivos</a>
         </div>
        <div class="card-footer text-muted">
           
           
          <a href="?stop=true" class="btn btn-danger" type="submit" name="stop"><i class="fas fa-stop"></i> Detener</a>
          <a href="?run=true" class="btn btn-success" type="submit" name="run"><i class="fas fa-play"></i> Iniciar</a>
           <a href="?restart=true" class="btn btn-info" type="submit" name="restart"><i class="fas fa-redo-alt"></i> Reiniciar</a>
        <!-- This link will add ?run=true to your URL, myfilename.php?run=true
        <a href="">Reiniciar</a>
         -->
        </div>
      </div>
    </form>


    <div class="card-footer text-muted">
          <div class="container-fluid"><!-- Inicio Respaldo web -->
  <div class="row justify-content-md-center">
    <div class="col-md-auto">
      <form method="POST" action="" enctype="multipart/form-data">
        <button value="btnCopia" class="btn btn-secondary justify-content-md-center" type="submit" name="accion"><i class="fas fa-folder-plus"></i> Realizar Respaldo de todo el Servidor</button>
        <?php
if (empty($btnaccion)) {
echo '';
} else {
echo $btnaccion;
}
        ?>
      </form>
    </div>
  </div>
 
</div> <!-- Fin Respaldos Automaticos mundo -->
        </div>

<br>

   <!--tabla-->
   <div class="panel panel-primary">
      <div class="panel-heading">
        <!--<h6 class="panel-title">Respaldos Disponibles</h6>-->
      </div>
      <div class="panel-body">
         <button type="button" class="btn btn-primary" id="">Archivos de Configuración</button> 
         <form method="POST" action="panel/mundo/CargarFicherosConfi.php" enctype="multipart/form-data">
  <div class="form-group">
    <label class="btn btn-outline-secondary" for="my-file-selector">
      <input required="" type="file" name="file" id="exampleInputFile">
      <button class="btn btn-info" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>
  </div>
</form>
         <table id="tablaRespaldos" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th width="3%" scope="col">#</th>
              <!--<th width="7%" scope="col">#</th>-->
              <th scope="col">Nombre Archivo</th>
              <th width="26%" scope="col">Acciones</th>
              <!--<th width="10%" scope="col">Acciones</th>-->
            </tr>
          </thead>
          <tbody id="respaldos">
            <?php
            $archivos = scandir("config");
            $num = 0;
            for ($i = 2; $i < count($archivos); $i++) {
              $num++;
            ?>
              <p>
              </p>
              <tr>
                <th scope="row"><?php echo $num; ?></th>
                <td><?php echo $archivos[$i]; ?></td>
                <td>
                  <a href="config/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-download"></i></a>                  
                  <form style="display: inline-block" method="POST" action="panel/propiedades/ver_archivo.php">
                    <input type="hidden" name="log" value="<?php echo $archivos[$i] ?>">
                    <input type="hidden" name="num" value="<?php echo $num ?>">
                    <button value="log" data-toggle="tooltip" data-placement="top" title="Ver Archivo # <?php echo $num; ?>" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></button>
                  </form>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>

<br>

        <!--<h6 class="panel-title">Respaldos Disponibles</h6>-->

      <div class="panel-body">
        <button type="button" class="btn btn-primary" id="botonLogs">Archivos del Servidor</button>
        <form method="POST" action="panel/mundo/CargarFicheros.php" enctype="multipart/form-data">
  <div class="form-group">
    <label class="btn btn-outline-secondary" for="my-file-selector">
      <input required="" type="file" name="file" id="exampleInputFile">
      <button class="btn btn-info" type="submit"><i class="fas fa-upload"></i> Cargar Fichero</button>
    </label>
  </div>
</form>
        <table id="tablaRespaldos" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th width="3%" scope="col">#</th>
              <!--<th width="7%" scope="col">#</th>-->
              <th scope="col">Nombre Archivo</th>
              <th width="26%" scope="col">Acciones</th>
              <!--<th width="10%" scope="col">Acciones</th>-->
            </tr>
          </thead>
          <tbody id="respaldos">
            <?php
            $archivosSrv = scandir("servername");
            $num = 0;
            for ($i = 2; $i < count($archivosSrv); $i++) {
              $num++;
            ?>
              <p>
              </p>
              <tr>
                <th scope="row"><?php echo $num; ?></th>
                <td><?php echo $archivosSrv[$i]; ?></td>
                <td>
                  <a href="servername/<?php echo $archivosSrv[$i]; ?>" download="<?php echo $archivosSrv[$i]; ?>" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-download"></i></a>                  
                  <form style="display: inline-block" method="POST" action="panel/propiedades/ver_archivo_srv.php">
                    <input type="hidden" name="log" value="<?php echo $archivosSrv[$i] ?>">
                    <input type="hidden" name="num" value="<?php echo $num ?>">
                    <button value="log" data-toggle="tooltip" data-placement="top" title="Ver Archivo # <?php echo $num; ?>" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></button>
                  </form>
                  <a href="panel/mundo/eliminar.php?name=../../servername/<?php echo $archivosSrv[$i]; ?>" value="Seleccionar" onclick="return Confirmar('Realmente desea eliminar <?php echo $archivosSrv[$i]; ?> del Servidor servername? :(');"data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
 

    </div>


  <ul>
		<?php listadoDirectorio('../minecraftbe'); ?>
	</ul>



  </div>


  
 

  <?php include 'panel/includes/footer.php' ?>
  <!-- php include '../includes/modal.php'?> -->


  <!-- <script src="includes/ajax1.js"> </script> -->
  <script src="panel/includes/js/logs.js"> </script>



</body>

</html>