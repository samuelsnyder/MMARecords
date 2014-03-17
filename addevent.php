
<?php
include 'header.php'; 


?>
<h1>Events</h1>
<h2>Add Event</h2>
<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Events'>
	Event Name: <input name=EventName type=text value=''> Date: <input  name=EventDate type=text value='YYYY-MM-DD'><br>
	Promotion<a href=addpromo.php>(add promotion)</a><select name="PromoID"> 
<?php
$query = "SELECT PromoID, PromotionName FROM Promotions ORDER BY PromotionName ASC";

$res = $mysqli->query($query);

if ($res)

	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<option value='" .$row['PromoID']. "'>" . $row['PromotionName']  . "</option>";
	}
?>
</select>
	<input type="submit" id="save" value="Save">
</form>

<h2>Remove Event</h2>
<?php
$query = "SELECT EventID, EventName FROM Events ORDER BY EventName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "<table>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>" . $row['EventName'] . "<form method=post action=delete.php><input type='hidden' name='Type' value='Events'>
			<input type=hidden name='EventID' value='" . $row['EventID']. "'>
			</td><td><button> remove </button></form></td></tr>";
	}
	echo "</table>";
}
?>