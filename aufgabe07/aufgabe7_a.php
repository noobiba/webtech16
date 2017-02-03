<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 7</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/styles_07.css">
</head>

<body>

<?php 
	$vorname = filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
	$nachname = filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$studiengang = filter_var($_POST['studiengang'], FILTER_SANITIZE_STRING);
	$passwort = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);


	if (isset($_SERVER['PHP_SELF'])) {

		if (isset($vorname)) {
			echo "Danke für den Vornamen.";
		}else {
			echo "Bitte geben Sie den Vornamen ein.";
		}

		echo "<div class='container'><h2>Anmeldung</h2>";

		echo "<div class='jumbotron'>";
		echo "<div><h5>Vielen Dank für Ihre Anmeldung!</h5>";
		echo "<div><h6>Herzlichen Dank <em>" . $vorname . " " . $nachname . " </em>aus dem Studiengang<em> " . $studiengang . "</em>!<br/> ";
		echo "Wir haben eine Bestätigung Ihrer Anmeldung an die Email-Adresse<em> " . $email . " </em>versendet.</h6><br/>";
		echo "</div>";
		echo "<a href='" .htmlspecialchars($_SERVER["PHP_SELF"]). "' class='a'>Zurück</a>";
		
		echo "</div>";
		echo "</div>";
	}
	


?>






<div class="wrapper">


		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" role="form" class="form-horizontal">


			<div class="form-group">
				<div class="col-sm-2 col-md-2">&nbsp;</div>
				<div class="col-sm-10 col-md-8"><h2>Anmeldeformular
				</h2></div>
			</div>
	
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="vorname">Vorname :</label>
				<div class="col-sm-10 col-md-8"><input type="text" class="form-control" name="vorname" placeholder="Vorname" value = "<?php 
					if ($_POST['vorname'] != ""){
						echo $_POST['vorname']; 
						
					} ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="nachname">Nachname :</label>
				<div class="col-sm-10 col-md-8">
					<input type="text" class="form-control" name="nachname"	placeholder="Nachname"
					value = "<?php if ($_POST['nachname'] != "") { echo $_POST['nachname']; } ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
				<div class="col-sm-10 col-md-8">
					<input type="email" class="form-control" name="email"	placeholder="E-Mail-Adresse"
					value = "<?php if ($_POST['email'] != "") { echo $_POST['email']; } ?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="studiengang">Studiengang:</label>
				<div class="col-sm-10 col-md-8">
					<select class="form-control" name="studiengang" value = "<?php if ($_POST['studiengang'] != "") { echo $_POST['studiengang']; } ?>">
						<option value="FIW">Informatik und Wirtschaft</option>
						<option value="AI">Angewandte Informatik</option>
						<option value="WI">Wirtschaftsinformatik</option>
						<option value="IMI">Internationale Medieninformatik</option>
					</select>
				</div>
			</div>


			<div class="form-group">
				<label for="pwd" class="control-label col-sm-2 col-md-2">Password:</label> 
				<div class="col-sm-10 col-md-8">
					<input type="password" class="form-control" name="pwd" placeholder="Passwort">
				</div>
			</div>

  		<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-6">
					<button type="submit" class="btn btn-default">Anmelden</button>
				</div>
			</div>
		</form>

</div>
</body>
</html>