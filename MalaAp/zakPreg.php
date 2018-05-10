<html>
<head>
<title> Zakazivanje pregleda </title>
</head>
<body>
 <form action="" method="post">
 
Doktor: <select name="izabran">
<option value="" selected></option>
<option value="Milan">Milan</option>
<option value="Jovan">Jovan</option>
<option value="Davor">Davor</option>
</select><br><br>
Zakazuje pregled za pacijenta: <select name="izabran">
<option value="" selected></option>
<option value="Dragan">Dragan</option>
<option value="Bogdan">Bogdan</option>
<option value="Davor">Davor</option>
</select><br><br>
Vrsta pregleda:
<br><br>
<input type="checkbox" name="kp">krvni pritisak  <input type="datetime-local" name="kp1"><br><br>
<input type="checkbox" name="ns">nivo sečera u krvi  <input type="datetime-local" name="ns1"><br><br>
<input type="checkbox" name="nh">nivo holesterola u krvi  <input type="datetime-local" name="nh1"><br><br>
<br>
<input type="submit" value="Zakazati pregled" name="pregled">
<?php

if(ISSET($_POST['pregled'])){
	echo "Pregled je zakazan";
	}
?>	

<br><br>
<a href="Str.php">Nazad na glavnu stranu</a>

 </form>
 </body>
 </html>