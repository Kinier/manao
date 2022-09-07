<?php

namespace App\Controllers;



use App\Helpers\Response;

class UserController{
    public static function index()
    {
        Response::page('index');
    }
}