<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
</head>

 <body>
 
 <h1>Laborationskod fh222dt</h1>
 <h2>Ej Inloggad</h2>
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
</form>



<?php
/*endast dessa variabler går att logga in med*/
$username = "Admin";
$password = "Password";

	
/*testa om formuläret är skickat*/
if (isset($_POST['submit'])) {

	echo "HEJA!";

	if ($_POST["UserName"] == $username && $_POST["Password"] == $password) {
	echo "<br/>jjjjjjjjjjjjjjjjj";
	}

	else {
		echo "<br/>Fel användaruppgifter!";
	}
}


/*Visa datum och tid snyggt på svenska*/
setlocale (LC_TIME, "Swedish"); 
 echo strftime("%A" . ", den " . "%#d %B %Y" . ". Klockan är [" . "%X" . "]"); //formatet %#d är linux %e
 ?>
 </body>
 </html>