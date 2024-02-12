<?php

/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (April 3, 2023)
 */

$file = "lab9.php";
$date = "April 3,2023";
$title = "Lab 9";
$desc = "XXXXXX";
$banner = "Lab 9: Database/PHP Lab - User Login";

include("./header.php");

$errors = "";
$output = "";
$id = "";
$password = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id       = trim($_POST['login']);
    $password = trim($_POST['pass']);

    // Input is empty validation
    if(!isset($id) || $id == "")
    {
        $errors.="You must enter an id.<br/>";
        $id = "";
    }

    if(!isset($password) || $password == "")
    {
        $errors.="You must enter a password.<br/>";
        $password = "";
    }

    if($errors == "")
    {
        // Input Validation
        $conn = db_connect();
        $sql = "SELECT first_name, last_name, email_address, last_access 
                    FROM users 
                    WHERE id = '" . $id . "' AND password= '" . $password . "'
                ";
        $results = pg_query($conn, $sql);
        if (pg_num_rows($results)) {
            $fname = pg_fetch_result($results, 0, 'first_name');
            $lname = pg_fetch_result($results, 0, 'last_name');
            $email = pg_fetch_result($results, 0, 'email_address');
            $last_access = pg_fetch_result($results, 0, 'last_access');
            $output .= "Welcome back $fname $lname <br />";
            $output .= "Our records show that your <br />";
            $output .= "email address is: $email <br />";
            $output .= "and you last accessed our system: $last_access <br />";
            $sql = "UPDATE users 
                    SET last_access = '" . date("Y-m-d", time()) . "' 
                    WHERE id = '" . $id . "'";
            pg_query($conn, $sql);
        } else {
            //user not found, check for just login id
            $sql = "SELECT *
                        FROM users
                        WHERE id = '" . $id . "'";
            $results = pg_query($conn, $sql);
            if (!pg_num_rows($results)) {
                //user not found, empty $login to unstick it
                $errors = "Login/password not found in the database";
                $id = ""; //when echo’’ed in the form
            }
        }
    }
}
?>


<hr />
<h2 style="text-align: center;"><?php echo $output; ?></h2>
<h2 style="text-align: center;"><?php echo $errors; ?></h2>
<br />
<h2 style="text-align: center;">Please log in</h2>
<p style="text-align: center;">Enter your login ID and password to connect to this system<br />
</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table cellpadding="10">
        <tr>
            <td style="border: 0px;"><strong>Login ID</strong></td>
            <td style="border: 0px;"><input type="text" name="login" value="<?php echo $id; ?>" size="20" /></td>
        </tr>
        <tr style="border: 0px;">
            <td style="border: 0px;"><strong>Password</strong></td>
            <td style="border: 0px;"><input type="password" name="pass" value="<?php echo $password; ?>" size="20" /></td>
        </tr>
    </table>
    <table border="0" cellspacing="15">
        <tr>
            <td style="border: 0px;"><input type="submit" value="Log In" /></td>

            <td style="border: 0px;"><input type="reset" value="Reset" /></td>
        </tr>
    </table>
</form>
<p style="text-align: center;">
    Please wait after pressing <strong>Log in</strong>
    while we retrieve your records from our database.<br />
    <em>(This may take a few moments)</em>
</p>
<hr />


<?php

include("./footer.php");

?>