<?php 

ini_set('display_errors', 'On');
include 'db.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<style type="text/css" src=""></style>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<!DOCTYPE html>

<html>
<body>
<div>
<fieldset>
<legend><b>Name</b> </legend>
<p>First name: <input type="text" name="firstName"></p>
<p>Last name: <input type="text" name="lastName"></p>
</fieldset>


<fieldset>
<legend> <b>Height</b> </legend>
<p>Feet: <input type="text" name="feet"></p>
<p>Inches: <input type="text" name="inches"></p>
</fieldset>

<fieldset>
<legend> <b>Weight</b> </legend>
<p>Pounds: <input type="text" name="Pounds"></p>
</fieldset>

<fieldset>
<legend> <b>Reach</b> </legend>
<p>Inches: <input type="text" name="inchesReach"></p>
</fieldset>


<!--
<fieldset>
<legend> <b>Events</b></legend>
<select>
	<option value="1">Need to pass ID later, now UFC Fight Night</option>	
</select>

</fieldset>
-->
</div>



<div>
<fieldset>
<legend><b>Gym</b> </legend>
<p>Gym name: <input type="text" name="GymName"></p>
</fieldset>
</div>



<div>
<fieldset>
<legend><b>Fighting Styles</b> </legend>
<p>Style name: <input type="text" name="StyleName"></p>
</fieldset>
</div>



<div>
<fieldset>
<legend><b>Events</b> </legend>
<p>Event name: <input type="text" name="EventName"></p>
</fieldset>
</div>

<div>
<fieldset>
<legend><b>Fights</b> </legend>
<p>Fighter1: <input type="text" name="Fighter1"></p>
<p>Fighter2: <input type="text" name="Fighter2"></p>
<p>Result: <input type="text" name="ResultCode"></p>
</fieldset>
</div>

<div>
<fieldset>
<legend><b>Promotions</b> </legend>
<p>Promotion name: <input type="text" name="PromotionName"></p>
</fieldset>
</div>


<p><input type="submit" name="Submit" value="Submit"/></p>

<p><input type="submit" name="Update" value="Update"/></p>

<form method ="post" action="file:///Users/W/Desktop/frame.html">
</form>

</body>
</html>
