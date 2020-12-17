<?php


function obtenerUsuarios(){
    return json_decode(file_get_contents(__DIR__ . '../../../servername/whitelist.json'), true);
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


function crearUsuario($data){
    
    $data['ignoresPlayerLimit'] = false;
    $usuarios = obtenerUsuarios();
    $data['xuid'] = uuid['name'];
    $usuarios[] = $data;
    ponerJson ($usuarios);
}


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
    //file_put_contents(__DIR__ . '/servername/whitelist.json', json_encode($users, JSON_PRETTY_PRINT));

    ponerJson ($usuarios);
    return $actualizarUsuario;
}


function eliminarUsuario($name){

}

function ponerJson($usuarios){
    file_put_contents(__DIR__ . '../../../servername/whitelist.json', json_encode($usuarios, JSON_PRETTY_PRINT));
}

//$conteoUsuarios = json_decode(file_get_contents(__DIR__ . '../../../servername/whitelist.json'), true);




