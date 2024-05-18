<?php

namespace App\Services;

use App\Interfaces\WeatherForecastInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class GetExternalApiService
{
    public function callThirdyPartyApi(string $apiUrl, array $additionalHeaders = [])
    {
        $headers = [
            'Accept' => 'application/json',
        ];
        
        $headers = array_merge($headers, $additionalHeaders);

        $client = new Client();
        $response = $client->request('GET', $apiUrl, [
            'headers' => $headers,
        ]);
          
        $formattedResponse = json_decode($response->getBody(), true);

        return $formattedResponse;
    }
}
