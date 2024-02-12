<?php
/**
 * This page represents the lab 4 logical script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4logicalscript.php";
$date = "March 6, 2023";
$title = "Lab 4 Logical Script";
$desc = "This page showcases how to utlize logical scripts within PHP.";
$banner = "Lab 4: Logical Operators";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page showcases how to utlize logical scripts within PHP.</p>

<?php
$degrees = "95";
$hot = "yes";
if (($degrees > 100) || ($hot == "yes")) {
    echo "<p>TEST 1: It's <strong>really</strong> hot!</p>";
} else {
    echo "<p>TEST 1: It's bearable.</p>";
}

if (($degrees > 100) && ($hot == "yes")) {
    echo "<p>TEST 2: It's <strong>really</strong> hot!</p>";
} else {
    echo "<p> TEST 2: It's bearable.</p>";
}

?>

<?php

include ("./footer.php");

?>