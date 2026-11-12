<?php
/**
 * Avenora Home Page View
 * Visually crafted to match the reference design in exact section order
 */
?>

<!-- ==========================================================================
     SECTION 01: Hero Section
     ========================================================================== -->
<section class="hero-section" id="hero" style="background-image: url('<?= asset('assets/images/srilanka/weligama_beach.jpg') ?>');">
  <div class="hero-overlay"></div>

  <div class="container hero-content">
    <div class="hero-text-content">
      <h1 class="hero-title"><?= htmlspecialchars($hero['title'] ?? 'Live Sri Lanka, Your Way.') ?></h1>
      <p class="hero-desc"><?= htmlspecialchars($hero['desc'] ?? 'Discover Sri Lanka beyond the destination. From accommodation to arrival and everyday living, The Lankan Nomad makes your extended stay effortless.') ?></p>
      <p class="hero-tagline"><?= htmlspecialchars($hero['tagline'] ?? 'Make Sri Lanka your home away from home.') ?></p>
      <div class="hero-actions">
        <a href="<?= url('/stay-in-sri-lanka') ?>" class="btn btn-white-pill">
          <span><?= htmlspecialchars($hero['cta'] ?? 'Explore Stays') ?></span>
          <span class="arrow-circle">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-hero-glass">
          <span><?= htmlspecialchars($hero['ctaSecondary'] ?? 'Plan Your Stay') ?></span>
          <span class="arrow-circle arrow-circle-white">
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
     SECTION 02: Travel Introduction & Statistics
     ========================================================================== -->
<section class="section intro-section" id="intro">
  <div class="container">
    <!-- Editorial Introduction Row -->
    <div class="intro-editorial-row">
      <div class="intro-photo-left">
        <img src="<?= asset('assets/images/srilanka/ahangama_coast.jpg') ?>" alt="Ahangama ocean coast living in Sri Lanka" loading="lazy">
      </div>
      <div class="intro-center-content">
        <p class="intro-text">
          Planning a long stay in Sri Lanka doesn't have to be overwhelming. We help you navigate the essentials, from finding a place to live to getting around and preparing for arrival.
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
        <img src="<?= asset('assets/images/srilanka/nine_arch_bridge.jpg') ?>" alt="Scenic Nine Arch Bridge in Ella, Sri Lanka" loading="lazy">
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
     SECTION 03: Destinations for Unforgettable Journeys (Matched to Reference Design)
     ========================================================================== -->
<section class="section destinations-section" id="destinations">
  <div class="container">
    <div class="destinations-layout">
      <!-- Left Column: Sticky Title, Description & CTA -->
      <div class="destinations-left">
        <h2 class="section-title">Destinations For Unforgettable Journeys.</h2>
        <a href="<?= url('/destinations') ?>" class="btn btn-dest-pill">
          <span>Explore Destination</span>
          <span class="arrow-circle arrow-circle-blue">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Center Column: Vertically Arranged Destination Cards (Matches Reference Image) -->
      <div class="destinations-center-cards" id="destCardsContainer">
        <?php foreach ($destinations as $idx => $dest): ?>
          <article class="dest-card" id="<?= htmlspecialchars($dest['slug']) ?>" data-index="<?= $idx ?>">
            <div class="dest-card-media">
              <img src="<?= asset($dest['image']) ?>" alt="<?= htmlspecialchars($dest['title']) ?>" loading="lazy">
            </div>
            <div class="dest-card-body">
              <div class="dest-card-info">
                <div class="dest-card-rating">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <span><?= htmlspecialchars($dest['rating'] ?? '4.8') ?></span>
                </div>
                <h3 class="dest-card-title"><?= htmlspecialchars($dest['title']) ?></h3>
                <div class="dest-card-location">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                  <span><?= htmlspecialchars($dest['location']) ?></span>
                </div>
              </div>
              <a href="<?= url('/destinations') ?>" class="dest-card-btn" aria-label="Explore <?= htmlspecialchars($dest['name']) ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- Right Column: Interactive Scroll-Tracking Destination List (Matched to Uploaded Photo) -->
      <aside class="destinations-sidebar-nav" id="destSidebarNav" aria-label="Destination Navigation">
        <?php foreach ($destinations as $idx => $dest): ?>
          <a href="#<?= htmlspecialchars($dest['slug']) ?>" 
             class="dest-nav-item <?= $idx === 0 ? 'is-active' : '' ?>" 
             data-target="<?= htmlspecialchars($dest['slug']) ?>" 
             data-index="<?= $idx ?>">
            <span class="dest-nav-text"><?= htmlspecialchars($dest['title']) ?></span>
            <div class="dest-nav-indicator">
              <span class="dest-nav-num"><?= htmlspecialchars($dest['num']) ?></span>
              <div class="dest-nav-track">
                <div class="dest-nav-progress" style="<?= $idx === 0 ? 'width: 100%;' : 'width: 0%;' ?>"></div>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </aside>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 04: Travel Planning Services (Interactive Expandable Accordion)
     ========================================================================== -->
