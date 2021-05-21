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

if ($Informacion['Players'] == 0 || $Informacion['Players'] == ''){
	$online = 0;
	$versionsrv = $Informacion['Version'];
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



$urlWhie = "../../servername/whitelist.json";
$dataWhieU = json_decode(file_get_contents($urlWhie), true);
asort($dataWhieU);


$whitelistJug = $srvdatoss[6]['spain'];
$onlinerest = $whitelistJug - $online;

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


$onlinerestporcentaje = round($onlineLoad/$whitelistJug*100);
$onlineporcentaje = round($online/$whitelistJug*100);

$orporcentaje = $onlinerestporcentaje."%";
$oporcentaje = $onlineporcentaje."%";

// echo $orporcentaje."</br>";
// echo $oporcentaje."</br>";
// echo $onlinerestporcentaje + $onlineporcentaje." %"."</br>";



// JUGADORES EN WHITELIST
$XuId = "";
 
$countWhitelist = count($dataWhieU); // total Whitelist
$whitelistXuid = array_column($dataWhieU, 'xuid'); // array xuid
$countXuid = count($whitelistXuid); // total xuid en Whitelist

if ($countWhitelist == 0) {
    $countEmptyXuid = 0;
    $countWhitXuid = 0;
} else {
    // $countEmptyXuid = array_search($XuId, array_column($dataWhieU, 'xuid')); // Xuid Vacio no ingreso al servidor
    // $countWhitXuid = $countXuid - $countEmptyXuid; // Xuid con ingreso al servidor
	
	$countWhitXuid = array_search($XuId, array_column($dataWhieU, 'xuid')); // Xuid con ingreso al servidor
	$countEmptyXuid = $countXuid - $countWhitXuid; // Xuid sin ingreso al servidor
}

/*
echo "Array xuid: ".print_r($whitelistXuid)."</br>";
echo "Usuarios: ".$countWhitelist."</br>";
echo "Sin xuid: ".$countEmptyXuid."</br>";
echo "Con xuid: ".$countXuid-$countEmptyXuid."</br>";
echo "</br>";
*/

$whiteLoad = $countWhitXuid;

// Color barra jugadores whitelist
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
 
if ($countWhitelist == 0) {
    $whiterestporcentaje = 0;
    $whiteporcentaje = 0;
} else {
    $whiterestporcentaje = round($countWhitXuid/$countXuid*100);
    $whiteporcentaje = round($countEmptyXuid/$countXuid*100);
}
 
$wrporcentaje = $whiterestporcentaje."%";
$wporcentaje = $whiteporcentaje."%";
 
 // echo $wrporcentaje."</br>";
 // echo $wporcentaje."</br>";
 // echo $whiterestporcentaje + $whiteporcentaje." %"."</br>";




// JUGADORES ROLES O PERMISOS
$jsonStringUsrA = file_get_contents(__DIR__ . '../../../config/usradmin.json');
$datosUsrA = json_decode($jsonStringUsrA, true);
 
 
$countRol = count($datosUsrA); // total Whitelist
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