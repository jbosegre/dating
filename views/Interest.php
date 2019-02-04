<!--
    Jarod Bose
    2/2/2018
    Assignment 2 Dating site
    interest page showing inputs for user's favorite hobby
-->
<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/2/2018
 * Time: 11:44 AM
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
          href="http://jbose.greenriverdev.com/IT328_2019/dating/styles/styles.css?<?php echo time(); ?>">
    <link rel="stylesheet"
          href="http://jbose.greenriverdev.com/IT328_2019/dating/styles/css/bootstrap.min.css">
    <title>Interest</title>
</head>
<body>
<nav class="nav-pills navbar-inverse navbar-toggleable-sm" style="background-color: lightgray;">
    <h3>My Dating Website</h3>
    <div class="container">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">Home</a>
            <a class="nav-item nav-link" href="Personal_Information.php">Personal Info</a>
            <a class="nav-item nav-link" href="Profile.php">Profile</a>
            <a class="nav-item nav-link active" href="Interest.php">Interest</a>
        </div>
    </div>
</nav>
<div class="container">
    <figure id="border">
        <figcaption>
            <h1 class="ml-5"><br><strong>Interest</strong></h1>
            <form action="Profile_Summary.php" method="post">
                <fieldset form="form-group">
                    <div class="form-group ml-lg-2">
                        <label class="d-block" id="InputTitle2">Indoor Activities</label>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="TV" <?php if (isset($_POST['indoor[]']) and $_POST['indoor[]']
                                    == 'TV') echo ' checked'; ?>> TV
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Movies" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Movies') echo ' checked'; ?>> Movies
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Cooking" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Cooking') echo ' checked'; ?>> Cooking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Boards_Cards" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Boards_Cards') echo ' checked'; ?>>
                                Board and Card Games
                            </label>
                        </div>
                         <br>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Puzzles" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Puzzles') echo ' checked'; ?>> Puzzles
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Reading" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Reading') echo ' checked'; ?>> Reading
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Video_Games" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Video_Games') echo ' checked'; ?>> Video Games
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="indoor[]"
                                       value="Others" <?php if (isset($_POST['indoor[]'])
                                    and $_POST['indoor[]'] == 'Others') echo ' checked'; ?>> Others
                            </label>
                        </div>
                    </div>
                    <div class="form-group ml-lg-2">
                        <label class="d-block" id="InputTitle2">Outdoor Activities</label>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Hiking" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Hiking') echo ' checked'; ?>> Hiking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Biking" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Biking') echo ' checked'; ?>> Biking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Swimming" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Swimming') echo ' checked'; ?>> Swimming
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Collecting" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Collecting') echo ' checked'; ?>> Collecting
                            </label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Walking" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Walking') echo ' checked'; ?>> Walking
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Climbing" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Climbing') echo ' checked'; ?>> Climbing
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Gardening" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Gardening') echo ' checked'; ?>> Gardening
                            </label>
                        </div>
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="outdoor[]"
                                       value="Others" <?php if (isset($_POST['outdoor[]'])
                                    and $_POST['outdoor[]'] == 'Others') echo ' checked'; ?>> Others
                            </label>
                        </div>
                    </div>
                    <a id="adjustButton">
                        <a href="http://jbose.greenriverdev.com/IT328_2019/dating/Profile_Summary">
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
