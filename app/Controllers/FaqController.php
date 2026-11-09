<?php

namespace App\Controllers;

use App\Core\Controller;

class FaqController extends Controller
{
    public function index(): void
    {
        $data = [
            'metaTitle' => 'Frequently Asked Questions | The Lankan Nomad',
            'metaDescription' => 'Get answers to common questions about extended stays in Sri Lanka, accommodation, airport pickups, remote-work facilities, costs, and visas.',
            'activePage' => 'faq',

            'hero' => [
                'eyebrow' => 'CLEAR ANSWERS',
                'headline' => 'Frequently Asked Questions',
                'lead' => 'Everything you need to know about planning an extended stay in Sri Lanka with The Lankan Nomad.',
                'cta' => 'Plan Your Stay'
            ],

            'faqs' => [
                [
                    'q' => 'What is The Lankan Nomad?',
                    'a' => 'The Lankan Nomad helps people planning extended stays in Sri Lanka explore accommodation, arrival arrangements, local transport and other services based on their individual requirements and the options available.'
                ],
                [
                    'q' => 'Who is the service for?',
                    'a' => "It is intended for international visitors who want to experience Sri Lanka for longer than a typical holiday, including people considering extended leisure stays and remote-work lifestyles. Eligibility for particular arrangements depends on each person's circumstances."
                ],
                [
                    'q' => 'Can I stay for three, six or twelve months?',
                    'a' => 'These are the stay durations the website is designed to support. Whether a particular duration is possible depends on your entry permission, immigration conditions, accommodation arrangements and other individual circumstances. Always verify your permitted stay through official immigration sources.'
                ],
                [
                    'q' => 'Does The Lankan Nomad provide accommodation?',
                    'a' => 'The company can explain or arrange accommodation options only to the extent that its actual service agreements and available inventory allow. Contact the team to confirm the current options.'
                ],
                [
                    'q' => 'Can you arrange airport pickup?',
                    'a' => 'Airport transfers can be discussed as part of your enquiry. Confirm the service area, price, vehicle arrangements and availability before relying on a transfer booking.'
                ],
                [
                    'q' => 'Which areas of Sri Lanka can I choose?',
                    'a' => 'The website showcases example regions such as Colombo, the South Coast, Kandy, Ella and the Cultural Triangle. Contact the company to confirm which locations it currently serves.'
                ],
                [
                    'q' => 'Can you help me find a place suitable for remote work?',
                    'a' => 'You can include remote-work requirements in your enquiry. Internet quality, workspace access and other facilities must be confirmed for each specific property or location.'
                ],
                [
                    'q' => 'How much does an extended stay cost?',
                    'a' => 'Costs depend on accommodation, location, length of stay, transport and the services you select. The team should provide a tailored quotation based on your requirements rather than a price that may not apply to your situation.'
                ],
                [
                    'q' => 'Is food included?',
                    'a' => 'Food and meal arrangements depend on the selected accommodation and any confirmed service package. Please ask before booking.'
                ],
                [
                    'q' => 'Can I travel around Sri Lanka during my stay?',
                    'a' => 'Your travel plans should take account of transport options, your schedule, budget and any applicable entry or immigration conditions. The team may be able to help you explore travel arrangements where available.'
                ],
                [
                    'q' => 'Can you help with visa applications?',
                    'a' => 'The Lankan Nomad should not promise visa approval or immigration outcomes. Visitors should consult official Sri Lankan immigration information or a qualified professional for advice relevant to their circumstances.'
                ],
                [
                    'q' => 'When should I plan my stay?',
                    'a' => 'Starting early gives you more time to compare locations, check availability and organise relevant arrangements. The ideal lead time depends on your dates, destination and requirements.'
                ],
                [
                    'q' => 'How do I begin?',
                    'a' => 'Complete the Plan Your Stay enquiry form with your intended dates, preferred location, length of stay and the services you need. The team can then review your enquiry and explain the next steps.'
                ],
                [
                    'q' => 'Does submitting an enquiry confirm my booking?',
                    'a' => 'No. An enquiry is a request for information and planning. A booking or service arrangement is confirmed only when availability, price, terms and any required payment have been agreed.'
                ]
            ]
        ];

        $this->render('pages/faq', $data);
    }
}