<section class="section planning-section" id="services">
  <div class="container">
    <div class="planning-header">
      <span class="planning-badge">Our Service</span>
      <h2 class="planning-title">Travel planning services for every kind of meaningful escape.</h2>
    </div>

    <!-- Interactive Expandable Service Cards (Matched to Reference Image) -->
    <div class="planning-accordion-list" id="servicesAccordion">
      <?php foreach ($services as $idx => $srv): ?>
        <article class="service-acc-item <?= $idx === 0 ? 'is-active' : '' ?>" data-index="<?= $idx ?>">
          <div class="service-acc-row">
            <span class="service-acc-num"><?= htmlspecialchars($srv['number']) ?></span>
            
            <div class="service-acc-info">
              <h3 class="service-acc-title"><?= htmlspecialchars($srv['title']) ?></h3>
              <div class="service-acc-body">
                <p class="service-acc-desc"><?= htmlspecialchars($srv['desc']) ?></p>
                <a href="<?= url('/plan-your-stay?service=' . urlencode($srv['ctaParam'])) ?>" class="service-acc-cta">
                  <span><?= htmlspecialchars($srv['cta']) ?></span>
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>

            <div class="service-acc-media">
              <img src="<?= asset($srv['image']) ?>" alt="<?= htmlspecialchars($srv['title']) ?>" loading="lazy">
            </div>

            <button type="button" class="service-acc-arrow" aria-label="Toggle <?= htmlspecialchars($srv['title']) ?>">
              <svg class="icon-right" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
              <svg class="icon-down" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <polyline points="19 12 12 19 5 12"></polyline>
              </svg>
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 05: Choose the Kind of Journey (Matched to Reference Screenshot)
     ========================================================================== -->
<section class="section experience-section" id="experiences">
  <div class="container">
    <div class="experience-header-row">
      <div class="exp-header-left">
        <span class="exp-pill-badge">Travel Experiences</span>
        <h2 class="exp-section-title">Choose the kind of journey you want to remember.</h2>
      </div>
      <p class="exp-header-desc">Every traveler has a different reason for leaving. Select the experience that feels closest to your dream, and we will shape the journey around it.</p>
    </div>

    <!-- 6 Experience Cards Grid (Matched to Uploaded Photo) -->
    <div class="exp-journey-grid">
      <?php foreach ($experiences as $idx => $exp): ?>
        <a href="<?= url('/experiences') ?>" class="exp-journey-card" data-index="<?= $idx ?>">
          <div class="exp-journey-top">
            <span class="exp-journey-badge"><?= htmlspecialchars($exp['badge'] ?? ('Card ' . sprintf('%02d', $idx + 1))) ?></span>
            <div class="exp-journey-media">
              <img src="<?= asset($exp['image']) ?>" alt="<?= htmlspecialchars($exp['title']) ?>" loading="lazy">
            </div>
          </div>
          <div class="exp-journey-body">
            <h3 class="exp-journey-title"><?= htmlspecialchars($exp['title']) ?></h3>
            <p class="exp-journey-desc"><?= htmlspecialchars($exp['desc']) ?></p>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 06: Our Gallery (Auto Change Carousel - Matched to Reference Screenshot)
     ========================================================================== -->
