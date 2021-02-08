<?php
require '../includes/login.php';
/**/
if ($datalogin[$key]['id_rol'] != 1) {
  header("location: ../../index.php");
}

$active_tablero = "";
$active_whitelist = "";
$active_permisos = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "active";
$active_logs = "";
$title = "Minecraft SRV | Simple Invoice";

//if ($_POST) {
// $prop = shell_exec('sudo sh dirname/minecraftbe/servername/prop.sh');
//echo $prop;
// }



//  require 'propiedades.php';
//obtenerPermisos();
//$propiedades = obtenerPropiedades();
//  $propiedades = propiedadesSrv();

require 'editar.php';

//echo $lines1[43];

?>

<!doctype html>
<html lang="en">

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
        <div class="card-header"><b><?php echo $data[12]['name']; ?></b> <i><?php echo $data[13]['spain']; ?></i> <?php echo $data[12]['spain']; ?> Puerto:<?php echo $data[8]['spain']; ?></div>
        <div class="card-body text-info">
          <h5 class="card-title">Propiedades del Servidor</h5>
          <p class="card-text text-success">Aqui puede editar las configuraciones del servidor, recuerde reiniciar el servidor para que surta efecto.</p>
        </div>
        <div class="card-footer text-muted">
          <a href="../tablero/ver_pro.php" type="submit" class="btn btn-outline-dark btn-sm" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-database'></i> <?php echo $data[13]['spain']; ?>">Ver Propiedades</a>
        </div>
      </div>
    </div>


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
        <div class="card-header"><?php echo $lines[54]; ?></div>
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
        <div class="card-header"><?php echo $lines[12]; ?></div>
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
        <div class="card-header"><?php echo $lines[8]; ?></div>
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
        <div class="card-header"><?php echo $lines[26]; ?></div>
        <div class="card-body">
          <h5 class="card-title">Permiso Jugadores: <?php echo $data[5]['icon']; ?></h5>
          <p class="card-text">Si es verdadero, Los Jugadores deben aparecer en whitelist para ingresar al servidor.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data" id="resetPost">
            <div class="form-row">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name="Whitelist" id="Whitelist" <?php echo $data[5]['btn']; ?>>
                <label class="custom-control-label" for="Whitelist"><?php echo $data[5]['spain']; ?></label>
              </div>
              <div class="col">
                <button name="accion" type="submit" value="btnWhitelist" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
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
        <div class="card-header"><?php echo $lines[57]; ?></div>
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
        <div class="card-header"><?php echo $lines[30]; ?> - <?php echo $lines[34]; ?></div>
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
        <div class="card-header"><?php echo $data[11]['spain']; ?>
          <button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="top" title="<i class='fas fa-gamepad'></i> <?php echo $data[10]['spain']; ?>" data-content="<i class='fas fa-language'></i> es_ES: <?php echo $lines2[2312]; ?><br><i class='fas fa-language'></i> es_MX: <?php echo $lines3[2312]; ?>">
            Ver
          </button>
        </div>
        <div class="card-body">
          <h5 class="card-title">Solicitud Acceso al Servidor: <?php echo $data[10]['spain']; ?></h5>
          <p class="card-text">Introduce url, grupo de Telegram o permiso de Discord para que el usuario lo vea al intentar acceder al Servidor y no tiene los permisos.</p>
        </div>
        <div class="card-footer">
          <form action="index.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col">
                <input type="text" name="Discord" class="form-control form-control-sm" id="Discord" placeholder="<?php echo $data[10]['spain']; ?>">
              </div>
              <div class="col">
                <button name="accion" value="btnDiscord" type="submit" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>


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