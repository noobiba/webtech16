<?php
	echo "<h3>Kontrollstrukturen Switch</h3>";

	$monat = 8;

	switch ($monat) {
		case 1:
			echo "Januar";
			break;

		case 2:
			echo "Februar";
			break;

		case 3:
			echo "März";
			break;

		case 4:
			echo "April";
			break;

		case 5:
			echo "Mai";
			break;

		case 6:
			echo "Juni";
			break;

		case 7:
			echo "Juli";
			break;

		case 8:
			echo "August";
			break;

		case 9:
			echo "September";
			break;

		case 10:
			echo "Oktober";
			break;

		case 11:
			echo "November";
			break;

		case 12:
			echo "Dezember";
			break;
		
		default:
			echo "Diesen Monat gibt es nicht.";
			break;
	}

?>