<?php
ob_start(); //output buffer
//is the controller...

//error reporting

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
//require autoload file
require_once('vendor/autoload.php');


//instance of base class
$f3 = Base::instance();

//define default route

$f3->route('GET /', function () {
    echo "<h1>week 6 page</h1>";

    $view = new Template();
    echo $view->render('views/info.html');
});

//run fat free!
$f3->run();

ob_flush();