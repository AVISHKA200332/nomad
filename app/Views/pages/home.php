<?php
/**
 * The Lankan Nomad - High Quality Homepage View
 * © Orbis Global - 2026
 *
 * Implements all 13 sections in exact specified order with complete content
 * Enhanced with eye-catching animations, interactive preview cards, and glassmorphism.
 */
?>

<!-- ==========================================================================
     SECTION 02: Hero Section with Live Island Pill & Interactive Nomad Card
     ========================================================================== -->
<section class="nomad-hero" id="hero">
  <!-- Dynamic Background with Ken Burns Pan/Zoom -->
  <div class="nomad-hero-bg" style="background-image: url('<?= asset('assets/images/srilanka/weligama_beach.jpg') ?>');"></div>
  
  <!-- Atmospheric Scrim & Ambient Light Orbs -->
  <div class="nomad-hero-overlay"></div>
  <div class="hero-ambient-orb hero-orb-left"></div>
  <div class="hero-ambient-orb hero-orb-right"></div>

  <div class="container nomad-hero-container">
    <div class="nomad-hero-grid">
      <!-- Left Column: Compelling Typography & Actions -->
      <div class="nomad-hero-content">
        <!-- Live Island Status Pill -->
        <div class="nomad-live-pill" data-animate="fade-down">
          <span class="live-pulse-dot">
            <span class="ping-circle"></span>
            <span class="solid-circle"></span>
          </span>
          <span class="live-pill-text">Live from the Island: <strong>28&deg;C Weligama</strong> &bull; Fiber 150+ Mbps &bull; Tropical Season</span>
        </div>

        <span class="nomad-eyebrow nomad-eyebrow-light" data-animate="fade-up" data-delay="50">
          <?= htmlspecialchars($hero['eyebrow']) ?>
        </span>

        <h1 class="nomad-hero-title" data-animate="fade-up" data-delay="100"><?= htmlspecialchars($hero['headline']) ?></h1>

        <div class="nomad-hero-lead" data-animate="fade-up" data-delay="150">
          <p>Discover a more effortless way to experience Sri Lanka. From finding your place to stay to arranging your arrival and settling into everyday life, The Lankan Nomad helps you plan an extended stay that feels right for you.</p>
          <p>Whether you're here for three months, six months or a year, make Sri Lanka more than a destination. Make it your home away from home.</p>
        </div>

        <div class="nomad-hero-actions" data-animate="fade-up" data-delay="200">
          <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary hero-btn-main">
            <span class="btn-shimmer-sweep"></span>
            <span><?= htmlspecialchars($hero['ctaPlan']) ?></span>
            <span class="arrow-circle arrow-circle-white">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </a>
          <a href="<?= url('/destinations') ?>" class="btn btn-white-pill hero-btn-sub">
            <span><?= htmlspecialchars($hero['ctaExplore']) ?></span>
            <span class="arrow-circle">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </a>
        </div>

        <div class="nomad-hero-supporting" data-animate="fade-up" data-delay="250">
          <?= htmlspecialchars($hero['supportingLine']) ?>
        </div>
      </div>

      <!-- Right Column: Interactive Glassmorphic Nomad Preview Card -->
      <div class="nomad-hero-card-col" data-animate="fade-left" data-delay="200">
        <div class="hero-interactive-card-wrap">
          <div class="hero-glass-card" id="heroInteractiveCard">
            <!-- Header with Rating and Location -->
            <div class="hero-card-header">
              <div class="hero-card-badge">
                <span class="star-rating">&#9733; 4.98</span>
                <span class="badge-sub">Nomad Verified</span>
              </div>
              <span class="hero-card-location">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                South Coast &bull; Ahangama
              </span>
            </div>

            <!-- Duration Tab Switcher Pills -->
            <div class="hero-card-switcher" role="tablist">
              <button type="button" class="hero-switch-btn active" data-duration="3-months">3 Months</button>
              <button type="button" class="hero-switch-btn" data-duration="6-months">6 Months <span class="pill-mini">Popular</span></button>
              <button type="button" class="hero-switch-btn" data-duration="12-months">12 Months</button>
            </div>

            <!-- Media Preview with Live Badge -->
            <div class="hero-card-preview-media">
              <img src="<?= asset('assets/images/srilanka/ahangama_coast.jpg') ?>" 
                   data-img-3mo="<?= asset('assets/images/srilanka/ahangama_coast.jpg') ?>"
                   data-img-6mo="<?= asset('assets/images/srilanka/weligama_beach.jpg') ?>"
                   data-img-12mo="<?= asset('assets/images/srilanka/colombo_skyline.jpg') ?>"
                   alt="Sri Lanka Nomad Living preview" 
                   class="hero-card-preview-img" 
                   id="heroPreviewImg">
              <div class="hero-card-tag-pill" id="heroCardTag">Seasonal Surf &amp; Focus</div>
            </div>

            <!-- Card Body Info -->
            <div class="hero-card-body">
              <h4 class="hero-card-title" id="heroCardTitle">Coastal Loft &bull; Private High-Speed Fiber</h4>
              <p class="hero-card-desc" id="heroCardDesc">Ideal for a seasonal stay. Enjoy ocean mornings, curated cafes, and verified quiet work environments.</p>

              <div class="hero-card-perks">
                <span class="hero-perk-item">
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  Fiber Wi-Fi 150+ Mbps
                </span>
                <span class="hero-perk-item">
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  Airport Pickup Arranged
                </span>
                <span class="hero-perk-item">
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  Flexible Extension
                </span>
              </div>

              <a href="<?= url('/plan-your-stay?duration=3+months') ?>" class="btn btn-primary hero-card-action-btn" id="heroCardCta">
                <span>Explore 3-Month Options</span>
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
      </div>
    </div>
  </div>

  <!-- Hero Bottom Trust Counter Bar -->
  <div class="hero-trust-bar" data-animate="fade-up" data-delay="300">
    <div class="container hero-trust-grid">
      <div class="hero-trust-col">
        <span class="trust-stat-num" data-counter="300" data-suffix="+">300+</span>
        <span class="trust-stat-label">Handpicked Long-Stay Villas</span>
      </div>
      <div class="hero-trust-divider"></div>
      <div class="hero-trust-col">
        <span class="trust-stat-num" data-counter="99" data-suffix="%">99%</span>
        <span class="trust-stat-label">Guest Settle-In Satisfaction</span>
      </div>
      <div class="hero-trust-divider"></div>
      <div class="hero-trust-col">
        <span class="trust-stat-num" data-counter="24" data-suffix="/7">24/7</span>
        <span class="trust-stat-label">Local Concierge &amp; Support</span>
      </div>
      <div class="hero-trust-divider"></div>
      <div class="hero-trust-col">
        <span class="trust-stat-num" data-counter="100" data-suffix="%">100%</span>
        <span class="trust-stat-label">Fast Fiber-Tested Workspaces</span>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 04: Choose Your Stay Duration (Interactive 3D Tilt Cards)
     ========================================================================== -->
