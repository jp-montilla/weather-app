<?php

namespace App\Providers;

use App\Interfaces\NearbyPlaceInterface;
use App\Interfaces\WeatherForecastInterface;
use App\Repositories\FourSquareRepository;
use App\Repositories\OpenWeatherMapSingleForecast;
use App\Repositories\OpenWeatherMapAllForecast;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->request->solo == 1 && config('constants.weather_third_party_api') == 'openweathermap') {
            $this->app->bind(WeatherForecastInterface::class, OpenWeatherMapSingleForecast::class);
        } else {
            $this->app->bind(WeatherForecastInterface::class, OpenWeatherMapAllForecast::class);
        }
        
        if (config('constants.places_third_party_api') == 'fourSquare') {
            $this->app->bind(NearbyPlaceInterface::class, FourSquareRepository::class);
        }
    }
}
