<?php 
				$fp = fopen("./images.txt", "r") or die("Die Datei wurde nicht gefunden.");
				$i = 1;

				while (!feof("$fp")){

					$bild = fgets($fp);

					echo "<div class='thumbnail col-xs-3' style='height:100px'";
					echo "<h4>" . $i . "</h4>";
					echo "<img src='" . $bild ."'/>";
					echo "<br />";
				}

			?>