<?php

namespace App\Repositories;

use App\Interfaces\WeatherForecastInterface;

class AllWeatherForecastRepository extends WeatherMapRepository implements WeatherForecastInterface
{
    public function fetch(array $data, string $url, string $apiKey)
    {
        dd('all');
        // $weatherList = parent::fetch($data, $url, $apiKey);
        
        // return $weatherList;
    }
}
