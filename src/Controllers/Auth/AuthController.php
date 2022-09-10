<?php

namespace App\Controllers\Auth;
use App\DataMappers\UserDataCrudMapper;
use App\Helpers\Request;
use App\Helpers\Response;
use App\Helpers\Validator;
class AuthController{
    public static function login()
    {
        $data = Request::json();

        $userMapper = new UserDataCrudMapper();
        $users = $userMapper->findAll();




        Validator::validateLogin($data);
        $salt = "SAAAAAALTHEHE";
        $data['password'] = md5($salt. $data['password']);

        foreach ($users as $user){
            if ($user['login'] === $data['login']) {
                if ($user['password'] === $data['password']) {
                    $_SESSION['user']['email'] = $data['email'];
                    $_SESSION['user']['login'] = $data['login'];
                    $_SESSION['user']['name'] = $user['name'];
                    Response::jsonOK(["name"=>$user['login']]);
                } else {
                    Response::jsonError('password', "this password is not for that account");
                }
            }
        }

            Response::jsonError('login', "User with such login doesnt exist"); // todo mb change smth



    }

    public static function register()
    {
        $data = Request::json();

        $userMapper = new UserDataCrudMapper();
        $users = $userMapper->findAll();

        Validator::validateRegister($data);
        $salt = "SAAAAAALTHEHE"; // про динамическую соль ни слова не было))

        foreach ($users as $user){
            if ($user->email === $data['email']){
                Response::jsonError('email', 'already exists');
            }
            if ($user->login === $data['login']){
                Response::jsonError('login', 'already exists');
            }
        }
        $data['password'] = md5($salt .$data['password']);
        unset($data['confirm_password']);


        $userMapper->create($data);
        $_SESSION['user']['email'] = $data['email'];
        $_SESSION['user']['login'] = $data['login'];
        $_SESSION['user']['name'] = $data['name'];
        Response::jsonOK(["name"=>$data['name']]);
    }


    public static function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
            header("Location: /");
        }
    }
}