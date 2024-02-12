<?php
/**
 * This page represents the lab 4 constants 2 page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4constants2.php";
$date = "March 6, 2023";
$title = "Lab 4 Constants 2";
$desc = "This is the second part to how to utlize constants in php.";
$banner = "Lab 4: Using Constants 2";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This is the second part to how to utlize constants in php.</p>

<?php
echo "<br />This file is ".__FILE__;
echo "<br />This is line number ".__LINE__;
echo "<br />I am using ".PHP_VERSION;
echo "<br />This test is being run on ".PHP_OS;
?>

<?php

include ("./footer.php");

?>