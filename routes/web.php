<?php

// get /register
// get /login

use App\Router\Web;

use App\Controllers\UserController;
use App\Controllers\ErrorController;


use App\Controllers\Auth\AuthController;
$router = new Web();
$router->get('/', UserController::class, 'index');

$router->post('/login', AuthController::class, 'login');
$router->post('/register', AuthController::class, 'register');

$router->get('/nopage', ErrorController::class, 'noPage');


$router->done();