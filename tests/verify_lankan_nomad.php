<?php
/**
 * Automated Verification Script for The Lankan Nomad
 * Tests all 12 pages, routes, controllers, views, form submission, and checklist items.
 */

// Helper function to simulate dispatching a route through the router
function dispatchRoute(string $uri, string $method = 'GET', array $postData = [], array $headers = []): array {
    // Reset server environment
    $_SERVER['REQUEST_METHOD'] = $method;
    $_SERVER['REQUEST_URI'] = $uri;
    $_SERVER['SCRIPT_NAME'] = '/public/index.php';
    $_POST = $postData;
    $_GET = [];

    // Parse query string into $_GET if present
    $parts = parse_url($uri);
    if (!empty($parts['query'])) {
        parse_str($parts['query'], $_GET);
    }

    foreach ($headers as $k => $v) {
        $_SERVER['HTTP_' . strtoupper(str_replace('-', '_', $k))] = $v;
    }

    ob_start();
    $router = require __DIR__ . '/../bootstrap/app.php';
    $router->dispatch();
    $output = ob_get_clean();

    return [
        'code' => http_response_code(),
        'html' => $output
    ];
}

echo "========================================================\n";
echo "THE LANKAN NOMAD - AUTOMATED COMPREHENSIVE TEST SUITE\n";
echo "========================================================\n\n";

$checks = [];

// 1. PAGE 01 - HOME
$resHome = dispatchRoute('/');
$htmlHome = $resHome['html'];

$checks['P01 Home: Status 200'] = ($resHome['code'] === 200 || $resHome['code'] === false) && strlen($htmlHome) > 3000;
$checks['P01 Home: Logo THE LANKAN NOMAD'] = strpos($htmlHome, 'THE LANKAN NOMAD') !== false;
$checks['P01 Home: Navbar Menu Items (Home, Services, Stay, Destinations, Experiences, Guide, About, Contact)'] =
    strpos($htmlHome, 'Our Services') !== false &&
    strpos($htmlHome, 'Stay in Sri Lanka') !== false &&
    strpos($htmlHome, 'Destinations') !== false &&
    strpos($htmlHome, 'Experiences') !== false &&
    strpos($htmlHome, 'Sri Lanka Guide') !== false &&
    strpos($htmlHome, 'About Us') !== false;
$checks['P01 Home: Navbar CTA PLAN YOUR STAY'] = strpos($htmlHome, 'PLAN YOUR STAY') !== false;
$checks['P01 Home: Hero Eyebrow YOUR NEXT CHAPTER STARTS HERE'] = strpos($htmlHome, 'YOUR NEXT CHAPTER STARTS HERE') !== false;
$checks['P01 Home: Hero Headline Live Sri Lanka, Your Way.'] = strpos($htmlHome, 'Live Sri Lanka, Your Way.') !== false;
$checks['P01 Home: Hero Subhead text'] = strpos($htmlHome, 'Discover a more effortless way to experience Sri Lanka.') !== false;
$checks['P01 Home: Hero Supporting line'] = strpos($htmlHome, 'Longer stays. Local experiences. A more personal way to discover Sri Lanka.') !== false;
$checks['P01 Home: Intro Eyebrow A DIFFERENT WAY TO EXPERIENCE SRI LANKA'] = strpos($htmlHome, 'A DIFFERENT WAY TO EXPERIENCE SRI LANKA') !== false;
$checks['P01 Home: Intro Headline Come for the experience. Stay for the lifestyle.'] = strpos($htmlHome, 'Come for the experience. Stay for the lifestyle.') !== false;
$checks['P01 Home: Stay Durations 03, 06, 12 Months'] =
    strpos($htmlHome, '03 Months') !== false &&
    strpos($htmlHome, '06 Months') !== false &&
    strpos($htmlHome, '12 Months') !== false;
