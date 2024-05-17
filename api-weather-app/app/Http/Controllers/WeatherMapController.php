<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Interfaces\WeatherForecastInterface;
use Illuminate\Http\Request;

class WeatherMapController extends Controller
{
    private $weatherForecastInterface;

    public function __construct(WeatherForecastInterface $weatherForecastInterface)
    {
        $this->weatherForecastInterface = $weatherForecastInterface;
    }


    public function getWeather(Request $request)
    {
        $weather = $this->weatherForecastInterface->fetchWeather($request->city);

        return ApiResponseClass::sendResponse($weather);
    }


}
