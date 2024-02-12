<?php
/**
 * This page represents the lab 4 error script 2 page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4errorscript2.php";
$date = "March 6, 2023";
$title = "Lab 4 errorscript2";
$desc = "This page will showcase an error in php code writing for escape sign.";
$banner = "Lab 4: Escaping Your Code";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page will showcase an error in php code writing.</p>

<?php
echo "<p>I think this is really \"cool\"!</p>"; /* To make the error take out the '\' from before and after cool */
?>

<?php

include ("./footer.php");

?>