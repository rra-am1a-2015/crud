<?php
/* Deze code is uitgecommentarieerd en wordt daarom door de php-engine niet gezien.

	echo 'Dit is een test om te zien '.' hoe je strings kunt knippen en plakken<br>';
	$voornaam = "Bert";
	echo "Mijn voornaam is: $voornaam <br>";
	echo "Mijn voornaam is: ".$voornaam."<br>";
	echo 'Mijn voornaam is: $voornaam <br>';
	echo 'Mijn voornaam is: '.$voornaam.' <br>';
	
	$voornaam = 'Arjan';
	$tussenvoegsel = 'de';
	$achternaam = 'Ruijter';
	echo 'Mijn volledige naam is '.$voornaam.' '.$tussenvoegsel.' '.$achternaam.'<br>';
	
	$voornaam1 = 'Bert';
	$tussenvoegsel1 = 'de';
	$achternaam1 = 'Vries';
	echo 'Mijn volledige naam is '.$voornaam1.' '.$tussenvoegsel1.' '.$achternaam1.'<br>';
	
	$voornaam2 = 'Johan';
	$tussenvoegsel2 = 'van';
	$achternaam2 = 'Amersfoort';
	echo 'Mijn volledige naam is '.$voornaam2.' '.$tussenvoegsel2.' '.$achternaam2.'<br>';
	
	function groetjes($naam, $tussenvoegsel, $achternaam)
	{
		echo "Hallo $naam $tussenvoegsel $achternaam<br>";
		echo "Dag $naam<br>";
		echo "Hoi $naam<br>";	
	}
	
	function optellen($getal1, $getal2)
	{
		$som = $getal1 + $getal2;
		echo "De som van $getal1 + $getal2 = $som<br>"; 
	}
	
	function optellenMetReturn($getal1, $getal2)
	{
		return $getal1 + $getal2;
	}
	
	echo "De som van 3 + 5 = ".optellenMetReturn(3,5)."<br>";
	
	optellen(5, 6);
	optellen(15, 26);
	optellen(35, 126);
	optellen(125, 236);
	optellen(58, 6);
	optellen(52, 326);
	optellen(545, 126);
	optellen(15, 16);
	
	groetjes("Bert", "de", "Vries");
	groetjes("Johan", "van", "Donkenstein");
	groetjes("Arjan", "de", "Ruijter");
*/

// http://www.w3schools.com/php/php_mysql_connect.asp theorie mysqli
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "am1a_inlogregistratie";

// Maak contact met de mysql-server en de database.....
$conn = mysqli_connect($servername, $username, $password, $dbname)or die("Database server verbindingsfout. De server meldt: ".mysqli_error($conn));

$query = "INSERT INTO `personalia` (`id`,
									`voornaam`,
									`tussenvoegsel`,
									`achternaam`,
									`email`)
						VALUES 	   (NULL,
									'".$_POST["voornaam"]."',
									'".$_POST["tussenvoegsel"]."',
									'".$_POST["achternaam"]."',
									'".$_POST["e-mail"]."')";

mysqli_query($conn, $query) or die("Query fout in de volgende query: ".$query."<br>De database meldt het volgende: ".mysqli_error($conn));

mysqli_close($conn);

echo "Uw ingevulde gegevens zijn correct ontvangen. Dank u voor het registreren";
header("refresh:4; url=index.html");
?>
