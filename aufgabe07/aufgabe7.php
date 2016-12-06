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
	$vorname = filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
	$nachname = filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$studiengang = filter_var($_POST['studiengang'], FILTER_SANITIZE_STRING);
	$passwort = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);
	

	// Fehlervariablen

	$fehlerausgabe = " ";

	$f_vorname = false;
	$f_nachname = false;
	$f_email = false;
	$f_paswort = false;


	if(!$vorname){
		$fehlerausgabe .= '<li class="list-group-item listr-group-item-danger"> Der Vorname fehlt.</li>';
		$f_vorname = true;
	}

	if(!$nachname){
		$fehlerausgabe .= '<li class="list-group-item listr-group-item-danger"> Der Nachname fehlt.</li>';
		$f_nachname = true;
	} 

	if(!$email){
		$fehlerausgabe .= '<li class="list-group-item listr-group-item-danger"> Die Email fehlt.</li>';
		$f_nachname = true;
	}  

	if(!$passwort){
		$fehlerausgabe .= '<li class="list-group-item listr-group-item-danger"> Das Passwort fehlt.</li>';
		$f_nachname = true;
	}   



	echo "<div class='container'><h2>Anmeldung</h2>";

	echo "<div class='jumbotron'>";
	echo "<div><h5>Vielen Dank für Ihre Anmeldung!</h5>";
	echo "<div><h6>Herzlichen Dank <em>" . $vorname . " " . $nachname . " </em>aus dem Studiengang<em> " . $studiengang . "</em>!<br/> ";
	echo "Wir haben eine Best&auml;tigung Ihrer Anmeldung an die Email-Adresse<em> " . $email . " </em>versendet.</h6><br/>";
	echo "</div>";
	echo "<a href='" .htmlspecialchars($_SERVER["PHP_SELF"]). "' class='a'>Zur&uuml;ck</a>";
	
	echo "</div>";
	echo "</div>";


	echo "<div class='container'";
	echo "<div class='row'";




	if(isset($_POST["vorname"])){ 
		echo "Sie haben als Vornamen: " . $vorname . " eingegeben.";
		echo "<input type='text' class='form-control' name='vorname'
					placeholder='Vorname'><i class='glyphicon glyphicon-ok form-control-feedback'></i>";
	}else{
		echo "Bitte geben Sie Ihren Vornamen ein.";

	}

	if(isset($_POST["nachname"])){
		echo "Sie haben als Nachnamen: " . $nachname . " eingegeben.";
	}else{
		echo "Bitte geben Sie Ihren Nachnamen ein.";
	}

	if(isset($_POST["studiengang"])){
		echo "Sie haben den Studiengang: " . $studiengang . " gewählt.";
	}else{
		echo "Bitte wählen Sie einen Studiengang aus.";
	}

	if(isset($_POST["pwd"])){
		echo "Sie haben das Passwort: " . $passwort . " eingegeben.";
	}else{
		echo "Bitte geben Sie Ihr Passwort an.";
	}

	
	echo "</div>";
	echo "</div>";

?>


		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="vorname">Vorname :</label>
				<div class="col-sm-10 col-md-6">
					<input type="text" class="form-control" name="vorname" placeholder="Vorname" 
							value = "<?php if ($_POST['vorname'] != "") { echo $_POST['vorname']; } ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="nachname">Nachname :</label>
				<div class="col-sm-10 col-md-6">
					<input type="text" class="form-control" name="nachname"	placeholder="Nachname"
								value = "<?php if ($_POST['nachname'] != "") { echo $_POST['nachname']; } ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
				<div class="col-sm-10 col-md-6">
					<input type="email" class="form-control" name="email"	placeholder="E-Mail"
								value = "<?php if ($_POST['email'] != "") { echo $_POST['email']; } ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 col-md-2" for="studiengang">Studiengang:</label>
				<div class="col-sm-10 col-md-6">
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