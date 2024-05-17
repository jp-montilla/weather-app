<?php

namespace App\Repositories;

use App\Interfaces\WeatherForecastInterface;

class OpenWeatherMapSingleForecast extends OpenWeatherMapRepository implements WeatherForecastInterface
{
    public function fetchWeather(string $city)
    {
        $weatherList = parent::fetchWeather($city);

        return $this->getSingleForecast($weatherList);
    }

    private function getSingleForecast($weatherList)
    {
        $singleForecastList = [];
        
        foreach ($weatherList['list'] as $forecast)
        {
            $date = date('Y-m-j', strtotime($forecast['dt_txt']));
            
            if (!array_key_exists($date, $singleForecastList)) 
            {
                $singleForecastList[$date] = [
                    'date' => date('l m/j', strtotime($forecast['dt_txt'])),
                    'icon' => parent::getWeatherIcon($forecast['weather'][0]['icon']),
                    'temperature' => $forecast['main']['temp'],
                    'weather' => $forecast['weather'][0]['description'],
                ];
            }

            if (count($singleForecastList) == 5) break;
        }
        
        return $singleForecastList;
    }
}
