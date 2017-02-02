<?php
	echo "<h3>Indiziertes Array</h3><br/> (Schlüssel sind Zahlen beginnend mit 0)";

	echo "<p></p>";

	$meinArray = array(
										"Montag",
										"Dienstag",
										"Mittwoch",
										"Donnerstag",
										"Freitag",
										"Samstag",
										"Sonntag"
	);

	print_r($meinArray); // eine PHP-Funktion

	echo "<br/>";

	foreach ($meinArray as $key => $wochentag) {
		echo "<br/> Nummer " . $key . " ist " . $wochentag . "<br/>";
	}

	echo "Mir gefallen keine " . $meinArray[0] . "e. <br/>";

?>