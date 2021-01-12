<?php
include "../includes/scripts.php";

require __DIR__.'/usuarios.php';

    if (!isset($_GET['name'])) {
        include "../includes/no_encontrado.php";
        exit;
    }
$usuarioName = $_GET['name'];
$usuarioN = obtenerUsuarioPorName($usuarioName);
// echo '<pre>'; var_dump($usuarioN); echo '</pre>'; exit;

    if (!$usuarioN) {
        include "../includes/no_encontrado.php";
        exit;
    }
    //echo '<pre>'; var_dump($_SERVER); echo '</pre>';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // echo '<pre>'; var_dump($_POST); echo '</pre>';
        $usuarioN = actualizarUsuario($_POST, $usuarioName);
        header("Location: index.php");
    }
    
?>

    <?php include '_formulario.php' ?>

    <?php 
// Obtener el contenido del archivo de texto como una matriz de líneas
$myFile = '../../servername/server.properties';
$lines = file($myFile); 
// Obtener el contenido del archivo como cadena
$content = file_get_contents($myFile);

// comprobar publicación
if (isset($_POST["input"]) && 
    isset($_POST["hidden"])) {
    $line = $_POST['hidden'];
    $update = $_POST['input'] . "\n";
    // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
    $newcontent = str_replace($lines[$line], $update, $content);
    file_put_contents($myFile, $newcontent);
    // código exitoso
    echo 'success';
} else {
    echo 'error';
}


// Obtener el contenido del archivo de texto como una matriz de líneas
$myFile = '../../servername/server.properties';
$lines = file($myFile); 
// Obtener el contenido del archivo como cadena
$content = file_get_contents($myFile);

// comprobar publicación
if (isset($_POST["inputName"]) && isset($lines[0])) {
    $line = $lines[0];
    $update = $_POST['inputName'] . "\n";
    // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
    $servername = "server-name=";
    $newcontent = str_replace($lines[$line], $update, $content);
    file_put_contents($myFile, $newcontent);
    // código exitoso
    echo $servername;
    echo $update;
} else {
    echo 'error';
}





// Get text file contents as array of lines
$myFile = '../../servername/server.properties';
$lines = file($myFile); 
//check post
if (isset($_POST["input"]) && 
    isset($_POST["hidden"])) {
    $line = $_POST['hidden'];
    $update = $_POST['input'] . "\n";
    // Make the change to line in array
    $lines[$line] = $update; 
    // Put the lines back together, and write back into lines file
    file_put_contents($myFile, implode("", $lines));
    //success code
    echo 'success';
} else {
    echo 'error';
}





// Get text file contents as array of lines
$myFile = '../../servername/server.properties';
$lines = file($myFile); 
//check post
if (isset($_POST["inputName"]) && isset($lines[0])) {
    $line = $lines[0];
    $update = $_POST['inputName'] . "\n";
    // Make the change to line in array
    $lines[$line] = $update; 
    // Put the lines back together, and write back into lines file
    $servername = "server-name=";//$update
    $outname = "$servername $update";
    //file_put_contents($myFile, $outname);
    file_put_contents($myFile, implode("", $lines));
    //success code
    echo $outname;
    //echo $update;

} else {
    echo 'error';
}



$myFile = "../../servername/server.properties";
$lines = file($myFile);
echo $lines[0];

?>

<?php
function actualizarPropiedad($data, $id){
    $actualizarPropiedad = [];
    $propiedades = obtenerUsuarios();
    foreach ($propiedades as $i => $propiedad) {
        if ($propiedad['name'] == $name) {
            $propiedades[$i] = $actualizarPropiedad = array_merge($propiedad, $data);
        }
    }
    //echo '<pre>'; var_dump($usuarios); echo '</pre>';

    file_put_contents(__DIR__ . '../../servername/server.properties');
    //file_put_contents(__DIR__ . '/servername/whitelist.json', json_encode($users, JSON_PRETTY_PRINT));

    ponerJson ($propiedades);
    return $actualizarPropiedad;
}



// Get text file contents as array of lines
$myFile = '../../servername/server.properties';
$lines = file($myFile); 
//check post
if (isset($_POST["input"]) && 
    isset($_POST["hidden"])) {
    $line = $_POST['hidden'];
    $update = $_POST['input'] . "\n";
    // Make the change to line in array
    $lines[$line] = $update; 
    // Put the lines back together, and write back into lines file
    file_put_contents($myFile, implode("", $lines));
    //success code
    echo 'success';
} else {
    echo 'error';
}




$pizza  = "../../servername/server.properties";
$porciones = explode("server-name=", $pizza);
echo $porciones[0]; // porción1
echo $porciones[1]; // porción2





$myFile = '../../servername/server.properties';
$lines = file_get_contents($myFile);
$srvname = [0];
$srvnamenew = ["server-name="];
$a

$srvnamerem = str_replace($srvname, $srvnamenew+$a, $myFile);
file_put_contents($myFile, $srvnamerem);





$msgid = $_POST['msgid'];

$oldMessage = '';

$deletedFormat = '';

//read the entire string
$str=file_get_contents('../../servername/server.properties');

//replace something in the file string - this is a VERY simple example
$str=str_replace($oldMessage, $deletedFormat,$str);

//write the entire string
file_put_contents('../../servername/server.properties', $str);





allow-cheats=12

// comprobar publicación
if (isset($_POST["inputName"])) {
    $line = $lines[0];
    $input = $_POST['inputName'] . "\n";
    // Reemplazar la cadena inicial (de la matriz $lines) con $update en $content
    $linetext = "server-name=";
    $output = "$linetext$input";
    $newcontent = str_replace($line, $output, $content);
    file_put_contents($myFile, $newcontent);
    //return $myFile;
    // código exitoso
    
   // echo $output;
} else {
   // echo 'error servername';
}


if ($_POST['detener']) {
    $detener = shell_exec("sudo systemctl stop servername");
    echo $detener;
  }
  
  if ($_POST['iniciar']) {
    $iniciar = shell_exec("sudo systemctl start servername");
    echo $iniciar;
  }
  
  if ($_POST['reiniciar']) {
    $reiniciar = shell_exec("sudo systemctl restart servername");
    echo $reiniciar;
  }







  include "../includes/scripts.php";

  require __DIR__.'/propiedades.php';
  
  if (!isset($_GET['id'])) {
      include "../includes/no_encontrado.php";
      exit;
  }
  
  $DatoId = $_GET['id'];
  $Dato = obtenerSrvDatosPorId($DatoId);
  // echo '<pre>'; var_dump($Dato); echo '</pre>'; exit;
  
  if (!$Dato) {
      include "../includes/no_encontrado.php";
      exit;
  }
  
  //echo '<pre>'; var_dump($_SERVER); echo '</pre>';
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // echo '<pre>'; var_dump($_POST); echo '</pre>';
      $Dato = actualizarSrvDatos($_POST, $DatoId);
      header("Location: index.php");
  }




?>