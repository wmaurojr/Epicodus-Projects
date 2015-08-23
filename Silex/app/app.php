<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Rectangle.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Home";
    });

    $app->get("/new_rectangle", function() {
        return  "<!DOCTYPE html>
        <html>
        <head>
            <title>Geometry Checker</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        </head>
        <body>
            <div class='container'>
        <h1>Geometry Checker</h1>
        <p>Enter the dimensions of your rectangle to see if it's a square.</p>
        <form action='/Epicodus/Silex/web/index.php/view_rectangle'>
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

    $app->get("/view_rectangle", function() {
        $my_rectangle = new Rectangle ($_GET['length'], $_GET['width']);
        $area = $my_rectangle->getArea();
        $length = $my_rectangle->getLength();
        $style_length = $length . 'px;';
        $width = $my_rectangle->getWidth();
        $style_width = $width . 'px;';

        return "<div style='width: $style_width height: $style_length background-color: teal;'><p style='line-height: $style_length text-align: center; font-family: sans-serif; color: white; font-size: 1.2rem;'>Area: $area px</p></div>";
    });

    return $app;
?>