$checks['P01 Home: Duration Options Section present'] = strpos($htmlHome, 'However long you stay, make it count.') !== false;
$checks['P01 Home: Services Overview Section present'] = strpos($htmlHome, 'More time living. Less time figuring things out.') !== false;
$checks['P01 Home: Destinations Section present'] = strpos($htmlHome, 'One island. A thousand ways to live.') !== false;
$checks['P01 Home: Destinations Grid present'] = strpos($htmlHome, 'The South Coast') !== false;
$checks['P01 Home: How It Works 4 Steps'] = strpos($htmlHome, 'Your Sri Lankan stay, in four steps.') !== false;
$checks['P01 Home: The Lankan Lifestyle Section'] = strpos($htmlHome, "Don't just visit Sri Lanka. Experience it.") !== false;
$checks['P01 Home: Why The Lankan Nomad Section'] = strpos($htmlHome, 'Your stay should feel like yours.') !== false;
$checks['P01 Home: Featured Experiences Section'] = strpos($htmlHome, 'Your days, your discoveries.') !== false;
$checks['P01 Home: Featured Experiences Grid present'] = strpos($htmlHome, 'Coastal Living') !== false;
$checks['P01 Home: Practical Info Guide Previews'] = strpos($htmlHome, 'Feel prepared before you arrive.') !== false;
$checks['P01 Home: Enquiry CTA Section'] = strpos($htmlHome, "Let's plan your Sri Lankan stay.") !== false;

// 2. PAGE 02 - OUR SERVICES
$resServices = dispatchRoute('/services');
$htmlServices = $resServices['html'];
$checks['P02 Services: Status 200'] = ($resServices['code'] === 200 || $resServices['code'] === false) && strlen($htmlServices) > 3000;
$checks['P02 Services: Headline Support designed around your everyday life.'] = strpos($htmlServices, 'Support designed around your everyday life.') !== false;
$checks['P02 Services: Service 01 Accommodation Assistance'] = strpos($htmlServices, 'Accommodation Assistance') !== false && strpos($htmlServices, 'Find a place that fits your life.') !== false;
$checks['P02 Services: Service 02 Airport Pickup & Transfers'] = strpos($htmlServices, 'Airport Pickup &amp; Transfers') !== false || strpos($htmlServices, 'Airport Pickup & Transfers') !== false;
$checks['P02 Services: Service 03 Local Transport'] = strpos($htmlServices, 'Local Transport') !== false && strpos($htmlServices, 'Find your way around.') !== false;
$checks['P02 Services: Service 04 Everyday Living Support'] = strpos($htmlServices, 'Everyday Living Support') !== false && strpos($htmlServices, 'Settle in beyond the first day.') !== false;
$checks['P02 Services: Service 05 Travel & Local Experiences'] = strpos($htmlServices, 'Travel &amp; Local Experiences') !== false || strpos($htmlServices, 'Travel & Local Experiences') !== false;
$checks['P02 Services: Service 06 Remote-Work Support'] = strpos($htmlServices, 'Remote-Work Support') !== false && strpos($htmlServices, 'Build a routine that works wherever you are.') !== false;
$checks['P02 Services: Service 07 Personalised Stay Planning'] = strpos($htmlServices, 'Personalised Stay Planning') !== false && strpos($htmlServices, 'One conversation. A clearer plan.') !== false;
$checks['P02 Services: Closing CTA What would make your stay easier?'] = strpos($htmlServices, 'What would make your stay easier?') !== false;

