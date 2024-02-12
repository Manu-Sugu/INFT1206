<?php
/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (xxxx xx xxxxx)
 */

$file = "termtest2.php";
$date = "March 27, 2023";
$title = "Term Test 2";
$desc = "This page is a requirement for the term test 2. It will demonstarte my knowledge of php scripting utlizing a form script
         to create a money conversion form.";
$banner = "Term Test 2";

include ("./header.php");

# Constants
define('CAD_TO_EUR',0.67292);
define('CAD_TO_GBP',0.57724);

# Variables
$errors = "";
$outputs = "";
$amount_cad = "";
$england_europe = "";
$result = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // stores the user input into variables
    $amount_cad = trim($_POST['money_input']);
    $england_europe = trim($_POST['country_input']);

    // Validation for money entered
    if(!isset($amount_cad) || $amount_cad == "")
    {
        $errors.= "The amount of Money field can't be empty! <br/>";
        $amount_cad = "";
    }
    else if(!is_numeric($amount_cad))
    {
        $errors.= "The amount of Money field MUST be a Number, You Entered: $amount_cad <br/>";
        $amount_cad = "";

    }
    else if($amount_cad <= 0)
    {
        $errors.= "The amount of Money field MUST be a Positive Number, You Entered: $amount_cad <br/>";
        $amount_cad = "";

    }

    // Validation for country entered
    if(!isset($england_europe) || $england_europe == "")
    {
        $errors.= "The Country field can't be empty <br/>";
        $england_europe = "";
    }
    else if($england_europe != "England" && $england_europe != "Europe")
    {
        $errors.= "The Country field MUST be England or Europe (Case sensitive), You Entered: $england_europe <br/>";
        $england_europe = "";
    }
    
    // Calculations if no errors
    if($england_europe == "England" && $errors == "")
    {
        $result = number_format($amount_cad * CAD_TO_GBP, 2);
        $outputs = "$amount_cad Canadian Dollar equals to $result&pound;(Great Britain Pound)";
    }
    else if($england_europe == "Europe" && $errors == "")
    {
        $result = number_format($amount_cad * CAD_TO_EUR, 2);
        $outputs = "$amount_cad Canadian Dollar equals to $result&euro;(Euro)";
    }

}

?>

<p style="font-size: 125%">Term Test 2: Currency Convertor</p>

<h3 style="text-align: center; font-size: 150%;"><?php echo $errors; ?></h3>
<h3 style="text-align: center; font-size: 150%; color: lightgreen;"><?php echo $outputs; ?></h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table style="border: 0px;">
        <tr>
            <td style="border: 0px; font-size: 150%;">Amount of Money (in Canadian Dollars):</td>
            <td style="border: 0px;"><input type="text"  name="money_input" value="<?php echo $amount_cad; ?>" style="font-size: 150%"/></td>
        </tr>
        <tr>
            <td style="border: 0px; font-size: 150%;">Country (England or Europe):</td>
            <td style="border: 0px; font-size: 150%;"><input type="text"  name="country_input" value="<?php echo $england_europe; ?>" style="font-size: 100%"/></td>
        </tr>
        <tr>
            <td colspan="2" style="border: 0px;"><input type="submit" value="Convert Currency" style="font-size: 150%"/></td>
            
        </tr>
    </table>
</form>

<?php

include ("./footer.php");

?>