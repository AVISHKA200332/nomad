<?php

namespace App\Controllers;

use App\Core\Controller;

class ExperienceController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Experiences in Sri Lanka | The Lankan Nomad - Live Locally',
            'metaDescription' => 'Experience the island beyond the itinerary. Coastal life, food & flavours, nature & outdoors, culture & heritage, and weekend escapes across Sri Lanka.',
            'activePage' => 'experiences',

            'hero' => [
                'eyebrow' => 'BEYOND THE ITINERARY',
                'headline' => 'Experience the island beyond the itinerary.',
                'lead' => "The most memorable parts of a long stay often happen between the big attractions: a new favourite meal, a familiar walking route, a conversation with a local or a weekend spent somewhere unexpected.\n\nDiscover the experiences that can make your time in Sri Lanka more meaningful.",
                'cta' => 'Tell Us Your Interests'
            ],

            'experiences' => [
                [
                    'title' => 'Coastal Life',
                    'tagline' => 'Find your place by the sea.',
                    'desc' => "Explore coastal towns, enjoy ocean views and discover the different personalities of Sri Lanka's beaches and seaside communities.",
                    'image' => 'assets/images/srilanka/weligama_beach.jpg',
                    'highlights' => ['Dawn surf sessions', 'Seaside cafés and workspaces', 'Coastal village cycling', 'Marine conservation visits']
                ],
                [
                    'title' => 'Food & Flavours',
                    'tagline' => 'Get to know Sri Lanka through its food.',
                    'desc' => "Discover rice and curry, hoppers, string hoppers, kottu, tropical fruit, local sweets and the island's celebrated tea culture. Explore local eateries, markets and food traditions while respecting individual dietary requirements.",
                    'image' => 'assets/images/srilanka/srilankan_cuisine.jpg',
                    'highlights' => ['Fresh spice and produce markets', 'Clay-pot village cooking', 'Ceylon high-grown tea tastings', 'Street-side kottu and hoppers']
                ],
                [
                    'title' => 'Nature & Outdoors',
                    'tagline' => 'Make room for the outdoors.',
                    'desc' => 'Discover scenic trails, waterfalls, tea landscapes, national parks and nature experiences with appropriate local operators. Always follow local guidance and wildlife-safety rules.',
                    'image' => 'assets/images/srilanka/yala_wildlife.jpg',
                    'highlights' => ['Cloud forest hikes', 'Highland cascade viewpoints', 'Ethical wildlife sanctuaries', 'Birdwatching in coastal lagoons']
                ],
                [
                    'title' => 'Culture & Heritage',
                    'tagline' => 'Explore the stories behind the places.',
                    'desc' => "Experience Sri Lanka's historic architecture, cultural traditions, religious sites, crafts and local heritage respectfully. Dress appropriately for religious and cultural sites and follow posted guidance.",
                    'image' => 'assets/images/srilanka/sigiriya.jpg',
                    'highlights' => ['Ancient UNESCO citadel explorations', 'Traditional drumming and dance heritage', 'Handicraft and batik workshops', 'Sacred temple etiquette immersion']
                ],
                [
                    'title' => 'Weekend Escapes',
                    'tagline' => 'A little adventure beyond your home base.',
                    'desc' => 'Use your stay as an opportunity to explore other regions, from the highlands to cultural landmarks and coastal communities.',
                    'image' => 'assets/images/srilanka/nine_arch_bridge.jpg',
                    'highlights' => ['Scenic highland rail journeys', 'Secluded forest eco-retreats', 'Colonial fort heritage getaways', 'Stargazing in pristine valleys']
                ]
            ],

            'closingCta' => [
                'headline' => 'What would you love to discover?',
                'desc' => "Tell us your interests, preferred pace and available time. We'll help you explore suitable options where arrangements are available.",
                'cta' => 'Tell Us Your Interests'
            ]
        ];

        $this->render('pages/experiences', $data);
    }
}

