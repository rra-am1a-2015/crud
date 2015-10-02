<?php
	echo "Hallo: ";
	var_dump($_POST);
	
	include_once("db_connect.php");
	
	$query = "UPDATE `personalia` 
			  SET 	 `voornaam` 		= '".$_POST['voornaam']."',
					 `tussenvoegsel` 	= '".$_POST['tussenvoegsel']."',
					 `achternaam` 		= '".$_POST['achternaam']."',
					 `email` 			= '".$_POST['email']."',
					 `haarkleur` 		= '".$_POST['haarkleur']."'
			  WHERE  `id` 				= ".$_POST['id'].";";
			  
	mysqli_query($connection, $query) or die("Query-fout: ".mysqli_error());
?> 