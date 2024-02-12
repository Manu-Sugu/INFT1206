<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (xxxx xx xxxxx)
 */

$file = "lab2.php";
$date = "January 26, 2023";
$title = "Lab2";
$desc = "This is the Homepage for lab2: Working with html table";
$banner = "Lab 2: Working with HTML Tables";

include ("./header.php");
?>

<p>This page was created for lab2: Working with HTML Tables. On this page you will find three tables
    each demonstrating various table tags. The first table will show all the tags used and a short
    description explaining them. The next table will show a demonstration of those tags in use. The
    final table will showcase my timetable using the new table tag.</p>
<hr />
<table id="tag_table">
    <caption>HTML Table Tags</caption>
    <tr>
        <th>Tag</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>&lt;table&gt;</td>
        <td>Denotes the start of an HTML table in a&nbsp;<br />web page</td>
    </tr>
    <tr>
        <td>&lt;tr&gt;</td>
        <td>Denotes the start of a row in an HTML <br />table (NOTE: these tags must exist <br />in side
            &lt;table&gt;...&lt;/table&gt; tags in order <br />to be valid, and work correctly)</td>
    </tr>
    <tr>
        <td>&lt;td&gt;</td>
        <td>Denotes a cell (or Table Data) in an <br />HTML table (NOTE: these tags must <br />exist
            inside &lt;tr&gt;...&lt;/tr&gt; tags in order to <br />be valid, and work correctly)</td>
    </tr>
    <tr>
        <td>&lt;th&gt;</td>
        <td>Very similar to the &lt;td&gt; tags described <br />above but the text is bold and centered.
        </td>
    </tr>
    <tr>
        <td>&lt;caption&gt;</td>
        <td>Will place a caption on an HTML table <br />(NOTE: this tag must be implemented <br />right
            after the opening &lt;table&gt; tag in <br />order to be valid and work correctly).</td>
    </tr>
</table>
<hr />
<table border="1px" align="center">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year of <br />Publication</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>The Beginning After The End&nbsp;</td>
        <td>TurtleMe</td>
        <td align="center">2021</td>
        <td>This book is about a king grey who met his ultimate demise. He was later reborn as Arthur
            Leywin&nbsp;<br />where he now lives his new life in a magical world filled with creatures
            out of fantasies.</td>
    </tr>
    <tr>
        <td>The House of Hades</td>
        <td>Rick Riordan</td>
        <td align="center">2013</td>
        <td>This is the fourth book of a five-book series called Heros of Olympus. In this book, our
            heroes are <br />on a quest to close death's doors, stop the giants from raising Gaea, and
            prevent a war between <br />both camps.</td>
    </tr>
    <tr>
        <td>Tsuredure Children</td>
        <td>Toshiya Wakabayashi&nbsp;</td>
        <td align="center">2014</td>
        <td>This book tells various romance stories between multiple students at the same highschool.
            All of <br />them have one goal on their mind how to tell the other "I love you".</td>
    </tr>
</table>
<hr />
<table id="schedule_table">
    <tr>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
    </tr>
    <tr>
        <td height="55px">8:10am-<br />9:00am</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">9:10am-<br />10:00am</td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">MGMT1224<br />CRN: 14060<br />SW201
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">10:10am-<br />11:00am</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">11:10am-<br />12:00pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">MGMT1223<br />CRN: 14055<br />C307
        </td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">12:10pm-<br />01:00pm</td>
        <td></td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">COSC1200<br />CRN: 12994<br />ONLINE
        </td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">01:10pm-<br />02:00pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">02:10pm-<br />03:00pm</td>
        <td></td>
        <td></td>
        <td colspan="2" align="center" bgcolor="#F0EAD6">Lunch</td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">GNED1506<br />CRN: 13610<br />A319
        </td>
    </tr>
    <tr>
        <td height="55px">03:10pm-<br />04:00pm</td>
        <td></td>
        <td></td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">COSC1200<br />CRN: 12994<br />L114
        </td>
    </tr>
    <tr>
        <td height="55px">04:10pm-<br />05:00pm</td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">INFT1206<br />CRN: 13840<br />SW213
        </td>
        <td></td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">COSC1200<br />CRN: 12994<br />L114
        </td>
    </tr>
    <tr>
        <td height="55px">05:10pm-<br />06:00pm</td>
        <td></td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">INFT1207<br />CRN: 13849<br />L118
        </td>
    </tr>
    <tr>
        <td height="55px">06:10pm-<br />07:00pm</td>
        <td align="center" bgcolor="#F0EAD6">Snack Break</td>
        <td></td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">INFT1206<br />CRN: 13840<br />L114
        </td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">07:10pm-<br />08:00pm</td>
        <td rowspan="2" align="left" valign="top" bgcolor="FAD6A5">INFT1207<br />CRN: 13849<br />L114
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td height="55px">08:10pm-<br />09:00pm</td>
        <td></td>
        <td align="left" valign="top" bgcolor="FAD6A5">MGMT1223<br />CRN: 14055<br />ONLINE</td>
        <td></td>
        <td></td>
    </tr>
</table>
<hr />
<?php

include ("./footer.php");

?>