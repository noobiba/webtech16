<?php

	echo "<h3>Verkettung von Strings 1</h3>";

	$studiengang = "FIW";

	echo "Hallo " . $studiengang . "!</br>";

	echo "<p>&nbsp;</p>";
	echo "<hr/>";



	echo "<h3>Verkettung von Strings 2</h3>";

	date_default_timezone_set('Europe/Berlin');
	echo "Willkommen bei Webtech im Jahr " . date(Y) . "!<br/>";

?>


