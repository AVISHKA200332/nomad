/**
 * The Lankan Nomad - High Quality Homepage Interactive Animations & Effects
 * © Orbis Global - 2026
 */

document.addEventListener('DOMContentLoaded', () => {
  initScrollAnimations();
  initAnimatedCounters();
  initHeroCardSwitcher();
  initTiltPhysics();
  initStepsTracker();
  initLifestyleParallax();
});

/**
 * 1. Intersection Observer for Scroll Reveals
 */
function initScrollAnimations() {
  const animatedElements = document.querySelectorAll('[data-animate]');
  if (!animatedElements.length) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const delay = el.getAttribute('data-delay') || 0;
        setTimeout(() => {
          el.classList.add('is-animated');
        }, parseInt(delay, 10));
        obs.unobserve(el);
      }
    });
  }, {
    threshold: 0.12,
    rootMargin: '0px 0px -40px 0px'
  });

  animatedElements.forEach((el) => observer.observe(el));
}

/**
 * 2. Animated Stats Counters
 */
function initAnimatedCounters() {
  const counterEls = document.querySelectorAll('[data-counter]');
  if (!counterEls.length) return;

  const countUp = (el) => {
    const target = parseInt(el.getAttribute('data-counter'), 10);
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 1800; // ms
    const startTime = performance.now();

    const updateCount = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      // Ease out cubic
      const easeOut = 1 - Math.pow(1 - progress, 3);
      const currentVal = Math.floor(easeOut * target);

      el.textContent = currentVal + suffix;

      if (progress < 1) {
        requestAnimationFrame(updateCount);
      } else {
        el.textContent = target + suffix;
      }
    };

    requestAnimationFrame(updateCount);
  };

  const counterObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        countUp(entry.target);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.25 });

  counterEls.forEach((counter) => counterObserver.observe(counter));
}

/**
 * 3. Hero Interactive Stay Preview Switcher
 */
function initHeroCardSwitcher() {
  const switchBtns = document.querySelectorAll('.hero-switch-btn');
  const previewImg = document.getElementById('heroPreviewImg');
  const cardTag = document.getElementById('heroCardTag');
  const cardTitle = document.getElementById('heroCardTitle');
  const cardDesc = document.getElementById('heroCardDesc');
  const cardCta = document.getElementById('heroCardCta');
  const cardLocation = document.querySelector('.hero-card-location');

  if (!switchBtns.length || !previewImg) return;

  const stayData = {
    '3-months': {
      tag: 'Seasonal Surf & Focus',
      title: 'Coastal Loft • Private High-Speed Fiber',
      desc: 'Ideal for a seasonal stay. Enjoy ocean mornings, curated cafes, and verified quiet work environments.',
      ctaText: 'Explore 3-Month Options',
      ctaUrl: '/plan-your-stay?duration=3+months',
      img: previewImg.getAttribute('data-img-3mo') || previewImg.src,
      location: 'South Coast • Ahangama'
    },
    '6-months': {
      tag: 'Balanced Lifestyle & Deep Rhythm',
      title: 'Curated Villa • Workspace & Maid Service',
      desc: 'Give yourself time to settle in, explore different regions and balance work, leisure and discovery.',
      ctaText: 'Explore 6-Month Options',
      ctaUrl: '/plan-your-stay?duration=6+months',
      img: previewImg.getAttribute('data-img-6mo') || previewImg.src,
      location: 'South Coast • Weligama Bay'
    },
    '12-months': {
      tag: 'Year-Round Island Living',
      title: 'Luxury Long-Lease Haven • Dedicated Concierge',
      desc: 'Experience the changing seasons of Sri Lanka. Full residential arrangements with dedicated local support.',
      ctaText: 'Explore 12-Month Options',
      ctaUrl: '/plan-your-stay?duration=12+months',
      img: previewImg.getAttribute('data-img-12mo') || previewImg.src,
      location: 'Colombo & South Coast'
    }
  };

  switchBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      switchBtns.forEach((b) => b.classList.remove('active'));
      btn.classList.add('active');

      const durationKey = btn.getAttribute('data-duration');
      const data = stayData[durationKey];
      if (!data) return;

      // Smooth swap
      const previewCard = document.getElementById('heroInteractiveCard');
      if (previewCard) {
        previewCard.classList.add('is-switching');
      }

      setTimeout(() => {
        if (cardTag) cardTag.textContent = data.tag;
        if (cardTitle) cardTitle.textContent = data.title;
        if (cardDesc) cardDesc.textContent = data.desc;
        if (cardLocation) {
          cardLocation.innerHTML = `
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            ${data.location}
          `;
        }
        if (cardCta) {
          cardCta.href = data.ctaUrl;
          const textSpan = cardCta.querySelector('span');
          if (textSpan) textSpan.textContent = data.ctaText;
        }
        if (previewImg && data.img) {
          previewImg.src = data.img;
        }

        if (previewCard) {
          previewCard.classList.remove('is-switching');
        }
      }, 150);
    });
  });
}

/**
 * 4. 3D Tilt Physics on Interactive Cards
 */
function initTiltPhysics() {
  // Only apply tilt on larger screens with fine pointer
  if (window.matchMedia('(pointer: coarse)').matches || window.innerWidth < 1024) return;

  const tiltCards = document.querySelectorAll('.hero-glass-card, .duration-card.is-featured, .lifestyle-media-collage');

  tiltCards.forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -6; // max 6deg
      const rotateY = ((x - centerX) / centerX) * 6;

      card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-4px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}

/**
 * 5. Interactive Steps Progression Tracker
 */
function initStepsTracker() {
  const stepsContainer = document.querySelector('#how-it-works');
  const stepCards = document.querySelectorAll('.step-nomad-card');
  if (!stepsContainer || !stepCards.length) return;

  stepCards.forEach((card, idx) => {
    card.addEventListener('mouseenter', () => {
      stepCards.forEach((c, i) => {
        if (i <= idx) {
          c.classList.add('step-active');
        } else {
          c.classList.remove('step-active');
        }
      });
    });
  });

  stepsContainer.addEventListener('mouseleave', () => {
    stepCards.forEach((c) => c.classList.remove('step-active'));
  });
}

/**
 * 6. Subtle Lifestyle Collage Parallax Effect
 */
function initLifestyleParallax() {
  const collage = document.querySelector('.lifestyle-media-collage');
  if (!collage || window.innerWidth < 1024) return;

  const images = collage.querySelectorAll('img');
  if (!images.length) return;

  window.addEventListener('scroll', () => {
    const rect = collage.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      const offset = (window.innerHeight - rect.top) * 0.04;
      images.forEach((img, index) => {
        const factor = index % 2 === 0 ? 1 : -0.8;
        img.style.transform = `translateY(${(offset * factor).toFixed(1)}px)`;
      });
    }
  }, { passive: true });
}

