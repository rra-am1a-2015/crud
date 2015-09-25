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
	
	while( $row = mysqli_fetch_assoc($result) )
	{
		echo $row["id"]." | ".
			 $row["voornaam"]." | ".
			 $row["tussenvoegsel"]." | ".
			 $row["achternaam"]." | ".
			 $row["email"]." | ".
			 $row["haarkleur"]."<br>";			
	}
	
	mysqli_data_seek($result, 2);
	
	$row = mysqli_fetch_assoc($result);
	
	echo $row["id"]." | ".
			 $row["voornaam"]." | ".
			 $row["tussenvoegsel"]." | ".
			 $row["achternaam"]." | ".
			 $row["email"]." | ".
			 $row["haarkleur"]."<br>";
	
	/*
	$i = 0;
	
	while ( $i <= 10)
	{
		echo $i."<br>";
		//$i = $i + 1;
		//$i++;
		$i += 1;
	}
	
	//var_dump($row);
	
	// Wat is een array
	$fruit1 = "appel";
	$fruit2 = "mandarijn";
	$fruit3 = "peer";
	
	echo "Ik heb wat fruit gekocht, namelijk: ".$fruit1.", ".$fruit2.", ".$fruit3."<br>";

	$fruit = array("peer", "appel", "mandarijn");
	
	echo "Het gezondst is, in aflopende volgorde: ".$fruit[2].", ".$fruit[1].", ".$fruit[0]."<br>";
	
	// Opdracht: maak een array auto, sla daarin 5 automerken op en geef deze weer in een
	// orderered list <ol><li></li></ol>. Lievelingsmerk bovenaan...
	
	// Geindexeerde array
	$auto = array("Mercedes", "Fiat", "Bentley", "Bugatti", "Ford");
	
	echo "Mijn favoriete auto's zijn:<br>
		  <ol>
			<li>".$auto[0]."</li>
			<li>".$auto[1]."</li>
			<li>".$auto[2]."</li>
			<li>".$auto[3]."</li>
			<li>".$auto[4]."</li>
		  </ol>";
	
	// Associatieve array
	// Maak een array met gametitel, gamegenre, jaaruitgifte, uitgever ,cijfer en geef deze weer in een <ol>
	
	$games = array("gametitel" 		=> "Kings Valley I",
				   "gamegenre" 		=> "Doolhof",
				   "jaaruitgifte"   => 1985,
				   "uitgever"		=> "konami",
				   "cijfer"			=> 10);
	
	echo "Hieronder staan de gegevens van mijn favo game ever...<br>";
	echo "<ol>
			<li>".$games["gametitel"]."</li>
			<li>".$games["gamegenre"]."</li>
			<li>".$games["jaaruitgifte"]."</li>
			<li>".$games["uitgever"]."</li>
			<li>".$games["cijfer"]."</li>
		  </ol>";
	*/
	
	
	
	// Sluit de verbinding met de server
	mysqli_close($connection);	
?>