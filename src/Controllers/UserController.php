<?php

namespace App\Controllers;

use App\DataMappers\UserDataCrudMapper;

use App\Helpers\Request;
use App\Helpers\Response;

class UserController
{
    public static function index()
    {
        Response::page('index');
    }
}