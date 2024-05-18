<?php

namespace App\Repositories;

use App\Services\GetExternalApiService;

class FourSquareRepository
{
    private $getExternalApiService;

    public function __construct(GetExternalApiService $getExternalApiService)
    {
        $this->getExternalApiService = $getExternalApiService;
    }

    public function fetchNearbyPlace(string $city)
    {
        $apiUrl = config('constants.places_api_url').$city.'&limit=10';

        $header = [
            'Authorization' => config('constants.places_api_key')
        ];

        return $this->getExternalApiService->callThirdyPartyApi($apiUrl, $header);
    }
}