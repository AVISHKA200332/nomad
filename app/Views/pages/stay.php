<?php
/**
 * The Lankan Nomad - Stay in Sri Lanka View (PAGE 03)
 * © Orbis Global - 2026
 *
 * Enhanced with eye-catching animations, glassmorphism, and luxury cards.
 */
?>

<!-- ==========================================================================
     3 DURATION OPTIONS: Clean First Section with Luxury Showcase Cards
     ========================================================================== -->
<section class="section nomad-first-section" id="options">
  <div class="container">
    <div class="nomad-section-header text-center" data-animate="fade-up">
      <span class="nomad-eyebrow">CURATED TIMELINES</span>
      <h1 class="nomad-section-title">Choose your duration in Sri Lanka.</h1>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Every extended stay is customized to your work, rhythm, and travel ambitions. Explore what each chapter offers.
      </p>
    </div>

    <div class="services-detail-list">
      <?php foreach ($options as $idx => $opt): ?>
        <div class="service-detail-item <?= !empty($opt['highlight']) ? 'is-featured' : '' ?>" 
             id="<?= htmlspecialchars($opt['id']) ?>" 
             data-animate="fade-up" 
             data-delay="<?= 100 * ($idx + 1) ?>"
             style="<?= !empty($opt['highlight']) ? 'border: 2px solid var(--color-primary); box-shadow: 0 12px 36px rgba(48, 71, 244, 0.16);' : '' ?>">
          <div class="service-detail-content">
            <span class="service-detail-num"><?= $opt['tag'] ?> &bull; <?= htmlspecialchars($opt['duration']) ?></span>
            <h3 class="service-detail-title"><?= htmlspecialchars($opt['headline']) ?></h3>
            <p class="service-detail-desc"><?= htmlspecialchars($opt['desc']) ?></p>

            <div class="service-info-list">
              <div class="service-info-title">Your planning may include:</div>
              <ul>
                <?php foreach ($opt['planning'] as $item): ?>
                  <li>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="color: #10b981; flex-shrink: 0; margin-right: 6px;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span><?= htmlspecialchars($item) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <a href="<?= url('/plan-your-stay?duration=' . urlencode($opt['durationParam'])) ?>" class="btn <?= !empty($opt['highlight']) ? 'btn-primary' : 'btn-outline' ?>">
              <span><?= htmlspecialchars($opt['cta']) ?></span>
              <span class="<?= !empty($opt['highlight']) ? 'arrow-circle arrow-circle-white' : 'arrow-circle' ?>">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>

          <div class="service-detail-visual" style="border-radius: var(--radius-xl); overflow: hidden; height: 100%; min-height: 340px; box-shadow: var(--shadow-md);">
            <img src="<?= asset($opt['image']) ?>" alt="<?= htmlspecialchars($opt['duration']) ?>" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     WHAT CAN BE ARRANGED? SECTION: Glass Highlight Card
     ========================================================================== -->
<section class="section" id="what-can-be-arranged" style="background-color: #f7fafd; padding: 70px 0;">
  <div class="container">
    <div style="max-width: 900px; margin: 0 auto; background: #ffffff; border: 1px solid var(--color-border); border-radius: 24px; padding: 48px; box-shadow: 0 10px 30px rgba(3, 17, 38, 0.05);" data-animate="fade-up">
      <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
        <span style="font-size: 1.5rem;">&#x1F3E1;</span>
        <span class="nomad-eyebrow" style="margin-bottom: 0;">CUSTOM ARRANGEMENTS</span>
      </div>
      <h2 class="nomad-section-title" style="font-size: 2.1rem; margin-bottom: 16px;">What Can Be Arranged?</h2>
      <p style="font-size: 1.08rem; line-height: 1.7; color: var(--color-text-body); margin-bottom: 0;">
        <?= htmlspecialchars($whatCanBeArranged['lead']) ?>
      </p>
    </div>
  </div>
</section>

<!-- ==========================================================================
     IMPORTANT INFORMATION SECTION: Compliance Highlight Card
     ========================================================================== -->
<section class="section" id="important-info" style="background-color: #f7fafd; padding-top: 0; padding-bottom: 80px;">
  <div class="container">
    <div style="max-width: 900px; margin: 0 auto; background: #ffffff; border: 1px solid #fed7aa; border-left: 5px solid #f97316; border-radius: 24px; padding: 48px; box-shadow: 0 10px 30px rgba(3, 17, 38, 0.05);" data-animate="fade-up" data-delay="100">
      <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
        <span style="font-size: 1.5rem;">&#x1F6C2;</span>
        <span class="nomad-eyebrow" style="color: #ea580c; margin-bottom: 0;">TRAVEL COMPLIANCE &amp; VISAS</span>
      </div>
      <h2 class="nomad-section-title" style="font-size: 2.1rem; margin-bottom: 16px;">Important Information for Longer Stays</h2>
      <p style="font-size: 1.08rem; line-height: 1.7; color: var(--color-text-body); margin-bottom: 0;">
        <?= htmlspecialchars($importantInfo['lead']) ?>
      </p>
    </div>
  </div>
</section>

<!-- ==========================================================================
     STAY CLOSING CTA: Radiant Ambient Mesh Banner
     ========================================================================== -->
<section class="container" style="margin-bottom: 80px;" data-animate="scale-up">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-mesh"></div>
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">GET STARTED</span>
      <h2 class="enquiry-cta-title text-white">Start with your plans.</h2>
      <p class="enquiry-cta-desc">
        Share your intended dates, preferred destination and the type of support you need. We'll help you explore the next steps.
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