<section class="section gallery-section" id="gallery">
  <div class="container">
    <div class="gallery-header">
      <span class="gallery-badge">Our Gallery</span>
      <h2 class="gallery-title">Moments that make the journey feel personal.</h2>
    </div>
  </div>

  <!-- Auto-Changing Perspective Carousel Slider -->
  <div class="gallery-slider-viewport" id="galleryViewport" aria-label="Photo Gallery Carousel">
    <div class="gallery-slider-track" id="galleryTrack">
      <?php foreach ($galleryMoments as $idx => $m): ?>
        <div class="gallery-item <?= $idx === 0 ? 'is-active' : '' ?>" data-index="<?= $idx ?>">
          <div class="gallery-card">
            <img src="<?= asset($m['image']) ?>" alt="<?= htmlspecialchars($m['title']) ?>" loading="lazy">
            <div class="gallery-card-badge">
              <span class="gallery-badge-dot"></span>
              <span class="gallery-badge-text"><?= htmlspecialchars($m['tag']) ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 07: Testimonials (Matched to Reference Screenshot)
     ========================================================================== -->
<section class="section testimonial-section" id="testimonials">
  <div class="container">
    <div class="testi-header">
      <span class="testi-badge">Testimonials</span>
      <h2 class="testi-title">From first idea to finished itinerary.</h2>
    </div>

    <!-- 3-Column Luxury Testimonial Panel -->
    <div class="testi-card-panel" id="testimonialSlider">
      <!-- Column 1: Traveler Photo -->
      <div class="testi-photo-col">
        <div class="testi-photo-wrap">
          <img src="<?= asset($testimonials[0]['image']) ?>" alt="<?= htmlspecialchars($testimonials[0]['author']) ?>" id="testiPhoto" loading="lazy">
        </div>
      </div>

      <!-- Column 2: Testimonial Quote & Author -->
      <div class="testi-content-col">
        <blockquote class="testi-quote" id="testiQuote">
          <?= htmlspecialchars($testimonials[0]['quote']) ?>
        </blockquote>
        <div class="testi-author-row">
          <span class="testi-author-pill" id="testiAuthor"><?= htmlspecialchars($testimonials[0]['author']) ?></span>
          <span class="testi-role" id="testiRole"><?= htmlspecialchars($testimonials[0]['role']) ?></span>
        </div>
      </div>

      <!-- Column 3: Stacked Navigation Buttons (Next / Prev) -->
      <div class="testi-controls-col">
        <button type="button" class="testi-nav-btn is-next" id="testiNextBtn" aria-label="Next testimonial">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>
        <button type="button" class="testi-nav-btn is-prev" id="testiPrevBtn" aria-label="Previous testimonial">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 08: Frequently Asked Questions (Matched to Reference Screenshot)
     ========================================================================== -->
<section class="section faq-section" id="faq">
  <div class="container">
    <div class="faq-header">
      <span class="faq-badge">FAQs</span>
      <h2 class="faq-title">Frequently Asked<br>Questions</h2>
    </div>

    <!-- Centered Accordion Column -->
    <div class="faq-accordion-wrap">
      <?php foreach ($faqs as $i => $faq): ?>
        <div class="faq-item <?= $i === 0 ? 'is-expanded' : '' ?>">
          <button type="button" class="faq-question-btn" aria-controls="faq-answer-<?= $i ?>" id="faq-btn-<?= $i ?>" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
            <span class="faq-question-text"><?= htmlspecialchars($faq['q']) ?></span>
            <span class="faq-toggle-icon" aria-hidden="true">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
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
     SECTION 11: Final Sri Lanka Journey CTA
     ========================================================================== -->
<section class="final-cta-section" id="cta" style="background-image: url('<?= asset('assets/images/srilanka/sigiriya.jpg') ?>');">
  <div class="final-cta-overlay"></div>
  <div class="container">
    <div class="final-cta-content">
      <h2 class="final-cta-title">Sri Lanka feels more like home with personal experiences.</h2>
      <p class="final-cta-desc">Let our local team curate your private villa stay, island transport, and authentic cultural journeys today.</p>
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