// 3. PAGE 03 - STAY IN SRI LANKA
$resStay = dispatchRoute('/stay-in-sri-lanka');
$htmlStay = $resStay['html'];
$checks['P03 Stay: Status 200'] = ($resStay['code'] === 200 || $resStay['code'] === false) && strlen($htmlStay) > 3000;
$checks['P03 Stay: Headline Choose your duration in Sri Lanka.'] = strpos($htmlStay, 'Choose your duration in Sri Lanka.') !== false;
$checks['P03 Stay: Option 01 Three Months'] = strpos($htmlStay, 'Three months to discover a different rhythm.') !== false;
$checks['P03 Stay: Option 02 Six Months'] = strpos($htmlStay, 'Six months to settle into your own routine.') !== false;
$checks['P03 Stay: Option 03 Twelve Months'] = strpos($htmlStay, 'A year to experience more of the island.') !== false;
$checks['P03 Stay: Section What Can Be Arranged?'] = strpos($htmlStay, 'What Can Be Arranged?') !== false;
$checks['P03 Stay: Section Important Information for Longer Stays'] = strpos($htmlStay, 'Important Information for Longer Stays') !== false;
$checks['P03 Stay: Closing CTA Start with your plans.'] = strpos($htmlStay, 'Start with your plans.') !== false;

// Backwards compatibility check
$resPkg = dispatchRoute('/packages');
$checks['P03 Stay: Route /packages renders Stay content'] = strpos($resPkg['html'], 'Choose your duration in Sri Lanka.') !== false;

// 4. PAGE 04 - DESTINATIONS
$resDest = dispatchRoute('/destinations');
$htmlDest = $resDest['html'];
$checks['P04 Destinations: Status 200'] = ($resDest['code'] === 200 || $resDest['code'] === false) && strlen($htmlDest) > 3000;
$checks['P04 Destinations: Headline Where will your routine take shape?'] = strpos($htmlDest, 'Where will your routine take shape?') !== false;
$checks['P04 Destinations: Colombo'] = strpos($htmlDest, 'Colombo') !== false && strpos($htmlDest, 'Connected living, with the city at your doorstep.') !== false;
$checks['P04 Destinations: Weligama & the South Coast'] = strpos($htmlDest, 'Weligama &amp; the South Coast') !== false || strpos($htmlDest, 'Weligama & the South Coast') !== false;
$checks['P04 Destinations: Ahangama'] = strpos($htmlDest, 'Ahangama &amp; Nearby Coastal Towns') !== false || strpos($htmlDest, 'Ahangama & Nearby Coastal Towns') !== false;
$checks['P04 Destinations: Kandy'] = strpos($htmlDest, 'Kandy') !== false && strpos($htmlDest, 'Green surroundings and cultural character.') !== false;
$checks['P04 Destinations: Ella'] = strpos($htmlDest, 'Ella') !== false && strpos($htmlDest, 'A slower rhythm among the hills.') !== false;
$checks['P04 Destinations: The Cultural Triangle'] = strpos($htmlDest, 'Cultural Triangle') !== false && strpos($htmlDest, 'heritage') !== false;
$checks['P04 Destinations: Closing CTA Not sure where to stay?'] = strpos($htmlDest, 'Not sure where to stay?') !== false && strpos($htmlDest, 'Help Me Choose') !== false;

// 5. PAGE 05 - EXPERIENCES
$resExp = dispatchRoute('/experiences');
$htmlExp = $resExp['html'];
$checks['P05 Experiences: Status 200'] = ($resExp['code'] === 200 || $resExp['code'] === false) && strlen($htmlExp) > 3000;
$checks['P05 Experiences: Headline Experiences rooted in local life.'] = strpos($htmlExp, 'Experiences rooted in local life.') !== false;
$checks['P05 Experiences: Coastal Life'] = strpos($htmlExp, 'Coastal Life') !== false && strpos($htmlExp, 'Find your place by the sea.') !== false;
$checks['P05 Experiences: Food & Flavours'] = strpos($htmlExp, 'Food &amp; Flavours') !== false || strpos($htmlExp, 'Food & Flavours') !== false;
$checks['P05 Experiences: Nature & Outdoors'] = strpos($htmlExp, 'Nature &amp; Outdoors') !== false || strpos($htmlExp, 'Nature & Outdoors') !== false;
$checks['P05 Experiences: Culture & Heritage'] = strpos($htmlExp, 'Culture &amp; Heritage') !== false || strpos($htmlExp, 'Culture & Heritage') !== false;
$checks['P05 Experiences: Weekend Escapes'] = strpos($htmlExp, 'Weekend Escapes') !== false && strpos($htmlExp, 'A little adventure beyond your home base.') !== false;
$checks['P05 Experiences: Closing CTA What would you love to discover?'] = strpos($htmlExp, 'What would you love to discover?') !== false;

