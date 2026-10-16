<?php

namespace App\Controllers;

use App\Core\Controller;

class PackageController extends Controller
{
    public function index(): void
    {
        $packages = [
            [
                'id' => 1,
                'slug' => 'bali-wellness-journey',
                'title' => "7-Day Bali Wellness<br>Journey",
                'raw_title' => '7-Day Bali Wellness Journey',
                'description' => 'A calm escape designed around private villas, spa rituals, slow mornings, and cultural discovery.',
                'image' => 'assets/images/packages/package-1.jpg',
                'image_alt' => '7-Day Bali Wellness Journey overwater villa with ocean boardwalk',
                'cta_text' => 'Explore Package',
                'cta_url' => url('/packages#package-1'),
            ],
            [
                'id' => 2,
                'slug' => 'maldives-honeymoon-stay',
                'title' => "Maldives<br>Honeymoon Stay",
                'raw_title' => 'Maldives Honeymoon Stay',
                'description' => 'A calm escape designed around private villas, spa rituals, slow mornings, and cultural discovery.',
                'image' => 'assets/images/packages/pkg-maldives.jpg',
                'image_alt' => 'Maldives Honeymoon Stay luxury overwater bungalow with tropical palms',
                'cta_text' => 'Explore Package',
                'cta_url' => url('/packages#package-2'),
            ],
            [
                'id' => 3,
                'slug' => 'morocco-desert-experience',
                'title' => "Morocco Desert<br>Experience",
                'raw_title' => 'Morocco Desert Experience',
                'description' => 'A calm escape designed around private villas, spa rituals, slow mornings, and cultural discovery.',
                'image' => 'assets/images/packages/pkg-morocco.jpg',
                'image_alt' => 'Morocco Desert Experience minaret tower and historic architecture',
                'cta_text' => 'Explore Package',
                'cta_url' => url('/packages#package-3'),
            ],
            [
                'id' => 4,
                'slug' => 'thailand-bali-wellness-journey',
                'title' => "Thailand Bali<br>Wellness Journey",
                'raw_title' => 'Thailand Bali Wellness Journey',
                'description' => 'A calm escape designed around private villas, spa rituals, slow mornings, and cultural discovery.',
                'image' => 'assets/images/packages/pkg-thailand.jpg',
                'image_alt' => 'Thailand coastal scenery with limestone karst cliffs and traditional boats',
                'cta_text' => 'Explore Package',
                'cta_url' => url('/packages#package-4'),
            ],
            [
                'id' => 5,
                'slug' => 'private-dining-experience',
                'title' => "Private Dining<br>Experience",
                'raw_title' => 'Private Dining Experience',
                'description' => 'Transfers, timing, and arrival details are organized to keep the experience smooth.',
                'image' => 'assets/images/packages/pkg-private-dining.jpg',
                'image_alt' => 'Private Dining Experience luxury tropical island atoll lagoon',
                'cta_text' => 'Explore Package',
                'cta_url' => url('/packages#package-5'),
            ],
        ];

        $data = [
            'metaTitle' => 'Travel Packages | Avenora — Find Your Perfect Trip',
            'metaDescription' => "Explore Avenora's curated travel packages, from Maldives honeymoon escapes and tropical retreats to cultural journeys and unforgettable adventures.",
            'activePage' => 'packages',
            'packages' => $packages,
        ];

        $this->render('pages/package', $data);
    }
}