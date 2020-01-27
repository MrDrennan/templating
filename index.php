<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

// :: means to invoke a static method. -> means to use an instance method
$f3 = Base::instance();

$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
    //echo "Hello Food";
});

$f3->run();