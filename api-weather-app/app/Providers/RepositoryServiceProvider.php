<?php

namespace App\Providers;

use App\Interfaces\WeatherForecastInterface;
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
        if ($this->app->request->solo == 1 && $this->app->request->api == 'openWeatherMap') {
            $this->app->bind(WeatherForecastInterface::class, OpenWeatherMapSingleForecast::class);
        } else {
            $this->app->bind(WeatherForecastInterface::class, OpenWeatherMapAllForecast::class);
        }
    }
}
