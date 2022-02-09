<?php
	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;


	$jsonStrings = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
	$datas = json_decode($jsonStrings, true);

	// Edit this  $data[12]['spain'];  Puerto:$data[8]['spain'];  ->
	define( 'MQ_SERVER_ADDR', $datas[12]['spain'] );
	define( 'MQ_SERVER_PORT', $datas[8]['spain'] );
	define( 'MQ_TIMEOUT', 1 );
	// Edit this <-

	// Display everything in browser, because some people can't look in logs for errors
	Error_Reporting( E_ALL | E_STRICT );
	Ini_Set( 'display_errors', true );

	require __DIR__ . '../../src/MinecraftQuery.php';
	require __DIR__ . '../../src/MinecraftQueryException.php';

	$Timer = MicroTime( true );

	$Query = new MinecraftQuery( );

	try
	{
		$Query->ConnectBedrock( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT );

		//print_r( $Query->GetInfo() );
		//print_r( $Query->GetPlayers( ) );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
		//echo $e->getMessage( );
	}

	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );



//echo $Data[4];
//print_r($Data[4]);
//echo $Info[ 'Players' ];
//echo $Query;
//print_r( $Query->GetInfo( ) );

$Informacion = $Query->GetInfo();
$PlayersInfo = $Query->GetPlayers();

//print_r($Informacion);
//echo $Informacion;

if ($Informacion === false){
	$online = 0;
	$versionsrv = 'Bedrock';
} else {
	$online = $Informacion['Players'];
	$versionsrv = $Informacion['Version'];
}


if (empty($Informacion['Version'])) {
	$StartSrv = 'Apagado';
	$StartSrvBtn = '<i class="fas fa-times-circle" style="color: #F51720;"></i>';
	$StartSrvColor = 'danger'; 
	$StartSrvStColor = '#F51720';
} else {
	$StartSrv = 'Encendido';
	$StartSrvBtn = '<i class="fas fa-check-circle" style="color: #70E000;"></i>';
	$StartSrvColor = 'success';
	$StartSrvStColor = '#59981A';
}




// JUGADORES ONLINE
$jsonStringss = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$srvdatoss = json_decode($jsonStringss, true);



$urlWhie = "../../servername/allowlist.json";
$dataWhieU = json_decode(file_get_contents($urlWhie), true);
asort($dataWhieU);


$allowlistJug = $srvdatoss[6]['spain'];
$onlinerest = $allowlistJug - $online;

// echo $srvdatoss[6]['spain']."</br>";
// echo $onlineLoad."</br>";

$onlineLoad = $onlinerest;

// Color barra jugadores online
if ($onlineLoad < 30) {
	$onlinecolorPorcentaje = 'success';
	$onlinecolorIcono = 'CEFFCD';
  } elseif ($onlineLoad > 30 && $onlineLoad < 70) {
	$onlinecolorPorcentaje = 'info';
	$onlinecolorIcono = 'CDF5FF';
  } elseif ($onlineLoad > 70 && $onlineLoad < 94) {
	$onlinecolorPorcentaje = 'warning';
	$onlinecolorIcono = 'FFFDCD';
  } elseif ($onlineLoad > 94) {
	$onlinecolorPorcentaje = 'danger';
	$onlinecolorIcono = 'FFCDCD';
  }


$onlinerestporcentaje = round($onlineLoad/$allowlistJug*100);
$onlineporcentaje = round($online/$allowlistJug*100);

$orporcentaje = $onlinerestporcentaje."%";
$oporcentaje = $onlineporcentaje."%";

// echo $orporcentaje."</br>";
// echo $oporcentaje."</br>";
// echo $onlinerestporcentaje + $onlineporcentaje." %"."</br>";



// JUGADORES EN ALLOWLIST
$XuId = "";
 
$countAllowlist = count($dataWhieU); // total Allowlist
$allowlistXuid = array_column($dataWhieU, 'xuid'); // array xuid
$countXuid = count($allowlistXuid); // total xuid en Allowlist

if ($countAllowlist == 0) {
    $sinXuid = 0;
    $conXuid = 0;
} else {
    //  $sinXuid = array_search($XuId, array_column($dataWhieU, 'xuid')); // Xuid Vacio no ingreso al servidor
    //  $conXuid = $countXuid - $sinXuid; // Xuid con ingreso al servidor
	
	 //$conXuid = array_search($XuId, array_column($dataWhieU, 'xuid')); // Xuid con ingreso al servidor

	// $sinXuid = count(array_intersect($allowlistXuid, [''])); // Xuid sin ingreso al servidor
	// $conXuid = $countXuid - $sinXuid; // Xuid con ingreso al servidor

	$conXuid = $countXuid; // Xuid con ingreso al servidor
	$sinXuid = $countAllowlist - $countXuid; // Xuid sin ingreso al servidor

	
}

/*
echo "Array xuid: ".print_r($allowlistXuid)."</br>";
echo "Con xuid: ".$conXuid."</br>";
echo "Sin xuid: ".$sinXuid."</br>";
echo "Usr xuid: ".$countXuid."</br>";
echo "</br>";
*/

$whiteLoad = $conXuid;

