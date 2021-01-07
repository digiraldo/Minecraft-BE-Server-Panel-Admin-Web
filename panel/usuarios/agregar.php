<?php
include "../includes/scripts.php";
require __DIR__.'/usuarios.php';

$usuarioN = [
    'name' => '',
    'permission' => '',
    'xuid' => '',
];

$errores = [
    'name' => "El Gamertag es obligatorio",
    'permission' => "Permiso Miembro por defecto",
];

$esValido = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['name'];
    $xuid = $_POST['xuid'];
    $permiso = $_POST['permission'];
    if (!$nombre){
        $errores['name'] = 'El Gamertag es obligatorio'; //================================== 1:19:00 video
    }

    //if $xuid 

    if (!$esValido) {
        $usuarioN = crearUsuario($_POST);
        header("Location: index.php");
    }
}

?>

<?php include '_formulario.php' ?>