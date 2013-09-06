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
<form class="form-inline">
<fieldset>
<legend>Login - Skriv in användarnamn och lösenord</legend>
<label for="UserName">Användarnamn</label>
<input id="UserName" type="text" size="15">
<label for="Password">Lösenord</label>
<input id="Password" type="password" size="15">

<label for="KeepLogin" class="checkbox"> 
	<input id="KeepLogin" type="checkbox"> Håll mig inloggad</label>

<input type="submit" value="Logga in" class="btn">
</fieldset>
</form>
</body>
 </html>


<?php

/*Visa datum och tid snyggt på svenska*/
setlocale (LC_TIME, "Swedish"); 
 echo strftime("%A" . ", den " . "%#d %B %Y" . ". Klockan är [" . "%X" . "]"); //formatet %#d är linux %e
 ?>
 