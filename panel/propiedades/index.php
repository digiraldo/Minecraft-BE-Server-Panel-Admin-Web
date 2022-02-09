<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

$active_tablero = "";
$active_allowlist = "";
$active_permisos = "";
$active_admin = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "active";
$active_logs = "";
$title = "Minecraft SRV | Simple Invoice";


//  require 'propiedades.php';
//obtenerPermisos();
//$propiedades = obtenerPropiedades();
//  $propiedades = propiedadesSrv();

require 'editar.php';
require '../respaldos/size.php';
require '../tablero/info.php';

// $df contiene el número de bytes disponibles en "/"
//$df = disk_free_space("/");
//$ds = disk_total_space("/");

// En Windows:
//$df_c = disk_free_space("C:");
//$df_d = disk_free_space("D:");



//echo $lines1[43];

?>

<!doctype html>
<html lang="es">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Propiedades</title>
  <!-- https://codepen.io/nisharg/pen/mdJmywW -->
  <style type="text/css" media="screen">
    @import '../includes/css/checkbox.css';
  </style>
  <?php include "../includes/scripts.php" ?>
</head>

<body>

  <?php include '../includes/navbar.php' ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="">Propiedades</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
  </nav>


  <div class="card-body">

    <div class="card-deck">
      <div class="card text-center border-info mb-3">
      <div class="card-header"><i><?php echo $data[12]['name']; ?> <?php echo $data[13]['spain']; ?>: </i> <b><?php echo $data[12]['spain']; ?></b> Puerto: <b><?php echo $data[8]['spain']; ?></b><br />
        <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) : ?>
        <div class="card-body text-info">
          <h5 class="card-title">Propiedades del Servidor</h5>
          <p class="card-text text-success">Aqui puede editar las configuraciones del servidor, recuerde reiniciar el servidor para que surta efecto.</p>
        </div>
        <div class="card-footer text-muted">
        <a href="reglas.php" type="submit" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-tasks'></i> Editar Reglas o Normas">Editar: <?php echo $data[18]['name'] ?></a>
        <a href="alertas.php" type="submit" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-comment-alt'></i> Editar Alertas o Notificaciones">Editar: Alertas</a>
        <a href="ver_propiedades.php" type="submit" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-database'></i> server.properties">Ver Archivo: server.properties</a>
        
        </div>
        <?php else : ?>
              
        <?php endif ?>
      </div>
    </div>
    </div>

