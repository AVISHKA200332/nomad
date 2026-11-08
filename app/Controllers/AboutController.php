<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'About Us | The Lankan Nomad - A More Thoughtful Way to Stay',
            'metaDescription' => "Sri Lanka isn't just somewhere to visit. It's somewhere to experience. Discover The Lankan Nomad's mission, approach, and vision for extended stays in Sri Lanka.",
            'activePage' => 'about',

            'hero' => [
                'eyebrow' => 'OUR PURPOSE',
                'headline' => "Sri Lanka isn't just somewhere to visit. It's somewhere to experience.",
                'lead' => "The Lankan Nomad is built around a simple idea: staying longer in a place should make it easier to experience more of what makes it special.\n\nA longer stay brings different questions. Where will you live? How will you get around? Which location fits your routine? What should you organise before you arrive?\n\nOur aim is to help people planning an extended stay in Sri Lanka navigate those questions and explore arrangements that fit their individual plans.",
                'cta' => 'Plan Your Stay'
            ],

            'mission' => [
                'headline' => 'To make extended stays in Sri Lanka easier to plan and more rewarding to experience.',
                'desc' => 'We want visitors to feel better prepared, more informed and more connected to the places they choose to explore.'
            ],

            'approach' => [
                [
                    'title' => 'Personal, not one-size-fits-all.',
                    'desc' => 'Different people need different things. We start by understanding your plans and priorities.'
                ],
                [
                    'title' => 'Practical, not complicated.',
                    'desc' => 'We focus on helping you navigate the arrangements relevant to your stay.'
                ],
                [
                    'title' => 'Local, not disconnected.',
                    'desc' => "Sri Lanka's communities, landscapes, food and culture are an essential part of the experience."
                ],
                [
                    'title' => 'Clear, from the beginning.',
                    'desc' => 'We aim to communicate service availability, costs, terms and expectations clearly before arrangements are confirmed.'
                ]
            ],

            'vision' => [
                'headline' => 'A more thoughtful way to stay in Sri Lanka.',
                'desc' => 'We want to help people move beyond short visits and discover what everyday life in Sri Lanka can mean to them.'
            ]
        ];

        $this->render('pages/about', $data);
    }
}
