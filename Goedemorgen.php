<!DOCTYPE html>
<html>
<head>
	<title>Goedemorgen</title>
	<link rel="stylesheet" type="text/css" href="goedemorgen-CSS.css">
</head>
<body>
<?php
date_default_timezone_set("Europe/Amsterdam");
$Time=date("H:i");
if ($Time >= "06:00" and $Time <= "11:59") {
	echo "<body style='background-image: url(backgrounds/morning.png)'>";
	echo "<p style= color:white;>Goede morgen!</p>";
} else if ($Time >= "12:00" and $Time <= "17:59") {
	echo "<body style='background-image: url(backgrounds/afternoon.png)'>";
	echo "<p style= color:white;>Goede middag!</p>";
} else if ($Time >= "18:00" and $Time <= "23:59") {
	echo "<body style='background-image: url(backgrounds/evening.png)'>";
	echo "<p style= color:white;>Goede avond!</p>";
} else if ($Time >= "00:00" and $Time <= "05:59") {
	echo "<body style='background-image: url(backgrounds/night.png)'>";
	echo "<p style= color:white;>Goede nacht!</p>";
}
echo "<p style= color:white;>Het is nu " . date("H:i") . "</p>";
?>
</body>
</html>