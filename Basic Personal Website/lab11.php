<?php

/**
 * This page represents the lab x page for this file
 *
 * PHP version 7.1
 *
 * @author Manu Sugunakumar <manu.sugunakumar@dcmail.ca>
 * @version 1.0 (xxxx xx xxxxx)
 */

$file = "lab11.php";
$date = "April 16, 2023";
$title = "Bonus Lab";
$desc = "This lab utlizes the forms to create a form that asks the user 5 questions then prompts the user if they want to answer
5 more questions then resets the form to the starting postion.";
$banner = "Bonus Lab: Advanced PHP Application - Math Quiz";

include("./header.php");

# Variables
$errors = "";
$results = "";
$scoreboard = "";
$equation = "";
$answer = "";
$result = "";
$lho = randdigit();
$rho = randdigit();
$op = randop();
$score = 0;
$count = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $lho = $_POST['lho'];
    $rho = $_POST['rho'];
    $op = $_POST['op'];
    $count = $_POST['count'] + 1;
    $score = $_POST['score'];
    $answer = $_POST['answer'];

    $equation = $lho . "&nbsp;" . $op . "&nbsp;" . $rho;

    if (strlen($answer) == 0) {
        $errors = "You must enter an answer!";
    } else if (!is_numeric($answer)) {
        $errors = "Your answer must be numeric!";
        $answer == "";
    }

    if ($errors == "") {
        $result = evaluate($lho, $rho, $op);

        if ($result == $answer) {
            $score = $score + 1;
            $equation = $lho . "&nbsp;" . $op . "&nbsp;" . $rho . " = " . $result;
            $scoreboard = $score . " out of " . $count;
            $results = "Congratulations<br/>" . $scoreboard. "<br/>" . $equation . "<br/>";
            $answer = "";
        } else {
            $scoreboard = $score . " out of " . $count;
            $equation = $lho . "&nbsp;" . $op . "&nbsp;" . $rho . " = " . $result;
            $results = "Sorry<br/>". $scoreboard. "<br/>" . $equation . "<br/>";
            $answer = "";
        }

        $lho = randdigit();
        $rho = randdigit();
        $op = randop();

        if ($count == 5) {
            echo "<h1 style=\"text-align: left;\">Math Quiz</h1>";
            echo "<h3 style=\"text-align: left;\">$results</h3>";
            echo "<p style=\"text-align: left;\">Do you want another 5 questions?</p>";
            echo "<form method=\"get\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
            echo "<input type=\"submit\" name=\"again\" value=\"Yes\" /></form>";
        }
    }
}
?>

<?php
if ($count < 5) {
    echo "<p>This lab utlizes the forms to create a form that asks the user 5 questions then prompts the user if they want to answer 5 more questions then resets the form to the starting postion.</p>";
    echo "<h1 style=\"text-align: left;\">Math Quiz</h1>";
    echo "<h3 style=\"text-align: left;\">$errors</h3>";
    if ($errors == "") {
        echo "<h3 style=\"text-align: left;\">$results</h3>";
    }

    echo "<form method=\"post\" action=\"$_SERVER[PHP_SELF]\">";
    echo "<h3 style=\"text-align: left;\">";
    echo "$lho $op $rho = ? ";
    echo "<input type=\"text\" name=\"answer\" size=\"2\" value=\"$answer\"/>";
    echo "</h3>";
    echo "<p style=\"text-align: left;\"><input type=\"submit\" name=\"submit\" value=\"Try It!\" />";
    echo "<input type=\"hidden\" name=\"lho\" value=\"$lho\" />";
    echo "<input type=\"hidden\" name=\"rho\" value=\"$rho\" />";
    echo "<input type=\"hidden\" name=\"op\" value=\"$op\" />";
    echo "<input type=\"hidden\" name=\"score\" value=\"$score\" />";
    echo "<input type=\"hidden\" name=\"count\" value=\"$count\" />";
    echo "</p>";
    echo "</form>";
}
?>

<?php

include("./footer.php");

?>