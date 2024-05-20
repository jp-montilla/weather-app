<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Exceptions\HttpResponseException;

class GetExternalApiService
{
    public function callThirdyPartyApi(string $apiUrl, array $additionalHeaders = [])
    {
        $headers = [
            'Accept' => 'application/json',
        ];
        
        $headers = array_merge($headers, $additionalHeaders);

        $client = new Client();

        try
        {
            $response = $client->request('GET', $apiUrl, [
                'headers' => $headers,
            ]);
              
            $formattedResponse = json_decode($response->getBody(), true);
    
            return $formattedResponse;
        }
        catch (Exception $e)
        {
            $response = [
                'code' => 404,
                'message' => 'City not found',
            ];

            throw new HttpResponseException(response()->json($response, 500));
        }
    }
}
