<?php
/**
 * The Lankan Nomad - About Us Page View
 * Faithfully engineered to match the reference design in media_1794504090029_5f6c8b66.webp
 * 100% Sri Lankan destinations, authentic stories, and high-quality animations.
 *
 * @var array $hero
 * @var array $intro
 * @var array $statistics
 * @var array $experiences
 * @var array $timelineSteps
 * @var array $whyFeatures
 * @var array $gallery
 * @var array $cta
 */
?>

<!-- ==========================================================================
     SECTION 01: Hero Section (Panoramic Sri Lankan Highlands)
     ========================================================================== -->
<section class="about-hero-section" id="about-hero" style="background-image: url('<?= asset($hero['image']) ?>');">
  <div class="about-hero-overlay"></div>

  <div class="container about-hero-container">
    <div class="about-hero-content">
      <span class="about-hero-badge"><?= htmlspecialchars($hero['eyebrow']) ?></span>
      <h1 class="about-hero-title">
        <?= nl2br(htmlspecialchars($hero['title'])) ?>
      </h1>
      <p class="about-hero-desc">
        <?= htmlspecialchars($hero['desc']) ?>
      </p>
      <div class="about-hero-buttons">
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-white-pill" aria-label="Plan Your Stay">
          <span>Plan Your Stay</span>
          <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>

        <a href="<?= url('/destinations') ?>" class="btn btn-white-pill" aria-label="Explore Destinations">
          <span>Explore Destinations</span>
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
     SECTION 02: Introduction (Travel Studio Two-Column Split)
     ========================================================================== -->
<section class="about-intro-section" id="about-intro">
  <div class="container">
    <div class="about-intro-grid">
      <!-- Left Column: Traveler Photograph -->
      <div class="about-intro-photo-wrap">
        <div class="about-intro-photo">
          <img src="<?= asset($intro['image']) ?>" 
               alt="The Lankan Nomad traveler exploring Sri Lanka" 
               loading="lazy" 
               decoding="async">
        </div>
      </div>

      <!-- Right Column: Company Story -->
      <div class="about-intro-content">
        <span class="about-badge"><?= htmlspecialchars($intro['eyebrow']) ?></span>
        <h2 class="about-intro-title">
          <?= nl2br(htmlspecialchars($intro['title'])) ?>
        </h2>
        <p class="about-intro-p">
          <?= htmlspecialchars($intro['desc1']) ?>
        </p>
        <p class="about-intro-p">
          <?= htmlspecialchars($intro['desc2']) ?>
        </p>
        <div class="about-intro-cta-wrap">
          <a href="<?= url('/stay-in-sri-lanka') ?>" class="btn btn-white-pill about-intro-cta" aria-label="Explore Stays in Sri Lanka">
            <span>Explore Stays</span>
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
  </div>
</section>


<!-- ==========================================================================
     SECTION 03: Statistics Cards (3 Horizontal Cards)
     ========================================================================== -->
<section class="about-stats-section" id="about-stats">
  <div class="container">
    <div class="about-stats-grid" role="region" aria-label="Key Statistics">
      <?php foreach ($statistics as $stat): ?>
        <article class="about-stat-card <?= $stat['is_highlight'] ? 'stat-card-blue' : 'stat-card-white' ?>">
          <div class="stat-top-row">
            <h3 class="stat-number"><?= htmlspecialchars($stat['number']) ?></h3>
            <div class="stat-icon" aria-hidden="true">
              <?php if ($stat['is_highlight']): ?>
                <!-- Compass / Star Icon for Highlight Card -->
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
              <?php else: ?>
                <!-- Subtle Check Icon -->
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              <?php endif; ?>
            </div>
          </div>
          <p class="stat-desc"><?= htmlspecialchars($stat['label']) ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 04: Interactive Travel Experience Showcase (Expanding Cards)
     ========================================================================== -->
