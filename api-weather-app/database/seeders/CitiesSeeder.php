<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = [
            [
                'city' => 'Tokyo',
                'image_url' => 'https://wallpapers.com/images/featured/tokyo-dxva6ho3h8x6m3xb.jpg',
                'image_alt' => 'Tokyo image',
                'action' => 'Explore',
            ],
            [
                'city' => 'Yokohama',
                'image_url' => 'https://images6.alphacoders.com/386/386844.jpg',
                'image_alt' => 'Yokohama image',
                'action' => 'Uncover',
            ],
            [
                'city' => 'Kyoto',
                'image_url' => 'https://4kwallpapers.com/images/walls/thumbs_3t/4319.jpg',
                'image_alt' => 'Kyoto image',
                'action' => 'Discover',
            ],
            [
                'city' => 'Osaka',
                'image_url' => 'https://images4.alphacoders.com/596/596229.jpg',
                'image_alt' => 'Osaka image',
                'action' => 'Relax',
            ],
            [
                'city' => 'Sapporo',
                'image_url' => 'https://images6.alphacoders.com/107/1076870.jpg',
                'image_alt' => 'Sapporo image',
                'action' => 'Wonder',
            ],
            [
                'city' => 'Nagoya',
                'image_url' => 'https://wallpapers.com/images/hd/nagoya-osawari-castle-3xqzwhxaautsss95.jpg',
                'image_alt' => 'Nagoya image',
                'action' => 'Adventure',
            ],
        ];

        DB::table('cities')->insert($insert);
    }
}
