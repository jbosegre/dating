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

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function (){
    $view = new View;
    echo $view->render('views/home.html');
});

//Run fat Free
$f3->run();