<?php
	echo "<h3>Funktionen / Geteilte Tabellen</h3>";

	echo "<p></p>";

	function generiereTabelle($zeilen){
		echo "<table class='table table-bordered'>";
		echo "<thead><tr><th>Zeilennummer</th></tr></thead>";
		echo "<tbody>";

		for($i=1; $i < $zeilen+1 ; $i++) { 
			echo "<tr><td>Zeile $i </td></tr>";
		}
		echo "</tbody></table>";
	}

?>


<?php
	generiereTabelle(5);
	echo "<br/>";

	generiereTabelle(3);
	echo "<br/>";

?>

