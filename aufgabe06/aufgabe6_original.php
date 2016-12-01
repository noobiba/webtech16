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
	
	while ( ! feof ( $file ) ) {
		
		$current_line = fgets ( $file );
		echo $current_line . "<br/>";
	}
	fclose ( $file );
}
?>
</body>
</html>
