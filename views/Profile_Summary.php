<!--
    Jarod Bose
    2/2/2018
    Assignment 2 Dating site
    Profile Summary page showing users inputs
-->

<?php
//start session
//ob_start();
//session_start();
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/2/2018
 * Time: 11:52 AM
 */

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
          href="http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/styles/styles.css?<?php echo time(); ?>">
    <link rel="stylesheet"
          href="http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/styles/css/bootstrap.min.css">
    <title>Profile Summary</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link" href="Profile.php">Profile</a>
            <a class="nav-item nav-link" href="Interest.php">Interest</a>
        </div>
    </div>
</nav>
<div class="container">
    <figure id="border">
        <figcaption>
            <div>
                <table>
                    <tr><th>Name: {{ @fname }} {{ @lname }} </th></tr>
                    <tr><td>Gender: {{ @gender }} </td></tr>
                    <tr><td>Age: {{ @age }} </td></tr>
                    <tr><td>Phone: {{ @phoneNumber }} </td></tr>
                    <tr><td>Email: {{ @email }} </td></tr>
                    <tr><td>State: {{ @state }} </td></tr>
                    <tr><td>Seeking: {{ @seekGender }} </td></tr>
                    <tr><td>Interest: {{ @indoor }} , {{ outdoor }} </td></tr>
                </table>
            </div>
            <div class="col-lg-5" id="biography">
                <h6 id="InputTitle6">Biography</h6>
                <br>
                <br>
                <p>{{ @biography }} </p>
            </div>
            <div id="adjustButton">
                <button class="btn btn-primary" id="contact">Contact Me!</button>
            </div>
        </figcaption>
        <img id="profilePic" class="img-fluid rounded"
             src="http://jbose.greenriverdev.com/IT328/Bose_Jarod_Dating/images/profile_pic.jpg"
             alt="Profile Picture">
    </figure>
</div>
<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
