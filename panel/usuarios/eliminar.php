<?php

include "../includes/scripts.php";
require __DIR__ . '/usuarios.php';

if (!isset($_POST['name'])) {
    include "../includes/per_no_encontrado.php";
    exit;
}

$roU = $_POST['name'];
eliminarUsuario($roU);

header("Location: index.php");