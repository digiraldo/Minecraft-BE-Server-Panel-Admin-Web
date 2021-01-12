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


function obtenerUsuarioPorPermission($name){

    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $usuarioP) {
        if ($usuarioP['permission'] == $name) {
            return $usuarioP;
        }
    }
    return null;
}

//echo $usuarioP

//$permi = [
//    $usuarioN['visitor'] => "Visitante",
//    $usuarioN['member'] => "Miembro",
//    $usuarioN['operator'] => "Operador",
//];

function crearUsuario($data){
    
    $data['ignoresPlayerLimit'] = false;
    $usuarios = obtenerUsuarios();
    //$permisos = obtenerPermisosU();
    //$data['xuid'] = $permiso['xuid'];
    //$data['xuid'] = $permiso['xuid'];

    //$data['permiso'] = $permi;
    //$usuarioN['visitor'] = $permi['Visitante'];
    //$usuarioN['member'] = $permi['Miembro'];
    //$usuarioN['operator'] = $permi['Operador'];

    $usuarios[] = $data;
    ponerJson ($usuarios);
    //ponerJsonP ($usuarios);
  

   //if ($usuarioN['permission'] = 'operator') {
    //    $permisos[] = $data;
    //    ponerJsonP ($usuarios);
    //}


    foreach ($usuarios as $i => $usuarioP) {
       if ($usuarioP['permission'] == 'operator') {
            ponerJsonP ($usuarios);
        }
 
    }

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
 //   file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($permisos, JSON_PRETTY_PRINT));
    //file_put_contents(__DIR__ . '/servername/whitelist.json', json_encode($users, JSON_PRETTY_PRINT));

    ponerJson ($usuarios);
    return $actualizarUsuario;
}




function eliminarUsuario($name){
    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $i => $usuarioN) {
        if ($usuarioN['name'] == $name) {
            array_splice($usuarios, $i, 1);
        }
    }
    ponerJson ($usuarios);
  //  ponerJson ($permisos);
    //return null;
}

function ponerJson($usuarios){
    file_put_contents(__DIR__ . '../../../servername/whitelist.json', json_encode($usuarios, JSON_PRETTY_PRINT));
}

function ponerJsonP($usuarios){
    file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($usuarios, JSON_PRETTY_PRINT));
}
//$conteoUsuarios = json_decode(file_get_contents(__DIR__ . '../../../servername/whitelist.json'), true);