// Color barra jugadores allowlist
if ($whiteLoad < 30) {
    $whitecolorPorcentaje = 'success';
    $whitecolorIcono = 'CEFFCD';
  } elseif ($whiteLoad > 30 && $whiteLoad < 70) {
    $whitecolorPorcentaje = 'info';
    $whitecolorIcono = 'CDF5FF';
  } elseif ($whiteLoad > 70 && $whiteLoad < 94) {
    $whitecolorPorcentaje = 'warning';
    $whitecolorIcono = 'FFFDCD';
  } elseif ($whiteLoad > 94) {
    $whitecolorPorcentaje = 'danger';
    $whitecolorIcono = 'FFCDCD';
  }
 
if ($countAllowlist == 0) {
    $conXuidPorcentaje = 0;
    $sinXuidPorcentaje = 0;
} else {
    $conXuidPorcentaje = round($conXuid/$countAllowlist*100);
    $sinXuidPorcentaje = round($sinXuid/$countAllowlist*100);
}
 
$conXuPorcentaje = $conXuidPorcentaje."%";
$sinXuPorcentaje = $sinXuidPorcentaje."%";
 
/*
  echo "Con xuid: ".$conXuid." - ".$conXuPorcentaje."</br>";
  echo "Sin xuid: ".$sinXuid." - ".$sinXuPorcentaje."</br>";
  echo "Tot xuid: ".$countAllowlist." - ".$conXuidPorcentaje + $sinXuidPorcentaje." %"."</br>";
  echo "</br>";
*/

// JUGADORES ROLES O PERMISOS
$jsonStringUsrA = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$datosUsrA = json_decode($jsonStringUsrA, true);
 
 
$countRol = count($datosUsrA); // total Allowlist
if (empty(array_count_values(array_column($datosUsrA, 'id_rol'))[0])) {
    $countRol0 = 0;
} else {
    $countRol0 = array_count_values(array_column($datosUsrA, 'id_rol'))[0];
}
if (empty(array_count_values(array_column($datosUsrA, 'id_rol'))[1])) {
    $countRol1 = 0;
} else {
    $countRol1 = array_count_values(array_column($datosUsrA, 'id_rol'))[1];
}
if (empty(array_count_values(array_column($datosUsrA, 'id_rol'))[2])) {
    $countRol2 = 0;
} else {
    $countRol2 = array_count_values(array_column($datosUsrA, 'id_rol'))[2];
}
if (empty(array_count_values(array_column($datosUsrA, 'id_rol'))[3])) {
    $countRol3 = 0;
} else {
    $countRol3 = array_count_values(array_column($datosUsrA, 'id_rol'))[3];
}
if (empty(array_count_values(array_column($datosUsrA, 'id_rol'))[4])) {
    $countRol4 = 0;
} else {
    $countRol4 = array_count_values(array_column($datosUsrA, 'id_rol'))[4];
}
 
if ($countRol0 === 1){
	$propietarioCont = 'Propietario';
} else {
	$propietarioCont = 'Propietarios';
}
if ($countRol1 === 1){
	$administardorCont = 'Administardor';
} else {
	$administardorCont = 'Administardores';
}
if ($countRol2 === 1){
	$editorCont = 'Editor';
} else {
	$editorCont = 'Editores';
}
if ($countRol3 === 1){
	$usuarioCont = 'Usuario';
} else {
	$usuarioCont = 'Usuarios';
}
if ($countRol4 === 1){
	$inscritoCont = 'Inscrito';
} else {
	$inscritoCont = 'Inscritos';
}


 
$porcentajeR0 = round($countRol0/$countRol*100);
$porcentajeR1 = round($countRol1/$countRol*100);
$porcentajeR2 = round($countRol2/$countRol*100);
$porcentajeR3 = round($countRol3/$countRol*100);
$porcentajeR4 = round($countRol4/$countRol*100);
 
$porcentRol0 = $porcentajeR0."%";
$porcentRol1 = $porcentajeR1."%";
$porcentRol2 = $porcentajeR2."%";
$porcentRol3 = $porcentajeR3."%";
$porcentRol4 = $porcentajeR4."%";
$porcentRol = $porcentajeR0+$porcentajeR1+$porcentajeR2+$porcentajeR3+$porcentajeR4."%";
 
 
// echo "Propietario: ".$countRol0."</br>";
// echo "Administrador: ".$countRol1."</br>";
// echo "Editor: ".$countRol2."</br>";
// echo "Usuario: ".$countRol3."</br>";
// echo "Inscrito: ".$countRol4."</br>";
// echo "Total: ".$countRol."</br>";
// echo "</br>";
// echo "Propietario: ".$porcentRol0."</br>";
// echo "Administrador: ".$porcentRol1."</br>";
// echo "Editor: ".$porcentRol2."</br>";
// echo "Usuario: ".$porcentRol3."</br>";
// echo "Inscrito: ".$porcentRol4."</br>";
// echo "Total: ".$porcentRol."</br>";


?>

<?php //echo $Informacion['Players']; ?>
<?php //echo $Informacion['MaxPlayers']; ?>
<?php //echo $Informacion['Version']; ?>