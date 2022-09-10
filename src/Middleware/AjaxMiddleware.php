<?php
namespace App\Middleware;
use App\Helpers\Response;
class AjaxMiddleware{
    public static function isAjax()
    {
        if ( $_SERVER['HTTP_X_REQUESTED_WITH'] !== "XMLHttpRequest"){
            Response::jsonError('ajax', "This is not ajax request");
        };
    }
}