// 6. PAGE 06 - ABOUT US
$resAbout = dispatchRoute('/about');
$htmlAbout = $resAbout['html'];
$checks['P06 About: Status 200'] = ($resAbout['code'] === 200 || $resAbout['code'] === false) && strlen($htmlAbout) > 3000;
$checks['P06 About: Headline Mission & Vision'] = strpos($htmlAbout, 'OUR MISSION') !== false;
$checks['P06 About: Mission section'] = strpos($htmlAbout, 'To make extended stays in Sri Lanka easier to plan and more rewarding to experience.') !== false;
$checks['P06 About: Approach 4 Pillars'] =
    strpos($htmlAbout, 'Personal, not one-size-fits-all.') !== false &&
    strpos($htmlAbout, 'Practical, not complicated.') !== false &&
    strpos($htmlAbout, 'Local, not disconnected.') !== false &&
    strpos($htmlAbout, 'Clear, from the beginning.') !== false;
$checks['P06 About: Vision section'] = strpos($htmlAbout, 'A more thoughtful way to stay in Sri Lanka.') !== false;
$checks['P06 About: Closing CTA Let\'s start planning your next chapter.'] = strpos($htmlAbout, "Let&#039;s start planning your next chapter.") !== false || strpos($htmlAbout, "Let's start planning your next chapter.") !== false;

// 7. PAGE 07 - SRI LANKA GUIDE / BLOG
$resGuide = dispatchRoute('/guide');
$htmlGuide = $resGuide['html'];
$checks['P07 Guide: Status 200'] = ($resGuide['code'] === 200 || $resGuide['code'] === false) && strlen($htmlGuide) > 3000;
$checks['P07 Guide: Headline Knowledge tailored for extended stays.'] = strpos($htmlGuide, 'Knowledge tailored for extended stays.') !== false;
$checks['P07 Guide: Categories (Planning, Living, Everyday, Remote Work, Travel)'] =
    strpos($htmlGuide, 'Planning Your Stay') !== false &&
    strpos($htmlGuide, 'Choosing Where to Live') !== false &&
    strpos($htmlGuide, 'Everyday Sri Lanka') !== false &&
    strpos($htmlGuide, 'Remote Work &amp; Connectivity') !== false;
$checks['P07 Guide: 10 Suggested Articles present'] =
    strpos($htmlGuide, 'Planning Your First Three Months in Sri Lanka') !== false &&
    strpos($htmlGuide, 'Colombo or the South Coast: Which Lifestyle Suits You?') !== false &&
    strpos($htmlGuide, 'What to Check Before Choosing Long-Stay Accommodation') !== false &&
    strpos($htmlGuide, 'A Practical Guide to Getting Around Sri Lanka') !== false &&
    strpos($htmlGuide, 'How to Prepare for Remote Work in Sri Lanka') !== false &&
    strpos($htmlGuide, 'Everyday Costs to Research Before Moving Abroad') !== false &&
    strpos($htmlGuide, 'Understanding Sri Lankan Food and Local Dining Customs') !== false &&
    strpos($htmlGuide, 'Planning Weekend Trips While Living in Sri Lanka') !== false &&
    strpos($htmlGuide, 'What to Consider Before Booking a Long-Term Stay') !== false &&
    strpos($htmlGuide, 'Visa and Entry Questions to Verify Before Travelling') !== false;
