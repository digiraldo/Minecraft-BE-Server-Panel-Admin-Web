<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
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
/*
echo $rolU['clave']."<br>";
echo $_POST['clave']."<br>";
echo $_SESSION['pass']."<br>";
*/

if ($rolU['clave'] === $_POST['clave']) {
    $ediclave = $_POST['clave'];
    //echo "iguales";
}else{
    $ediclave = md5($_POST['clave']);
    //echo "no iguales";
}

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
// xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  editando
        $_POST['clave'] = $ediclave;
 
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
        }
        if ($_POST['img'] == 1) {
            $_POST['img'] = "arana_cueva.png";
            $_POST['n_img'] = "Araña Cueva";
        }
        if ($_POST['img'] == 2) {
            $_POST['img'] = "cerdo.png";
            $_POST['n_img'] = "Cerdo";
        }
        if ($_POST['img'] == 3) {
            $_POST['img'] = "creeper.png";
            $_POST['n_img'] = "Creeper";
        }
        if ($_POST['img'] == 4) {
            $_POST['img'] = "enderman.png";
            $_POST['n_img'] = "Enderman";
        }
        if ($_POST['img'] == 5) {
            $_POST['img'] = "esqueleto.png";
            $_POST['n_img'] = "Esqueleto";
        }
        if ($_POST['img'] == 6) {
            $_POST['img'] = "granjero.png";
            $_POST['n_img'] = "Granjero";
        }
        if ($_POST['img'] == 7) {
            $_POST['img'] = "lobo.png";
            $_POST['n_img'] = "Lobo";
        }
        if ($_POST['img'] == 8) {
            $_POST['img'] = "oveja.png";
            $_POST['n_img'] = "Oveja";
        }
        if ($_POST['img'] == 9) {
            $_POST['img'] = "steve.png";
            $_POST['n_img'] = "Steve";
        }
        if ($_POST['img'] == 10) {
            $_POST['img'] = "usuario.png";
            $_POST['n_img'] = "Usuario";
        }
        if ($_POST['img'] == 11) {
            $_POST['img'] = "vaca.png";
            $_POST['n_img'] = "Vaca";
        }
        if ($_POST['img'] == 12) {
            $_POST['img'] = "zombie.png";
            $_POST['n_img'] = "Zombie";
        }
        if ($_POST['img'] == 13) {
            $_POST['img'] = "alex.png";
            $_POST['n_img'] = "Alex";
        }

        $rolU = actualizarRol($_POST, $rolId);
        header("Location: index.php");
    }
}


$jsonR = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$roless = json_decode($jsonR, true);
/*
foreach ($roless as $rol) {
    if ($rol["id_rol"] != 1 && htmlspecialchars($_GET["id"]) == $_SESSION['id']) {
        header("Location: index.php");
     }else {
        include '_formulario.php';
     }
}



if ($_SESSION['id_rol'] == 1){
    header("Location: index.php");
 }else {
    include '_formulario.php';
 }


if (htmlspecialchars($_GET["id"] == 1) {
    include '_formulario.php';
}else {
    header("Location: ../tablero/");
}


array_key_exists
in_array(765, $array); // true


if (htmlspecialchars($_GET["id"]) == 1 || $_SESSION['id'] == 1) {
    header("Location: index.php");
 }else {
    include '_formulario.php';
 }




foreach ($roless as $key => $value) {
if ($value['id_rol'] != 1 && $_SESSION['id_rol'] == 1) {
    header("Location: ../tablero/");
}else {
    include '_formulario.php';
}
}

 $clave = array_search('1', $roless);

$res = array_search('id', $roless);
print_r($res);
echo $res;
*/
//$res2 = array_intersect($roless);

//var_dump($res);

?>

<?php 
include '_formulario.php';
 ?>




