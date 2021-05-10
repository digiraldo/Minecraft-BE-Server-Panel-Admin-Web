<?php
namespace xPaw;

$jsonStringsrv = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$datasrv = json_decode($jsonStringsrv, true);
$IpSrv = $datasrv[12]['spain'];
$PortSrv = $datasrv[8]['spain'];

// Edit this ->
	define( 'MQ_SERVER_ADDR_SRV', $IpSrv );
	define( 'MQ_SERVER_PORT_SRV', $PortSrv );
// Edit this <-

//echo MQ_SERVER_ADDR_SRV;
//echo MQ_SERVER_PORT_SRV;

class MinecraftQuery
{

	
	/*
	 * Class written by xPaw
	 *
	 * Website: http://xpaw.me
	 * GitHub: https://github.com/xPaw/PHP-Minecraft-Query
	 */

	const STATISTIC = 0x00;
	const HANDSHAKE = 0x09;

	private $Socket;
	private $Players;
	private $Info;

	//$Ip = "parce.duckdns.org";
	//$Port = 19132;
	//$Timeout = 3;



//require 'datos.php';

	
	public function ConnectBedrock( $Ip = MQ_SERVER_ADDR_SRV, $Port = MQ_SERVER_PORT_SRV, $Timeout = 3, $ResolveSRV = true )
	{
		if( !is_int( $Timeout ) || $Timeout < 0 )
		{
			throw new \InvalidArgumentException( 'Timeout must be an integer.' );
		}

		if( $ResolveSRV )
		{
			$this->ResolveSRV( $Ip, $Port );
		}

		$this->Socket = @\fsockopen( 'udp://' . $Ip, (int)$Port, $ErrNo, $ErrStr, $Timeout );

		if( $ErrNo || $this->Socket === false )
		{
			throw new MinecraftQueryException( 'Could not create socket: ' . $ErrStr );
		}

		\stream_set_timeout( $this->Socket, $Timeout );
		\stream_set_blocking( $this->Socket, true );

		try
		{
			$this->GetBedrockStatus();
		}
		finally
		{
			FClose( $this->Socket );
		}
	}

	public function GetInfo( )
	{
		return isset( $this->Info ) ? $this->Info : false;
	}

	public function GetPlayers( )
	{
		return isset( $this->Players ) ? $this->Players : false;
	}

	private function GetChallenge( )
	{
		$Data = $this->WriteData( self :: HANDSHAKE );

		if( $Data === false )
		{
			throw new MinecraftQueryException( 'Failed to receive challenge.' );
		}

		return Pack( 'N', $Data );
	}


	private function GetBedrockStatus( )
	{
		// hardcoded magic https://github.com/facebookarchive/RakNet/blob/1a169895a900c9fc4841c556e16514182b75faf8/Source/RakPeer.cpp#L135
		$OFFLINE_MESSAGE_DATA_ID = \pack( 'c*', 0x00, 0xFF, 0xFF, 0x00, 0xFE, 0xFE, 0xFE, 0xFE, 0xFD, 0xFD, 0xFD, 0xFD, 0x12, 0x34, 0x56, 0x78 );

		$Command = \pack( 'cQ', 0x01, time() ); // DefaultMessageIDTypes::ID_UNCONNECTED_PING + 64bit current time
		$Command .= $OFFLINE_MESSAGE_DATA_ID;
		$Command .= \pack( 'Q', 2 ); // 64bit guid
		$Length  = \strlen( $Command );

		if( $Length !== \fwrite( $this->Socket, $Command, $Length ) )
		{
			throw new MinecraftQueryException( "Failed to write on socket." );
		}

		$Data = \fread( $this->Socket, 4096 );

		if( $Data === false )
		{
			throw new MinecraftQueryException( "Failed to read from socket." );
		}

		if( $Data[ 0 ] !== "\x1C" ) // DefaultMessageIDTypes::ID_UNCONNECTED_PONG
		{
			throw new MinecraftQueryException( "First byte is not ID_UNCONNECTED_PONG." );
		}

		if( \substr( $Data, 17, 16 ) !== $OFFLINE_MESSAGE_DATA_ID )
		{
			throw new MinecraftQueryException( "Magic bytes do not match." );
		}

		// TODO: What are the 2 bytes after the magic?
		$Data = \substr( $Data, 35 );

		// TODO: If server-name contains a ';' it is not escaped, and will break this parsing
		$Data = \explode( ';', $Data );

		$this->Info =
		[
			'GameName'   => $Data[ 0 ] ?? null,
			'HostName'   => $Data[ 1 ] ?? null,
			'Protocol'   => $Data[ 2 ] ?? null,
			'Version'    => $Data[ 3 ] ?? null,
			'Players'    => $Data[ 4 ] ?? null,
			'MaxPlayers' => $Data[ 5 ] ?? null,
			'ServerId'   => $Data[ 6 ] ?? null,
			'Map'        => $Data[ 7 ] ?? null,
			'GameMode'   => $Data[ 8 ] ?? null,
			'NintendoLimited' => $Data[ 9 ] ?? null,
			'IPv4Port'   => $Data[ 10 ] ?? null,
			'IPv6Port'   => $Data[ 11 ] ?? null,
			'Extra'      => $Data[ 12 ] ?? null, // What is this?
		];
		$this->Players = null;
	}

	private function WriteData( $Command, $Append = "" )
	{
		$Command = Pack( 'c*', 0xFE, 0xFD, $Command, 0x01, 0x02, 0x03, 0x04 ) . $Append;
		$Length  = StrLen( $Command );

		if( $Length !== FWrite( $this->Socket, $Command, $Length ) )
		{
			throw new MinecraftQueryException( "Failed to write on socket." );
		}

		$Data = FRead( $this->Socket, 4096 );

		if( $Data === false )
		{
			throw new MinecraftQueryException( "Failed to read from socket." );
		}

		if( StrLen( $Data ) < 5 || $Data[ 0 ] != $Command[ 2 ] )
		{
			return false;
		}

		return SubStr( $Data, 5 );
	}

	private function ResolveSRV( &$Address, &$Port )
	{
		if( ip2long( $Address ) !== false )
		{
			return;
		}

		$Record = @dns_get_record( '_minecraft._tcp.' . $Address, DNS_SRV );

		if( empty( $Record ) )
		{
			return;
		}

		if( isset( $Record[ 0 ][ 'target' ] ) )
		{
			$Address = $Record[ 0 ][ 'target' ];
		}
	}
}
