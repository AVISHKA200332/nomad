<?php

namespace App\Controllers;

use App\Core\Controller;

class LegalController extends Controller
{
    public function privacy(): void
    {
        $data = [
            'metaTitle' => 'Privacy Policy | The Lankan Nomad',
            'metaDescription' => 'The Lankan Nomad Privacy Policy. How we collect, store, process and protect your personal information in connection with extended stay enquiries in Sri Lanka.',
            'activePage' => 'privacy'
        ];

        $this->render('pages/legal/privacy', $data);
    }

    public function terms(): void
    {
        $data = [
            'metaTitle' => 'Terms & Conditions | The Lankan Nomad',
            'metaDescription' => 'The Lankan Nomad Terms and Conditions. Distinctions between enquiries and bookings, payment milestones, customer responsibilities, and governing law.',
            'activePage' => 'terms'
        ];

        $this->render('pages/legal/terms', $data);
    }

    public function cookie(): void
    {
        $data = [
            'metaTitle' => 'Cookie Policy | The Lankan Nomad',
            'metaDescription' => 'Information on how The Lankan Nomad uses cookies to enhance browsing experiences and analyze site analytics.',
            'activePage' => 'cookie'
        ];

        $this->render('pages/legal/cookie', $data);
    }
}

