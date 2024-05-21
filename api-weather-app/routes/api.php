<?php

use App\Http\Controllers\WeatherMapController;
use App\Http\Controllers\NearbyPlaceController;
use App\Http\Controllers\PopularDestinationController;
use Illuminate\Support\Facades\Route;

Route::get('/weather-forecast', [WeatherMapController::class, 'getWeather']);
Route::get('/nearby-place', [NearbyPlaceController::class, 'fetchNearbyPlace']);
Route::get('/popular-destinations', [PopularDestinationController::class, 'fetchPopularDestination']);