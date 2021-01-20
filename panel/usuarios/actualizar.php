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

       $usuarios = obtenerUsuarios();
        foreach ($usuarios as $key) {
        if ($permiso = 'visitor') {
            $data[$key]['spain'] = 'Visitante';
        }
        if ($permiso = 'member') {
            $data[$key]['spain'] = 'Miembro';
        }
        if ($permiso = 'operator') {
            $data[$key]['spain'] = 'Operador';
        }   
        }

        $usuarioN = actualizarUsuario($_POST, $usuarioName);
        header("Location: index.php");
    }

    

    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $key) {
        if ($usuarios[$key]['permission'] == 'visitor') {
            $data[$key]['spain'] = 'Visitante';
        }
        if ($usuarios[$key]['permission'] == 'member') {
            $data[$key]['spain'] = 'Miembro';
        }
        if ($usuarios[$key]['permission'] == 'operator') {
            $data[$key]['spain'] = 'Operador';
        }   
        }


?>

    <?php include '_formulario.php' ?>



    

    










