<?php


use App\Router\Web;

use App\Controllers\UserController;


use App\Middleware\AjaxMiddleware;

use App\Controllers\Auth\AuthController;

$router = new Web();
$router->get('/', UserController::class, 'index');

$router->post('/login', AuthController::class, 'login', [
    'middlewareFunction' => "App\Middleware\AjaxMiddleware::isAjax"
]);

$router->post('/register', AuthController::class, 'register', [
    'middlewareFunction' => "App\Middleware\AjaxMiddleware::isAjax"
]);
$router->get('/logout', AuthController::class, 'logout');


$router->done();