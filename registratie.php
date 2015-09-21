<!DOCTYPE html>
<html>
	<head>
		<title>Ingevulde gegevens</title>
	</head>
	<body>	
		<h3>U heeft de volgende gegevens ingevuld:</h3>		
		<?php
			echo "Voornaam: ".$_GET["voornaam"]."<br>";
			echo "tussenvoegsel: ".$_GET["tussenvoegsel"]."<br>";
			echo "Achternaam: ".$_GET["achternaam"]."<br>";
			echo "e-mailadres: ".$_GET["e-mail"]."<br>";
		?>
	
	</body>
</html>