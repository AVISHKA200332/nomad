<?php
/**
 * The Lankan Nomad - Destinations Showcase Page
 * Faithfully crafted to match the user's reference design with 100% Sri Lankan destinations
 * Includes silky smooth animations and responsive layout.
 *
 * @var array $destinations
 * @var array $filters
 */
?>

<div class="dest-page-wrapper">
  <!-- ==========================================================================
       SECTION 01: Explore All Destinations Showcase
       ========================================================================== -->
  <section class="dest-showcase-section" id="explore-destinations">
    <div class="container">
      
      <!-- Top Header & Filter Row (Matched to Reference Screenshot) -->
      <div class="dest-showcase-header">
        <div class="dest-header-left">
          <span class="dest-badge-pill">All Destinations</span>
          <h1 class="dest-main-title">Explore All Destinations</h1>
          <p class="dest-main-subtitle">Browse handpicked Sri Lankan destinations and find the place that matches your next stay or adventure.</p>
        </div>

        <!-- Filter Tabs: All, South Coast, Highlands, Cultural Triangle, Colombo & West -->
        <div class="dest-filter-tabs" role="tablist" aria-label="Sri Lanka Regional Categories">
          <?php foreach ($filters as $fIdx => $filter): ?>
            <button type="button" 
                    class="dest-tab-btn <?= $fIdx === 0 ? 'is-active' : '' ?>" 
                    data-filter="<?= htmlspecialchars($filter['id']) ?>" 
                    role="tab" 
                    aria-selected="<?= $fIdx === 0 ? 'true' : 'false' ?>">
              <span><?= htmlspecialchars($filter['label']) ?></span>
            </button>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- 3-Column Destination Cards Grid (Clean Inset Media + Text Below) -->
      <div class="dest-showcase-grid" id="destShowcaseGrid" role="region" aria-live="polite">
        <?php foreach ($destinations as $idx => $d): ?>
          <article class="dshow-card" data-region="<?= htmlspecialchars($d['region']) ?>" data-index="<?= $idx ?>">
            <a href="<?= url('/plan-your-stay?destination=' . urlencode($d['title'])) ?>" class="dshow-card-link" aria-label="Explore <?= htmlspecialchars($d['title']) ?>">
              
              <!-- Inset Media (Top) -->
              <div class="dshow-media">
                <img src="<?= asset($d['image']) ?>" alt="<?= htmlspecialchars($d['title']) ?>" loading="lazy">
              </div>

              <!-- Content Area (Below Image, Fully Visible on White Card) -->
              <div class="dshow-body">
                <div class="dshow-rating">
                  <svg class="dshow-star" width="13" height="13" viewBox="0 0 24 24" fill="#0f172a">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                  <span><?= htmlspecialchars($d['rating'] ?? '4.8') ?></span>
                </div>

                <h2 class="dshow-title"><?= htmlspecialchars($d['title']) ?></h2>

                <div class="dshow-footer">
                  <div class="dshow-location">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span><?= htmlspecialchars($d['location']) ?></span>
                  </div>

                  <span class="dshow-btn" aria-hidden="true">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                      <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                  </span>
                </div>
              </div>

            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- Empty State for Empty Region -->
      <div class="dest-empty-notice" id="destEmptyNotice" style="display: none;">
        <h3>No destinations found</h3>
        <p>There are currently no destinations listed under this regional category.</p>
        <button type="button" class="dest-tab-btn is-active" id="destResetFilterBtn">Show All Destinations</button>
      </div>

    </div>
  </section>
</div>

<!-- ==========================================================================
     High-Quality Animation & Filter Script
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const filterBtns = document.querySelectorAll('.dest-tab-btn');
  const cards = document.querySelectorAll('.dshow-card');
  const emptyNotice = document.getElementById('destEmptyNotice');
  const resetBtn = document.getElementById('destResetFilterBtn');

  if (!filterBtns.length || !cards.length) return;

  function applyFilter(filterVal) {
    let visibleCount = 0;

    // Update active tab buttons
    filterBtns.forEach(btn => {
      const match = btn.getAttribute('data-filter') === filterVal;
      btn.classList.toggle('is-active', match);
      btn.setAttribute('aria-selected', match ? 'true' : 'false');
    });

    cards.forEach((card) => {
      const region = card.getAttribute('data-region') || '';
      const shouldShow = filterVal === 'all' || region.toLowerCase() === filterVal.toLowerCase();

      if (shouldShow) {
        visibleCount++;
        card.style.display = 'flex';
        card.classList.remove('is-hidden');
        card.style.animation = 'none';
        void card.offsetWidth; // Force reflow
        card.style.animation = `dshowCardReveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) ${0.04 * visibleCount}s backwards`;
      } else {
        card.classList.add('is-hidden');
        setTimeout(() => {
          if (card.classList.contains('is-hidden')) {
            card.style.display = 'none';
          }
        }, 220);
      }
    });

    if (emptyNotice) {
      emptyNotice.style.display = visibleCount === 0 ? 'block' : 'none';
    }
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      const filterVal = this.getAttribute('data-filter') || 'all';
      applyFilter(filterVal);
    });
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', function () {
      applyFilter('all');
    });
  }
});
</script>
