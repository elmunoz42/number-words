<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Number.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    if (empty($_SESSION['numbers'])) {
        $_SESSION['numbers'] = array();
    }

    $app = new Silex\Application();

    $app['debug']=true;


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig',array('result'=>array()));
    });

    $app->post("/", function() use ($app) {
        $newNum = new Number();
        $result = $newNum->getNumber($_POST['userInput']);
        return $app['twig']->render('form.html.twig',array("result"=>$result));
    });

    $app->post("/delete", function() use ($app) {
        Number::deleteAll();

        return $app['twig']->render('form.html.twig',array());
    });

    return $app;
?>
