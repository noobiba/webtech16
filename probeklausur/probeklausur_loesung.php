<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Klausur PZ1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>

		body{
			font-family: Verdana;
		}

		header{
			background-color: lightgray;
			text-align: center;
			margin-bottom: 10px;
			padding: 15px;
		}

		footer{
			background-color: lightgray;
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
			padding: 10px;
		}

		footer a:link, 
		footer a:hover, 
		footer a:visited{
			text-decoration: none;
			color: black;
		}

		.main{
			display: flex;
		}

		.links{
			flex: 1;
			background-color: orange;
			padding: 20px;
		}

		.rechts{
			flex: 4;
			background-color: lightblue;
			padding: 20px;
		}
	</style>
</head>

<body>
	
	<?php
		if ($_GET) {
			$von = filter_var($_GET ['von'], FILTER_SANITIZE_NUMBER_INT);
			$bis = filter_var($_GET ['bis'], FILTER_SANITIZE_NUMBER_INT);

			if (! $von){
				$vonOk = false;
			}
			else{
				$vonOk = true;
			}

			if (! $bis){
				$bisOk = false;
			}
			else{
				$bisOk = true;
			}

		}else {
			$von = 0;
			$bis = 40;
			$vonOk = true;
			$bisOk = true;
		}
	?>

	<div class="container-fluid">
		<header>
			<h1>Klausur 1.Prüfungszeitraum</h1>
		</header>

		<div class="main">

			<div class="links">
				<form role="form" class="form-horizontal" action="probeklausur_loesung.php"
				method="GET">

				<div class="form-group">
					<label class="control-label col-sm-4" for="von">von:</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="von"
								<?php 
									if(isset($_GET['von']) && $vonOk){
									 	echo 'value="' . $von . '"';
									 	}
								?>>
					</div>
				</div>

				<?php
					if (! $vonOk){
						echo '<p> Bitte eine Zahl eingeben </p><br/>';
					}
				?>

				<div class="form-group">
					<label class="control-label col-sm-4" for="bis">bis:</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="bis"
								<?php 
									if(isset($_GET['bis']) && $bisOk){
										echo 'value="'.$bis.'"';
									}
								?>>
					</div>
				</div>

				<?php
				if (! $bisOk)
					echo '<p> Bitte eine Zahl eingeben </p><br/>';
				?>

				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
						<button type="submit" class="btn btn-primary">Filtern</button>
					</div>
				</div>
			</form>

			<form role="form">
				<div class="form-group">
					<label class="control-label col-sm-4" >löschen:</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" id="input1" onkeyup="removeDiv();">
					</div>
				</div>
			</form>

		</div>

		<div class="rechts">
			<?php
				$fp = fopen ( "./images.txt", "r" ) or die ( "Datei nicht gefunden!" );
				$i = 1;
				
					while ( ! feof ( $fp ) ) {
						$bild = fgets ( $fp );
					
							if ($vonOk && $bisOk && ($i >= $von && $i <= $bis)){
								echo '<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
											<div id="' . $i . '" class="thumbnail" onclick="visibilityOnOff(this);">
											
											<h4> ' . $i . ' </h4>
											<img src="' . $bild . '" style="height:80px;width:80px;"/>
											</div>
											</div>';
							}
							$i ++;
							}
			?>
		</div>
	</div> <!-- div class="main" -->

	<footer>
		<a href="../index.html">Tanja Cerri</a>
	</footer>

</div> <!-- Div class="container-fluid"-->

		<script>
			function visibilityOnOff(obj){
				var kids = obj.children;

				if(kids[0].style.visibility == "hidden"){

					for(let i=0; i<kids.length; i++){
						kids[i].style.visibility = "visible";
					}
					obj.style.backgroundColor="white";
				}else{

					for(let i=0; i<kids.length; i++){

						kids[i].style.visibility = "hidden";
					}
					obj.style.backgroundColor="#76B900";
				}	
			}

			function removeDiv(obj)
			{
				var wert = document.getElementById("input1").value;

				if(!isNaN(wert) && wert>0 && wert<40){

					var divToDelete = document.getElementById(wert.toString());

					if(divToDelete!==null && divToDelete.parentNode!==null){
						divToDelete.parentNode.removeChild(divToDelete);
					}
				}
			}
		</script>
</body>
</html>