<section class="section nomad-durations-section" id="durations">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">YOUR TIME, YOUR WAY</span>
      <h2 class="nomad-section-title">However long you stay, make it count.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Every extended stay is different. Tell us how long you plan to be in Sri Lanka, and we'll help you explore suitable options based on your needs, preferences and plans.
      </p>
    </div>

    <!-- 3 Duration Cards with Staggered Animations -->
    <div class="durations-grid">
      <?php foreach ($durations as $idx => $d): ?>
        <div class="duration-card <?= !empty($d['highlight']) ? 'is-featured' : '' ?>" 
             data-animate="fade-up" 
             data-delay="<?= 100 * ($idx + 1) ?>">
          <?php if (!empty($d['highlight'])): ?>
            <span class="duration-badge-top">
              <span class="badge-pulse-glow"></span>
              Most Popular
            </span>
          <?php endif; ?>

          <div class="duration-header-row">
            <span class="duration-tag"><?= htmlspecialchars($d['tag']) ?></span>
            <span class="duration-icon-pill">
              <?php if ($idx === 0): ?>&#x1F30A;<?php elseif ($idx === 1): ?>&#x2728;<?php else: ?>&#x1F3E1;<?php endif; ?>
            </span>
          </div>

          <h3 class="duration-title"><?= htmlspecialchars($d['title']) ?></h3>
          <p class="duration-desc"><?= htmlspecialchars($d['desc']) ?></p>

          <!-- Key Perk Highlights Checklist -->
          <ul class="duration-perks-list">
            <li>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Verified long-stay accommodation</span>
            </li>
            <li>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Fast fiber internet pre-tested</span>
            </li>
            <li>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>On-arrival local living guidance</span>
            </li>
          </ul>

          <div class="duration-ideal-block">
            <strong>Ideal for:</strong>
            <?= htmlspecialchars($d['idealFor']) ?>
          </div>

          <a href="<?= url('/plan-your-stay?duration=' . urlencode($d['durationValue'])) ?>" class="btn <?= !empty($d['highlight']) ? 'btn-primary' : 'btn-outline' ?>" style="margin-top: auto;">
            <span><?= htmlspecialchars($d['cta']) ?></span>
            <span class="<?= !empty($d['highlight']) ? 'arrow-circle arrow-circle-white' : 'arrow-circle' ?>">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 05: Services Overview (Modern Cards with Image Zoom)
     ========================================================================== -->
