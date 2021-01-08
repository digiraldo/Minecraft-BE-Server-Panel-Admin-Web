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


$myFile = "../../servername/server.properties";
$lines = file($myFile);//file in to an array
//echo $lines[0];
//echo $lines[4];
//echo $lines[8]; //line 2

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Propiedades</title>
    <?php include "../includes/scripts.php" ?>
  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Propiedades</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>


<p>
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Propiedades del Servidor</h5>
    <p class="card-text">Aqui puede editar las configuraciones del servidor, recuerde reiniciar el servidor para que surta efecto.</p>
    <div class="card-footer text-muted">
    Servidor configurado: servername
    </div>
<p/>

<div class="card-deck">
<div class="card text-white bg-primary mb-3">
    <div class="card-header"><?php echo $lines[0]; ?></div>
     <div class="card-body">
      <h5 class="card-title">Nombre del Servidor</h5>
      <p class="card-text">Este es el nombre del servidor que se muestra en la lista de servidores del juego.</p>
    </div>
    <div class="card-footer">
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control form-control-sm" id="inputName" placeholder="Nombre">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>

  <div class="card text-white bg-secondary mb-3">
    <div class="card-header"><?php echo $lines[54]; ?></div>
      <div class="card-body">
      <h5 class="card-title">Nombre del Nivel</h5>
      <p class="card-text">El valor de "nombre de nivel" se utiliza como el nombre del mundo y su nombre de carpeta.</p>
    </div>
    <div class="card-footer">
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control form-control-sm" id="inputNivel" placeholder="Nombre">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>

<div class="card text-white bg-success mb-3">
    <div class="card-header"><?php echo $lines[12]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Usar Trucos</h5>
      <p class="card-text">Si es verdadero, entonces se pueden usar trucos como comandos.</p>
    </div>
    <div class="card-footer">
          <form>
            <div class="form-row">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Activar para usar trucos</label>
                  </div>
              <div class="col">
              <!--  <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>  -->
              </div>
            </div>
          </form>
    </div>
  </div>
</div>



<div class="card-deck">
  <div class="card text-white bg-danger mb-3">
  <div class="card-header"><?php echo $lines[4]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Modo de Juego</h5>
      <p class="card-text">Establece el modo de juego para nuevos jugadores.</p>
    </div>
    <div class="card-footer">       
          <form>
            <div class="form-row">
              <div class="col">
                  <select class="custom-select custom-select-sm">
                    <option selected>Seleccionar...</option>
                    <option value="gamemode=survival">Supervivencia</option>
                    <option value="gamemode=creative">Creativo</option>
                    <option value="gamemode=adventure">Aventura</option>
                  </select>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>

  <div class="card text-white bg-info mb-3">
  <div class="card-header"><?php echo $lines[8]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Difucultad</h5>
      <p class="card-text">Establece la dificultad del mundo.</p>
    </div>
    <div class="card-footer">
          <form>
            <div class="form-row">
              <div class="col">
                  <select class="custom-select custom-select-sm">
                    <option selected>Seleccionar...</option>
                    <option value="difficulty=peaceful">Pacífico</option>
                    <option value="difficulty=easy">Fácil</option>
                    <option value="difficulty=normal">Normal</option>
                    <option value="difficulty=hard">Difícil</option>
                  </select>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>

  <div class="card text-white bg-warning mb-3">
  <div class="card-header"><?php echo $lines[26]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Permiso Jugadores</h5>
      <p class="card-text">Si es verdadero, Los Jugadores deben aparecer en whitelist para ingresar al servidor.</p>
    </div>
    <div class="card-footer">
          <form>
            <div class="form-row">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Activar para permisos</label>
                  </div>
              <div class="col">
              <!--  <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>  -->
              </div>
            </div>
          </form>
    </div>
  </div>
</div>



<div class="card-deck">
  <div class="card text-white bg-success mb-3">
  <div class="card-header"><?php echo $lines[16]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Jugadores Máximos</h5>
      <p class="card-text">El número máximo de jugadores que pueden jugar en el servidor.</p>
    </div>
    <div class="card-footer">       
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control form-control-sm" id="inputMax" placeholder="Max. Jugadores">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>

  <div class="card text-white bg-dark mb-3">
  <div class="card-header"><?php echo $lines[57]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Número de Semilla</h5>
      <p class="card-text">Semilla o Nímero del Mundo, Si se deja vacío, se elige una semilla al azar.</p>
    </div>
    <div class="card-footer">
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control form-control-sm" id="inputSem" placeholder="No. Semilla">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>

  <div class="card text-white bg-primary mb-3">
  <div class="card-header"><?php echo $lines[30]; ?> - <?php echo $lines[34]; ?></div>
    <div class="card-body">
      <h5 class="card-title">Pueros del Servidor</h5>
      <p class="card-text">Si es verdadero, Los Jugadores deben aparecer en whitelist para ingresar al servidor.</p>
    </div>
    <div class="card-footer">
    <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control form-control-sm" id="inputIPV4" placeholder="Puerto IPV4">
              </div>
              <div class="col">
                <input type="text" class="form-control form-control-sm" id="inputIPV6" placeholder="Puerto IPV6">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-outline-lightbtn btn-outline-light btn-sm"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
    </div>
  </div>
</div>

</div>


    <?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->
    
    




  </body>
</html>