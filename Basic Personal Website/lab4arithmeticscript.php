<?php
/**
 * This page represents the lab 4 arithmetic script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4arithmeticscript.php";
$date = "March 6, 2023";
$title = "Lab 4 Arithmetic Script";
$desc = "This page showcases how to use arithmetic operators in php.";
$banner = "Lab 4: Arithmetic Operators";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page showcases how to use arithmetic operators in php.</p>

<table>
    <caption>Table 5.2: Arithmetic Operators</caption>
    <tr>
        <th>Operator</th><th>Example</th><th>Action</th>
    </tr>
    <tr>
        <td>+</td><td>$b = $a + 3;</td><td>Adds values</td>
    </tr>
    <tr>
        <td>-</td><td>$b = $a - 3;</td><td>Subtracts values</td>
    </tr>
    <tr>
        <td>*</td><td>$b = $a * 3;</td><td>Multiplies values</td>
    </tr>
    <tr>
        <td>/</td><td>$b = $a / 3;</td><td>Divides values</td>
    </tr>
    <tr>
        <td>%</td><td>$b = $a % 3;</td><td>Returns the modulus, or remainder</td>
    </tr>
</table>

<?php

$a = 85;
$b = 24;
echo "<p>Original value of
\$a is $a and \$b is
$b</p>";
$c = $a + $b;
echo "<p>Added \$a and \$b and got $c</p>";
$c = $a - $b;
echo "<p>Subtracted \$b from \$a and got $c</p>";
$c = $a * $b;
echo "<p>Multiplied \$a and \$b and got $c</p>";
$c = $a / $b;
echo "<p>Divided \$a by \$b and got $c</p>";
$c = $a % $b;
echo "<p>The modulus of \$a and \$b is $c</p>";

?>

<?php

include ("./footer.php");

?>