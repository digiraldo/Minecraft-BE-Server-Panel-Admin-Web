<?php
include "../includes/scripts.php";
require __DIR__.'/usuarios.php';
$jsonString = file_get_contents(__DIR__ . '../../../servername/whitelist.json');
$data = json_decode($jsonString, true);


$usuarioN = [
    'name' => '',
    'permission' => '',
    'spain' => '',
    'xuid' => '',
];

$errores = [
    'name' => "El Gamertag es obligatorio",
    'permission' => "Permiso Miembro por defecto",
];

$esValido = false;
//if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['permission'] == 'visitor')
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['name'];
    $xuid = $_POST['xuid'];
    $permiso = $_POST['permission'];
    $spain = $_POST['permission'];

    if (!$nombre){
        $errores['name'] = 'El Gamertag es obligatorio'; //================================== 1:19:00 video
    }
       
    $usuarioN = crearUsuario($_POST);       

    header("Location: index.php");
}
// "visitor", "member", "operator" 
?>

<?php include '_formulario.php' ?>