<?php
session_start();
if ($_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}

include "../includes/scripts.php";
require __DIR__ . '/roles.php';

$jsonString = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$data = json_decode($jsonString, true);

foreach ($data as $key => $value) {
    $codigo = (empty($data[$key]['id']) ? 1 : $data[$key]['id']+=1);
    }
    //echo 'El codigo actual es: '.$codigo; 

$rolU = [
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

        $_POST['id'] = $codigo;

        if ($_POST['rol'] == 'Administrador') {
            $_POST['id_rol'] = 1;
        }
        if ($_POST['rol'] == 'Editor') {
            $_POST['id_rol'] = 2;
        }
        if ($_POST['rol'] == 'Usuario') {
            $_POST['id_rol'] = 3;
        }

        if ($_POST['img'] == 0) {
            $_POST['img'] = 'arana.png';
        }
        if ($_POST['img'] == 1) {
            $_POST['img'] = "arana_cueva.png";
        }
        if ($_POST['img'] == 2) {
            $_POST['img'] = "cerdo.png";
        }
        if ($_POST['img'] == 3) {
            $_POST['img'] = "creeper.png";
        }
        if ($_POST['img'] == 4) {
            $_POST['img'] = "enderman.png";
        }
        if ($_POST['img'] == 5) {
            $_POST['img'] = "esqueleto.png";
        }
        if ($_POST['img'] == 6) {
            $_POST['img'] = "granjero.png";
        }
        if ($_POST['img'] == 7) {
            $_POST['img'] = "lobo.png";
        }
        if ($_POST['img'] == 8) {
            $_POST['img'] = "oveja.png";
        }
        if ($_POST['img'] == 9) {
            $_POST['img'] = "steve.png";
        }
        if ($_POST['img'] == 10) {
            $_POST['img'] = "usuario.png";
        }
        if ($_POST['img'] == 11) {
            $_POST['img'] = "vaca.png";
        }
        if ($_POST['img'] == 12) {
            $_POST['img'] = "zombie.png";
        }

        $rolU = crearRol($_POST);
        header("Location: index.php");
    }
}

?>

<?php include '_formulario.php' ?>
<?php //include 'index.php' ?>