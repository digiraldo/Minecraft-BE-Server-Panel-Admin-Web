<?php
//comprobamos si se ha recibido el nombre del ZIP
if ($_FILES["zip_file"]["name"]) 
{
    //obtenemos datos de nuestro ZIP
    $nombre = $_FILES["zip_file"]["name"];
    $ruta = $_FILES["zip_file"]["tmp_name"];
    $tipo = $_FILES["zip_file"]["type"];
 
    // --> AQUÍ INCLUIR ALGUNA DE LAS TRES FUNCIONALIDADES <--
    $zip = new ZipArchive;
	//en la función open se le pasa la ruta de nuestro archivo (alojada en carpeta temporal)
	if ($zip->open($ruta) === TRUE) 
	{
		//función para extraer el ZIP, le pasamos la ruta donde queremos que nos descomprima
		$zip->extractTo('almacen/');
		$zip->close();
	}
}


?>
   <!-- $zip = new ZipArchive;

    
    
        //creamos un array para guardar el nombre de los archivos que contiene el ZIP
$nombresFichZIP = array();
$zip = new ZipArchive;
 
if ($zip->open($ruta) === TRUE)
{
   for($i = 0; $i < $zip->numFiles; $i++)
   {
	//obtenemos ruta que tendrán los documentos cuando los descomprimamos
	$nombresFichZIP['tmp_name'][$i] = 'almacen/'.$zip->getNameIndex($i);
	//obtenemos nombre del fichero
	$nombresFichZIP['name'][$i] = $zip->getNameIndex($i);
   }
 
   //descomprimimos zip
   $zip->extractTo('almacen/');
   $zip->close();
}
/*RESULTADO (de la lectura de ruta y nombre de los ficheros):
Array ( 
   [tmp_name] => Array ( 
		       [0] => almacen/archivo1.xml 
		       [1] => almacen/archivo2.xml ) 
       [name] => Array ( 
		       [0] => archivo1.xml 
		       [1] => archivo2.xml ) ) 
*/

    -->