<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "am1a_inlogregistratie";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-verbinding".mysqli_error($connection));
	
	$query = "SELECT * FROM `personalia`";
	
	// Sla wat je terugkrijgt van de functie mysqli_query op in de variabele $result.
	// SELECT-query's geven altijd een resultaat terug.
	$result = mysqli_query($connection, $query);
	
	
	// Studenten verteld over bestaan github.com.
	//var_dump($result);
	
	$row = mysqli_fetch_array($result);
	
	// Wat is een array
	$fruit1 = "appel";
	$fruit2 = "mandarijn";
	$fruit3 = "peer";
	
	echo "Ik heb wat fruit gekocht, namelijk: ".$fruit1.", ".$fruit2.", ".$fruit3."<br>";

	$fruit = array("peer", "appel", "mandarijn");
	
	echo "Het gezondst is, in aflopende volgorde: ".$fruit[2].", ".$fruit[1].", ".$fruit[0];
	
	// Opdracht: maak een array auto, sla daarin 5 automerken op en geef deze weer in een
	// orderered list <ol><li></li></ol>. Lievelingsmerk bovenaan...
	
	
	
	// Sluit de verbinding met de server
	mysqli_close($connection);	
?>