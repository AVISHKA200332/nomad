<?php
/**
 * Reusable Package Card Component
 * Faithfully engineered to match the attached Package.png reference
 *
 * @var array $package [id, slug, title, raw_title, description, image, image_alt, cta_text, cta_url]
 */
?>
<article class="pkg-card" id="package-<?= htmlspecialchars($package['id']) ?>" data-package-slug="<?= htmlspecialchars($package['slug']) ?>">
  <!-- Left Column: Content -->
  <div class="pkg-card-content">
    <h3 class="pkg-card-title"><?= $package['title'] ?></h3>
    <p class="pkg-card-desc"><?= htmlspecialchars($package['description']) ?></p>
    <div class="pkg-card-action">
      <a href="<?= htmlspecialchars($package['cta_url'] ?? '#') ?>" 
         class="btn btn-pkg-cta" 
         aria-label="Explore <?= htmlspecialchars($package['raw_title']) ?>">
        <span><?= htmlspecialchars($package['cta_text'] ?? 'Explore Package') ?></span>
        <span class="arrow-circle arrow-circle-blue" aria-hidden="true">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </span>
      </a>
    </div>
  </div>

  <!-- Right Column: Media Inset -->
  <div class="pkg-card-media-wrap">
    <div class="pkg-card-media">
      <img src="<?= asset($package['image']) ?>" 
           alt="<?= htmlspecialchars($package['image_alt'] ?? $package['raw_title']) ?>" 
           loading="lazy" 
           decoding="async">
    </div>
  </div>
</article>
