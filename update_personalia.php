<?php
	echo $_GET["id"];
	include("db_connect.php");
	//include_once("db_connect.php");
	//require("db_connect.php");
	//require_once("db_connect.php");
	
	$query = "SELECT * FROM `personalia` WHERE `id` = ".$_GET["id"];
	
	$result = mysqli_query($connection, $query);
	
	$record = mysqli_fetch_assoc($result);
	
	var_dump($record);
?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="update_personalia.php" method="post">
			voornaam: <input type="text"
							 name="voornaam"
							 value="<?php echo $record["voornaam"]; ?>">
		</form>
	</body>
</html>