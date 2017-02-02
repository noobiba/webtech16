<?php
	echo "<h3>Funktionen / Zahlen addieren</h3>";

	echo "<p></p>";

	function addiere($nummern){
		$summe = 0;

		foreach($nummern as $nummer) {
			$summe = $summe + $nummern;
		}
		echo "<p> Summe der Werte: " . $summe . "</p>";
	}

?>


<?php
	print_r(addiere(2,3,6));
	echo "addiere(2,3,6): <br/>";


	addiere(13, 26);
	echo "addiere(13, 26): <br/>";

	addiere(3.897, 4.234, 2.485);
	echo "addiere(3.897, 4.234, 2.485): <br/>";
?>

// Funktioniert nicht, weiß nicht warum.