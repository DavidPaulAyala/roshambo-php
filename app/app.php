<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/player', function() use($app) {
        return $app['twig']->render('two_player.html.twig');
    });

    $app->get('/computer', function() use($app) {
        return $app['twig']->render('computer.html.twig');
    });

    $app->post('/results', function() use($app) {
        $player1 = $_POST['player1'];
        if ($_POST['computer'] == 'true'){
            $ranNum = rand(1,3);
            if ($ranNum == 1){
                $player2 = 'Rock';
            } elseif ($ranNum == 2) {
                $player2 = 'Paper';
            } else {
                $player2 = 'Scissors';
            }
        } else {
            $player2 = $_POST['player2'];
        }

        $newRockPaperScissors = new RockPaperScissors();
        $result = $newRockPaperScissors->playGame($player1, $player2);
        return $app['twig']->render('results.html.twig', array('result' => $result, 'player1' => $player1, 'player2' => $player2));
    });
    return $app;
?>
