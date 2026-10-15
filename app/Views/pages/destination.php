<?php
/**
 * Avenora Destination Page View
 * Faithfully engineered to match the attached Destination.png reference
 *
 * @var array $destinations
 * @var array $faqs
 */
?>

<!-- ==========================================================================
     SECTION 01: Mountain Hero Section
     ========================================================================== -->
<section class="dest-hero-section" id="dest-hero" style="background-image: url('<?= asset('assets/images/destinations/moment-4.jpg') ?>');">
  <div class="dest-hero-overlay"></div>

  <div class="container dest-hero-container">
    <div class="dest-hero-content">
      <h1 class="dest-hero-title">
        Discover Places<br>
        Worth Traveling For
      </h1>
      <p class="dest-hero-desc">
        Explore inspiring destinations, discover unforgettable experiences, and find the perfect place for your next adventure around the world.
      </p>
      <div class="dest-hero-cta-wrap">
        <a href="#explore-destinations" class="btn btn-white-pill dest-hero-cta">
          <span>Browse Destinations</span>
          <span class="arrow-circle">
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
     SECTION 02 & 03: Explore All Destinations & 3x3 Card Grid
     ========================================================================== -->
<section class="dest-main-section" id="explore-destinations">
  <div class="container">
    <!-- Intro & Filter Bar Row -->
    <div class="dest-intro-row">
      <div class="dest-intro-left">
        <span class="dest-badge">All Destinations</span>
        <h2 class="dest-section-title">Explore All Destinations</h2>
        <p class="dest-section-subtitle">Browse handpicked destinations and find the place that matches your next adventure.</p>
      </div>

      <!-- Category Filter Pills -->
      <div class="dest-filters-group" role="tablist" aria-label="Filter destinations by region">
        <button type="button" class="dest-filter-btn is-active" data-filter="all" role="tab" aria-selected="true">All</button>
        <button type="button" class="dest-filter-btn" data-filter="europe" role="tab" aria-selected="false">Europe</button>
        <button type="button" class="dest-filter-btn" data-filter="asia" role="tab" aria-selected="false">Asia</button>
        <button type="button" class="dest-filter-btn" data-filter="americas" role="tab" aria-selected="false">Americas</button>
      </div>
    </div>

    <!-- 3x3 Destination Cards Grid -->
    <div class="dest-cards-grid" id="dest-grid" role="region" aria-live="polite">
      <?php foreach ($destinations as $destination): ?>
        <?php require __DIR__ . '/../components/destination-card.php'; ?>
      <?php endforeach; ?>
    </div>

    <!-- Empty State for Filters -->
    <div class="dest-empty-state" id="dest-empty-state" style="display: none;">
      <div class="dest-empty-icon">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="12"></line>
          <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
      </div>
      <p class="dest-empty-title">No destinations found in this region</p>
      <p class="dest-empty-desc">Try selecting another filter or choose "All" to view all available journeys.</p>
      <button type="button" class="btn btn-primary btn-sm" onclick="document.querySelector('[data-filter=\'all\']').click();">Show All Destinations</button>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 04: Frequently Asked Questions
     ========================================================================== -->
<section class="dest-faq-section" id="faq">
  <div class="container">
    <div class="dest-faq-header">
      <span class="dest-badge">FAQs</span>
      <h2 class="dest-faq-title">
        Frequently Asked<br>
        Questions
      </h2>
    </div>

    <!-- Centered Narrow Accordion Column -->
    <div class="dest-faq-accordion" role="region" aria-label="Frequently Asked Questions">
      <?php foreach ($faqs as $i => $faq): ?>
        <div class="dest-faq-card">
          <button type="button" 
                  class="dest-faq-trigger" 
                  id="faq-btn-<?= $i ?>" 
                  aria-expanded="false" 
                  aria-controls="faq-ans-<?= $i ?>">
            <span class="dest-faq-question"><?= htmlspecialchars($faq['q']) ?></span>
            <span class="dest-faq-arrow">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </span>
          </button>
          <div class="dest-faq-body" id="faq-ans-<?= $i ?>" role="region" aria-labelledby="faq-btn-<?= $i ?>" hidden>
            <div class="dest-faq-content">
              <?= htmlspecialchars($faq['a']) ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 05: Full-Width Photographic Adventure CTA
     ========================================================================== -->
<section class="dest-cta-section" id="cta-banner" style="background-image: url('<?= asset('assets/images/banners/cta-mountain-bg.jpg') ?>');">
  <div class="dest-cta-overlay"></div>
  <div class="container dest-cta-container">
    <div class="dest-cta-content">
      <h2 class="dest-cta-title">
        Moments that make the<br>
        journey feel personal.
      </h2>
      <p class="dest-cta-desc">
        Avenora travel journeys combine personalized experiences, seamless planning, private escapes, and unforgettable destination experiences.
      </p>
      <div class="dest-cta-btn-wrap">
        <a href="#explore-destinations" class="btn btn-white-pill dest-cta-btn">
          <span>See All Maps</span>
          <span class="arrow-circle">
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
