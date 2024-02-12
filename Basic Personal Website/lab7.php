<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 30 2023)
 */

$file = "lab7.php";
$date = "March 23, 2023";
$title = "Lab 7";
$desc = "This is the index page for the Lab 7.";
$banner = "Lab 7: Database Intro";

include ("./header.php");
?>

<p>This page was created as an index page for the different pages within Lab 7: Database Intro!</p>

<ul>
    <li><a href="./lab7_bond_info.php">Lab7_bond_info.php</a></li>
    <li><a href="./lab7_auto_info.php">Lab7_auto_info.php</a></li>
    <li><a href="./sql/lab7_bond_movies.sql">Lab7_bondmovies.sql</a></li>
    <li><a href="./sql/lab7_auto_records.sql">lab7_auto_records.sql</a></li>
</ul>

<?php

include ("./footer.php");

?>