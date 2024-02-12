<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (xxxx xx xxxxx)
 */

$file = "lab5_phpinfo.php";
$date = "March 6, 2023";
$title = "Lab 5 PHP Info";
$desc = "Exploring the phpinfo scripts.";
$banner = "PHP Info";

include ("./header.php");
?>

<h1 class="lab5"><?php echo $banner; ?></h1>

<h3 class="lab4">Click to go back to the <a href="./lab5.php">Lab 5</a> Page.</h3>

<p>This page will showcase the PHP Info scripts.</p>

<?php phpinfo(); ?>

<?php

include ("./footer.php");

?>