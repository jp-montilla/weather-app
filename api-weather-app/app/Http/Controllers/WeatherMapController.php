<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\WeatherForecastRequest;
use App\Interfaces\WeatherForecastInterface;

class WeatherMapController extends Controller
{
    private $weatherForecastInterface;

    public function __construct(WeatherForecastInterface $weatherForecastInterface)
    {
        $this->weatherForecastInterface = $weatherForecastInterface;
    }


    public function getWeather(WeatherForecastRequest $request)
    {
        $weather = $this->weatherForecastInterface->fetchWeather($request->city);

        return ApiResponseClass::sendResponse($weather);
    }
}
