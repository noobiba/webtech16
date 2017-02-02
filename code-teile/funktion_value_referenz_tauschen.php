<?php
	echo "<h3>Funktionen / Value bzw. Referenz tauschen</h3>";

	echo "<p></p>";

	function valueTauschen($a, $b){
		$temp = $a;
		$a = $b;
		$b = $temp;
	}

	function referenceTauschen(&$a, &$b){
		$temp = $a;
		$a = $b;
		$b = $temp;
	}

	$x = 12;
	$y = 18;
	echo "<p>Call-by-value: vorher: $x, $y <br/>";
	valueTauschen($x, $y);		
	echo "Call-by-value: nachher: $x, $y<br/>";

	$x = 12;
	$y = 18;
	echo "<p>Call-by-reference: vorher: $x, $y <br/>";
	referenceTauschen($x, $y);		
	echo "Call-by-reference: nachher: $x, $y<br/>";

?>

