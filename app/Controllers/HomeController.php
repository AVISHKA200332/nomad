<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'The Lankan Nomad | Live Sri Lanka, Your Way',
            'metaDescription' => 'Discover a more effortless way to experience Sri Lanka. Extended stays, accommodation, arrival assistance, and local living support.',
            'activePage' => 'home',

            // 2. Hero Section
            'hero' => [
                'eyebrow' => 'YOUR NEXT CHAPTER STARTS HERE',
                'headline' => 'Live Sri Lanka, Your Way.',
                'lead' => "Discover a more effortless way to experience Sri Lanka. From finding your place to stay to arranging your arrival and settling into everyday life, The Lankan Nomad helps you plan an extended stay that feels right for you.\n\nWhether you're here for three months, six months or a year, make Sri Lanka more than a destination. Make it your home away from home.",
                'ctaPlan' => 'Plan Your Stay',
                'ctaExplore' => 'Explore Sri Lanka',
                'supportingLine' => 'Longer stays. Local experiences. A more personal way to discover Sri Lanka.'
            ],

            // 3. Introductory Section
            'intro' => [
                'eyebrow' => 'A DIFFERENT WAY TO EXPERIENCE SRI LANKA',
                'headline' => 'Come for the experience. Stay for the lifestyle.',
                'lead' => 'Some places are too beautiful to experience in just a few days.',
                'body' => "Imagine starting your morning with fresh tropical air, working from a peaceful coastal town, discovering a favourite local café and spending your weekends exploring beaches, mountains and historic towns.\n\nThe Lankan Nomad is designed for people who want to experience more of Sri Lanka at their own pace. We help you explore your options for a longer stay and organise the details that make everyday living easier.",
                'cta' => 'Discover How It Works'
            ],

            // 4. Choose Your Stay Duration
            'durations' => [
                [
                    'tag' => '03 Months',
                    'title' => 'A Season in Sri Lanka',
                    'desc' => 'Long enough to settle into a new routine, discover your favourite places and experience more than the usual tourist trail.',
                    'idealFor' => 'extended holidays, seasonal stays and people exploring life in Sri Lanka.',
                    'cta' => 'Explore a 3-Month Stay',
                    'url' => url('/stay-in-sri-lanka#3-months'),
                    'durationValue' => '3 months'
                ],
                [
                    'tag' => '06 Months',
                    'title' => 'Find Your Rhythm',
                    'desc' => 'Give yourself more time to settle in, explore different regions and create a lifestyle that balances work, leisure and discovery.',
                    'idealFor' => 'remote workers, longer-term visitors and people seeking a deeper local experience.',
                    'cta' => 'Explore a 6-Month Stay',
                    'url' => url('/stay-in-sri-lanka#6-months'),
                    'durationValue' => '6 months',
                    'highlight' => true
                ],
                [
                    'tag' => '12 Months',
                    'title' => 'Make It Your Home Away from Home',
                    'desc' => 'Experience the changing rhythms of Sri Lanka throughout the year. Plan a longer-term lifestyle with accommodation and support suited to your circumstances.',
                    'idealFor' => 'people considering an extended relocation, a year abroad or a longer personal adventure.',
                    'cta' => 'Explore a 12-Month Stay',
                    'url' => url('/stay-in-sri-lanka#12-months'),
                    'durationValue' => '12 months'
                ]
            ],

            // 5. Services Overview
            'services' => [
                [
                    'num' => '01',
                    'title' => 'Find Your Place',
                    'desc' => 'Explore accommodation options that match your preferred location, lifestyle, length of stay and budget.',
                    'icon' => 'home',
                    'image' => 'assets/images/srilanka/galle_fort.jpg'
                ],
                [
                    'num' => '02',
                    'title' => 'Arrive with Confidence',
                    'desc' => 'Plan your arrival and enquire about airport pickup and onward transport arrangements.',
                    'icon' => 'plane',
                    'image' => 'assets/images/srilanka/colombo_skyline.jpg'
                ],
                [
                    'num' => '03',
                    'title' => 'Settle into Everyday Life',
                    'desc' => 'Get help understanding local options and arranging the practical details of your stay, depending on the support available.',
                    'icon' => 'sun',
                    'image' => 'assets/images/srilanka/ahangama_coast.jpg'
                ],
                [
                    'num' => '04',
                    'title' => 'Explore Beyond Your Doorstep',
                    'desc' => 'Discover beaches, food, culture, nature and local experiences that make Sri Lanka special.',
                    'icon' => 'compass',
                    'image' => 'assets/images/srilanka/sigiriya.jpg'
                ],
                [
                    'num' => '05',
                    'title' => 'Work from Somewhere Inspiring',
                    'desc' => "If you're working remotely, explore work-friendly locations and suitable internet or workspace options before you arrive.",
                    'icon' => 'wifi',
                    'image' => 'assets/images/srilanka/weligama_beach.jpg'
                ],
                [
                    'num' => '06',
                    'title' => 'Make a Plan That Fits You',
                    'desc' => "Tell us what matters to you, and we'll help you explore suitable arrangements for your stay.",
                    'icon' => 'calendar',
                    'image' => 'assets/images/srilanka/nuwara_eliya_tea.jpg'
                ]
            ],

            // 6. Destination Discovery
            'destinations' => [
                [
                    'name' => 'Colombo & the Western Coast',
                    'tagline' => 'City energy. Everyday convenience.',
                    'desc' => 'Explore urban life, cafés, restaurants, shopping, business districts and convenient access to everyday amenities. Ideal for people who prefer a more connected city lifestyle.',
                    'consider' => 'traffic, neighbourhood differences, travel times and accommodation costs.',
                    'image' => 'assets/images/srilanka/colombo_skyline.jpg'
                ],
                [
                    'name' => 'The South Coast',
                    'tagline' => 'Ocean mornings. Easygoing afternoons.',
                    'desc' => 'Discover coastal communities, beautiful beaches, local cafés, surf culture and a relaxed rhythm of life. Locations to explore include Weligama, Mirissa, Ahangama and Hiriketiya.',
                    'consider' => 'seasonal conditions, transport, internet at the specific property and proximity to everyday essentials.',
                    'image' => 'assets/images/srilanka/weligama_beach.jpg'
                ],
                [
                    'name' => 'Kandy & the Hill Country',
                    'tagline' => 'Green landscapes. A slower rhythm.',
                    'desc' => 'Experience misty hills, tea country, cooler surroundings, scenic journeys and a different side of everyday Sri Lankan life.',
                    'consider' => 'terrain, commuting requirements, weather and available neighbourhood facilities.',
                    'image' => 'assets/images/srilanka/kandy_temple.jpg'
                ],
                [
                    'name' => 'Ella & the Highlands',
                    'tagline' => 'Mountain air. Open horizons.',
                    'desc' => 'Discover walking trails, mountain views, tea plantations and a nature-focused lifestyle.',
                    'consider' => 'long-stay accommodation, local services, internet reliability and transport needs.',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.jpg'
                ],
                [
                    'name' => 'The Cultural Triangle',
                    'tagline' => 'History, heritage and unforgettable landscapes.',
                    'desc' => "Explore Sri Lanka's ancient cities, remarkable heritage sites, rural landscapes and rich cultural traditions.",
                    'consider' => 'transport, distances between attractions and access to daily amenities.',
                    'image' => 'assets/images/srilanka/sigiriya.jpg'
                ]
            ],

            // 7. How It Works Steps
            'steps' => [
                [
                    'number' => '01',
                    'title' => 'Tell Us Your Plans',
                    'desc' => 'Share your intended arrival date, length of stay, preferred location, budget and what you need help arranging.'
                ],
                [
                    'number' => '02',
                    'title' => 'Explore Your Options',
                    'desc' => "We'll help you review suitable options and clarify which services may be available for your plans."
                ],
                [
                    'number' => '03',
                    'title' => 'Prepare for Arrival',
                    'desc' => 'Once arrangements are confirmed, organise the relevant details before your journey, including accommodation and transport where applicable.'
                ],
                [
                    'number' => '04',
                    'title' => 'Start Living Sri Lanka',
                    'desc' => 'Arrive with a clearer plan and begin discovering the places, people and everyday experiences that make your stay memorable.'
                ]
            ],

            // 8. The Lankan Lifestyle Highlights
            'lifestyle' => [
                'Morning walks beside the Indian Ocean.',
                'Fresh tropical fruit from a local market.',
                'A favourite café becoming part of your routine.',
                'Scenic train journeys through the highlands.',
                'Weekend escapes into nature.',
                'Local food, traditions and conversations.',
                'Finding your own rhythm in a new place.'
            ],

            // 9. Why The Lankan Nomad
            'whyUs' => [
                [
                    'title' => 'Built Around Your Plans',
                    'desc' => 'Your travel dates, lifestyle, location preferences and priorities help shape the options we explore with you.'
                ],
                [
                    'title' => 'Local Perspective',
                    'desc' => 'Discover Sri Lanka through its regions, communities, culture and everyday experiences.'
                ],
                [
                    'title' => 'Practical Planning',
                    'desc' => 'Explore important details before arrival so you can make informed decisions about your stay.'
                ],
                [
                    'title' => 'More Than a Holiday',
                    'desc' => 'Think beyond sightseeing and plan for the practicalities of living somewhere for longer.'
                ],
                [
                    'title' => 'One Starting Point',
                    'desc' => 'Bring your questions and requirements together in one enquiry instead of trying to organise every detail separately.'
                ]
            ],

            // 10. Featured Experiences
            'experiences' => [
                [
                    'title' => 'Coastal Living',
                    'desc' => 'Find your own rhythm by the sea, discover coastal towns and enjoy the changing moods of the Indian Ocean.',
                    'image' => 'assets/images/srilanka/weligama_beach.jpg'
                ],
                [
                    'title' => 'Food & Local Flavours',
                    'desc' => "Explore Sri Lankan rice and curry, hoppers, tropical fruit, local sweets and the island's celebrated tea culture.",
                    'image' => 'assets/images/srilanka/srilankan_cuisine.jpg'
                ],
                [
                    'title' => 'Nature & Adventure',
                    'desc' => 'Discover forest trails, waterfalls, wildlife experiences and scenic landscapes with suitable local providers.',
                    'image' => 'assets/images/srilanka/yala_wildlife.jpg'
                ],
                [
                    'title' => 'Culture & Heritage',
                    'desc' => 'Explore historic sites, local traditions, architecture and the cultural stories that shape Sri Lanka.',
                    'image' => 'assets/images/srilanka/kandy_temple.jpg'
                ],
                [
                    'title' => 'Weekend Escapes',
                    'desc' => 'Use your longer stay as an opportunity to discover places beyond your everyday neighbourhood.',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.jpg'
                ]
            ],

            // 11. Practical Information Guide Previews
            'guides' => [
                'Planning Your First Month in Sri Lanka',
                'Choosing the Right Region for Your Lifestyle',
                'Understanding Everyday Transport',
                'What to Consider Before Renting Accommodation',
                'Working Remotely from Sri Lanka',
                'Preparing for a Longer Stay'
            ]
        ];

        $this->render('pages/home', $data);
    }
}
