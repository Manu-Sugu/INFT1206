<?php
/**
 * This page represents the lab 4 assign script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4assignscript.php";
$date = "March 6, 2023";
$title = "Lab 4 Assign Script";
$desc = "This page teaches you about assignment operators.";
$banner = "Lab 4: Assignment Operators";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page teaches you about assignment operators.</p>

<table>
    <caption>Table 5.1: Assignment Operators</caption>
    <tr>
        <th>Operator</th><th>Example</th><th>Action</th>
    </tr>
    <tr>
        <td>+=</td><td>$a +=3;</td><td>Changes the value of a variable to the current value plus the value on the right side.</td>
    </tr>
    <tr>
        <td>-=</td><td>$a -= 3;</td><td>Changes the value of a variable to the current value minus the value on the right side.</td>
    </tr>
    <tr>
        <td>.=</td><td>$a .= "string";</td><td>Concatenates (adds on to) the value on the right side with the current value.</td>
    </tr>
</table>

<?php
$origVar = 100;
echo "<p>Original value is $origVar</p>";
$origVar += 25;
echo "<p>Added a value, now it's $origVar</p>";
$origVar -= 12;
echo "<p>Subtracted a value, now it's $origVar</p>";
$origVar .= " chickens";
echo "<p>Final answer: $origVar</p>";
?>

<?php

include ("./footer.php");

?>