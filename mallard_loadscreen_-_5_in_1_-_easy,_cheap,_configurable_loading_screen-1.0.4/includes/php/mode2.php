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
			
			<div style="box-sizing: border-box;display: inline-block; float: left; width: 450px">
				<div id="box" class="b22">
					<div class="rulebox" style="border-top: 0px; border-bottom: 2px solid <?php echo $color; ?>; height: 53.1px;">
						<center><?php echo $descriptionheading; ?></center>
					</div>
					<div class="roundbox" style="font-weight: 300; height: 250px; text-align: <?php echo $descalign; ?>">
						<?php echo $description; ?>
					</div>
				</div>
				<div id="box" class="b12">
					<div class="avatarbox">&nbsp;</div>
					<div class="subheader" style="margin-top: 10px;"><?php echo $table["personaname"]; ?></div>
					<?php
						if ($showname && $table["communityvisibilitystate"] == 3) { echo "<div style=\"font-weight: 320;\">Name: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">" . $table["realname"] . "</div></div>"; }
						echo "<div style=\"font-weight: 320;\">SteamID: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">$steamid32</div></div>";
						if ($showip) { echo "<div style=\font-weight: 320;\>IP: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">$ip</div></div>"; }
						if ($showlocation && $table["communityvisibilitystate"] == 3) { echo "<div style=\"font-weight: 320;\">Location: <div style=\"color: #BFBFBF; font-weight: 300; display: inline;\">" . $table["loccountrycode"] . "</div></div>"; }
					?>
				</div>
			</div>
			
			<div id="box" class="b32">
				<div class="rulebox" style="border-top: 0px; height: 51.1px"><center><?php echo $rulesheading; ?></center></div>
				<div class="rulebox"><div class="rulenum">1.</div><div class="roundbox" id="rule"><?php echo $rule1; ?></div></div>
				<div class="rulebox"><div class="rulenum">2.</div><div class="roundbox" id="rule"><?php echo $rule2; ?></div></div>
				<div class="rulebox"><div class="rulenum">3.</div><div class="roundbox" id="rule"><?php echo $rule3; ?></div></div>
				<div class="rulebox"><div class="rulenum">4.</div><div class="roundbox" id="rule"><?php echo $rule4; ?></div></div>
				<div class="rulebox"><div class="rulenum">5.</div><div class="roundbox" id="rule"><?php echo $rule5; ?></div></div>
				<div class="rulebox"><div class="rulenum">6.</div><div class="roundbox" id="rule"><?php echo $rule6; ?></div></div>
				<div class="rulebox"><div class="rulenum">7.</div><div class="roundbox" id="rule"><?php echo $rule7; ?></div></div>
				<div class="rulebox"><div class="rulenum">8.</div><div class="roundbox" id="rule"><?php echo $rule8; ?></div></div>
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