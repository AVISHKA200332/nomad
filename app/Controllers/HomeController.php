<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Avenora | Discover Extraordinary Travel Experiences',
            'metaDescription' => 'Explore unforgettable destinations, curated travel packages, and extraordinary adventures with Avenora.',
            'activePage' => 'home',
            
            // Hero Data
            'hero' => [
                'headline' => 'Travel.',
                'subhead' => 'Tailored journeys for travelers who want more than a standard trip.',
                'cta' => 'Explore Destinations',
                'badge' => 'High Alps • 3,450m',
                'cardTitle' => 'Mountain Expedition',
                'cardLocation' => 'Swiss Alps Alpine Pass',
                'cardCta' => 'Watch the Journey'
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

            // Featured Destinations Data
            'destinations' => [
                [
                    'title' => 'Amalfi Coastal Haven',
                    'location' => 'Campania, Italy',
                    'tag' => 'Luxury Retreat',
                    'image' => 'assets/images/destinations/destination-1.jpg',
                    'desc' => 'Cliffside villas, private yacht charters, and Mediterranean sunsets.'
                ],
                [
                    'title' => 'Geiranger Fjord Vista',
                    'location' => 'Sunnmøre, Norway',
                    'tag' => 'Alpine Exploration',
                    'image' => 'assets/images/destinations/destination-2.jpg',
                    'desc' => 'Majestic deep turquoise fjords, cascading waterfalls, and mountain peaks.'
                ]
            ],
            'destinationFilters' => [
                '01 Northern Fjords',
                '02 Mediterranean Coast',
                '03 Alpine Summits',
                '04 Tropical Archipelagos'
            ],

            // Curated Travel Packages Data
            'packages' => [
                [
                    'title' => 'Maldives Overwater Sanctuary',
                    'location' => 'Baa Atoll, Maldives',
                    'duration' => '7 Days • 6 Nights',
                    'price' => '$2,850',
                    'image' => 'assets/images/packages/package-1.jpg',
                    'desc' => 'Private overwater villa with direct coral lagoon access and private Dhoni sailing.'
                ],
                [
                    'title' => 'Tahiti & Bora Bora Explorer',
                    'location' => 'Society Islands, Polynesia',
                    'duration' => '10 Days • 9 Nights',
                    'price' => '$3,400',
                    'image' => 'assets/images/packages/package-2.jpg',
                    'desc' => 'Lush volcanic peaks, white sand shores, and traditional Polynesian hospitality.'
                ],
                [
                    'title' => 'Dalmatian Coast & Historic Isles',
                    'location' => 'Dubrovnik & Hvar, Croatia',
                    'duration' => '8 Days • 7 Nights',
                    'price' => '$2,150',
                    'image' => 'assets/images/packages/package-3.jpg',
                    'desc' => 'Historic coastal fortresses, sapphire Adriatic bays, and olive grove estates.'
                ],
                [
                    'title' => 'Bavarian & Swiss Alpine Trail',
                    'location' => 'Zermatt & Tyrol, Alps',
                    'duration' => '6 Days • 5 Nights',
                    'price' => '$1,980',
                    'image' => 'assets/images/packages/package-4.jpg',
                    'desc' => 'Medieval castle vistas, high-alpine passes, and luxury mountain chalets.'
                ]
            ],

            // Travel Planning Services Data
            'services' => [
                [
                    'number' => '01',
                    'title' => 'Personalized Itineraries',
                    'desc' => 'Custom-designed routes tailored precisely to your pace, passions, and personal adventure style.',
                    'image' => 'assets/images/destinations/service-1.jpg'
                ],
                [
                    'number' => '02',
                    'title' => 'Accommodation Arrangements',
                    'desc' => 'Vetted boutique lodges, secluded oceanfront villas, and panoramic alpine chalets.',
                    'image' => 'assets/images/destinations/service-2.jpg'
                ],
                [
                    'number' => '03',
                    'title' => 'Local Experiences',
                    'desc' => 'Privileged access to indigenous artisans, private vineyard tastings, and hidden sanctuaries.',
                    'image' => 'assets/images/destinations/service-3.jpg'
                ],
                [
                    'number' => '04',
                    'title' => 'Guided Adventures',
                    'desc' => 'Certified mountaineers and veteran wilderness leaders providing technical safety and storytelling.',
                    'image' => 'assets/images/destinations/service-4.jpg'
                ]
            ],

            // Journey Experience Categories Data
            'experiences' => [
                [
                    'title' => 'Hiking & Trekking',
                    'desc' => 'Traverse scenic ridgelines, high passes, and secluded valleys.',
                    'image' => 'assets/images/packages/exp-1.jpg',
                    'tag' => '24 Tours'
                ],
                [
                    'title' => 'Mountain Adventures',
                    'desc' => 'Climb legendary peaks with world-class mountaineering leaders.',
                    'image' => 'assets/images/packages/exp-2.jpg',
                    'tag' => '18 Tours'
                ],
                [
                    'title' => 'Tropical Escapes',
                    'desc' => 'Unwind on pristine atolls, private islets, and coral lagoons.',
                    'image' => 'assets/images/packages/exp-3.jpg',
                    'tag' => '15 Tours'
                ],
                [
                    'title' => 'Wildlife Experiences',
                    'desc' => 'Observe endangered species in protected, ethical sanctuaries.',
                    'image' => 'assets/images/packages/exp-4.jpg',
                    'tag' => '12 Tours'
                ],
                [
                    'title' => 'Island Exploration',
                    'desc' => 'Discover remote archipelagos, hidden sea caves, and cliff coasts.',
                    'image' => 'assets/images/packages/exp-5.jpg',
                    'tag' => '16 Tours'
                ],
                [
                    'title' => 'Cultural Journeys',
                    'desc' => 'Immerse in ancient heritage, historic landmarks, and traditions.',
                    'image' => 'assets/images/packages/exp-6.jpg',
                    'tag' => '20 Tours'
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

            // Travel Moments Photo Gallery Data
            'moments' => [
                [
                    'badge' => 'Aiguille du Midi • 3,842m',
                    'location' => 'Chamonix, French Alps',
                    'image' => 'assets/images/destinations/moment-1.jpg'
                ],
                [
                    'badge' => 'Patagonia Vista • Lake Trail',
                    'location' => 'Torres del Paine, Chile',
                    'image' => 'assets/images/destinations/moment-2.jpg'
                ],
                [
                    'badge' => 'Dolomites Lake Reflection',
                    'location' => 'Lago di Braies, Italy',
                    'image' => 'assets/images/destinations/moment-3.jpg'
                ],
                [
                    'badge' => 'Mont Blanc Glacier Trek',
                    'location' => 'Haute-Savoie, France',
                    'image' => 'assets/images/destinations/moment-4.jpg'
                ]
            ],

            // Testimonial Feature Data
            'testimonial' => [
                'quote' => '“Avenora transformed how we experience the wild. Every mountain pass, private campsite, and local guide was chosen with unmatched care. It wasn’t just a vacation—it was deeply transformative.”',
                'author' => 'Elena Rostova',
                'role' => 'Alpine Trekker & Wildlife Photographer',
                'location' => 'Zurich, Switzerland',
                'image' => 'assets/images/destinations/testimonial-traveler.jpg'
            ],

            // FAQ Data
            'faqs' => [
                [
                    'q' => 'How do I book a travel package with Avenora?',
                    'a' => 'You can request any curated package directly online or schedule an initial consultation with one of our adventure designers. We will tailor the itinerary to your specific dates and preferences before confirming your reservation.'
                ],
                [
                    'q' => 'Can I customize my travel itinerary?',
                    'a' => 'Yes. Every itinerary featured on Avenora can be completely customized. We modify daily paces, accommodation tiers, private excursions, and transportation according to your wishes.'
                ],
                [
                    'q' => 'What is included in your tour packages?',
                    'a' => 'Our packages typically include boutique or luxury accommodations, private ground transportation, verified expert local guides, national park and heritage permits, and curated culinary experiences.'
                ],
                [
                    'q' => 'Do you offer guided adventures for beginners?',
                    'a' => 'Absolutely. While we organize high-altitude technical ascents, the majority of our journeys are designed for travelers of moderate fitness who desire immersion in nature without extreme physical strain.'
                ],
                [
                    'q' => 'How far in advance should I book?',
                    'a' => 'We recommend booking 3 to 6 months in advance for peak seasonal journeys, especially for high-demand locations such as Patagonia, the Alps, and private island reserves.'
                ],
                [
                    'q' => 'How can I contact your travel specialist team?',
                    'a' => 'You can reach us through our online inquiry form, via direct email at hello@avenora.example, or by scheduling a dedicated phone consultation with an expedition lead.'
                ]
            ]
        ];

        $this->render('pages/home', $data);
    }
}
