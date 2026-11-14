<?php
/**
 * The Lankan Nomad - Sri Lanka Guide / Blog View (PAGE 07)
 * © Orbis Global - 2026
 *
 * Enhanced with eye-catching animations, glassmorphism, and atmospheric hero.
 */
?>

<!-- ==========================================================================
     10 SUGGESTED ARTICLES GRID: Interactive Read Cards
     ========================================================================== -->
<section class="section nomad-first-section" id="articles-list" style="background-color: #f7fafd; padding-bottom: 80px;">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up" style="max-width: 820px; margin: 0 auto 50px;">
      <span class="nomad-eyebrow">FIELD GUIDES &amp; READS</span>
      <h1 class="nomad-section-title">Suggested Article Guides</h1>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        In-depth explorations written from practical on-the-ground experience across Sri Lanka.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 28px; margin-top: 36px;">
      <?php foreach ($articles as $aIdx => $art): ?>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: 22px; padding: 34px; box-shadow: 0 4px 20px rgba(3, 17, 38, 0.04); display: flex; flex-direction: column; transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;" 
             data-animate="fade-up" 
             data-delay="<?= 60 * ($aIdx % 4 + 1) ?>">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
            <span style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; color: var(--color-primary); background: rgba(48, 71, 244, 0.08); padding: 5px 14px; border-radius: 9999px;">
              <?= htmlspecialchars($art['category']) ?>
            </span>
            <span style="font-size: 0.82rem; color: var(--color-text-muted); font-weight: 600;">
              <?= htmlspecialchars($art['readTime']) ?>
            </span>
          </div>

          <h3 style="font-size: 1.35rem; font-weight: 600; color: var(--color-navy); line-height: 1.3; margin-bottom: 12px;">
            <?= htmlspecialchars($art['title']) ?>
          </h3>

          <p style="font-size: 0.96rem; color: var(--color-text-body); line-height: 1.6; margin-bottom: 24px; flex: 1;">
            <?= htmlspecialchars($art['desc']) ?>
          </p>

          <a href="<?= url('/plan-your-stay?topic=' . urlencode($art['title'])) ?>" class="btn btn-outline" style="justify-content: center; margin-top: auto;">
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

<!-- ==========================================================================
     BLOG CLOSING CTA: Radiant Ambient Mesh Banner
     ========================================================================== -->
<section class="container" style="margin: 60px auto 80px;" data-animate="scale-up">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-mesh"></div>
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">TAKE THE NEXT STEP</span>
      <h2 class="enquiry-cta-title text-white"><?= htmlspecialchars($blogCta['headline']) ?></h2>
      <p class="enquiry-cta-desc">
        <?= htmlspecialchars($blogCta['desc']) ?>
      </p>
      <div class="enquiry-cta-buttons">
        <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 16px 36px; font-size: 1.05rem;">
          <span class="btn-shimmer-sweep"></span>
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
