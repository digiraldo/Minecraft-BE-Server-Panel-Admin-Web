<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}
//include "../includes/scripts.php";
require __DIR__ . '/usuarios.php';


$usuarioN = [
    'name' => '',
    'xuid' => '',
    'ignoresPlayerLimit' => '',
];

$errors = [
    'name' => '',
];

$esValido = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioN = array_merge($usuarioN, $_POST);

    $esValido = validarUsuario($usuarioN, $errors);

    if ($esValido) {

        $usuarioN = crearUsuario($_POST);
        header("Location: index.php");
    }
}

?>

<?php include '_formulario.php' ?>
<?php //include 'index.php' ?>