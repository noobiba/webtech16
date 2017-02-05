<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styles_05.css">
  
	<title>Aufgabe 05 / Zufallszahlen</title>


		<!-- // TODO: Spaltenerzeugung abhängig von Anzahl der Stellen der Zufallszahl.
		// Farbänderung an Anzahl der Stellen der Zufallszahl anpassen. -->

	<?php
		function generiereZufallszahl($max, $anzahl, $stellen){

											
				echo "<table class='table table-hover'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>Zufallszahl</th>
							<th>Die erste 1 Stelle abgerundet</th>
							<th>Die ersten 2 Stellen abgerundet</th>
							<th>Die ersten 3 Stellen abgerundet</th>
							<th>Die ersten 4 Stellen abgerundet</th>";
				echo "</tr>";
				echo "</thead>";

				echo "<tbody>";
				

			for ($i=1; $i <= $anzahl; $i++) { 
				$zufallszahl = rand(1, $max);

				if ($gerundet1) {
					echo "<tr class='gelb'>";
				}
				if ($gerundet2) {
					echo "<tr class='orange'>";
				}
				if ($gerundet3) {
					echo "<tr class='rosa'>";
				}
				if ($gerundet4) {
					echo "<tr class='gruen'>";
				}

				$gerundet1 = zahlenAbschneiden($zufallszahl, 1);
				$gerundet2 = zahlenAbschneiden($zufallszahl, 2);
				$gerundet3 = zahlenAbschneiden($zufallszahl, 3);
				$gerundet4 = zahlenAbschneiden($zufallszahl, 4);
			

				echo "<td> $zufallszahl</td>
							<td> $gerundet1</td>
							<td> $gerundet2</td>
							<td> $gerundet3</td>
							<td> $gerundet4</td>";
				echo "</tr>";
				
			}echo "</tbody>
						</table>";
			
		}

		function zahlenAbschneiden($zahl, $stellen=2){
			$base = pow(10, $stellen);
			return $zahl - ($zahl % $base);
		}
	?>

</head>
<body>
	<h1>Zufallszahlen</h1>

	<div>
		<?php
			generiereZufallszahl(100000, 20, 5);	
			zahlenAbschneiden(300, 10);
		?>
	</div>
</body>
</html>

