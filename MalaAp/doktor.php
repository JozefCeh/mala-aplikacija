<html>
<head>
<title>Doktor</title>
</head>
<body>
<form action="" method="post">
ime: <input type="text" size="30" name="ime"><br><br>
prezime: <input type="text" size="30" name="prezime"><br><br>
specijalnost: <input type="text" size="30" name="spec"><br><br>
izabrani pacijenti: <input type="text" size="30" name="izpac"><br><br>
<input type="submit" value="Kreirati" name="Kreirati">
<?php

require("login.php");

if(ISSET($_POST['Kreirati'])){
$MESSAGE=" Doktor je kreiran. ";
logToFile("mylog", "Kreiran je doktor ".$_POST['ime']);
}

if(ISSET($MESSAGE))
	{
		ECHO "<BR><BR>$MESSAGE";
	}
	?>
<br><br>
<a href="Str.php">Nazad na glavnu stranu</a>
	</form>
</head>
</html>