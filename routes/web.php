<?php

/**
 * The Lankan Nomad - Web Routes Definition
 * © Orbis Global - 2026
 *
 * Maps HTTP routes to controllers and actions.
 */

/** @var \App\Core\Router $router */

// Page 01: Home
$router->get('/', 'HomeController@index');

// Page 02: Our Services
$router->get('/services', 'ServiceController@index');

// Page 03: Stay in Sri Lanka (with aliases for clean UX and backwards compatibility)
$router->get('/stay-in-sri-lanka', 'StayController@index');
$router->get('/stay', 'StayController@index');
$router->get('/packages', 'StayController@index');

// Page 04: Destinations
$router->get('/destinations', 'DestinationController@index');

// Page 05: Experiences
$router->get('/experiences', 'ExperienceController@index');

// Page 06: About Us
$router->get('/about', 'AboutController@index');

// Page 07: Sri Lanka Guide / Blog
$router->get('/guide', 'GuideController@index');
$router->get('/blog', 'GuideController@index');

// Page 08: Frequently Asked Questions
$router->get('/faq', 'FaqController@index');

// Page 09: Contact / Plan Your Stay
$router->get('/contact', 'ContactController@index');
$router->get('/plan-your-stay', 'ContactController@index');
$router->post('/contact', 'ContactController@submit');
$router->post('/plan-your-stay', 'ContactController@submit');

// Page 11 & 12: Legal & Policies
$router->get('/privacy-policy', 'LegalController@privacy');
$router->get('/terms', 'LegalController@terms');
$router->get('/cookie-policy', 'LegalController@cookie');
