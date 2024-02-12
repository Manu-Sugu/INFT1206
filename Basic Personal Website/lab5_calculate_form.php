<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab5_calculate_form.php";
$date = "March 6, 2023";
$title = "Lab 5 Calculate Form";
$desc = "This page will create a front end to a calculation script.";
$banner = "Calculation Form";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<h3 class="lab4">Click to go back to the <a href="./lab5.php">Lab 5</a> Page.</h3>

<p>On this page you will find the front end to a calculation script.</p>

<form method="post" action="lab5_calculate.php">
    <p>Value 1: <input type="text" name="val1" size="10"/></p>
    <p>Value 2: <input type="text" name="val2" size="10"/></p>
    <p>Calculation: <br/>
    <input type="radio" name="calc" value="add" checked="checked"/> add<br/>
    <input type="radio" name="calc" value="subtract"/> subtract<br/>
    <input type="radio" name="calc" value="multiply"/> multiply<br/>
    <input type="radio" name="calc" value="divide"/> divide
    </p>
    <p><input type="submit" name="submit" value="Calculate"/></p>
</form>

<?php

include ("./footer.php");

?>