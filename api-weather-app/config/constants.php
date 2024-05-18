<?php

return [
    'weather_third_party_api' => env('WEATHER_MAP_THIRD_PARTY_API', 'openweathermap'),
    'weather_api_url' => env('WEATHER_MAP_API_URL', 'https://api.openweathermap.org/data/2.5/forecast'),
    'weather_api_key' => env('WEATHER_MAP_API_KEY', '56643294a6d8f25134675e4a4bbac6a1'),

    'places_third_party_api' => env('PLACES_THIRD_PARTY_API', 'foursquare'),
    'places_api_url' => env('PLACES_API_URL', 'https://api.foursquare.com/v3/places/search?categories=4deefb944765f83613cdba6e&fields=fsq_id%2Cname%2Clocation%2Cchains%2Cdescription%2Cphotos&near='),
    'places_api_key' => env('PLACES_API_KEY', 'fsq3sDXaEzkRlw6GIs6qeNEUv2EbSNLTDtuWfuFyIcrz5eI='),
];