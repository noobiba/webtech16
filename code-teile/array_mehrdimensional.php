<?php
	echo "<h3>Mehrdimensionales Array</h3><br/> (ist ein Array von Arrays)";

	echo "<p></p>";

	$meinArray = array(
									array(
										"Vorname", 
										"Nachname",
										"Email-Adresse",
										"IP-Adresse"
									),
									array(
										"Heide", 
										"Witzka",
										"heide@witzka.de",
										"118.93.83.157"
									),
									array(
										"Peter", 
										"Silie",
										"peter@silie.de",
										"118.93.83.158"
									),
									array(
										"Hans", 
										"Dampf",
										"hans@dampf.de",
										"118.93.83.158"
									)
		);

	echo "<table class='table table-striped table-hover table-responsive'>";
	echo "<thead><tr>";

	for ($i=0; $i <count($meinArray) ; $i++) { 
		echo "<th>" . $meinArray[0][$i] . "</th>";
	}

	echo "</tr></thead>";
	echo "<tbody><tr>";

	for ($i=1; $i<count($meinArray) ; $i++) { 
		echo "<tr>";

		for ($j=0; $j <count($meinArray[$i]) ; $j++) { 
			echo "<td>" . $meinArray[$i][$j] . "</td>";
		}
		echo "</tr>";
	}
	echo "</tbody></table>";
?>




