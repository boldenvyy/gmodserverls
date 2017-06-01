<?php include "includes.php"; ?>
<html>
<body>

	<?php if ($bgtint = true) {echo "<div style=\"width: 100%; height: 100%; top: 0px; left: 0px; position: absolute; z-index: -5; background-color: rgba(0,0,0,$bgtintlevel); box-sizing: border-box;\">&nbsp;</div>";} ?>
	
	<div id="background-scroll">
		<?php
			foreach ($files as $backgroundimg) { echo "<div id=\"bg\" style=\"background-image: url('../../backgrounds/$backgroundimg');\">&nbsp;</div>";};
		?>
	</div>
	
	<div class="wrapper">
		<div class="container">
			<div id="<?php if ($headerbox) { echo "box"; } else { echo "boxnobg"; } ?>" class="header">
				<?php
					if ($headerlogo) {
						foreach ($logo as $headerlogo) {
						echo "<div class=\"helper\"><img src=\"" . $headerlogo . "\" style=\"margin: 0 auto; vertical-align: middle;\"></img></div>";
						}
					} else {
						echo $servertitle;
					}
				?>
			</div>
			
			<div id="box" class="b24">
				<div class="rulebox" style="border-top: 0px; border-bottom: 2px solid <?php echo $color; ?>; height: 46.1px; line-height: 46px">
					<center><?php echo $descriptionheading; ?></center>
				</div>
				<div class="roundbox" style="font-weight: 300; height: 255px; text-align: <?php echo $descalign; ?>">
					<?php echo $description; ?>
				</div>
			</div>
			
			<div id="box" class="b11" style="padding: 10px;">
				<div class="subheader2" style="font-size: 25px; line-height: 20px; padding-bottom: 5px;"><?php echo $serverheading; ?></div>
				<div style="height: 12px;">&nbsp;</div>
				<?php if ($showplaying && isset($connectedplayers) && isset($maxplayers)) { echo "<div style=\"width: 100%; height: 24px; margin-bottom: 8px;\"><div class=\"icon\" style=\"background-image: url('../icon/slots.png');\">&nbsp;</div><div style=\"float: left; display: inline-block; height: 24px; line-height: 24px; font-size: 14px; color: #BFBFBF\">&nbsp;&nbsp;PLAYERS:&nbsp;$connectedplayers/$maxplayers</div></div>"; } ?>
				<div style="width: 100%; height: 24px; margin-bottom: 8px;"><div class="icon" style="background-image: url('../icon/gamemode.png');">&nbsp;</div><div style="float: left; display: inline-block; height: 24px; width: 157px; text-overflow: ellipsis;overflow: hidden; white-space: nowrap; box-sizing: border-box; line-height: 24px; font-size: 14px; color: #BFBFBF">&nbsp;&nbsp;<span id="gmode">Unknown</span></div></div>
				<div style="width: 100%; height: 24px;"><div class="icon" style="background-image: url('../icon/map.png');">&nbsp;</div><div style="float: left; display: inline-block; height: 24px; text-transform: uppercase; width: 157px; text-overflow: ellipsis;overflow: hidden; white-space: nowrap; box-sizing: border-box; line-height: 24px; font-size: 14px; color: #BFBFBF">&nbsp;&nbsp;<?php echo $map; ?></div></div>
			</div>
			
			<br />
			
			<div id="box" class="b12">
				<div class="avatarbox">&nbsp;</div>
				<div class="subheader" style="margin-top: 10px;">
					<?php 
						echo $table["personaname"]; 
					?>
				</div>
				<?php
					if ($showname && $table["communityvisibilitystate"] == 3) { echo "<div style=\"font-weight: 320;\">Name: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">" . $table["realname"] . "</div></div>"; }
					echo "<div style=\"font-weight: 320;\">SteamID: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">$steamid32</div></div>";
					if ($showip) { echo "<div style=\font-weight: 320;\>IP: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">$ip</div></div>"; }
					if ($showlocation && $table["communityvisibilitystate"] == 3) { echo "<div style=\"font-weight: 320;\">Location: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">" . $table["loccountrycode"] . "</div></div>"; }
				?>
			</div>
			
			<div id="box" class="b11" style="padding: 10px;">
				<div class="subheader2" style="font-size: 25px; line-height: 20px; padding-bottom: 5px;"><?php echo $quoteheading; ?></div><div style="height: 10px;">&nbsp;</div>
				<div style="height: 72px; width: 151px; overflow: hidden; margin: 12px auto;">
					<div id="textslideshow">
						<?php foreach ($quotes as $quote) { echo "<div style=\"position: relative; top: 0px; width: 151px; height: 62px; text-align: center; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; box-sizing: border-box;\">$quote</div>"; }; ?>
					</div>
				</div>
			</div>
			
		</div>
	
		<div class="load">
			<div id="bar">
				<div id="bar-width" style="width: 0%;"></div>
			</div>
			<div id="download-item">
				Connecting...
			</div>
			<div id="percentage">
				0%
			</div>
		</div>
		
	</div>
</body>
</html>