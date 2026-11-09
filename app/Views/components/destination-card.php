<?php
/**
 * Reusable Destination Card Component
 * Matches the reference design in Destination.png
 *
 * @var array $destination [id, title, location, region, rating, image]
 */
$region = strtolower($destination['region'] ?? 'all');
?>
<article class="dest-card" data-region="<?= htmlspecialchars($region) ?>" data-id="<?= htmlspecialchars($destination['id']) ?>">
  <div class="dest-card-media">
    <img src="<?= asset($destination['image']) ?>" alt="<?= htmlspecialchars($destination['title']) ?>" loading="lazy">
  </div>
  <div class="dest-card-body">
    <div class="dest-card-rating">
      <svg class="dest-star-icon" width="14" height="14" viewBox="0 0 24 24" fill="#F59E0B" stroke="#F59E0B">
        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
      </svg>
      <span><?= htmlspecialchars($destination['rating'] ?? '4.5') ?></span>
    </div>
    <h3 class="dest-card-title"><?= htmlspecialchars($destination['title']) ?></h3>
    <div class="dest-card-footer">
      <div class="dest-card-location">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
          <circle cx="12" cy="10" r="3"></circle>
        </svg>
        <span><?= htmlspecialchars($destination['location']) ?></span>
      </div>
      <button type="button" class="dest-card-action-btn" aria-label="View details for <?= htmlspecialchars($destination['title']) ?>">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </button>
    </div>
  </div>
</article>
