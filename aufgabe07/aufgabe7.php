<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 7</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" />  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>

<?php 
	$vorname = $_POST["vorname"];
	$nachname = $_POST["nachname"];
	$email = $_POST["email"];
	$studiengang = $_POST["studiengang"];
	$passwort = $_POST["pwd"];
	$submit = $_POST["submit"];

	echo "Sie haben als Vornamen: " . $vorname . "angegeben";
	echo "Sie haben als Nachnamen: " . $nachname . "angegeben";
	echo "Sie haben als Email: " . $email . "angegeben";
	echo "Sie haben als Studiengang: " . $studiengang . "gewählt";
	echo "Sie haben als Passwort: " . $pwd . "angegeben";
	echo "Sie haben Submit: " . $submit . "gewählt.";

	echo "<div class='container'>";
	echo "<div class='jumbotron'>";
	echo "<div><h2>Vielen Dank für Ihre Anmeldung.</h2><h5>Sie werden in K&uuml;rze Nachricht von uns erhalten.</h5>";
	echo "</div>";
	echo "</div>";

?>


	<div class="container">
		<h2>Anmeldung</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="vorname">Vorname :</label>
				<div class="col-sm-10 col-md-6">
					<input type="text" class="form-control" name="vorname"
						placeholder="Vorname">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="nachname">Nachname :</label>
				<div class="col-sm-10 col-md-6">
					<input type="text" class="form-control" name="nachname"
						placeholder="Nachname">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
				<div class="col-sm-10 col-md-6">
					<input type="email" class="form-control" name="email"
						placeholder="E-Mail">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="studiengang">Studiengang:</label>
				<div class="col-sm-10 col-md-6">
					<select class="form-control" name="studiengang">
						<option value="FIW">Informatik und Wirtschaft</option>
						<option value="AI">Angewandte Informatik</option>
						<option value="WI">Wirtschaftsinformatik</option>
						<option value="IMI">Internationale Medieninformatik</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="pwd" class="control-label col-sm-2 col-md-2">Password:</label> 
				<div class="col-sm-10 col-md-6">
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