<?php
ini_set('display_errors', 'On');
include 'db.php'; 

$query = "SELECT FighterID, FirstName, LastName FROM fighters WHERE FighterID = '" . $_POST['FighterID'] ."'" ;

$res = $mysqli->query($query);

if ($res)
{
	echo  "Fighter info goes here";
}
else
{
	echo "No results found";
}
?>