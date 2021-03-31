<?php
setlocale(LC_ALL, "es_ES");
date_default_timezone_set('America/Bogota');

$jsonString = file_get_contents(__DIR__ . '/config/usradmin.json');
$rdata = json_decode($jsonString, true);

$jsonS = file_get_contents(__DIR__ . '/config/log.json');
$dat = json_decode($jsonS, true);

foreach ($rdata as $key => $value) {
$codigo = (empty($rdata[$key]['numero']) ? 1 : $rdata[$key]['numero'] += 1);
}
//echo 'El codigo actual es: '.$codigo; 

$accion = (isset($_POST['id'])) ? $_POST['id'] : "";

$filename = "config/usradmin.json";
if (file_exists($filename) && array_key_exists(0, $rdata)) {
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
if ($dat[0]['id'] == '1' && $dat[0]['usuario'] == 'Panel_Admin_Minecraft_Bedrock' && $dat[0]['contra'] == 'Tcq4gqvllpshsh3up1pshsh3up1') {
$user = $_POST['usuario'];
$pass = md5($_POST['clave']);
foreach ($rdata as $key => $value) {
if ($value['usuario'] == $user && $value['clave'] == $pass) {
$_SESSION['active'] = true;
$_SESSION['number'] = $rdata[$key]['numero'];
$_SESSION['idUser'] = $rdata[$key]['id'];
$_SESSION['nombre'] = $rdata[$key]['nombre'];
$_SESSION['user'] = $rdata[$key]['usuario'];
$_SESSION['pass'] = $rdata[$key]['clave'];
$_SESSION['country'] = $rdata[$key]['pais'];
$_SESSION['city'] = $rdata[$key]['ciudad'];
$_SESSION['gamertag'] = $rdata[$key]['gamertag'];
$_SESSION['id_rol'] = $rdata[$key]['id_rol'];
$_SESSION['rol'] = $rdata[$key]['rol'];
$_SESSION['contact'] = $rdata[$key]['contacto'];
$_SESSION['date'] = $rdata[$key]['fecha'];
$_SESSION['img'] = $rdata[$key]['img'];
$_SESSION['n_img'] = $rdata[$key]['n_img'];

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

function getRegistro() {
return json_decode(file_get_contents(__DIR__ . '/config/usradmin.json'), true);
}

function getRegistroById($id) {
$registros = getRegistro();
foreach ($registros as $registro) {
if ($registro['id'] == $id) {
return $registro;
}
}
return null;
}

function createRegistro($data) {
$registros = getRegistro();
//$data['id'] = rand(1000000, 2000000);
$registros[] = $data;
putJson($registros);
return $data;
}

function putJson($registros) {
file_put_contents(__DIR__ . '/config/usradmin.json', json_encode($registros, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function validateRegistro($registro, &$errors) {
$isValid = true;
// Start of validation
if (!$registro['nombre']) {
$isValid = false;
$errors['nombre'] = 'El nombre es obligatorio';
}else {
$errors['nombre'] = 'Nombre:'.' '.$_POST['nombre'];
}
if (!$registro['usuario'] || strlen($registro['usuario']) < 4 || strlen($registro['usuario']) > 10) {
$isValid = false;
$errors['usuario'] = 'Obligatorio, debe tener más de 4 y menos de 10 caracteres';
}else {
$errors['usuario'] = 'Usuario:'.' '.$_POST['usuario'];
}
if (!$registro['clave']) {
$isValid = false;
$errors['clave'] = 'La contraseña es obligatoria';
}else {
$errors['clave'] = 'Contraseña: Introducida';
}
if (!$registro['contacto']) {
$isValid = false;
$errors['contacto'] = 'Contacto Obligatorio';
}else {
$errors['contacto'] = 'Contacto:'.' '.$_POST['contacto'];
}
if (!$registro['pais']) {
$isValid = false;
$errors['pais'] = 'Pais Obligatorio';
}else {
$errors['pais'] = 'País:'.' '.$_POST['pais'];
}
if (!$registro['gamertag']) {
$isValid = false;
$errors['gamertag'] = 'Gamertag o usuario de Minecraft obligatorio';
}else {
$errors['gamertag'] = 'Gamertag:'.' '.$_POST['gamertag'];
}
// End Of validation
return $isValid;
}

// marcar datos obligatorios en el Modal
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="hidden";
$mostrarModal=false;

switch ($accion) {
case 'btnAgregar':
$registro = [
'numero' => '',
'id' => '',
'nombre' => '',
'usuario' => '',
'clave' => '',
'pais' => '',
'ciudad' => '',
'gamertag' => '',
'id_rol' => '',
'rol' => '',
'contacto' => '',
'fecha' => '',
'img' => '',
'n_img' => '',
];

$errors = [
'nombre' => '',
'usuario' => '',
'clave' => '',
'contacto' => '',
'pais' => '',
'gamertag' => '',
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$registro = array_merge($registro, $_POST);
$isValid = validateRegistro($registro, $errors);

if ($isValid) {

$_POST['numero'] = $codigo;
$_POST['id'] =  rand(1000000, 2000000);
$_POST['clave'] = md5($_POST['clave']);
$_POST['ciudad'] = false;
$_POST['id_rol'] = 4;
$_POST['rol'] = 'Inscrito';
$_POST['fecha'] = date("d/m/Y");

if ($_POST['img'] == 0) {
$_POST['img'] = 'arana.png';
$_POST['n_img'] = "Araña";
}
if ($_POST['img'] == 1) {
$_POST['img'] = "arana_cueva.png";
$_POST['n_img'] = "Araña Cueva";
}
if ($_POST['img'] == 2) {
$_POST['img'] = "cerdo.png";
$_POST['n_img'] = "Cerdo";
}
if ($_POST['img'] == 3) {
$_POST['img'] = "creeper.png";
$_POST['n_img'] = "Creeper";
}
if ($_POST['img'] == 4) {
$_POST['img'] = "enderman.png";
$_POST['n_img'] = "Enderman";
}
if ($_POST['img'] == 5) {
$_POST['img'] = "esqueleto.png";
$_POST['n_img'] = "Esqueleto";
}
if ($_POST['img'] == 6) {
$_POST['img'] = "granjero.png";
$_POST['n_img'] = "Granjero";
}
if ($_POST['img'] == 7) {
$_POST['img'] = "lobo.png";
$_POST['n_img'] = "Lobo";
}
if ($_POST['img'] == 8) {
$_POST['img'] = "oveja.png";
$_POST['n_img'] = "Oveja";
}
if ($_POST['img'] == 9) {
$_POST['img'] = "steve.png";
$_POST['n_img'] = "Steve";
}
if ($_POST['img'] == 10) {
$_POST['img'] = "usuario.png";
$_POST['n_img'] = "Usuario";
}
if ($_POST['img'] == 11) {
$_POST['img'] = "vaca.png";
$_POST['n_img'] = "Vaca";
}
if ($_POST['img'] == 12) {
$_POST['img'] = "zombie.png";
$_POST['n_img'] = "Zombie";
}
if ($_POST['img'] == 13) {
$_POST['img'] = "alex.png";
$_POST['n_img'] = "Alex";
}

$registro = createRegistro($_POST);
header("Location: index.php");
}else {
$mostrarModal=true;
break;
}
}

break;

}

?>

<!doctype html>
<html lang="es">
<head>
<link rel="icon" href="panel/favicon.ico" type="image/x-icon" />
<!-- Required meta tags -->
<meta charset="utf-8">


<link rel="stylesheet" type="text/css" href="panel/includes/css/style_loginn.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/solid.css">

<title>Login | Panel Minecraft</title>
</head>
<body>
<!--content start-->


<!-- Modal -->
<div class="modal fade" id="modalRegistrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
<!-- Modal -->
<div class="modal-dialog">
<div class="modal-content text-light bg-dark">

<div class="modal-header">
<h5 class="modal-title" id="modalRegistrarLabel"><i class="fas fa-user-plus"></i> Registro</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="" method="post" enctype="multipart/form-data">
<!-- Form Modal -->
<div class="row g-3 needs-validation" novalidate>
<div class="col-sm-6 text-info position-relative">
<label for="nombre" class="form-label">Nombre:</label>
<input type="text" class="form-control <?php if (!empty($_POST['nombre'])) {
echo 'is-valid';
} else {
echo $errors['nombre'] ? 'is-invalid' : '';
} ?>" name="nombre" value="<?php if (!empty($_POST['nombre'])) {
echo $_POST['nombre'];
} ?>" id="nombre" requiere>
<small id="emailHelp" class="form-text text-muted">Su Nombre</small>
<div class="<?php if (!empty($_POST['nombre'])) {
echo 'valid-tooltip';
} else {
echo 'invalid-tooltip';
} ?>">
<?php echo $errors['nombre']; ?>
</div>
</div>
<div class="col-sm-6 text-info position-relative">
<label for="contacto" class="form-label">Contacto:</label>
<input type="text" name="contacto" value="<?php if (!empty($_POST['contacto'])) {
echo $_POST['contacto'];
} ?>" class="form-control <?php if (!empty($_POST['contacto'])) {
echo 'is-valid';
} else {
echo $errors['contacto'] ? 'is-invalid' : '';
} ?>" id="contacto" requiere>
<small id="contactoHelp" class="form-text text-muted">Correo, Discord o Telegram</small>
<div class="<?php if (!empty($_POST['contacto'])) {
echo 'valid-tooltip';
} else {
echo 'invalid-tooltip';
} ?>">
<?php echo $errors['contacto']; ?>
</div>
</div>

<div class="col-sm-7 text-info position-relative">
<label for="usuario" class="form-label">Usuario:</label>
<input type="text" class="form-control <?php if (!empty($_POST['usuario'])) {
echo 'is-valid';
} else {
echo $errors['usuario'] ? 'is-invalid' : '';
} ?>" name="usuario" value="<?php if (!empty($_POST['usuario'])) {
echo $_POST['usuario'];
} ?>" placeholder="" id="usuario" requiere>
<small id="usuarioHelp" class="form-text text-muted">Usuario de Inicio de Sesión</small>
<div class="<?php if (!empty($_POST['usuario'])) {
echo 'valid-tooltip';
} else {
echo 'invalid-tooltip';
} ?>">
<?php echo $errors['usuario']; ?>
</div>
</div>

<div class="col-sm-5 text-info position-relative">
<label for="clave" class="form-label">Contraseña:</label>
<input type="password" class="form-control <?php if (!empty($_POST['clave'])) {
echo 'is-valid';
} else {
echo $errors['clave'] ? 'is-invalid' : '';
} ?>" name="clave" value="<?php if (!empty($_POST)) {
echo $_POST['clave'];
} ?>" placeholder="" id="clave" requiere>
<small id="claveHelp" class="form-text text-muted">Contraseña Inicio de Sesión</small>
<div class="<?php if (!empty($_POST['clave'])) {
echo 'valid-tooltip';
} else {
echo 'invalid-tooltip';
} ?>">
<?php echo $errors['clave']; ?>
</div>
</div>

