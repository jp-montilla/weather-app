<?php

namespace App\Classes;

class ApiResponseClass
{
    public static function sendResponse($result, $code = 200) 
    {
        $response = [
            'success' => true,
            'data'    => $result
        ];

        return response()->json($response, $code);
    }
}
