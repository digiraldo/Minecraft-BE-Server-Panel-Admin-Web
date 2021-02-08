<?php
$txtUsr = (isset($_POST['usr'])) ? $_POST['usr'] : "";
$txtCon = (isset($_POST['psw'])) ? $_POST['psw'] : "";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


$error = array();

$jsonS = file_get_contents(__DIR__ . '../../../config/log.json');
$dat = json_decode($jsonS, true);

$jsonString = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$datalogin = json_decode($jsonString, true);
/*
$nombre_fichero = '../../config/usradmin.json';
if (file_exists($nombre_fichero)) {

} else {
    header("Location: panel/includes/logup.php");
    exit;
}
*/
if ($dat[0]['id'] == '1' && $dat[0]['usuario'] == 'Panel' && $dat[0]['contra'] == 'Tcq4gqvllpshsh3up1pshsh3up1') {
    
    foreach ($datalogin as $key => $value) {
        if ($datalogin[$key]['usuario'] == $txtUsr && $datalogin[$key]['contrasena'] == $txtCon) {
            header("Location: ../tablero/index.php");
            exit;
        }
        $alert = 'Iniciar Seccion';
    }
}

?>