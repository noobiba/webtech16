<?php
	echo "<h3>Konstanten definieren</h3>";

	define(TITEL, Webtech);

	echo "TITEL";
	echo "<br/> Konstanten in PHP";
	echo "<hr/>";
	echo "Betriebssystem: " . PHP_OS . "<br/>";
	echo "PHP-Version: " 		. PHP_VERSION . "<br/>";
	echo "Datei: "					. __FILE__ . "<br/>";
	echo "Verzeichnis: " 		. __DIR__ . "<br/>";
	echo "Zeilennummer (Dies ist Zeile:): " . __LINE__ . " im PHP-Script<br/>";
	echo "Klasse: " 				. __CLASS__ . "<br/>";
	echo "Funktion: " 			. __FUNCTION__ . "<br/>";
	echo "Methode: " 				. __METHOD__ . "<br/>";
	echo "Namespace: " 			. __NAMESPACE__ . "<br/>";

	echo "<p>&nbsp;</p>";
	echo "<hr/>";

	phpinfo();


?>