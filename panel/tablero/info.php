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

//echo $srvdatoss[6]['spain']."</br>";

$urlWhie = "../../servername/whitelist.json";
$dataWhieU = json_decode(file_get_contents($urlWhie), true);
asort($dataWhieU);


$whitelistJug = $srvdatoss[6]['spain'];
$onlinerest = $whitelistJug - $online;
// echo $onlinerest."</br>";

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


$onlinerestporcentaje = round($onlinerest/$whitelistJug*100);
$onlineporcentaje = round($online/$whitelistJug*100);

$orporcentaje = $onlinerestporcentaje."%";
$oporcentaje = $onlineporcentaje."%";

// echo $orporcentaje."</br>";
// echo $oporcentaje."</br>";
// echo $onlinerestporcentaje + $onlineporcentaje." %"."</br>";



// JUGADORES EN WHITELIST
$userId = "";

$countWhitelist = count($dataWhieU); // total Whitelist
$countEmptyXuid = array_count_values(array_column($dataWhieU, 'xuid'))[$userId]; // Xuid Vacio no ingreso al servidor
$countWhitXuid = $countWhitelist - $countEmptyXuid; // Xuid con ingreso al servidor
// echo $countWhitelist."</br>";
// echo $countEmptyXuid."</br>";
// echo $countWhitXuid."</br>";


$whitelistJug = $srvdatoss[6]['spain'];
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


$whiterestporcentaje = round($countWhitXuid/$countWhitelist*100);
$whiteporcentaje = round($countEmptyXuid/$countWhitelist*100);

$wrporcentaje = $whiterestporcentaje."%";
$wporcentaje = $whiteporcentaje."%";

 // echo $wrporcentaje."</br>";
 // echo $wporcentaje."</br>";
 // echo $whiterestporcentaje + $whiteporcentaje." %"."</br>";

?>

<?php //echo $Informacion['Players']; ?>
<?php //echo $Informacion['MaxPlayers']; ?>
<?php //echo $Informacion['Version']; ?>