<?php


function obtenerPermisos(){
     return json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //$permisos = json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //echo '<pre>'; var_dump($permisos); echo '</pre>'; exit;
}

function obtenerPermisoPorPer($id){

}

function obtenerPermisoPorId($id){

}


function crearPermiso($data){

}


function actualizarPermiso($data, $id){

}


function eliminarPermiso($id){

}