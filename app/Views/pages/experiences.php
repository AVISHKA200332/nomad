<?php
/**
 * The Lankan Nomad - Experiences View (PAGE 05)
 * © Orbis Global - 2026
 */
?>

<!-- 5 Experience Categories -->
<section class="section nomad-first-section" id="experience-categories">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">AUTHENTIC ISLAND LIVING</span>
      <h1 class="nomad-section-title">Experiences rooted in local life.</h1>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Enjoy enriching moments that connect you to people, culture, wilderness, and coastal rhythms.
      </p>
    </div>

    <div class="services-detail-list">
      <?php foreach ($experiences as $idx => $exp): ?>
        <div class="service-detail-item" id="exp-<?= $idx + 1 ?>">
          <div class="service-detail-content">
            <span class="service-detail-num">Experience Category <?= sprintf('%02d', $idx + 1) ?></span>
            <h3 class="service-detail-title"><?= htmlspecialchars($exp['title']) ?></h3>
            <p style="font-weight: 600; color: var(--color-navy); margin-bottom: 12px; font-size: 1.15rem;">
              <?= htmlspecialchars($exp['tagline']) ?>
            </p>
            <p class="service-detail-desc"><?= htmlspecialchars($exp['desc']) ?></p>

            <div class="service-info-list">
              <div class="service-info-title">Moments to look forward to:</div>
              <ul>
                <?php foreach ($exp['highlights'] as $hl): ?>
                  <li><?= htmlspecialchars($hl) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>

            <a href="<?= url('/plan-your-stay?experience=' . urlencode($exp['title'])) ?>" class="btn btn-outline">
              <span>Enquire About <?= htmlspecialchars($exp['title']) ?></span>
              <span class="arrow-circle">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>

          <div class="service-detail-visual" style="border-radius: var(--radius-xl); overflow: hidden; height: 100%; min-height: 340px; box-shadow: var(--shadow-md);">
            <img src="<?= asset($exp['image']) ?>" alt="<?= htmlspecialchars($exp['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Local Experiences CTA -->
<section class="container" style="margin-bottom: 80px;">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">DISCOVER YOUR PATH</span>
      <h2 class="enquiry-cta-title text-white"><?= htmlspecialchars($closingCta['headline']) ?></h2>
      <p class="enquiry-cta-desc">
        <?= htmlspecialchars($closingCta['desc']) ?>
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay?service=experiences') ?>" class="btn btn-primary" style="padding: 14px 36px; font-size: 1rem;">
          <span><?= htmlspecialchars($closingCta['cta']) ?></span>
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

