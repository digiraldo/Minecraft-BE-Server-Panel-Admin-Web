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
    $dat['id_rol'] = '';
    $roles = obtenerRol();
    $roles[] = $dat;

    foreach ($roles as $key) {
            if ($rolU['usuario'] == $name && $rolU['rol'] == 'Administrador') {
                $roles[$key]['id_rol'] = 1;
                ponerJsonR($roles);
            }
            if ($rolU['usuario'] == $name && $rolU['rol'] == 'Editor') {
                $roles[$key]['id_rol'] = 2;
                ponerJsonR($roles);
            }
            if ($rolU['usuario'] == $name && $rolU['rol'] == 'Usuario') {
                $roles[$key]['id_rol'] = 3;
                ponerJsonR($roles);
            }
 }

    
}


function ponerJsonR($roles){
    file_put_contents(__DIR__ . '../../../config/usradmin.json', json_encode($roles, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
}
?>