<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}

include "../includes/scripts.php";
require __DIR__ . '/usuarios.php';

if (!isset($_GET['name'])) {
    header('Refresh: 3; URL=editar.php');
    include "../includes/rol_no_encontrado.php";
    exit;
}

$usrName = $_GET['name'];
$usuarioN = obtenerUsuarioPorName($usrName);

if (!$usuarioN) {
    include "../includes/no_encontrado.php";
    exit;
}
$errors = [
    'name' => '',
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioN = array_merge($usuarioN, $_POST);

    $esValido = validarUsuario($usuarioN, $errors);

    if ($esValido) {

        if ($_POST['rol'] == 'visitor') {
            $_POST['id_rol'] = 1;
        }
        if ($_POST['rol'] == 'member') {
            $_POST['id_rol'] = 2;
        }
        if ($_POST['rol'] == 'operator') {
            $_POST['id_rol'] = 3;
        }


        $usuarioN = actualizarUsuario($_POST, $usrName);
        header("Location: index.php");
    }
}

 
?>
<?php include '_formulario.php' ?>