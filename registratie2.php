<!DOCTYPE html>
<html>
	<head>
		<title>Ingevulde gegevens</title>
	</head>
	<body>	
		<h3>U heeft de volgende gegevens ingevuld:</h3>		
		<?php
			echo "Voornaam: ".$_POST["voornaam"]."<br>";
			echo "tussenvoegsel: ".$_POST["tussenvoegsel"]."<br>";
			echo "Achternaam: ".$_POST["achternaam"]."<br>";
			echo "e-mailadres: ".$_POST["e-mail"]."<br>";
			echo "wachtwoord: ".$_POST["wachtwoord"]."<br>";
			echo "leeftijd: ".$_POST["leeftijd"]."<br>";
			echo "geboortedatum".$_POST["geboortedatum"]."<br>";
		?>
	
	</body>
</html>