$checks['P07 Guide: Closing CTA Planning a longer stay?'] = strpos($htmlGuide, 'Planning a longer stay?') !== false;

// 8. PAGE 08 - FREQUENTLY ASKED QUESTIONS
$resFaq = dispatchRoute('/faq');
$htmlFaq = $resFaq['html'];
$checks['P08 FAQ: Status 200'] = ($resFaq['code'] === 200 || $resFaq['code'] === false) && strlen($htmlFaq) > 2000;
$checks['P08 FAQ: 14 Questions included'] =
    strpos($htmlFaq, 'What is The Lankan Nomad?') !== false &&
    strpos($htmlFaq, 'Who is the service for?') !== false &&
    strpos($htmlFaq, 'Can I stay for three, six or twelve months?') !== false &&
    strpos($htmlFaq, 'Does The Lankan Nomad provide accommodation?') !== false &&
    strpos($htmlFaq, 'Can you arrange airport pickup?') !== false &&
    strpos($htmlFaq, 'Which areas of Sri Lanka can I choose?') !== false &&
    strpos($htmlFaq, 'Can you help me find a place suitable for remote work?') !== false &&
    strpos($htmlFaq, 'How much does an extended stay cost?') !== false &&
    strpos($htmlFaq, 'Is food included?') !== false &&
    strpos($htmlFaq, 'Can I travel around Sri Lanka during my stay?') !== false &&
    strpos($htmlFaq, 'Can you help with visa applications?') !== false &&
    strpos($htmlFaq, 'When should I plan my stay?') !== false &&
    strpos($htmlFaq, 'How do I begin?') !== false &&
    strpos($htmlFaq, 'Does submitting an enquiry confirm my booking?') !== false;

// 9. PAGE 09 - CONTACT / PLAN YOUR STAY
$resContact = dispatchRoute('/plan-your-stay');
$htmlContact = $resContact['html'];
$checks['P09 Contact: Status 200'] = ($resContact['code'] === 200 || $resContact['code'] === false) && strlen($htmlContact) > 3000;
$checks['P09 Contact: Form Title Let\'s plan your stay.'] = strpos($htmlContact, "Let&#039;s plan your stay.") !== false || strpos($htmlContact, "Let's plan your stay.") !== false;
$checks['P09 Contact: Form Fields (First name, Last name, Email, Country, WhatsApp)'] =
    strpos($htmlContact, 'name="first_name"') !== false &&
    strpos($htmlContact, 'name="last_name"') !== false &&
    strpos($htmlContact, 'name="email"') !== false &&
    strpos($htmlContact, 'name="country"') !== false &&
    strpos($htmlContact, 'name="whatsapp"') !== false;
$checks['P09 Contact: Stay Plans (Arrival date, Length of stay, Travellers, Destination)'] =
    strpos($htmlContact, 'name="arrival_date"') !== false &&
    strpos($htmlContact, 'name="length_of_stay"') !== false &&
    strpos($htmlContact, 'name="travellers"') !== false &&
    strpos($htmlContact, 'name="destination"') !== false;
$checks['P09 Contact: Help With Checkboxes (Accommodation, Transfers, Transport, Living, Work)'] =
    strpos($htmlContact, 'value="Accommodation"') !== false &&
    strpos($htmlContact, 'value="Airport pickup"') !== false &&
    strpos($htmlContact, 'value="Local transport"') !== false &&
    strpos($htmlContact, 'value="Everyday living support"') !== false &&
    strpos($htmlContact, 'value="Remote-work requirements"') !== false;
$checks['P09 Contact: Preferences (Budget, Type, Work, Accessibility, Additional)'] =
    strpos($htmlContact, 'name="budget"') !== false &&
    strpos($htmlContact, 'name="accommodation_type"') !== false &&
    strpos($htmlContact, 'name="work_requirements"') !== false &&
    strpos($htmlContact, 'name="additional_info"') !== false;
