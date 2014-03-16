<?php include 'header.php';  ?>


<?php


foreach ($_POST as $key => $value){
  echo "{$key} = {$value}\r\n";
  echo "hola";
}

$i = 0;
$query = '';
//get attribute names
foreach ($_POST as $name => $val)
{
	if ($i == 0)
	{
		$query = "INSERT INTO " . $val . "(";
	}
	if ($i >1){
		$query .= ", ";
	}
	if ($i > 0){
     $query .= "`"  . htmlspecialchars($name) . "`";
 	}
     $i++;
}
$query .= ")";
$query .= "  VALUES (";

//get attribute values
$i = 0;
foreach ($_POST as $name => $val)
{
	if ($i >1){
		$query .= ", ";
	}
	if ($i > 0){
     $query .= "'" .  htmlspecialchars($val) . "'";
	}
     $i++;
}

$query .= ")";


if (!$mysqli->query($query)) {
   echo "Data insertion failed<br>Query: ". $query . "<br>Error: (" . $mysqli->errno . ") " . $mysqli->error;
}

else
{
	echo "Data added to database";
}

?>
