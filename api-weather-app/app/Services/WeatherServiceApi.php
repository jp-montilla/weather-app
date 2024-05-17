<?php

namespace App\Services;

use App\Interfaces\WeatherForecastInterface;
use Illuminate\Support\Facades\Http;

class WeatherServiceApi
{
    public function fetchWeather(string $apiUrl, array $additionalHeaders = [])
    {
        $headers = [
            'Accept' => 'application/json',
        ];

        $headers = array_merge($headers, $additionalHeaders);

        $response = Http::withHeaders([$headers])->get($apiUrl);

        $weatherList = json_decode($response->body(), true);

        return $weatherList;
    }
}
