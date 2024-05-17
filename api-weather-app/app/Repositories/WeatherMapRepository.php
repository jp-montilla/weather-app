<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class WeatherMapRepository
{
    public function fetch(array $data, string $url, string $apiKey)
    {
        $response = Http::get($url.'?q='.$data['city'].'&units=metric&appId='.$apiKey);

        $weatherList = json_decode($response->body(), true);

        return $weatherList;
    }
}
