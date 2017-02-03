<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 7</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" /> 
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
</head>
<body>
<?php 
	$vorname = filter_var($_POST["vorname"],FILTER_SANITIZE_STRING);
	$nachname = filter_var($_POST["nachname"], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);
	$studiengang = filter_var($_POST["studiengang"],FILTER_SANITIZE_EMAIL);
	$pwd = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);

	$fehlerausgabe ='';
	$f_vorname = $f_nachname = $f_email = $f_studiengang = $f_pwd = false;

	if (!$vorname){
		$fehlerausgabe .= '<li class="list-group-item list-group-item-danger">Der Vorname fehlt.</li>';
		$f_vorname = true;
	}

	if (!$nachname){
		$fehlerausgabe .= '<li class="list-group-item list-group-item-danger">Der Nachname fehlt.</li>';
		$f_nachname = true;

	}

	if (!$email){
		$fehlerausgabe .= '<li class="list-group-item list-group-item-danger">Die Email fehlt.</li>';
		$f_mail = true;
	}

	if (!$studiengang){
		$fehlerausgabe .= '<li class="list-group-item list-group-item-danger">Der Studiengang fehlt.</li>';
		$f_studiengang = true;
	}

	if (!$pwd){
		$fehlerausgabe .= '<li class="list-group-item list-group-item-danger">Bitte w&aumlhlen Sie noch ein Passwort.</li>';
		$f_pwd = true;
	}

    $confirmation = "<div class='jumbotron'>Herzlichen Dank $vorname $nachname vom Studiengang $studiengang ! </br> Wir haben eine Best&aumltigung ihrer Anmeldung an die E-mail-Adresse $email verschickt.</div>";
?>


	<div class="container">
		<h2>Anmeldung</h2>


		<?php
			if ($_POST)
			{	if (empty($fehlerausgabe)){
					echo $confirmation;
				}else{
					echo "<div class='well'>";
					echo "Bitte korrigieren Sie Ihre Eingaben:";
					echo "<ul class='list-group'>".$fehlerausgabe."</ul>";
					echo "</div>";
		?>


		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form" class="form-horizontal">	

		<?php if ($vorname){ ?>

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

			<?php if ($nachname){ ?>

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

			<?php if ($email){ ?><div class="form-group has-success has-feedback">
				<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
				<div class="col-sm-10 col-md-6">
					<input type="email" class="form-control" name="email"
						placeholder="E-Mail" value=<?php echo $email; ?>>
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
				</div>
			</div>
			<?php }else{ ?>
			<div class="form-group has-error has-feedback">
				<label class="control-label col-sm-2 col-md-2" for="email">Email:</label>
				<div class="col-sm-10 col-md-6">
					<input type="email" class="form-control" name="email"
						placeholder="E-Mail" value=<?php echo $email; ?>>
					<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>	
				</div>
			</div>
			<?php } ?>

			<?php if ($studiengang){ ?>
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

			<?php if ($pwd){ ?>

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
			}
			else
			{
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