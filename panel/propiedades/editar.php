<?php





// Obtener el contenido del archivo de texto como una matriz de líneas
$myFile = '../../servername/server.properties';
$lines = file($myFile);
// Obtener el contenido del archivo como cadena
$content = file_get_contents($myFile);

// Obtener el contenido del archivo de texto como una matriz de líneas
$myFile1 = '../../servername/srvdatos.txt';
$lines1 = file($myFile1);
// Obtener el contenido del archivo como cadena
$content1 = file_get_contents($myFile1);

// Obtener el contenido del archivo de texto como una matriz de líneas
$myFile2 = '../../servername/server.properties';
$lines2 = file($myFile2);
// Obtener el contenido del archivo como cadena
$content2 = file_get_contents($myFile2);




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
        $newcontent1 = str_replace($lines1[7], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
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
        $newcontent1 = str_replace($lines1[10], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
        //print_r($line);
    break;

    // Habilitar Usar Trucos en el Servidor
    case 'btnUsarTruco':

        $line = $lines[12];
        $input = $txtUsarTruco . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "allow-cheats=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);
        $newcontent1 = str_replace($lines1[13], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
        //print_r($line);
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
        $newcontent1 = str_replace($lines1[16], $input, $content1);
        file_put_contents($myFile1, $newcontent1);
    
        header('Location: index.php');
        //print_r($line);
    break;

    // Seleccionar Dificultad en el Servidor
    case 'btnDificultad':

        $lined = $lines[8];
        $inputd = $txtDificultad . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetextd = "difficulty=";
        $outputd = "$linetextd$inputd";
        $newcontentd = str_replace($lined, $outputd, $content);
        file_put_contents($myFile, $newcontentd);
        $newcontent1 = str_replace($lines1[19], $input, $content1);
        file_put_contents($myFile1, $newcontent1);
    
        header('Location: index.php');
        //print_r($line);
    break;

    // Habilitar permiso a jugadores en el Servidor sel Servidor
    case 'btnWhitelist':

        $line = $lines[26];
        $input = $txtWhitelist . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "white-list=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content);
        file_put_contents($myFile, $newcontent);
        $newcontent1 = str_replace($lines1[22], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
        //print_r($line);
        //echo $line;
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
        $newcontent1 = str_replace($lines1[25], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
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
        $newcontent1 = str_replace($lines1[28], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
        //print_r($line);
        //echo $line;
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
        $newcontent1 = str_replace($lines1[4], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
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
        $newcontent1 = str_replace($lines1[31], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
        //print_r($line);
        //echo $line;
    break;

    // Mensaje Información al iniciar juego en el Servidor sel Servidor
    case 'btnIpv6':

        $line = $lines2[34];
        $input = $txtDiscord . "\n";
        // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
        $linetext = "server-port6=";
        $output = "$linetext$input";
        $newcontent = str_replace($line, $output, $content2);
        file_put_contents($myFile2, $newcontent);
        $newcontent1 = str_replace($lines1[34], $input, $content1);
        file_put_contents($myFile1, $newcontent1);

        header('Location: index.php');
        //print_r($line);
        //echo $line;
    break;

}



?>