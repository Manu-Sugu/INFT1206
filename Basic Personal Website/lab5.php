<?php
/**
 * This page represents the lab 5 page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab5.php";
$date = "March 6, 2023";
$title = "Lab 5";
$desc = "XXXXXX";
$banner = "Lab 5: Basic PHP Scripting";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<p>This page was created as an index for the other pages that are required for this lab. On those pages you will find different
    scripting ways you could utlize in php. </p>

<ul>
    <li><a href="lab5_calculate_form.php">lab5_calculate_form.php</a></li>
    <li><a href="lab5_calculate.php">lab5_calculate.php</a></li>
    <li><a href="lab5_phpinfo.php">lab5_phpinfo.php</a></li>
    <li><a href="lab5_remoteaddress.php">lab5_remoteaddress.php </a></li>
    <li><a href="lab5_useragent.php">lab5_useragent.php</a></li>
    <li><a href="lab5_simple_temp_convert.php">lab5_simple_temp_convert.php</a></li>
    <li><a href="lab5_function_temp_convert.php">lab5_function_temp_convert.php</a></li>
</ul>

<?php

include ("./footer.php");

?>