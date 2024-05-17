<?php

namespace App\Repositories;

use App\Interfaces\WeatherForecastInterface;

class OpenWeatherMapSingleForecast extends OpenWeatherMapRepository implements WeatherForecastInterface
{
    public function fetchWeather(string $city)
    {
        $weatherList = parent::fetchWeather($city);
        
        return $weatherList;
    }

}
