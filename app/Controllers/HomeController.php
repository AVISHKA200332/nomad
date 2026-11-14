<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Nomad | Discover Extraordinary Travel Experiences',
            'metaDescription' => 'Explore unforgettable destinations, curated travel packages, and extraordinary adventures with nomad.',
            'activePage' => 'home',
            
            // Hero Data
            'hero' => [
                'title' => 'Live Sri Lanka, Your Way.',
                'desc' => 'Discover Sri Lanka beyond the destination. From accommodation to arrival and everyday living, The Lankan Nomad makes your extended stay effortless.',
                'tagline' => 'Make Sri Lanka your home away from home.',
                'cta' => 'Explore Stays',
                'ctaSecondary' => 'Plan Your Stay'
            ],

            // Statistics Data
            'stats' => [
                [
                    'number' => '1394+',
                    'label' => 'Successful Expeditions',
                    'highlight' => false
                ],
                [
                    'number' => '13K+',
                    'label' => 'Happy Adventurers',
                    'highlight' => true
                ],
                [
                    'number' => '130+',
                    'label' => 'Global Destinations',
                    'highlight' => false
                ]
            ],

            // Featured Destinations Data (Synced with Destinations Page)
            'destinations' => [
                [
                    'num' => '01',
                    'slug' => 'colombo',
                    'name' => 'Colombo',
                    'title' => 'Colombo Urban Living',
                    'rating' => '4.8',
                    'tag' => 'Urban & Coastal Capital',
                    'location' => 'Colombo, Western Province',
                    'headline' => 'Connected living, with the city at your doorstep.',
                    'image' => 'assets/images/srilanka/colombo_skyline.webp',
                    'desc' => 'Colombo offers a more urban side of Sri Lanka, with restaurants, cafés, shopping, business districts and everyday amenities.'
                ],
                [
                    'num' => '02',
                    'slug' => 'weligama',
                    'name' => 'Weligama & South Coast',
                    'title' => 'Weligama Coastal Haven',
                    'rating' => '4.9',
                    'tag' => 'Coastal Living & Surf',
                    'location' => 'Weligama, Southern Coast',
                    'headline' => 'A coastal lifestyle with room to explore.',
                    'image' => 'assets/images/srilanka/weligama_beach.webp',
                    'desc' => 'Known for its beaches, coastal communities, surf culture, cafés and a laid-back atmosphere with ocean breeze.'
                ],
                [
                    'num' => '03',
                    'slug' => 'ahangama',
                    'name' => 'Ahangama Coastal Towns',
                    'title' => 'Ahangama Ocean Community',
                    'rating' => '4.9',
                    'tag' => 'Creative Ocean Hub',
                    'location' => 'Ahangama, Southern Province',
                    'headline' => 'Creative energy by the ocean.',
                    'image' => 'assets/images/srilanka/ahangama_coast.webp',
                    'desc' => 'Coastal communities with cafés, food spots, surf culture and a mix of quieter neighbourhoods and social spaces.'
                ],
                [
                    'num' => '04',
                    'slug' => 'kandy',
                    'name' => 'Kandy Cultural Hills',
                    'title' => 'Kandy Highland Heritage',
                    'rating' => '4.7',
                    'tag' => 'Cultural Heartland',
                    'location' => 'Kandy, Central Province',
                    'headline' => 'Green surroundings and cultural character.',
                    'image' => 'assets/images/srilanka/kandy_temple.webp',
                    'desc' => 'Surrounding hills, sacred cultural landmarks, markets and access to other parts of the Central Province.'
                ],
                [
                    'num' => '05',
                    'slug' => 'ella',
                    'name' => 'Ella Mountain Rhythm',
                    'title' => 'Ella Tea Country Vista',
                    'rating' => '4.9',
                    'tag' => 'Highlands & Trails',
                    'location' => 'Ella, Badulla District',
                    'headline' => 'A slower rhythm among the hills.',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp',
                    'desc' => 'Green hills, mist-wrapped tea plantations, panoramic hiking routes and the famous Nine Arch Bridge.'
                ],
                [
                    'num' => '06',
                    'slug' => 'cultural-triangle',
                    'name' => 'The Cultural Triangle',
                    'title' => 'Cultural Triangle Citadels',
                    'rating' => '4.8',
                    'tag' => 'Ancient Citadels & History',
                    'location' => 'Sigiriya, Central Plains',
                    'headline' => "A deeper connection with Sri Lanka's heritage.",
                    'image' => 'assets/images/srilanka/sigiriya.webp',
                    'desc' => "Discover historic citadels, archaeological landmarks, cultural traditions and rural landscapes in Sri Lanka's interior."
                ]
            ],
            'destinationFilters' => [
                '01 Colombo',
                '02 South Coast',
                '03 Ahangama',
                '04 Kandy',
                '05 Ella',
                '06 Cultural Triangle'
            ],

            // Core Services Data (Synced with Our Services Page - Summary Cards)
            'homeServices' => [
                [
                    'num' => '01',
                    'title' => 'Accommodation Assistance',
                    'summary' => 'Explore verified coastal homes and city apartments suited to your workspace, rhythm, and budget.',
                    'actionText' => 'Learn More',
                    'rating' => '5.00',
                    'reviews' => '240',
                    'image' => 'assets/images/srilanka/galle_fort.webp',
                    'ctaParam' => 'Accommodation'
                ],
                [
                    'num' => '02',
                    'title' => 'Airport Pickup & Transfers',
                    'summary' => 'Private, air-conditioned transfers with flight tracking from Colombo Airport directly to your doorstep.',
                    'actionText' => 'Learn More',
                    'rating' => '4.95',
                    'reviews' => '380',
                    'image' => 'assets/images/srilanka/colombo_skyline.webp',
                    'ctaParam' => 'Airport pickup'
                ],
                [
                    'num' => '03',
                    'title' => 'Local Transport & Travel',
                    'summary' => 'Scenic train reservations, trusted private drivers, and vehicle rental guidance across the island.',
                    'actionText' => 'Learn More',
                    'rating' => '4.90',
                    'reviews' => '195',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp',
                    'ctaParam' => 'Local transport'
                ],
                [
                    'num' => '04',
                    'title' => 'Everyday Living Support',
                    'summary' => 'SIM card setup, local markets, trusted healthcare, utilities, and neighbourhood orientation.',
                    'actionText' => 'Learn More',
                    'rating' => '5.00',
                    'reviews' => '310',
                    'image' => 'assets/images/srilanka/ahangama_coast.webp',
                    'ctaParam' => 'Everyday living support'
                ],
                [
                    'num' => '05',
                    'title' => 'Remote-Work Support',
                    'summary' => 'Fiber-optic internet checks, power backup verification, and curated coliving and café hubs.',
                    'actionText' => 'Learn More',
                    'rating' => '4.98',
                    'reviews' => '220',
                    'image' => 'assets/images/srilanka/weligama_beach.webp',
                    'ctaParam' => 'Remote-work requirements'
                ],
                [
                    'num' => '06',
                    'title' => 'Travel & Local Experiences',
                    'summary' => 'Surf spots, highland tea trails, heritage citadels, and authentic local culinary workshops.',
                    'actionText' => 'Learn More',
                    'rating' => '5.00',
                    'reviews' => '450',
                    'image' => 'assets/images/srilanka/sigiriya.webp',
                    'ctaParam' => 'Travel and experiences'
                ]
            ],

            // Travel Planning Services Data (Synced with Our Services Page)
            'services' => [
                [
                    'number' => '01',
                    'title' => 'Accommodation Assistance',
                    'tagline' => 'Find a place that fits your life.',
                    'desc' => 'Your accommodation shapes your entire experience. Whether you prefer a city apartment, a peaceful coastal home or a place surrounded by nature, start by identifying the location, facilities and lifestyle that matter most to you.',
                    'image' => 'assets/images/srilanka/galle_fort.webp',
                    'ctaParam' => 'Accommodation',
                    'cta' => 'Enquire About Accommodation'
                ],
                [
                    'number' => '02',
                    'title' => 'Airport Pickup & Transfers',
                    'tagline' => 'Start your stay with a clearer arrival plan.',
                    'desc' => 'Arriving in a new country can be unfamiliar, especially after a long flight. Plan your journey from the airport to your accommodation before you travel with private, air-conditioned transfers.',
                    'image' => 'assets/images/srilanka/colombo_skyline.webp',
                    'ctaParam' => 'Airport pickup',
                    'cta' => 'Enquire About Airport Transfers'
                ],
                [
                    'number' => '03',
                    'title' => 'Local Transport',
                    'tagline' => 'Find your way around.',
                    'desc' => 'From daily journeys to intercity travel, explore relevant transport options including scenic train routes, verified private drivers, and vehicle rental guidance across Sri Lanka.',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp',
                    'ctaParam' => 'Local transport',
                    'cta' => 'Explore Transport Options'
                ],
                [
                    'number' => '04',
                    'title' => 'Everyday Living Support',
                    'tagline' => 'Settle in beyond the first day.',
                    'desc' => 'A longer stay means learning how everyday life works in a new place. We help you identify useful local resources from SIM cards and grocery markets to trusted healthcare and utilities.',
                    'image' => 'assets/images/srilanka/ahangama_coast.webp',
                    'ctaParam' => 'Everyday living support',
                    'cta' => 'Discuss Your Requirements'
                ],
                [
                    'number' => '05',
                    'title' => 'Travel & Local Experiences',
                    'tagline' => 'Explore more, at your own pace.',
                    'desc' => 'Discover coastal surf spots, highland tea trails, ancient citadels, wildlife reserves, and authentic local culinary workshops tailored around your interests.',
                    'image' => 'assets/images/srilanka/sigiriya.webp',
                    'ctaParam' => 'Travel and experiences',
                    'cta' => 'Explore Experiences'
                ],
                [
                    'number' => '06',
                    'title' => 'Remote-Work Support',
                    'tagline' => 'Build a routine that works wherever you are.',
                    'desc' => 'If you\'re working remotely, your daily environment matters. Fiber-optic internet verification, power backup availability, and curated coliving and café hubs.',
                    'image' => 'assets/images/srilanka/weligama_beach.webp',
                    'ctaParam' => 'Remote-work requirements',
                    'cta' => 'Plan a Work-Friendly Stay'
                ],
                [
                    'number' => '07',
                    'title' => 'Personalised Stay Planning',
                    'tagline' => 'One conversation. A clearer plan.',
                    'desc' => 'Not sure where to begin? Tell us about your intended stay, your budget, your preferred lifestyle and the support you need to build a step-by-step plan.',
                    'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp',
                    'ctaParam' => 'Personalised stay planning',
                    'cta' => 'Start Your Stay Enquiry'
                ]
            ],

            // Journey Experience Categories Data (Synced with Experiences Page)
            'experiences' => [
                [
                    'badge' => 'Card 01',
                    'title' => 'Coastal Life',
                    'desc' => "Explore coastal towns, ocean views, morning surf breaks, and the vibrant seaside communities along Sri Lanka's south coast.",
                    'image' => 'assets/images/srilanka/weligama_beach.webp'
                ],
                [
                    'badge' => 'Card 02',
                    'title' => 'Food & Flavours',
                    'desc' => "Discover clay-pot rice and curry, hoppers, tropical fruits, Ceylon high-grown tea culture, and bustling local markets.",
                    'image' => 'assets/images/srilanka/srilankan_cuisine.webp'
                ],
                [
                    'badge' => 'Card 03',
                    'title' => 'Nature & Outdoors',
                    'desc' => 'Discover scenic mountain trails, rainforest waterfalls, tea landscapes, national parks, and ethical wildlife encounters.',
                    'image' => 'assets/images/srilanka/yala_wildlife.webp'
                ],
                [
                    'badge' => 'Card 04',
                    'title' => 'Culture & Heritage',
                    'desc' => "Experience historic architecture, ancient UNESCO citadels, sacred temples, craft traditions, and local artisan workshops.",
                    'image' => 'assets/images/srilanka/sigiriya.webp'
                ],
                [
                    'badge' => 'Card 05',
                    'title' => 'Weekend Escapes',
                    'desc' => 'Take scenic highland rail journeys, explore colonial ramparts in Galle, and escape into quiet mist-wrapped mountain valleys.',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp'
                ],
                [
                    'badge' => 'Card 06',
                    'title' => 'Highland Tea Country',
                    'desc' => 'Wander through emerald tea plantations, cloud-draped mountain passes, cascading falls, and colonial heritage bungalows.',
                    'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp'
                ]
            ],

            // Blue Feature Section Data
            'blueFeatures' => [
                [
                    'title' => 'All-Inclusive Precision',
                    'desc' => 'From helicopter transfers to private permits, every detail is orchestrated with obsessive care.'
                ],
                [
                    'title' => 'Certified Expert Guides',
                    'desc' => 'Our expedition leaders bring decades of wilderness mastery and deep local heritage.'
                ],
                [
                    'title' => '24/7 Dedicated Concierge',
                    'desc' => 'Direct round-the-clock support at every step of your international voyage.'
                ]
            ],

            // Curated Gallery Moments (Auto Change Carousel - Matched to Reference Screenshot)
            'galleryMoments' => [
                [
                    'title' => 'Nine Arch Mountain Rail',
                    'tag' => 'Adventure',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp'
                ],
                [
                    'title' => 'South Coast Surf Rhythm',
                    'tag' => 'Coastal Life',
                    'image' => 'assets/images/srilanka/weligama_beach.webp'
                ],
                [
                    'title' => 'Sigiriya Ancient Citadel',
                    'tag' => 'Heritage',
                    'image' => 'assets/images/srilanka/sigiriya.webp'
                ],
                [
                    'title' => 'Highland Tea Trails',
                    'tag' => 'Highlands',
                    'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp'
                ],
                [
                    'title' => 'Wilderness Safari & Nature',
                    'tag' => 'Wildlife',
                    'image' => 'assets/images/srilanka/yala_wildlife.webp'
                ],
                [
                    'title' => 'Historic Galle Fort',
                    'tag' => 'Culture',
                    'image' => 'assets/images/srilanka/galle_fort.webp'
                ],
                [
                    'title' => 'Ahangama Coastline',
                    'tag' => 'Relaxation',
                    'image' => 'assets/images/srilanka/ahangama_coast.webp'
                ]
            ],

            // Testimonial Feature Data (Synced with Reference Design)
            'testimonials' => [
                [
                    'quote' => '“The Lankan Nomad helped us plan a stay that felt personal from the first day. The accommodation, pacing, and private experiences were exactly what we wanted. Their local insight made our time in Sri Lanka effortless, connecting us with authentic communities across the island.”',
                    'author' => 'Patric Stone',
                    'role' => 'Traveller',
                    'image' => 'assets/images/srilanka/ahangama_coast.webp'
                ],
                [
                    'quote' => '“Moving to Sri Lanka for three months seemed daunting until we connected with The Lankan Nomad. From fiber-optic internet checks to finding our beach house in Ahangama and setting up our transport, everything was seamless.”',
                    'author' => 'Elena Rostova',
                    'role' => 'Digital Nomad',
                    'image' => 'assets/images/srilanka/galle_fort.webp'
                ],
                [
                    'quote' => '“Every journey with them feels respectful and grounded. We took the scenic hill trains, stayed near UNESCO citadels, and explored local food spots we never would have found on our own.”',
                    'author' => 'Marcus Vance',
                    'role' => 'Long-Stay Resident',
                    'image' => 'assets/images/srilanka/nuwara_eliya_tea.webp'
                ]
            ],
            'testimonial' => [
                'quote' => '“The Lankan Nomad helped us plan a stay that felt personal from the first day. The accommodation, pacing, and private experiences were exactly what we wanted. Their local insight made our time in Sri Lanka effortless, connecting us with authentic communities across the island.”',
                'author' => 'Patric Stone',
                'role' => 'Traveller',
                'location' => 'United Kingdom',
                'image' => 'assets/images/srilanka/ahangama_coast.webp'
            ],

            // FAQ Data (Matched to Reference Screenshot)
            'faqs' => [
                [
                    'q' => 'Do I need to choose a destination first?',
                    'a' => 'No, you do not need to know your destination before contacting us. Share your travel style, budget, preferred dates, and the type of experience you want, and we will help you find the best destination options.'
                ],
                [
                    'q' => 'Can travel packages be customized?',
                    'a' => 'Yes, every journey and stay is completely customized. We modify daily paces, accommodation tiers, private excursions, and transportation according to your wishes.'
                ],
                [
                    'q' => 'Do you plan honeymoons and private trips?',
                    'a' => 'Absolutely. We specialize in intimate, bespoke travel arrangements, honeymoon getaways, and private island retreats with personalized service.'
                ],
                [
                    'q' => 'How does pricing work?',
                    'a' => 'We provide clear, transparent pricing based on the services you need, your accommodation preferences, length of stay, and transport requirements with no hidden fees.'
                ],
                [
                    'q' => 'What support do you provide during our stay?',
                    'a' => 'From pre-arrival preparation and airport pickup to ongoing everyday living advice, local SIM setups, and dedicated concierge assistance, we provide continuous on-the-ground support.'
                ]
            ]
        ];

        $this->render('pages/home', $data);
    }
}