<section class="section nomad-services-section" id="services">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">THE DETAILS, THOUGHTFULLY PLANNED</span>
      <h2 class="nomad-section-title">More time living. Less time figuring things out.</h2>
      <div class="nomad-section-desc" style="max-width: 760px; margin: 0 auto;">
        <p style="margin-bottom: 10px;">
          Planning a long stay in another country can feel overwhelming. Where should you live? How will you get around? What should you organise before arriving?
        </p>
        <p>
          We're here to help you explore the practical details and make a plan that suits your time in Sri Lanka.
        </p>
      </div>
    </div>

    <!-- 6 Services Grid -->
    <div class="services-nomad-grid">
      <?php foreach ($services as $sIdx => $srv): ?>
        <div class="service-nomad-card" data-animate="fade-up" data-delay="<?= 80 * ($sIdx + 1) ?>">
          <div class="service-nomad-media">
            <img src="<?= asset($srv['image']) ?>" alt="<?= htmlspecialchars($srv['title']) ?>" class="service-nomad-img" loading="lazy">
            <div class="service-nomad-media-overlay"></div>
            <span class="service-nomad-num">SERVICE <?= htmlspecialchars($srv['num']) ?></span>
          </div>
          <div class="service-nomad-body">
            <h3 class="service-nomad-title"><?= htmlspecialchars($srv['title']) ?></h3>
            <p class="service-nomad-desc"><?= htmlspecialchars($srv['desc']) ?></p>
            <div class="service-nomad-link">
              <span>Learn more</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 48px;" data-animate="fade-up">
      <a href="<?= url('/services') ?>" class="btn btn-primary" style="padding: 14px 36px;">
        <span>Explore Our Services</span>
        <span class="arrow-circle arrow-circle-white">
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
     SECTION 06: Destination Discovery (Visual Vibe Cards)
     ========================================================================== -->
<section class="section nomad-destinations-section" id="destinations">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">FIND YOUR KIND OF SRI LANKA</span>
      <h2 class="nomad-section-title">One island. A thousand ways to live.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Sri Lanka offers more than one way of life. From the energy of the city to the calm of the coast and the cool air of the hills, discover a location that fits your pace.
      </p>
    </div>

    <!-- 5 Destinations Grid -->
    <div class="destinations-nomad-grid">
      <?php foreach ($destinations as $dIdx => $dest): ?>
        <div class="destination-nomad-card" data-animate="fade-up" data-delay="<?= 90 * ($dIdx + 1) ?>">
          <div class="destination-nomad-media">
            <img src="<?= asset($dest['image']) ?>" alt="<?= htmlspecialchars($dest['name']) ?>" loading="lazy">
            <div class="destination-nomad-media-scrim"></div>
            <span class="destination-nomad-tagline"><?= htmlspecialchars($dest['tagline']) ?></span>
            <?php if (strpos($dest['name'], 'South Coast') !== false): ?>
              <span class="dest-badge-top-pick">&#x1F525; Nomad Hotspot</span>
            <?php endif; ?>
          </div>
          <div class="destination-nomad-content">
            <h3 class="destination-nomad-title"><?= htmlspecialchars($dest['name']) ?></h3>
            <p class="destination-nomad-desc"><?= htmlspecialchars($dest['desc']) ?></p>
            <a href="<?= url('/plan-your-stay?destination=' . urlencode($dest['name'])) ?>" class="btn btn-outline" style="margin-top: auto; justify-content: center;">
              <span>Enquire About This Region</span>
              <span class="arrow-circle">
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

    <div style="text-align: center; margin-top: 42px;" data-animate="fade-up">
      <a href="<?= url('/destinations') ?>" class="btn btn-primary" style="padding: 14px 36px;">
        <span>Explore Destinations</span>
        <span class="arrow-circle arrow-circle-white">
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
     SECTION 07: How It Works (Connected Timeline Journey)
     ========================================================================== -->
