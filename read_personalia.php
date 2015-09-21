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
	var_dump($result);
	
	
	
	// Sluit de verbinding met de server
	mysqli_close($connection);	
?>