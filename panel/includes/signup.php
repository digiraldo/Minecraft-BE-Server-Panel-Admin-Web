<?php
setlocale(LC_ALL, "es_ES");
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
function obtenerRegistro()
{
    return json_decode(file_get_contents(__DIR__ . '../../../config/usradmin.json'), true);
}

function obtenerRegistroName($nam)
{

    $registros = obtenerRegistro();
    foreach ($registros as $registroN) {
        if ($registroN['usuario'] == $nam) {
            return $registroN;
        }
    }
    return null;
}

function crearRegistro($datr)
{
    // $datr['id'] = 1;
    // $datr['nombre'] = "servername";
    // $datr['clave'] = md5($_POST['clave']);
    // $datr['pais'] = "No Aplica";
    // $datr['ciudad'] = "No Aplica";
    // $datr['gamertag'] = "Xbox Id";
    // $datr['id_rol'] = 1;
    // $datr['rol'] = "Administrador";
    // $datr['contacto'] = "Telegram: @dparceros";
    // $datr['fecha'] = date("d/m/Y");
    // $datr['img'] = "admin_minecraft.png";
    $registros = obtenerRegistro();
    $registros[] = $datr;
    introJson($registros);
}
function introJson($registros)
{
    file_put_contents(__DIR__ . '../../../config/usradmin.json', json_encode($registros, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}
//$jsonString = file_get_contents(__DIR__ . '../../../servername/whitelist.json');
//$data = json_decode($jsonString, true);


$registroN = [
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
    'id_img' => '',
];


$error = [
    'usuario' => "",
    'clave' => "",
];


$esValido = true;
//if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['permission'] == 'visitor')
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    shell_exec('sudo chmod -R 775 dirname/minecraftbe');
    shell_exec('sudo chown -hR username:www-data dirname/minecraftbe');

    $registroN = array_merge($registroN, $_POST);
    $esValido = validarRegistro($registroN, $error);
    if ($esValido) {
        $_POST['numero'] = 1;
        $_POST['id'] =  rand(1000000, 2000000);
        $_POST['nombre'] = "servername";
        $_POST['usuario'] = $_POST['usuario'];
        $_POST['clave'] = md5($_POST['clave']);
        $_POST['pais'] = "No Aplica";
        $_POST['ciudad'] = "No Aplica";
        $_POST['gamertag'] = "======";
        $_POST['id_rol'] = 0;
        $_POST['rol'] = "Propietario";
        $_POST['contacto'] = "GitHub: digiraldo";
        $_POST['fecha'] = date("d/m/Y");
        $_POST['img'] = "admin_minecraft.png";
        $_POST['n_img'] = "Admin";
        $_POST['id_img'] = 9999;
        $registroN = crearRegistro($_POST);
        unset($_POST);
        header("Location: ../../");
    }
}

function validarRegistro($registroN, &$error)
{
    $esValido = true;
    // Start of validation
    if (!$registroN['usuario'] || strlen($registroN['usuario']) < 4 || strlen($registroN['usuario']) > 10) {
        $esValido = false;
        $error['usuario'] = 'Usuario obligatorio con más de 4 y menos de 10 caracteres';
    }
    if (!$registroN['clave'] || strlen($registroN['clave']) < 6 ) {
        $esValido = false;
        $error['clave'] = 'Contraseña obligatoria con más de 6 caracteres';
    }
    // End Of validation
    return $esValido;
}

?>

<!DOCTYPE html>
<html lang="es">

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
            <!--<form method="post" name="login_form" id="login_form" action="" onsubmit="enviar(this); return false;">-->
            <form method="POST" enctype="multipart/form-data" action="" class="needs-validation" novalidate>
                <!--<form method="post" name="login_form" id="login_form" action="" class="needs-validation" novalidate>-->
                <img src="img/Minecraft_Logo.png" alt="login">
                <input type="text" name="usuario" placeholder="Usuario" id="usuario" class="form-control <?php echo $error['usuario'] ? 'is-invalid' : '' ?>" autocomplete="" required>
                <div class="invalid-tooltip"><?php echo $error['usuario']; ?></div>
                <input type="password" name="clave" placeholder="Contraseña" id="clave" class="form-control <?php echo $error['clave'] ? 'is-invalid' : '' ?>" autocomplete="" required>
                <div class="invalid-tooltip"><?php echo $error['clave']; ?></div>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <?php 
                if (empty($_POST)) {
                    echo 'Crear Usuario Administrador';
                }else {
                    echo $error['usuario'].'<br>';
                    echo $error['clave'].'<br>'; 
                }
                ?>
                
                    
                </div>
                <button id="btn" type="submit" class="btn btn-primary" id="login_submit"><i class="fas fa-user-plus"></i> Registrar</button>

            </form>
        </div>

    </section>
    <script>

    </script>

</body>

</html>