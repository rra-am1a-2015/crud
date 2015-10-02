<?php
	//echo $_GET["id"];
	include("db_connect.php");
	//include_once("db_connect.php");
	//require("db_connect.php");
	//require_once("db_connect.php");
	
	$query = "SELECT * FROM `personalia` WHERE `id` = ".$_GET["id"];
	
	$result = mysqli_query($connection, $query);
	
	$record = mysqli_fetch_assoc($result);
	
	//var_dump($record);
?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<h3>U kunt de onderstaande gegevens wijzigen.</h3>
		<form action="do_update_personalia.php" method="post">
			<input type="hidden" name="id" value="<?php echo $record["id"]; ?>">
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
					<td>						   
						<select name="haarkleur">
							<option value="default">-- geef uw haarkleur --</option>
							<option value="blond">blond</option>
							<option value="bruin">bruin</option>
							<option value="zwart">zwart</option>
							<option value="grijs">grijs</option>
							<option value="rood">rood</option>
						</select>
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