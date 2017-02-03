<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<title>anhang_form_a.php</title>
</head>
<body>

<h2>Seite 1</h2>

<?php
	echo "<form action='anhang_form_b.php?nutzer2=" . $_POST["nutzer"] . "&abteilung2=".	$_POST["abteilung"]." 'method='post'>"; 

	echo "<p>Name: ".$_POST["nutzer"]."<br />"; 
	echo "Gruppe: ".$_POST["abteilung"]."</p>";
?>

<p><input type="submit" value="Weiter" /></p>

</body>
</html>




