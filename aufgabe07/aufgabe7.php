<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 7</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	$fehlerausgabe = '';

	$f_vorname = false;
	$f_nachname = false;
	$f_email = false;
	$f_passwort = false;


	if(!$vorname){
		$fehlerausgabe = $fehlerausgabe . '<li class="list-group-item list-group-item-danger"> Bitte geben Sie Ihren Vornamen an.</li>';
		$f_vorname = true;
	}

	if(!$nachname){
		$fehlerausgabe = $fehlerausgabe . '<li class="list-group-item list-group-item-danger"> Bitte geben Sie Ihren Nachnamen an.</li>';
		$f_nachname = true;
	} 

	if(!$email){
		$fehlerausgabe = $fehlerausgabe . '<li class="list-group-item list-group-item-danger"> Bitte geben Sie Ihre Email an.</li>';
		$email = true;
	}  

	if (!$studiengang){
		$fehlerausgabe = $fehlerausgabe . '<li class="list-group-item list-group-item-danger">Der Studiengang fehlt.</li>';
		$f_studiengang = true;
	}

	if(!$passwort){
		$fehlerausgabe = $fehlerausgabe . '<li class="list-group-item list-group-item-danger">Bitte geben Sie Ihr Passwort ein.</li>';
		$passwort = true;
	}   

	/*   Fehlermeldung im oberen Bereich */
	$bestaetigung =  "<div class='container'>
											<div class='jumbotron'>
											<div><h5>Vielen Dank für Ihre Anmeldung!</h5></div>
											<div><h6>Herzlichen Dank <em>" . $vorname . " " . $nachname . " </em>aus dem Studiengang<em> " . $studiengang . "</em>!<br/>
											Wir haben eine Bestätigung Ihrer Anmeldung an die Email-Adresse<em> " . $email . " </em>versendet.</h6><br/>
											</div>
											<br/ >
											<a href='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' class='a'>Zurück</a>
											</div>
										</div>";
?>

<div class='container'>
<h2>Anmeldung</h2>

	<?php 
		if ($_POST) {
			if (empty($fehlerausgabe)) {
					echo $bestaetigung;
			}else{
				echo "<div class='well well-lg'>
							<h3>Bitte korrigieren Sie Ihre Eingaben</h3>";
				echo "<ul class='list-group'>" . $fehlerausgabe . "</ul>";
				echo "</div>";
		
	?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="form-horizontal">

<?php if($vorname){ ?>
	<div class="form-group has-success has-feedback">
		<label class="control-label col-sm-2 col-md-2" for="vorname">Vorname :</label>
		<div class="col-sm-10 col-md-6">
			<input type="text" class="form-control" name="vorname"
				placeholder="Vorname" value= <?php echo $vorname; ?> >
			<span class="glyphicon glyphicon-ok form-control-feedback"></span>
		</div>
	</div>
<?php }else{ ?>
	<div class="form-group has-error has-feedback">
		<label class="control-label col-sm-2 col-md-2" for="vorname">Vorname :</label>
		<div class="col-sm-10 col-md-6">
			<input type="text" class="form-control" name="vorname"
				placeholder="Vorname" value= <?php echo $vorname; ?> >
			<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>	
		</div>
	</div>
	<?php } ?>

<?php if($nachname){ ?>
	<div class="form-group has-success has-feedback">
		<label class="control-label col-sm-2 col-md-2" for="nachname">Nachname :</label>
		<div class="col-sm-10 col-md-6">
			<input type="text" class="form-control" name="nachname"
				placeholder="Nachname" value= <?php echo $nachname; ?>>
			<span class="glyphicon glyphicon-ok form-control-feedback"></span>
		</div>
	</div>
<?php }else{ ?>
	<div class="form-group has-error has-feedback">
		<label class="control-label col-sm-2 col-md-2" for="nachname">Nachname :</label>
		<div class="col-sm-10 col-md-6">
			<input type="text" class="form-control" name="nachname"
				placeholder="Nachname" value= <?php echo $nachname; ?>>
			<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
		</div>
	</div>
<?php } ?>

<?php if($email){ ?>
	<div class="form-group has-success has-feedback">
		<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
		<div class="col-sm-10 col-md-6">
			<input type="email" class="form-control" name="email"
				placeholder="E-Mail" value= <?php echo $email; ?>>
				<span class="glyphicon glyphicon-ok form-control-feedback"></span>
		</div>
	</div>
<?php }else{ ?>
	<div class="form-group has-error has-feedback">
		<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
		<div class="col-sm-10 col-md-6">
			<input type="email" class="form-control" name="email"
				placeholder="E-Mail" value= <?php echo $email; ?>>
			<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>	
		</div>
	</div>
<?php } ?>

<?php if($studiengang){ ?>
		<div class="form-group has-success has-feedback">
			<label class="control-label col-sm-2 col-md-2" for="studiengang">Studiengang:</label>
			<div class="col-sm-10 col-md-6">
				<select class="form-control" name="studiengang">
					<option value= <?php echo $studiengang; ?> > <?php echo $studiengang; ?></option>
					<option value="FIW">Informatik und Wirtschaft</option>
					<option value="AI">Angewandte Informatik</option>
					<option value="WI">Wirtschaftsinformatik</option>
					<option value="IMI">Internationale Medieninformatik</option>
				</select>
				<span class="glyphicon glyphicon-ok form-control-feedback"></span>
			</div>
		</div>

<?php }else{ ?>

			<div class="form-group has-error has-feedback">
				<label class="control-label col-sm-2 col-md-2" for="studiengang">Studiengang:</label>
					<div class="col-sm-10 col-md-6">
						<select class="form-control" name="studiengang">
							<option value= <?php echo $studiengang; ?> > <?php echo $studiengang; ?></option>
							<option value="FIW">Informatik und Wirtschaft</option>
							<option value="AI">Angewandte Informatik</option>
							<option value="WI">Wirtschaftsinformatik</option>
							<option value="IMI">Internationale Medieninformatik</option>
						</select>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
					</div>
			</div>

	<?php } ?>

	<?php if($passwort){ ?>

		<div class="form-group has-success has-feedback">
			<div class="form-group">
				<label for="pwd" class="control-label col-sm-2 col-md-2">Password:</label> 
				<div class="col-sm-10 col-md-6">
					<input type="password" class="form-control" name="pwd" placeholder="Passwort">
					<span class="glyphicon glyphicon-ok form-control-feedback"></span>
				</div>
		</div>

		<?php }else{ ?>

			<div class="form-group has-error has-feedback">
				<div class="form-group">
					<label for="pwd" class="control-label col-sm-2 col-md-2">Password:</label> 
					<div class="col-sm-10 col-md-6">
						<input type="password" class="form-control" name="pwd" placeholder="Passwort">
						<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
				</div>
			</div>

		<?php } ?>

			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10 col-md-offset-2 col-md-6">
					<button type="submit" class="btn btn-default">Anmelden</button>
				</div>
			</div>

<?php }
}else{
	?>
		
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
			<?php
		}
		?>
		
		</form>
		</div>
</body>
</html>