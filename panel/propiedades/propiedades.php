<?php

// Obtener el contenido del archivo de json como una matriz de líneas
function obtenerSrvDatos(){
    return json_decode(file_get_contents(__DIR__ . '../../../config/srvdatos.json'), true);
}

function obtenerSrvDatosPorId($id){
    $Datos = obtenerSrvDatos();
    foreach ($Datos as $Dato) {
        if ($Dato['id'] == $id) {
            return $Dato;
        }
    }
    return null;
}


function actualizarSrvDatos($data, $id){
    $actualizarSrvDatos = [];
    $Datos = obtenerSrvDatos();
    foreach ($Datos as $i => $Dato) {
        if ($Dato['id'] == $id) {
            $Datos[$i] = $actualizarSrvDatos = array_merge($Dato, $data);
        }
    }
    //echo '<pre>'; var_dump($Datos); echo '</pre>';

    file_put_contents(__DIR__ . '../../../config/srvdatos.json', json_encode($Datos, JSON_PRETTY_PRINT));

    ponerJson ($Datos);
    return $actualizarSrvDatos;
}

function ponerJson($Datos){
    file_put_contents(__DIR__ . '../../../config/srvdatos.json', json_encode($Datos, JSON_PRETTY_PRINT));
}

?>