<?php

use App\Http\Controllers\WeatherMapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/openweather', [WeatherMapController::class, 'getWeather']);