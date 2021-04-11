<?php
//header('Content-Type: application/json;charset=utf-8');

$jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$data = json_decode($jsonString, true);


// Obtener el contenido del archivo de propiedades como una matriz de líneas
$myFile = '../../servername/server.properties';
$lines = file($myFile);
// Obtener el contenido del archivo como cadena
$content = file_get_contents($myFile);

// Obtener el contenido del archivo de Españo España como una matriz de líneas
$myFile2 = '../../servername/resource_packs/vanilla/texts/es_ES.lang';
$lines2 = file($myFile2);
// Obtener el contenido del archivo como cadena
$content2 = file_get_contents($myFile2);
// Obtener el contenido del archivo de Español Mexico como una matriz de líneas
$myFile3 = '../../servername/resource_packs/vanilla/texts/es_MX.lang';
$lines3 = file($myFile3);
// Obtener el contenido del archivo como cadena
$content3 = file_get_contents($myFile3);



$txtinputName = (isset($_POST['inputName'])) ? $_POST['inputName'] : "";
$txtLevelName = (isset($_POST['LevelName'])) ? $_POST['LevelName'] : "";
$txtUsarTruco = (isset($_POST['UsarTruco'])) ? $_POST['UsarTruco'] : "";
$txtGamemode = (isset($_POST['Gamemode'])) ? $_POST['Gamemode'] : "";
$txtDificultad = (isset($_POST['Dificultad'])) ? ($_POST['Dificultad']) : "";
$txtWhitelist = (isset($_POST['Whitelist'])) ? $_POST['Whitelist'] : "";
$txtGamerMax = (isset($_POST['GamerMax'])) ? $_POST['GamerMax'] : "";
$txtSemilla = (isset($_POST['Semilla'])) ? $_POST['Semilla'] : "";
$txtIpv4 = (isset($_POST['Ipv4'])) ? $_POST['Ipv4'] : "";
$txtIpv6 = (isset($_POST['Ipv6'])) ? $_POST['Ipv6'] : "";

$txtDiscord = (isset($_POST['Discord'])) ? $_POST['Discord'] : "";
$txtTelegram = (isset($_POST['Telegram'])) ? $_POST['Telegram'] : "";

$txtName = (isset($_POST['name'])) ? $_POST['name'] : "";
$txtData = (isset($_POST['data'])) ? $_POST['data'] : "";
$txtData0 = (isset($_POST['data0'])) ? $_POST['data0'] : "";
$txtData1 = (isset($_POST['data1'])) ? $_POST['data1'] : "";
$txtData2 = (isset($_POST['data2'])) ? $_POST['data2'] : "";
$txtData3 = (isset($_POST['data3'])) ? $_POST['data3'] : "";
$txtData4 = (isset($_POST['data4'])) ? $_POST['data4'] : "";
$txtData5 = (isset($_POST['data5'])) ? $_POST['data5'] : "";
$txtData6 = (isset($_POST['data6'])) ? $_POST['data6'] : "";
$txtData7 = (isset($_POST['data7'])) ? $_POST['data7'] : "";
$txtData8 = (isset($_POST['data8'])) ? $_POST['data8'] : "";
$txtData9 = (isset($_POST['data9'])) ? $_POST['data9'] : "";
$txtData10 = (isset($_POST['data10'])) ? $_POST['data10'] : "";
$txtData11 = (isset($_POST['data11'])) ? $_POST['data11'] : "";
$txtData12 = (isset($_POST['data12'])) ? $_POST['data12'] : "";

$txtUsarRegla = (isset($_POST['UsarRegla'])) ? $_POST['UsarRegla'] : "";
$txtAlerta = (isset($_POST['Alerta'])) ? $_POST['Alerta'] : "";
$txtAlerta0 = (isset($_POST['Alerta0'])) ? $_POST['Alerta0'] : "";
$txtText = (isset($_POST['txt'])) ? $_POST['txt'] : "";
$txtType = (isset($_POST['type'])) ? $_POST['type'] : "";
$txtType0 = (isset($_POST['type0'])) ? $_POST['type0'] : "";

