<?php
	echo "<h3>Foreach-Schleife</h3>";

	$wochentage = array('Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag');

	foreach ($wochentage as $tag) {
		echo $tag . "<br/>";
	}
?>