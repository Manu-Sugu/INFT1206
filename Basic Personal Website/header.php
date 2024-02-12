<?php
/**
 * This page represents the header page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */
?>
<?php
	ob_start();
	require("./includes/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/inft1206.css" /> 
	<!--
	Author: Manu Sugunakumar
	Filename: <?php echo $file . "\n"; ?>
	Date: <?php echo $date . "\n"; ?>
	Description: <?php echo $desc . "\n"; ?>
	-->
	<title>INFT1206 - <?php echo $title; ?></title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<body>
<div id="container">
	<div id="header">
		<img src="./images/Omen.png" alt="YOUR SITE LOGO ALT" />
		<h1>
        <?php echo $banner; ?>
		</h1>
	</div>
	<div id="sites">
		<ul>
			<li><a href="https://opentech.durhamcollege.org/pufferd/inft1206/index.php">INFT1206</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>			
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>
			
		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">
			<h3>
				Local Navigation Bar
			</h3>
			<ul>
				<li><a href="./index.php">INFT1206 Home Page</a></li>
				<li><a href="./lab1.php">Lab 1: Basic XHTML pages</a></li>
				<li><a href="./lab2.php">Lab 2: Working with HTML Tables</a></li>
				<li><a href="./lab3.php">Lab 3: Formatting and Layout with Styles</a></li>
				<li><a href="./test1.php">Term Test 1</a></li>
				<li><a href="./lab4.php">Lab 4: PHP Chapter Files from textbook</a></li>
				<li><a href="./lab5.php">Lab 5: Basic PHP Scripting</a></li>
				<li><a href="./lab6.php">Lab 6: Self-referring Forms w/ Data Validation</a></li>
				<li><a href="./termtest2.php">Term Test 2</a></li>
				<li><a href="./lab7.php">Lab 7: Database Intro</a></li>
				<li><a href="./lab9.php">Lab 9: Database/PHP Lab - User Login</a></li>
				<li><a href="./lab10.php">Lab 10: Database/PHP Lab - User Registration</a></li>
				<li><a href="./lab11.php">Bonus Lab: Advanced PHP Application - Math Quiz</a></li>
			</ul>
		</div>
		<div id="content">

		<!-- start of main page content. --> 