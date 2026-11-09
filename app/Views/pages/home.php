<?php
/**
 * The Lankan Nomad - Home Page View
 * © Orbis Global - 2026
 *
 * Implements all 13 sections in exact specified order with complete content
 */
?>

<!-- ==========================================================================
     SECTION 02: Hero Section
     ========================================================================== -->
<section class="nomad-hero" id="hero" style="background-image: url('<?= asset('assets/images/srilanka/weligama_beach.jpg') ?>');">
  <div class="nomad-hero-overlay"></div>
  <div class="container nomad-hero-content">
    <span class="nomad-eyebrow nomad-eyebrow-light"><?= htmlspecialchars($hero['eyebrow']) ?></span>
    <h1 class="nomad-hero-title"><?= htmlspecialchars($hero['headline']) ?></h1>
    <div class="nomad-hero-lead">
      <p>Discover a more effortless way to experience Sri Lanka. From finding your place to stay to arranging your arrival and settling into everyday life, The Lankan Nomad helps you plan an extended stay that feels right for you.</p>
      <p>Whether you're here for three months, six months or a year, make Sri Lanka more than a destination. Make it your home away from home.</p>
    </div>
    <div class="nomad-hero-actions">
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 28px; font-size: 1rem;">
        <span><?= htmlspecialchars($hero['ctaPlan']) ?></span>
        <span class="arrow-circle arrow-circle-white">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
      <a href="<?= url('/destinations') ?>" class="btn btn-white-pill" style="padding: 14px 28px; font-size: 1rem;">
        <span><?= htmlspecialchars($hero['ctaExplore']) ?></span>
        <span class="arrow-circle">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
    </div>
    <div class="nomad-hero-supporting">
      <?= htmlspecialchars($hero['supportingLine']) ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 03: Introductory Section
     ========================================================================== -->
<section class="section" id="intro" style="background-color: #fbfdff; border-bottom: 1px solid var(--color-border-light);">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow"><?= htmlspecialchars($intro['eyebrow']) ?></span>
      <h2 class="nomad-section-title"><?= htmlspecialchars($intro['headline']) ?></h2>
      <p style="font-size: 1.25rem; font-weight: 600; color: var(--color-navy); margin-bottom: 16px;">
        <?= htmlspecialchars($intro['lead']) ?>
      </p>
      <div class="nomad-section-desc" style="max-width: 780px; margin: 0 auto 28px;">
        <p style="margin-bottom: 14px;">
          Imagine starting your morning with fresh tropical air, working from a peaceful coastal town, discovering a favourite local café and spending your weekends exploring beaches, mountains and historic towns.
        </p>
        <p>
          The Lankan Nomad is designed for people who want to experience more of Sri Lanka at their own pace. We help you explore your options for a longer stay and organise the details that make everyday living easier.
        </p>
      </div>
      <a href="<?= url('/services') ?>" class="btn btn-outline">
        <span><?= htmlspecialchars($intro['cta']) ?></span>
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
     SECTION 04: Choose Your Stay Duration
     ========================================================================== -->
<section class="section" id="durations">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">YOUR TIME, YOUR WAY</span>
      <h2 class="nomad-section-title">However long you stay, make it count.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Every extended stay is different. Tell us how long you plan to be in Sri Lanka, and we'll help you explore suitable options based on your needs, preferences and plans.
      </p>
    </div>

    <!-- 3 Duration Cards -->
    <div class="durations-grid">
      <?php foreach ($durations as $d): ?>
        <div class="duration-card <?= !empty($d['highlight']) ? 'is-featured' : '' ?>">
          <?php if (!empty($d['highlight'])): ?>
            <span class="duration-badge-top">Most Popular</span>
          <?php endif; ?>
          <span class="duration-tag"><?= htmlspecialchars($d['tag']) ?></span>
          <h3 class="duration-title"><?= htmlspecialchars($d['title']) ?></h3>
          <p class="duration-desc"><?= htmlspecialchars($d['desc']) ?></p>

          <div class="duration-ideal-block">
            <strong>Ideal for:</strong>
            <?= htmlspecialchars($d['idealFor']) ?>
          </div>

          <a href="<?= url('/plan-your-stay?duration=' . urlencode($d['durationValue'])) ?>" class="btn <?= !empty($d['highlight']) ? 'btn-primary' : 'btn-outline' ?>">
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
     SECTION 05: Services Overview
     ========================================================================== -->
