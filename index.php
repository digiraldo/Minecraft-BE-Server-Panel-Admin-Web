<?php
require 'panel/includes/registro.php';

$jsoning = file_get_contents(__DIR__ . '/config/usradmin.json');
$datsignup = json_decode($jsoning, true);

$jsonS = file_get_contents(__DIR__ . '/config/log.json');
$dat = json_decode($jsonS, true);

$jsonString = file_get_contents(__DIR__ . '/config/usradmin.json');
$datalogin = json_decode($jsonString, true);

$filename = "config/usradmin.json";
if (file_exists($filename) && array_key_exists(0, $datsignup)) {
} else {
    header("Location: panel/includes/signup.php");
    exit;
}

$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
    header('location: panel/tablero/');
} else {

    if (!empty($_POST)) {
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = 'Ingrese Usuario y Contraseña';
        } else {
            //require_once "conexion/conection.php";
            // include ("conexion/conexion.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['usuario'] != '') {
                if ($dat[0]['id'] == '1' && $dat[0]['usuario'] == 'Panel' && $dat[0]['contra'] == 'Tcq4gqvllpshsh3up1pshsh3up1') {
                    $user = $_POST['usuario'];
                    $pass = md5($_POST['clave']);
                    foreach ($datalogin as $key => $value) {
                        if ($value['usuario'] == $user && $value['clave'] == $pass) {
                            $_SESSION['active'] = true;
                            $_SESSION['idUser'] = $datalogin[$key]['id'];
                            $_SESSION['nombre'] = $datalogin[$key]['nombre'];
                            $_SESSION['user'] = $datalogin[$key]['usuario'];
                            $_SESSION['pass'] = $datalogin[$key]['clave'];
                            $_SESSION['country'] = $datalogin[$key]['pais'];
                            $_SESSION['city'] = $datalogin[$key]['ciudad'];
                            $_SESSION['gamertag'] = $datalogin[$key]['gamertag'];
                            $_SESSION['id_rol'] = $datalogin[$key]['id_rol'];
                            $_SESSION['rol'] = $datalogin[$key]['rol'];
                            $_SESSION['contact'] = $datalogin[$key]['contacto'];
                            $_SESSION['date'] = $datalogin[$key]['fecha'];
                            $_SESSION['img'] = $datalogin[$key]['img'];

                            header('location: panel/tablero/');
                        } else {
                            $alert = 'Usuario y Contraseña incorrectos';
                            //session_destroy();
                        }
                    }
                }
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Panel Minecraft</title>
    <?php //include "panel/includes/scripts.php" ?>

    <link rel="stylesheet" type="text/css" href="panel/includes/css/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/solid.css">
    <script src="https://kit.fontawesome.com/1fe66d79f1.js" crossorigin="anonymous"></script>
    <!--
    <link rel="stylesheet" href="panel/includes/css/style_log.css">
    -->
</head>
<body>



<!-- Modal -->
<div class="modal fade" id="modalRegistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="modalRegistroLabel"><i class="fas fa-user-plus"></i> Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
      <div class="form-row"><!-- Formulario -->
      <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                            <div class="col-sm-6">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control <?php echo $erro['nombre'] ? 'is-invalid' : '' ?>" name="nombre" value="" placeholder="" id="nombre" requiere="">
                                <small id="emailHelp" class="form-text text-muted">Su Nombre.</small>
                                <div class="invalid-tooltip">
                                    <?php echo $erro['nombre']; ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="contacto">Contacto:</label>
                                <input type="text" name="contacto" value="" class="form-control" id="contacto">
                                <small id="emailHelp" class="form-text text-muted">Correo o usuario Telegram</small>
                                <div class="valid-tooltip">
                                Contacto
                                </div>
                            </div>


                            <div class="col-sm-7">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control <?php echo $erro['usuario'] ? 'is-invalid' : '' ?>" name="usuario" value="" placeholder="" id="usuario" requiere="">
                                <small id="emailHelp" class="form-text text-muted">Usuario de Inicio de Sesión</small>
                                <div class="invalid-tooltip">
                                <?php echo $erro['usuario']; ?>
                                </div>
                            </div>

                            <div class="col-sm-5">
                                <label for="clave">Contraseña:</label>
                                <input type="password" class="form-control <?php echo $erro['clave'] ? 'is-invalid' : '' ?>" name="clave" value="" placeholder="" id="clave" requiere="">
                                <small id="emailHelp" class="form-text text-muted">Contraseña Inicio de Sesión</small>
                                <div class="invalid-tooltip">
                                <?php echo $erro['clave']; ?>
                                </div>
                            </div>


                            <div class="col-sm-5">
                                <label for="pais">Pais:</label>
                                <input type="text" name="pais" value="" class="form-control" id="pais">
                                <small id="emailHelp" class="form-text text-muted">País de Residencia.</small>
                                <div class="valid-tooltip">
                                País de residencia
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <label for="gamertag">Gamertag:</label>
                                <input type="text" name="gamertag" class="form-control <?php echo $erro['gamertag'] ? 'is-invalid' : '' ?>" id="gamertag">
                                <small id="emailHelp" class="form-text text-muted">Usuario Minecraaft o Cuenta de Microsoft.</small>
                                <div class="invalid-tooltip">
                                <?php echo $erro['gamertag']; ?>
                                </div>
                            </div>

                            <!-- Mostrar imagen en el Modal -->

                            <div class="col-sm-12">
                                <label for="">Imágen:</label>
                                <img class="border border-secondary rounded border mx-auto d-block" src="panel/includes/img/perfil/usuario.png" width="250" name="Imagen">
                                <br />
                                <!-- Mostrar imagen en el Modal
                                <input type="file" class="form-control" accept="image/*" name="img" value="<?php echo $textImagenU; ?>" placeholder="" id="textImagenU" requiere="">
                                -->
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">
                                            <a href="#" id="imgtool_old" data-bs-toggle="tooltip" data-bs-placement="right" title="<img class='rounded-lg' width='150px'  src='panel/includes/img/perfil/usuario.png' border='0' name='Imagen' /><br/>Imágen Predeterminada">
                                                <img class="rounded-circle" width="25px" height="25px" src="panel/includes/img/perfil/usuario.png" /></a>
                                        </label>
                                    </div>
                                    <form method="get">
                                        <select type="file" name="img" class="custom-select" id="inputGroupSelect01" onchange="cambiarA(this)">
                                            <option value="">Seleccionar Imagen</option>
                                            <option value="0">Araña</option>
                                            <option value="1">Araña Cueva</option>
                                            <option value="2">Cerdo</option>
                                            <option value="3">Creeper</option>
                                            <option value="4">Enderman</option>
                                            <option value="5">Esqueleto</option>
                                            <option value="6">Granjero</option>
                                            <option value="7">Lobo</option>
                                            <option value="8">Oveja</option>
                                            <option value="9">Steve</option>
                                            <option value="10">Usuario</option>
                                            <option value="11">Vaca</option>
                                            <option value="12">Zombie</option>
                                        </select>
                                    </form>

                                </div>
                                <small id="emailHelp" class="form-text text-muted">Seleccionar Imágen para el Perfil.</small>
                            </div>

                        </div><!-- Fin formulario -->

      
      </div>
      <div class="modal-footer">
        <button value="btnAgregar" <?php echo $accionAgregar;?> class="col-4 btn btn-success" type="submit" name="id"><i class="fas fa-plus"></i> Registrarse</button>
      </div>
      </form>
    </div>
  </div>
</div>



    <!-- Modal -->
    <div class="modal fade" id="modalRegistro_null" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRegistroLabel"><i class="fas fa-user-plus"></i> Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        
                        <div class="form-row"><!-- Formulario -->
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control <?php echo $erro['nombre'] ? 'is-invalid' : '' ?>" name="nombre" value="" placeholder="" id="nombre" requiere="">
                                <small id="emailHelp" class="form-text text-muted">Su Nombre.</small>
                                <div class="invalid-tooltip">
                                    <?php echo $erro['nombre']; ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contacto">Contacto:</label>
                                <input type="text" name="contacto" value="" class="form-control" id="contacto">
                                <small id="emailHelp" class="form-text text-muted">Correo o usuario Telegram</small>
                                <div class="valid-tooltip">
                                Contacto
                                </div>
                            </div>


                            <div class="form-group col-md-7">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control <?php echo $erro['usuario'] ? 'is-invalid' : '' ?>" name="usuario" value="" placeholder="" id="usuario" requiere="">
                                <small id="emailHelp" class="form-text text-muted">Usuario de Inicio de Sesión</small>
                                <div class="invalid-tooltip">
                                <?php echo $erro['usuario']; ?>
                                </div>
                            </div>

                            <div class="form-group col-md-5">
                                <label for="clave">Contraseña:</label>
                                <input type="password" class="form-control <?php echo $erro['clave'] ? 'is-invalid' : '' ?>" name="clave" value="" placeholder="" id="clave" requiere="">
                                <small id="emailHelp" class="form-text text-muted">Contraseña de Inicio de Sesión</small>
                                <div class="invalid-tooltip">
                                <?php echo $erro['clave']; ?>
                                </div>
                            </div>


                            <div class="form-group col-md-5">
                                <label for="pais">Pais:</label>
                                <input type="text" name="pais" value="" class="form-control" id="pais">
                                <small id="emailHelp" class="form-text text-muted">País de Residencia.</small>
                                <div class="valid-tooltip">
                                País de residencia
                                </div>
                            </div>

                            <div class="form-group col-md-7">
                                <label for="gamertag">Gamertag:</label>
                                <input type="text" name="gamertag" class="form-control <?php echo $erro['gamertag'] ? 'is-invalid' : '' ?>" id="gamertag">
                                <small id="emailHelp" class="form-text text-muted">Usuario Minecraaft o Cuenta de Microsoft.</small>
                                <div class="invalid-tooltip">
                                <?php echo $erro['gamertag']; ?>
                                </div>
                            </div>

                            <!-- Mostrar imagen en el Modal -->

                            <div class="form-group col-md-12">
                                <label for="">Imágen:</label>
                                <img class="border border-secondary rounded border mx-auto d-block" src="panel/includes/img/perfil/usuario.png" width="250" name="Imagen">
                                <br />
                                <!-- Mostrar imagen en el Modal
                                <input type="file" class="form-control" accept="image/*" name="img" value="<?php echo $textImagenU; ?>" placeholder="" id="textImagenU" requiere="">
                                -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="<img class='rounded-lg' width='150px'  src='panel/includes/img/perfil/usuario.png' border='0' name='Imagen' /><br/>Imágen Predeterminada">
                                                <img class="rounded-circle" width="25px" height="25px" src="panel/includes/img/perfil/usuario.png" /></a>
                                        </label>
                                    </div>
                                    <form method="get">
                                        <select type="file" name="img" class="custom-select" id="inputGroupSelect01" onchange="cambiarA(this)">
                                            <option value="">Seleccionar Imagen</option>
                                            <option value="0">Araña</option>
                                            <option value="1">Araña Cueva</option>
                                            <option value="2">Cerdo</option>
                                            <option value="3">Creeper</option>
                                            <option value="4">Enderman</option>
                                            <option value="5">Esqueleto</option>
                                            <option value="6">Granjero</option>
                                            <option value="7">Lobo</option>
                                            <option value="8">Oveja</option>
                                            <option value="9">Steve</option>
                                            <option value="10">Usuario</option>
                                            <option value="11">Vaca</option>
                                            <option value="12">Zombie</option>
                                        </select>
                                    </form>

                                </div>
                                <small id="emailHelp" class="form-text text-muted">Seleccionar Imágen para el Perfil.</small>
                            </div>

                        </div><!-- Fin formulario -->

                    </div>
                
                

                <div class="modal-footer">
                    <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="id"><i class="fas fa-plus"></i> Registrarse</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Fin Modal -->
    <!--
    <label for="">Imágen:
        <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='panel/includes/img/perfil/usuario.png' />">
            <img class="rounded-circle" width="35px" height="35px" src="panel/includes/img/perfil/usuario.png" /></a>
    </label>
 -->
    <section id="container">
        <div class="content">
            <form method="post" name="login_form" id="login_form" action="" onsubmit="enviar(this); return false;">
                <img src="panel/includes/img/Minecraft_Logo.png" alt="login">
                <input type="text" name="usuario" placeholder="Usuario" id="usuario" autocomplete>
                <input type="password" name="clave" placeholder="Contraseña" id="clave" autocomplete>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <?php echo isset($alert) ? $alert : ''; ?>
                </div>
                <button id="btn" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
                <!-- Button trigger modal -->
                <button id="btn" type="button" class="btn btn-transparent text-white btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistro">
                <i class="fas fa-user-plus"></i> Registrar
                </button>
            </form>
        </div>
    </section>


    <script>
        var _img = new Array();
        _img[0] = new Image();
        _img[0].src = "panel/includes/img/perfil/arana.png";
        _img[1] = new Image();
        _img[1].src = "panel/includes/img/perfil/arana_cueva.png";
        _img[2] = new Image();
        _img[2].src = "panel/includes/img/perfil/cerdo.png";
        _img[3] = new Image();
        _img[3].src = "panel/includes/img/perfil/creeper.png";
        _img[4] = new Image();
        _img[4].src = "panel/includes/img/perfil/enderman.png";
        _img[5] = new Image();
        _img[5].src = "panel/includes/img/perfil/esqueleto.png";
        _img[6] = new Image();
        _img[6].src = "panel/includes/img/perfil/granjero.png";
        _img[7] = new Image();
        _img[7].src = "panel/includes/img/perfil/lobo.png";
        _img[8] = new Image();
        _img[8].src = "panel/includes/img/perfil/oveja.png";
        _img[9] = new Image();
        _img[9].src = "panel/includes/img/perfil/steve.png";
        _img[10] = new Image();
        _img[10].src = "panel/includes/img/perfil/usuario.png";
        _img[11] = new Image();
        _img[11].src = "panel/includes/img/perfil/vaca.png";
        _img[12] = new Image();
        _img[12].src = "panel/includes/img/perfil/zombie.png";

        function cambiarA(_obj) {
            if (!_obj) return;
            var _index = _obj.selectedIndex;
            if (!_index) return;
            var _item = _obj[_index].value;
            if (!_item) return;
            if (_item < 0 || _item >= _img.length) return;
            document.images["Imagen"].src = _img[_item].src;
        }


        $('.alert').alert()

        function Confirmar(Mensaje) {
            return (confirm(Mensaje)) ? true : false
        }
    </script>


<script>
            var options = {animation : true,};
            var element = document.getElementById( 'imgtool' );
            var tooltip = new bootstrap.Tooltip( element, options );
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

    <?php //include 'panel/includes/footer.php' ?>
    <?php include 'panel/includes/modal.php' ?>
</body>

</html>