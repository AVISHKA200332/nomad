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
  <meta property="og:image" content="<?= asset('assets/images/srilanka/weligama_beach.jpg') ?>">

  <!-- Favicon / Brand Icon -->
  <link rel="icon" type="image/svg+xml" href="<?= asset('assets/images/logo/favicon.svg') ?>?v=3">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('assets/images/logo/favicon-32x32.png') ?>?v=3">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('assets/images/logo/favicon-16x16.png') ?>?v=3">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('assets/images/logo/apple-touch-icon.png') ?>?v=3">
  <link rel="shortcut icon" href="<?= asset('favicon.ico') ?>?v=3">

  <!-- Google Fonts: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">

  <!-- Core & Design Tokens Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/variables.css') ?>?v=6.0">
  <link rel="stylesheet" href="<?= asset('assets/css/reset.css') ?>?v=6.0">
  <link rel="stylesheet" href="<?= asset('assets/css/global.css') ?>?v=6.0">
  <link rel="stylesheet" href="<?= asset('assets/css/layout.css') ?>?v=5.0">

  <!-- Component Stylesheets -->
  <link rel="stylesheet" href="<?= asset('assets/css/components/navbar.css') ?>?v=6.0">
  <link rel="stylesheet" href="<?= asset('assets/css/components/buttons.css') ?>?v=5.0">
  <link rel="stylesheet" href="<?= asset('assets/css/components/cards.css') ?>?v=5.0">
  <link rel="stylesheet" href="<?= asset('assets/css/components/footer.css') ?>?v=5.0">

  <!-- Master Design System (for unified navbar and footer) -->
  <link rel="stylesheet" href="<?= asset('assets/css/pages/nomad.css') ?>?v=6.0">

  <!-- Page Specific Stylesheets -->
  <?php if (($activePage ?? 'home') === 'home'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/home.css') ?>?v=9.0">
  <?php elseif (($activePage ?? 'home') === 'destinations'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/destination.css') ?>?v=9.0">
  <?php elseif (in_array($activePage ?? '', ['stay', 'packages'])): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/package.css') ?>?v=6.0">
  <?php elseif (($activePage ?? 'home') === 'about'): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/about.css') ?>?v=8.0">
  <?php elseif (in_array($activePage ?? '', ['contact', 'plan-your-stay'])): ?>
    <link rel="stylesheet" href="<?= asset('assets/css/pages/contact.css') ?>?v=7.0">
  <?php endif; ?>

  <!-- Responsive Breakpoints -->
  <link rel="stylesheet" href="<?= asset('assets/css/responsive.css') ?>?v=7.0">
</head>
<body class="page-<?= htmlspecialchars($activePage ?? 'home') ?>">