<?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1) : ?>

    <div class="card-deck">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header"><?php echo $lines[0]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Nombre del Servidor: <?php echo $data[0]['spain']; ?></h5>
          <p class="card-text">Este es el nombre del servidor que se muestra en la lista de servidores del juego.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="text" name="inputName" class="form-control form-control-sm" id="inputName" placeholder="<?php echo $data[0]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btninputName" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-secondary mb-3">
        <div class="card-header"><?php echo $lines[64]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Nombre del Nivel: <?php echo $data[1]['btn']; ?> <?php echo $data[1]['spain']; ?></h5>
          <p class="card-text">El valor de "nombre de nivel" se utiliza como el nombre del mundo y su nombre de carpeta.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="text" name="LevelName" class="form-control form-control-sm" id="LevelName" placeholder="<?php echo $data[1]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnLevelName" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-success mb-3">
        <div class="card-header"><?php echo $lines[22]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Usar Trucos: <?php echo $data[2]['icon']; ?></h5>
          <p class="card-text">Si es verdadero, entonces se pueden usar trucos como comandos.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data" id="resetPost">
            <div class="form-row">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name="UsarTruco" id="UsarTruco" <?php echo $data[2]['btn']; ?>>
                <label class="custom-control-label" for="UsarTruco"><?php echo $data[2]['spain']; ?></label>
              </div>
              <div class="col">
                <button name="accion" type="submit" value="btnUsarTruco" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
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
          <h5 class="card-title">Modo de Juego: <?php echo $data[3]['spain']; ?></h5>
          <p class="card-text">Establece el modo de juego para nuevos jugadores.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <select type="text" class="custom-select custom-select-sm" name="Gamemode" id="Gamemode" value="<?php echo $txtGamemode; ?>" placeholder="" required="">
                  <option selected><?php echo $data[3]['spain']; ?></option>
                  <option value="survival">Supervivencia</option>
                  <option value="creative">Creativo</option>
                  <option value="adventure">Aventura</option>
                </select>
              </div>
              <div class="col">
                <button name="accion" value="btnGamemode" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-info mb-3">
        <div class="card-header"><?php echo $lines[18]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Difucultad: <?php echo $data[4]['spain']; ?></h5>
          <p class="card-text">Establece la dificultad del mundo.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <select class="custom-select custom-select-sm" name="Dificultad" id="Dificultad">
                  <option selected><?php echo $data[4]['spain']; ?></option>
                  <option value="peaceful">Pacífico</option>
                  <option value="easy">Fácil</option>
                  <option value="normal">Normal</option>
                  <option value="hard">Difícil</option>
                </select>
              </div>
              <div class="col">
                <button name="accion" value="btnDificultad" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-warning mb-3">
        <div class="card-header"><?php echo $lines[36]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Permiso Jugadores: <?php echo $data[5]['icon']; ?></h5>
          <p class="card-text">Si es verdadero, Los Jugadores deben aparecer en allowlist para ingresar al servidor.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data" id="resetPost">
            <div class="form-row">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name="Allowlist" id="Allowlist" <?php echo $data[5]['btn']; ?>>
                <label class="custom-control-label" for="Allowlist"><?php echo $data[5]['spain']; ?></label>
              </div>
              <div class="col">
                <button name="accion" type="submit" value="btnAllowlist" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>



    <div class="card-deck">
      <div class="card text-white bg-success mb-3">
        <div class="card-header"><?php echo $lines[26]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Jugadores Máximos: <?php echo $data[6]['icon']; ?></h5>
          <p class="card-text">El número máximo de jugadores que pueden jugar en el servidor.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="number" name="GamerMax" class="form-control form-control-sm" id="GamerMax" placeholder="<?php echo $data[6]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnGamerMax" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-dark mb-3">
        <div class="card-header"><?php echo $lines[67]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Número de Semilla: <?php echo $data[7]['btn']; ?> <?php echo $data[7]['spain']; ?></h5>
          <p class="card-text">Semilla o Número del Mundo, Si se deja vacío, se elige una semilla al azar.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="number" name="Semilla" class="form-control form-control-sm" id="Semilla" placeholder="<?php echo $data[7]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnSemilla" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-primary mb-3">
        <div class="card-header"><?php echo $lines[40]; ?> - <?php echo $lines[44]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Pueros: IpV4: <?php echo $data[8]['spain']; ?> - IpV6: <?php echo $data[9]['spain']; ?></h5>
          <p class="card-text">Configurar los puertos IpV4 e IpV6. Pedeterminado(IpV4=19132 - IpV6=19133)</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <!-- <label for="Ipv4">Ipv4</label> -->
                <input type="number" name="Ipv4" class="form-control form-control-sm" id="Ipv4" placeholder="<?php echo $data[8]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnIpv4" type="submit" class="btn btn-outline-lightbtn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
              <div class="col">
                <!-- <label for="Ipv6">Ipv6</label> -->
                <input type="number" name="Ipv6" class="form-control form-control-sm" id="Ipv6" placeholder="<?php echo $data[9]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnIpv6" type="submit" class="btn btn-outline-lightbtn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card-deck">
      <div class="card text-white bg-secondary mb-3">
        <div class="card-header"><?php echo $data[10]['name']; ?> <?php echo $data[10]['btn']; ?>
          <button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="top" title="<i class='fas fa-gamepad'></i> <?php echo $data[0]['spain']; ?>" data-content="<i class='fas fa-language'></i> es_ES: <?php echo $lines2[2312]; ?><br><i class='fas fa-language'></i> es_MX: <?php echo $lines3[2312]; ?>">
            Ver
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Acceso al Servidor: <?php echo $data[10]['icon']; ?> <?php echo $data[10]['spain']; ?></h5>
          <p class="card-text">Introduce url o servidor de Discord.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="text" name="Discord" class="form-control form-control-sm" id="Discord" placeholder="<?php echo $data[10]['data']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnDiscord" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-secondary mb-3">
        <div class="card-header"><?php echo $data[16]['name']; ?> <?php echo $data[16]['btn']; ?>
          <button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="top" title="<i class='fas fa-gamepad'></i> <?php echo $data[0]['spain']; ?>" data-content="<i class='fas fa-language'></i> es_ES: <?php echo $lines2[2312]; ?><br><i class='fas fa-language'></i> es_MX: <?php echo $lines3[2312]; ?>">
            Ver
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Acceso al Grupo: <?php echo $data[16]['icon']; ?> <?php echo $data[16]['spain']; ?></h5>
          <p class="card-text">Introduce url o grupo de Telegram.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="text" name="Telegram" class="form-control form-control-sm" id="Telegram" placeholder="<?php echo $data[16]['data']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnTelegram" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>


      <div class="card text-white bg-secondary mb-3">
        <div class="card-header"><?php echo $data[24]['name']; ?> <i class='fas fa-hdd'></i> <?php echo convert_filesize($df) ; ?> <?php //echo $df; ?>
        
          <a href="../respaldos/" type="button" class="btn btn-dark btn-sm" data-container="body" data-toggle="popover" data-placement="top" 
          title="<i class='fas fa-archive'></i> Almacenamiento" 
          data-content="<i class='fas fa-hdd'></i> Total Disco: <?php echo convert_filesize($ds); ?><br><i class='far fa-hdd'></i> Espacio Disco: <?php echo convert_filesize($df); ?><br><i class='fas fa-folder'></i> Respaldo: <?php echo convert_filesize($sizef); ?><br><i class='fas fa-archive' style='color: #<?php echo $colorIcono; ?>'></i> De: <?php echo convert_filesize($almacenamiento) ; ?><br><i class='fas fa-percentage'></i> Porcentaje: <?php echo $porcentaje; ?>%">
            Respaldos
          </a>


        </div>
        <div class="card-body">
          <h5 class="card-title">Espacio de Respaldo: <i class='fas fa-archive' style='color: #<?php echo $colorIcono; ?>'></i> <?php echo convert_filesize($almacenamiento) ; ?></h5>
          <div class="progress">
        <div class="progress-bar bg-<?php echo $colorPorcentaje; ?>" role="progressbar" style="width: <?php echo $porcentaje; ?>%;" aria-valuenow="<?php echo $ocupado; ?>" aria-valuemin="0" aria-valuemax="<?php echo $almacenamiento; ?>"><?php echo $porcentaje; ?>%</div>
        </div>

        <p class="card-text">Configurar almacenamiento para los respaldos.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="number" name="Espacio" class="form-control form-control-sm" id="Espacio" placeholder="<?php echo convert_filesize($almacenamiento) ; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnEspacio" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>

  <?php elseif ($_SESSION['id_rol'] == 2) : ?>

    <div class="card-deck">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header"><?php echo $lines[0]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Nombre del Servidor: <?php echo $data[0]['spain']; ?></h5>
          <p class="card-text">Este es el nombre del servidor que se muestra en la lista de servidores del juego.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="text" name="inputName" class="form-control form-control-sm" id="inputName" placeholder="<?php echo $data[0]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btninputName" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card text-white bg-warning mb-3">
        <div class="card-header"><?php echo $lines[18]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Difucultad: <?php echo $data[4]['spain']; ?></h5>
          <p class="card-text">Establece la dificultad del mundo.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <select class="custom-select custom-select-sm" name="Dificultad" id="Dificultad">
                  <option selected><?php echo $data[4]['spain']; ?></option>
                  <option value="peaceful">Pacífico</option>
                  <option value="easy">Fácil</option>
                  <option value="normal">Normal</option>
                  <option value="hard">Difícil</option>
                </select>
              </div>
              <div class="col">
                <button name="accion" value="btnDificultad" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

