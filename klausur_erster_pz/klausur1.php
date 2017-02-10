<!DOCTYPE html>
<html lang="de">
<head>
<title>WebTech</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/styles_klausur_erster_pz.css" >

</head>
<body>
	
		<header>WebTech-Klausur</header>

			<div class="oben">
				<button a href="#" class="btn btn-info btn-block">Datei laden</button>

				<form> <!-- Suchfeld -->
				  <div class="input-group">
				    <input type="text" class="form-control" placeholder="Suche">
				    <div class="input-group-btn">
				      <button class="btn btn-default" type="submit">
				        <i class="glyphicon glyphicon-search"></i>
				      </button>
				    </div>
				  </div>
				</form> <!-- Suchfeld -->

				
			</div> <!-- class oben -->

			<div class="main">
				<div class="linkeseite">
					
					<p></p>
					
					<form>
						<div class="form-group">
						  <label for="original">Original:</label>
						  <textarea class="form-control" rows="15" id="original"></textarea>
						</div> <!-- formgroup original -->

						<input type="submit" class="btn btn-danger" value="Kopieren">
						<input type="submit" class="btn btn-info" value="Text speichern">
					</form>

					<p></p>

					<label for="original">Suchbegriffe:</label>	
					<div id="suchbegriffe">
						<input type="text" class="form-control" id="usr" value="Suchbegriffe">
					</div>		

				</div> <!-- class linkeseite -->

				<div class="rechteseite">
					
					<label for="kopie">Kopie:</label>
					<div class="well well-lg"></div>
						

				</div> <!-- class rechteseite -->
			</div> <!-- class main -->

			


		<footer>
			<a href="../index.html">Tanja Cerri</a>
		</footer>
</body>

</html>