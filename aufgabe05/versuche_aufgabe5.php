echo "<table class='table table-hover'>";

			echo "<thead>";
			echo "<tr>";

			for ($i=1; $i <= $stellen; $i++) { 

				if ($stelle=1) {
					echo "<th>" . $gerundet1 . "</th>";
				}
				if ($stelle=2) {
					echo "<th>" . $gerundet2 . "</th>";
				}
				if ($stelle=3) {
					echo "<th>" . $gerundet3 . "</th>";
				}
				if ($stelle=4) {
					echo "<th>" . $gerundet4 . "</th>";
				}
				if ($stelle=5) {
					echo "<th>" . $gerundet5 . "</th>";
				}
				if ($stelle=6) {
					echo "<th>" . $gerundet6 . "</th>";
				}		
			}

			echo "</tr>";
			echo "</thead>";
			
			echo "<tbody>";
			echo "<tr>";

			for ($i=0; $i <$stellen ; $i++) { 
				if ($stellen = 1) {
					echo "<td class='gelb'>" . $gerundetAuf1Stelle . "</td>";
				}
				if ($stellen = 2) {
					echo "<td class='orange'>" . $gerundetAuf2Stellen . "</td>";
				}
				if ($stellen = 3) {
					echo "<td class='rosa'>" . $gerundetAuf3Stellen . "</td>";
				}
				if ($stellen = 4) {
					echo "<td class='gruen'>" . $gerundetAuf4Stellen . "</td>";
				}
				if ($stellen = 5) {
					echo "<td class='blau'>" . $gerundetAuf5Stellen . "</td>";
				}
				if ($stellen <= 6) {
					echo "<td class='grau'>" . $gerundetAuf6Stellen . "</td>";
				}
			}
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";



			if ($max=1) {
					echo "<tr class='gelb'>";
				}
				if ($max=2) {
					echo "<tr class='orange'>";
				}
				if ($max=3) {
					echo "<tr class='rosa'>";
				}
				if ($max=4) {
					echo "<tr class='gruen'>";
				}







