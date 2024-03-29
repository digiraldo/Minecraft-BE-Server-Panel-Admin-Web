<?php


	use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;

	// Edit this ->
	define( 'MQ_SERVER_ADDR', 'mc.mineports.com' );
	define( 'MQ_SERVER_PORT', 19132 );
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
		//print_r( $Query->GetInfo( ) );
	}
	catch( MinecraftQueryException $e )
	{
		$Exception = $e;
		echo $e->getMessage( );
	}

	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );

//echo $Data[4];
//print_r($Data[4]);
//echo $Info[ 'Players' ];
//echo $Query;
//print_r( $Query->GetInfo( ) );


$Informacion = $Query->GetInfo();

//print_r($Informacion);
//echo $Informacion;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Minecraft Query PHP Class</title>

	<link href="../includes/js/dist/mc-player-counter.min.js" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		.jumbotron {
			margin-top: 30px;
			border-radius: 0;
		}

		.table thead th {
			background-color: #428BCA;
			border-color: #428BCA !important;
			color: #FFF;
		}
	</style>

<!-- Nuevo -->
<script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>


</head>

<body>
    <div class="container">

<?php if( isset( $Exception ) ): ?>
		<div class="panel panel-primary">
			<div class="panel-heading"><?php echo htmlspecialchars( $Exception->getMessage( ) ); ?></div>
			<div class="panel-body"><?php echo nl2br( $e->getTraceAsString(), false ); ?></div>
		</div>
<?php else: ?>
		<div class="row">
			<div class="col-sm-6">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th colspan="2">Información del servidor <em>(consultado en <?php echo $Timer; ?>s)</em></th>
						</tr>
					</thead>
					<tbody>
<?php if( ( $Info = $Query->GetInfo( ) ) !== false ): ?>
<?php //echo $Info['Players']; ?>
<?php foreach( $Info as $InfoKey => $InfoValue ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $InfoKey ); ?></td>
							<td><?php
	if( Is_Array( $InfoValue ) )
	{
		echo "<pre>";
		print_r( $InfoValue );
		echo "</pre>";
	}
	else
	{
		echo htmlspecialchars($InfoValue);
	}
?></td>
						</tr>

										
<?php endforeach; ?>
<?php else: ?>
						<tr>
							<td colspan="2">Sin información recibida</td>
						</tr>
<?php endif; ?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-6">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Jugadores</th>
						</tr>
					</thead>
					<tbody>
<?php if(($Players = $Query->GetPlayers()) !== false): ?>
<?php foreach($Players as $Player): ?>
						<tr>
							<td><?php echo htmlspecialchars( $Player ); ?></td>
						</tr>

<?php echo $Players; ?>
<?php print_r($Query->GetPlayers()); ?>

<?php endforeach; ?>
<?php else: ?>
						<tr>
							<td>No hay Jugadores</td>
						</tr>
<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
<?php endif; ?>
	</div>

<!-- Nuevo -->
Hay <span data-playercounter-ip="mc.mineports.com">0</span> Jugadores en línea en mi servidor. 
<br>
<p>Players on hypixel.net: <b><span data-playercounter-ip="mc.mineports.com">0</span></b></p>
    <p>Players on play.cubecraft.net: <b><span data-playercounter-ip="mc.mineports.com" data-playercounter-format="{online}/{max}">0</span></b></p>
    <p>Mineplex is currently <span data-playercounter-ip="mc.mineports.com" data-playercounter-status>...</span></p>

<script>
	new PlayerCounter({
  element: element,
  ip: 'mc.mineports.com',
  format: '{online}/{max}' // default {online}
  refreshRate: 20 * 1000 // default 60 = 1m
});
</script>

</body>
</html>
