<?php 

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/form.php";

    $app = new Silex\Application();

    $app->get("/", function() {

    $output = 'Home';

    return $output;

    });

    return $app;

?>

