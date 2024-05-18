<?php

namespace App\Helper;

class FourSquareResourceHelper
{
    public function formatNearbyPlace(array $apiResult)
    {
        $nearbyPlaces = [];
        
        foreach ($apiResult['results'] as $place)
        {
            $nearbyPlaces[] = [
                'address' => $place['location']['formatted_address'],
                'categories' => $this->getCategoryTags($place['categories']),
                'fsq_id' => $place['fsq_id'],
                'name' => $place['name'],
                'photos' => $this->setPlacePhotoUrl($place['photos']),
            ];
        }

        return $nearbyPlaces;
    }

    private function getCategoryTags (array $categories)
    {
        $categoryTags = [];

        foreach ($categories as $category)
        {
            $categoryTags[] = $category['name'];
        }

        return $categoryTags;
    }

    private function setPlacePhotoUrl (array $photos)
    {
        $photoUrls = [];

        foreach ($photos as $photo)
        {
            $photoUrls[] = $photo['prefix'].'original'.$photo['suffix'];
        }

        return $photoUrls;
    }
}
