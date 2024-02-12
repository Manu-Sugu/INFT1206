<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab5_calculate.php";
$date = "March 6, 2023";
$title = "Lab 5 Calculate Result";
$desc = "This page recieves data from the calculate form and does calculations with it then posts them.";
$banner = "Calculate Result";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<h3 class="lab4">Click to go back to the <a href="./lab5.php">Lab 5</a> Page.</h3>

<p>This page recieves data from the calculate form and does calculations with it then posts them.</p>

<?php

if (($_POST["val1"] == "") || ($_POST["val2"] == "") || ($_POST["calc"] =="")) {
    header("Location: lab5_calculate_form.html");
    exit;
}
if ($_POST["calc"] == "add") {
    $result = $_POST["val1"] + $_POST["val2"];
} else if ($_POST["calc"] == "subtract") {
    $result = $_POST["val1"] - $_POST["val2"];
} else if ($_POST["calc"] == "multiply") {
    $result = $_POST["val1"] * $_POST["val2"];
} else if ($_POST["calc"] == "divide") {
    $result = $_POST["val1"] / $_POST["val2"];
}

?>

<p>The result of the calculation is: <?php echo "$result"; ?></p>

<?php

include ("./footer.php");

?>