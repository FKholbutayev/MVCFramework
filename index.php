<?php

require_once __DIR__.'/vendor/autoload.php';

use Memlin\MvcFramework\core\Application;


$app = new Application();

// routes

$app->router->get('/', function () {
    return 'Hello world';
});

$app->router->get('/contact', function () {
    return 'Contact page';
});

$app->run();