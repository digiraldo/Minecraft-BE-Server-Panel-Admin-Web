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


function obtenerPorPermission($pe){

    $perm = obtenerUsuarios();
    foreach ($perm as $per) {
        if ($per['permission'] == $pe) {
            return $per;
        }
    }
    return null;
}






$perm = obtenerUsuarios();
foreach ($perm as $i => $o) {
    if ($o['permission'] == 'operator') {
       // $encode = json_encode($o);
        //echo $encode;
        ponerJsonP($perm);
       // ponerJson($encode);
    }
}


function ponerJsonP($perm){
    //file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($encode, JSON_PRETTY_PRINT));
    $usr = json_encode($perm, JSON_PRETTY_PRINT);
    
    echo $usr;
}

function ponerJson($encode){
    //file_put_contents(__DIR__ . '../../../servername/permissions.json', json_encode($encode, JSON_PRETTY_PRINT));
    $usr2 = json_encode($encode, JSON_PRETTY_PRINT);
    
    echo $usr2;
}

//echo $usuarioP

//$permi = [
//    $usuarioN['visitor'] => "Visitante",
//    $usuarioN['member'] => "Miembro",
//    $usuarioN['operator'] => "Operador",
//];


// "visitor", "member", "operator" 



?>