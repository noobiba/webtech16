<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link href="../css/bootstrap.css" rel="stylesheet">
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

	echo "<div class='well'>
					<ul class='list-group'
					<li class='list-group-item'>";


while ( ! feof ( $file ) ) {
		/*
		 * fegts() liest eine Zeile einer Datei aus
		 * fgets() gibt einen String zürück
		 * nach Aufruf von fgets() steht der Dateizeiger 
		 * in der nächsten Zeile (außer, es wurde eine 
		 * Leselänge als 2. Parameter fgets übergeben)
		 */
	$current_line = fgets ( $file );
		echo $current_line . "<br/>";
	}
	fclose ( $file );
}

	echo "</li>
			</ul>";

?>
</body>
</html>