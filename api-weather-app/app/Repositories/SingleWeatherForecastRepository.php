<?php

namespace App\Repositories;

use App\Interfaces\WeatherForecastInterface;

class SingleWeatherForecastRepository extends WeatherMapRepository implements WeatherForecastInterface
{
    public function fetch(array $data, string $url, string $apiKey)
    {
        dd('solo');
        // $weatherList = parent::fetch($data, $url, $apiKey);
        // return $weatherList;
    }
}
