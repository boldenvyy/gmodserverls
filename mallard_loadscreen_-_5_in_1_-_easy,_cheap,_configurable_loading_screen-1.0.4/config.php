<?php

/*----------------------------------------------------------GENERAL CONFIG-----------------------------------------------------------*/
// The name of your server goes here.
$servertitle = "DesireGaming";

// *REQUIRED* Replace below with your server IP, if you're hosting the loading screen alongside your gameserver on the same server instead of a web host, keep it as is! 
$serverip = "172.96.164.98";

// *REQUIRED* Set the port of your server here, this is typically 27015!
$serverport = "27045";

// *REQUIRED* You can obtain a Steam API Key at http://steamcommunity.com/dev/apikey
$SteamAPIKey = "ED28EF409A3739F576BE0DE90672DE33";

// Sets the stripe color on your boxes, leave blank to have no stripe.
// Please use hex codes, and don't forget the #. You can find hex codes at http://colorpicker.com/
$color = "#FF8800"; 

// There is a slight dark tint over the backgrounds, true = on, false = off.
$bgtint = true; 

// If you have tint enabled, here you can edit how dark the tint is, highest = 1 (solid), lowest = 0 (transparent)
$bgtintlevel = "0.2";

// Toggle whether OGG files in the music folder should play or not, true = on, false = off.
$musicenabled = true;

// If music is enabled, set what volume you want it to be here, highest = 1 (100%), lowest = 0 (0%).
$musicvolume = 0.2;

/*-------------------------------------------------------------HEADER BOX------------------------------------------------------------*/
// The header box will use the server name above as the text unless you have headerlogo set to true.

// The box behind the server title/logo. true = on, false = off. (The logo/text will still show if you turn this off)
$headerbox = true;

// Use an image instead of plain text? true = on, false = off.
// The loading screen will use logo.png, logo.jpg or logo.jpeg in the main directory by default. LOGOS SHOULD BE NO BIGGER THAN 875x145 PIXELS!
$headerlogo = false;


/*----------------------------------------------------------DESCRIPTION BOX----------------------------------------------------------*/
// Text that shows at the top of the description box (If your mode includes the box).
$descriptionheading = "this is DesireGaming were a small community expaniding looking for staff when needed and dedicated players enjoy your stay"; 

// Do you want the text to align to the right, left, center or to justify over the whole width?
// Options: left || right || justify || center
$descalign = "right";

// Text that you put here will be displayed in your description box (If your mode includes the box).
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$description = "DesireGaming is a brand new community started by |Desire|Envyy and joseph.";


/*-------------------------------------------------------------RULES BOX-------------------------------------------------------------*/
// Text that shows at the top of the rules box (If your mode includes the box).
$rulesheading = "Core Rules";

// Rules - The maximum is 8 but less may be shown depending on your mode.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$rule1 = "do not rdm.";
$rule2 = "do not nlr.";
$rule3 = "do not be mingey.";
$rule4 = "do not both players constantly with petty bull shit.";
$rule5 = "dont argue with the admin in ooc/pm/advert take it to the forums.";
$rule6 = "dont spam the chat.";
$rule7 = "dont spam admin chat..";
$rule8 = "dont use multi bind mening  /advert carjack/dankmemes/raid.";


/*--------------------------------------------------------------USER BOX-------------------------------------------------------------*/
// Show the user's full name as shown on Steam. true = on, false = off.
$showname = true;

// Show the user's country code as shown on Steam. true = on, false = off.
$showlocation = true;

// Show the user's current IP address. true = on, false = off.
$showip = true;

/*-------------------------------------------------------------SERVER BOX------------------------------------------------------------*/
// Text that shows at the top of the server info box (If your mode includes the box).
$serverheading = "DesireGaming";

// If your server is lacking in players and you want to influence people to join, turning off online players being shown may be useful.
// true = on, false = off.
$showplaying = true;

/*-------------------------------------------------------------QUOTE BOX-------------------------------------------------------------*/
// Text that shows at the top of the quote box (If your mode includes the box).
$quoteheading = "Pro Tips";

// To add more messages, just follow the syntax. The messages are displayed in the order you have them in.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$quotes = array(
	'quote1' => "save your money 1",
    'quote2' => "buy cheaper cars 2",
    'quote3' => "be a thief so you  can raid 3",
	'quote4' => "Thank you for Joining DesireGaming enjoy your stay",
);
?>