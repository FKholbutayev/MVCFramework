<?php


namespace Memlin\MvcFramework\core;


class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        var_dump($position);
    }

    public function getMethod()
    {

    }
}