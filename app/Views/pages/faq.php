<?php
/**
 * The Lankan Nomad - Frequently Asked Questions View (PAGE 08)
 * © Orbis Global - 2026
 */
?>

<!-- Accordion Section -->
<section class="section nomad-first-section" id="faq-list">
  <div class="container" style="max-width: 920px;">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">HELP &amp; CLARITY</span>
      <h1 class="nomad-section-title">Common Questions &amp; Practical Information</h1>
      <p class="nomad-section-desc">
        Click any question below to read detailed guidance from our team.
      </p>
    </div>

    <div class="faq-nomad-list">
      <?php foreach ($faqs as $index => $item): ?>
        <div class="faq-nomad-item <?= $index === 0 ? 'is-expanded' : '' ?>" id="faq-<?= $index + 1 ?>">
          <button class="faq-nomad-trigger" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
            <span><?= sprintf('%02d. ', $index + 1) . htmlspecialchars($item['q']) ?></span>
            <span class="faq-nomad-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </span>
          </button>
          <div class="faq-nomad-panel" style="<?= $index === 0 ? 'max-height: 300px;' : '' ?>">
            <p class="faq-nomad-answer"><?= htmlspecialchars($item['a']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 40px;">
      <a href="<?= url('/plan-your-stay') ?>" class="btn btn-primary" style="padding: 14px 36px;">
        <span>Start Your Stay Enquiry</span>
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

