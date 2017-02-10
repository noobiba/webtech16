<!DOCTYPE html>
<html lang="de">
<head>
<title>WebTech</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="klausur.css">

</head>
<body>

<header>
	WebTech-Klausur
</header>

	<div class="col-sm-12">
		<div class="col-sm-6">
				<div>
				<form action="klausur1.php" method="get">
				<button class="btn btn-info btn-block" onclick="dateiLaden()"><a href="dateiLaden()">Datei laden</button>
				<br/> 				

				<form>
				  <div class="form-group">
					  <label for="comment">Original:</label>
					  <textarea class="form-control" rows="15" id="comment"></textarea>
					</div>

					<div class="row">
			  		<div class="col-sm-6">
			  			<button type="submit" class="btn btn-danger">Kopieren</button>
			  		</div>
			  		<div class="col-sm-6">
			  			<button type="submit" class="btn btn-info">Text speichern</button>
			  		</div>
			  	</div>
			  </form>

			  
			  <h5>Suchbegriffe:</h5>
			  <br/>
			  <div class="hidden"></div>
			</div>
		</div>

		<div class="col-sm-6">
				<div >
					<form class="navbar-form" role="search">
        			<div class="input-group">
            		<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            		<div class="input-group-btn">
                	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            		</div>
        			</div>
        	</form>				

					<form>
					  <div class="form-group">
						  <label for="comment">Kopie:</label>
						  <div class="well well-lg"></div>

						</div>
				  </form>
				</div>
		</div>



	</div>
		<br/>


		<!-- <footer><a href="../index.html">Tanja Cerri</a></footer> -->


<?php 

	function dateiLaden(){

		ini_set("auto_detect_line_endings", true);

		$file = @fopen ( "./sources/text.txt", "r" );

		if (! $file) {
				echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
		} else {
	
			while ( ! feof ( $file ) ) {
				$text = fgets ( $file );
      }
				
			}
			fclose ( $file );
		}
	}
?>

</body>
</html>