<?php

namespace App\Helpers;

class Request{
    /**
     * uses json data from request
     * @return array ASSOCIATIVE ARRAY CONVERTED FROM JSON REQUEST
     * just because i prefer to get associative array always)
     */
    public static function json(): array
    {
        $data = json_decode(file_get_contents('php://input'), true);
        return $data;
    }
}