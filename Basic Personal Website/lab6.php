<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (March 16, 2023)
 */

$file = "lab6.php";
$date = "March 16, 2023";
$title = "Lab 6 ";
$desc = "This is a example that demonstrates the requirements for lab 6.";
$banner = "Lab 6: Self-referring Forms w/ Data Validation";

include ("./header.php");

// constants and variables
define('MAX_ITERATIONS', 100);
$errors = "";
$outputs = "";
$start = "";
$stop = "";
$incr = "";

/**
 * This function takes the temperature and converts it to farenheit
 * @param mixed $celsius the temperature
 * @return temperature the converted temperature 
 */
function temp_conversion($celsius)
{
    return 9.0/5.0*$celsius + 32;
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // stores the user input into variables
    $start = $_POST['start_temp'];
    $stop = $_POST['stop_temp'];
    $incr = $_POST['increment'];

    // Validation for start number
    if(!isset($start) || $start == "")
    {
        $errors.="You must enter a start temperature.<br/>";
    }
    else if(!is_numeric($start))
    {
        $errors.="The start temperature must be a number. You entered: $start.<br/>";
        $start="";
    }
    else if($start > $stop)
    {
        $errors.="The starting temperature must be less than the ending temperature. You entered $start > $stop.<br/>";
        $start="";
    }

    // Validation for stop number
    if(!isset($stop) || $stop == "")
    {
        $errors.="You must enter a stop temperature.<br/>";
    }
    else if(!is_numeric($stop))
    {
        $errors.="The start temperature must be a number. You entered: $stop.<br/>";
        $stop="";
    }

    // Validation for increment 
    if(!isset($incr) || $incr == "")
    {
        $errors.="You must enter an increment.<br/>";
    }
    else if(!is_numeric($incr))
    {
        $errors.="The increment must be a number. You entered: $incr.<br/>";
        $incr="";
    }
    else if($incr <= 0)
    {
        $errors ="The increment must be a postive(non-zero) number. You entered: $incr. <br />";
        $incr="";
    }

    // validation for too many iterations
    if($errors == ""){
        if(($stop - $start)/$incr > MAX_ITERATIONS)
        {
            $errors ="The conditions will cause too many iterations (max. 100), therefore (for the sake of server resources) 
            your request is denied.";
        }
    }
    
}
?>

<p>This is a example that demonstrates the requirements for lab 6. This page utilizes several PHP provided functions for example the 
    if statements or the functions. I used if statement to check for valid inputs from the user and used a function to calculate
    the temperature conversion. I also used the xhtml form tag to create a in page form using the php server function. Below you
    will see an example that demonstrates that usuage.
</p>

<h3 style="text-align: left;"><?php echo $errors; ?></h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table style="border: 0px; background-color: #003366" >
		<tr>
			<td style="border: 0px;">
				<label>Starting Temperature:</label>
			</td>
			<td style="border: 0px;">
				<input type="text" name="start_temp"  value="<?php echo $start; ?>"/><br/>
			</td>
		</tr>
		<tr>
			<td style="border: 0px;">
				<label>Stop Temperature:</label>
			</td>
			<td style="border: 0px;">
				<input type="text" name="stop_temp" value="<?php echo $stop; ?>"/><br/>
			</td>
		</tr>
		<tr>
			<td style="border: 0px;">
				<label>Temperature Increment:</label>
			</td>
			<td style="border: 0px;">
				<input type="text" name="increment" value="<?php echo $incr; ?>"/><br/>
			</td>
		</tr>
		<tr><td colspan="2" style="border: 0px;"><input type="submit" value="Create Temperature Conversion Table" /></td></tr>
	</table>
	
</form>

<?php
// This if statement checks to see if the variables are not blank and if there are no errors
// if it is true then it will print the statement
// I have them like this because the code will break if they try to run anthing below with empty variables
if($errors == "" && $start != "" && $stop != "" && $incr != "")
{
    echo "<table style=\"text-align: center; width: 40%; border: 1px;\">";
    echo "<tr>";
    echo "<th style=\"width: 50%;\">Celsius</th>";
    echo "<th style=\"width: 50%;\">Fahrenheit</th>";
    echo "</tr>";
    for($i=$start; $i<=$stop; $i+=$incr)
    {
        $f = temp_conversion($i);
        $outputs .= "<tr style=\"text-align: center;\"><td>$i&deg;</td><td>$f&deg;</td></tr>";
    }
    echo $outputs;
    echo "</table>";
}

include ("./footer.php");

?>