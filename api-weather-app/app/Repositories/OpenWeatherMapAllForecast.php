<?php

namespace App\Repositories;

use App\Interfaces\WeatherForecastInterface;

class OpenWeatherMapAllForecast extends OpenWeatherMapRepository implements WeatherForecastInterface
{
    public function fetchWeather(string $city)
    {
        $weatherList = parent::fetchWeather($city);
        
        return $this->getForecast($weatherList);
    }

    private function getForecast($weatherList)
    {
        $forecastList = [];
        
        foreach ($weatherList['list'] as $forecast)
        {
            $date = date('Y-m-j', strtotime($forecast['dt_txt']));

            $forecastList[$date][] = [
                'time' => date('ga', strtotime($forecast['dt_txt'])),
                'icon' => parent::getWeatherIcon($forecast['weather'][0]['icon']),
                'weather' => $forecast['weather'][0]['description'],
                'temperature' => $forecast['main']['temp'],
                'temperature_low' => $forecast['main']['temp_min'],
                'temperature_high' => $forecast['main']['temp_max'],
                'humidity' => $forecast['main']['humidity'],
                'wind' => $forecast['wind']['speed'],
                'gust' => $forecast['wind']['gust'],
            ];
        }

        return $forecastList;
    }
}
