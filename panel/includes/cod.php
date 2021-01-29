<?php
#####################################################
## COMPRIMIR DIRECTORIO EN ZIP #################
// Get real path for our folder
$rootPath = realpath('folder-to-zip');

// Initialize archive object
$zip = new ZipArchive();
$zip->open('file.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();
########################################################################################




### LISTAR Y DESCOMPRIMIR ZIP#####

class Zip_manager{
    function Zip_manager(){}
    function listar($input){
    /*
    Lista de los archivos que contiene un paquete zip.
    $input: archivo zip que se va a listar
    */
    $entries = array();
    $zip = zip_open($input);
    if (!is_resource($zip)){
    echo $this->zipFileErrMsg($zip);
    die (“No se puede leer el archivo zip. Error:”.$zip);
    }
    else{
    while ($entry = zip_read($zip)){
    $entries[] = zip_entry_name($entry);
    }
    }
    zip_close($zip);
    return $entries;
    }
    function extraer($input, $destino){
    /*
    Descomprime un paquete zip en un directorio especifico
    $input: archivo zip a descomprimir
    $destino: carpeta donde se descomprime
    */
    $zip = new ZipArchive;
    if ($zip->open($input) === TRUE) {
    $zip->extractTo($destino);
    $zip->close();
    return true;
    } else {
    return false;
    }
    }
    }




## https://gist.github.com/enovision/5065005
// descomprima el archivo zip en el servidor web más rápido
    if (isset($_POST['zip_file'])) {

        $filename = $_POST['zip_file'];
        $source = $_POST['zip_file'];
        $type = 'zip';
      
        $name = explode(".", $filename);
        $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
        foreach ($accepted_types as $mime_type) {
            if ($mime_type == $type) {
                $okay = true;
                break;
            }
        }
      
        /* Ruta actual de PHP */
        $path = dirname(__FILE__) . '/';  // ruta absoluta al directorio donde se encuentra zipper.php
        $filenoext = basename($filename, '.zip');   // ruta absoluta al directorio donde se encuentra zipper.php (minúsculas)
        $filenoext = basename($filenoext, '.ZIP');  // ruta absoluta al directorio donde se encuentra zipper.php (cuando está en mayúsculas)
        $targetdir = $path . $filenoext; // directorio de destino
        $targetzip = $path . $filename; // archivo zip de destino
      
        /* crear directorio si no existe ', de lo contrario sobrescribir
        el directorio de destino es el mismo que el nombre del archivo sin extensión */
      
        if (is_dir($targetdir))
            rmdir_recursive($targetdir);
      
        mkdir($targetdir, 0777);
      
        /* aquí realmente está sucediendo */
        $zip = new ZipArchive();
        $x = $zip->open($targetzip);  // abre el archivo zip para extraer
        if ($x === true) {
            try {
                $zip->extractTo($targetdir); // colocar en el directorio con el mismo nombre
            } catch (Exception $e) {
                echo 'Algo salió mal aquí, tal vez nada esté descomprimido';
            }
            $zip->close();
            // desvincular ($ targetzip);
            echo "Su archivo .zip fue cargado y desempaquetado.";
        }
      }


#########################################################################################################





?>