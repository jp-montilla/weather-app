<?php

namespace App\Http\Controllers;

use App\Services\OpenWeatherMapApiService;
use Illuminate\Http\Request;

class WeatherMapController extends Controller
{
    private $openWeatherMapApiService;

    public function __construct(OpenWeatherMapApiService $openWeatherMapApiService)
    {
        $this->openWeatherMapApiService = $openWeatherMapApiService;
    }

    public function getWeather(Request $request)
    {
        $details = [
            'city' => $request->city,
            'solo' => $request->solo
        ];

        $weather = $this->openWeatherMapApiService->getWeather($details);

        return $weather;
    }


}
