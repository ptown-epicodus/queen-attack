<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../src/Queen.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__ . '/../views/'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('queen_attack.html.twig');
    });

    $app->post('/attack', function() use ($app) {
        $queen = new Queen($_POST['start-x'], $_POST['start-y']);
        $end = array($_POST['end-x'], $_POST['end-y']);

        return $app['twig']->render('queen_attack_result.html.twig', array(
            'start' => $queen,
            'end' => $end
        ));
    });

    return $app;
?>
