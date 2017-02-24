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

	<script>
		function ladeDateiInhalt(){
			$text = file_get_contents('./sources/text.txt');
							
			$feldinhalt = document.getElementById('original').value;
			
			if($feldinhalt == ""){
				document.getElementById('original').innerHTML = $text;
			}else{
				document.getElementById('original').innerHTML = "";
			}
		}

		function zeigeInhaltAn(){
			var text = document.getElementById('original').value;

			if(!isset(text)){
				document.getElementById('original').innerHTML = "";
			}else{
				document.getElementById('original').innerHTML = text;
			}

		}

		function schreibeInDatei(){
				$text = fopen ("./sources/text.txt", "w");

				while ( $text = fgets ($handle, 1024 ))
						{
						  echo $text;
						}
						 
						fclose($handle);
			}

			function kopiereText(){
				$kopierterText = filter_var($_POST['original'], FILTER_SANITIZE_STRING);

				if(isset($kopierterText)){
					document.getElementById('original').value = $kopierterText;
					$worte = explode(" ", $text);
					document.getElementById('original').style.background="#FFFFFF";

				}else{
					document.getElementById('original').innerHTML = 'Leider kein Text zum Kopieren vorhanden.';
				}
			}

	</script>




		
		<header>WebTech-Klausur</header>

		<div class="wrapper">

		<div class="container">
 		  <div class="row">

		    <div class="col-sm-6 col-md-6 col-lg-6">
										
		      <button a href="klausur1.php" class="btn btn-info btn-block" onclick="ladeDateiInhalt()">Datei laden</button>
		      <br/>
		      
		    </div>

		    <div class="col-sm-6 col-md-6 col-lg-6">
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

		    </div>
		  </div>
		</div> <!-- class container -->


<div class="container">
 		  <div class="row">
		    <div class="col-sm-6">

		      <form action="klausur1.php" method="post">
						<div class="form-group">
						  <label for="original">Original:</label>

							
							<textarea class='form-control' rows='15' id='original'></textarea>
							

						</div> <!-- formgroup original -->

						<div>

						<div class="row">
				      <div class="col-xs-3 col-sm-6 col-md-6 col-lg-4">
				      	<input type="submit" name="copy" class="btn btn-danger btn-block" 
				      		value="Kopieren" onclick="kopiereText()">
				      </div>
				      <div class="col-xs-9 col-sm-6 col-md-6 col-lg-8">
				      	<input type="submit" name="save" class="btn btn-info btn-block" 
				      		value="Text speichern" onclick="schreibeInDatei();">
				      </div>
					  </div>
							
							
						</div>
					</form>

		    </div>

			    <div class="col-sm-6">
			      <label for="kopie">Kopie:</label>
						<div class="well well-lg"></div>
					</div>
		  </div>
		</div>


		<div class="container">
 		  <div class="row">
		    <div class="col-sm-12">
		      <label for="original">Suchbegriffe:</label>	
					
					<div id="suchbegriffe">
						<input type="text" class="form-control" id="usr" value="Suchbegriffe">
					</div>
		    </div>		    
		  </div>
		</div>
			

		</div> <!-- class wrapper -->
			


		<footer>
			<a href="../index.html">Tanja Cerri</a>
		</footer>
</body>

</html>