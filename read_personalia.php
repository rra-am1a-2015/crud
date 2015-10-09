<?php
	require("db_connect.php");
	
	$query = "SELECT * FROM `personalia`";
	
	// Sla wat je terugkrijgt van de functie mysqli_query op in de variabele $result.
	// SELECT-query's geven altijd een resultaat terug.
	$result = mysqli_query($connection, $query);
		
	// Sluit de verbinding met de server
	mysqli_close($connection);	
?>

<!DOCTYPE html>
<style>
html
{
	font-family:Verdana;
	font-size:12px;
}
table, th, td
{
	border:1px solid orange;
	padding:17px;
	border-collapse:collapse;
}
th
{
	background-color:RGB(200, 200, 200);
	color:white;
	//border-radius:40px;
}
table, td
{
	//border-radius:40px;
	//-moz-border-radius:20px;
	background-color:orange;
}
td
{
	background-color:white;
}
</style>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<h3>Gegevens opgevraagd uit de tabel personalia</h3>
		<table>
			<caption>Personalia Tabel</caption>
			<tr>
				<th>id</th>
				<th>voornaam</th>
				<th>tussenvoegsel</th>
				<th>achternaam</th>
				<th>email</th>
				<th>haarkleur</th>
				<th>geboortedatum</th>
				<th></th>
				<th></th>
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
						<td>".date("d - m - Y",strtotime($row["geboortedatum"]))."</td>
						<td>
							<a href='update_personalia.php?id=".$row["id"]."'>
								<img src='icons/edit.png' alt='edit icon'>
							</a>
						</td>
						<td>
							<a href='drop_record_personalia.php?id=".$row["id"]."'>
								<img src='icons/drop.png' alt='drop icon'>
							</a>
						</td>
					  </tr>";
			}		
		?>
		</table>
		<br>
		<a href="index.html">terug naar index</a>
	</body>
</html>