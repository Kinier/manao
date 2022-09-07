<?php

// get /register
// get /login

use App\Router\Web;

use App\Controllers\UserController;
use App\Controllers\ErrorController;
$router = new Web();

$router->get('/login', UserController::class, 'loginPage');
$router->get('/register', UserController::class, 'registerPage');

$router->get('/nopage', ErrorController::class, 'noPage');


$router->done();