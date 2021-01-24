<?php

function obtenerPermisos(){
     return json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //$permisos = json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //echo '<pre>'; var_dump($permisos); echo '</pre>'; exit;
}

function obtenerPermisoPorPer($id){
        $permisos = obtenerPermisos();
        foreach ($permisos as $permisoP) {
            if ($permisoP['xuid'] == $id) {
                return $permisoP;
            }
        }
        return null;
}
    

function crearPermiso($data){
    $data['permission'] = 'operator';
    //$data['xuid'] = '';
    $data['spain'] = 'Operador';
    $permisos = obtenerPermisos();
    $permisos[] = $data;
    ponerJsonP($permisos);
}


function actualizarPermiso($data, $id){
    $actualizarPermiso = [];
    $permisos = obtenerPermisos();
    foreach ($permisos as $i => $permisoP) {
        if ($permisoP['xuid'] == $id) {
            $permisos[$i] = $actualizarPermiso= array_merge($permisoP, $data);
        }
    }
    //echo '<pre>'; var_dump($permisos); echo '</pre>';

    file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($permisos, JSON_PRETTY_PRINT));


    foreach ($permisos as $i => $o) {
        if ($permisos[$i]['permission'] == 'visitor') {
            $permisos[$i]['spain'] = 'Visitante';
            ponerJsonP($permisos);
        }
        if ($permisos[$i]['permission'] == 'member') {
            $permisos[$i]['spain'] = 'Miembro';
            ponerJsonP($permisos);
        }
        if ($permisos[$i]['permission'] == 'operator') {
            $permisos[$i]['spain'] = 'Operador';
            ponerJsonP($permisos);
        }
    }

    //ponerJsonP($permisos);
    return $actualizarPermiso;

}


function eliminarPermiso($id){
    $permisos = obtenerPermisos();
    foreach ($permisos as $i => $permisoP) {
        if ($permisoP['xuid'] == $id) {
            array_splice($permisos, $i, 1);
        }
    }
    ponerJsonP($permisos);
}

function ponerJsonP($permisos){
    file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($permisos, JSON_PRETTY_PRINT));
}