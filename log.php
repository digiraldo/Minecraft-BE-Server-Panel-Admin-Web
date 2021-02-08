<?php
include "panel/includes/scripts.php";

$txtUsr = (isset($_POST['usr'])) ? $_POST['usr'] : "";
$txtCon = (isset($_POST['con'])) ? $_POST['con'] : "";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

// marcar datos obligatorios en el Modal

$error = array();

$jsonTemp = file_get_contents(__DIR__ . 'config/tmp.json');
$tmp = json_decode($jsonTemp, true);

$jsonS = file_get_contents(__DIR__ . 'config/log.json');
$dat = json_decode($jsonS, true);

$jsonString = file_get_contents(__DIR__ . '/config/usradmin.json');
$data = json_decode($jsonString, true);

if ($dat[0]['id'] == '1' && $dat[0]['usuario'] == 'Panel' && $dat[0]['contra'] == 'Tcq4gqvllpshsh3up1pshsh3up1') {
    // print_r($dat[0]);
    foreach ($data as $key => $value) {
        //print_r($data);  
        if ($data[$key]['usuario'] == $txtUsr && $data[$key]['contrasena'] == $txtCon) {
            //echo $data[$key]['usuario'] . " => " . $data[$key]['contrasena'] . "<br>";
            $tmp[0]['id'] = $data[$key]['id'];
            $tmp[0]['usuario'] = $data[$key]['usuario'];
            $tmp[0]['pais'] = $data[$key]['pais'];
            $tmp[0]['ciudad'] = $data[$key]['ciudad'];
            $tmp[0]['gamertag'] = $data[$key]['gamertag'];
            $tmp[0]['id_rol'] = $data[$key]['id_rol'];
            $tmp[0]['rol'] = $data[$key]['rol'];
            $tmp[0]['contacto'] = $data[$key]['contacto'];
            $tmp[0]['img'] = $data[$key]['img'];

            $newJsonString = json_encode($tmp, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            file_put_contents(__DIR__ . '/config/tmp.json', $newJsonString);
            //echo $tmp[0]['img'];
            header("Location: panel/tablero/index.php");
            exit;
        }
        $alert = 'Iniciar Seccion';
        //echo "No Hay Nada". "<br/>";  
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
    <link rel="stylesheet" type="text/css" href="panel/includes/css/style_login.css">

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


    <?php // foreach ($imglog as $configuracion) { 
    ?>
    <section id="container">
        <div class="content">
            <form action="" method="post">
                <img src="/panel/includes/img/Minecraft_Logo.png" alt="login">
                <input type="text" name="usr" placeholder="Usuario" id="usr">
                <input type="password" name="con" placeholder="Contraseña" id="psw">

                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <?php echo isset($alert) ? $alert : ''; ?>

                </div>
                <button id="btn" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar </button>

            </form>
        </div>

    </section>
    <?php //} 
    ?>


</body>

</html>