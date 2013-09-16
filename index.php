<!DOCTYPE html>
<?php 
session_start();	//starta sessionen
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
</head>

<body>
 
<h1>Laborationskod fh222dt</h1>

<?php
//variabler
$formHeader ="<h2>Ej Inloggad</h2>";
$helpText ="";
$displayForm =true;
//endast dessa variabler går att logga in med
$username = "Admin";
$password = "Password";


//logga ut
if (isset($_GET["logout"])) {		//kolla om det finns i urlen

	session_destroy();
	$helpText= "<p>Du har nu loggat ut</p><br/>";

}
	
//testa om formuläret är skickat
if (isset($_POST["submit"])) {

	$inputName = $_POST["UserName"];
	$inputPsw = $_POST["Password"];	
		
	if ($inputName == $username && $inputPsw == $password) {
		//vid en lyckad inloggning
		$_SESSION["login"] = true;

		/*$formHeader = "<h2> $inputName är inloggad</h2>";

		?>
		<p>Inloggningen lyckades </br> <a href="?logout=true">Logga ut</a></p>
		<?php

		$displayForm = false;*/

		header("Location: $_SERVER[PHP_SELF]");
	}

	else {
		//felhantering av inmatad data från användaren
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

if (isset($_SESSION["login"])) {

	$formHeader = "<h2> Admin är inloggad</h2>";		//ändra namn till en variabel!!!!
	?>
		<p>Inloggningen lyckades </br> <a href="?logout=true">Logga ut</a></p>
		<?php

		$displayForm = false;

}

echo $formHeader;

if ($displayForm == true) {	
	
	?>
<form method="post" action="index.php" class="form-inline">
	<fieldset>
		<legend>Login - Skriv in användarnamn och lösenord</legend>

		<?php echo $helpText; ?>

		<label for="UserName">Användarnamn</label>
		<input id="UserName" name="UserName" type="text" size="15" 
		value="<?php echo isset($_POST['UserName']) ? $_POST['UserName'] : '' ?>">		<!--value anv för att behålla inmatad text -->

		<label for="Password">Lösenord</label>
		<input id="Password" name="Password" type="password" size="15">

		<label for="KeepLogin" class="checkbox"> 
		<input id="KeepLogin" type="checkbox"> Håll mig inloggad</label>

		<input type="submit" name="submit" value="Logga in" class="btn">
	</fieldset>
</form> <?php
}






//Visa datum och tid snyggt på svenska
setlocale (LC_TIME, "Swedish"); 
 echo strftime("<p>%A" . ", den " . "%#d %B %Y" . ". Klockan är [" . "%X" . "]</p>"); //formatet %#d är linux %e
 ?>
 </body>
 </html>