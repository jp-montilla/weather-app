<?php

namespace App\Interfaces;

interface NearbyPlaceInterface
{
    public function fetchNearbyPlace(string $city);
}
