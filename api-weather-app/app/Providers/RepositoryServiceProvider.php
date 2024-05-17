<?php

namespace App\Providers;

use App\Interfaces\WeatherForecastInterface;
use App\Repositories\AllWeatherForecastRepository;
use App\Repositories\SingleWeatherForecastRepository;
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
        if ($this->app->request->solo == 1) {
            $this->app->bind(WeatherForecastInterface::class, SingleWeatherForecastRepository::class);
        } else {
            $this->app->bind(WeatherForecastInterface::class, AllWeatherForecastRepository::class);
        }
    }
}
