<?php
/**
 * Avenora About Page View
 * Faithfully engineered to match the attached About.png reference
 *
 * @var array $statistics
 * @var array $experiences
 * @var array $timelineSteps
 * @var array $whyFeatures
 * @var array $gallery
 */
?>

<!-- ==========================================================================
     SECTION 01: Cinematic About Mountain Hero
     ========================================================================== -->
<section class="about-hero-section" id="about-hero" style="background-image: url('<?= asset('assets/images/about/about-hero-bg.jpg') ?>');">
  <div class="about-hero-overlay"></div>

  <div class="container about-hero-container">
    <div class="about-hero-content">
      <span class="about-hero-badge">About Avenora</span>
      <h1 class="about-hero-title">
        Your next journey<br>
        awaits
      </h1>
      <p class="about-hero-desc">
        From meaningful experiences to extraordinary destinations, we create journeys designed around you.
      </p>
      <div class="about-hero-buttons">
        <!-- Primary: Contact Us -->
        <a href="<?= url('/contact') ?>" class="btn btn-white-pill" aria-label="Contact Avenora">
          <span>Contact Us</span>
          <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>

        <!-- Secondary: Explore Journeys -->
        <a href="<?= url('/packages') ?>" class="btn btn-white-pill" aria-label="Explore Journeys">
          <span>Explore Journeys</span>
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
     SECTION 02: About Avenora Introduction (Two Columns)
     ========================================================================== -->
<section class="about-intro-section" id="about-intro">
  <div class="container">
    <div class="about-intro-grid">
      <!-- Left Column: Traveler Photograph -->
      <div class="about-intro-photo-wrap">
        <div class="about-intro-photo">
          <img src="<?= asset('assets/images/about/intro-traveler.jpg') ?>" 
               alt="Avenora traveler in yellow jacket exploring mountain landscape" 
               loading="lazy" 
               decoding="async">
        </div>
      </div>

      <!-- Right Column: Company Story -->
      <div class="about-intro-content">
        <span class="about-badge">About Us</span>
        <h2 class="about-intro-title">
          A travel studio for people<br>
          who want more than a<br>
          standard trip.
        </h2>
        <p class="about-intro-p">
          Avenora is a travel-focused studio built around the belief that the most memorable journeys are the ones that feel personal. We bring together inspiring destinations, thoughtful travel planning, and meaningful experiences designed around each traveler.
        </p>
        <p class="about-intro-p">
          From peaceful coastal escapes to challenging mountain adventures, our goal is to help travelers discover new places, experience different cultures, and create memories that last long after the journey ends.
        </p>
        <div class="about-intro-cta-wrap">
          <a href="<?= url('/packages') ?>" class="btn btn-white-pill about-intro-cta" aria-label="Explore Travel Packages">
            <span>Explore Packages</span>
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
<section class="about-stats-section" id="about-stats" aria-label="Key Metrics">
  <div class="container">
    <div class="about-stats-grid">
      <?php foreach ($statistics as $stat): ?>
        <article class="about-stat-card <?= $stat['is_highlight'] ? 'stat-card-blue' : 'stat-card-white' ?>">
          <div class="stat-top-row">
            <h3 class="stat-number"><?= htmlspecialchars($stat['number']) ?></h3>
            <div class="stat-icon" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
              </svg>
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
          Every traveler is different, and every journey should reflect that. Explore experiences designed around how you want to discover the world.
        </p>
      </div>
    </div>

    <!-- 6 Expanding Experience Cards -->
    <div class="about-exp-container" role="region" aria-label="Experience Categories">
      <?php foreach ($experiences as $exp): ?>
        <div class="about-exp-card <?= $exp['is_active'] ? 'is-expanded' : '' ?>"
             tabindex="0"
             role="button"
             aria-expanded="<?= $exp['is_active'] ? 'true' : 'false' ?>"
             aria-label="<?= htmlspecialchars($exp['title']) ?> travel category"
             data-category-slug="<?= htmlspecialchars($exp['slug']) ?>">
          
          <!-- Background Photography -->
          <img src="<?= asset($exp['image']) ?>" 
               alt="<?= htmlspecialchars($exp['title']) ?>" 
               loading="lazy" 
               decoding="async">
          <div class="about-exp-overlay"></div>

          <!-- Top Circular Indicator -->
          <div class="about-exp-pill-top" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="12 8 8 12 12 16 12 8"></polygon>
            </svg>
          </div>

          <!-- Collapsed State Vertical Label -->
          <div class="about-exp-collapsed-label" aria-hidden="true">
            <?= htmlspecialchars($exp['title']) ?>
          </div>

          <!-- Expanded State Content Panel -->
          <div class="about-exp-expanded-content">
            <h3 class="about-exp-expanded-title"><?= htmlspecialchars($exp['title']) ?></h3>
            <p class="about-exp-expanded-desc"><?= htmlspecialchars($exp['desc']) ?></p>
            <a href="<?= htmlspecialchars($exp['cta_url']) ?>" class="btn btn-white-pill">
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
     SECTION 05: Dark Navy Journey Timeline
     ========================================================================== -->
