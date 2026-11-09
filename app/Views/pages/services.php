<?php
/**
 * The Lankan Nomad - Our Services View (PAGE 02)
 * © Orbis Global - 2026
 */
?>

<!-- Services Detail List -->
<section class="section nomad-first-section" id="services-list">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">OUR FULL SERVICE SUITE</span>
      <h1 class="nomad-section-title">Support designed around your everyday life.</h1>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        From the moments before you take off to your daily life on the island, we bring practical clarity to every step.
      </p>
    </div>

    <div class="services-detail-list">
      <?php foreach ($services as $s): ?>
        <div class="service-detail-item" id="service-<?= htmlspecialchars($s['num']) ?>">
          <div class="service-detail-content">
            <span class="service-detail-num">Service <?= htmlspecialchars($s['num']) ?> &mdash; <?= htmlspecialchars($s['title']) ?></span>
            <h3 class="service-detail-title"><?= htmlspecialchars($s['tagline']) ?></h3>
            <p class="service-detail-desc"><?= htmlspecialchars($s['desc']) ?></p>

            <div class="service-info-list">
              <div class="service-info-title">Information to help us plan:</div>
              <ul>
                <?php foreach ($s['infoList'] as $info): ?>
                  <li><?= htmlspecialchars($info) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>

            <a href="<?= url('/plan-your-stay?service=' . urlencode($s['ctaParam'])) ?>" class="btn btn-outline">
              <span><?= htmlspecialchars($s['cta']) ?></span>
              <span class="arrow-circle">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>

          <div class="service-detail-visual" style="border-radius: var(--radius-xl); overflow: hidden; height: 100%; min-height: 340px; box-shadow: var(--shadow-md);">
            <img src="<?= asset($s['image']) ?>" alt="<?= htmlspecialchars($s['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Services Closing CTA -->
<section class="container" style="margin-bottom: 80px;">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">LET'S CONNECT</span>
      <h2 class="enquiry-cta-title text-white">What would make your stay easier?</h2>
      <p class="enquiry-cta-desc">
        Tell us what you're planning, and let's explore the arrangements that fit your needs.
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 36px; font-size: 1rem;">
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

