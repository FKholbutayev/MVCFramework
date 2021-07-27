<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;

class SiteController extends Controller
{
    public function handleContact(Request $request)
    {
        $body = $request->getBody();

        var_dump($body);
    }

    public function home()
    {
        $params = [
            "name" => "Fabrikod"
        ];

        return $this->render('home', $params);
    }

    public function contact(): string
    {
        return $this->render('contact');
    }
}