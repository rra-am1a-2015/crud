<?php
	//var_dump($_POST);
	
	include_once("db_connect.php");
	
	$query = "UPDATE `personalia` 
			  SET 	 `voornaam` 		= '".$_POST['voornaam']."',
					 `tussenvoegsel` 	= '".$_POST['tussenvoegsel']."',
					 `achternaam` 		= '".$_POST['achternaam']."',
					 `email` 			= '".$_POST['email']."',
					 `haarkleur` 		= '".$_POST['haarkleur']."',
					 `geboortedatum`	= '".$_POST['geboortedatum']."'
			  WHERE  `id` 				= ".$_POST['id'].";";
			  
	mysqli_query($connection, $query) or die("Query-fout: ".mysqli_error());
	
	echo "U wijzigingen zijn doorgevoerd. U wordt doorgestuurd naar de overzichtstabel.";
	header("refresh: 2; url=read_personalia.php");
?> 