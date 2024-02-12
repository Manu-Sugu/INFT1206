<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab5_simple_temp_convert.php";
$date = "March 6, 2023";
$title = "Lab 5 Simple Temp Convert";
$desc = "This page will show a Temperature Conversion Looping Example.";
$banner = "Temperature Conversion Looping Example";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<h3 class="lab4">Click to go back to the <a href="./lab5.php">Lab 5</a> Page.</h3>

<p>
    This page will create a temperature conversion table using a for loop that starts at -40&deg; and goes to 100&deg; with 10&deg;
    increments.
</p>

<table>
    <tr>
        <th>Celsius</th><th>Fahrenheit</th>
    </tr>
    <?php
        for($i=-40; $i<=100; $i+=10)
        {
            $f = 9.0/5.0*$i + 32;
            echo "<tr><td>$i&deg;</td><td>$f&deg;</td></tr>";
        }
    ?>
</table>

<?php

include ("./footer.php");

?>