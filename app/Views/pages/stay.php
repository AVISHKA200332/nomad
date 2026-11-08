<?php
/**
 * The Lankan Nomad - Stay in Sri Lanka View (PAGE 03)
 * © Orbis Global - 2026
 */
?>

<!-- Hero Section (No Hero Picture) -->
<section class="nomad-hero-inner">
  <div class="container nomad-hero-content">
    <span class="nomad-eyebrow nomad-eyebrow-light"><?= htmlspecialchars($hero['eyebrow']) ?></span>
    <h1 class="nomad-hero-title"><?= htmlspecialchars($hero['headline']) ?></h1>
    <div class="nomad-hero-lead">
      <p>Whether you're planning a few months by the ocean or a full year exploring island life, a longer stay gives you the opportunity to create your own routine and experience more of the country.</p>
      <p>Let's begin with the length of stay that works for you.</p>
    </div>
    <div class="nomad-hero-actions">
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem;">
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
</section>

<!-- 3 Duration Options -->
<section class="section" id="options">
  <div class="container">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">CURATED TIMELINES</span>
      <h2 class="nomad-section-title">Choose your duration in Sri Lanka.</h2>
      <p class="nomad-section-desc" style="max-width: 740px; margin: 0 auto;">
        Every extended stay is customized to your work, rhythm, and travel ambitions. Explore what each chapter offers.
      </p>
    </div>

    <div class="services-detail-list">
      <?php foreach ($options as $opt): ?>
        <div class="service-detail-item" id="<?= htmlspecialchars($opt['id']) ?>" style="<?= !empty($opt['highlight']) ? 'border: 2px solid var(--color-primary); box-shadow: var(--shadow-md);' : '' ?>">
          <div class="service-detail-content">
            <span class="service-detail-num"><?= $opt['tag'] ?> &bull; <?= htmlspecialchars($opt['duration']) ?></span>
            <h3 class="service-detail-title"><?= htmlspecialchars($opt['headline']) ?></h3>
            <p class="service-detail-desc"><?= htmlspecialchars($opt['desc']) ?></p>

            <div class="service-info-list">
              <div class="service-info-title">Your planning may include:</div>
              <ul>
                <?php foreach ($opt['planning'] as $item): ?>
                  <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>

            <a href="<?= url('/plan-your-stay?duration=' . urlencode($opt['durationParam'])) ?>" class="btn <?= !empty($opt['highlight']) ? 'btn-primary' : 'btn-outline' ?>">
              <span><?= htmlspecialchars($opt['cta']) ?></span>
              <span class="arrow-circle arrow-circle-white" style="<?= empty($opt['highlight']) ? 'background: var(--color-primary);' : '' ?>">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </a>
          </div>

          <div class="service-detail-visual" style="border-radius: var(--radius-xl); overflow: hidden; height: 100%; min-height: 340px; box-shadow: var(--shadow-md);">
            <img src="<?= asset($opt['image']) ?>" alt="<?= htmlspecialchars($opt['duration']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- What Can Be Arranged? Section -->
<section class="section" id="what-can-be-arranged" style="background-color: #f7fafd;">
  <div class="container">
    <div style="max-width: 860px; margin: 0 auto; background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-2xl); padding: 48px; box-shadow: var(--shadow-sm);">
      <span class="nomad-eyebrow">CUSTOM ARRANGEMENTS</span>
      <h2 class="nomad-section-title" style="font-size: 2rem;">What Can Be Arranged?</h2>
      <p style="font-size: 1.05rem; line-height: 1.65; color: var(--color-text-body); margin-bottom: 20px;">
        <?= htmlspecialchars($whatCanBeArranged['lead']) ?>
      </p>
      <div class="nomad-note-box" style="margin-top: 16px;">
        <strong>Confirmation Requirement:</strong> <?= htmlspecialchars($whatCanBeArranged['disclaimer']) ?>
      </div>
    </div>
  </div>
</section>

<!-- Important Information for Longer Stays Section -->
<section class="section" id="important-info" style="padding-top: 0;">
  <div class="container">
    <div style="max-width: 860px; margin: 0 auto; background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-2xl); padding: 48px; box-shadow: var(--shadow-sm);">
      <span class="nomad-eyebrow" style="color: #c05621;">TRAVEL COMPLIANCE &amp; VISAS</span>
      <h2 class="nomad-section-title" style="font-size: 2rem;">Important Information for Longer Stays</h2>
      <p style="font-size: 1.05rem; line-height: 1.65; color: var(--color-text-body); margin-bottom: 20px;">
        <?= htmlspecialchars($importantInfo['lead']) ?>
      </p>
      <div class="nomad-note-box" style="border-left-color: #dd6b20; background: #fffaf0;">
        <strong>Legal Notice:</strong> <?= htmlspecialchars($importantInfo['legalNote']) ?>
      </div>
    </div>
  </div>
</section>

<!-- Closing CTA -->
<section class="container" style="margin-bottom: 80px;">
  <div class="enquiry-cta-section">
    <div class="enquiry-cta-overlay"></div>
    <div class="enquiry-cta-content">
      <span class="nomad-eyebrow nomad-eyebrow-light">GET STARTED</span>
      <h2 class="enquiry-cta-title">Start with your plans.</h2>
      <p class="enquiry-cta-desc">
        Share your intended dates, preferred destination and the type of support you need. We'll help you explore the next steps.
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

