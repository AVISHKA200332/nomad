<?php
$html = file_get_contents('http://localhost/avenora/public/packages');
if ($html === false) {
    echo "ERROR: Could not fetch packages page\n";
    exit(1);
}

$checks = [
    'HTML Length > 5000' => strlen($html) > 5000,
    'Page Title matches' => strpos($html, 'Travel Packages | Avenora') !== false,
    'Meta Description present' => strpos($html, "Explore Avenora's curated travel packages") !== false,
    'Package CSS linked' => strpos($html, 'assets/css/pages/package.css') !== false,
    'Navbar active state on Package' => strpos($html, 'nav-link is-active">Package</a>') !== false,
    'Hero Heading: Find Your Perfect Trip' => strpos($html, 'Find Your Perfect Trip') !== false,
    'Hero CTA: Explore About Us' => strpos($html, 'Explore About Us') !== false,
    'Hero Background Image' => strpos($html, 'package-hero-bg.jpg') !== false,
    'Intro Badge: Travel Packages' => strpos($html, 'Travel Packages</span>') !== false,
    'Intro Heading: Explore Our Travel Packages' => strpos($html, 'Explore Our Travel<br>') !== false,
    'Exactly 5 package cards' => substr_count($html, 'class="pkg-card"') === 5,
    'Package 1: 7-Day Bali Wellness Journey' => strpos($html, '7-Day Bali Wellness') !== false && strpos($html, 'package-1.jpg') !== false,
    'Package 2: Maldives Honeymoon Stay' => strpos($html, 'Maldives<br>') !== false && strpos($html, 'pkg-maldives.jpg') !== false,
    'Package 3: Morocco Desert Experience' => strpos($html, 'Morocco Desert') !== false && strpos($html, 'pkg-morocco.jpg') !== false,
    'Package 4: Thailand Bali Wellness Journey' => strpos($html, 'Thailand Bali') !== false && strpos($html, 'pkg-thailand.jpg') !== false,
    'Package 5: Private Dining Experience' => strpos($html, 'Private Dining') !== false && strpos($html, 'pkg-private-dining.jpg') !== false,
    '5x Explore Package buttons' => substr_count($html, 'Explore Package') === 5,
    'CTA Banner Title' => strpos($html, 'Moments that make the') !== false,
    'CTA Banner Button: See All Maps' => strpos($html, 'See All Maps') !== false,
    'Footer Active state on Package' => strpos($html, 'footer-nav') !== false && strpos($html, 'is-active">Package</a>') !== false,
    'Footer Email: info@thelankannomad.com' => strpos($html, 'info@thelankannomad.com') !== false,
];

$allPassed = true;
foreach ($checks as $name => $passed) {
    echo ($passed ? "[PASS] " : "[FAIL] ") . $name . "\n";
    if (!$passed) $allPassed = false;
}

if ($allPassed) {
    echo "\n=== ALL VERIFICATION CHECKS PASSED PERFECTLY ===\n";
    exit(0);
} else {
    echo "\n=== SOME CHECKS FAILED ===\n";
    exit(1);
}
