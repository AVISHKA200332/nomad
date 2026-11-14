<?php

namespace App\Controllers;

use App\Core\Controller;

class DestinationController extends Controller
{
    public function index(): void
    {
        $destinations = [
            [
                'id' => 1,
                'title' => 'Weligama Beach Villa Retreat',
                'location' => 'Weligama, Southern Coast',
                'region' => 'south-coast',
                'rating' => '4.9',
                'image' => 'assets/images/srilanka/weligama_beach.webp',
            ],
            [
                'id' => 2,
                'title' => 'Ella Highland Nine Arch Trek',
                'location' => 'Ella, Central Highlands',
                'region' => 'highlands',
                'rating' => '4.9',
                'image' => 'assets/images/srilanka/nine_arch_bridge.webp',
            ],
            [
                'id' => 3,
                'title' => 'Ahangama Ocean Nomad Haven',
                'location' => 'Ahangama, Southern Coast',
                'region' => 'south-coast',
                'rating' => '4.8',
                'image' => 'assets/images/srilanka/ahangama_coast.webp',
            ],
            [
                'id' => 4,
                'title' => 'Sigiriya Lion Rock Citadel',
                'location' => 'Sigiriya, Cultural Triangle',
                'region' => 'cultural-triangle',
                'rating' => '4.9',
                'image' => 'assets/images/srilanka/sigiriya.webp',
            ],
            [
                'id' => 5,
                'title' => 'Nuwara Eliya Tea Country Estate',
                'location' => 'Nuwara Eliya, Highlands',
                'region' => 'highlands',
                'rating' => '4.8',
                'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp',
            ],
            [
                'id' => 6,
                'title' => 'Galle Fort Colonial Walk',
                'location' => 'Galle, Southern Coast',
                'region' => 'south-coast',
                'rating' => '4.9',
                'image' => 'assets/images/srilanka/galle_fort.webp',
            ],
            [
                'id' => 7,
                'title' => 'Colombo Marina Urban Residence',
                'location' => 'Colombo, Western Province',
                'region' => 'colombo',
                'rating' => '4.7',
                'image' => 'assets/images/srilanka/colombo_skyline.webp',
            ],
            [
                'id' => 8,
                'title' => 'Yala Leopard Safari Expedition',
                'location' => 'Yala National Park, South Coast',
                'region' => 'south-coast',
                'rating' => '4.9',
                'image' => 'assets/images/srilanka/yala_wildlife.webp',
            ],
            [
                'id' => 9,
                'title' => 'Kandy Sacred Hills Sanctuary',
                'location' => 'Kandy, Cultural Triangle',
                'region' => 'cultural-triangle',
                'rating' => '4.8',
                'image' => 'assets/images/srilanka/kandy_temple.webp',
            ],
            [
                'id' => 10,
                'title' => 'Mirissa Coral Coast Cruise',
                'location' => 'Mirissa, Southern Coast',
                'region' => 'south-coast',
                'rating' => '4.8',
                'image' => 'assets/images/srilanka/weligama_beach.webp',
            ],
            [
                'id' => 11,
                'title' => 'Dambulla Rock Cave Retreat',
                'location' => 'Dambulla, Cultural Triangle',
                'region' => 'cultural-triangle',
                'rating' => '4.8',
                'image' => 'assets/images/srilanka/sigiriya.webp',
            ],
            [
                'id' => 12,
                'title' => 'Haputale Misty Ridge Sanctuary',
                'location' => 'Haputale, Central Highlands',
                'region' => 'highlands',
                'rating' => '4.9',
                'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp',
            ],
        ];

        $filters = [
            ['id' => 'all', 'label' => 'All'],
            ['id' => 'south-coast', 'label' => 'South Coast'],
            ['id' => 'highlands', 'label' => 'Highlands'],
            ['id' => 'cultural-triangle', 'label' => 'Cultural Triangle'],
            ['id' => 'colombo', 'label' => 'Colombo & West']
        ];

        $data = [
            'metaTitle' => 'Explore All Sri Lankan Destinations | The Lankan Nomad',
            'metaDescription' => 'Browse handpicked destinations across Sri Lanka: South Coast, Central Highlands, Cultural Triangle, and Colombo.',
            'activePage' => 'destinations',
            'destinations' => $destinations,
            'filters' => $filters
        ];

        $this->render('pages/destination', $data);
    }
}
