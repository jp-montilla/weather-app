<?php

namespace App\Repositories;

use App\Helper\FourSquareResourceHelper;
use App\Interfaces\NearbyPlaceInterface;
use App\Services\GetExternalApiService;

class FourSquareRepository implements NearbyPlaceInterface
{
    private $getExternalApiService;

    private $fourSquareResourceHelper;

    public function __construct(
        GetExternalApiService $getExternalApiService,
        FourSquareResourceHelper $fourSquareResourceHelper
    )
    {
        $this->getExternalApiService = $getExternalApiService;
        $this->fourSquareResourceHelper = $fourSquareResourceHelper;
    }

    public function fetchNearbyPlace(string $city)
    {
        $apiUrl = config('constants.places_api_url').$city.'&limit=20';

        $header = [
            'Authorization' => config('constants.places_api_key')
        ];

        return $this->fourSquareResourceHelper
                    ->formatNearbyPlace(
                        $this->getExternalApiService->callThirdyPartyApi($apiUrl, $header)
                    );

        // return $this->getExternalApiService->callThirdyPartyApi($apiUrl, $header);
    }
}
