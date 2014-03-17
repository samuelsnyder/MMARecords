<?php
ini_set('display_errors', 'On');
include 'header.php'; 
?>

<?php

//retrieve info from Fighters table
$query = "SELECT * FROM `Fighters` WHERE `FighterID` = " . $_POST['FighterID'];

$res = $mysqli->query($query);

	$res->data_seek(0);
	$row = $res->fetch_assoc();
	echo "<h1>". $row['FirstName']. " " . $row['LastName'] ."</h1>";
	echo "<h2>Measurements</h2>";
	echo "<table>
		<tr><th>Height</td><th>Reach</td><th>Weight</td></tr>
		<tr><td>" . $row['HeightFeet']."' ". $row['HeightInches'] . "''</td><td>" . $row['InchesReach'] ."''</td><td>" . $row['Pounds']."lbs</td></tr>
		</table>";
//retrieve info from FighterStyles
$query = "SELECT StyleName
	FROM Fighters
	INNER JOIN FighterStyles
	ON Fighters.FighterID=FighterStyles.FighterID
	INNER JOIN Styles
	ON FighterStyles.StyleID = Styles.StyleID
	WHERE Fighters.FighterID = " . $_POST['FighterID'];

$res = $mysqli->query($query);

echo "<h2>Styles</h2>";

if ($res){
$i = 0; //counting for commas
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		if ($i > 0){echo ", ";}
		echo $row['StyleName'];
		$i++;
	}
}

else
echo "none entered";
//retrieve info from Fights

$query = "
	SELECT Fighters2.FirstName as FirstName, Fighters2.LastName as LastName, ResultCode, EventName, EventDate, PromotionName
	FROM Fighters
	INNER JOIN Fights
	ON Fighters.FighterID=Fights.Fighter1
	INNER JOIN Events
	ON Fights.EventID = Events.EventID
	INNER JOIN Promotions
	ON Events.PromoID = Promotions.PromoID
	INNER JOIN Fighters AS Fighters2
	ON Fights.Fighter2 = Fighters2.FighterID
	WHERE Fights.Fighter1 = " . $_POST['FighterID'] ;

$res = $mysqli->query($query);

echo "<h2>Record</h2>";

?>
<table>
	<tr>
		<th>Opponent</th>
		<th>Result</th>
		<th>Event</th>
		<th>Promotion</th>
		<th>Date</th>
	</tr>

<?php

if ($res){
$i = 0; //counting for commas
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		if ($i > 0){echo ", ";}
		echo "<tr>";
		echo "<td>";
		echo $row['FirstName'] . " " . $row['FirstName'] . "</td><td>";
		if ($row['ResultCode'] == 1) {echo "Won";}
		if ($row['ResultCode'] == 2) {echo "Lost";}
		if ($row['ResultCode'] == 0) {echo "Draw";}
		echo "</td><td>";
		echo $row['EventName'];
		echo "</td><td>";
		echo $row['PromotionName'];
		echo $row['EventDate'];
		$i++;
	}
}
//second query for when fighter is Fighter2

$query = "	SELECT Fighters1.FirstName as FirstName, Fighters1.LastName as LastName, ResultCode, EventName, EventDate, PromotionName
	FROM Fighters
	INNER JOIN Fights
	ON Fighters.FighterID=Fights.Fighter2
	INNER JOIN Events
	ON Fights.EventID = Events.EventID
	INNER JOIN Promotions
	ON Events.PromoID = Promotions.PromoID
	INNER JOIN Fighters AS Fighters1
	ON Fights.Fighter1 = Fighters2.FighterID
	WHERE Fights.Fighter2 = " . $_POST['FighterID'] ;


$res = $mysqli->query($query);

if ($res){
$i = 0; //counting for commas
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		if ($i > 0){echo ", ";}
		echo "<tr>";
		echo "<td>";
		echo $row['FirstName'] . " " . $row['FirstName'] . "</td><td>";
		if ($row['ResultCode'] == 1) {echo "Won";}
		if ($row['ResultCode'] == 2) {echo "Lost";}
		if ($row['ResultCode'] == 0) {echo "Draw";}
		echo "</td><td>";
		echo $row['EventName'];
		echo "</td><td>";
		echo $row['PromotionName'];
		echo $row['EventDate'];
		$i++;
	}
}