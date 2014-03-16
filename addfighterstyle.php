<?php include 'header.php';  ?>

<?php


$query = "SELECT FighterID, FirstName, LastName FROM Fighters ORDER BY FirstName ASC";

$res = $mysqli->query($query);

if ($res)
{
?>
	<form method=post action=insert.php>
			<input type="hidden" name='Type' value='FighterStyles'>
		Fighter<select name="FighterID">
<?php	
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['FighterID']. "'>" . $row['FirstName'] . " " . $row['LastName'] . "</option>";
	}
	?>
</select><br>
Style<a href=addevent.php>(add style)</a><select name="StyleID"> 
<?php
$query = "SELECT StyleID, StyleName FROM Styles ORDER BY StyleName ASC";

$res = $mysqli->query($query);

if ($res)

	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['StyleID']. "'>" . $row['StyleName']  . "</option>";
	}
	?>
</select><br>
	<input type="submit" id="save" value="Save">
</form>

<?php
}
else
{
	echo "No results found";
}
?>
