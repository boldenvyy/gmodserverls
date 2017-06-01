<?php
	include "../../config.php";
	require __DIR__ . '/SourceQuery/SourceQuery.class.php'; // Add Source Query Class


	// Server Information
	define( 'SQ_SERVER_ADDR', $serverip );
	define( 'SQ_SERVER_PORT', $serverport );
	
	// Ignore stuff below this line unless you know what you're doing.
	define( 'SQ_TIMEOUT',     1 );
	define( 'SQ_ENGINE',      SourceQuery :: SOURCE );


	$Query = new SourceQuery( );

	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		
		$Info = $Query->GetInfo( ); // General information such as map, max players, hostname, etc.
		$Players = $Query->GetPlayers( ); // General player information such as count and a player list/

	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}

	if($Info["HostName"] == "") {
		$status = "<span style=\"color: red;\">Offline</span>";
		$hostname = "Unknown";
		$maxplayers = "?";
		$connectedplayers = "?";
		$map = "Unknown";
			} else {
				$hostname = $Info['HostName'];
				$maxplayers = $Info['MaxPlayers'];
				$connectedplayers = count($Players);
				$map = $Info['Map'];
				$status = "<span style=\"color: green;\">Online</span>";
			}

	$Query->Disconnect( );
	
?>
<div style="visibility: hidden;">76561198139533037</div>