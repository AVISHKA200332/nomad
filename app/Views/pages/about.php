<?php
/**
 * The Lankan Nomad - About Us View (PAGE 06)
 * © Orbis Global - 2026
 *
 * Enhanced with eye-catching animations, glassmorphism, and atmospheric hero.
 */
?>

<!-- ==========================================================================
     MISSION & VISION: Dual Glassmorphic Contrast Cards
     ========================================================================== -->
<section class="section nomad-first-section" id="mission-vision" style="background-color: #fbfdff;">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up" style="max-width: 820px; margin: 0 auto 50px;">
      <span class="nomad-eyebrow">ABOUT THE LANKAN NOMAD</span>
      <h1 class="nomad-section-title">A more thoughtful way to stay in Sri Lanka.</h1>
      <p class="nomad-section-desc">
        We believe extended travel should feel personal, clear, and deeply connected to local life.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px;">
      <!-- Mission Card -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: 24px; padding: 48px; box-shadow: 0 10px 30px rgba(3, 17, 38, 0.05); transition: transform 0.35s ease, box-shadow 0.35s ease;" data-animate="fade-right">
        <span class="nomad-eyebrow">OUR MISSION</span>
        <h2 class="nomad-section-title" style="font-size: 1.95rem; margin-bottom: 16px; color: var(--color-navy);">
          <?= htmlspecialchars($mission['headline']) ?>
        </h2>
        <p style="font-size: 1.08rem; line-height: 1.7; color: var(--color-text-body); margin-bottom: 0;">
          <?= htmlspecialchars($mission['desc']) ?>
        </p>
      </div>

      <!-- Vision Card -->
      <div style="background: linear-gradient(135deg, var(--color-navy) 0%, #0d2752 100%); color: #fff; border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 24px; padding: 48px; box-shadow: 0 16px 40px rgba(3, 17, 38, 0.2); transition: transform 0.35s ease, box-shadow 0.35s ease;" data-animate="fade-left">
        <span class="nomad-eyebrow nomad-eyebrow-light">OUR VISION</span>
        <h2 class="nomad-section-title text-white" style="font-size: 1.95rem; margin-bottom: 16px;">
          <?= htmlspecialchars($vision['headline']) ?>
        </h2>
        <p style="font-size: 1.08rem; line-height: 1.7; color: rgba(255, 255, 255, 0.88); margin-bottom: 0;">
          <?= htmlspecialchars($vision['desc']) ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     OUR APPROACH: 4 Pillars of Excellence
     ========================================================================== -->
<section class="section" id="our-approach" style="background-color: #f7fafd; padding: 80px 0;">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">HOW WE WORK</span>
      <h2 class="nomad-section-title">Our Approach</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        We design long-stay solutions built around transparency, personal attention, and deep local insight.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 28px; margin-top: 36px;">
      <?php foreach ($approach as $idx => $app): ?>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: 22px; padding: 36px; box-shadow: 0 4px 20px rgba(3, 17, 38, 0.04); transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;" 
             data-animate="fade-up" 
             data-delay="<?= 80 * ($idx + 1) ?>">
          <div style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, rgba(48, 71, 244, 0.1) 0%, rgba(56, 189, 248, 0.15) 100%); border: 1px solid rgba(48, 71, 244, 0.2); display: flex; align-items: center; justify-content: center; font-size: 1.35rem; font-weight: 800; color: var(--color-primary); line-height: 1; margin-bottom: 18px;">
            <?= sprintf('%02d', $idx + 1) ?>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--color-navy); margin-bottom: 12px; line-height: 1.3;">
            <?= htmlspecialchars($app['title']) ?>
          </h3>
          <p style="font-size: 0.96rem; color: var(--color-text-body); line-height: 1.6; margin-bottom: 0;">
            <?= htmlspecialchars($app['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     ABOUT CLOSING CTA: Radiant Ambient Mesh Banner
     ========================================================================== -->
<section class="container" style="margin-bottom: 80px;" data-animate="scale-up">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-mesh"></div>
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">THE NEXT CHAPTER</span>
      <h2 class="enquiry-cta-title text-white">Let's start planning your next chapter.</h2>
      <p class="enquiry-cta-desc">
        Connect with our team to discover how an extended stay in Sri Lanka can look and feel for you.
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
      </div>
    </div>
  </div>
</section>
