<?php

namespace App\Services;

use App\Interfaces\WeatherForecastInterface;

class OpenWeatherMapApiService
{
    private $weatherForecastInterface;

    public function __construct(WeatherForecastInterface $weatherForecastInterface)
    {
        $this->weatherForecastInterface = $weatherForecastInterface;
    }

    public function getWeather($details)
    {
        return $this->weatherForecastInterface->fetch(
            $details, 
            config('constants.weather_api_url'), 
            config('constants.weather_api_key')
        );
    }
}
