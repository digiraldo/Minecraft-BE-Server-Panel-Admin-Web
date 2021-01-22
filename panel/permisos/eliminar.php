<?php

include "../includes/scripts.php";

require __DIR__.'/permisos.php';

if (!isset($_POST['xuid'])) {
    include "../includes/per_no_encontrado.php";
    exit;
}

$permiP = $_POST['xuid'];
eliminarPermiso($permiP);

 header("Location: index.php");