<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{
    public function handleContact(): string
    {
        return "Handling contact in controller";
    }

    public function home()
    {
        $params = [
            "name" => "Fabrikod"
        ];

        return Application::$app->router->renderView('home', $params);
    }

    public function contact(): string
    {
        return Application::$app->router->renderView('contact');
    }
}