<?php
	echo "<h3>Assoziatives Array</h3><br/> (Schlüssel sind Zahlen oder Strings)";

	echo "<p></p>";

	$meinArray = array(
										"Mo" => "Montag",
										"Di" => "Dienstag",
										"Mi" => "Mittwoch",
										"Do" => "Donnerstag",
										"Fr" => "Freitag",
										"Sa" => "Samstag",
										"So" => "Sonntag "
	);

	print_r($meinArray); // eine PHP-Funktion

	echo "<br/>";

	foreach ($meinArray as $key => $wochentag) {
		echo "<br/> String " . $key . " ist " . $wochentag . "<br/>";
	}

	echo "Mir gefallen keine " . $meinArray["Mo"] . "e. <br/>";

?>