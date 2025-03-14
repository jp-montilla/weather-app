<?php

namespace App\Exceptions;

class CityNotFoundException extends CustomException
{
    public static function cityNotFound()
    {
        dd("here");
        return new self('City not found!', 403);
    }
}
