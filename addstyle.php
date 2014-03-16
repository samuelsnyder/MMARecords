
<?php
include 'header.php'; 

?>

<form action="insert.php" method="post">
	<input type="hidden" name='Type' value='Styles'>
	Style Name: <input name=StyleName type=text value=''>
	<input type="submit" id="save" value="Save">
</form>