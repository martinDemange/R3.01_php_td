<?php
//    require 'utils.inc.php';
//    start_page('lul');
use blog\controllers\Register;

// __DIR__ : contain the position of this file
    include  __DIR__ . "/Autoloader.php";

    $path = $_SERVER['REQUEST_URI'];

    /* create a vector of object, that are controller */
    $controllers = [new Register()];

    // look for each of the entries in the vector
    foreach ($controllers as $controller) {
        // if the path of the link correspond to the path of the controller, then it activate it
        if ($controller::resolve($path)) {
            $controller->control();
            exit();
        }
    }

    echo '404 NOT FOUND';
    exit();