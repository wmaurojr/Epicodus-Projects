<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Rectangle.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return  "<!DOCTYPE html>
        <html>
        <head>
            <title>Hello Friend!</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        </head>
        <body>
            <div class='container'>
        <h1>Geometry Checker</h1>
        <p>Enter the dimensions of your rectangle to see if it's a square.</p>
        <form action='../src/Rectangle.php'>
            <div class='form-group'>
              <label for='length'>Enter the length:</label>
              <input id='length' name='length' class='form-control' type='number'>
            </div>
            <div class='form-group'>
              <label for='width'>Enter the width:</label>
              <input id='width' name='width' class='form-control' type='number'>
            </div>
            <button type='submit' class='btn-success'>Create</button>
        </form>
        </div>
        </body>
        </html>";
    });

    return $app;
?>