<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}

include "../includes/scripts.php";
require __DIR__ . '/roles.php';

$jsonString = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$data = json_decode($jsonString, true);

foreach ($data as $key => $value) {
    $codigo = (empty($data[$key]['numero']) ? 1 : $data[$key]['numero']+=1);
    }
    //echo 'El codigo actual es: '.$codigo; 

$rolU = [
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
    'gamertag' => '',
];

$esValido = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rolU = array_merge($rolU, $_POST);

    $esValido = validarRol($rolU, $errors);

    if ($esValido) {

        $_POST['numero'] = $codigo;
        $_POST['id'] =  rand(1000000, 2000000);
        $_POST['clave'] = md5($_POST['clave']);
        $_POST['fecha'] = date("d/m/Y");

        if ($_POST['rol'] == 'Administrador') {
            $_POST['id_rol'] = 1;
        }
        if ($_POST['rol'] == 'Editor') {
            $_POST['id_rol'] = 2;
        }
        if ($_POST['rol'] == 'Usuario') {
            $_POST['id_rol'] = 3;
        }
        if ($_POST['rol'] == 'Inscrito') {
            $_POST['id_rol'] = 4;
        }

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
        
        $rolU = crearRol($_POST);
        header("Location: index.php");
    }
}

?>

<?php include '_formulario.php' ?>
<?php //include 'index.php' ?>