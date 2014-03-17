<?php include 'header.php' ?>
<?php
$query = "SELECT FighterID, FirstName, LastName FROM Fighters ORDER BY FirstName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "<h1>Fighters</h1>";
	echo "<table>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>	<form method=post action=fighter.php><input type='hidden' name='Type' value='Fighters'>
			<input type=hidden name='FighterID' value='" .$row['FighterID']. "'>" . $row['FirstName'] . " " . $row['LastName'] . "
			</td><td><button> browse </button></form></td><td></tr>";
	}
	echo "</table>";
}
	?>