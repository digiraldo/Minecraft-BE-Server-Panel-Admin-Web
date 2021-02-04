<?php
include "../includes/scripts.php";
require __DIR__.'/administradores.php';
//$jsonString = file_get_contents(__DIR__ . '../../../config/usradmin.json');
//$data = json_decode($jsonString, true);

$rolU = [
    'id' => '',
    'usuario' => '',
    'contrasena' => '',
    'pais' => '',
    'ciudad' => '',
    'gamertag' => '',
    'id_rol' => '',
    'rol' => '',
    'contacto' => '',
];

$errores = [
    'usuario' => "El Usuario es obligatorio",
    'contrasena' => "La Contraseña es Obligatoria",
    'rol' => "El Rol es Obligatorio",
];

$esValido = false;
//if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['permission'] == 'visitor')
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nusuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $gamertag = $_POST['gamertag'];
    $idrol = $_POST['id_rol'];
    $rol = $_POST['rol'];
    $contacto = $_POST['contacto'];

    if (!$nombre){
        $errores['usuario'] = 'El Usuario es obligatorio'; //================================== 1:19:00 video
    }
    if (!$nombre){
        $errores['contrasena'] = 'La Contraseña es Obligatoria'; //================================== 1:19:00 video
    }
    if (!$nombre){
        $errores['rol'] = 'El Rol es Obligatorio'; //================================== 1:19:00 video
    }
       
    $rolU = crearRol($_POST);       

    header("Location: index.php");
}
// "visitor", "member", "operator" 
?>

<?php //include '_formulario.php' ?>