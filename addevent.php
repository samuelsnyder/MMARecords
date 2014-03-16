
<?php
include 'header.php'; 

?>

<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Events'>
	Event Name: <input name=EventName type=text value=''> Date: <input  name=EventDate type=text value=''><br>
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