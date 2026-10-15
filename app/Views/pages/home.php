<?php
/**
 * Avenora Home Page View
 * Visually crafted to match the reference design in exact section order
 */
?>

<!-- ==========================================================================
     SECTION 01: Hero & Navigation Section
     ========================================================================== -->
<section class="hero-section" id="hero">
  <div class="hero-overlay"></div>

  <div class="container hero-content">
    <!-- Enormous Travel Display Headline -->
    <div class="hero-headline-wrap">
      <h1 class="hero-display-title"><?= htmlspecialchars($hero['headline'] ?? 'Travel.') ?></h1>
    </div>

    <!-- Hero Lower Content & Floating Card -->
    <div class="hero-bottom-row">
      <div class="hero-bottom-left">
        <p class="hero-subhead"><?= htmlspecialchars($hero['subhead'] ?? 'Tailored journeys for travelers who want more than a standard trip.') ?></p>
        <a href="<?= url('/destinations') ?>" class="btn btn-white-pill">
          <span><?= htmlspecialchars($hero['cta'] ?? 'Explore Destinations') ?></span>
          <span class="arrow-circle">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Right Floating Feature Card -->
      <div class="hero-float-card">
        <div class="hero-card-header">
          <span class="hero-card-meta"><?= htmlspecialchars($hero['badge'] ?? 'High Alps • 3,450m') ?></span>
          <span class="brand-dot"></span>
        </div>
        <div class="hero-card-media">
          <img src="<?= asset('assets/images/banners/hero-card.jpg') ?>" alt="Alpine explorer overlooking mountains" loading="eager">
          <button class="hero-card-play" aria-label="Play expedition preview video">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <polygon points="5 3 19 12 5 21 5 3"></polygon>
            </svg>
          </button>
        </div>
        <div class="hero-card-footer">
          <div>
            <h2 class="hero-card-title"><?= htmlspecialchars($hero['cardTitle'] ?? 'Mountain Expedition') ?></h2>
            <span style="font-size: 0.78rem; color: var(--color-text-muted);"><?= htmlspecialchars($hero['cardLocation'] ?? 'Swiss Alps Pass') ?></span>
          </div>
          <a href="#destinations" class="hero-card-action">
            <span><?= htmlspecialchars($hero['cardCta'] ?? 'Watch') ?></span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 02: Travel Introduction & Statistics
     ========================================================================== -->
