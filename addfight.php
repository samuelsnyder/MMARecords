<style type="text/css" media="screen">
input {
  border: none;
  background: none;
  color: #00f;
  text-decoration: underline;
  cursor: pointer;
  display: in-line;
  margin: 0px;
  padding: 0px;
}
</style>
<?php
include 'db.php'; 


$query = "SELECT FighterID, FirstName, LastName FROM Fighters ORDER BY FirstName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "Select Two Fighters:<br>";
?>
	<form method=post action=insert.php>
			<input type="hidden" name='Type' value='Fights'>
		Fighter 1 <select name="Fighter1">
<?php	
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['FighterID']. "'>" . $row['FirstName'] . " " . $row['LastName'] . "</option>";
	}
	?>
</select><br>
	Fighter 2<select name="Fighter2"> 
<?php	
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['FighterID']. "'>" . $row['FirstName'] . " " . $row['LastName'] . "</option>";
	}
	?>
</select><br>
Event<a href=addevent.php>(add event)</a><select name="EventID"> 
<?php
$query = "SELECT EventID, EventName FROM Events ORDER BY EventName ASC";

$res = $mysqli->query($query);

if ($res)

	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['EventID']. "'>" . $row['EventName']  . "</option>";
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
