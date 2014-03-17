<?php include 'header.php';  ?>

<h1>Gyms</h1>
<h2>Add Gym</h2>
<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Gyms'>
	Gym Name: <input name=GymName type=text value=''> 
	<input type="submit" id="save" value="Save">
</form>

<h2>Remove Gym</h2>
<?php
$query = "SELECT GymID, GymName FROM Gyms ORDER BY GymName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "<table>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>" . $row['GymName'] . "<form method=post action=delete.php><input type='hidden' name='Type' value='Gyms'>
			<input type=hidden name='GymID' value='" . $row['GymID']. "'>
			</td><td><button> remove </button></form></td></tr>";
	}
	echo "</table>";
}
?>