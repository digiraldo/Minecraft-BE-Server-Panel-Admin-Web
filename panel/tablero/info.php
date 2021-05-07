<?php
	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;

	// Edit this  $data[12]['spain'];  Puerto:$data[8]['spain'];  ->
	define( 'MQ_SERVER_ADDR', $data[12]['spain'] );
	define( 'MQ_SERVER_PORT', $data[8]['spain'] );
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



?>

<?php //echo $Informacion['Players']; ?>
<?php //echo $Informacion['MaxPlayers']; ?>
<?php //echo $Informacion['Version']; ?>



