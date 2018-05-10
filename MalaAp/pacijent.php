<html>
<head>
<title>Pacijent</title>
</head>
<body>
<form action="" method="post">
ime: <input type="text" size="30" name="ime"><br><br>
prezime: <input type="text" size="30" name="prezime"><br><br>
jmbg: <input type="text" size="30" name="jmbg"><br><br>
br. zdravstvenog kartona: <input type="text" size="30"  name="brkar."><br><br>
izabrani doktor: <select name="izabran">
<option value="" selected></option>
<option value="Milan">Milan</option>
<option value="Jovan">Jovan</option>
<option value="Davor">Davor</option>
</select>
<br><br>
<input type="submit" value="Kreirati" name="Kreirati">

<?php

require("login.php");

if(ISSET($_POST['Kreirati'])){
$MESSAGE=" Pacijent je kreiran. ";
logToFile("mylog", "Kreiran je pacijent ".$_POST['ime']);
}

if(ISSET($MESSAGE))
	{
		ECHO "<BR><BR>$MESSAGE";
	}
if(ISSET($_POST['izabran'])){
echo "<BR><BR>Lekar je izabran";
logToFile("mylog", "Izabrani lekar je " .$_POST['izabran']);
}
?>	
<br><br>
<a href="Str.php">Nazad na glavnu stranu</a>
	</form>
</head>
</html>