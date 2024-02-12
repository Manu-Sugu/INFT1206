<?php
/**
 * This page represents the lab 4 first script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4firstscript.php";
$date = "March 6, 2023";
$title = "Lab 4 firstscript";
$desc = "This page showcases how html and php can coexist on the same page.";
$banner = "Lab 4: Code Cohabitation";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>
    This page will show how php code and html code can coexist on the same file.
</p>

<?php
echo "<p><em>Hello World! I'm using PHP!</em></p>";
?>

<?php

include ("./footer.php");

?>