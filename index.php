<?php

require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;

$app = new Application();

// routes

$app->router->get('/', function () {
    return 'Hello world';
});

$app->run();