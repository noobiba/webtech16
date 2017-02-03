<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Multiple.php</title>
</head>
<body>

<h2>Ausgewählte Reise</h2>


<?php

	echo "<p> Danke f&uuml;r Ihre Anfrage, wir reservieren:</p>"; 

	echo "<p>";

	for($i=0; $i<sizeof($_POST["zusatzoptionen"]); $i++){

		if(isset($_POST["zusatzoptionen"][$i]))
			echo "Zimmer mit " . $_POST["zusatzoptionen"][$i] . "<br />";
	}
	echo "</p>"; 

?>

</body>
</html>

