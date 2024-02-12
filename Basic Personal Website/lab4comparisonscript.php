<?php
/**
 * This page represents the lab 4 comparison script page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4comparisonscript.php";
$date = "March 6, 2023";
$title = "Lab 4 Comparison Script";
$desc = "This page showcases how to utlize comparison operators within php.";
$banner = "Lab 4: Comparison Operators";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>This page showcases how to utlize comparison operators within php.</p>

<table>
    <caption>Table 5.3: Comparison Operators</caption>
    <tr>
        <th>Operator</th><th>Definition</th>
    </tr>
    <tr>
        <td>==</td><td>Equal to</td>
    </tr>
    <tr>
        <td>!=</td><td>Not equal to</td>
    </tr>
    <tr>
        <td>&gt;</td><td>Greater than</td>
    </tr>
    <tr>
        <td>&lt;</td><td>Less than</td>
    </tr>
    <tr>
        <td>&gt;=</td><td>Greater than equal to</td>
    </tr>
    <tr>
        <td>&lt;=</td><td>Less than equal to</td>
    </tr>
</table>

<?php

$a = 21;
$b = 15;
echo "<p>Original value of \$a is $a and \$b is $b</p>";
if ($a == $b) {
    echo "<p>TEST 1: \$a equals \$b</p>";
} else {
    echo "<p>TEST 1: \$a is not equal to \$b</p>";
}

if ($a != $b) {
    echo "<p>TEST 2: \$a is not equal to \$b</p>";
} else {
    echo "<p>TEST 2: \$a is equal to \$b</p>";
}

if ($a > $b) {
    echo "<p>TEST 3: \$a is greater than \$b</p>";
} else {
    echo "<p>TEST 3: \$a is not greater than \$b</p>";
}

if ($a < $b) {
    echo "<p>TEST 4: \$a is less than \$b</p>";
} else {
    echo "<p>TEST 4: \$a is not less than \$b</p>";
}

if ($a >= $b) {
    echo "<p>TEST 5: \$a is greater than or equal to \$b</p>";
} else {
    echo "<p>TEST 5: \$a is not greater than or equal to \$b</p>";
}

if ($a <= $b) {
    echo "<p>TEST 6: \$a is less than or equal to \$b</p>";
} else {
    echo "<p>TEST 6: \$a is not less than or equal to \$b</p>";
}

?>

<?php

include ("./footer.php");

?>