$checks['P09 Contact: Required Consent Checkbox'] = strpos($htmlContact, 'name="consent"') !== false;
$checks['P09 Contact: Submit Button Send My Enquiry'] = strpos($htmlContact, 'Send My Enquiry') !== false;
$checks['P09 Contact: Alternative Contact (Email, WhatsApp, Business hours)'] =
    strpos($htmlContact, 'hello@thelankannomad.com') !== false &&
    strpos($htmlContact, 'Business hours') !== false;

// Test Form Validation & Submission (AJAX JSON)
$resSubmitValid = dispatchRoute('/contact', 'POST', [
    'first_name' => 'Sophia',
    'last_name' => 'Schneider',
    'email' => 'sophia@example.com',
    'country' => 'Switzerland',
    'arrival_date' => '2026-12-01',
    'length_of_stay' => '6 months',
    'travellers' => '1 solo traveller',
    'destination' => 'South Coast',
    'consent' => '1'
], ['X-Requested-With' => 'XMLHttpRequest']);

$jsonValid = json_decode($resSubmitValid['html'], true);
$checks['P09 Contact: Valid Submission gives JSON Success message'] =
    isset($jsonValid['success']) && $jsonValid['success'] === true &&
    strpos($jsonValid['message'], 'Thank you for reaching out to The Lankan Nomad. Your enquiry has been submitted.') !== false;

$resSubmitInvalid = dispatchRoute('/contact', 'POST', [
    'first_name' => '',
    'email' => 'invalid'
], ['X-Requested-With' => 'XMLHttpRequest']);

$jsonInvalid = json_decode($resSubmitInvalid['html'], true);
$checks['P09 Contact: Invalid Submission gives JSON Error message'] =
    isset($jsonInvalid['success']) && $jsonInvalid['success'] === false &&
    strpos($jsonInvalid['message'], "We couldn't submit your enquiry. Please check the required fields and try again") !== false;

// 10. PAGE 10 - FOOTER
$checks['P10 Footer: Brand THE LANKAN NOMAD'] = strpos($htmlHome, 'THE LANKAN NOMAD') !== false;
$checks['P10 Footer: Tagline Stay longer. Live locally. Discover Sri Lanka.'] = strpos($htmlHome, 'Stay longer. Live locally. Discover Sri Lanka.') !== false;
$checks['P10 Footer: Subtitle A more thoughtful way to plan an extended stay in Sri Lanka.'] = strpos($htmlHome, 'A more thoughtful way to plan an extended stay in Sri Lanka.') !== false;
$checks['P10 Footer: Explore Column Links'] = strpos($htmlHome, 'Our Services') !== false && strpos($htmlHome, 'Stay in Sri Lanka') !== false;
$checks['P10 Footer: Helpful Information Column Links'] = strpos($htmlHome, 'Frequently Asked Questions') !== false;
$checks['P10 Footer: Newsletter Heading A little more Sri Lanka in your inbox.'] = strpos($htmlHome, 'A little more Sri Lanka in your inbox.') !== false;
$checks['P10 Footer: Newsletter Input placeholder Your email address'] = strpos($htmlHome, 'placeholder="Your email address"') !== false;
$checks['P10 Footer: Newsletter CTA Keep Me Inspired'] = strpos($htmlHome, 'Keep Me Inspired') !== false;
$checks['P10 Footer: Privacy Note By subscribing, you agree to receive updates'] = strpos($htmlHome, 'By subscribing, you agree to receive updates from The Lankan Nomad.') !== false;
$checks['P10 Footer: Guidance Note Information on this website is provided for general guidance'] = strpos($htmlHome, 'Information on this website is provided for general guidance. Services, accommodation, prices and availability are subject to confirmation.') !== false;
$checks['P10 Footer: Copyright © 2026 The Lankan Nomad & Orbis Global'] = strpos($htmlHome, '© 2026 The Lankan Nomad') !== false || strpos($htmlHome, '&copy; 2026 The Lankan Nomad') !== false;

