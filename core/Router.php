<?php

namespace Memlin\MvcFramework\core;

class Router {

    protected array $routes = [];

    public Request $request;

    public function __construct(\Memlin\MvcFramework\core\Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();
    }

}