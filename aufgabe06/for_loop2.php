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


ini_set("auto_detect_line_endings", true);

$file = @fopen ( "./mockdatatext", "r" );

if (! $file) {
	echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
} else {
	

	while ( ! feof ( $file ) ) { /*Solang das File offen ist..*/

		$vorname = fgets($file); /* Nimm diese Parameter*/
		$nachname = fgets($file);
		$email = fgets($file);
		$ipnr = fgets($file);
		$leer = fgets($file);

		$show_max=10; /* Nimm diesen Zähler, der auf 10 steht*/
		
		echo "<div class='well'><ul class='list-group'>"; /* Öffne ein div und ein ul*/

		for($i=0; $i<$show_max; $i++) { /* Solange der $i kleiner als 10 ist*/
		
		/* Schreibe ein li und darin vorname, nachname und email und schliesse das li. */
		echo "<li class='list-group-item'>";
		echo $vorname, $nachname, $email;
		echo "</li>";
		
		$i++; /*Erhöhe den Zähler um 1*/

		echo "</ul></div>"; /* dann schliesse das ul und das div*/
		echo "<div class='well'><ul class='list-group'>"; /* Öffne ein neues div und ein ul*/	
		}
		echo "</ul></div>"; /* dann schliesse endgültig das ul und das div*/
			
	}
}
fclose ( $file );

?>
</body>
</html>