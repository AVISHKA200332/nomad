<?php
/**
 * The Lankan Nomad - Sri Lanka Guide / Blog View (PAGE 07)
 * © Orbis Global - 2026
 *
 * Enhanced with eye-catching animations, glassmorphism, and atmospheric hero.
 */
?>

<!-- ==========================================================================
     5 THEMES / CATEGORIES SECTION: Interactive Glass Cards
     ========================================================================== -->
<section class="section nomad-first-section" id="guide-categories" style="background-color: #fbfdff;">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up" style="max-width: 820px; margin: 0 auto 50px;">
      <span class="nomad-eyebrow">ESSENTIAL TOPICS</span>
      <h1 class="nomad-section-title">Knowledge tailored for extended stays.</h1>
      <p class="nomad-section-desc">
        Key pillars to research before making travel, accommodation, and remote-work commitments.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 24px;">
      <?php foreach ($categories as $idx => $cat): ?>
        <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: 20px; padding: 28px 24px; box-shadow: 0 4px 18px rgba(3, 17, 38, 0.04); transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;" 
             data-animate="fade-up" 
             data-delay="<?= 70 * ($idx + 1) ?>">
          <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(48, 71, 244, 0.08); color: var(--color-primary); display: flex; align-items: center; justify-content: center; margin-bottom: 16px;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="12" y1="16" x2="12" y2="12"></line>
              <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
          </div>
          <h3 style="font-size: 1.18rem; font-weight: 700; color: var(--color-navy); margin-bottom: 10px; line-height: 1.3;">
            <?= htmlspecialchars($cat['name']) ?>
          </h3>
          <p style="font-size: 0.92rem; color: var(--color-text-body); line-height: 1.55; margin-bottom: 0;">
            <?= htmlspecialchars($cat['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     10 SUGGESTED ARTICLES GRID: Interactive Read Cards
     ========================================================================== -->
<section class="section" id="articles-list" style="background-color: #f7fafd; padding: 80px 0;">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">FIELD GUIDES &amp; READS</span>
      <h2 class="nomad-section-title">Suggested Article Guides</h2>
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
            <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: var(--color-primary); background: rgba(48, 71, 244, 0.08); padding: 5px 14px; border-radius: 9999px;">
              <?= htmlspecialchars($art['category']) ?>
            </span>
            <span style="font-size: 0.82rem; color: var(--color-text-muted); font-weight: 600;">
              <?= htmlspecialchars($art['readTime']) ?>
            </span>
          </div>

          <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-navy); line-height: 1.3; margin-bottom: 12px;">
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
