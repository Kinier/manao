<?php

namespace App\Helpers;
use App\Helpers\Response;

class Validator{
    public static function validateRegister($data)
    {
        $registerInputs = [
            'name',
            'email',
            'password',
            'confirm_password',
            'login',
        ];
        foreach ($registerInputs as $key => $name){
            if (!key_exists($name, $data) or $data[$name] == ''){
               Response::jsonError($name, 'doesnt exist');
            }



            if ($name === 'login'){
                if (mb_strlen($data[$name]) < 6){
                    Response::jsonError($name, 'minimum is 6 symbols');
                }
            }

            if ($name === 'email'){

                if (!filter_var($data[$name], FILTER_VALIDATE_EMAIL)) {
                    Response::jsonError($name, 'email is not valid');
                }
            }

            if ($name === 'password'){
                if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/m", $data[$name])){
                    Response::jsonError($name, "Password must be minimum 6 characters, contain minimum 1 letter and 1 number");
                };
            }


            if ($name === 'confirm_password'){
                if ($data[$name] !== $data['password']){
                    Response::jsonError($name, "Passwords should be the same");
                };
            }

            if ($name === 'name'){ // валидация 2 символа, только буквы it says on the first page
                if (!preg_match("/^[a-zA-Z]{2}$/m", $data[$name])){
                    Response::jsonError($name, 'shuold be 2 characters, only letters');
                }
            }


        }


    }

    public static function validateLogin($data)
    {
        $loginInputs = [

            'password',

            'login',
        ];
        foreach ($loginInputs as $key => $name){
            if (!key_exists($name, $data) or $data[$name] == ''){
                Response::jsonError($name, 'doesnt exist');
            }



            if ($name === 'login'){
                if (mb_strlen($data[$name]) < 6){
                    Response::jsonError($name, 'minimum is 6 symbols');
                }
            }

            if ($name === 'password'){
                if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/m", $data[$name])){
                    Response::jsonError($name, "Password must be minimum 6 characters, contain minimum 1 letter and 1 number");
                };
            }




        }
    }
}