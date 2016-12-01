<!DOCTYPE html>
<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
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
	echo '<div class = "well"><ul class = "list-group">';
	$counter=0;
	while ( ! feof ( $file ) ) {
		/*
		 * fegts() liest eine Zeile einer Datei aus
		 * fgets() gibt einen String zürück
		 * nach Aufruf von fgets() steht der Dateizeiger 
		 * in der nächsten Zeile (außer, es wurde eine 
		 * Leselänge als 2. Parameter fgets übergeben)
		 */
			$vorname = fgets($file);
			$nachname = fgets($file);
			$email = fgets($file);
			$ipnr = fgets($file);
			$leer = fgets($file);
			echo "<li class = 'list-group-item'>".$vorname.$nachname."<a href='mailto:'.$email.'>".$email."</a></li>";	
			$counter++;
			if ($counter==10)
			{
				$counter=0;
				echo "</ul></div>";
				echo '<div class = "well"><ul class = "list-group">';
			}
		
		
	}
	fclose ( $file );
}
?>
</body>
</html>