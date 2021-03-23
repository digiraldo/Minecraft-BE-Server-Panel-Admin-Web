<?php
$jsonRo = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$rolesReg = json_decode($jsonRo, true);



function obtenerRol()
{
    return json_decode(file_get_contents(__DIR__ . '../../../config/usradmin.json'), true);
}


function obtenerRolPor_Id($id)
{
    $roles = obtenerRol();
    foreach ($roles as $rolU) {
        if ($rolU['id'] == $id) {
            return $rolU;
        }
    }
    return null;
}

function crearRol($dat){
    //$dat['clave'] = md5($_POST['clave']);
    //$dat['fecha'] = date("d/m/Y");
    $roles = obtenerRol();
    $roles[] = $dat;
    colocarJson($roles);
    }


function actualizarRol($dat, $id) {
    $actualizarRol = [];
    $roles = obtenerRol();
    foreach ($roles as $i => $rolU) {
        if ($rolU['id'] == $id) {
            $roles[$i] = $actualizarRol = array_merge($rolU, $dat);
        }
    }
    colocarJson($roles);
    return $actualizarRol;
}


function eliminarRol($id)
{
    $roles = obtenerRol();
    foreach ($roles as $i => $rolU) {
        if ($rolU['id'] == $id) {
            array_splice($roles, $i, 1);
        }
    }
    colocarJson($roles);
}

function colocarJson($roles)
{
    file_put_contents(__DIR__ . '../../../config/usradmin.json', json_encode($roles, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function validarRol($rolU, &$errors)
{
$esValido = true;
// Start of validation
if (!$rolU['nombre']) {
$esValido = false;
$errors['nombre'] = 'El nombre es obligatorio';
}
if (!$rolU['usuario'] || strlen($rolU['usuario']) < 4 || strlen($rolU['usuario']) > 10) {
$esValido = false;
$errors['usuario'] = 'Obligatorio, debe tener más de 4 y menos de 10 caracteres';
}
if (!$rolU['clave']) {
$esValido = false;
$errors['clave'] = 'La contraseña es obligatoria';
}
if (!$rolU['gamertag']) {
$esValido = false;
$errors['gamertag'] = 'Gamertag o usuario de Minecraft obligatorio';
}

// End Of validation
return $esValido;
}