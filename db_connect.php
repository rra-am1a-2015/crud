<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "am1a_inlogregistratie";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname) or die("Fout geen server-verbinding".mysqli_error($connection));
?>