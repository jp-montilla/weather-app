<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\NearbyPlaceRequest;
use App\Interfaces\NearbyPlaceInterface;

class NearbyPlaceController extends Controller
{
    private $nearbyPlaceInterface;

    public function __construct(NearbyPlaceInterface $nearbyPlaceInterface)
    {
        $this->nearbyPlaceInterface = $nearbyPlaceInterface;
    }

    public function fetchNearbyPlace(NearbyPlaceRequest $request)
    {
        $nearbyPlace = $this->nearbyPlaceInterface->fetchNearbyPlace($request->city);

        return ApiResponseClass::sendResponse($nearbyPlace);
    }
}
