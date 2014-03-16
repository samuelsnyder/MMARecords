<?php
ini_set('display_errors', 'On');
include 'db.php'; 

if (!$_POST["FirstName"] || !$_POST["LastName"]) {
	die("first name and last name required");
}

$query ="INSERT INTO " . $_POST['Type'] . "(";
$i = 0;

//get attribute names
foreach ($_POST as $name => $val)
{
	if ($i >0){
		$query .= ", ";
	}
     $query .= "'"  . htmlspecialchars($name) . "'";
}
$query = ")";
$query .= "  VALUES ("

//get attribute values\
$i = 0;
foreach ($_POST as $name => $val)
{
	if ($i >0){
		$query .= ", ";
	}
     $query .= "'" .  htmlspecialchars($val) . "'";
}

$query .= ")";

if (!$mysqli->query($query)) {
   echo "Data insertion failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

else
{
	echo "Data added to database";
}

?>
