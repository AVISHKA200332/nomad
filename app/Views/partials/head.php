<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($metaTitle ?? 'The Lankan Nomad | Live Sri Lanka, Your Way') ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription ?? 'Discover a more effortless way to experience Sri Lanka. Extended stays, accommodation, arrival assistance, and local living support.') ?>">

  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($metaTitle ?? 'The Lankan Nomad | Live Sri Lanka, Your Way') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription ?? 'Longer stays. Local experiences. A more personal way to discover Sri Lanka.') ?>">
  <meta property="og:image" content="<?= asset('assets/images/banners/hero-bg.jpg') ?>">

  <!-- Favicon / Brand Icon -->
  <link rel="icon" type="image/png" href="<?= asset('assets/images/logo/logo.png') ?>">
  <link rel="apple-touch-icon" href="<?= asset('assets/images/logo/logo.png') ?>">

  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Core & Design Tokens Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/variables.css') ?>?v=3.9">
  <link rel="stylesheet" href="<?= asset('assets/css/reset.css') ?>?v=3.9">
  <link rel="stylesheet" href="<?= asset('assets/css/global.css') ?>?v=3.9">
  <link rel="stylesheet" href="<?= asset('assets/css/layout.css') ?>?v=3.9">

  <!-- Component Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/components/navbar.css') ?>?v=4.1">
  <link rel="stylesheet" href="<?= asset('assets/css/components/buttons.css') ?>?v=4.1">
  <link rel="stylesheet" href="<?= asset('assets/css/components/cards.css') ?>?v=3.9">
  <link rel="stylesheet" href="<?= asset('assets/css/components/footer.css') ?>?v=3.9">

  <!-- Master Design System (for unified navbar and footer) -->
  <link rel="stylesheet" href="<?= asset('assets/css/pages/nomad.css') ?>?v=4.0">

  <!-- Page Specific Stylesheets -->
  <?php if (($activePage ?? 'home') === 'home'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/home.css') ?>?v=4.0">
  <?php elseif (($activePage ?? 'home') === 'destinations'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/destination.css') ?>?v=4.0">
  <?php elseif (in_array($activePage ?? '', ['stay', 'packages'])): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/package.css') ?>?v=4.0">
  <?php elseif (($activePage ?? 'home') === 'about'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/about.css') ?>?v=4.0">
  <?php endif; ?>

  <!-- Responsive Breakpoints -->
  <link rel="stylesheet" href="<?= asset('assets/css/responsive.css') ?>?v=4.1">
</head>
<body class="page-<?= htmlspecialchars($activePage ?? 'home') ?>">
