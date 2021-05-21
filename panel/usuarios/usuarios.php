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

// xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx editando
/*
https://stackoverflow.com/questions/6661530/php-multidimensional-array-search-by-value
https://blog.vermiip.es/2013/08/01/comprobar-si-un-valor-existe-en-un-array-php/#:~:text=Si%20tenemos%20un%20array%20y,devuelve%20un%20TRUE%20o%20FALSE.
https://stackoverflow.com/questions/4128323/in-array-and-multidimensional-array
https://es.stackoverflow.com/questions/302182/verificar-si-ya-existe-usuario-y-email-en-la-base-de-datos-php
https://informaticapc.com/tutorial-php/validar-formulario.php
https://manuales.guebs.com/php/function.array-search.html
*/
$usuarios = obtenerUsuarios();
$jsonRo = file_get_contents(__DIR__ . '../../../servername/whitelist.json');
$usuariosReg = json_decode($jsonRo, true);
$nameusr = $_POST['name'];
if (!$usuarioN['name']) {
$esValido = false;
$errors['name'] = 'Gamertag o usuario de Minecraft obligatorio';
//print_r($usuarios)."<br>";
//print_r(array_search('disaned', array_column($usuarios, 'name')));
print_r(array_search('disaned', $usuarios));
print_r(obtenerUsuarioPorName('disaned', $usuarios));
//echo $usuarios."<br>";
//var_dump(json_decode($jsonRo, true));
//$key = array_search('100', array_column($userdb, 'uid'));
// }elseif (array_search('disaned', $usuariosReg)) {
// }elseif (obtenerUsuarioPorName('disaned', $usuariosReg)) {
}elseif (obtenerUsuarioPorName('disaned', array_column($usuarios, 'name'))) {
    $errors['name'] = 'Gamertag o usuario de Minecraft ya existe';
}


// End Of validation
return $esValido;
}

$jsonRolesJ = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$rolesJ = json_decode($jsonRolesJ, true);

$jsonRoles = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$roles = json_decode($jsonRoles, true);

$usuarios = obtenerUsuarios();


if (empty($usuarios)) {
    $coname = false;
    $countArrname = 0;
} else {
    $coname = array_column($usuarios, 'name');
    $countArrname = count($coname);//array with all count
}



if (empty($roles)) {
    $cogamertag = false;
    $countArrgamertag = -1; // no se cuenta propietario
} else {
    $cogamertag = array_column($roles, 'gamertag');
    $countArrgamertag = count($cogamertag)-1;//array with all count
}


/*
echo print_r($coname)."</br>";
echo print_r($cogamertag)."</br>";

echo $countArrgamertag."</br>";
echo $countArrname."</br>"; 
*/
// $countArrgamertag = array_count_values($cogamertag);//array with all count
// $countArrname = array_count_values($coname);//array with all count

$newcontzero = $countArrgamertag - $countArrname;

if (empty($usuarios) && count($roles) == 1) {
    $newcont = false;
} elseif (!empty($usuarios) && count($roles) == 1) {
    $newcont = false;
} elseif ($newcontzero == 0) {
    $newcont = false;
} else {
    $newcont = $countArrgamertag - $countArrname;
}




