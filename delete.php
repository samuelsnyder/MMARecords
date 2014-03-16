<?php include 'header.php';  ?>


<?php



$i = 0;
$query = '';
//get attribute names
foreach ($_POST as $name => $val)
{
	if ($i == 0)
	{
		$query = "DELETE  FROM `" . $val . "` WHERE ";
	}
	if ($i >1){
		$query .= "AND ";
	}
	if ($i > 0){
     $query .= $name . " = '"  . ($val) . "'";
 	}
     $i++;
}

if (!$mysqli->query($query)) {
   echo "Data insertion failed.
   <br>Make sure no other entries (any fights, events, etc) depend on this entry.
   <br>Query: ". $query . "<br>Error: (" . $mysqli->errno . ") " . $mysqli->error;
}

else
{
	echo "Data removed";
}

?>
