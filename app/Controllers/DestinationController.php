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
                'title' => 'Tulum Beach Villa Retreat',
                'location' => 'Tulum, Mexico',
                'region' => 'Americas',
                'rating' => '4.5',
                'image' => 'assets/images/destinations/destination-1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Patagonia Lake Trek',
                'location' => 'Torres del Paine, Chile',
                'region' => 'Americas',
                'rating' => '4.5',
                'image' => 'assets/images/destinations/moment-2.jpg',
            ],
            [
                'id' => 3,
                'title' => 'Krabi Limestone Cruise',
                'location' => 'Krabi, Thailand',
                'region' => 'Asia',
                'rating' => '4.5',
                'image' => 'assets/images/packages/exp-4.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Maldives Overwater Retreat',
                'location' => 'Baa Atoll, Maldives',
                'region' => 'Asia',
                'rating' => '4.5',
                'image' => 'assets/images/packages/package-1.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Santorini Private Escape',
                'location' => 'Santorini, Greece',
                'region' => 'Europe',
                'rating' => '4.5',
                'image' => 'assets/images/packages/package-2.jpg',
            ],
            [
                'id' => 6,
                'title' => 'Malibu Cliff Retreat',
                'location' => 'Malibu, California',
                'region' => 'Americas',
                'rating' => '4.5',
                'image' => 'assets/images/destinations/service-1.jpg',
            ],
            [
                'id' => 7,
                'title' => 'Modern Desert Haven',
                'location' => 'Dubai Desert, UAE',
                'region' => 'Asia',
                'rating' => '4.5',
                'image' => 'assets/images/destinations/moment-3.jpg',
            ],
            [
                'id' => 8,
                'title' => 'Santorini Sunset Tour',
                'location' => 'Santorini, Greece',
                'region' => 'Europe',
                'rating' => '4.5',
                'image' => 'assets/images/packages/exp-2.jpg',
            ],
            [
                'id' => 9,
                'title' => 'Bali Island Escape',
                'location' => 'Bali, Indonesia',
                'region' => 'Asia',
                'rating' => '4.5',
                'image' => 'assets/images/destinations/moment-1.jpg',
            ],
        ];

        $faqs = [
            [
                'q' => 'Do I need to choose a destination first?',
                'a' => 'No, you do not need to know your destination before contacting us. Share your travel style, budget, preferred dates, and the type of experiences you want, and we will help you find the best destination options.'
            ],
            [
                'q' => 'Can travel packages be customized?',
                'a' => 'Yes, every travel package can be customized based on your needs. You can adjust the trip duration, hotel type, activities, private tours, transfers, dining experiences, and special moments to match your travel plans.'
            ],
            [
                'q' => 'Do you plan honeymoons and private trips?',
                'a' => 'Yes, we plan romantic honeymoons, private escapes, family vacations, group adventures, and luxury retreats. Each itinerary is carefully designed with handpicked stays, local experiences, and smooth travel arrangements.'
            ],
            [
                'q' => 'How does pricing work?',
                'a' => 'Trip pricing depends on your destination, travel dates, hotel category, package duration, activities, transportation, and level of customization. We provide a clear and detailed quote before confirming your travel plan.'
            ],
            [
                'q' => 'Can you help with flights and transfers?',
                'a' => 'We can help guide your flight planning, airport transfers, private drivers, local transportation, and travel timing. Our goal is to make your journey smooth, comfortable, and stress-free from arrival to departure.'
            ],
            [
                'q' => 'Can I request a trip for a future date?',
                'a' => 'Absolutely. You can request a trip for future travel dates, seasonal holidays, honeymoon plans, family vacations, or special occasions. Planning early also helps secure better hotels, experiences, and travel availability.'
            ]
        ];

        $data = [
            'metaTitle' => 'Destinations | Avenora — Explore Extraordinary Places',
            'metaDescription' => 'Discover inspiring destinations with Avenora. Explore tropical escapes, mountain adventures, private retreats, and remarkable places around the world.',
            'activePage' => 'destinations',
            'destinations' => $destinations,
            'faqs' => $faqs
        ];

        $this->render('pages/destination', $data);
    }
}