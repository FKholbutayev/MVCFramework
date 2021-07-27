<?php

namespace app\core;

use JetBrains\PhpStorm\Pure;

class Router {

    protected array $routes = [];

    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path =  $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            return "NOt FOUND";
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

        return str_replace('{{content}}', $viewContent, $layoutContent);

    }

    public function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }

    public function layoutContent()
    {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

}