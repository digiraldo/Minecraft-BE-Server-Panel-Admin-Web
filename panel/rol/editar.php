<?php
session_start();
if ($_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}

include "../includes/scripts.php";
require __DIR__ . '/roles.php';

if (!isset($_GET['id'])) {
    header('Refresh: 3; URL=editar.php');
    include "../includes/rol_no_encontrado.php";
    exit;
}

$rolId = $_GET['id'];
$rolU = obtenerRolPor_Id($rolId);

if (!$rolU) {
    include "../includes/no_encontrado.php";
    exit;
}
$errors = [
    'nombre' => '',
    'usuario' => '',
    'clave' => '',
    'gamertag' => '',
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rolU = array_merge($rolU, $_POST);

    $esValido = validarRol($rolU, $errors);

    if ($esValido) {

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

        $rolU = actualizarRol($_POST, $rolId);
        header("Location: index.php");
    }
}


?>
<?php include '_formulario.php' ?>