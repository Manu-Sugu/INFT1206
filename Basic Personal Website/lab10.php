<?php

/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (April 10, 2023)
 */

$file = "lab10.php";
$date = "April 10, 2023";
$title = "Lab 10";
$desc = "This webpage utlizes php scripts to create a registration page that takes in user data and verify's if they are valid data inputs. After verifying the data they will then insert the data into the database and take the userto the login page on lab 9.";
$banner = "Lab 10: Database/PHP Lab - User Registration";

include("./header.php");

// Variables
$errors           = "";
$id               = "";
$password         = "";
$password_confirm = "";
$first_name       = "";
$last_name        = "";
$email            = "";
$today            = date("Y-m-d", time());
$conn             = db_connect();
$sql              = "";
$results          = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Data collection
    $id               = trim($_POST['user_id']);
    $password         = trim($_POST['passwd']);
    $password_confirm = trim($_POST['conf_passwd']);
    $first_name       = trim($_POST['first_name']);
    $last_name        = trim($_POST['last_name']);
    $email            = trim($_POST['email_address']);

    // id validation
    if (strlen($id) == 0) {
        $errors .= "You must enter an id.<br/>";
        $id      = "";
    } else if (strlen($id) < MINIMUM_ID_LENGTH || strlen($id) >= MAXIMUM_ID_LENGTH) {
        $errors .= "The id must be atleast " . MINIMUM_ID_LENGTH . " characters long and less than " . MAXIMUM_ID_LENGTH . " characters. You entered $id.<br/>";
        $id      = "";
    } else {
        // checking if the id exists
        $sql = "SELECT *
                    FROM users
                    WHERE id = '" . $id . "'";
        $results = pg_query($conn, $sql);
        if (pg_num_rows($results)) {
            $errors .= "The ID $id already exists within the system.<br/>";
            $id      = "";
        }
    }

    // password validation
    if (strlen($password) == 0) {
        $errors  .= "You must enter a password.<br/>";
        $password = "";
    } else if (strlen($password) < MINIMUM_PASSWORD_LENGTH || strlen($password) > MAXIMUM_PASSWORD_LENGTH) {
        $errors  .= "The password must be atleast " . MINIMUM_PASSWORD_LENGTH . " characters long and less than or equal to " . MAXIMUM_PASSWORD_LENGTH . " characters. You entered $password.<br/>";
        $password = "";
    }

    // confirm password validation
    if (strlen($password_confirm) == 0) {
        $errors          .= "You must re-enter the password in confirm password.<br/>";
        $password_confirm = "";
    } else if (strlen($password_confirm) < MINIMUM_PASSWORD_LENGTH || strlen($password_confirm) > MAXIMUM_PASSWORD_LENGTH) {
        $errors  .= "The password confirm must be atleast " . MINIMUM_PASSWORD_LENGTH . " characters long and less than or equal to " . MAXIMUM_PASSWORD_LENGTH . " characters. You entered $password_confirm.<br/>";
        $password = "";
    } else if ($password != $password_confirm) {
        $errors          .= "The password and confirm password must match.<br/>";
        $password         = "";
        $password_confirm = "";
    }

    // first name validaation
    if (strlen($first_name) == 0) {
        $errors    .= "You must enter a first name.<br/>";
        $first_name = "";
    } else if (strlen($first_name) > MAX_FIRST_NAME_LENGTH) {
        $errors    .= "The first name must be less than " . MAX_FIRST_NAME_LENGTH . " characters. You entered $first_name.<br/>";
        $first_name = "";
    } else if (is_numeric($first_name)) {
        $errors    .= "Your first name can not be a number. You entered $first_name.<br/>";
        $first_name = "";
    }


    // last name validaation
    if (strlen($last_name) == 0) {
        $errors   .= "You must enter a last name.<br/>";
        $last_name = "";
    } else if (strlen($last_name) > MAX_LAST_NAME_LENGTH) {
        $errors   .= "The last name must be less than " . MAX_LAST_NAME_LENGTH . " characters. You entered $last_name.<br/>";
        $last_name = "";
    } else if (is_numeric($last_name)) {
        $errors   .= "Your last name can not be a number. You entered $last_name.<br/>";
        $last_name = "";
    }

    // email validation
    if (strlen($email) == 0) {
        //use strlen() to det. whether the var empty or not
        $errors .= "You must enter an email address!<br/>";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //note the ! not symbol, if valid no problem
        $errors .= "<em>" . $email . "</em> is not a valid email address! You entered $email.<br/>";

        //NOTE: give the invalid address so user knows what they entered
        $email = ""; //empty out the variable so it is not sticky
    }

    if ($errors == "") {
        $conn = db_connect();
        $sql  = "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
                    VALUES ('" . $id . "', '" . $password . "', '" . $first_name . "', '" . $last_name . "', '" . $email . "', '" . $today . "', '" . $today . "')";
        $ok   = pg_query($conn, $sql);
        if ($ok) {
            header("Location:lab9.php");
            ob_flush();
        } else {
            $errors .= "Please try again!!<br/>";
        }
    }
}

?>

<p>
    This webpage utlizes php scripts to create a registration page that takes in user data and verify's if they are
    valid data inputs. After verifying the data they will then insert the data into the database and take the user
    to the login page on lab 9.
</p>

<hr />
<h2 style="text-align: center;">Please register in our system</h2>
<p style="text-align: center;">Please enter your personal information<br /></p>

<h3><?php echo $errors ?></h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table cellpadding="10">
        <tr>
            <td style="border: 0px;"><strong>Login ID</strong></td>
            <td style="border: 0px;"><input type="text" name="user_id" value="<?php echo $id; ?>" size="20" /></td>
        </tr>
        <tr>
            <td style="border: 0px;"><strong>Password</strong></td>
            <td style="border: 0px;"><input type="password" name="passwd" value="<?php echo $password; ?>" size="20" /></td>
        </tr>
        <tr>
            <td style="border: 0px;"><strong>Confirm Password</strong></td>
            <td style="border: 0px;"><input type="password" name="conf_passwd" value="<?php echo $password_confirm; ?>" size="20" /></td>
        </tr>
        <tr>
            <td style="border: 0px;"><strong>First Name</strong></td>
            <td style="border: 0px;"><input type="text" name="first_name" value="<?php echo $first_name; ?>" size="20" /></td>
        </tr>
        <tr>
            <td style="border: 0px;"><strong>Last Name</strong></td>
            <td style="border: 0px;"><input type="text" name="last_name" value="<?php echo $last_name; ?>" size="20" /></td>
        </tr>
        <tr>
            <td style="border: 0px;"><strong>Email Address</strong></td>
            <td style="border: 0px;"><input type="text" name="email_address" value="<?php echo $email; ?>" size="20" /></td>
        </tr>

    </table>
    <table style="border: 0px;" cellspacing="15">
        <tr>
            <td style="border: 0px;"><input type="submit" value="Register" /></td>
            <td style="border: 0px;"><input type="reset" value="Clear" /></td>
        </tr>
    </table>
</form>
<hr />

<?php

include("./footer.php");

?>