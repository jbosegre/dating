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

//define a default route
$f3->route('GET /', function (){
    $view =  new View;
    echo $view->render
    ('views/home.html');
});

$f3->route('GET|POST /Personal_Information',
    function($f3)
    {
        $template = new Template();
        if (isset($_POST['submit']) && !empty($_POST)) {

            $isValid = true;

            if(!empty($_POST["firstName"]) && validName($_POST["firstName"]))
            {
                $_SESSION["firstName"] = $_POST["firstName"];
            }
            else
            {
                echo"<p>Please enter your First Name</p>";
                $isValid = false;
            }

            if(!empty($_POST["lastName"]) && validName($_POST["lastName"]))
            {
                $_SESSION["lastName"] = $_POST["lastName"];
            }
            else
            {
                echo"<p>Please enter your Last Name</p>";
                $isValid = false;
            }

            if(isset($_POST["gender"]))
            {
                $_SESSION["gender"] = $_POST["gender"];
            }
            else
            {
                echo"<p>Please Enter your Gender</p>";
                $isValid = false;
            }

            if(!empty($_POST["phoneNumber"]) && validPhone($_POST["phoneNumber"]))
            {
                $_SESSION["phoneNumber"] = $_POST["phoneNumber"];
            }
            else
            {
                echo"<p>Please enter your phone number in ten digits only</p>";
                $isValid = false;
            }

            if($isValid)
            {
                $f3->set('fname', $_SESSION['firstName']);
                $f3->set('lname', $_SESSION['lastName']);
                $f3->set('age', $_SESSION['age']);
                $f3->set('gender', $_SESSION['gender']);
                $f3->set('phoneNumber', $_SESSION['phoneNumber']);
                $f3->reroute('/Profile_Summary');
                //echo $template::instance()->render('pages/Profile_Summary.php');
            }
        }
        echo $template->render('views/Personal_Information.php');
    }
);

//Run fat Free
$f3->run();