<section class="section intro-section" id="intro">
  <div class="container">
    <!-- Editorial Introduction Row -->
    <div class="intro-editorial-row">
      <div class="intro-photo-left">
        <img src="<?= asset('assets/images/destinations/intro-left.jpg') ?>" alt="Winter adventurer in mountain snow" loading="lazy">
      </div>
      <div class="intro-center-content">
        <p class="intro-text">
          We design mindful travel experiences that connect you with nature's grandeur, untouched trails, and authentic local cultures across the globe.
        </p>
        <a href="<?= url('/about') ?>" class="btn btn-outline" style="padding: 8px 20px; font-size: 0.88rem;">
          <span>Our Story</span>
          <span class="arrow-circle arrow-circle-white" style="width: 24px; height: 24px; background: var(--color-primary);">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>
      <div class="intro-photo-right">
        <img src="<?= asset('assets/images/destinations/intro-right.jpg') ?>" alt="Hikers along alpine mountain pass" loading="lazy">
      </div>
    </div>

    <!-- 3 Horizontal Statistics Cards -->
    <div class="stats-grid">
      <?php foreach ($stats as $stat): ?>
        <div class="stat-card <?= $stat['highlight'] ? 'stat-card-highlight' : '' ?>">
          <div class="stat-icon">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
          </div>
          <div>
            <div class="stat-number"><?= htmlspecialchars($stat['number']) ?></div>
            <div class="stat-label"><?= htmlspecialchars($stat['label']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 03: Destinations for Unforgettable Journeys
     ========================================================================== -->
<section class="section destinations-section" id="destinations">
  <div class="container">
    <div class="destinations-layout">
      <!-- Left Column: Sticky Title, Description & CTA -->
      <div class="destinations-left">
        <span class="section-badge">DISCOVER THE WORLD</span>
        <h2 class="section-title">Destinations for unforgettable journeys</h2>
        <p class="section-desc">From secluded Mediterranean archipelagos to dramatic Nordic fjords, discover landscapes that stay with you forever.</p>
        <a href="<?= url('/destinations') ?>" class="btn btn-primary" style="margin-top: var(--space-xl);">
          <span>Explore All</span>
          <span class="arrow-circle arrow-circle-white">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Center Column: Vertically Arranged Destination Cards -->
      <div class="destinations-center-cards">
        <?php foreach ($destinations as $dest): ?>
          <a href="<?= url('/destinations') ?>" class="dest-card">
            <div class="dest-card-media">
              <img src="<?= asset($dest['image']) ?>" alt="<?= htmlspecialchars($dest['title']) ?>" loading="lazy">
              <div class="dest-card-overlay"></div>
            </div>
            <div class="dest-card-content">
              <div>
                <span class="dest-card-tag"><?= htmlspecialchars($dest['tag']) ?></span>
                <h3 class="dest-card-title"><?= htmlspecialchars($dest['title']) ?></h3>
                <span class="dest-card-location"><?= htmlspecialchars($dest['location']) ?></span>
              </div>
              <span class="arrow-circle arrow-circle-white">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <!-- Right Column: Minimal Destination Category List -->
      <aside class="destinations-sidebar-nav" aria-label="Destination Categories">
        <h3 class="dest-sidebar-title">REGIONS</h3>
        <?php foreach ($destinationFilters as $idx => $filter): ?>
          <div class="dest-sidebar-item <?= $idx === 0 ? 'is-active' : '' ?>">
            <span><?= htmlspecialchars($filter) ?></span>
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </div>
        <?php endforeach; ?>
      </aside>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 04: Curated Travel Packages (Dark Navy Section)
     ========================================================================== -->
<section class="section packages-section" id="packages">
  <div class="container">
    <div style="text-align: center; margin-bottom: var(--space-2xl);">
      <span class="section-badge section-badge-white">CURATED EXPEDITIONS</span>
      <h2 class="section-title section-title-center">Curated Travel Packages With Every Detail in Mind.</h2>
      <p class="section-desc section-desc-center">Handcrafted journeys with private mountain guides, verified luxury stays, and seamless logistics.</p>
    </div>

    <!-- 4 Package Cards Grid (2x2) -->
    <div class="package-grid">
      <?php foreach ($packages as $pkg): ?>
        <div class="package-card">
          <div class="package-card-media">
            <img src="<?= asset($pkg['image']) ?>" alt="<?= htmlspecialchars($pkg['title']) ?>" loading="lazy">
          </div>
          <div class="package-card-body">
            <div class="package-card-meta">
              <span><?= htmlspecialchars($pkg['duration']) ?></span>
            </div>
            <h3 class="package-card-title"><?= htmlspecialchars($pkg['title']) ?></h3>
            <p class="package-card-location"><?= htmlspecialchars($pkg['location']) ?></p>
            <div class="package-card-footer">
              <div class="package-card-price">
                <?= htmlspecialchars($pkg['price']) ?> <span>/ person</span>
              </div>
              <a href="<?= url('/packages') ?>" class="arrow-circle arrow-circle-white" aria-label="View package details">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Centered Bottom White CTA -->
    <div class="packages-cta-wrap">
      <a href="<?= url('/packages') ?>" class="btn btn-dark-pill">
        <span>Explore All Packages</span>
        <span class="arrow-circle">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 05: Travel Planning Services
     ========================================================================== -->
<section class="section planning-section" id="services">
  <div class="container">
    <div style="text-align: center;">
      <span class="section-badge">HOW WE WORK</span>
      <h2 class="section-title section-title-center">Travel planning services for every kind of meaningful escape.</h2>
    </div>

    <!-- Large Rounded White Content Panel -->
    <div class="planning-panel">
      <!-- Left Column: Numbered Service List -->
      <div class="planning-services-list">
        <?php foreach ($services as $srv): ?>
          <div class="planning-service-item">
            <span class="service-num"><?= htmlspecialchars($srv['number']) ?></span>
            <div class="service-content">
              <h3><?= htmlspecialchars($srv['title']) ?></h3>
              <p><?= htmlspecialchars($srv['desc']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Right Column: Stacked Travel Photos -->
      <div class="planning-photos-stack">
        <?php foreach ($services as $srv): ?>
          <div class="planning-photo-card">
            <img src="<?= asset($srv['image']) ?>" alt="<?= htmlspecialchars($srv['title']) ?>" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 06: Choose the Kind of Journey
     ========================================================================== -->
<section class="section experience-section" id="experiences">
  <div class="container">
    <div class="experience-header-row">
      <div>
        <span class="section-badge">SIGNATURE JOURNEYS</span>
        <h2 class="section-title" style="margin-bottom: 0;">Choose the kind of journey you want to remember.</h2>
      </div>
      <p class="section-desc" style="max-width: 440px;">Explore signature styles crafted for seekers of tranquility, high-altitude thrill, and cultural wonder.</p>
    </div>

    <!-- 6 Experience Cards Grid (3x2) -->
    <div class="experience-grid">
      <?php foreach ($experiences as $exp): ?>
        <div class="exp-card">
          <div class="exp-card-media">
            <img src="<?= asset($exp['image']) ?>" alt="<?= htmlspecialchars($exp['title']) ?>" loading="lazy">
          </div>
          <div class="exp-card-body">
            <div class="exp-card-header">
              <h3 class="exp-card-title"><?= htmlspecialchars($exp['title']) ?></h3>
            </div>
            <p class="exp-card-desc"><?= htmlspecialchars($exp['desc']) ?></p>
            <div class="exp-card-footer">
              <span class="exp-card-count"><?= htmlspecialchars($exp['tag']) ?></span>
              <a href="<?= url('/packages') ?>" class="arrow-circle arrow-circle-dark" aria-label="Browse <?= htmlspecialchars($exp['title']) ?>">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 07: Blue Feature & Travel Services Section
     ========================================================================== -->
<section class="section blue-feature-section" id="why-us">
  <div class="container">
    <div class="blue-feature-layout">
      <!-- Left Column: Heading, Description & CTA -->
      <div class="blue-feature-left">
        <span class="section-badge" style="color: var(--color-primary);">THE AVENORA STANDARD</span>
        <h2 class="section-title">Choose the kind of journey you will remember.</h2>
        <p class="section-desc">We believe true luxury lies in authentic connection, effortless logistics, and transformative moments in nature.</p>
        <a href="<?= url('/contact') ?>" class="btn btn-primary">
          <span>Start Planning</span>
          <span class="arrow-circle arrow-circle-white">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Right Column: 3 White Rounded Service Cards -->
      <div class="blue-service-cards">
        <?php foreach ($blueFeatures as $feat): ?>
          <div class="blue-service-card">
            <div class="blue-service-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
              </svg>
            </div>
            <div class="blue-service-info">
              <h3><?= htmlspecialchars($feat['title']) ?></h3>
              <p><?= htmlspecialchars($feat['desc']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 08: Moments That Make the Journey Feel Personal
     ========================================================================== -->
<section class="section moments-section" id="moments">
  <div class="container">
    <div style="text-align: center;">
      <span class="section-badge">FIELD PHOTOGRAPHY</span>
      <h2 class="section-title section-title-center">Moments that make the journey feel personal.</h2>
      <p class="section-desc section-desc-center">Glimpses of raw alpine summits, glacial lakes, and solitary trails experienced by our travelers.</p>
    </div>

    <!-- 4 Tall Vertical Photo Cards Row -->
    <div class="moments-grid">
      <?php foreach ($moments as $m): ?>
        <div class="moment-card">
          <img src="<?= asset($m['image']) ?>" alt="<?= htmlspecialchars($m['badge']) ?>" loading="lazy">
          <div class="moment-badge">
            <?= htmlspecialchars($m['badge']) ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 09: From First Idea to Finished Journey (Testimonial)
     ========================================================================== -->
<section class="section testimonial-section" id="testimonials">
  <div class="container">
    <div style="text-align: center;">
      <span class="section-badge">TRAVELER STORIES</span>
      <h2 class="section-title section-title-center">From first idea to finished journey.</h2>
    </div>

    <!-- Large Rounded White Feature Panel -->
    <div class="testimonial-panel">
      <div class="testimonial-photo-wrap">
        <img src="<?= asset($testimonial['image']) ?>" alt="<?= htmlspecialchars($testimonial['author']) ?>" loading="lazy">
      </div>
      <div class="testimonial-body">
        <span class="testimonial-eyebrow">FEATURED EXPEDITION DISPATCH</span>
        <blockquote class="testimonial-quote">
          <?= htmlspecialchars($testimonial['quote']) ?>
        </blockquote>
        <div class="testimonial-author-meta">
          <h4><?= htmlspecialchars($testimonial['author']) ?></h4>
          <p><?= htmlspecialchars($testimonial['role']) ?> • <?= htmlspecialchars($testimonial['location']) ?></p>
        </div>
        <div class="testimonial-nav-arrows">
          <button class="testimonial-arrow-btn" aria-label="Previous traveler story">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>
          <button class="testimonial-arrow-btn" aria-label="Next traveler story">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 10: Frequently Asked Questions
     ========================================================================== -->
<section class="section faq-section" id="faq">
  <div class="container">
    <div style="text-align: center;">
      <span class="section-badge">TRAVEL INQUIRIES</span>
      <h2 class="section-title section-title-center">Frequently Asked Questions</h2>
      <p class="section-desc section-desc-center">Everything you need to know about preparing for your journey with Avenora.</p>
    </div>

    <!-- Centered Narrow Accordion Column -->
    <div class="faq-accordion-wrap">
      <?php foreach ($faqs as $i => $faq): ?>
        <div class="faq-item">
          <button class="faq-question-btn" aria-controls="faq-answer-<?= $i ?>" id="faq-btn-<?= $i ?>">
            <span><?= htmlspecialchars($faq['q']) ?></span>
            <span class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
            </span>
          </button>
          <div class="faq-answer-panel" id="faq-answer-<?= $i ?>" role="region" aria-labelledby="faq-btn-<?= $i ?>">
            <p class="faq-answer-content">
              <?= htmlspecialchars($faq['a']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 11: Final Mountain Adventure CTA
     ========================================================================== -->
<section class="final-cta-section" id="cta">
  <div class="final-cta-overlay"></div>
  <div class="container">
    <div class="final-cta-content">
      <h2 class="final-cta-title">Mountains feel more like a journey with personal experiences.</h2>
      <p class="final-cta-desc">Join our next guided alpine expedition or let our adventure specialists curate a private bespoke journey today.</p>
      <a href="<?= url('/contact') ?>" class="btn btn-white-pill">
        <span>Plan Your Journey Now</span>
        <span class="arrow-circle">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>
