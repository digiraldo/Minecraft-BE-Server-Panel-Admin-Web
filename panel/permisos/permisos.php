<?php


function obtenerPermisos(){
     return json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //$permisos = json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //echo '<pre>'; var_dump($permisos); echo '</pre>'; exit;
}

function obtenerPermisoPorPer($per){
        $permisos = obtenerPermisos();
        foreach ($permisos as $permiso) {
            if ($permiso['permission'] == $per) {
                return $permiso;
            }
        }
        return null;
}

$p = 'operator';
function obtenerPermisoPer($p){
    $permisos = obtenerPermisos();
    foreach ($permisos as $permiso) {
        if ($permiso['permission'] == $p) {
            return $permiso;
        }
    }
    return null;
}
    


function obtenerPermisoPorId($id){

}


function crearPermiso($data){

}


function actualizarPermiso($data, $id){

}


function eliminarPermiso($id){

}