$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

// marcar datos obligatorios en el Modal
/** 
echo $_POST['UsarRegla'];

echo $accion.'<br>';

if ($accion == 'eliminar' && empty($_POST['data0'])) {
echo print_r($_POST)."<br>".$_POST['data0']."<br>".$data[18]['data0'];

} else {
echo "Nada :(".'<br>';  
}
 */
$error = array();



switch ($accion) {

        // Agregar Nombre sel Servidor
    case 'btninputName':

        $line = $lines[0];
        $input = $txtinputName . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "server-name=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);
        //$newcontent1 = str_replace($lines1[7], $input, $content1);
        //file_put_contents($myFile1, $newcontent1);

        foreach ($data as $key) {
            if ($data[0]['id'] == '1') {
                $data[0]['data'] = $txtinputName;
                $data[0]['spain'] = $txtinputName;
                $data[0]['btn'] = '';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        //echo $line;
        break;

        // Agregar Nombre del Nivel (Predeterminado: Bedrock level)
    case 'btnLevelName':

        $lineb = $lines[54];
        $inputb = $txtLevelName . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetextb = "level-name=";
        $outputb = "$linetextb$inputb";
        $newcontentb = str_replace($lineb, $outputb, $content);
        file_put_contents($myFile, $newcontentb);

        foreach ($data as $key) {
            if ($data[1]['id'] == '2') {
                $data[1]['data'] = $txtLevelName;
                $data[1]['spain'] = $txtLevelName;
                $data[1]['btn'] = '<i class="fas fa-file-signature"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        break;

        // Habilitar Usar Trucos en el Servidor
    case 'btnUsarTruco':
        $lineb = $lines[12];
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetextb = "allow-cheats=";
        $trueb = $linetextb . "true" . "\n";
        $falseb = $linetextb . "false" . "\n";

        if ($txtUsarTruco == 'on') {
            $newcontent = str_replace($lineb, $trueb, $content);
            file_put_contents($myFile, $newcontent);
        } else {
            $newcontent0 = str_replace($lineb, $falseb, $content);
            file_put_contents($myFile, $newcontent0);
        }

        foreach ($data as $key) {
            if ($data[2]['id'] == '3' && $txtUsarTruco == 'on') {
                $data[2]['data'] = 'true';
                $data[2]['spain'] = 'Activado';
                $data[2]['btn'] = 'checked';
                $data[2]['icon'] = '<i class="fas fa-check"></i>';
            } else {
                $data[2]['data'] = 'false';
                $data[2]['spain'] = 'Desactivado';
                $data[2]['btn'] = '';
                $data[2]['icon'] = '<i class="fas fa-times"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //exit;


        //  header('Location: index.php');
        // JSON_PRETTY_PRINT
        //echo $line;
        break;

        // Seleccionar Modp de Juego en el Servidor
    case 'btnGamemode':

        $lined = $lines[4];
        $inputd = $txtGamemode . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetextd = "gamemode=";
        $outputd = "$linetextd$inputd";
        $newcontentd = str_replace($lined, $outputd, $content);
        file_put_contents($myFile, $newcontentd);

        foreach ($data as $key) {
            if ($txtGamemode == 'survival' && $data[3]['id'] == '4') {
                $data[3]['data'] = 'survival';
                $data[3]['spain'] = 'Supervivencia';
                $data[3]['btn'] = '';
            }
            if ($txtGamemode == 'creative' && $data[3]['id'] == '4') {
                $data[3]['data'] = 'creative';
                $data[3]['spain'] = 'Creativo';
                $data[3]['btn'] = '';
            }
            if ($txtGamemode == 'adventure' && $data[3]['id'] == '4') {
                $data[3]['data'] = 'adventure';
                $data[3]['spain'] = 'Aventura';
                $data[3]['btn'] = '';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        break;

        // Seleccionar Dificultad en el Servidor
    case 'btnDificultad':
        if ($txtDificultad) {
            echo htmlentities($_POST['Dificultad'], ENT_QUOTES, "UTF-8");
        } else {
            echo "Dificultad requerido";
            exit;
        }
        $line = $lines[8];
        $input = $txtDificultad . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "difficulty=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);

        foreach ($data as $key) {
            if ($txtDificultad == 'peaceful' && $data[4]['id'] == '5') {
                $data[4]['data'] = 'peaceful';
                $data[4]['spain'] = 'Pacífico';
                $data[4]['btn'] = '';
            }
            if ($txtDificultad == 'easy' && $data[4]['id'] == '5') {
                $data[4]['data'] = 'easy';
                $data[4]['spain'] = 'Fácil';
                $data[4]['btn'] = '';
            }
            if ($txtDificultad == 'normal' && $data[4]['id'] == '5') {
                $data[4]['data'] = 'normal';
                $data[4]['spain'] = 'Normal';
                $data[4]['btn'] = '';
            }
            if ($txtDificultad == 'hard' && $data[4]['id'] == '5') {
                $data[4]['data'] = 'hard';
                $data[4]['spain'] = 'Difícil';
                $data[4]['btn'] = '';
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        break;

        // Habilitar permiso a jugadores en el Servidor sel Servidor
    case 'btnWhitelist':
        $line = $lines[26];
        $ltext = "white-list=";
        $true = $ltext . 'true' . "\n";
        $false = $ltext . 'false' . "\n";


        if ($txtWhitelist == 'on') {
            $newcontent = str_replace($line, $true, $content);
            file_put_contents($myFile, $newcontent);
        } else {
            $newcontent = str_replace($line, $false, $content);
            file_put_contents($myFile, $newcontent);
        }

        foreach ($data as $key) {
            if ($data[5]['id'] == '6' && $txtWhitelist == 'on') {
                $data[5]['data'] = 'true';
                $data[5]['spain'] = 'Activado';
                $data[5]['btn'] = 'checked';
                $data[5]['icon'] = '<i class="fas fa-check"></i>';
            } else {
                $data[5]['data'] = 'false';
                $data[5]['spain'] = 'Desactivado';
                $data[5]['btn'] = '';
                $data[5]['icon'] = '<i class="fas fa-times"></i>';
            }
        }

        $newJsonStr = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonStr);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //exit;

        //header('Location: index.php');
        break;

        // Maximo de Jugadores en el Servidor sel Servidor
    case 'btnGamerMax':

        $line = $lines[16];
        $input = $txtGamerMax . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "max-players=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);

        foreach ($data as $key) {
            if ($data[6]['id'] == '7' && $txtGamerMax < '1') {
                $data[6]['data'] = $txtGamerMax;
                $data[6]['spain'] = 'Err: Mínimo 1 Jugador';
                $data[6]['btn'] = '<i class="fas fa-user-slash"></i>';
                $data[6]['icon'] = '<i class="fas fa-user-slash"></i>';
            } else {
                $data[6]['data'] = $txtGamerMax;
                $data[6]['spain'] = $txtGamerMax;
                $data[6]['btn'] = $txtGamerMax;
                $data[6]['icon'] = '<i class="fas fa-user-check"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        //echo $line;
        break;

        // Maximo de Jugadores en el Servidor sel Servidor
    case 'btnSemilla':

        $line = $lines[57];
        $input = $txtSemilla . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "level-seed=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);

        foreach ($data as $key) {
            if ($data[7]['id'] == '8' && $txtSemilla == '') {
                $data[7]['data'] = $txtSemilla;
                $data[7]['spain'] = 'Aleatorio';
                $data[7]['btn'] = '<i class="fas fa-random"></i>';
            } else {
                shell_exec('sudo rm -R dirname/minecraftbe/servername/worlds/');
                $data[7]['data'] = $txtSemilla;
                $data[7]['spain'] = $txtSemilla;
                $data[7]['btn'] = '<i class="fas fa-seedling"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);

        //          if ($txtSemilla == array()) {
        //              $newcontent1 = str_replace($lines1[28], "Aleatorio" . "\n", $content1);
        //              file_put_contents($myFile1, $newcontent1);
        //          }
        //              $newcontent1 = str_replace($lines1[28], $input, $content1);
        //              file_put_contents($myFile1, $newcontent1);

        break;

        // Puerto Ipv4 del Servidor sel Servidor
    case 'btnIpv4':

        $line = $lines[30];
        $input = $txtIpv4 . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "server-port=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);

        foreach ($data as $key) {
            if ($data[8]['id'] == '9') {
                $data[8]['data'] = $txtIpv4;
                $data[8]['spain'] = $txtIpv4;
                $data[8]['btn'] = '';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        //echo $line;
        break;

        // Puerto Ipv6 del Servidor sel Servidor
    case 'btnIpv6':

        $line = $lines[34];
        $input = $txtIpv6 . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "server-port6=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);

        foreach ($data as $key) {
            if ($data[9]['id'] == '10') {
                $data[9]['data'] = $txtIpv6;
                $data[9]['spain'] = $txtIpv6;
                $data[9]['btn'] = '';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //print_r($line);
        //echo $line;
        break;

        // Mensaje Información al iniciar juego en el Servidor sel Servidor
        //disconnectionScreen.notAllowed=No estás invitado a jugar en este servidor.	#
        //disconnectionScreen.notAllowed=Solicita permiso en  para jugar en este servidor.	#
    case 'btnDiscord':
        /**/
        $input = $txtDiscord;
        $linetext = "disconnectionScreen.notAllowed=Solicita permiso en";
        $linetext1 = "Solicita permiso en";
        $linetex3 = "para jugar en este servidor.	#";
        $linetex4 = "para jugar en este servidor.";
        $output = "$linetext $input $linetex3" . "\n";
        $output2 = "$linetext1 $input $linetex4";

        $newcontent = str_replace($lines2[2312], $output, $content2);
        file_put_contents($myFile2, $newcontent);

        $newcontent3 = str_replace($lines3[2312], $output, $content3);
        file_put_contents($myFile3, $newcontent3);

        foreach ($data as $key) {
            if ($data[10]['id'] == '11') {

                $data[10]['btn'] = $txtDiscord;
                if ($data[10]['btn'] == "") {
                    $data[10]['spain'] = '';
                } else {
                    $data[10]['spain'] = 'Discord';
                }
            }
        }
        /**/
        if ($data[11]['id'] == '12') {
            $data[11]['data'] = $output2;
            $data[11]['spain'] = $output2;
            $data[11]['btn'] = '';
        }



        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);

        break;


    case 'btnTelegram':

        foreach ($data as $key) {
            if ($data[17]['id'] == '18') {

                $data[17]['btn'] = $txtTelegram;
                if ($data[17]['btn'] == "") {
                    $data[17]['spain'] = '';
                } else {
                    $data[17]['spain'] = 'Telegram';
                }
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);

        break;

    case 'btnReglas':

        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {

                if (!empty($_POST['name'])) {
                    $data[18]['name'] = $txtName;
                    $data[18]['spain'] = $txtName;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data'])) {
                    $data[18]['data'] = $txtData;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data0'])) {
                    $data[18]['data0'] = $txtData0;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data1'])) {
                    $data[18]['data1'] = $txtData1;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data2'])) {
                    $data[18]['data2'] = $txtData2;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data3'])) {
                    $data[18]['data3'] = $txtData3;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data4'])) {
                    $data[18]['data4'] = $txtData4;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data5'])) {
                    $data[18]['data5'] = $txtData5;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data6'])) {
                    $data[18]['data6'] = $txtData6;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data7'])) {
                    $data[18]['data7'] = $txtData7;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data8'])) {
                    $data[18]['data8'] = $txtData8;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data9'])) {
                    $data[18]['data9'] = $txtData9;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data10'])) {
                    $data[18]['data10'] = $txtData10;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data11'])) {
                    $data[18]['data11'] = $txtData11;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
                if (!empty($_POST['data12'])) {
                    $data[18]['data12'] = $txtData12;
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);

        break;

    case 'name':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['name'])) {
                    $data[18]['name'] = "";
                    $data[18]['spain'] = "";
                    $data[18]['icon'] = "";
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data'])) {
                    $data[18]['data'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data0':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data0'])) {
                    $data[18]['data0'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data1':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data1'])) {
                    $data[18]['data1'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data2':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data2'])) {
                    $data[18]['data2'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data3':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data3'])) {
                    $data[18]['data3'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data4':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data4'])) {
                    $data[18]['data4'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data5':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data5'])) {
                    $data[18]['data5'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data6':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data6'])) {
                    $data[18]['data6'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data7':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data7'])) {
                    $data[18]['data7'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data8':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data8'])) {
                    $data[18]['data8'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data9':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data9'])) {
                    $data[18]['data9'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data10':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data10'])) {
                    $data[18]['data10'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data11':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data11'])) {
                    $data[18]['data11'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'data12':
        foreach ($data as $key) {
            if ($data[18]['id'] == '19') {
                if ($accion == "eliminar" || empty($_POST['data12'])) {
                    $data[18]['data12'] = "";
                    $data[18]['icon'] = '<i class="fas fa-check"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'btnUsarRegla':
        foreach ($data as $key) {
            if ($data[19]['id'] == '20' && $txtUsarRegla == 'on') {
                $data[19]['data'] = 'true';
                $data[19]['spain'] = 'Activado';
                $data[19]['btn'] = 'checked';
                $data[19]['icon'] = '<i class="fas fa-check fa-xs" style="color: #2EFA2B;"></i>';
            } else {
                $data[19]['data'] = '';
                $data[19]['spain'] = 'Desactivado';
                $data[19]['btn'] = '';
                $data[19]['icon'] = '<i class="fas fa-times fa-xs" style="color: #FA0D02;"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        /** */
        break;

    case 'guaralerta':
        foreach ($data as $key) {
            if ($data[20]['id'] == '21') {
                $data[20]['name'] = $txtName;
                $data[20]['txt'] = $txtText;

                if ($txtType == 1) {
                    $data[20]['type'] = 'success';
                    $data[20]['logo'] = '<i class="fas fa-check" style="color: #009B00;"></i>';
                }
                if ($txtType == 2) {
                    $data[20]['type'] = 'info';
                    $data[20]['logo'] = '<i class="fas fa-info" style="color: #2E86C1;"></i>';
                }
                if ($txtType == 3) {
                    $data[20]['type'] = 'warning';
                    $data[20]['logo'] = '<i class="fas fa-exclamation" style="color: #F39C12;"></i>';
                }
                if ($txtType == 4) {
                    $data[20]['type'] = 'error';
                    $data[20]['logo'] = '<i class="fas fa-times" style="color: #C41300;"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'elimalerta':
        foreach ($data as $key) {
            if ($data[20]['id'] == '21') {
                $data[20]['name'] = "";
                $data[20]['txt'] = "";
                $data[20]['type'] = "";
                $data[20]['data'] = '';
                $data[20]['spain'] = 'Desactivado';
                $data[20]['btn'] = '';
                $data[20]['logo'] = '<i class="fas fa-edit" style="color: #8B0483;"></i>';
                $data[20]['icon'] = '<i class="fas fa-times fa-xs" style="color: #FA0D02;"></i>';
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

case 'btnType':
    foreach ($data as $key) {
        if ($data[20]['id'] == '21') {

            if ($txtType == 1) {
                $data[20]['type'] = 'success';
                $data[20]['logo'] = '<i class="fas fa-check" style="color: #009B00;"></i>';
            }
            if ($txtType == 2) {
                $data[20]['type'] = 'info';
                $data[20]['logo'] = '<i class="fas fa-info" style="color: #2E86C1;"></i>';
            }
            if ($txtType == 3) {
                $data[20]['type'] = 'warning';
                $data[20]['logo'] = '<i class="fas fa-exclamation" style="color: #F39C12;"></i>';
            }
            if ($txtType == 4) {
                $data[20]['type'] = 'error';
                $data[20]['logo'] = '<i class="fas fa-times" style="color: #C41300;"></i>';
            }
        }
    }
    $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

    unset($_POST);
    unset($_REQUEST);
    header("Location: " . $_SERVER['PHP_SELF']);
    break;

    case 'btnAlerta':
        foreach ($data as $key) {
            if ($data[20]['id'] == '21' && $txtAlerta == 'on') {
                $data[20]['data'] = 'true';
                $data[20]['spain'] = 'Activado';
                $data[20]['btn'] = 'checked';
                $data[20]['icon'] = '<i class="fas fa-check-circle fa-xs" style="color: #2EFA2B;"></i>';
            } else {
                $data[20]['data'] = '';
                $data[20]['spain'] = 'Desactivado';
                $data[20]['btn'] = '';
                $data[20]['icon'] = '<i class="fas fa-times-circle fa-xs" style="color: #FA0D02;"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        /** */
        break;
        
    case 'guaralerta0':
        foreach ($data as $key) {
            if ($data[21]['id'] == '22') {
                $data[21]['name'] = $txtName;
                $data[21]['txt'] = $txtText;

                if ($txtType0 == 1) {
                    $data[21]['type'] = 'success';
                    $data[21]['logo'] = '<i class="fas fa-check" style="color: #01DF01;"></i>';
                }
                if ($txtType0 == 2) {
                    $data[21]['type'] = 'info';
                    $data[21]['logo'] = '<i class="fas fa-info" style="color: #2E86C1;"></i>';
                }
                if ($txtType0 == 3) {
                    $data[21]['type'] = 'warning';
                    $data[21]['logo'] = '<i class="fas fa-exclamation" style="color: #F39C12;"></i>';
                }
                if ($txtType0 == 4) {
                    $data[21]['type'] = 'error';
                    $data[21]['logo'] = '<i class="fas fa-times" style="color: #C41300;"></i>';
                }
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'elimalerta0':
        foreach ($data as $key) {
            if ($data[21]['id'] == '22') {
                $data[21]['name'] = "";
                $data[21]['txt'] = "";
                $data[21]['type'] = "";
                $data[21]['data'] = '';
                $data[21]['spain'] = 'Desactivado';
                $data[21]['btn'] = '';
                $data[21]['logo'] = '<i class="fas fa-edit" style="color: #8B0483;"></i>';
                $data[21]['icon'] = '<i class="fas fa-times fa-xs" style="color: #FA0D02;"></i>';
            }
        }
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

        case 'btnType0':
            foreach ($data as $key) {
                if ($data[21]['id'] == '22') {
        
                    if ($txtType0 == 1) {
                        $data[21]['type'] = 'success';
                        $data[21]['logo'] = '<i class="fas fa-check" style="color: #01DF01;"></i>';
                    }
                    if ($txtType0 == 2) {
                        $data[21]['type'] = 'info';
                        $data[21]['logo'] = '<i class="fas fa-info" style="color: #2E86C1;"></i>';
                    }
                    if ($txtType0 == 3) {
                        $data[21]['type'] = 'warning';
                        $data[21]['logo'] = '<i class="fas fa-exclamation" style="color: #F39C12;"></i>';
                    }
                    if ($txtType0 == 4) {
                        $data[21]['type'] = 'error';
                        $data[21]['logo'] = '<i class="fas fa-times" style="color: #C41300;"></i>';
                    }
                }
            }
            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);
        
            unset($_POST);
            unset($_REQUEST);
            header("Location: " . $_SERVER['PHP_SELF']);
            break;

    case 'btnAlerta0':
        foreach ($data as $key) {
            if ($data[21]['id'] == '22' && $txtAlerta0 == 'on') {
                $data[21]['data'] = 'true';
                $data[21]['spain'] = 'Activado';
                $data[21]['btn'] = 'checked';
                $data[21]['icon'] = '<i class="fas fa-check-circle fa-xs" style="color: #2EFA2B;"></i>';
            } else {
                $data[21]['data'] = '';
                $data[21]['spain'] = 'Desactivado';
                $data[21]['btn'] = '';
                $data[21]['icon'] = '<i class="fas fa-times-circle fa-xs" style="color: #FA0D02;"></i>';
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        /** */
        break;
}