<section class="section" id="services" style="background-color: #f7fafd;">
  <div class="container">
    <div class="nomad-section-header text-center">
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
      <?php foreach ($services as $srv): ?>
        <div class="service-nomad-card">
          <img src="<?= asset($srv['image']) ?>" alt="<?= htmlspecialchars($srv['title']) ?>" class="service-nomad-img" loading="lazy">
          <div class="service-nomad-body">
            <span class="service-nomad-num">SERVICE <?= htmlspecialchars($srv['num']) ?></span>
            <h3 class="service-nomad-title"><?= htmlspecialchars($srv['title']) ?></h3>
            <p class="service-nomad-desc"><?= htmlspecialchars($srv['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 40px;">
      <a href="<?= url('/services') ?>" class="btn btn-primary" style="padding: 12px 32px;">
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
     SECTION 06: Destination Discovery
     ========================================================================== -->
<section class="section" id="destinations">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">FIND YOUR KIND OF SRI LANKA</span>
      <h2 class="nomad-section-title">One island. A thousand ways to live.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Sri Lanka offers more than one way of life. From the energy of the city to the calm of the coast and the cool air of the hills, discover a location that fits your pace.
      </p>
    </div>

    <!-- 5 Destinations Grid -->
    <div class="destinations-nomad-grid">
      <?php foreach ($destinations as $dest): ?>
        <div class="destination-nomad-card">
          <div class="destination-nomad-media">
            <img src="<?= asset($dest['image']) ?>" alt="<?= htmlspecialchars($dest['name']) ?>" loading="lazy">
            <span class="destination-nomad-tagline"><?= htmlspecialchars($dest['tagline']) ?></span>
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

    <div style="text-align: center; margin-top: 36px;">
      <a href="<?= url('/destinations') ?>" class="btn btn-primary" style="padding: 12px 32px;">
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
     SECTION 07: How It Works
     ========================================================================== -->
<section class="section" id="how-it-works" style="background-color: #f8fafc;">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">SIMPLE FROM THE START</span>
      <h2 class="nomad-section-title">Your Sri Lankan stay, in four steps.</h2>
    </div>

    <div class="steps-nomad-grid">
      <?php foreach ($steps as $st): ?>
        <div class="step-nomad-card">
          <div class="step-nomad-number"><?= htmlspecialchars($st['number']) ?></div>
          <h3 class="step-nomad-title"><?= htmlspecialchars($st['title']) ?></h3>
          <p class="step-nomad-desc"><?= htmlspecialchars($st['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 40px;">
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 12px 36px;">
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
     SECTION 08: The Lankan Lifestyle
     ========================================================================== -->
<section class="section" id="lifestyle">
  <div class="container">
    <div class="lifestyle-nomad-wrap">
      <div class="lifestyle-content-col">
        <span class="nomad-eyebrow nomad-eyebrow-light">BEYOND THE CHECK-IN</span>
        <h2 class="nomad-section-title text-white">Don't just visit Sri Lanka. Experience it.</h2>
        <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.9); margin-bottom: 8px;">
          Discover the little things that turn a long stay into a meaningful experience.
        </p>

        <ul class="lifestyle-list">
          <?php foreach ($lifestyle as $point): ?>
            <li class="lifestyle-list-item">
              <span class="lifestyle-check-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </span>
              <span><?= htmlspecialchars($point) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>

        <p style="font-size: 0.98rem; color: rgba(255, 255, 255, 0.8); line-height: 1.6; margin-bottom: 28px;">
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

      <div class="lifestyle-media-collage">
        <img src="<?= asset('assets/images/srilanka/ahangama_coast.jpg') ?>" alt="Ahangama ocean coast Sri Lanka" loading="lazy">
        <img src="<?= asset('assets/images/srilanka/srilankan_cuisine.jpg') ?>" alt="Authentic Sri Lankan cuisine flavours" loading="lazy">
        <img src="<?= asset('assets/images/srilanka/nine_arch_bridge.jpg') ?>" alt="Ella Nine Arch Bridge highland railway" loading="lazy">
        <img src="<?= asset('assets/images/srilanka/yala_wildlife.jpg') ?>" alt="Yala wild elephants nature adventure" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     SECTION 09: Why The Lankan Nomad?
     ========================================================================== -->
<section class="section" id="why-us" style="background-color: #fbfdff;">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">A MORE PERSONAL APPROACH</span>
      <h2 class="nomad-section-title">Your stay should feel like yours.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Our aim is to make planning a longer stay in Sri Lanka feel clearer, more personal and easier to navigate.
      </p>
    </div>

    <div class="why-nomad-grid">
      <?php foreach ($whyUs as $idx => $item): ?>
        <div class="why-nomad-card">
          <div class="why-nomad-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
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
     SECTION 10: Featured Experiences
     ========================================================================== -->
<section class="section" id="featured-experiences">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">MAKE YOUR TIME COUNT</span>
      <h2 class="nomad-section-title">Your days, your discoveries.</h2>
    </div>

    <div class="experiences-nomad-grid">
      <?php foreach ($experiences as $exp): ?>
        <div class="experience-nomad-card">
          <img src="<?= asset($exp['image']) ?>" alt="<?= htmlspecialchars($exp['title']) ?>" loading="lazy">
          <div class="experience-nomad-overlay"></div>
          <div class="experience-nomad-body">
            <h3 class="experience-nomad-title"><?= htmlspecialchars($exp['title']) ?></h3>
            <p class="experience-nomad-desc"><?= htmlspecialchars($exp['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 36px;">
      <a href="<?= url('/experiences') ?>" class="btn btn-primary" style="padding: 12px 32px;">
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
     SECTION 11: Practical Information
     ========================================================================== -->
<section class="section" id="practical-info" style="background-color: #f7fafd;">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">GOOD TO KNOW BEFORE YOU GO</span>
      <h2 class="nomad-section-title">Feel prepared before you arrive.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Planning ahead can make an extended stay much easier. Explore useful information about accommodation, getting around, local customs, connectivity and preparing for your time in Sri Lanka.
      </p>
    </div>

    <!-- 6 Guides Grid -->
    <div class="guides-nomad-grid">
      <?php foreach ($guides as $guideTitle): ?>
        <a href="<?= url('/guide') ?>" class="guide-nomad-card">
          <span class="guide-nomad-title"><?= htmlspecialchars($guideTitle) ?></span>
          <span class="guide-nomad-arrow">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 36px;">
      <a href="<?= url('/guide') ?>" class="btn btn-outline" style="padding: 12px 32px;">
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
     SECTION 12: Enquiry CTA Banner
     ========================================================================== -->
<section class="container">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">YOUR NEXT CHAPTER AWAITS</span>
      <h2 class="enquiry-cta-title text-white">Let's plan your Sri Lankan stay.</h2>
      <p class="enquiry-cta-desc">
        Three months, six months or a whole year. Whatever your plans look like, start with a conversation about what you need and how you'd like to live.
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem;">
          <span>Plan Your Stay</span>
          <span class="arrow-circle arrow-circle-white">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
        <a href="<?= url('/contact') ?>" class="btn btn-white-pill" style="padding: 14px 32px; font-size: 1rem;">
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
