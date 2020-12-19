<?php

include "../includes/scripts.php";

require __DIR__.'/usuarios.php';

    if (!isset($_POST['name'])) {
        include "../includes/no_encontrado.php";
        exit;
    }
$usuarioName = $_POST['name'];
eliminarUsuario($usuarioName);

 header("Location: index.php");