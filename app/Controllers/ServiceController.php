<?php

namespace App\Controllers;

use App\Core\Controller;

class ServiceController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Our Services | The Lankan Nomad - Extended Stays Made Easier',
            'metaDescription' => 'The practical side of living in Sri Lanka, made easier. Accommodation assistance, airport transfers, local transport, everyday living support, and remote-work planning.',
            'activePage' => 'services',

            'hero' => [
                'eyebrow' => 'THOUGHTFUL SERVICES FOR LONGER STAYS',
                'headline' => 'The practical side of living in Sri Lanka, made easier.',
                'lead' => "An extended stay involves more than choosing a destination. It's about finding the right place, understanding your options and organising the details that help everyday life run smoothly.\n\nExplore the services you may need before arrival and throughout your time in Sri Lanka.",
                'cta' => 'Tell Us What You Need'
            ],

            'services' => [
                [
                    'num' => '01',
                    'title' => 'Accommodation Assistance',
                    'tagline' => 'Find a place that fits your life.',
                    'desc' => 'Your accommodation shapes your entire experience. Whether you prefer a city apartment, a peaceful coastal home or a place surrounded by nature, start by identifying the location, facilities and lifestyle that matter most to you. We can help you explore suitable accommodation options, subject to availability and the arrangements offered by The Lankan Nomad.',
                    'infoList' => [
                        'Preferred region or neighbourhood',
                        'Length of stay',
                        'Private room, apartment or house',
                        'Furnishing and essential facilities',
                        'Internet and workspace needs',
                        'Budget and accessibility preferences'
                    ],
                    'cta' => 'Enquire About Accommodation',
                    'ctaParam' => 'Accommodation',
                    'image' => 'assets/images/srilanka/galle_fort.webp'
                ],
                [
                    'num' => '02',
                    'title' => 'Airport Pickup & Transfers',
                    'tagline' => 'Start your stay with a clearer arrival plan.',
                    'desc' => 'Arriving in a new country can be unfamiliar, especially after a long flight. Plan your journey from the airport to your accommodation before you travel. Where available, airport pickup and onward transfers can be arranged around your arrival details and destination.',
                    'infoList' => [
                        'Arrival date and time',
                        'Flight number, if available',
                        'Number of travellers',
                        'Luggage requirements',
                        'Final destination'
                    ],
                    'cta' => 'Enquire About Airport Transfers',
                    'ctaParam' => 'Airport pickup',
                    'image' => 'assets/images/srilanka/colombo_skyline.webp'
                ],
                [
                    'num' => '03',
                    'title' => 'Local Transport',
                    'tagline' => 'Find your way around.',
                    'desc' => 'From daily journeys to intercity travel, understanding local transport can help you choose what works for your lifestyle. Explore relevant transport options based on your destination, frequency of travel and personal preferences. Possible topics include local buses, trains, private transfers, taxis and other suitable transport arrangements.',
                    'infoList' => [
                        'Daily commuting versus weekend travel',
                        'Train routes and ticket reservation options',
                        'Verified driver hires and long-term vehicle rental advice',
                        'Tuk-tuk etiquette, meter rates and ride-hailing apps'
                    ],
                    'cta' => 'Explore Transport Options',
                    'ctaParam' => 'Local transport',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp'
                ],
                [
                    'num' => '04',
                    'title' => 'Everyday Living Support',
                    'tagline' => 'Settle in beyond the first day.',
                    'desc' => 'A longer stay means learning how everyday life works in a new place. Depending on the services available, we can help you identify useful local resources and understand practical arrangements relating to your accommodation and neighbourhood. Your priorities may include local shops, laundry, mobile connectivity, essential services, neighbourhood information and other everyday requirements.',
                    'infoList' => [
                        'SIM card activation and mobile data packages',
                        'Grocery markets, organic produce and bakeries',
                        'Healthcare facilities, pharmacies and emergency contacts',
                        'Laundry facilities, utilities and household maintenance'
                    ],
                    'cta' => 'Discuss Your Requirements',
                    'ctaParam' => 'Everyday living support',
                    'image' => 'assets/images/srilanka/ahangama_coast.webp'
                ],
                [
                    'num' => '05',
                    'title' => 'Travel & Local Experiences',
                    'tagline' => 'Explore more, at your own pace.',
                    'desc' => 'Use your longer stay to discover the island beyond the places you see on a typical holiday. Explore coastal towns, tea country, cultural landmarks, nature experiences, food and local traditions. Tell us what interests you so we can help you explore suitable options.',
                    'infoList' => [
                        'Coastal surf, diving and marine discovery',
                        'Highland tea trails, waterfalls and scenic trains',
                        'Heritage city exploration and temple etiquette guidance',
                        'Culinary workshops, market tours and authentic cooking'
                    ],
                    'cta' => 'Explore Experiences',
                    'ctaParam' => 'Travel and experiences',
                    'image' => 'assets/images/srilanka/sigiriya.webp'
                ],
                [
                    'num' => '06',
                    'title' => 'Remote-Work Support',
                    'tagline' => 'Build a routine that works wherever you are.',
                    'desc' => 'If you\'re working remotely, your daily environment matters. Think about internet reliability, suitable working areas, power access, quiet surroundings and access to cafés or coworking facilities. We can help you identify the questions to ask and explore suitable options where available. Internet speeds, workspace access and equipment should always be confirmed for the specific property or location.',
                    'infoList' => [
                        'Fiber optic line verification and backup 4G/5G dongles',
                        'Ergonomic seating and dedicated desk setups',
                        'Power backup and generator availability at selected properties',
                        'Nearby cafés, coliving lounges and coworking hubs'
                    ],
                    'cta' => 'Plan a Work-Friendly Stay',
                    'ctaParam' => 'Remote-work requirements',
                    'image' => 'assets/images/srilanka/weligama_beach.webp'
                ],
                [
                    'num' => '07',
                    'title' => 'Personalised Stay Planning',
                    'tagline' => 'One conversation. A clearer plan.',
                    'desc' => 'Not sure where to begin? Tell us about your intended stay, your budget, your preferred lifestyle and the support you need. We\'ll use that information to help you explore relevant arrangements and identify the next steps.',
                    'infoList' => [
                        'Customized relocation or extended stay consultation',
                        'Budget estimation covering living, transport and leisure',
                        'Region comparison based on season, work and vibe',
                        'Step-by-step checklist from pre-arrival to checkout'
                    ],
                    'cta' => 'Start Your Stay Enquiry',
                    'ctaParam' => 'Personalised stay planning',
                    'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp'
                ]
            ]
        ];

        $this->render('pages/services', $data);
    }
}

