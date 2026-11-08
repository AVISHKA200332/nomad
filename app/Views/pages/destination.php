<?php
/**
 * The Lankan Nomad - Destinations View (PAGE 04)
 * © Orbis Global - 2026
 */
?>

<!-- Hero Section (No Hero Picture) -->
<section class="nomad-hero-inner">
  <div class="container nomad-hero-content">
    <span class="nomad-eyebrow nomad-eyebrow-light"><?= htmlspecialchars($hero['eyebrow']) ?></span>
    <h1 class="nomad-hero-title"><?= htmlspecialchars($hero['headline']) ?></h1>
    <div class="nomad-hero-lead">
      <p>Coastal communities, lively cities, misty hills and historic landscapes—Sri Lanka offers different ways to experience everyday life.</p>
      <p>Explore the regions below and consider what matters most to you: climate, pace of life, transport, amenities, work needs or access to nature.</p>
    </div>
    <div class="nomad-hero-actions">
      <a href="<?= url('/plan-your-stay?ref=help-me-choose') ?>" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem;">
        <span><?= htmlspecialchars($hero['cta']) ?></span>
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

<!-- 6 Destinations Grid -->
<section class="section" id="regions-grid">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">EXPLORE THE REGIONS</span>
      <h2 class="nomad-section-title">Where will your routine take shape?</h2>
      <p class="nomad-section-desc" style="max-width: 760px; margin: 0 auto;">
        From the Indian Ocean shores to high altitude tea gardens, discover the ideal base for your extended stay.
      </p>
    </div>

    <div class="destinations-nomad-grid">
      <?php foreach ($destinations as $d): ?>
        <div class="destination-nomad-card" id="destination-<?= htmlspecialchars($d['num']) ?>">
          <div class="destination-nomad-media">
            <img src="<?= asset($d['image']) ?>" alt="<?= htmlspecialchars($d['name']) ?>" loading="lazy">
            <span class="destination-nomad-tagline">Destination <?= htmlspecialchars($d['num']) ?></span>
          </div>
          <div class="destination-nomad-content">
            <h3 class="destination-nomad-title"><?= htmlspecialchars($d['name']) ?></h3>
            <p style="font-weight: 600; color: var(--color-navy); margin-bottom: 8px;">
              <?= htmlspecialchars($d['headline']) ?>
            </p>
            <p class="destination-nomad-desc"><?= htmlspecialchars($d['desc']) ?></p>

            <div style="margin-bottom: 16px; font-size: 0.92rem; color: var(--color-text-body); line-height: 1.55;">
              <strong style="color: var(--color-navy);">Lifestyle highlights:</strong> <?= htmlspecialchars($d['lifestyleHighlights']) ?>
            </div>

            <div class="destination-nomad-consider">
              <strong>Consider before choosing:</strong>
              <?= htmlspecialchars($d['considerBefore']) ?>
            </div>

            <a href="<?= url('/plan-your-stay?destination=' . urlencode($d['name'])) ?>" class="btn btn-outline" style="margin-top: auto; justify-content: center;">
              <span><?= htmlspecialchars($d['cta']) ?></span>
              <span class="arrow-circle arrow-circle-white" style="background: var(--color-primary);">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Mandatory Page 04 Note -->
    <div class="nomad-note-box" style="margin-top: 40px;">
      <strong>NOTE:</strong> Destinations shown are examples of Sri Lanka's regions. Confirm actual service areas and accommodation availability before presenting locations as bookable.
    </div>
  </div>
</section>

<!-- Destination CTA Section -->
<section class="container" style="margin-bottom: 80px;">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">UNSURE WHERE TO BEGIN?</span>
      <h2 class="enquiry-cta-title">Not sure where to stay?</h2>
      <p class="enquiry-cta-desc">
        Tell us about your ideal lifestyle, work requirements, budget and preferred surroundings. We'll help you explore which regions may suit your plans.
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay?ref=help-me-choose') ?>" class="btn btn-primary" style="padding: 14px 36px; font-size: 1rem;">
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
