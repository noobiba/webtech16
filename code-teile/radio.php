<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Radio.php</title>
</head>
<body>

<h2>Ausgewählte Reise</h2>

<?php

echo "<p> Danke für Ihre Anfrage, wir reservieren:</p>"; 

	if(isset($_POST["cbad"]))
		echo "Zimmer mit ".$_POST["cbad"]. "<br />"; 

	if(isset($_POST["cmeer"]))
		echo "Zimmer mit ".$_POST["cmeer"]. "<br />"; 

	if(isset($_POST["cbar"]))
		echo "Zimmer mit ".$_POST["cbar"]. "<br />";


	echo "<h3>Antwort auf abgeschicktes Radiobuttonformular</h3>";
	
	echo "Sie möchten also nach ".$_POST['rziel']; 
	echo " in ein ".$_POST['unterkunft']. "<br />";
	//Bsp: if($_POST['rziel']=="Gomera")
?>


</body>
</html>




