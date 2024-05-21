<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Interfaces\PopularDestinationInterface;
use Illuminate\Http\Request;

class PopularDestinationController extends Controller
{
    private $popularDestinationInterface;

    public function __construct(PopularDestinationInterface $popularDestinationInterface)
    {
        $this->popularDestinationInterface = $popularDestinationInterface;
    }

    public function fetchPopularDestination()
    {
        $popularDestinations = $this->popularDestinationInterface->fetchPopularDestination();

        return ApiResponseClass::sendResponse($popularDestinations);
    }
}