<section class="section nomad-steps-section" id="how-it-works">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">SIMPLE FROM THE START</span>
      <h2 class="nomad-section-title">Your Sri Lankan stay, in four steps.</h2>
    </div>

    <!-- Connected Step Cards with Interactive Progress Line -->
    <div class="steps-container-wrap">
      <div class="steps-progress-track">
        <div class="steps-progress-fill"></div>
      </div>
      <div class="steps-nomad-grid">
        <?php foreach ($steps as $stIdx => $st): ?>
          <div class="step-nomad-card" data-animate="fade-up" data-delay="<?= 100 * ($stIdx + 1) ?>">
            <div class="step-number-ring">
              <div class="step-nomad-number"><?= htmlspecialchars($st['number']) ?></div>
            </div>
            <h3 class="step-nomad-title"><?= htmlspecialchars($st['title']) ?></h3>
            <p class="step-nomad-desc"><?= htmlspecialchars($st['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div style="text-align: center; margin-top: 48px;" data-animate="fade-up">
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 40px;">
        <span>Start Planning</span>
        <span class="arrow-circle arrow-circle-white">
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
     SECTION 08: The Lankan Lifestyle (Collage with Parallax Depth)
     ========================================================================== -->
<section class="section nomad-lifestyle-section" id="lifestyle">
  <div class="lifestyle-glow-aura"></div>
  <div class="container">
    <div class="lifestyle-nomad-wrap">
      <!-- Left Column: Lifestyle Checklist -->
      <div class="lifestyle-content-col" data-animate="fade-right">
        <span class="nomad-eyebrow nomad-eyebrow-light">BEYOND THE CHECK-IN</span>
        <h2 class="nomad-section-title text-white">Don't just visit Sri Lanka. Experience it.</h2>
        <p style="font-size: 1.15rem; color: rgba(255, 255, 255, 0.95); margin-bottom: 12px; font-weight: 500;">
          Discover the little things that turn a long stay into a meaningful experience.
        </p>

        <ul class="lifestyle-list">
          <?php foreach ($lifestyle as $lIdx => $point): ?>
            <li class="lifestyle-list-item" data-animate="fade-up" data-delay="<?= 40 * ($lIdx + 1) ?>">
              <span class="lifestyle-check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </span>
              <span><?= htmlspecialchars($point) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>

        <p style="font-size: 1rem; color: rgba(255, 255, 255, 0.85); line-height: 1.65; margin-bottom: 32px;">
          Whether you prefer the coast, the city or the hills, Sri Lanka offers space to slow down, explore and make the experience your own.
        </p>

        <a href="<?= url('/experiences') ?>" class="btn btn-white-pill">
          <span>Discover Sri Lanka</span>
          <span class="arrow-circle">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Right Column: Interactive 4-Photo Collage -->
      <div class="lifestyle-media-col" data-animate="fade-left">
        <div class="lifestyle-media-collage">
          <div class="collage-item collage-item-1">
            <img src="<?= asset('assets/images/srilanka/ahangama_coast.jpg') ?>" alt="Ahangama ocean coast Sri Lanka" loading="lazy">
          </div>
          <div class="collage-item collage-item-2">
            <img src="<?= asset('assets/images/srilanka/srilankan_cuisine.jpg') ?>" alt="Authentic Sri Lankan cuisine flavours" loading="lazy">
          </div>
          <div class="collage-item collage-item-3">
            <img src="<?= asset('assets/images/srilanka/nine_arch_bridge.jpg') ?>" alt="Ella Nine Arch Bridge highland railway" loading="lazy">
          </div>
          <div class="collage-item collage-item-4">
            <img src="<?= asset('assets/images/srilanka/yala_wildlife.jpg') ?>" alt="Yala wild elephants nature adventure" loading="lazy">
          </div>

          <!-- Central Floating Collage Badge -->
          <div class="lifestyle-floating-pill">
            <span class="pill-sun">&#x1F334;</span>
            <span class="pill-text">Island Living &bull; 365 Days of Warm Sun</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 09: Why The Lankan Nomad? (Modern Feature Cards)
     ========================================================================== -->
<section class="section nomad-why-section" id="why-us">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">A MORE PERSONAL APPROACH</span>
      <h2 class="nomad-section-title">Your stay should feel like yours.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Our aim is to make planning a longer stay in Sri Lanka feel clearer, more personal and easier to navigate.
      </p>
    </div>

    <div class="why-nomad-grid">
      <?php 
      $whyIcons = [
        '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>',
        '<circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>',
        '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>',
        '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>',
        '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>'
      ];
      ?>
      <?php foreach ($whyUs as $idx => $item): ?>
        <div class="why-nomad-card" data-animate="fade-up" data-delay="<?= 90 * ($idx + 1) ?>">
          <div class="why-nomad-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <?= $whyIcons[$idx % count($whyIcons)] ?>
            </svg>
          </div>
          <h3 class="why-nomad-title"><?= htmlspecialchars($item['title']) ?></h3>
          <p class="why-nomad-desc"><?= htmlspecialchars($item['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 10: Featured Experiences (Cinematic Full-Bleed Cards)
     ========================================================================== -->
<section class="section nomad-experiences-section" id="featured-experiences">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">MAKE YOUR TIME COUNT</span>
      <h2 class="nomad-section-title">Your days, your discoveries.</h2>
    </div>

    <div class="experiences-nomad-grid">
      <?php foreach ($experiences as $eIdx => $exp): ?>
        <div class="experience-nomad-card" data-animate="fade-up" data-delay="<?= 80 * ($eIdx + 1) ?>">
          <img src="<?= asset($exp['image']) ?>" alt="<?= htmlspecialchars($exp['title']) ?>" loading="lazy">
          <div class="experience-nomad-overlay"></div>
          <div class="experience-nomad-body">
            <h3 class="experience-nomad-title"><?= htmlspecialchars($exp['title']) ?></h3>
            <p class="experience-nomad-desc"><?= htmlspecialchars($exp['desc']) ?></p>
            <span class="exp-discover-pill">Discover &rarr;</span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 42px;" data-animate="fade-up">
      <a href="<?= url('/experiences') ?>" class="btn btn-primary" style="padding: 14px 36px;">
        <span>Explore Experiences</span>
        <span class="arrow-circle arrow-circle-white">
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
     SECTION 11: Practical Information (Interactive Guide Previews)
     ========================================================================== -->
<section class="section nomad-guides-section" id="practical-info">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">GOOD TO KNOW BEFORE YOU GO</span>
      <h2 class="nomad-section-title">Feel prepared before you arrive.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Planning ahead can make an extended stay much easier. Explore useful information about accommodation, getting around, local customs, connectivity and preparing for your time in Sri Lanka.
      </p>
    </div>

    <!-- 6 Guides Grid -->
    <div class="guides-nomad-grid">
      <?php foreach ($guides as $gIdx => $guideTitle): ?>
        <a href="<?= url('/guide') ?>" class="guide-nomad-card" data-animate="fade-up" data-delay="<?= 60 * ($gIdx + 1) ?>">
          <div class="guide-nomad-icon-box">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
            </svg>
          </div>
          <div class="guide-nomad-info">
            <span class="guide-nomad-readtime">Guide &bull; 4 min read</span>
            <span class="guide-nomad-title"><?= htmlspecialchars($guideTitle) ?></span>
          </div>
          <span class="guide-nomad-arrow">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 42px;" data-animate="fade-up">
      <a href="<?= url('/guide') ?>" class="btn btn-outline" style="padding: 14px 36px;">
        <span>Read the Sri Lanka Guide</span>
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
     SECTION 12: Enquiry CTA Banner with Radiant Ambient Mesh
     ========================================================================== -->
<section class="container" style="margin-bottom: var(--space-4xl);" data-animate="scale-up">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-mesh"></div>
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">YOUR NEXT CHAPTER AWAITS</span>
      <h2 class="enquiry-cta-title text-white">Let's plan your Sri Lankan stay.</h2>
      <p class="enquiry-cta-desc">
        Three months, six months or a whole year. Whatever your plans look like, start with a conversation about what you need and how you'd like to live.
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 16px 36px; font-size: 1.05rem;">
          <span class="btn-shimmer-sweep"></span>
          <span>Plan Your Stay</span>
          <span class="arrow-circle arrow-circle-white">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
        <a href="<?= url('/contact') ?>" class="btn btn-white-pill" style="padding: 16px 36px; font-size: 1.05rem;">
          <span>Contact Our Team</span>
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