<div class="col-sm-5 text-info position-relative">
<label for="pais" class="form-label">Pais:</label>
<input type="text" name="pais" value="<?php if (!empty($_POST)) {
echo $_POST['pais'];
} ?>" class="form-control <?php if (!empty($_POST['pais'])) {
echo 'is-valid';
} else {
echo $errors['pais'] ? 'is-invalid' : '';
} ?>" id="pais" requiere>
<small id="paisHelp" class="form-text text-muted">País de Residencia.</small>
<div class="<?php if (!empty($_POST['pais'])) {
echo 'valid-tooltip';
} else {
echo 'invalid-tooltip';
} ?>">
<?php echo $errors['pais']; ?>
</div>
</div>

<div class="col-sm-7 text-info position-relative">
<label for="gamertag" class="form-label">Gamertag:</label>
<input type="text" name="gamertag" class="form-control <?php if (!empty($_POST['gamertag'])) {
echo 'is-valid';
} else {
echo $errors['gamertag'] ? 'is-invalid' : '';
} ?>" id="gamertag" value="<?php if (!empty($_POST)) {
echo $_POST['gamertag'];
} ?>" requiere>
<small id="gamertagHelp" class="form-text text-muted">Usuario Minecraft o Cuenta de Microsoft.</small>
<div class="<?php if (!empty($_POST['gamertag'])) {
echo 'valid-tooltip';
} else {
echo 'invalid-tooltip';
} ?>">
<?php echo $errors['gamertag']; ?>
</div>
</div>

