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
		
	// Sluit de verbinding met de server
	mysqli_close($connection);	
?>

<!DOCTYPE html>
<style>
table, th, td
{
	border:1px solid orange;
	padding:7px;
	border-collapse:collapse;
}
</style>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<th>id</th>
				<th>voornaam</th>
				<th>tussenvoegsel</th>
				<th>achternaam</th>
				<th>email</th>
				<th>haarkleur</th>
			</tr>
		<?php
			while( $row = mysqli_fetch_assoc($result) )
			{
				echo "<tr>
						<td>".$row["id"]."</td>
						<td>".$row["voornaam"]."</td>
						<td>".$row["tussenvoegsel"]."</td>
						<td>".$row["achternaam"]."</td>
						<td>".$row["email"]."</td>
						<td>".$row["haarkleur"]."</td>
					  </tr>";
			}		
		?>
		</table>
	</body>
</html>