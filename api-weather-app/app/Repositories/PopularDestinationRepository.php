<?php

namespace App\Repositories;

use App\Interfaces\PopularDestinationInterface;
use App\Services\GetExternalApiService;
use Illuminate\Support\Facades\DB;

class PopularDestinationRepository implements PopularDestinationInterface
{
    private $getExternalApiService;


    public function __construct(GetExternalApiService $getExternalApiService)
    {
        $this->getExternalApiService = $getExternalApiService;
    }

    public function fetchPopularDestination()
    {
        return DB::table('cities')->get();
    }
}
