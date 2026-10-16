<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        // Section 03: Statistics Data
        $statistics = [
            [
                'id' => 1,
                'number' => '139++',
                'label' => 'Travel experiences designed with care and local expertise',
                'is_highlight' => false,
            ],
            [
                'id' => 2,
                'number' => '13K+',
                'label' => 'Travelers explored the world through our curated journeys',
                'is_highlight' => true, // Royal Blue
            ],
            [
                'id' => 3,
                'number' => '130+',
                'label' => 'Global destinations across remote nature and vibrant cities',
                'is_highlight' => false,
            ],
        ];

        // Section 04: Interactive Travel Experiences (6 Categories)
        $experiences = [
            [
                'id' => 1,
                'slug' => 'luxury-honeymoon',
                'title' => 'Luxury Honeymoon',
                'desc' => 'Private villas, peaceful mornings, beautiful coastlines, and experiences created just for two.',
                'image' => 'assets/images/packages/pkg-maldives.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/packages'),
                'is_active' => true,
            ],
            [
                'id' => 2,
                'slug' => 'nature-escapes',
                'title' => 'Nature Escapes',
                'desc' => 'Lush rainforests, cascading falls, secluded reserves, and untamed natural sanctuaries.',
                'image' => 'assets/images/about/exp-nature.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/packages'),
                'is_active' => false,
            ],
            [
                'id' => 3,
                'slug' => 'cultural-journeys',
                'title' => 'Cultural Journeys',
                'desc' => 'Immersive heritage routes, historic architecture, ancient trails, and vibrant traditions.',
                'image' => 'assets/images/about/exp-cultural.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/packages'),
                'is_active' => false,
            ],
            [
                'id' => 4,
                'slug' => 'mountain-adventures',
                'title' => 'Mountain Adventures',
                'desc' => 'Alpine ridges, glacier passes, panoramic summits, and guided wilderness expeditions.',
                'image' => 'assets/images/packages/package-4.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/packages'),
                'is_active' => false,
            ],
            [
                'id' => 5,
                'slug' => 'coastal-retreats',
                'title' => 'Coastal Retreats',
                'desc' => 'Pristine island atolls, ocean boardwalks, secluded beaches, and gentle ocean breezes.',
                'image' => 'assets/images/packages/pkg-thailand.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/packages'),
                'is_active' => false,
            ],
            [
                'id' => 6,
                'slug' => 'private-travel',
                'title' => 'Private Travel',
                'desc' => 'Bespoke itineraries, dedicated private concierge, luxury yachts, and secluded getaways.',
                'image' => 'assets/images/about/exp-private.jpg',
                'cta_text' => 'Explore this trip',
                'cta_url' => url('/packages'),
                'is_active' => false,
            ],
        ];

        // Section 05: Dark Navy Journey Timeline (5 Alternating Steps)
        $timelineSteps = [
            [
                'step' => 1,
                'num' => '01',
                'title' => 'Share Your Ideas',
                'desc' => 'Tell us about your dream destination, travel style, pace, and preferred activities.',
                'image' => 'assets/images/destinations/moment-3.jpg',
                'position' => 'below',
                'is_active' => false,
            ],
            [
                'step' => 2,
                'num' => '02',
                'title' => 'Discover Possibilities',
                'desc' => 'We explore inspiring routes, unique stays, and memorable local experiences.',
                'image' => 'assets/images/destinations/destination-2.jpg',
                'position' => 'above',
                'is_active' => false,
            ],
            [
                'step' => 3,
                'num' => '03',
                'title' => 'Plan Your Experience',
                'desc' => 'Together we fine-tune a tailored day-by-day itinerary designed for you.',
                'image' => 'assets/images/packages/package-1.jpg',
                'position' => 'below',
                'is_active' => true, // Default active step matching screenshot
            ],
            [
                'step' => 4,
                'num' => '04',
                'title' => 'Prepare for Departure',
                'desc' => 'We handle accommodation, transfers, bookings, and essential travel details.',
                'image' => 'assets/images/destinations/moment-1.jpg',
                'position' => 'above',
                'is_active' => false,
            ],
            [
                'step' => 5,
                'num' => '05',
                'title' => 'Enjoy Your Journey',
                'desc' => 'Travel effortlessly with dedicated support and peace of mind every step of the way.',
                'image' => 'assets/images/destinations/moment-4.jpg',
                'position' => 'below',
                'is_active' => false,
            ],
        ];

        // Section 06: Why Travelers Choose Avenora (4 Feature Cards)
        $whyFeatures = [
            [
                'id' => 1,
                'title' => 'Personal, Not Packaged',
                'desc' => 'Your travel experience is thoughtfully shaped around your interests, pace, and preferences.',
                'icon' => 'compass',
            ],
            [
                'id' => 2,
                'title' => 'Beautifully Planned Details',
                'desc' => 'From accommodation to activities, every detail is considered to make the journey feel smooth.',
                'icon' => 'calendar',
            ],
            [
                'id' => 3,
                'title' => 'Handpicked Stays',
                'desc' => 'We focus on distinctive places to stay that complement the destination and travel experience.',
                'icon' => 'home',
            ],
            [
                'id' => 4,
                'title' => 'Local Expertise',
                'desc' => 'Discover authentic experiences through thoughtful destination research and local perspectives.',
                'icon' => 'map-pin',
            ],
        ];

        // Section 07: Journeys We Love to Design (4 Staggered Photo Cards)
        $gallery = [
            [
                'id' => 1,
                'title' => 'Island Escapes',
                'image' => 'assets/images/about/gal-island.jpg',
                'offset_class' => 'gal-offset-down',
            ],
            [
                'id' => 2,
                'title' => 'Coastal Villas',
                'image' => 'assets/images/destinations/destination-1.jpg',
                'offset_class' => 'gal-offset-up',
            ],
            [
                'id' => 3,
                'title' => 'Scenic Valleys',
                'image' => 'assets/images/destinations/moment-2.jpg',
                'offset_class' => 'gal-offset-down',
            ],
            [
                'id' => 4,
                'title' => 'Mountain Trails',
                'image' => 'assets/images/destinations/moment-4.jpg',
                'offset_class' => 'gal-offset-up',
            ],
        ];

        $data = [
            'metaTitle' => 'About Avenora | Personalized Travel & Extraordinary Journeys',
            'metaDescription' => "Discover Avenora's approach to thoughtful travel. Explore personalized journeys, inspiring destinations, memorable experiences, and the passion behind our travel philosophy.",
            'activePage' => 'about',
            'statistics' => $statistics,
            'experiences' => $experiences,
            'timelineSteps' => $timelineSteps,
            'whyFeatures' => $whyFeatures,
            'gallery' => $gallery,
        ];

        $this->render('pages/about', $data);
    }
}