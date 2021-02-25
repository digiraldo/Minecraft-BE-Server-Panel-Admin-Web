<?php
$jsonRo = file_get_contents(__DIR__ . '../../../servername/whitelist.json');
$usuariosReg = json_decode($jsonRo, true);



function obtenerUsuarios()
{
    return json_decode(file_get_contents(__DIR__ . '../../../servername/whitelist.json'), true);
}


function obtenerUsuarioPorName($nam)
{
    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $usuarioN) {
        if ($usuarioN['name'] == $nam) {
            return $usuarioN;
        }
    }
    return null;
}

function crearUsuario($dat){
    $dat['xuid'] = '';
    $dat['ignoresPlayerLimit'] = false;
    $usuarios = obtenerUsuarios();
    $usuarios[] = $dat;
    ponerJson($usuarios);
    }


function actualizarUsuario($dat, $nam) {
    $actualizarUsuario = [];
    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $i => $usuarioN) {
        if ($usuarioN['name'] == $nam) {
            $usuarios[$i] = $actualizarUsuario = array_merge($usuarioN, $dat);
        }
    }
    ponerJson($usuarios);
    return $actualizarUsuario;
}


function eliminarUsuario($nam)
{
    $usuarios = obtenerUsuarios();
    foreach ($usuarios as $i => $usuarioN) {
        if ($usuarioN['name'] == $nam) {
            array_splice($usuarios, $i, 1);
        }
    }
    ponerJson($usuarios);
}

function ponerJson($usuarios)
{
    file_put_contents(__DIR__ . '../../../servername/whitelist.json', json_encode($usuarios, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function validarUsuario($usuarioN, &$errors)
{
$esValido = true;
// Start of validation
if (!$usuarioN['name']) {
$esValido = false;
$errors['name'] = 'Gamertag o usuario de Minecraft obligatorio';
}

// End Of validation
return $esValido;
}