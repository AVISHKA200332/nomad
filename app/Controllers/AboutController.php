<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        // Section 01: Hero Data
        $hero = [
            'eyebrow' => 'About The Lankan Nomad',
            'title' => "Your next journey\nawaits",
            'desc' => 'From meaningful coastal stays to extraordinary highland trails, we create personalized Sri Lankan journeys designed around you.',
            'image' => 'assets/images/srilanka/nuwara_eliya_tea.jpg'
        ];

        // Section 02: Introduction Data
        $intro = [
            'eyebrow' => 'About Us',
            'title' => "A travel studio for people\nwho want more than a\nstandard trip.",
            'desc1' => 'The Lankan Nomad is built around the belief that the most memorable journeys in Sri Lanka are the ones that feel personal. We bring together inspiring island destinations, thoughtful travel planning, and meaningful living arrangements designed around each traveler.',
            'desc2' => 'From peaceful southern coastal villas to misty highland tea trails and UNESCO citadels, our goal is to help you discover authentic local communities, settle in comfortably, and create lifelong memories.',
            'image' => 'assets/images/srilanka/ahangama_coast.jpg'
        ];

        // Section 03: Statistics Data
        $statistics = [
            [
                'id' => 1,
                'number' => '139++',
                'label' => 'Handpicked Sri Lankan villas and verified nomad stays',
                'is_highlight' => false,
            ],
            [
                'id' => 2,
                'number' => '13K+',
                'label' => 'Travelers explored the island through our curated journeys',
                'is_highlight' => true, // Royal Blue Accent Card
            ],
            [
                'id' => 3,
                'number' => '130+',
                'label' => 'Local community hosts, private drivers and island artisans',
                'is_highlight' => false,
            ],
        ];

        // Section 04: Interactive Travel Experiences (6 Sri Lankan Categories)
        $experiences = [
            [
                'id' => 1,
                'slug' => 'coastal-living',
                'title' => 'Coastal Surf & Villa Living',
                'desc' => 'Private beachfront villas, ocean sunrises, world-class surf breaks, and peaceful coastal rhythms along Weligama and Ahangama.',
                'image' => 'assets/images/srilanka/weligama_beach.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/destinations#weligama'),
                'is_active' => true,
            ],
            [
                'id' => 2,
                'slug' => 'tea-trails',
                'title' => 'Central Highland Tea Country',
                'desc' => 'Misty mountain valleys, heritage colonial bungalows, crisp highland air, and endless emerald tea estates in Nuwara Eliya and Hatton.',
                'image' => 'assets/images/srilanka/nuwara_eliya_tea.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/destinations#ella'),
                'is_active' => false,
            ],
            [
                'id' => 3,
                'slug' => 'scenic-railway',
                'title' => 'Scenic Railway & Mountain Treks',
                'desc' => 'The iconic hill-country train across the Nine Arch Bridge, Little Adam’s Peak trails, and panoramic sunrise vistas in Ella.',
                'image' => 'assets/images/srilanka/nine_arch_bridge.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/destinations#ella'),
                'is_active' => false,
            ],
            [
                'id' => 4,
                'slug' => 'ancient-citadels',
                'title' => 'Ancient Citadels & UNESCO Heritage',
                'desc' => 'Explore 5th-century palace fortresses at Sigiriya, sacred cave temples in Dambulla, and sacred cultural character in Kandy.',
                'image' => 'assets/images/srilanka/sigiriya.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/destinations#cultural-triangle'),
                'is_active' => false,
            ],
            [
                'id' => 5,
                'slug' => 'colonial-forts',
                'title' => 'Historic Colonial Fort Walks',
                'desc' => 'Cobblestone alleyways, Dutch ramparts, ocean-facing boutique cafés, and maritime history within the UNESCO Galle Fort.',
                'image' => 'assets/images/srilanka/galle_fort.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/destinations#ahangama'),
                'is_active' => false,
            ],
            [
                'id' => 6,
                'slug' => 'wildlife-safari',
                'title' => 'Wild Leopard & Elephant Safaris',
                'desc' => 'Private jeep safaris across Yala National Park, roaming elephant herds in Udawalawe, and untouched tropical wilderness.',
                'image' => 'assets/images/srilanka/yala_wildlife.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/experiences'),
                'is_active' => false,
            ],
        ];

        // Section 05: Dark Navy Journey Timeline (5 Alternating Steps)
        $timelineSteps = [
            [
                'step' => 1,
                'num' => '01',
                'title' => 'Share Your Stay Vision',
                'desc' => 'Tell us about your preferred island region, travel style, pace, and workspace requirements.',
                'image' => 'assets/images/srilanka/colombo_skyline.jpg',
                'position' => 'below',
                'is_active' => false,
            ],
            [
                'step' => 2,
                'num' => '02',
                'title' => 'Discover Sri Lanka Regions',
                'desc' => 'We explore inspiring coastal routes, private hill-country stays, and local orientation.',
                'image' => 'assets/images/srilanka/kandy_temple.jpg',
                'position' => 'above',
                'is_active' => false,
            ],
            [
                'step' => 3,
                'num' => '03',
                'title' => 'Curate Stays & High-Speed WiFi',
                'desc' => 'Together we fine-tune a tailored itinerary with verified accommodation and seamless transfers.',
                'image' => 'assets/images/srilanka/weligama_beach.jpg',
                'position' => 'below',
                'is_active' => true, // Default active step matching reference screenshot
            ],
            [
                'step' => 4,
                'num' => '04',
                'title' => 'Airport Arrival & Local Setup',
                'desc' => 'We greet you upon arrival, handle airport transport, local SIM cards, and neighborhood setups.',
                'image' => 'assets/images/srilanka/galle_fort.jpg',
                'position' => 'above',
                'is_active' => false,
            ],
            [
                'step' => 5,
                'num' => '05',
                'title' => 'Live Effortlessly on the Island',
                'desc' => 'Enjoy your extended stay with dedicated on-ground local support every step of the way.',
                'image' => 'assets/images/srilanka/nine_arch_bridge.jpg',
                'position' => 'below',
                'is_active' => false,
            ],
        ];

        // Section 06: Why Travelers Choose Us (4 Feature Cards)
        $whyFeatures = [
            [
                'id' => 1,
                'title' => 'Personal, Not Packaged',
                'desc' => 'Your island stay is thoughtfully shaped around your interests, rhythm, and everyday lifestyle.',
                'icon' => 'compass',
            ],
            [
                'id' => 2,
                'title' => 'Beautifully Planned Details',
                'desc' => 'From airport transfers to verified fiber-optic WiFi, every detail is handled for peace of mind.',
                'icon' => 'calendar',
            ],
            [
                'id' => 3,
                'title' => 'Handpicked Stays',
                'desc' => 'We focus on distinctive beachfront villas and peaceful tea estate homes that complement everyday life.',
                'icon' => 'home',
            ],
            [
                'id' => 4,
                'title' => 'Deep Local Insight',
                'desc' => 'Discover authentic Sri Lankan culture, hidden food spots, and respectful community connections.',
                'icon' => 'map-pin',
            ],
        ];

        // Section 07: Journeys We Love to Design (4 Staggered Photo Cards)
        $gallery = [
            [
                'id' => 1,
                'title' => 'Coastal Surf Escapes',
                'image' => 'assets/images/srilanka/ahangama_coast.jpg',
                'offset_class' => 'gal-offset-down',
            ],
            [
                'id' => 2,
                'title' => 'Historic Galle Fort Stays',
                'image' => 'assets/images/srilanka/galle_fort.jpg',
                'offset_class' => 'gal-offset-up',
            ],
            [
                'id' => 3,
                'title' => 'Highland Tea Country',
                'image' => 'assets/images/srilanka/nuwara_eliya_tea.jpg',
                'offset_class' => 'gal-offset-down',
            ],
            [
                'id' => 4,
                'title' => 'Sigiriya Citadel Treks',
                'image' => 'assets/images/srilanka/sigiriya.jpg',
                'offset_class' => 'gal-offset-up',
            ],
        ];

        // Section 08: Final Scenic Banner CTA
        $cta = [
            'title' => "Moments that make the\njourney feel personal.",
            'desc' => 'The Lankan Nomad brings together personalized island journeys, seamless planning, and extraordinary experiences.',
            'image' => 'assets/images/srilanka/nine_arch_bridge.jpg',
            'ctaText' => 'Plan Your Stay',
            'ctaUrl' => url('/plan-your-stay')
        ];

        $data = [
            'metaTitle' => 'About Us | The Lankan Nomad - Live Sri Lanka, Your Way',
            'metaDescription' => 'Discover our approach to thoughtful travel and extended stays in Sri Lanka. Personalized journeys, handpicked villas, and local living support.',
            'activePage' => 'about',
            'hero' => $hero,
            'intro' => $intro,
            'statistics' => $statistics,
            'experiences' => $experiences,
            'timelineSteps' => $timelineSteps,
            'whyFeatures' => $whyFeatures,
            'gallery' => $gallery,
            'cta' => $cta
        ];

        $this->render('pages/about', $data);
    }
}
