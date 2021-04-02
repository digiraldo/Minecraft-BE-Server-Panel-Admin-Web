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
    'id_img' => '',
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
            $_POST['id_img'] = 0;
        }
        if ($_POST['img'] == 1) {
            $_POST['img'] = "arana_cueva.png";
            $_POST['n_img'] = "Araña Cueva";
            $_POST['id_img'] = 1;
        }
        if ($_POST['img'] == 2) {
            $_POST['img'] = "cerdo.png";
            $_POST['n_img'] = "Cerdo";
            $_POST['id_img'] = 2;
        }
        if ($_POST['img'] == 3) {
            $_POST['img'] = "creeper.png";
            $_POST['n_img'] = "Creeper";
            $_POST['id_img'] = 3;
        }
        if ($_POST['img'] == 4) {
            $_POST['img'] = "enderman.png";
            $_POST['n_img'] = "Enderman";
            $_POST['id_img'] = 4;
        }
        if ($_POST['img'] == 5) {
            $_POST['img'] = "esqueleto.png";
            $_POST['n_img'] = "Esqueleto";
            $_POST['id_img'] = 5;
        }
        if ($_POST['img'] == 6) {
            $_POST['img'] = "granjero.png";
            $_POST['n_img'] = "Granjero";
            $_POST['id_img'] = 6;
        }
        if ($_POST['img'] == 7) {
            $_POST['img'] = "lobo.png";
            $_POST['n_img'] = "Lobo";
            $_POST['id_img'] = 7;
        }
        if ($_POST['img'] == 8) {
            $_POST['img'] = "oveja.png";
            $_POST['n_img'] = "Oveja";
            $_POST['id_img'] = 8;
        }
        if ($_POST['img'] == 9) {
            $_POST['img'] = "steve.png";
            $_POST['n_img'] = "Steve";
            $_POST['id_img'] = 9;
        }
        if ($_POST['img'] == 10) {
            $_POST['img'] = "usuario.png";
            $_POST['n_img'] = "Usuario";
            $_POST['id_img'] = 10;
        }
        if ($_POST['img'] == 11) {
            $_POST['img'] = "vaca.png";
            $_POST['n_img'] = "Vaca";
            $_POST['id_img'] = 11;
        }
        if ($_POST['img'] == 12) {
            $_POST['img'] = "zombie.png";
            $_POST['n_img'] = "Zombie";
            $_POST['id_img'] = 12;
        }
        if ($_POST['img'] == 13) {
            $_POST['img'] = "alex.png";
            $_POST['n_img'] = "Alex";
            $_POST['id_img'] = 13;
        }
        
        $rolU = crearRol($_POST);
        header("Location: index.php");
    }
}

?>

<?php include '_formulario.php' ?>
<?php //include 'index.php' ?>