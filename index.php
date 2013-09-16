<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
</head>

<body>
 
<h1>Laborationskod fh222dt</h1>
<!-- <h2>Ej Inloggad</h2>
<form method="post" action="index.php" class="form-inline">
	<fieldset>
		<legend>Login - Skriv in användarnamn och lösenord</legend>

		<label for="UserName">Användarnamn</label>
		<input id="UserName" name="UserName" type="text" size="15">

		<label for="Password">Lösenord</label>
		<input id="Password" name="Password" type="password" size="15">

		<label for="KeepLogin" class="checkbox"> 
		<input id="KeepLogin" type="checkbox"> Håll mig inloggad</label>

		<input type="submit" name="submit" value="Logga in" class="btn">
	</fieldset>
</form> -->



<?php

$formHeader ="<h2>Ej Inloggad</h2>";
$helpText ="";
$displayForm =true;

/*endast dessa variabler går att logga in med*/
$username = "Admin";
$password = "Password";


	
/*testa om formuläret är skickat*/
if (isset($_POST["submit"])) {

	$inputName = $_POST["UserName"];
	$inputPsw = $_POST["Password"];

	
		
	if ($_POST["UserName"] == $username && $_POST["Password"] == $password) {

		$formHeader ="<h2> $inputName är inloggad</h2>";

		?>
		<p>Inloggningen lyckades </br> <a href="?logout=true">Logga ut</a></p>
		<?php

		$displayForm = false;
	}

	else {

		if(empty($inputName) ) {
		$helpText= "<p>Användarnamn saknas</p><br/>";
		}

		else if(empty($inputPsw) ) {
			$helpText= "<p>Lösenord saknas</p><br/>";
		}

		else {
			$helpText= "<p>Felaktigt användarnamn och/eller lösenord</p><br/>";
		}
	}
}

echo $formHeader;

if ($displayForm == true) {	
	
	?>
<form method="post" action="index.php" class="form-inline">
	<fieldset>
		<legend>Login - Skriv in användarnamn och lösenord</legend>

		<?php echo $helpText; ?>

		<label for="UserName">Användarnamn</label>
		<input id="UserName" name="UserName" type="text" size="15">

		<label for="Password">Lösenord</label>
		<input id="Password" name="Password" type="password" size="15">

		<label for="KeepLogin" class="checkbox"> 
		<input id="KeepLogin" type="checkbox"> Håll mig inloggad</label>

		<input type="submit" name="submit" value="Logga in" class="btn">
	</fieldset>
</form> <?php
}

if (isset($_GET["logout"])) {		//kolla om det finns i urlen

	session_destroy();

}




/*Visa datum och tid snyggt på svenska*/
setlocale (LC_TIME, "Swedish"); 
 echo strftime("<p>%A" . ", den " . "%#d %B %Y" . ". Klockan är [" . "%X" . "]</p>"); //formatet %#d är linux %e
 ?>
 </body>
 </html>