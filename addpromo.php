
<?php
include 'db.php'; 

?>

<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Promotions'>
	Promotion Name: <input name=PromotionName type=text value=''>
	<input type="submit" id="save" value="Save">
</form>