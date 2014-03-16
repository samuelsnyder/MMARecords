<?php
ini_set('display_errors', 'On');
include 'db.php'; 

$query = "SELECT FighterID, FirstName, LastName FROM fighters WHERE FirstName = '" . $_POST['FirstName'] ."' OR LastName = '" . $_POST['LastName']."' ORDER BY FirstName ASC";

$res = $mysqli->query($query);

if ($res)
{
	echo "Results:<br>";
	for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
		$res->data_seek($row_no);
		$row = $res->fetch_assoc();
		echo " <form action='browse.php' method='post'><input type=hidden name=FighterID value=". $row['FighterID'] . ">";
		echo $row['FirstName'] . " " . $row['LastName'] . "<button> Browse</button><br>";
	}
}
else
{
	echo "No results found";
}
?>