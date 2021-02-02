<?php
$alert = '';

session_start();
if(!empty($_SESSION['active']))
{
    header('location: tablero/');
}else{

if(!empty($_POST))
{
    if(empty($_POST['usuario']) || empty($_POST['clave']))
     {
        $alert = 'Ingrese su Usuario y su Contraseña';  
     }else{
        require_once "conexion/conection.php";
        // include ("conexion/conexion.php");

        $user = mysqli_real_escape_string($conection,$_POST['usuario']);  
        $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

        $query = mysqli_query($conection,"SELECT u.id_usuario, u.nombre, u.apellido, u.usuario, u.clave, u.correo_usr, u.imagen, u.fecha, u.fecha_add,  u.usuario_id, u.usuario_mod, u.usuario_eli, u.estatu, 
        (u.rol) AS id_rol, (r.rol) AS rol
        FROM usuarios u 
        INNER JOIN rol r ON u.rol = r.id_rol
        WHERE usuario = '$user' AND clave = '$pass'");
        mysqli_close($conection);
        $result = mysqli_num_rows($query);
        
        if($result > 0) 
        {
            $data = mysqli_fetch_array($query);

            $_SESSION['active'] = true;
            $_SESSION['idUser'] = $data['id_usuario'];
            $_SESSION['img'] = $data['imagen'];
            $_SESSION['nombre'] = $data['nombre'];
            $_SESSION['apellido'] = $data['apellido'];
            $_SESSION['user'] = $data['usuario'];
            $_SESSION['pass'] = $data['clave'];
            $_SESSION['email'] = $data['correo_usr'];
            $_SESSION['date'] = $data['fecha'];
            $_SESSION['id_rol'] = $data['id_rol'];
            $_SESSION['rol'] = $data['rol'];
            $_SESSION['usuario_id'] = $data['usuario_id'];
            $_SESSION['usuario_mod'] = $data['usuario_mod'];
            $_SESSION['estatus'] = $data['estatus'];
            $_SESSION['modifica'] = $data['modifica'];

            header('location: tablero/'); 

        }else{
            $alert = 'El Usuario y la Contraseña son incorrectos';
            session_destroy();
        }

        }
    }
}

include ("conexion/conexion.php");

$sentencia= $pdo->prepare("SELECT * FROM `configuracion` WHERE 1");
$sentencia->execute();
$imglog=$sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Sistema Cotización</title>
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

<?php foreach ($imglog as $configuracion) { ?>  
<section id="container">
<div class="content">
    <form action="" method="post">
    <img src="imagenes/configuracion/<?php echo $configuracion['imagen']; ?>" alt="login">
    <input type="text" name="usuario" placeholder="Usuario" id="usr">
    <input type="password" name="clave" placeholder="Contraseña" id="psw">

    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
        <?php echo isset($alert) ? $alert : ''; ?>

    </div>
    <button id="btn" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
    
    </form>
</div>

</section>
<?php } ?>


<script>

$('.alert').alert()

function Confirmar(Mensaje) {
    return (confirm(Mensaje))?true:false     
}

$(function () {
 $('[data-toggle="tooltip"]').tooltip({
   container: 'body',
   html:true
   })
 })


$(document).ready(function(){
 
 $('[data-toggle="popover"]').popover({
   html:true,
   container: 'body',
   trigger: 'hover focus',
   delay: 300,
   template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header bg-primary text-white"></h3><div class="popover-body"></div></div>'
 });
 
});

</script>

</body>
</html>