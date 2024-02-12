<?php
/**
 * This page represents the lab 4 comments page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4comments.php";
$date = "March 6, 2023";
$title = "Lab 4 comments";
$desc = "This page showcases how to comment your code on php.";
$banner = "Lab 4: Commenting Your Code";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page showcases how to write comments in php.</p>

<?php
// This is a simple PHP comment.
/* This is a C-style, multiline comment. You can make this as
long as you'd like. */
# Used to shells? Use this kind of comment.
?>

<?php

include ("./footer.php");

?>