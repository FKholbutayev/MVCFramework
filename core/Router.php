<?php

namespace Memlin\MvcFramework\core;

class Router {

    protected $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {

    }

}