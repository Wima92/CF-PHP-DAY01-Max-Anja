<!DOCTYPE html>
<html>
<head>
	<title>Exercise6</title>
	<style type="text/css">
		table {
			text-align: left;

		}
		th {
			background-color: blue;
			color:  white;
			padding:  1vw;
		}
		td {
			background-color: lightsteelblue;
			color: black;
			padding:  1vw;
		}

		
	</style>
</head>
<body>
	<?php 
	$characters= array(
		"Dragon Ball" => "Goku",
		"Pokemon" => "Ash&Misty",
		"Kickers" => "Mario",
		"Sailor Moon" => "Bunny"
	); 
	echo "The main character of Dragon Ball is ". $characters["Dragon Ball"]. ".<br>";

	echo "The main characters of Pokemon are ". $characters["Pokemon"]. ".<br>";

	echo "The main character of Kickers is ". $characters["Kickers"]. ".<br>";

	echo "The main character of Sailor Moon is ". $characters["Sailor Moon"]. ".<br>";


	?>
	<?php 
	$dragonball= array(
		"Goku" => array(
			"Attack"=> "KameHameHa",
			"Form"=> "Super Saiyan",
			"Height"=> "175cm"),
		"Vegeta" => array(
			"Attack"=> "Galick Ho",
			"Form"=> "Super Saiyan",
			"Height"=> "164cm"),
		"Broly" => array(
			"Attack"=> "Planetcrusher",
			"Form"=> "Legendary Super Saiyan",
			"Height"=> "274cm")

	); 
	echo "<table> 
	<tr> 
		<th> * </th>
		<th>Goku</th>
		<th>Vegeta</th>
		<th>Broly</th>
	</tr>

	<tr>
		<th>Attack</th>
		<td>".$dragonball['Goku']['Attack']."</td>
		<td>".$dragonball['Vegeta']['Attack']."</td>
		<td>".$dragonball['Broly']['Attack']."</td>
	</tr>

	<tr>
		<th>Form</th>
		<td>".$dragonball['Goku']['Form']."</td>
		<td>".$dragonball['Vegeta']['Form']."</td>
		<td>".$dragonball['Broly']['Form']."</td>
	</tr>

	<tr>
		<th>Height</th>
		<td>".$dragonball['Goku']['Height']."</td>
		<td>".$dragonball['Vegeta']['Height']."</td>
		<td>".$dragonball['Broly']['Height']."</td>
	</tr>


	"
	 ?>

</body>
</html>