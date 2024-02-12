<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 30 2023)
 */

$file = "lab7_auto_info.php";
$date = "March 30 2023";
$title = "Auto Info";
$desc = "This page utilizes several postgreSQL method calls.  Such as pg_connect(), pg_query(), and pg_fetch_result().";
$banner = "Auto Info";

include ("./header.php");
?>

<p>
This page utilizes several postgreSQL method calls.  Such as pg_connect(),
pg_query(), and pg_fetch_result().
</p>
<!-- setup the table -->
<table border="1" width="75%">
	<tr><th width="">Make</th><th width="">Model</th><th width="15%">Year</th><th width="">MSRP</th></tr>

<?php
$output = ""; //Set up a variable to store the output of the loop 
//connect
$conn = pg_connect("host=127.0.0.1 dbname=sugunakumarm_db user=sugunakumarm password=100748877" );  
//N.B. replace the YOUR variables with your specific information
//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

//issue the query
$sql = "SELECT make, model, year, msrp
			FROM automobiles
			ORDER BY year ASC";
	$result = pg_query($conn, $sql);
	$records = pg_num_rows($result);

//generate the table
	for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
		$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>"; 
		$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>"; 
		$output .= "\n\t\t<td>$".pg_fetch_result($result, $i, "msrp")."</td>\n\t</tr>"; 
	}

	echo $output; //display the output
?>
</table>
<!-- end the table -->

<?php

include ("./footer.php");

?>