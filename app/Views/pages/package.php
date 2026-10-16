<?php
/**
 * Avenora Package Page View
 * Faithfully engineered to match the attached Package.png reference
 *
 * @var array $packages
 */
?>

<!-- ==========================================================================
     SECTION 01: Travel Package Hero Section
     ========================================================================== -->
<section class="pkg-hero-section" id="pkg-hero" style="background-image: url('<?= asset('assets/images/banners/package-hero-bg.jpg') ?>');">
  <div class="pkg-hero-overlay"></div>

  <div class="container pkg-hero-container">
    <div class="pkg-hero-content">
      <h1 class="pkg-hero-title">
        Find Your Perfect Trip
      </h1>
      <p class="pkg-hero-desc">
        Explore thoughtfully designed travel packages, from relaxing escapes and cultural journeys to exciting adventures across unforgettable destinations.
      </p>
      <div class="pkg-hero-cta-wrap">
        <a href="<?= url('/about') ?>" class="btn btn-white-pill pkg-hero-cta">
          <span>Explore About Us</span>
          <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 02 & 03: Travel Packages Introduction & Horizontal Cards List
     ========================================================================== -->
<section class="pkg-main-section" id="travel-packages">
  <div class="container">
    <!-- Introduction Header Row -->
    <div class="pkg-intro-row">
      <div class="pkg-intro-left">
        <span class="pkg-badge">Travel Packages</span>
        <h2 class="pkg-section-title">
          Explore Our Travel<br>
          Packages
        </h2>
      </div>

      <div class="pkg-intro-right">
        <p class="pkg-section-desc">
          Discover curated journeys designed to make every trip easier, richer, and more memorable.
        </p>
      </div>
    </div>

    <!-- 5 Large Horizontal Package Cards (One Card Per Row) -->
    <div class="pkg-cards-list" role="region" aria-label="Available Travel Packages">
      <?php foreach ($packages as $package): ?>
        <?php require __DIR__ . '/../components/package-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 04: Cinematic Mountain Adventure CTA Banner
     ========================================================================== -->
<section class="pkg-cta-section" id="cta-banner" style="background-image: url('<?= asset('assets/images/banners/pkg-cta-hiker.jpg') ?>');">
  <div class="pkg-cta-overlay"></div>
  <div class="container pkg-cta-container">
    <div class="pkg-cta-content">
      <h2 class="pkg-cta-title">
        Moments that make the<br>
        journey feel personal.
      </h2>
      <p class="pkg-cta-desc">
        Avenora travel platform creating personalized journeys, seamless planning, private escapes, and unforgettable destination experiences.
      </p>
      <div class="pkg-cta-btn-wrap">
        <a href="<?= url('/destinations') ?>" class="btn btn-white-pill pkg-cta-btn">
          <span>See All Maps</span>
          <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
