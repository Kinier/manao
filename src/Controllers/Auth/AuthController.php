<?php

namespace App\Controllers\Auth;
use App\Helpers\Request;
use App\Helpers\Response;

class AuthController{
    public static function login()
    {
        $data = Request::json();

    }

    public static function register()
    {
        $data = Request::json();
    }


    public static function logout()
    {
        $data = Request::json();
    }
}