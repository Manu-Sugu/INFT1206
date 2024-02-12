<?php
/**
 * This page represents the lab 4 page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 6, 2023)
 */

$file = "lab1.php";
$date = "January 11, 2023";
$title = "Lab 1";
$desc = "This is the Lab 1 page for Web Development - Fundamentals (INFT1206)
On this page you will find the main Lab1 page for this lab. There are various lines of paragraphs each utlizing the different
web development concepts. Each example has a description paragraph explaining what is being used. This page alone utlizes the
background colour, and text attributies. It also has a logo, a clickable link that sends the user back to the homepage, a 
number of headings, heading lines, and paragraphs.";
$banner = "Lab 1 - XHTML Basics including Special Charcters";

include ("./header.php");
?>
<p>On this page you will find the main Lab1 page for this lab. There are various lines of paragraphs
    each utlizing the different web development concepts. Each example has a description paragraph
    explaining what is being used. This page alone utlizes the background colour, and text attributies.
    It also has a logo, a clickable link that sends the user back to the homepage, a number of headings,
    heading lines, and paragraphs.</p>
<hr />
<h3>Einstein's Realitivity</h3>
<p>
    For Einstein's Realitivity fromula you have to use superscript(&lt;sup&gt;...&lt;/sup&gt;) and
    italic (&lt;i&gt;...&lt;/i&gt;) tags. It is warpped in heading 2 (&lt;h2&gt;...&lt;/h2&gt;) tagsto
    make it larger and bolder. <b>Note: be careful with proper nesting to ensure the page passes the
        XHTML validator. This line is bolded using the bold(&lt;b&gt;...&lt;/b&gt;) tags.</b>
</p>
<h2 class="h2_lab1">
    <i>E = mc<sup>2</sup></i>
</h2>
<hr />
<h3>
    Currency Conversion (use special charcters)
</h3>
<p>
    For the currency conversion formula you need to use entities in order to create the different
    currency symbols. I used the entities for pound, euro, and yen.
</p>
<h2 class="h2_lab1">
    $1.00CDN = $0.703USD = &pound;0.487 = &euro;0.651 = &yen;82.77
</h2>
<hr />
<h3>
    Code Snippet
</h3>
<p>
    For the code snippet I used more entities in order to make less then and greater then symbols. I
    also used entities for the spaces. I used a new tag to create the code called the code tag. I also
    utlized the break tag to make new lines for the code snippet.
</p>
<code id="code_lab1">
#include &lt;iostream.h&gt; <br/>
int main() <br/>
{ <br/>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; "Hello World!" &lt;&lt; endl; <br/>
&nbsp;&nbsp;&nbsp;&nbsp;return 0; <br/>
} <br/>
</code>
<hr />
<h3>
    Chemistry Equation
</h3>
<p>
    For the chemistry equaiton I used a subscript tag to create the equation. I used a entity for the
    greater then symbol aswell.
</p>
<h2 class="h2_lab1">
    2H<sub>2</sub> + O<sub>2</sub> =&gt; 2H<sub>2</sub>O + heat
</h2>
<hr class="break_line" />
<h3>
    List Example (order important)
</h3>
<p>
    For the list example I utlized an order list tag in order to create a list that has numbers next to
    each item in the list. I utlized the ordered list tag aswell as the list item tag to create items
    for the list.
</p>
<h2 class="h2_lab1">
    How to start a car
</h2>
<ol>
    <li class="list_items_lab1">Place key in the ignition</li>
    <li class="list_items_lab1">Depress the brake pedal</li>
    <li class="list_items_lab1">Turn the ingnition key</li>
</ol>
<hr />
<h3>
    List Example (order unimportant)
</h3>
<p>
    For the list example I utlized an unordered list. I used the underordered list tag along with the
    item list tag to create items for the list. I also utlized an entity for the ampersand.
</p>
<h2 class="h2_lab1">
    Things to do before my trip
</h2>
<ul>
    <li class="list_items_lab1">Re-new passport</li>
    <li class="list_items_lab1">Convert Currency</li>
    <li class="list_items_lab1">Print out reservations &amp; itineraries</li>
    <li class="list_items_lab1">Verify vaccinations are up-to-date</li>
</ul>
<hr />
<?php

include ("./footer.php");

?>