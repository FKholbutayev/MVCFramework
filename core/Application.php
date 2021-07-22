<?php
namespace Memlin\MvcFramework\core;

use Router;

class Application {

    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }
}