<!-- Mostrar imagen en el Modal -->
<div class="col-sm-12 text-info position-relative">
<label for="inputImg" class="form-label">Imágen:</label>
<img class="border border-secondary rounded border mx-auto d-block" src="panel/includes/img/perfil/usuario.png" width="250" name="Imagen">
<br />
<div class="input-group">
<div class="input-group-prepend">
<label class="input-group-text" for="inputImg">
<div id="imgtool_old" data-bs-toggle="tooltip" data-bs-placement="right" title="<img class='rounded-lg' width='150px' src='panel/includes/img/perfil/usuario.png' border='0' name='Imagen' <br/>Imágen Predeterminada">
<img class="rounded-circle" width="25px" height="25px" src="panel/includes/img/perfil/usuario.png">
</div>
</label>
</div>
<form method="get">
<select type="file" name="img" class="custom-select" id="inputImg" onchange="cambiarA(this)">
<option value="">Seleccionar Imagen ...</option>
<option value="13">Alex</option>
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
<small id="imgHelp" class="form-text text-muted">Seleccionar Imágen para el Perfil.</small>
</div>
<div class="modal-footer">
<button type="button" class="col-3 btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
<button value="btnAgregar" <?php echo $accionAgregar; ?> class="col-4 btn btn-success" type="submit" name="id"><i class="fas fa-plus"></i> Registrarse</button>
</div>
</div>
</form><!-- Fin Form Modal -->
</div>
</div>
</div>
</div><!-- Fin Modal -->

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
<button id="btn" type="button" class="btn btn-transparent text-white btn-sm" data-bs-toggle="modal" data-bs-target="#modalRegistrar">
<i class="fas fa-user-plus"></i> Registrar
</button>
</form>
</div>
</section>

<!--content end-->
<!-- JavaScript -->
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
_img[13] = new Image();
_img[13].src = "panel/includes/img/perfil/alex.png";

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1fe66d79f1.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

<?php if ($mostrarModal) { ?>
<script>
var myModal = new bootstrap.Modal(document.getElementById("modalRegistrar"), {});
document.onreadystatechange = function() {
myModal.show();
};
</script>
<?php } ?>
</body>
</body>
</html>