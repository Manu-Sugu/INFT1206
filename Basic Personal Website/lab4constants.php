<?php
/**
 * This page represents the lab 4 constants page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4constants.php";
$date = "March 6, 2023";
$title = "Lab 4 Constants";
$desc = "This page showcases how to utlize constants within php.";
$banner = "Lab 4: Using Constants";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page showcases how to utlize constants within php.</p>

<?php
define("MYCONSTANT", "This is a test of defining constants.");
echo MYCONSTANT;
?>

<?php

include ("./footer.php");

?>