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

<table>
    <tr>
        <td>Fighters</td>
    </tr>
    
    <tr>
        <td>Name</td>
        <td>Height</td>
        <td>Weight</td>
        <td>Reach</td>    
    </tr>
    
    <tr>
    	
        <td>Ronda Rousey</td>
        <td>5'7"</td>
        <td>135 lbs</td>
        <td>66 inches</td>
        
    </tr>
</table>

<a href="addfighter.php"> Add Fighter </a><br>
<a href="addfight.php"> Add Fight Result </a><br>
<a href="addevent.php"> Add MMA Event </a><br>
<a href="addpromotion.php"> Add MMA Promotion </a><br>
<a href="add.php"> Add MMA Promotion </a><br>

</body>
</html>

<!--This is a comment. Comments are not displayed in the browser
<form action="somescript.php" >
    <fieldset>
        <legend>Name</legend>
        <p>First name <input name="firstName"></p>
        <p>Last name <input name="lastName"></p>
   
    <fieldset>
        <legend>Address</legend>
        <p>Address <textarea name="address"></textarea></p>
        <p>Postal code <input name="postcode"></p>
    </fieldset>

http://www.ufc.com/fighter/Weight_Class/Women_Bantamweight

http://en.wikipedia.org/wiki/List_of_female_mixed_martial_artists

gym
style
event 
promotion

-->
