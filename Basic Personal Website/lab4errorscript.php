<?php
/**
 * This page represents the lab 4 error script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4errorscript.php";
$date = "March 6, 2023";
$title = "Lab 4 errorscript";
$desc = "This page will showcase an error in php code writing for semicolons.";
$banner = "Lab 4: The Importance of the Instruction Terminator";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page will showcase an error in php code writing for semicolons.</p>

<?php
echo "<p>I am trying to produce an error</p>"; /* remove this semicolon to make an error */
echo "<p>Was I successful?</p>";
?>

<?php

include ("./footer.php");

?>