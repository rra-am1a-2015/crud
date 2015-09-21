<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toets-1";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("fout geen contact met de mysql-server");
	
	$query = "INSERT INTO `auto`(`id`,
								 `merk`,
								 `type`,
								 `kleur`,
								 `bouwjaar`,
								 `nummerbord`)
					VALUES		(NULL,
								 '".$_POST["merk"]."',
								 '".$_POST["type"]."',
								 '".$_POST["kleur"]."',
								 '".$_POST["bouwjaar"]."',
								 '".$_POST["nummerbord"]."')";
								 
	mysqli_query($conn, $query);
	
	mysqli_close($conn);
	echo "Gegevens zijn succesvol opgeslagen";
	header("refresh:3; url=index.html");
?>