<?php
$currentPage = $activePage ?? 'home';
?>
<!-- Site Header with Blue Background (Unified Across All Pages) -->
<header class="site-header is-inner-header">
  <div class="nav-container">
    <!-- Brand Wordmark / Logo -->
    <a href="<?= url('/') ?>" class="nav-brand" aria-label="The Lankan Nomad Home">
      <img src="<?= asset('assets/images/logo/logo.png') ?>" alt="The Lankan Nomad" class="site-logo">
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="nav-menu" aria-label="Main Navigation">
      <a href="<?= url('/') ?>" class="nav-link <?= $currentPage === 'home' ? 'is-active' : '' ?>">Home</a>
      <a href="<?= url('/services') ?>" class="nav-link <?= $currentPage === 'services' ? 'is-active' : '' ?>">Our Services</a>
      <a href="<?= url('/stay-in-sri-lanka') ?>" class="nav-link <?= in_array($currentPage, ['stay', 'packages']) ? 'is-active' : '' ?>">Stay in Sri Lanka</a>
      <a href="<?= url('/destinations') ?>" class="nav-link <?= $currentPage === 'destinations' ? 'is-active' : '' ?>">Destinations</a>
      <a href="<?= url('/experiences') ?>" class="nav-link <?= $currentPage === 'experiences' ? 'is-active' : '' ?>">Experiences</a>
      <a href="<?= url('/guide') ?>" class="nav-link <?= in_array($currentPage, ['guide', 'blog']) ? 'is-active' : '' ?>">Sri Lanka Guide</a>
      <a href="<?= url('/about') ?>" class="nav-link <?= $currentPage === 'about' ? 'is-active' : '' ?>">About Us</a>
      <a href="<?= url('/contact') ?>" class="nav-link <?= in_array($currentPage, ['contact', 'plan-your-stay']) ? 'is-active' : '' ?>">Contact</a>
    </nav>

    <!-- Desktop Right CTA -->
    <a href="<?= url('/plan-your-stay') ?>" class="btn btn-nav-cta">
      <span>PLAN YOUR STAY</span>
      <span class="arrow-circle">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </span>
    </a>

    <!-- Mobile Hamburger Toggle -->
    <button class="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-backdrop"></div>
<aside class="mobile-nav-drawer" aria-label="Mobile Navigation">
  <button class="mobile-nav-close" aria-label="Close navigation menu">&times;</button>
  <a href="<?= url('/') ?>" class="nav-brand" style="margin-bottom: 16px;" aria-label="The Lankan Nomad Home">
    <img src="<?= asset('assets/images/logo/logo.png') ?>" alt="The Lankan Nomad" class="site-logo mobile-logo">
  </a>
  <nav style="display: flex; flex-direction: column; gap: 4px;">
    <a href="<?= url('/') ?>" class="nav-link <?= $currentPage === 'home' ? 'is-active' : '' ?>">Home</a>
    <a href="<?= url('/services') ?>" class="nav-link <?= $currentPage === 'services' ? 'is-active' : '' ?>">Our Services</a>
    <a href="<?= url('/stay-in-sri-lanka') ?>" class="nav-link <?= in_array($currentPage, ['stay', 'packages']) ? 'is-active' : '' ?>">Stay in Sri Lanka</a>
    <a href="<?= url('/destinations') ?>" class="nav-link <?= $currentPage === 'destinations' ? 'is-active' : '' ?>">Destinations</a>
    <a href="<?= url('/experiences') ?>" class="nav-link <?= $currentPage === 'experiences' ? 'is-active' : '' ?>">Experiences</a>
    <a href="<?= url('/guide') ?>" class="nav-link <?= in_array($currentPage, ['guide', 'blog']) ? 'is-active' : '' ?>">Sri Lanka Guide</a>
    <a href="<?= url('/about') ?>" class="nav-link <?= $currentPage === 'about' ? 'is-active' : '' ?>">About Us</a>
    <a href="<?= url('/contact') ?>" class="nav-link <?= in_array($currentPage, ['contact', 'plan-your-stay']) ? 'is-active' : '' ?>">Contact</a>
  </nav>
  <div style="margin-top: auto; padding-top: 20px;">
    <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="width: 100%; justify-content: center;">
      <span>PLAN YOUR STAY</span>
      <span class="arrow-circle arrow-circle-white">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </span>
    </a>
  </div>
</aside>
