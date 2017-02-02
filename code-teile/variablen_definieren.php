<?php 

	echo "<h3>Variablen definieren</h3>";

	$var = 0;
	if(empty($var)){
		echo "Die Variable ist 0, ohne Wert oder nicht definiert.<br/>";
	}
	if (isset($var)) {
		echo "Die Variable ist definiert.<br/>";
	}
	else{
		echo "Die Variable ist nicht definiert.<br/>";
	}
	?>
	