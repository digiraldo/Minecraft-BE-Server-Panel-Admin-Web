<?php
include "../includes/scripts.php";
require __DIR__.'/permisos.php';


$permisoP = [
    'name' => '',
    'permission' => '',
    'spain' => '',
    'xuid' => '',
];

$errores = [
    'name' => "El jugador debe estar agregado en Allowlist",
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
        $errores['name'] = 'El jugador debe estar agregado en Allowlist'; //================================== 1:19:00 video
    }
       
    $permisoP = crearPermiso($_POST);       

    header("Location: index.php");
}
// "visitor", "member", "operator" 
?>

<?php include '_formulario.php' ?>