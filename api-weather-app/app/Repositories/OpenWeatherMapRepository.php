<?php

namespace App\Repositories;

use App\Services\GetExternalApiService;

class OpenWeatherMapRepository
{
    private $getExternalApiService;


    public function __construct(GetExternalApiService $getExternalApiService)
    {
        $this->getExternalApiService = $getExternalApiService;
    }

    public function fetchWeather(string $city)
    {
        $apiUrl = config('constants.weather_api_url').'?q='.$city.'&units=metric&appId='.config('constants.weather_api_key');

        return $this->getExternalApiService->callThirdyPartyApi($apiUrl);
    }

    protected function getWeatherIcon(string $icon)
    {
        return 'https://openweathermap.org/img/wn/'.$icon.'.png';
    }
}
