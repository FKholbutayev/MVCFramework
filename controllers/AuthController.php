<?php


namespace app\controllers;


use app\core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isPost()) {
            return "handle login data";
        }

        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "handle register data";
        }

        return $this->render('register');

    }
}