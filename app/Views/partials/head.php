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
  <link rel="stylesheet" href="<?= asset('assets/css/variables.css') ?>?v=2.0">
  <link rel="stylesheet" href="<?= asset('assets/css/reset.css') ?>?v=2.0">
  <link rel="stylesheet" href="<?= asset('assets/css/global.css') ?>?v=2.0">
  <link rel="stylesheet" href="<?= asset('assets/css/layout.css') ?>?v=2.0">

  <!-- Component Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/components/navbar.css') ?>?v=2.0">
  <link rel="stylesheet" href="<?= asset('assets/css/components/buttons.css') ?>?v=2.0">
  <link rel="stylesheet" href="<?= asset('assets/css/components/cards.css') ?>?v=2.0">
  <link rel="stylesheet" href="<?= asset('assets/css/components/footer.css') ?>?v=2.0">

  <!-- Page Stylesheet -->
  <?php if (($activePage ?? 'home') === 'destinations'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/destination.css') ?>?v=2.0">
  <?php elseif (($activePage ?? 'home') === 'packages'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/package.css') ?>?v=2.0">
  <?php elseif (($activePage ?? 'home') === 'about'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/about.css') ?>?v=2.0">
  <?php else: ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/home.css') ?>?v=2.0">
  <?php endif; ?>

  <!-- Responsive Breakpoints -->
  <link rel="stylesheet" href="<?= asset('assets/css/responsive.css') ?>?v=2.0">
</head>
<body>
