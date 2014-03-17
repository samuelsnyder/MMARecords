
<?php
include 'header.php'; 

?>
<h1>Styles</h1>
<h2>Add Style</h2>
<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Styles'>
	Style Name: <input name=StyleName type=text value=''>
	<input type="submit" id="save" value="Save">
</form>

<h2>Remove Style</h2>
<?php
$query = "SELECT StyleID, StyleName FROM Styles ORDER BY StyleName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "<table>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo "<tr><td>" . $row['StyleName'] . "<form method=post action=delete.php><input type='hidden' name='Type' value='Styles'>
			<input type=hidden name='StyleID' value='" . $row['StyleID']. "'>
			</td><td><button> remove </button></form></td></tr>";
	}
	echo "</table>";
}
?>