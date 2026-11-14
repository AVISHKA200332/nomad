<?php
/**
 * Automated Verification Script for Avenora About Page (Phase 05)
 */

$baseUrl = 'http://localhost/avenora/public';
$aboutHtml = @file_get_contents($baseUrl . '/about');

if ($aboutHtml === false) {
    echo "ERROR: Could not fetch {$baseUrl}/about\n";
    exit(1);
}

$checks = [
    // Page Architecture & Metadata
    'HTML Length > 6000 bytes' => strlen($aboutHtml) > 6000,
    'Page Title matches specification' => strpos($aboutHtml, 'About Avenora | Personalized Travel &amp; Extraordinary Journeys') !== false,
    'Meta description present' => strpos($aboutHtml, "Discover Avenora's approach to thoughtful travel") !== false,
    'about.css stylesheet linked' => strpos($aboutHtml, 'assets/css/pages/about.css') !== false,
    'about.js script module linked' => strpos($aboutHtml, 'assets/js/modules/about.js') !== false,
    'Navbar active state on About' => strpos($aboutHtml, 'nav-link is-active">About</a>') !== false,

    // Section 01: Hero
    'Hero heading: Your next journey awaits' => strpos($aboutHtml, 'Your next journey<br>') !== false && strpos($aboutHtml, 'awaits') !== false,
    'Hero eyebrow: About Avenora' => strpos($aboutHtml, 'About Avenora</span>') !== false,
    'Hero Contact Us button' => strpos($aboutHtml, '<span>Contact Us</span>') !== false,
    'Hero Explore Journeys button' => strpos($aboutHtml, '<span>Explore Journeys</span>') !== false,
    'Hero background image: about-hero-bg.webp' => strpos($aboutHtml, 'about-hero-bg.webp') !== false,

    // Section 02: Introduction
    'Intro traveler image: intro-traveler.webp' => strpos($aboutHtml, 'intro-traveler.webp') !== false,
    'Intro eyebrow: About Us' => strpos($aboutHtml, 'About Us</span>') !== false,
    'Intro heading: A travel studio for people' => strpos($aboutHtml, 'A travel studio for people<br>') !== false,
    'Intro copy present' => strpos($aboutHtml, 'Avenora is a travel-focused studio built around') !== false,
    'Intro CTA: Explore Packages' => strpos($aboutHtml, '<span>Explore Packages</span>') !== false,

    // Section 03: Statistics
    'Exactly 3 stat cards' => substr_count($aboutHtml, 'about-stat-card') === 3,
    'Stat 1: 139++' => strpos($aboutHtml, '139++') !== false,
    'Stat 2: 13K+ (Royal Blue highlight)' => strpos($aboutHtml, 'stat-card-blue') !== false && strpos($aboutHtml, '13K+') !== false,
    'Stat 3: 130+' => strpos($aboutHtml, '130+') !== false,

    // Section 04: Travel Experiences (Expanding Cards)
    'Experience heading present' => strpos($aboutHtml, 'Find the kind of travel<br>') !== false,
    'Exactly 6 experience cards' => substr_count($aboutHtml, 'about-exp-card') === 6,
    'Active expanded card present' => strpos($aboutHtml, 'about-exp-card is-expanded') !== false,
    'Category 1: Luxury Honeymoon' => strpos($aboutHtml, 'Luxury Honeymoon') !== false,
    'Category 2: Nature Escapes' => strpos($aboutHtml, 'Nature Escapes') !== false,
    'Category 3: Cultural Journeys' => strpos($aboutHtml, 'Cultural Journeys') !== false,
    'Category 4: Mountain Adventures' => strpos($aboutHtml, 'Mountain Adventures') !== false,
    'Category 5: Coastal Retreats' => strpos($aboutHtml, 'Coastal Retreats') !== false,
    'Category 6: Private Travel' => strpos($aboutHtml, 'Private Travel') !== false,
    'Expanded CTA button: Explore this trip' => strpos($aboutHtml, 'Explore this trip') !== false,

    // Section 05: Dark Navy Journey Timeline
    'Marquee text: COASTS ✧ CITIES ✧ SAFARI' => strpos($aboutHtml, 'COASTS ✧ CITIES ✧ SAFARI') !== false,
    'Timeline heading present' => strpos($aboutHtml, 'How your journey unfolds,<br>') !== false,
    'Timeline counter: 03 / 05' => strpos($aboutHtml, 'timeline-step-current">03') !== false && strpos($aboutHtml, '/ 05') !== false,
    'Exactly 5 timeline step columns' => substr_count($aboutHtml, 'about-timeline-col') === 5,
    'Step 3 is active (Royal blue card)' => strpos($aboutHtml, 'data-step="03"') !== false && strpos($aboutHtml, 'timeline-card-blue') !== false,
    'Alternating cards (above and below)' => strpos($aboutHtml, 'timeline-zone-top') !== false && strpos($aboutHtml, 'timeline-zone-bottom') !== false,

    // Section 06: Why Avenora
    'Why Avenora section present' => strpos($aboutHtml, 'Why travellers<br>') !== false,
    'Exactly 4 Why Avenora feature cards' => substr_count($aboutHtml, 'class="about-why-card"') === 4,
    'Why Card 1: Personal, Not Packaged' => strpos($aboutHtml, 'Personal, Not Packaged') !== false,
    'Why Card 2: Beautifully Planned Details' => strpos($aboutHtml, 'Beautifully Planned Details') !== false,
    'Why Card 3: Handpicked Stays' => strpos($aboutHtml, 'Handpicked Stays') !== false,
    'Why Card 4: Local Expertise' => strpos($aboutHtml, 'Local Expertise') !== false,

    // Section 07: Staggered Gallery
    'Gallery heading present' => strpos($aboutHtml, 'Journeys we love to design') !== false,
    'Exactly 4 gallery cards' => substr_count($aboutHtml, 'about-gal-card') === 4,
    'Staggered offsets present' => strpos($aboutHtml, 'gal-offset-down') !== false && strpos($aboutHtml, 'gal-offset-up') !== false,
    'Gallery pill: Island Escapes' => strpos($aboutHtml, 'Island Escapes</span>') !== false,
    'Gallery pill: Coastal Villas' => strpos($aboutHtml, 'Coastal Villas</span>') !== false,
    'Gallery pill: Scenic Valleys' => strpos($aboutHtml, 'Scenic Valleys</span>') !== false,
    'Gallery pill: Mountain Trails' => strpos($aboutHtml, 'Mountain Trails</span>') !== false,

    // Section 08: Mountain CTA Banner
    'CTA banner heading' => strpos($aboutHtml, 'Moments that make the<br>') !== false,
    'CTA button: See All Maps' => strpos($aboutHtml, 'See All Maps') !== false,

    // Section 09: Footer
    'Footer active state on About' => strpos($aboutHtml, 'footer-nav') !== false && strpos($aboutHtml, 'is-active">About</a>') !== false,
    'Footer email: info@thelankannomad.com' => strpos($aboutHtml, 'info@thelankannomad.com') !== false,
];

// Regression checks on other pages
$homeHtml = @file_get_contents($baseUrl . '/');
$destHtml = @file_get_contents($baseUrl . '/destinations');
$pkgHtml = @file_get_contents($baseUrl . '/packages');

$checks['Regression: Home page loads (len > 5000)'] = ($homeHtml !== false && strlen($homeHtml) > 5000);
$checks['Regression: Destinations page loads (len > 5000)'] = ($destHtml !== false && strlen($destHtml) > 5000);
$checks['Regression: Packages page loads (len > 5000)'] = ($pkgHtml !== false && strlen($pkgHtml) > 5000);

$allPassed = true;
foreach ($checks as $name => $passed) {
    echo ($passed ? "[PASS] " : "[FAIL] ") . $name . "\n";
    if (!$passed) $allPassed = false;
}

if ($allPassed) {
    echo "\n=== ALL " . count($checks) . " VERIFICATION CHECKS PASSED PERFECTLY ===\n";
    exit(0);
} else {
    echo "\n=== SOME CHECKS FAILED ===\n";
    exit(1);
}
