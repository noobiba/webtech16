<h3>Externe Dateien einbinden / Include-Datei</h3>
<p></p>

<?php
	include "einbinden.inc.php";

	$a = -123;
	$b = -123.45;
	$c = 123;
	$d = 123.45;

	$min = minimum($a, $b, $c, $d);
	echo "Das Minimum von $a, $b, $c und $d ist $min. <br/>";
?>