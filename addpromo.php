
<?php
include 'header.php'; 

?>
<h1>Promotions</h1>
<h2>Add Promotion</h2>
<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Promotions'>
	Promotion Name: <input name=PromotionName type=text value=''>
	<input type="submit" id="save" value="Save">
</form>

<h2>Remove Promotion</h2>
<?php
$query = "SELECT PromoID, PromotionName FROM Promotions ORDER BY PromotionName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "<table>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>" . $row['PromotionName'] . "<form method=post action=delete.php><input type='hidden' name='Type' value='Promotions'>
			<input type=hidden name='PromoID' value='" . $row['PromoID']. "'>
			</td><td><button> remove </button></form></td></tr>";
	}
	echo "</table>";
}
?>