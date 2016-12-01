<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Datei einlesen</title>
</head>
<body>
	<h1>Datei einlesen</h1>
	<?php

	ini_set("auto_detect_line_endings", true);

	$file = @fopen ( "./mockdatatext", "r" );

	if (! $file) {
		echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
	} else {

		echo "<div class='well'>
					<ul class='list-group'>";

			$counter=0;

			while ( ! feof ( $file ) ) {

				$vorname = fgets($file);
				$nachname = fgets($file);
				$email = fgets($file);
				$ipnr = fgets($file);
				$leer = fgets($file);

				$current_line = fgets ( $file );

				echo $vorname, $nachname, $email . "<br/>";

				$counter++;

				if($counter == 10){
					$counter=0;

					echo "</ul></div>
					<div class='well'>
						<ul class='list-group'>";

						
					}
					fclose ( $file );
				
				?>
			</body>
			</html>