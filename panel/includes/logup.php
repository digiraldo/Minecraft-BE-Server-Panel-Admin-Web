<?php
$txtUsr = (isset($_POST['usr'])) ? $_POST['usr'] : "";
$txtCon = (isset($_POST['psw'])) ? $_POST['psw'] : "";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


$error = array();

$jsonS = file_get_contents(__DIR__ . '../../../config/log.json');
$dat = json_decode($jsonS, true);
/*
$jsonString = file_get_contents(__DIR__ . '/config/usradmin.json');
$datalogup = json_decode($jsonString, true);
*/

if ($dat[0]['id'] == '1' && $dat[0]['usuario'] == 'Panel' && $dat[0]['contra'] == 'Tcq4gqvllpshsh3up1pshsh3up1' && $txtUsr == 'usr') {
    
  //  foreach ($datalogup as $key => $value) {
        $datalogup[0]['id'] = 1;
        $datalogup[0]['usuario'] = $txtUsr;
        $datalogup[0]['contrasena'] = $txtCon;
        $datalogup[0]['pais'] = "";
        $datalogup[0]['ciudad'] = "";
        $datalogup[0]['gamertag'] = "";
        $datalogup[0]['id_rol'] = 1;
        $datalogup[0]['rol'] = "Administrador";
        $datalogup[0]['contacto'] = "";
        $datalogup[0]['img'] = "usuario.png";

        $newJsonString = json_encode($datalogup, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '/config/usradmin.json', $newJsonString);
        //echo $datalogup[0]['img'];
        header("../../index.php");
        exit;
//    }
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
                <input type="text" name="usr" placeholder="Usuario" id="usr" autocomplete>
                <input type="password" name="psw" placeholder="Contraseña" id="psw" autocomplete>

                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                Crear Usuario Administrador
                </div>    
                <button id="btn" type="submit" class="btn btn-primary" id="login_submit"><i class="fas fa-sign-in-alt"></i> Ingresar </button>

            </form>
        </div>

    </section>
    <script>

    </script>

</body>

</html>