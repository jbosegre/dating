<!--
    Jarod Bose
    2/3/2019
    Assignment 2 Dating site
    Profile page showing inputs for state, email, biography and gender to seek for
-->
<?php
//session start
//ob_start();
//session_start();

/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/3/2019
 * Time: 12:23 PM
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
          href="http://jbose.greenriverdev.com/IT328_2019/dating/styles/styles.css?
          <?php echo time(); ?>">
    <link rel="stylesheet"
          href="http://jbose.greenriverdev.com/IT328_2019/dating/styles/css/bootstrap.min.css">
    <title>Profile</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link active" href="Profile.php">Profile</a>
            <a class="nav-item nav-link" href="Interest.php">Interest</a>
        </div>
    </div>
</nav>
<div class="container">
    <figure id="border">
        <figcaption>
            <h1 class="ml-5"><br><strong>Profile</strong></h1>
            <form action="Interest.php" method="post">
                <fieldset form="form-group">
                    <div class="col-lg-6" id="InputTitle5">
                        <p id="InputTitle4">Email</p>
                        <input class="form-control ml-5" type="text" name="email"
                               value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                    </div>
                    <div class="col-lg-5" id="biography">
                        <p id="InputTitle4">Biography</p>
                        <textarea class="form-control ml-5" rows="6" name="biography"
                                  <?php if(isset($_POST['biography'])) echo $_POST['biography'];?>>
                        </textarea>
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle3">State</p>
                        <input class="form-control ml-5" type="text" name="state"
                               placeholder="Washington"
                               value="<?php if(isset($_POST['state'])) echo $_POST['state'];?>">
                    </div>
                    <div class="col-lg-6">
                        <p id="InputTitle2">Seeking</p>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Male
                        <input class="ml-2" type="radio" name="seekGender" value="male"
                            <?php if (isset($_POST['seekGender']) and $_POST['seekGender']
                                == 'male') echo ' checked'; ?>>
                        &nbsp Female <input type="radio" name="seekGender" value="female"
                            <?php if (isset($_POST['seekGender']) and $_POST['seekGender']
                                == 'female') echo ' checked'; ?>>
                    </div>
                    <div id="adjustButton">
                        <a href="http://jbose.greenriverdev.com/IT328_2019/dating/views/Interest">
                            <button class="btn btn-primary" name="submit" type="submit">Next</button></a>
                    </div>
                </fieldset>
            </form>
        </figcaption>
    </figure>
</div>
<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
