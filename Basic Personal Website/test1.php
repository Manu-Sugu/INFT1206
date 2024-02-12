<?php
/**
 * This page represents Manu's Term Test 1page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (xxxx xx xxxxx)
 */

$file = "test1.php";
$date = "February 22, 2023";
$title = "Manu's Term Test 1";
$desc = "This is a webpage for the first term test for this course.";
$banner = "Manu's Term Test 1";

include ("./header.php");
?>

<p>This web page will implement several topics that have been covered in the Web Development -
    Fundamentals (<a href="https://opentech.durhamcollege.org/pufferd/inft1206/">INFT1206</a>) course
    this semster. This page implements the XHTML 1.0 Transitional standard (see validation image below),
    is laid out using HTML tables, and is styled using a Cascading Style Sheet. </p>
<table border="1px" align="center" bgcolor="lightgray">
    <tr>
        <th colspan="8">
            <h3 class="test1header">Canadian Network's Thursday Primetime TV Guide</h3>
        </th>
    </tr>
    <tr>
        <th width="20px">Network</th>
        <th>Channel(s)</th>
        <th width="150px">7:00pm</th>
        <th width="150px">7:30pm</th>
        <th width="150px">8:00pm</th>
        <th width="150px">8:30pm</th>
        <th width="150px">9:00pm</th>
        <th width="150px">9:30pm</th>
    </tr>
    <tr>
        <td bgcolor="navy" rowspan="2" align="center"><img width="85px" src="./images/ctv.png" alt="CTV" /></td>
        <td align="center" height="45px">201</td>
        <td>etalk</td>
        <td>The Big Bang Theory</td>
        <td>Young Sheldon</td>
        <td>B Positive</td>
        <td colspan="2">Law &amp; Order</td>
    </tr>
    <tr>
        <td align="center" height="45px">202</td>
        <td>The Big Bang Theory</td>
        <td>etalk</td>
        <td colspan="2">Pandora</td>
        <td>The Goldbergs</td>
        <td>Seinfeild</td>
    </tr>
    <tr>
        <td bgcolor="navy"><img width="85px" src="./images/global.png" alt="GLOBAL" /></td>
        <td align="center" height="45px">203</td>
        <td>Entertainment Tonight</td>
        <td>ET Canada</td>
        <td>Call Your Mother</td>
        <td>Superstore</td>
        <td>The Neighborhood</td>
        <td>The Unicorn</td>
    </tr>
    <tr>
        <td bgcolor="navy"><img width="85px" src="./images/cbc.png" alt="CBC" /></td>
        <td align="center" height="45px">205</td>
        <td>Coronation Street</td>
        <td>Family Feud Canada</td>
        <td colspan="2">Burden of Truth</td>
        <td colspan="2">The Fifth Estate</td>
    </tr>
</table>
<span class="test1span">Note: the channel guide above is loosely based on <a href="https://tv.bell.ca/guide"><b><u>Bell
                Fibe's TV Guide</u></b></a></span>

<?php

include ("./footer.php");

?>