<?php

function obtenerUsuarios(){
    return json_decode(file_get_contents(__DIR__ . '../../../servername/whitelist.json'), true);
}

function obtenerPermisosU(){
    return json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
}


function obtenerUsuarioPorName($name){

    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $usuarioN) {
        if ($usuarioN['name'] == $name) {
            return $usuarioN;
        }
    }
    return null;
}


function obtenerPorPermission($name){

    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $usuarioP) {
        if ($usuarioP['permission'] == $name) {
            return $usuarioP;
        }
    }
    return null;
}

function crearUsuario($data){
    //$data['spain'] = '';
    //$data['xuid'] = '';
    $data['ignoresPlayerLimit'] = false;
    $usuarios = obtenerUsuarios();
    $usuarios[] = $data;
    ponerJson($usuarios);

}
// "visitor", "member", "operator" 

function actualizarUsuario($data, $name){
    $actualizarUsuario = [];
    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $i => $usuarioN) {
        if ($usuarioN['name'] == $name) {
            $usuarios[$i] = $actualizarUsuario = array_merge($usuarioN, $data);
        }
    }
    //echo '<pre>'; var_dump($usuarios); echo '</pre>';

    file_put_contents(__DIR__ . '../../../servername/whitelist.json', json_encode($usuarios, JSON_PRETTY_PRINT));
    //file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($permisos, JSON_PRETTY_PRINT));


    foreach ($usuarios as $i => $o) {
        if ($usuarios[$i]['permission'] == 'visitor') {
            $usuarios[$i]['spain'] = 'Visitante';
            ponerJson($usuarios);
            //ponerJsonP($usuarios);
        }
        if ($usuarios[$i]['permission'] == 'member') {
            $usuarios[$i]['spain'] = 'Miembro';
            ponerJson($usuarios);
            //ponerJsonP($usuarios);
        }
        if ($usuarios[$i]['permission'] == 'operator') {
            $usuarios[$i]['spain'] = 'Operador';
            ponerJson($usuarios);
            //ponerJsonP($usuarios);
        }
    }

    //ponerJson ($usuarios);
    //ponerJsonP($usuarios);
    return $actualizarUsuario;
}


function eliminarUsuario($name){
    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $i => $usuarioN) {
        if ($usuarioN['name'] == $name) {
            array_splice($usuarios, $i, 1);
        }
    }
    ponerJson($usuarios);
    //ponerJsonP($usuarios);
  //  ponerJson ($permisos);
    //return null;
}

function ponerJson($usuarios){
    file_put_contents(__DIR__ . '../../../servername/whitelist.json', json_encode($usuarios, JSON_PRETTY_PRINT));
}

//function ponerJsonP($usuarios){
//    file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($usuarios, JSON_PRETTY_PRINT));
//}
