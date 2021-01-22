<?php
include "../includes/scripts.php";

require __DIR__.'/permisos.php';

    if (!isset($_GET['xuid'])) {
        include "../includes/no_encontrado.php";
        exit;
    }
$permiP = $_GET['xuid'];
$permisoP = obtenerPermisoPorPer($permiP);
// echo '<pre>'; var_dump($permiso); echo '</pre>'; exit;

    if (!$permisoP) {
        include "../includes/no_encontrado.php";
        exit;
    }
    //echo '<pre>'; var_dump($_SERVER); echo '</pre>';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // echo '<pre>'; var_dump($_POST); echo '</pre>';
        $permisoP = actualizarPermiso($_POST, $permiP);
        header("Location: index.php");
    }
    
?>

<?php include '_formulario.php' ?>




    

    










