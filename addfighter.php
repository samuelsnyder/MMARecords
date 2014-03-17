<?php include 'header.php';  ?>

<h1>Fighters</h1>
<h2>Add Fighter</h2>
<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Fighters'>
	First Name: <input name=FirstName type=text value=''> Last Name: <input  name=LastName type=text value=''><br>
	Height feet: <input name=HeightFeet type=text value=''> Height inches: <input  name=HeightInches type=text value=''><br>
	Weight (lbs): <input name=Pounds type=text value=''> Reach (inches): <input name=InchesReach type=text value=''><br>
	Gym<a href=addgym.php>(add gym)</a><select name="GymID"> 
<?php
$query = "SELECT GymID, GymName FROM Gyms ORDER BY GymName ASC";

$res = $mysqli->query($query);

if ($res)

	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['GymID']. "'>" . $row['GymName']  . "</option>";
	}
	?>
</select><br>
	<input type="submit" id="save" value="Save">
</form>

<h2>Remove Fighter</h2>
<?php
$query = "SELECT FighterID, FirstName, LastName FROM Fighters ORDER BY FirstName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "<table>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>" . $row['FirstName'] . " " . $row['LastName'] . "</td><td>
			<form method=post action=delete.php><input type='hidden' name='Type' value='Fighters'>
			<input type=hidden name='FighterID' value='" .$row['FighterID']. "'><button> remove </button></form></td></tr>";
	}
	echo "</table>";
}
?>