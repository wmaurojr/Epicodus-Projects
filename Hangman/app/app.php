<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Guess.php";
    require_once __DIR__."/../src/Keyword.php";

    session_start();

//$_SESSION['guesses'] = array();
    if (empty($_SESSION['guesses'])) {
        $_SESSION['guesses'] = array();
    }
    if (empty($_SESSION['keys'])) {
        $_SESSION['keys'] = array();
    }


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    )); 

    $app->get("/", function() use ($app) {

        return $app['twig']->render('guesses.html.twig',  array('guesses' => Guess::getAll()));
    });

    $app->post("/results", function() use ($app) {
        $guess = new Guess($_POST['guesses']);
        $guess->save();
        // $guessArray = $guess::getAll();

        // echo '<pre>';
        // print_r($guessArray);
        // echo '</pre>'; 

        $keyword = new Keyword('bubble');
        $keyword->save();
        $keys = $keyword->splitIntoKeys();

        //$matches = array_keys($keys, $result);

        // use array_keys or array_search here and pass the results to the template below

        return $app['twig']->render('results.html.twig', array('guesses' => Guess::getAll(), 'keys' => $keys));
    });

    $app->post("/delete_guesses", function() use ($app) {
        Guess::deleteAll();
        return $app['twig']->render('delete.html.twig', array('guesses' => Guess::getAll()));
    });

    return $app;
?>