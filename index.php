<?php
    require_once ("vendor/autoload.php");

    $app = new \Slim\Slim();

    $app->get('/', function(){
        echo "home page<br>";
        //RainTpl aqui..

        echo json_encode(
            array(
                'date'=>date("Y-m-d H:i:s")
            ));
    });

    $app->get('/hello/:name', function ($name) {
        echo "Hello, " . $name;
    });

    $app->run();

?>