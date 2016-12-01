<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/bootstrap.css" >
	<title>Datei einlesen</title>
</head>
<body>
	<h1>Datei einlesen</h1>
	<?php

/*
 * falls das Zeilenende der einzulesenden Datei nicht korrekt 
 * erkannt werden sollte, dann sollte die folgende Anweisung 
 * ausgeführt werden
 */
ini_set("auto_detect_line_endings", true);
/* Öffnen der Datei zum Lesen "r"
 * Datei muss im gleichen Verzeichnis liegen wie aufgabe6.php
 * andernfalls Pfadangabe ändern
 * @ unterdrückt evtl Warnungen
 */
$file = @fopen ( "./mockdatatext", "r" );
/*
 * wenn das Öffnen der Datei funktioniert hat, ist $file TRUE
 * wenn nicht, dann FALSE
 */
if (! $file) {
	echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
} else {
	/*
	 * feof - end of file
	 * prüft, ob ein Dateizeiger am Ende der Datei steht
	 */
	
		echo "<div class='well'>";
		echo "<ul class='list-group'>";
				
		while ( ! feof ( $file ) ) {
		/*
		 * fegts() liest eine Zeile einer Datei aus
		 * fgets() gibt einen String zürück
		 * nach Aufruf von fgets() steht der Dateizeiger 
		 * in der nächsten Zeile (außer, es wurde eine 
		 * Leselänge als 2. Parameter fgets übergeben)
		 */

		$show_max=10;

		for ($i=1; $i<=$show_max; $i++) { 

			$vorname = fgets($file);
			$nachname = fgets($file);
			$email = fgets($file);
			$ipnr = fgets($file);
			$leer = fgets($file);

			echo "<li class='list-group-item'>";
			echo $vorname, $nachname . "<a href='mailto:$email'>" . $email . "</a>";
			echo "</li>";
		}
		echo "</ul>";
		echo "</div>";
		echo "<div class='well'>";
		echo "<ul class='list-group'>";
		
		$i++;
		}
		
	
	fclose ( $file );
}
?>
</body>
</html>