<?php
	include "../../config.php";
	include "functions.php";

	if (!isset($_GET["steamid"])) {
		error_reporting(0);
		die("<div style=\"font-family: Arial; margin-top: 20px; text-align: center;\"<b>It seems you're using the wrong URL, did you forget '?steamid=%s' on the end?</b><br>It should look like: 'http://yourdomain.com/index.php?steamid=%s'</div>");
	}
	
	$steamid64 = $_GET["steamid"];
	$ip = $_SERVER['REMOTE_ADDR'];
	
	if ($_GET["steamid"] == "%s") {
		$steamid64 = "76561198055933876";
	}
	
	if (strlen($ip) < 4) {
		$ip = "127.0.0.1";
	}
	
	if (strlen($map) < 3) {
		$map = "Unknown";
	}

	$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $steamid64;
	$json = file_get_contents($url);
	$table2 = json_decode($json, true);
	$table = $table2["response"]["players"][0];
	$authserver = bcsub( $steamid64, '76561197960265728' ) & 1;
	$authid = (bcsub( $steamid64, '76561197960265728' ) - $authserver ) / 2;
	$steamid32 = "STEAM_0:$authserver:$authid";
	$files = preg_grep('~\.(jpeg|jpg|png)$~', scandir('../../backgrounds/'));
	$logo = glob("../../logo.{jpg,png,jpeg}", GLOB_BRACE);
	$music = preg_grep('~\.(ogg)$~', scandir('../../music/'));
	$randmax = count($music);
	$musicrand = rand(2, $randmax + 1);
	
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Mallard Loadscreen</title>	
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/cycle.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/resize.js"></script>
	<script src="http://www.google.com/jsapi"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js"></script>
	<script type="text/javascript">
		function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {document.getElementById("gmode").innerHTML = gamemode }
	</script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.audio').prop("volume", <?php echo $musicvolume; ?>);
	});
	</script>
	<style>
		#box {
			border-top: solid 5px <?php echo $color; ?>;
		}
		#bar-width {
			background-color: <?php echo $color; ?>;
		}
		#gmode {
			text-transform: uppercase;
		}
		.rulebox {
			border-top: solid 2px <?php echo $color; ?>;
		}
		.avatarbox {
			background-image: url('<?php echo $table["avatarfull"];?>'); border: solid 3px #474747;
		}
		.subheader {
			border-bottom: solid 2.5px <?php echo $color ?>;
		}
		.subheader2 {
			border-bottom: solid 1.5px <?php echo $color ?>;
		}
	</style>
	<audio class="audio" <?php if ($musicenabled) { echo "autoplay"; } ?> autobuffer="autobuffer"><source src="../../music/<?php echo $music[$musicrand]; ?>" type="audio/ogg"></audio>
</head>