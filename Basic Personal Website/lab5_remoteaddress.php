<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab5_remoteaddress.php";
$date = "March 6, 2023";
$title = "Lab 5 Remote Address";
$desc = "This page will showcase the remote address scripts.";
$banner = "Remote Address";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<h3 class="lab4">Click to go back to the <a href="./lab5.php">Lab 5</a> Page.</h3>

<p>This page will showcase the remote address scripts. It will get your ip address then post it.</p>

<?php

$address = getenv("REMOTE_ADDR");
echo "Your IP address is $address.";

?>

<?php

include ("./footer.php");

?>