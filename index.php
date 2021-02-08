<?php
$jsoning = file_get_contents(__DIR__ . '/config/usradmin.json');
$datlogup = json_decode($jsoning, true);

//echo $datlogup;
/**/
if (array_key_exists(0, $datlogup)) {
    header("Location: panel/includes/login.php");
    exit;
} else {
    header("Location: panel/includes/logup.php");
    exit;
    //echo "El usuario en $nombre_fichero no Existe";
}
?>