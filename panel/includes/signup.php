<?php
setlocale(LC_ALL,"es_ES");
date_default_timezone_set('America/Bogota');

$jsoning = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$datsignup = json_decode($jsoning, true);

$filename = "../../config/usradmin.json";
//if (is_file($filename)) {
if (file_exists($filename) && array_key_exists(0, $datsignup)) {
    header("Location: ../../");
    exit;
}
 
/*
*/
function obtenerRegistro(){
return json_decode(file_get_contents(__DIR__ . '../../../config/usradmin.json'), true);
}

function obtenerRegistroName($nam){

    $registros = obtenerRegistro();
    foreach ($registros as $registroN) {
        if ($registroN['usuario'] == $nam) {
            return $registroN;
        }
    }
    return null;
}

function crearRegistro($datr){
    $datr['id'] = 1;
    $datr['nombre'] = "servername";
    $datr['clave'] = md5($_POST['clave']);
    $datr['pais'] = "No Aplica";
    $datr['ciudad'] = "No Aplica";
    $datr['gamertag'] = "Xbox Id";
    $datr['id_rol'] = 1;
    $datr['rol'] = "Administrador";
    $datr['contacto'] = "Telegram: @dparceros";
    $datr['fecha'] = date("d/m/Y");
    $datr['img'] = "admin_minecraft.png";
    $registros = obtenerRegistro();
    $registros[] = $datr;
    introJson($registros);
}
function introJson($registros){
file_put_contents(__DIR__ . '../../../config/usradmin.json', json_encode($registros, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
}
//$jsonString = file_get_contents(__DIR__ . '../../../servername/whitelist.json');
//$data = json_decode($jsonString, true);


$registroN = [
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
];


$error = [
    'usuario' => "El Usuario es obligatorio",
    'contrasena' => "Contraseña Obligatoria",
];

$esValido = false;
//if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['permission'] == 'visitor')
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['clave'];
    //$pais = $_POST['permission'];
    //$ciudad = $_POST['permission'];
    //$gamertag = $_POST['permission'];
    //$id_rol = $_POST['permission'];
    //$rol = $_POST['permission'];
    //$contacto = $_POST['permission'];
    //$img = $_POST['permission'];
    //$spain = $_POST['permission'];

    if (!$nombre){
        $error['name'] = 'El Usuario es obligatorio'; //================================== 1:19:00 video
    }
       
    $registroN = crearRegistro($_POST);       
    unset($_POST);
    header("Location: ../../");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Panel Minecraft</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>

<body>


    <section id="container">
        <div class="content">
        <form method="post" name="login_form" id="login_form" action="" onsubmit="enviar(this); return false;">
                <img src="img/Minecraft_Logo.png" alt="login">
                <input type="text" name="usuario" placeholder="Usuario" id="usuario" autocomplete>
                <input type="password" name="clave" placeholder="Contraseña" id="clave" autocomplete>

                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                Crear Usuario Administrador
                </div>    
                <button id="btn" type="submit" class="btn btn-primary" id="login_submit"><i <i class="fas fa-user-plus"></i> Registrar</button>

            </form>
        </div>

    </section>
    <script>

    </script>

</body>

</html>