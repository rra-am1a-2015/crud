<?php
	echo "Hallo: ";
	var_dump($_POST);
	
	include_once("db_connect.php");
	
	$query = "UPDATE `personalia` 
			  SET 	 `voornaam` 		= '".$_POST['voornaam']."',
					 `tussenvoegsel` 	= '".$_POST['tussenvoegsel']."',
					 `achternaam` 		= 'Rutein',
					 `email` 			= 'rutein@gmail.com',
					 `haarkleur` 		= 'geel'
			  WHERE  `id` 				= 1;";
			  
	mysqli_query($connection, $query) or die("Query-fout: ".mysqli_error());
?>