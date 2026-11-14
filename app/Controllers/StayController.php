<?php

namespace App\Controllers;

use App\Core\Controller;

class StayController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Stay in Sri Lanka | 3, 6, 12 Month Extended Stays - The Lankan Nomad',
            'metaDescription' => 'Make more room for Sri Lanka. Discover extended stays for three months, six months, or a full year. Explore accommodation, transport, and local living support.',
            'activePage' => 'stay',

            'hero' => [
                'eyebrow' => 'YOUR TIME, YOUR LIFESTYLE',
                'headline' => 'Make more room for Sri Lanka.',
                'lead' => "Whether you're planning a few months by the ocean or a full year exploring island life, a longer stay gives you the opportunity to create your own routine and experience more of the country.\n\nLet's begin with the length of stay that works for you.",
                'cta' => 'Plan Your Stay'
            ],

            'options' => [
                [
                    'id' => '3-months',
                    'duration' => 'Three Months',
                    'tag' => 'Option 01',
                    'headline' => 'Three months to discover a different rhythm.',
                    'desc' => 'Spend more time in one place, explore your surroundings and enjoy the freedom to discover Sri Lanka beyond a short holiday.',
                    'planning' => [
                        'Selecting a suitable destination',
                        'Exploring available accommodation',
                        'Planning arrival and local transport',
                        'Identifying everyday essentials',
                        'Finding activities and experiences that interest you'
                    ],
                    'cta' => 'Plan a Three-Month Stay',
                    'durationParam' => '3 months',
                    'image' => 'assets/images/srilanka/weligama_beach.webp'
                ],
                [
                    'id' => '6-months',
                    'duration' => 'Six Months',
                    'tag' => 'Option 02 &bull; Most Popular',
                    'headline' => 'Six months to settle into your own routine.',
                    'desc' => 'With more time to explore, you can choose a home base, discover neighbouring regions and build a balance between work, leisure and travel.',
                    'planning' => [
                        'Reviewing accommodation options for a longer period',
                        'Considering internet and workspace requirements',
                        'Understanding local transport',
                        'Planning trips and everyday activities',
                        'Identifying practical arrangements that matter to you'
                    ],
                    'cta' => 'Plan a Six-Month Stay',
                    'durationParam' => '6 months',
                    'highlight' => true,
                    'image' => 'assets/images/srilanka/nine_arch_bridge.webp'
                ],
                [
                    'id' => '12-months',
                    'duration' => 'Twelve Months',
                    'tag' => 'Option 03',
                    'headline' => 'A year to experience more of the island.',
                    'desc' => "A year-long stay gives you time to experience different places, develop familiar routines and explore more of Sri Lanka's landscapes, communities and culture.",
                    'planning' => [
                        'Longer-term accommodation enquiries',
                        'Reviewing location and lifestyle needs',
                        'Considering transport and essential facilities',
                        'Planning everyday living arrangements',
                        'Identifying relevant immigration and documentation questions to verify with official sources'
                    ],
                    'cta' => 'Plan a Twelve-Month Stay',
                    'durationParam' => '12 months',
                    'image' => 'assets/images/srilanka/sigiriya.webp'
                ]
            ],

            'whatCanBeArranged' => [
                'lead' => 'The details depend on your circumstances and the options available. Your enquiry can cover accommodation, arrival transfers, transport, everyday living support, local experiences and remote-work requirements.',
                'disclaimer' => 'No arrangement is confirmed until availability, terms, costs and responsibilities have been agreed.'
            ],

            'importantInfo' => [
                'lead' => 'Entry conditions, visas, permitted activities and length-of-stay rules depend on your nationality and circumstances. Check the latest requirements through official Sri Lankan immigration sources before making travel commitments.',
                'legalNote' => 'The Lankan Nomad does not replace legal, immigration or tax advice.'
            ]
        ];

        $this->render('pages/stay', $data);
    }
}

