<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($metaTitle ?? 'Avenora | Discover Extraordinary Travel Experiences') ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription ?? 'Explore unforgettable destinations, curated travel packages, and extraordinary adventures with Avenora.') ?>">

  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($metaTitle ?? 'Avenora | Discover Extraordinary Travel Experiences') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription ?? 'Explore unforgettable destinations, curated travel packages, and extraordinary adventures with Avenora.') ?>">
  <meta property="og:image" content="<?= asset('assets/images/banners/hero-bg.jpg') ?>">

  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Core & Design Tokens Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/variables.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/css/reset.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/css/global.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/css/layout.css') ?>">

  <!-- Component Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/components/navbar.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/css/components/buttons.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/css/components/cards.css') ?>">
  <link rel="stylesheet" href="<?= asset('assets/css/components/footer.css') ?>">

  <!-- Page Stylesheet -->
  <link rel="stylesheet" href="<?= asset('assets/css/pages/home.css') ?>">

  <!-- Responsive Breakpoints -->
  <link rel="stylesheet" href="<?= asset('assets/css/responsive.css') ?>">
</head>
<body>
