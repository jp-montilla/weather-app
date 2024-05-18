<?php

use App\Http\Controllers\WeatherMapController;
use App\Http\Controllers\NearbyPlaceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/weather-forecast', [WeatherMapController::class, 'getWeather']);
Route::get('/nearby-place', [NearbyPlaceController::class, 'fetchNearbyPlace']);