<!--
      <div class="card text-white bg-success mb-3">
        <div class="card-header"><?php echo $lines[22]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Usar Trucos: <?php echo $data[2]['icon']; ?></h5>
          <p class="card-text">Si es verdadero, entonces se pueden usar trucos como comandos.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data" id="resetPost">
            <div class="form-row">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name="UsarTruco" id="UsarTruco" <?php echo $data[2]['btn']; ?>>
                <label class="custom-control-label" for="UsarTruco"><?php echo $data[2]['spain']; ?></label>
              </div>
              <div class="col">
                <button name="accion" type="submit" value="btnUsarTruco" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
-->

    </div>

  <?php else : ?>

    <div class="container-fluid">
<div class="card">
    <div class="card-body text-white bg-dark">
        <h5 class="card-title"><?php echo $data[12]['icon']; ?> <?php echo $data[13]['name']; ?> <b><?php echo $data[13]['spain']; ?></b></h5>
        <div class="section">
        <table id="tablaUsuarios" class="table table-striped table-bordered text-white" style="width:100%">
        <tbody>
            <tr>
                <th scope="col"><?php echo $data[0]['name']; ?></th>
                <td><?php echo $data[0]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[1]['name']; ?></th>
                <td><?php echo $data[1]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[2]['name']; ?></th>
                <td><?php echo $data[2]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[3]['name']; ?></th>
                <td><?php echo $data[3]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[4]['name']; ?></th>
                <td><?php echo $data[4]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[5]['name']; ?></th>
                <td><?php echo $data[5]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[6]['name']; ?></th>
                <td><?php echo $data[6]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[7]['name']; ?></th>
                <td><?php echo $data[7]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[8]['name']; ?></th>
                <td><?php echo $data[8]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[9]['name']; ?></th>
                <td><?php echo $data[9]['spain'] ?></td>
            </tr>
            <?php if ($data[10]['btn'] == ""):  ?>
            <?php else : ?>
            <tr>
                <th scope="col"><?php echo $data[10]['name']; ?> <?php echo $data[10]['spain'] ?></th>
                <td><?php echo $data[10]['btn'] ?></td>
            </tr>
            <?php endif ?>
            <?php if ($data[16]['btn'] == ""):  ?>
            <?php else : ?>
            <tr>
                <th scope="col"><?php echo $data[16]['name']; ?> <?php echo $data[16]['spain'] ?></th>
                <td><?php echo $data[16]['btn'] ?></td>
            </tr>
            <?php endif ?>
            <tr>
                <th scope="col"><?php echo $data[12]['name']; ?></th>
                <td><?php echo $data[12]['spain'] ?> Puerto: <?php echo $data[8]['spain'] ?></td>
            </tr>
        </tbody>
        </table>
        </div>
    </div>
</div>
</div>

  <?php endif ?>

  <?php include '../includes/footer.php' ?>
  <!-- php include '../includes/modal.php'?> <script>$("#resetPost").submit()</script>-->



  <script>
    function reload(segs) {
      setTimeout(function() {
        location.reload();
      }, parseInt(segs) * 1000);
    }
  </script>



</body>

</html>