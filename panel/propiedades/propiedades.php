<?php


function obtenerPropiedades(){
     return json_decode(file_get_contents(__DIR__ . '../../../servername/server.properties'), true);
    //$permisos = json_decode(file_get_contents(__DIR__ . '../../../servername/permissions.json'), true);
    //echo '<pre>'; var_dump($permisos); echo '</pre>'; exit;
}


function obtenerPropiedadPorId($id){

}


function crearPropiedad($data){

}


function actualizarPropiedad($data, $id){

}


function eliminarPropiedad($id){

}




function propiedadesSrv(){
return file( '../../servername/server.properties' );
//echo '<pre>'; var_dump($permiso); echo '</pre>'; exit;
} // Lo convierte en un array

 
//echo $pru[0];
//echo $pru[4];
//echo $pru[8];
//echo $pru[12];
//echo $pru[16];
//echo $pru[20]; // Tercera linea



//Ejemplo aprenderaprogramar.com
//$file = fopen("../../servername/server.properties", "r");
//while(!feof($file)) {
//echo fgets($file). "<br />";
//}
//fclose($file);


//<?php echo $pru[0] ?>
<?php //echo $pru[4] ?>
<?php //echo $pru[8] ?>
<?php //echo $pru[12] ?>
<?php //echo $pru[16] ?>
<?php //echo $pru[20] ?>
<?php //echo $pru[26 ?>
<?php //echo $pru[30] ?>
<?php //echo $pru[34] ?>