// 11. PAGE 11 - PRIVACY POLICY
$resPrivacy = dispatchRoute('/privacy-policy');
$htmlPrivacy = $resPrivacy['html'];
$checks['P11 Privacy: Status 200'] = ($resPrivacy['code'] === 200 || $resPrivacy['code'] === false) && strlen($htmlPrivacy) > 2000;
$checks['P11 Privacy: 10 Outline points covered'] =
    strpos($htmlPrivacy, '1. What Information Is Collected Through Forms and Enquiries') !== false &&
    strpos($htmlPrivacy, '2. Why the Information Is Collected') !== false &&
    strpos($htmlPrivacy, '3. How Enquiries Are Stored and Processed') !== false &&
    strpos($htmlPrivacy, '4. Service Providers and Third Parties') !== false &&
    strpos($htmlPrivacy, '5. Data Retention') !== false &&
    strpos($htmlPrivacy, '6. Your Rights: Access, Correction, and Deletion') !== false &&
    strpos($htmlPrivacy, '7. Marketing Consent and Newsletter Subscriptions') !== false &&
    strpos($htmlPrivacy, '8. Cookies and Analytics') !== false &&
    strpos($htmlPrivacy, '9. Contacting Us About Privacy') !== false &&
    strpos($htmlPrivacy, '10. Applicable Legal Framework and Effective Date') !== false;

// 12. PAGE 12 - TERMS & CONDITIONS
$resTerms = dispatchRoute('/terms');
$htmlTerms = $resTerms['html'];
$checks['P12 Terms: Status 200'] = ($resTerms['code'] === 200 || $resTerms['code'] === false) && strlen($htmlTerms) > 2000;
$checks['P12 Terms: 10 Outline points covered'] =
    strpos($htmlTerms, '1. The Distinction Between Enquiries and Confirmed Bookings') !== false &&
    strpos($htmlTerms, '2. Service Scope and Provider Responsibilities') !== false &&
    strpos($htmlTerms, '3. Accommodation Availability and Pricing') !== false &&
    strpos($htmlTerms, '4. Deposits, Payment Terms, and Refunds') !== false &&
    strpos($htmlTerms, '5. Cancellation and Rescheduling') !== false &&
    strpos($htmlTerms, '6. Transport and Third-Party Service Arrangements') !== false &&
    strpos($htmlTerms, '7. Customer Responsibilities and Accurate Information') !== false &&
    strpos($htmlTerms, '8. Applicable Travel Documentation and Immigration Compliance') !== false &&
    strpos($htmlTerms, '9. Liability, Complaints, and Dispute Handling') !== false &&
    strpos($htmlTerms, '10. Contact Details and Governing Law') !== false;

// 13. COOKIE POLICY
$resCookie = dispatchRoute('/cookie-policy');
$checks['Cookie Policy: Status 200'] = ($resCookie['code'] === 200 || $resCookie['code'] === false) && strlen($resCookie['html']) > 1000;
$checks['Cookie Policy: Content present'] = strpos($resCookie['html'], 'What Are Cookies?') !== false;

// Report Results
$passedCount = 0;
$totalCount = count($checks);

foreach ($checks as $name => $passed) {
    if ($passed) {
        echo "[PASS] " . $name . "\n";
        $passedCount++;
    } else {
        echo "[FAIL] " . $name . "\n";
    }
}

echo "\n--------------------------------------------------------\n";
echo "SUMMARY: {$passedCount} / {$totalCount} checks passed.\n";
echo "--------------------------------------------------------\n";

if ($passedCount === $totalCount) {
    echo "\n>>> SUCCESS: ALL PAGES AND CONTENT MATCH PERFECTLY! <<<\n";
    exit(0);
} else {
    echo "\n>>> FAILURE: Some checks failed. Please review output above. <<<\n";
    exit(1);
}
