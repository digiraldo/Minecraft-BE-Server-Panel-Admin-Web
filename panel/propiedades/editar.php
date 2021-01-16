<?php


$jsonString = file_get_contents(__DIR__ . '../../../servername/srvdatos.json');
$data = json_decode($jsonString, true);


// Obtener el contenido del archivo de propiedades como una matriz de líneas
$myFile = '../../servername/server.properties';
$lines = file($myFile);
// Obtener el contenido del archivo como cadena
$content = file_get_contents($myFile);

// Obtener el contenido del archivo de datos txt como una matriz de líneas ## No Usado
$myFile1 = '../../servername/srvdatos.txt';
$lines1 = file($myFile1);
// Obtener el contenido del archivo como cadena
$content1 = file_get_contents($myFile1);

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




  $txtinputName=(isset($_POST['inputName']))?$_POST['inputName']:"";
  $txtLevelName=(isset($_POST['LevelName']))?$_POST['LevelName']:"";
  $txtUsarTruco=(isset($_POST['UsarTruco']))?$_POST['UsarTruco']:"";
  $txtGamemode=(isset($_POST['Gamemode']))?$_POST['Gamemode']:"";
  $txtDificultad=(isset($_POST['Dificultad']))?($_POST['Dificultad']):"";
  $txtWhitelist=(isset($_POST['Whitelist']))?$_POST['Whitelist']:"";
  $txtGamerMax=(isset($_POST['GamerMax']))?$_POST['GamerMax']:"";
  $txtSemilla=(isset($_POST['Semilla']))?$_POST['Semilla']:"";
  $txtIpv4=(isset($_POST['Ipv4']))?$_POST['Ipv4']:"";
  $txtIpv6=(isset($_POST['Ipv6']))?$_POST['Ipv6']:"";

  $txtDiscord=(isset($_POST['Discord']))?$_POST['Discord']:"";
 
  $accion=(isset($_POST['accion']))?$_POST['accion']:"";
  
  // marcar datos obligatorios en el Modal
  
  $error=array();


 
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

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
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
                  $data[1]['btn'] = '';
                }
            }

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
        //print_r($line);
    break;

    // Habilitar Usar Trucos en el Servidor
    case 'btnUsarTruco':
        $lineb = $lines[12];
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetextb = "allow-cheats=";
        $trueb = $linetextb."true" . "\n";
        $falseb = $linetextb."false" . "\n";

       if ($txtUsarTruco == 'on') {
            $newcontent = str_replace($lineb, $trueb, $content);
            file_put_contents($myFile, $newcontent); 
       }else {
            $newcontent0 = str_replace($lineb, $falseb, $content);
            file_put_contents($myFile, $newcontent0);
       }

       foreach ($data as $key) {
              if ($data[2]['id'] == '3' && $txtUsarTruco == 'on') {
                    $data[2]['data'] = 'true';
                    $data[2]['spain'] = 'Activado';
                    $data[2]['btn'] = 'checked';
                    $data[2]['icon'] = '<i class="fas fa-check"></i>';
                  }
              else  {
                    $data[2]['data'] = 'false';
                    $data[2]['spain'] = 'Desactivado';
                    $data[2]['btn'] = '';
                    $data[2]['icon'] = '<i class="fas fa-times"></i>';
                  }
            
       }

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
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

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
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
        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
        file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: ".$_SERVER['PHP_SELF']);
        //print_r($line);
    break;

    // Habilitar permiso a jugadores en el Servidor sel Servidor
    case 'btnWhitelist':
        $line = $lines[26];
        $ltext = "white-list=";
        $true = $ltext.'true' . "\n";
        $false = $ltext.'false' . "\n";
        

        if ($txtWhitelist == 'on') {
            $newcontent = str_replace($line, $true, $content);
            file_put_contents($myFile, $newcontent); 
        }else {
            $newcontent = str_replace($line, $false, $content);
            file_put_contents($myFile, $newcontent); 
        }

       foreach ($data as $key) {
    if ($data[5]['id'] == '6' && $txtWhitelist == 'on') {
          $data[5]['data'] = 'true';
          $data[5]['spain'] = 'Activado';
          $data[5]['btn'] = 'checked';
          $data[5]['icon'] = '<i class="fas fa-check"></i>';
        }
    else  {
          $data[5]['data'] = 'false';
          $data[5]['spain'] = 'Desactivado';
          $data[5]['btn'] = '';
          $data[5]['icon'] = '<i class="fas fa-times"></i>';
        }
    
        }

            $newJsonStr = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonStr);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
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
                }else {
                  $data[6]['data'] = $txtGamerMax;
                  $data[6]['spain'] = $txtGamerMax;
                  $data[6]['btn'] = $txtGamerMax;
                  $data[6]['icon'] = '<i class="fas fa-user-check"></i>';
                }
            }

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
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
                  $data[7]['btn'] = '';
                }else {
                  $data[7]['data'] = $txtSemilla;
                  $data[7]['spain'] = $txtSemilla;
                  $data[7]['btn'] = '';
                }
            }

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);



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

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
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

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);
        //print_r($line);
        //echo $line;
    break;

    // Mensaje Información al iniciar juego en el Servidor sel Servidor
    //disconnectionScreen.notAllowed=No estás invitado a jugar en este servidor.	#
    //disconnectionScreen.notAllowed=Solicita permiso en  para jugar en este servidor.	#
    case 'btnDiscord':

        //$line = $lines2[2312];
        //$line1 = $lines3[2312];
        // $line2 = $lines1[34];
        
        $input = $txtDiscord;
        //$in = $txtDiscord . "\n";
        //$input2 = "$txtDiscord $linetex3" . "\n";
        //$input3 = "$txtDiscord $linetex4" . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
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
                  $data[10]['data'] = $txtDiscord;
                  $data[10]['spain'] = $txtDiscord;
                  $data[10]['btn'] = '';
                }
            
            if ($data[11]['id'] == '12') {
                $data[11]['data'] = $output2;
                $data[11]['spain'] = $output2;
                $data[11]['btn'] = '';
              }
        }

            $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
            file_put_contents(__DIR__ . '../../../servername/srvdatos.json', $newJsonString);

            unset($_POST);
            unset($_REQUEST);
            header("Location: ".$_SERVER['PHP_SELF']);

    break;
    

}

?>