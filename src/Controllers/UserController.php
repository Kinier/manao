<?php

namespace App\Controllers;



use App\Helpers\Response;

class UserController{
    public static function loginPage()
    {
        Response::page('/login');
    }

    public static function registerPage()
    {
        Response::page('/register');
    }
}