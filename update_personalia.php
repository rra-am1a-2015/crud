<?php
	//echo $_GET["id"];
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
			<table>
				<tr>
					<td>voornaam:</td>
					<td>
						<input type="text"
							   name="voornaam"
							   value="<?php echo $record["voornaam"]; ?>">
					</td>
				</tr>
				<tr>
					<td>tussenvoegsel:</td>
					<td><input type="text"
							   name="tussenvoegsel"
							   value="<?php echo $record["tussenvoegsel"] ?>">
					</td>
				</tr>
				<tr>
					<td>achternaam:</td>
					<td><input type="text"
							   name="achternaam"
							   value="<?php echo $record["achternaam"] ?>">
					</td>
				</tr>
				<tr>
					<td>e-mail:</td>
					<td><input type="email"
							   name="email"
							   value="<?php echo $record["email"] ?>">
					</td>
				</tr>
				<tr>
					<td>haarkleur:</td>
					<td><input type="text"
							   name="haarkleur"
							   value="<?php echo $record["haarkleur"] ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"
							   name="submit"
							   value="wijzig gegevens">
					</td>
				</tr>
			
			 
			
		</form>
	</body>
</html>