<section class="about-exp-section" id="travel-experiences">
  <div class="container">
    <!-- Section Header Row -->
    <div class="about-exp-intro-row">
      <div class="about-exp-intro-left">
        <span class="about-badge">Travel Experiences</span>
        <h2 class="about-exp-title">
          Find the kind of travel<br>
          that feels like you.
        </h2>
      </div>
      <div class="about-exp-intro-right">
        <p class="about-exp-desc">
          Every traveler is different, and every journey in Sri Lanka should reflect that. Explore experiences designed around how you want to discover the island.
        </p>
      </div>
    </div>

    <!-- 6 Expanding Experience Cards -->
    <div class="about-exp-container" role="region" aria-label="Sri Lanka Experience Categories">
      <?php foreach ($experiences as $exp): ?>
        <div class="about-exp-card <?= $exp['is_active'] ? 'is-expanded' : '' ?>"
             tabindex="0"
             role="button"
             aria-expanded="<?= $exp['is_active'] ? 'true' : 'false' ?>"
             aria-label="<?= htmlspecialchars($exp['title']) ?>"
             data-slug="<?= htmlspecialchars($exp['slug']) ?>">

          <!-- Background Image -->
          <img src="<?= asset($exp['image']) ?>" alt="<?= htmlspecialchars($exp['title']) ?>" loading="lazy">
          <div class="about-exp-overlay"></div>

          <!-- Top Pill Indicator -->
          <div class="about-exp-pill-top" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7"></line>
              <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
          </div>

          <!-- Collapsed Vertical Title -->
          <span class="about-exp-collapsed-label"><?= htmlspecialchars($exp['title']) ?></span>

          <!-- Expanded Content -->
          <div class="about-exp-expanded-content">
            <h3 class="about-exp-expanded-title"><?= htmlspecialchars($exp['title']) ?></h3>
            <p class="about-exp-expanded-desc"><?= htmlspecialchars($exp['desc']) ?></p>
            <a href="<?= htmlspecialchars($exp['cta_url']) ?>" class="btn btn-white-pill" aria-label="Explore <?= htmlspecialchars($exp['title']) ?>">
              <span><?= htmlspecialchars($exp['cta_text']) ?></span>
              <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 05: Dark Navy Journey Timeline (5 Alternating Steps)
     ========================================================================== -->
<section class="about-timeline-section" id="journey-timeline">
  <div class="container">
    <!-- Top Decorative Outline Typography -->
    <div class="about-timeline-marquee" aria-hidden="true">
      <span>COASTS ✧ CITIES ✧ SAFARI ✧ HIGHLANDS</span>
    </div>

    <!-- Timeline Header Row -->
    <div class="about-timeline-header-row">
      <div class="about-timeline-header-left">
        <span class="about-badge-dark">Our Process</span>
        <h2 class="about-timeline-title">
          How your journey unfolds,<br>
          one stop at a time.
        </h2>
      </div>

      <div class="about-timeline-header-right">
        <div class="about-timeline-counter">
          <strong id="timeline-step-current">03</strong> / 05
        </div>
        <p class="about-timeline-counter-desc">
          Carefully planned milestones from initial concept to your safe return home.
        </p>
      </div>
    </div>

    <!-- Interactive Desktop Timeline with Horizontal Track -->
    <div class="about-timeline-wrapper" role="region" aria-label="Interactive Journey Timeline">
      <div class="about-timeline-line" aria-hidden="true"></div>

      <div class="about-timeline-grid">
        <?php foreach ($timelineSteps as $step): ?>
          <div class="about-timeline-col <?= $step['is_active'] ? 'is-active' : '' ?>" data-step="<?= htmlspecialchars($step['num']) ?>">
            
            <!-- Top Zone (Used for position === 'above') -->
            <div class="timeline-zone-top">
              <?php if ($step['position'] === 'above'): ?>
                <div class="timeline-card <?= $step['is_active'] ? 'timeline-card-blue' : 'timeline-card-white' ?>">
                  <div class="timeline-card-photo">
                    <img src="<?= asset($step['image']) ?>" alt="<?= htmlspecialchars($step['title']) ?>" loading="lazy">
                  </div>
                  <h3 class="timeline-card-title"><?= htmlspecialchars($step['title']) ?></h3>
                  <p class="timeline-card-desc"><?= htmlspecialchars($step['desc']) ?></p>
                </div>
              <?php endif; ?>
            </div>

            <!-- Center Marker Button -->
            <div class="timeline-zone-center">
              <button type="button" 
                      class="timeline-marker-btn" 
                      aria-label="Step <?= htmlspecialchars($step['num']) ?>: <?= htmlspecialchars($step['title']) ?>"
                      aria-pressed="<?= $step['is_active'] ? 'true' : 'false' ?>">
                <span><?= htmlspecialchars($step['step']) ?></span>
              </button>
            </div>

            <!-- Bottom Zone (Used for position === 'below') -->
            <div class="timeline-zone-bottom">
              <?php if ($step['position'] === 'below'): ?>
                <div class="timeline-card <?= $step['is_active'] ? 'timeline-card-blue' : 'timeline-card-white' ?>">
                  <div class="timeline-card-photo">
                    <img src="<?= asset($step['image']) ?>" alt="<?= htmlspecialchars($step['title']) ?>" loading="lazy">
                  </div>
                  <h3 class="timeline-card-title"><?= htmlspecialchars($step['title']) ?></h3>
                  <p class="timeline-card-desc"><?= htmlspecialchars($step['desc']) ?></p>
                </div>
              <?php endif; ?>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 06: Why Travelers Choose Us (Sky Blue Background)
     ========================================================================== -->
