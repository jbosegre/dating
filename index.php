<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 1/19/2019
 * Time: 8:52 AM
 */

//Require the autoload file

ini_set ("display_errors", 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require('model/DataValidation.php');

session_start();

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//defining global variables
$GLOBALS["premium"];

//define a default route
$f3->route('GET|POST /', function (){

    $view =  new View;
    if (isset($_POST['submit']) && !empty($_POST)) {
        echo $view->render
        ('views/Personal_Information.html');
    }
    else
    {
        echo $view->render('views/home.html');
    }
});

$f3->route('GET|POST /Personal_Information',
    function($f3)
    {
        $_SESSION=array();
        $template = new Template();
        if (isset($_POST['submit']) && !empty($_POST)) {

            $isValid = true;

            if(!empty($_POST["fname"]))
            {
                $fname = $_POST["fname"];
                if(validName($fname))
                {
                    $_SESSION["fname"]=$fname;
                }
            }
            else
            {
                $f3->set("error['fname']","Please enter your first name.");
                $isValid = false;
            }

            if(!empty($_POST["lname"]) && validName($_POST["lname"]))
            {
                $lname = $_POST["lname"];
                if(validName($lname))
                {
                    $_SESSION["lname"]=$lname;
                }
            }
            else
            {
                $f3->set("error['lname']","Please enter your Last name.");
                $isValid = false;
            }

            if(isset($_POST["age"]))
            {
                $age = $_POST["age"];
                if(validAge($age))
                {
                    $_SESSION["age"]=$age;
                }
            }
            else
            {
                $f3->set("error['age']","Please enter your age.");
                $isValid = false;
            }

            if(!empty($_POST["phoneNumber"]))
            {
                $phoneNumber = $_POST["phoneNumber"];
                if(validPhone($phoneNumber))
                {
                    $_SESSION["phoneNumber"]=$phoneNumber;
                }
            }
            else
            {
                $f3->set("error['phoneNumber']","Please enter your phone number in 10 digits only.");
                $isValid = false;
            }

            if(isset($_POST["premium"]))
            {
                $_SESSION["premium"] = $_POST["premium"];
                $GLOBALS["premium"] = $_SESSION["premium"];
            }

            if($isValid)
            {
                $f3->reroute('/Profile');
                /*echo $template::instance()->render('/views/Profile_Summary.php');*/
            }
        }
        else
        {
            echo $template->render('views/Personal_Information.html');
        }
    }
);

$f3->route('GET|POST /Profile',
    function($f3)
    {
        $_SESSION=array();
        $GLOBALS ;
        $template = new Template();
        if (isset($_POST['submit']) && !empty($_POST)) {

            $isValid = true;

            if (!empty($_POST["email"])) {
                $_SESSION["email"] = $_POST["email"];
                if (!filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL)) {
                    echo "Invalid email format";
                    $isValid = false;
                }
            } else {
                //echo "<p>Please input your email in the correct format</p>";
                $isValid = false;
            }

            if (!empty($_POST["state"])) {
                $_SESSION["state"] = $_POST["state"];
            } else {
                //echo "<p>Please enter the US state you are currently in</p>";
                $isValid = false;
            }

            if (!empty($_POST["biography"])) {
                $_SESSION["biography"] = $_POST["biography"];
            } else {
                //echo "<p>Please enter a Biography of you</p>";
                $isValid = false;
            }

            if (isset($_POST["seekGender"])) {
                $_SESSION["seekGender"] = $_POST["seekGender"];
            } else {
                //echo "<p>Please enter the gender you are matching for</p>";
                $isValid = false;
            }

            if($isValid && isset($GLOBALS["premium"]))
            {
                $f3->set('email', $_SESSION['email']);
                $f3->set('biography', $_SESSION['biography']);
                $f3->set('state', $_SESSION['state']);
                $f3->set('seekGender', $_SESSION['seekGender']);
                $f3->reroute('/Interest');
            }
            elseif ($isValid)
            {
                $f3->set('email', $_SESSION['email']);
                $f3->set('biography', $_SESSION['biography']);
                $f3->set('state', $_SESSION['state']);
                $f3->set('seekGender', $_SESSION['seekGender']);
                $f3->reroute('/Profile_Summary');
            }
            else
            {
                echo $template->render('views/Profile.html');
            }
        }
        echo $template->render('views/Profile.html');
    }
);

$f3->route('GET|POST /Interest',
    function($f3)
    {
        $_SESSION=array();
        $template = new Template();
        if (isset($_POST['submit']) && !empty($_POST)) {

            $isValid = true;
            $indoor = array("TV", "Movies", "Cooking", "Boards_Cards", "Puzzles", "Reading",
                "Video_Games", "Others");
            $outdoor = array("Hiking", "Biking", "Swimming", "Collecting", "Walking",
                "Climbing", "Gardening", "Others");

            if(isset($_POST["indoor[]"]) && validIndoor($_POST["indoor[]"], $indoor))
            {
                $_SESSION["indoor[]"] = $_POST["indoor[]"];
            }

            if(isset($_POST["outdoor[]"]) && validOutdoor($_POST["outdoor[]"], $outdoor))
            {
                $_SESSION["outdoor[]"] = $_POST["outdoor[]"];
            }

            if($isValid)
            {
                $f3->set('indoor', $_SESSION['indoor[]']);
                $f3->set('outdoor', $_SESSION['outdoor[]']);
                $f3->reroute('/Profile_Summary');
            }
            else
            {
                echo $template->render('views/Interest.php');
            }
        }
        echo $template->render('views/Interest.php');
    }
);


$f3->route('GET|POST /Profile_Summary',
    function($f3)
    {
        $_SESSION["color"] = $_POST[color];
        $f3->set("color", $_SESSION["color"]);

        $template = new Template();
        echo $template->render('views/Profile_Summary.php');
    }
);

//Run fat Free
$f3->run();