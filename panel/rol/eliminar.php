<?php

include "../includes/scripts.php";
require __DIR__ . '/roles.php';

if (!isset($_POST['id'])) {
    include "../includes/per_no_encontrado.php";
    exit;
}

$roU = $_POST['id'];
eliminarRol($roU);

header("Location: index.php");