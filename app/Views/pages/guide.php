<?php
/**
 * The Lankan Nomad - Sri Lanka Guide / Blog View (PAGE 07)
 * © Orbis Global - 2026
 */
?>

<!-- 5 Themes / Categories Section -->
<section class="section nomad-first-section" id="guide-categories">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">ESSENTIAL TOPICS</span>
      <h1 class="nomad-section-title">Knowledge tailored for extended stays.</h1>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Key pillars to research before making travel, accommodation, and remote-work commitments.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 36px;">
      <?php foreach ($categories as $cat): ?>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); padding: 28px 24px; box-shadow: var(--shadow-sm); transition: transform var(--transition-fast);">
          <div style="width: 40px; height: 40px; border-radius: var(--radius-md); background: rgba(48, 71, 244, 0.08); color: var(--color-primary); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="16" x2="12" y2="12"></line>
              <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--color-navy); margin-bottom: 10px;">
            <?= htmlspecialchars($cat['name']) ?>
          </h3>
          <p style="font-size: 0.92rem; color: var(--color-text-body); line-height: 1.55;">
            <?= htmlspecialchars($cat['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10 Suggested Articles Grid -->
<section class="section" id="articles-list" style="background-color: #f7fafd;">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">FIELD GUIDES &amp; READS</span>
      <h2 class="nomad-section-title">Suggested Article Guides</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        In-depth explorations written from practical on-the-ground experience across Sri Lanka.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px; margin-top: 36px;">
      <?php foreach ($articles as $art): ?>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); padding: 32px; box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
            <span style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: var(--color-primary); background: rgba(48, 71, 244, 0.08); padding: 4px 12px; border-radius: var(--radius-pill);">
              <?= htmlspecialchars($art['category']) ?>
            </span>
            <span style="font-size: 0.85rem; color: var(--color-text-muted);">
              <?= htmlspecialchars($art['readTime']) ?>
            </span>
          </div>

          <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-navy); line-height: 1.3; margin-bottom: 12px;">
            <?= htmlspecialchars($art['title']) ?>
          </h3>

          <p style="font-size: 0.98rem; color: var(--color-text-body); line-height: 1.6; margin-bottom: 24px; flex: 1;">
            <?= htmlspecialchars($art['desc']) ?>
          </p>

          <a href="<?= url('/plan-your-stay?topic=' . urlencode($art['title'])) ?>" class="btn btn-outline" style="justify-content: center;">
            <span>Enquire on This Topic</span>
            <span class="arrow-circle">
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

<!-- Blog CTA -->
<section class="container" style="margin: 60px auto 80px;">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">TAKE THE NEXT STEP</span>
      <h2 class="enquiry-cta-title text-white"><?= htmlspecialchars($blogCta['headline']) ?></h2>
      <p class="enquiry-cta-desc">
        <?= htmlspecialchars($blogCta['desc']) ?>
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 36px; font-size: 1rem;">
          <span><?= htmlspecialchars($blogCta['cta']) ?></span>
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

