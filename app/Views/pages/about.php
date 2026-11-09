<?php
/**
 * The Lankan Nomad - About Us View (PAGE 06)
 * © Orbis Global - 2026
 */
?>

<!-- Mission & Vision Section -->
<section class="section nomad-first-section" id="mission-vision">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 36px;">
      <!-- Mission Card -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-2xl); padding: 48px; box-shadow: var(--shadow-sm);">
        <span class="nomad-eyebrow">OUR MISSION</span>
        <h2 class="nomad-section-title" style="font-size: 1.85rem; margin-bottom: 16px;">
          <?= htmlspecialchars($mission['headline']) ?>
        </h2>
        <p style="font-size: 1.05rem; line-height: 1.65; color: var(--color-text-body);">
          <?= htmlspecialchars($mission['desc']) ?>
        </p>
      </div>

      <!-- Vision Card -->
      <div style="background: var(--color-navy); color: #fff; border-radius: var(--radius-2xl); padding: 48px; box-shadow: var(--shadow-sm);">
        <span class="nomad-eyebrow nomad-eyebrow-light">OUR VISION</span>
        <h2 class="nomad-section-title text-white" style="font-size: 1.85rem; margin-bottom: 16px;">
          <?= htmlspecialchars($vision['headline']) ?>
        </h2>
        <p style="font-size: 1.05rem; line-height: 1.65; color: rgba(255, 255, 255, 0.85);">
          <?= htmlspecialchars($vision['desc']) ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Our Approach Section -->
<section class="section" id="our-approach" style="background-color: #f7fafd;">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">HOW WE WORK</span>
      <h2 class="nomad-section-title">Our Approach</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        We design long-stay solutions built around transparency, personal attention, and deep local insight.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px; margin-top: 36px;">
      <?php foreach ($approach as $idx => $app): ?>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); padding: 36px; box-shadow: var(--shadow-sm);">
          <div style="font-size: 2rem; font-weight: 800; color: var(--color-primary); line-height: 1; margin-bottom: 14px;">
            <?= sprintf('%02d', $idx + 1) ?>
          </div>
          <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-navy); margin-bottom: 10px;">
            <?= htmlspecialchars($app['title']) ?>
          </h3>
          <p style="font-size: 1rem; color: var(--color-text-body); line-height: 1.6;">
            <?= htmlspecialchars($app['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- About CTA -->
<section class="container" style="margin-bottom: 80px;">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">THE NEXT CHAPTER</span>
      <h2 class="enquiry-cta-title text-white">Let's start planning your next chapter.</h2>
      <p class="enquiry-cta-desc">
        Connect with our team to discover how an extended stay in Sri Lanka can look and feel for you.
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
