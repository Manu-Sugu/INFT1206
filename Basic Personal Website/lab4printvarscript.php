<?php
/**
 * This page represents the lab lab 4 var script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4varscript.php";
$date = "March 6, 2023";
$title = "Lab 4 varscript";
$desc = "This page will showcase how to utlize variables and their value types within php.";
$banner = "Lab 4: PHP Variable and Value Types";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page will showcase how to utlize variables and their value types within php.</p>

<?php
$intVar =
"9554215464";
$floatVar = "1542.2232235";
$stringVar = "This is a string.";
echo "<p>integer: $intVar</p>";
echo "<p>float: $floatVar</p>";
echo "<p>string: $stringVar</p>";
?>

<?php

include ("./footer.php");

?>