<?php

namespace App\Controllers;

use App\Core\Controller;

class GuideController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Sri Lanka Guide & Insights | The Lankan Nomad',
            'metaDescription' => 'Practical information and thoughtful inspiration for people planning to spend more time in Sri Lanka. Choosing regions, accommodation, transport, connectivity, and local living.',
            'activePage' => 'guide',

            'hero' => [
                'eyebrow' => 'LOCAL KNOWLEDGE &amp; PRACTICAL ADVICE',
                'headline' => 'A little local knowledge goes a long way.',
                'lead' => "Practical information and thoughtful inspiration for people planning to spend more time in Sri Lanka.\n\nFrom choosing where to stay to understanding everyday transport, our guides help you ask the right questions before you arrive.",
                'cta' => 'Plan Your Stay'
            ],

            'categories' => [
                [
                    'name' => 'Planning Your Stay',
                    'desc' => 'Helpful information about timelines, budgeting, accommodation research and preparing for an extended visit.',
                    'icon' => 'calendar'
                ],
                [
                    'name' => 'Choosing Where to Live',
                    'desc' => 'Compare different regions and think about the lifestyle, amenities, climate and transport that matter to you.',
                    'icon' => 'map-pin'
                ],
                [
                    'name' => 'Everyday Sri Lanka',
                    'desc' => 'Explore local food, shopping, transport, connectivity, customs and practical daily-life considerations.',
                    'icon' => 'coffee'
                ],
                [
                    'name' => 'Remote Work & Connectivity',
                    'desc' => 'Understand what to check before choosing a work-friendly location, including internet, backup connectivity and workspace.',
                    'icon' => 'wifi'
                ],
                [
                    'name' => 'Travel & Discovery',
                    'desc' => 'Ideas for discovering the coast, the highlands, cultural sites, food and nature while using one location as your home base.',
                    'icon' => 'compass'
                ]
            ],

            'articles' => [
                [
                    'title' => 'Planning Your First Three Months in Sri Lanka',
                    'category' => 'Planning Your Stay',
                    'readTime' => '6 min read',
                    'desc' => 'How to structure your initial season: setting up local utilities, opening bank avenues, mapping neighborhood essentials, and finding your personal cadence.'
                ],
                [
                    'title' => 'Colombo or the South Coast: Which Lifestyle Suits You?',
                    'category' => 'Choosing Where to Live',
                    'readTime' => '5 min read',
                    'desc' => 'Comparing the vibrant cosmopolitan pace, rooftop dining, and co-working hubs of the capital with the salty breezes and surf community of Weligama and Ahangama.'
                ],
                [
                    'title' => 'What to Check Before Choosing Long-Stay Accommodation',
                    'category' => 'Planning Your Stay',
                    'readTime' => '7 min read',
                    'desc' => 'Key questions to verify: backup generator availability, fiber optic line speeds, kitchen amenities, noise levels, and seasonal lease agreements.'
                ],
                [
                    'title' => 'A Practical Guide to Getting Around Sri Lanka',
                    'category' => 'Everyday Sri Lanka',
                    'readTime' => '8 min read',
                    'desc' => 'From tuk-tuks and ride-hailing apps in Colombo to first-class observation rail carriages across the tea country and long-term scooter hires.'
                ],
                [
                    'title' => 'How to Prepare for Remote Work in Sri Lanka',
                    'category' => 'Remote Work & Connectivity',
                    'readTime' => '6 min read',
                    'desc' => 'Ensuring seamless workflow: dual SIM card strategies, mobile Wi-Fi dongles, time-zone management (GMT+5:30), and top laptop-friendly cafés.'
                ],
                [
                    'title' => 'Everyday Costs to Research Before Moving Abroad',
                    'category' => 'Planning Your Stay',
                    'readTime' => '5 min read',
                    'desc' => 'A realistic breakdown of grocery prices, local produce markets, utility costs, dining out, and incidental expenses during extended stays.'
                ],
                [
                    'title' => 'Understanding Sri Lankan Food and Local Dining Customs',
                    'category' => 'Everyday Sri Lanka',
                    'readTime' => '7 min read',
                    'desc' => 'A culinary journey through hopper culture, rice and curry etiquette, dietary options for vegetarians and vegans, and authentic street eats.'
                ],
                [
                    'title' => 'Planning Weekend Trips While Living in Sri Lanka',
                    'category' => 'Travel & Discovery',
                    'readTime' => '6 min read',
                    'desc' => 'Using your coastal or hill base to embark on short 2-day escapes into rainforest reserves, ancient ruined kingdoms, and remote national parks.'
                ],
                [
                    'title' => 'What to Consider Before Booking a Long-Term Stay',
                    'category' => 'Planning Your Stay',
                    'readTime' => '5 min read',
                    'desc' => 'Contractual clauses, inventory checklists, security deposits, and how to balance flexibility with booking security across changing seasons.'
                ],
                [
                    'title' => 'Visa and Entry Questions to Verify Before Travelling',
                    'category' => 'Planning Your Stay',
                    'readTime' => '6 min read',
                    'desc' => 'Official immigration guidelines, electronic travel authorizations, extension processes in Colombo, and vital legal compliance rules.'
                ]
            ],

            'blogCta' => [
                'headline' => 'Planning a longer stay?',
                'desc' => 'Start with the questions that matter to you, then tell us what support you need.',
                'cta' => 'Plan Your Stay'
            ]
        ];

        $this->render('pages/guide', $data);
    }
}

