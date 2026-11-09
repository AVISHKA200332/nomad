<?php
/**
 * The Lankan Nomad - Destinations View (PAGE 04)
 * © Orbis Global - 2026
 *
 * Enhanced with eye-catching animations, glassmorphism, and modern cards.
 */
?>

<!-- ==========================================================================
     6 DESTINATIONS GRID: Clean First Section with Modern Visual Cards
     ========================================================================== -->
<section class="section nomad-first-section" id="regions-grid">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">EXPLORE THE REGIONS</span>
      <h1 class="nomad-section-title">Where will your routine take shape?</h1>
      <p class="nomad-section-desc" style="max-width: 760px; margin: 0 auto;">
        From the Indian Ocean shores to high altitude tea gardens, discover the ideal base for your extended stay.
      </p>
    </div>

    <div class="destinations-nomad-grid">
      <?php foreach ($destinations as $idx => $d): ?>
        <div class="destination-nomad-card" id="destination-<?= htmlspecialchars($d['num']) ?>" data-animate="fade-up" data-delay="<?= 80 * ($idx % 3 + 1) ?>">
          <div class="destination-nomad-media">
            <img src="<?= asset($d['image']) ?>" alt="<?= htmlspecialchars($d['name']) ?>" loading="lazy">
            <div class="destination-nomad-media-scrim"></div>
            <span class="destination-nomad-tagline">Destination <?= htmlspecialchars($d['num']) ?></span>
            <?php if (stripos($d['name'], 'South Coast') !== false || stripos($d['name'], 'Ahangama') !== false): ?>
              <span class="dest-badge-top-pick">&#x1F525; Nomad Hotspot</span>
            <?php endif; ?>
          </div>
          <div class="destination-nomad-content">
            <h3 class="destination-nomad-title"><?= htmlspecialchars($d['name']) ?></h3>
            <p style="font-weight: 600; color: var(--color-navy); margin-bottom: 8px;">
              <?= htmlspecialchars($d['headline']) ?>
            </p>
            <p class="destination-nomad-desc"><?= htmlspecialchars($d['desc']) ?></p>

            <div style="margin-bottom: 20px; font-size: 0.92rem; color: var(--color-text-body); line-height: 1.55; background: #f8fafc; padding: 12px 14px; border-radius: 12px; border: 1px solid #e2e8f0;">
              <strong style="color: var(--color-navy);">Lifestyle highlights:</strong> <?= htmlspecialchars($d['lifestyleHighlights']) ?>
            </div>

            <a href="<?= url('/plan-your-stay?destination=' . urlencode($d['name'])) ?>" class="btn btn-outline" style="margin-top: auto; justify-content: center;">
              <span><?= htmlspecialchars($d['cta']) ?></span>
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
  </div>
</section>

<!-- ==========================================================================
     DESTINATION CLOSING CTA: Radiant Ambient Mesh Banner
     ========================================================================== -->
<section class="container" style="margin-bottom: 80px;" data-animate="scale-up">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-mesh"></div>
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">UNSURE WHERE TO BEGIN?</span>
      <h2 class="enquiry-cta-title text-white">Not sure where to stay?</h2>
      <p class="enquiry-cta-desc">
        Tell us about your ideal lifestyle, work requirements, budget and preferred surroundings. We'll help you explore which regions may suit your plans.
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay?ref=help-me-choose') ?>" class="btn btn-primary" style="padding: 16px 36px; font-size: 1.05rem;">
          <span class="btn-shimmer-sweep"></span>
          <span>Help Me Choose</span>
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
