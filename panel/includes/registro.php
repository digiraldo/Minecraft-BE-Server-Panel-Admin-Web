<?php
setlocale(LC_ALL, "es_ES");
date_default_timezone_set('America/Bogota');
/*
$clave=md5('clave del usuario');
echo 'Clave encriptada: '.$clave;
*/
/*
"id": 32548752,
"nombre": "Didier",
"usuario": "Didier",
"clave": "12345678",
"pais": "",
"ciudad": "",
"gamertag": "Xbox Id",
"id_rol": 1,
"rol": "Administrador",
"contacto": "Telegram: @dparceros",
"fecha": "",
"img": "usuario.png"
*/

function obtenerRegis() {
    return json_decode(file_get_contents(__DIR__ . 'config/usradmin.json'), true);
}

function obtenerRegisPorId($id) {
    $regist = obtenerRegis();
    foreach ($regist as $registU) {
        if ($registU['id'] == $id) {
            return $registU;
        }
    }
    return null;
}

function crearRegis($rdat) {
    $rdat['clave'] = md5($_POST['clave']);
    $rdat['ciudad'] = false;
    $rdat['id_rol'] = 4;
    $rdat['rol'] = 'Registrado';
    $rdat['fecha'] = date("d/m/Y");
    $regist = obtenerRegis();
    $regist[] = $rdat;
    addJson($regist);
}

function addJson($regist) {
    file_put_contents(__DIR__ . '../../../config/usradmin.json', json_encode($regist, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

function validarRegis($registU, &$erro) {
    $es_Valido = true;
    // Start of validation
    if (!$registU['nombre']) {
        $es_Valido = false;
        $erro['nombre'] = 'El nombre es obligatorio';
    }
    if (!$registU['usuario'] || strlen($registU['usuario']) < 4 || strlen($registU['usuario']) > 10) {
        $es_Valido = false;
        $erro['usuario'] = 'Obligatorio, debe tener más de 4 y menos de 10 caracteres';
    }
    if (!$registU['clave']) {
        $es_Valido = false;
        $erro['clave'] = 'La contraseña es obligatoria';
    }
    if (!$registU['gamertag']) {
        $es_Valido = false;
        $erro['gamertag'] = 'Gamertag o usuario de Minecraft obligatorio';
    }

    // End Of validation
    return $es_Valido;
}

$jsonString = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$rdata = json_decode($jsonString, true);

foreach ($rdata as $key => $value) {
    $codigo = (empty($rdata[$key]['id']) ? 1 : $rdata[$key]['id'] += 1);
}
//echo 'El codigo actual es: '.$codigo; 

$accion = (isset($_POST['id'])) ? $_POST['id'] : "";

// marcar datos obligatorios en el Modal
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="hidden";
$mostrarModal=false;

switch ($accion) {

        // Agregar Usuario -- Agregar Usuario -- Agregar Usuario -- Agregar Usuario -- Agregar Usuario -- 
    case 'btnAgregar':

        $registU = [
            'id' => '',
            'nombre' => '',
            'usuario' => '',
            'clave' => '',
            'pais' => '',
            'ciudad' => '',
            'gamertag' => '',
            'id_rol' => '',
            'rol' => '',
            'contacto' => '',
            'fecha' => '',
            'img' => '',
        ];

        $erro = [
            'nombre' => '',
            'usuario' => '',
            'clave' => '',
            'gamertag' => '',
        ];

        $es_Valido = true;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $registU = array_merge($registU, $_POST);

            $es_Valido = validarRegis($registU, $erro);

            if ($es_Valido) {

                $_POST['id'] = $codigo;

                if ($_POST['rol'] == 'Administrador') {
                    $_POST['id_rol'] = 1;
                }
                if ($_POST['rol'] == 'Editor') {
                    $_POST['id_rol'] = 2;
                }
                if ($_POST['rol'] == 'Usuario') {
                    $_POST['id_rol'] = 3;
                }

                if ($_POST['img'] == 0) {
                    $_POST['img'] = 'arana.png';
                }
                if ($_POST['img'] == 1) {
                    $_POST['img'] = "arana_cueva.png";
                }
                if ($_POST['img'] == 2) {
                    $_POST['img'] = "cerdo.png";
                }
                if ($_POST['img'] == 3) {
                    $_POST['img'] = "creeper.png";
                }
                if ($_POST['img'] == 4) {
                    $_POST['img'] = "enderman.png";
                }
                if ($_POST['img'] == 5) {
                    $_POST['img'] = "esqueleto.png";
                }
                if ($_POST['img'] == 6) {
                    $_POST['img'] = "granjero.png";
                }
                if ($_POST['img'] == 7) {
                    $_POST['img'] = "lobo.png";
                }
                if ($_POST['img'] == 8) {
                    $_POST['img'] = "oveja.png";
                }
                if ($_POST['img'] == 9) {
                    $_POST['img'] = "steve.png";
                }
                if ($_POST['img'] == 10) {
                    $_POST['img'] = "usuario.png";
                }
                if ($_POST['img'] == 11) {
                    $_POST['img'] = "vaca.png";
                }
                if ($_POST['img'] == 12) {
                    $_POST['img'] = "zombie.png";
                }

                $registU = crearRegis($_POST);
                header("Location: ../../");
            }else {
                $mostrarModal=true;
            }
        }

        break;
}
