<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (xxxx xx xxxxx)
 */

$file = "lab5_useragent.php";
$date = "March 6, 2023";
$title = "Lab 5 User Agent";
$desc = "This page will show case the user agent scripts.";
$banner = "User Agent";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<h3 class="lab4">Click to go back to the <a href="./lab5.php">Lab 5</a> Page.</h3>

<p>This page will show case the user agent scripts.</p>

<?php

$agent = getenv("HTTP_USER_AGENT");
echo " You are using $agent.";

?>

<?php

include ("./footer.php");

?>