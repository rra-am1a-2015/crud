<?php
	echo "hallo, jouw id is: ".$_GET["id"];
	
	require_once("db_connect.php");
	
	$query = "DELETE FROM `personalia`
			  WHERE 	  `id` = '".$_GET['i']."'";
			  
	$result = mysqli_query($connection, $query);
	
	var_dump($result);
	
	echo "Het record is succesvol verwijderd";
	header("refresh: 200; url=read_personalia.php");
	
?>