
<?php
ini_set('display_errors', 'On'); 
/*Database info */
$dbhost = 'oniddb.cws.oregonstate.edu'; 
$dbname = '-db'; 
$dbuser = '-db'; 
$dbpass = ''; 
 
  
$mysql_handle= mysql_connect($dbhost, $dbuser, $dbpass) 
or die("Error connecting to database server"); 
  
mysql_select_db($dbname, $mysql_handle) 
or die("Error selecting database: $dbname"); 



$sql=$mysqli->prepare"INSERT INTO Promotions (PromotionName)
VALUES
('$_POST[PromotionName]')";

if (!mysqli_query($mysql_handle,$sql))
  {
  die('Error: ' . mysqli_error($mysql_handle));
  }
echo "1 record added";
?>