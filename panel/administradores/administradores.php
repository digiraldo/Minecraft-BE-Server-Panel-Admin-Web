<?php

$mostrarModal=false;

function obtenerRol(){
    return json_decode(file_get_contents(__DIR__ . '../../../config/usradmin.json'), true);
}

function obtenerRolPorName($name){

    $roles = obtenerRol();
    foreach ($roles as $rolU) {
        if ($rolU['usuario'] == $name) {
            return $rolU;
        }
    }
    return null;
}

function crearRol($dat){
    //$data['spain'] = '';
    $dat['id'] = false;
    $roles = obtenerRol();
    $roles[] = $dat;
    ponerJsonR($roles);
}


function ponerJsonR($roles){
    file_put_contents(__DIR__ . '../../../config/usradmin.json', json_encode($roles, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
}
?>