<?php
ini_set('display_errors', 'On');
include 'db.php'; 
?>
<form action="insert.php" method="post">
	First Name: <input name=FirstName type=text value=''> Last Name: <input  name=LastName type=text value=''><br>
	Height feet: <input name=HeightFeet type=text value=''> Height inches: <input  name=HeightInches type=text value=''><br>
	Weight (lbs): <input name=Pounds type=text value=''> Reach (inches): <input name=InchesReach type=text value=''><br>
	<input type="submit" id="save" value="Save">
</form>
