<?php

namespace App\Interfaces;

interface WeatherForecastInterface
{
    public function fetch(array $data, string $url, string $apiKey);
}
