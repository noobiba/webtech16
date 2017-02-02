<?php
	function minimum(){
		$anzahlDerParameter = func_num_args();
		$holeParameter = func_get_args();
		$aktuellesMinimum = $holeParameter[0];

		for ($i=1; $i < $anzahlDerParameter ; $i++) { 
			if ($anzahlDerParameter[$i] < $aktuellesMinimum) {
				$aktuellesMinimum = $holeParameter[$i];
			}
		}
		return $aktuellesMinimum;
	}

?>