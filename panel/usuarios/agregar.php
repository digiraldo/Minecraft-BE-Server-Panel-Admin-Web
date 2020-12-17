<?php
include "../includes/scripts.php";
require __DIR__.'/usuarios.php';

$usuarioN = [
    'name' => '',
    'xuid' => '',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
crearUsuario($_POST);
header("Location: index.php");
}

?>

<?php include '_formulario.php' ?>