<?php
/**
 * This page represents the lab 4 php tags page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab4phptags.php";
$date = "March 6, 2023";
$title = "Lab 4 phptags";
$desc = "This page shows how to use the 3 different php tags to represent php code.";
$banner = "Lab 4: PHP Start and End Tags";

include ("./header.php");
?>

<h3 class="lab4">Click to go back to the <a href="./lab4.php">Lab 4</a> Page.</h3>

<p>
    This page will illustrate the three (3) different ways you can embed PHP code into your web pages
</p>

<table id="lab4_tags">
    <caption>Table 4.1: Basic PHP Start and End Tags </caption>
    <tr>
        <th id="lab4_tags_methods">Method</th><th id="lab4_tags_opening">Opening Tag</th><th id="lab4_tags_closing">Closing Tag</th>
    </tr>
    <tr>
        <td class="lab4_tags">1.</td><td>&lt;?php</td><td>?&gt;</td>
    </tr>
    <tr>
        <td class="lab4_tags">2.</td><td>&lt;?</td><td>?&gt;</td>
    </tr>
    <tr>
        <td class="lab4_tags">3.</td><td>&lt;script language="php"&gt;</td><td>&lt;/script&gt;</td>
    </tr>
</table>

<h3 class="lab4"><span>Text Code Example:</span></h3>
<?php
echo "<p>This is a test using the first tag type.</p>";
?>

<h3 class="lab4">NOTICE THE SECOND TAG TYPE IS IGNORED ON THE <span>opentech</span> SERVER.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&darr;</h3>
<?
echo "<p>This is a test using the second tag type.</p>";
?>

<h3 class="lab4">NOTICE THE THIRD TAG TYPE IS NO LONGER SUPPORTED BY PHP 7 (THE VERSION RUNNING ON THE <span>opentech</span> SERVER).
<!--NOTE: it should work on your laptop though, as it should be running PHP 5.6.--><br/>&nbsp;&nbsp;&nbsp;&nbsp;&darr;</h3>
<script language="php">
echo "<p>This is a test using the third tag type.</p>";
</script>

<?php

include ("./footer.php");

?>