<section class="about-why-section" id="why-choose-us">
  <div class="container about-why-container">
    <!-- Left Column: Title, Subtitle, CTA Button -->
    <div class="about-why-left">
      <span class="about-why-badge">Why Us</span>
      <h2 class="about-why-title">Why travellers choose The Lankan Nomad</h2>
      <p class="about-why-desc">
        We combine local insight with thoughtful planning to create stays and travel experiences that feel genuine, relaxed, and seamless.
      </p>
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 12px 28px; font-size: 0.95rem;">
        <span>Learn More</span>
        <span class="arrow-circle arrow-circle-white" aria-hidden="true">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
    </div>

    <!-- Right Column: 2x2 Feature Cards Grid -->
    <div class="about-why-cards-grid" role="region" aria-label="Why Choose The Lankan Nomad Features">
      <?php foreach ($whyFeatures as $feature): ?>
        <article class="about-why-card">
          <div class="about-why-icon-wrap" aria-hidden="true">
            <?php if ($feature['icon'] === 'compass'): ?>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
              </svg>
            <?php elseif ($feature['icon'] === 'calendar'): ?>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
            <?php elseif ($feature['icon'] === 'home'): ?>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
            <?php else: ?>
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
            <?php endif; ?>
          </div>
          <div>
            <h3 class="about-why-card-title"><?= htmlspecialchars($feature['title']) ?></h3>
            <p class="about-why-card-desc"><?= htmlspecialchars($feature['desc']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 07: Journeys We Love to Design (Staggered Photo Gallery)
     ========================================================================== -->
<section class="about-gal-section" id="journeys-gallery">
  <div class="container">
    <div class="about-gal-header">
      <span class="about-badge">Our Journeys</span>
      <h2 class="about-gal-title">Journeys we love to design</h2>
      <p class="about-gal-desc">An island of rich experiences, each with its own rhythm and authentic story to discover.</p>
    </div>

    <!-- 4 Staggered Photo Columns -->
    <div class="about-gal-grid" role="region" aria-label="Featured Sri Lankan Journeys Gallery">
      <?php foreach ($gallery as $item): ?>
        <div class="about-gal-card <?= htmlspecialchars($item['offset_class']) ?>">
          <img src="<?= asset($item['image']) ?>" 
               alt="<?= htmlspecialchars($item['title']) ?>" 
               loading="lazy" 
               decoding="async">
          <div class="about-gal-pill">
            <span><?= htmlspecialchars($item['title']) ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 08: Moments that Make the Journey Feel Personal (Scenic CTA Banner)
     ========================================================================== -->
<section class="about-cta-section" id="about-cta-banner" style="background-image: url('<?= asset($cta['image']) ?>');">
  <div class="about-cta-overlay"></div>
  <div class="container about-cta-container">
    <div class="about-cta-content">
      <h2 class="about-cta-title">
        <?= nl2br(htmlspecialchars($cta['title'])) ?>
      </h2>
      <p class="about-cta-desc">
        <?= htmlspecialchars($cta['desc']) ?>
      </p>
      <div class="about-cta-btn-wrap">
        <a href="<?= htmlspecialchars($cta['ctaUrl']) ?>" class="btn btn-white-pill about-cta-btn" aria-label="Plan Your Stay">
          <span><?= htmlspecialchars($cta['ctaText']) ?></span>
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
