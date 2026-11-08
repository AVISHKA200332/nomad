<?php

namespace App\Controllers;

use App\Core\Controller;

class DestinationController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Destinations in Sri Lanka | The Lankan Nomad - Extended Stays',
            'metaDescription' => 'Find the Sri Lanka that feels right for you. Coastal communities, lively cities, misty hills, and historic landscapes across Colombo, South Coast, Ahangama, Kandy, Ella, and Cultural Triangle.',
            'activePage' => 'destinations',

            'hero' => [
                'eyebrow' => 'FIND YOUR REGION',
                'headline' => 'Find the Sri Lanka that feels right for you.',
                'lead' => "Coastal communities, lively cities, misty hills and historic landscapes—Sri Lanka offers different ways to experience everyday life.\n\nExplore the regions below and consider what matters most to you: climate, pace of life, transport, amenities, work needs or access to nature.",
                'cta' => 'Help Me Choose'
            ],

            'destinations' => [
                [
                    'num' => '01',
                    'name' => 'Colombo',
                    'headline' => 'Connected living, with the city at your doorstep.',
                    'desc' => 'Colombo offers a more urban side of Sri Lanka, with restaurants, cafés, shopping, business districts and a broad range of everyday amenities. Consider Colombo if you prefer city convenience, access to services and a busier environment.',
                    'lifestyleHighlights' => 'cafés, restaurants, shopping, urban neighbourhoods and city-based activities.',
                    'considerBefore' => 'traffic, neighbourhood differences, travel times and accommodation costs.',
                    'cta' => 'Enquire About Staying in Colombo',
                    'image' => 'assets/images/srilanka/colombo_skyline.jpg'
                ],
                [
                    'num' => '02',
                    'name' => 'Weligama & the South Coast',
                    'headline' => 'A coastal lifestyle with room to explore.',
                    'desc' => 'The South Coast is known for its beaches, coastal communities, surf culture, cafés and a laid-back atmosphere. Different towns offer different combinations of convenience, nightlife, quiet surroundings and access to the sea. Consider this region if you enjoy outdoor living and a coastal environment.',
                    'lifestyleHighlights' => 'beaches, surf, cafés, coastal walks and weekend exploration.',
                    'considerBefore' => 'seasonal conditions, transport, internet at the specific property and proximity to everyday essentials.',
                    'cta' => 'Explore the South Coast',
                    'image' => 'assets/images/srilanka/weligama_beach.jpg'
                ],
                [
                    'num' => '03',
                    'name' => 'Ahangama & Nearby Coastal Towns',
                    'headline' => 'Creative energy by the ocean.',
                    'desc' => 'Discover coastal communities with cafés, food spots, surf culture and a mix of quieter neighbourhoods and lively social spaces. The experience can vary by location and season, so consider your preferred balance of work, rest and social activities.',
                    'lifestyleHighlights' => 'coastal cafés, surfing, food and local experiences.',
                    'considerBefore' => 'distance to essential services, noise, transport and seasonal accommodation demand.',
                    'cta' => 'Enquire About the Coast',
                    'image' => 'assets/images/srilanka/ahangama_coast.jpg'
                ],
                [
                    'num' => '04',
                    'name' => 'Kandy',
                    'headline' => 'Green surroundings and cultural character.',
                    'desc' => 'Kandy offers a different pace from the coast, with surrounding hills, cultural landmarks, markets and access to other parts of the Central Province. Consider Kandy if you prefer a larger inland town and enjoy cultural experiences and scenic surroundings.',
                    'lifestyleHighlights' => 'cultural sites, local markets, green landscapes and regional travel.',
                    'considerBefore' => 'terrain, commuting requirements, weather and the facilities available in your preferred neighbourhood.',
                    'cta' => 'Discover Kandy',
                    'image' => 'assets/images/srilanka/kandy_temple.jpg'
                ],
                [
                    'num' => '05',
                    'name' => 'Ella',
                    'headline' => 'A slower rhythm among the hills.',
                    'desc' => 'Ella is surrounded by green hills, tea landscapes and scenic walking routes. It appeals to visitors seeking nature, mountain views and access to outdoor experiences.',
                    'lifestyleHighlights' => 'walking, viewpoints, tea-country scenery and day trips.',
                    'considerBefore' => 'availability of long-stay accommodation, local services, internet reliability and transport needs.',
                    'cta' => 'Explore Ella',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.jpg'
                ],
                [
                    'num' => '06',
                    'name' => 'The Cultural Triangle',
                    'headline' => "A deeper connection with Sri Lanka's heritage.",
                    'desc' => "Discover historic cities, archaeological landmarks, cultural traditions and rural landscapes in Sri Lanka's interior. This region may suit visitors who want to explore history and heritage or spend time in a quieter setting.",
                    'lifestyleHighlights' => 'heritage, cultural experiences, landscapes and regional exploration.',
                    'considerBefore' => 'transport, distance between attractions, access to daily amenities and the specific location of your accommodation.',
                    'cta' => 'Explore the Cultural Triangle',
                    'image' => 'assets/images/srilanka/sigiriya.jpg'
                ]
            ]
        ];

        $this->render('pages/destination', $data);
    }
}