<section class="about-timeline-section" id="journey-timeline">
  <div class="container">
    <!-- Top Decorative Outline Typography -->
    <div class="about-timeline-marquee" aria-hidden="true">
      <span>COASTS ✧ CITIES ✧ SAFARI</span>
    </div>

    <!-- Timeline Header Row -->
    <div class="about-timeline-header-row">
      <div class="about-timeline-header-left">
        <span class="about-badge-dark">Your Adventure</span>
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

    <!-- 5-Step Alternating Horizontal Timeline -->
    <div class="about-timeline-wrapper">
      <div class="about-timeline-line" aria-hidden="true"></div>

      <div class="about-timeline-grid" role="region" aria-label="Journey Milestones">
        <?php foreach ($timelineSteps as $step): ?>
          <div class="about-timeline-col <?= $step['is_active'] ? 'is-active' : '' ?>" 
               data-step="<?= htmlspecialchars($step['num']) ?>">

            <!-- TOP ZONE (Above Line) -->
            <div class="timeline-zone-top">
              <?php if ($step['position'] === 'above'): ?>
                <div class="timeline-card <?= $step['is_active'] ? 'timeline-card-blue' : 'timeline-card-white' ?>" 
                     role="button" 
                     tabindex="0" 
                     aria-label="Step <?= $step['num'] ?>: <?= htmlspecialchars($step['title']) ?>">
                  <div class="timeline-card-photo">
                    <img src="<?= asset($step['image']) ?>" alt="<?= htmlspecialchars($step['title']) ?>" loading="lazy">
                  </div>
                  <h4 class="timeline-card-title"><?= htmlspecialchars($step['title']) ?></h4>
                  <p class="timeline-card-desc"><?= htmlspecialchars($step['desc']) ?></p>
                </div>
              <?php endif; ?>
            </div>

            <!-- CENTER ZONE (Marker on Line) -->
            <div class="timeline-zone-center">
              <button type="button" 
                      class="timeline-marker-btn" 
                      aria-label="Select step <?= $step['num'] ?>: <?= htmlspecialchars($step['title']) ?>">
                <?= htmlspecialchars($step['num']) ?>
              </button>
            </div>

            <!-- BOTTOM ZONE (Below Line) -->
            <div class="timeline-zone-bottom">
              <?php if ($step['position'] === 'below'): ?>
                <div class="timeline-card <?= $step['is_active'] ? 'timeline-card-blue' : 'timeline-card-white' ?>" 
                     role="button" 
                     tabindex="0" 
                     aria-label="Step <?= $step['num'] ?>: <?= htmlspecialchars($step['title']) ?>">
                  <div class="timeline-card-photo">
                    <img src="<?= asset($step['image']) ?>" alt="<?= htmlspecialchars($step['title']) ?>" loading="lazy">
                  </div>
                  <h4 class="timeline-card-title"><?= htmlspecialchars($step['title']) ?></h4>
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
     SECTION 06: Why Travelers Choose Avenora (Sky Blue Background)
     ========================================================================== -->
<section class="about-why-section" id="why-avenora">
  <div class="container about-why-container">
    <!-- Left Column: Heading & Description -->
    <div class="about-why-left">
      <span class="about-why-badge">Why Avenora</span>
      <h2 class="about-why-title">
        Why travellers<br>
        choose Avenora
      </h2>
      <p class="about-why-desc">
        Every journey should feel effortless, meaningful, and made for you.
      </p>
      <div class="about-why-cta">
        <a href="<?= url('/packages') ?>" class="btn btn-white-pill" aria-label="Explore Packages">
          <span>Explore Packages</span>
          <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>
    </div>

    <!-- Right Column: 2x2 Feature Cards Grid -->
    <div class="about-why-cards-grid" role="region" aria-label="Why Choose Avenora Features">
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
      <p class="about-gal-desc">A world of experiences, each with its own story to discover.</p>
    </div>

    <!-- 4 Staggered Photo Columns -->
    <div class="about-gal-grid" role="region" aria-label="Featured Journeys Gallery">
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
     SECTION 08: Cinematic Mountain Adventure CTA Banner
     ========================================================================== -->
<section class="about-cta-section" id="about-cta-banner" style="background-image: url('<?= asset('assets/images/banners/pkg-cta-hiker.jpg') ?>');">
  <div class="about-cta-overlay"></div>
  <div class="container about-cta-container">
    <div class="about-cta-content">
      <h2 class="about-cta-title">
        Moments that make the<br>
        journey feel personal.
      </h2>
      <p class="about-cta-desc">
        Avenora brings together personalized journeys, seamless planning, and extraordinary experiences.
      </p>
      <div class="about-cta-btn-wrap">
        <a href="<?= url('/destinations') ?>" class="btn btn-white-pill about-cta-btn" aria-label="See All Maps">
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
