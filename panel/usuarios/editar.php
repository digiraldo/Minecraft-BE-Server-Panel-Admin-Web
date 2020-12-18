<?php
include "../includes/scripts.php";

require __DIR__.'/usuarios.php';

    if (!isset($_GET['name'])) {
        include "../includes/no_encontrado.php";
        exit;
    }
$usuarioName = $_GET['name'];
$usuarioN = obtenerUsuarioPorName($usuarioName);
// echo '<pre>'; var_dump($usuarioN); echo '</pre>'; exit;

    if (!$usuarioN) {
        include "../includes/no_encontrado.php";
        exit;
    }
    //echo '<pre>'; var_dump($_SERVER); echo '</pre>';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // echo '<pre>'; var_dump($_POST); echo '</pre>';
        $usuarioN = actualizarUsuario($_POST, $usuarioName);
        header("Location: index.php");
    }
    
?>

    <?php include '_formulario.php' ?>



    

    










