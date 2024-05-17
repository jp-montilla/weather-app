<?php

namespace App\Repositories;

use App\Services\WeatherServiceApi;

class OpenWeatherMapRepository
{
    private $weatherServiceApi;

    public function __construct(WeatherServiceApi $weatherServiceApi)
    {
        $this->weatherServiceApi = $weatherServiceApi;
    }

    public function fetchWeather(string $city)
    {
        $apiUrl = config('constants.weather_api_url').'?q='.$city.'&units=metric&appId='.config('constants.weather_api_key');

        return $this->weatherServiceApi->fetchWeather($apiUrl);
    }
}
