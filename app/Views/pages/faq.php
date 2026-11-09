<?php
/**
 * The Lankan Nomad - Frequently Asked Questions View (PAGE 08)
 * © Orbis Global - 2026
 *
 * Enhanced with eye-catching animations, glassmorphism, and atmospheric hero.
 */
?>

<!-- ==========================================================================
     FAQ ACCORDION LIST: Modern Interactive Cards
     ========================================================================== -->
<section class="section nomad-first-section" id="faq-list" style="background-color: #fbfdff;">
  <div class="container" style="max-width: 920px;">
    <div class="nomad-section-header text-center" data-animate="fade-up" style="margin-bottom: 50px;">
      <span class="nomad-eyebrow">HELP &amp; CLARITY</span>
      <h1 class="nomad-section-title">Common Questions &amp; Practical Information</h1>
      <p class="nomad-section-desc">
        Click any question below to read detailed guidance from our team.
      </p>
    </div>

    <div class="faq-nomad-list">
      <?php foreach ($faqs as $index => $item): ?>
        <div class="faq-nomad-item <?= $index === 0 ? 'is-expanded' : '' ?>" 
             id="faq-<?= $index + 1 ?>" 
             data-animate="fade-up" 
             data-delay="<?= 40 * ($index % 5 + 1) ?>">
          <button class="faq-nomad-trigger" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
            <span><?= sprintf('%02d. ', $index + 1) . htmlspecialchars($item['q']) ?></span>
            <span class="faq-nomad-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </span>
          </button>
          <div class="faq-nomad-panel" style="<?= $index === 0 ? 'max-height: 350px;' : '' ?>">
            <p class="faq-nomad-answer"><?= htmlspecialchars($item['a']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 48px;" data-animate="fade-up">
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 16px 40px; font-size: 1.02rem;">
        <span class="btn-shimmer-sweep"></span>
        <span>Start Your Stay Enquiry</span>
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
     FAQ CLOSING CTA: Radiant Ambient Mesh Banner
     ========================================================================== -->
<section class="container" style="margin-bottom: 80px;" data-animate="scale-up">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-mesh"></div>
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">HAVE MORE QUESTIONS?</span>
      <h2 class="enquiry-cta-title text-white">We're here to help you navigate every detail.</h2>
      <p class="enquiry-cta-desc">
        Reach out directly to discuss your travel timeline, workspace requirements, or questions about island life.
      </p>
      <div class="enquiry-cta-buttons">
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
