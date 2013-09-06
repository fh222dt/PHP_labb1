<!DOCTYPE html>
<html>
<head></head>

 <body>
 
 <h1>Laborationskod fh222dt</h1>
 <h2>Ej Inloggad</h2>

<fieldset>
<legend>Login - Skriv in användarnamn och lösenord</legend>
<label for="UserName">Användarnamn</label>
<input id="UserName" type="text" size="20">
<label for="Password">Lösenord</label>
<input id="Password" type="password" size="20">
<label for="KeepLogin">Håll mig inloggad</label>
<input id="KeepLogin" type="checkbox">
<input type="submit" value="Logga in">
</fieldset>

</body>
 </html>


<?php
setlocale (LC_TIME, "Swedish");
 
 echo strftime("%A" . ", den " . "%#d %B %Y" . ". Klockan är [" . "%X" . "]"); //formatet %#d är linux %e
 ?>
 