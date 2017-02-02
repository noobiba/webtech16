<?php
	echo "<h3>While-Schleife / Datei auslesen</h3>";

	$datei = fopen('testdatei.txt', "r") or die("Die Datei wurde nicht gefunden.");

	while (!feof($datei)) {										// solange noch nicht am Ende der Datei angekommen.
		echo fgets($datei, 1024) . "<br />";		// zeilenweises Auslesen der Datei. 	
	}

	fclose($datei);
?>