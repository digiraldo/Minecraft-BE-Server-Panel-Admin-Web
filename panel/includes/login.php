<?php
// var_dump (php_ini_loaded_file (), php_ini_scanned_files ());
//echo phpinfo();
//echo xdebug_info();
//exit;

//var_dump(php_ini_loaded_file(), php_ini_scanned_files());
require '_login.php';

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




    <?php // foreach ($imglog as $configuracion) { 
    ?>
    <section id="container">
        <div class="content">
        <form method="post" name="login_form" id="login_form" action="" onsubmit="enviar(this); return false;">
                <img src="panel/includes/img/Minecraft_Logo.png" alt="login">
                <input type="text" name="usr" placeholder="Usuario" id="usr" autocomplete>
                <input type="password" name="psw" placeholder="Contraseña" id="psw" autocomplete>

                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <span class="messages"></span>
                </div>    
                <button id="btn" type="submit" class="btn btn-primary" id="login_submit"><i class="fas fa-sign-in-alt"></i> Ingresar </button>

            </form>
        </div>

    </section>
    <?php //} 
    ?>
    <script>

    </script>

</body>

</html>