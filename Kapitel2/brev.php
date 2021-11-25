<?php
$fnamn=$_POST['fnamn'];
$enamn=$_POST['enamn'];
$email=$_POST['email'];
?>

<!DOCTYPE html>
<html lang=sv>
	<head>
		<title> Min fina sida!</title>
		<meta charset="UTF-8">
	</head>
	
	    <body>

<?php
    echo "Du har fyllt i:<br>";
    echo  "Förnamn: <b>$fnamn</b><br>";
    echo  "Efternamn: <b>$enamn</b><br>";
    echo  "Mejl: <b>$email</b><br><br>";
    echo "Tack för anmält intresse, vi hör av oss!<br><br>";
    echo "Stämmer det inte?";
?>

    <a href="brev.html"> <br>Gå tillbaka</a>

</body>

</html>