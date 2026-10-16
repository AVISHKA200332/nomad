/**
 * Avenora — About Page Interactive Module
 * Handles:
 * 1. Interactive Expanding Travel Experience Cards (Section 04)
 * 2. Selectable Journey Timeline Steps & Step Counter (Section 05)
 */

document.addEventListener('DOMContentLoaded', () => {
  initExperienceSelector();
  initTimelineStepper();
});

/**
 * Section 04: Expanding Travel Experience Showcase
 */
function initExperienceSelector() {
  const cards = document.querySelectorAll('.about-exp-card');
  if (!cards.length) return;

  cards.forEach((card) => {
    // Click Handler
    card.addEventListener('click', (e) => {
      // Don't re-trigger if already expanded or if clicking the CTA button inside
      if (card.classList.contains('is-expanded')) return;
      if (e.target.closest('.btn-white-pill')) return;

      activateCard(card);
    });

    // Keyboard Accessibility (Enter or Space)
    card.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        if (!card.classList.contains('is-expanded')) {
          e.preventDefault();
          activateCard(card);
        }
      }
    });
  });

  function activateCard(activeCard) {
    cards.forEach((c) => {
      c.classList.remove('is-expanded');
      c.setAttribute('aria-expanded', 'false');
    });

    activeCard.classList.add('is-expanded');
    activeCard.setAttribute('aria-expanded', 'true');
  }
}

/**
 * Section 05: Dark Navy Journey Timeline Interactivity
 */
function initTimelineStepper() {
  const stepCols = document.querySelectorAll('.about-timeline-col');
  const counterElement = document.getElementById('timeline-step-current');
  if (!stepCols.length) return;

  stepCols.forEach((col) => {
    const markerBtn = col.querySelector('.timeline-marker-btn');
    const card = col.querySelector('.timeline-card');
    const stepNum = col.getAttribute('data-step') || '03';

    const triggerSelect = () => {
      if (col.classList.contains('is-active')) return;

      stepCols.forEach((c) => {
        c.classList.remove('is-active');
        const cCard = c.querySelector('.timeline-card');
        if (cCard) {
          cCard.classList.remove('timeline-card-blue');
          cCard.classList.add('timeline-card-white');
        }
      });

      col.classList.add('is-active');
      if (card) {
        card.classList.remove('timeline-card-white');
        card.classList.add('timeline-card-blue');
      }

      if (counterElement) {
        counterElement.textContent = String(stepNum).padStart(2, '0');
      }
    };

    if (markerBtn) {
      markerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        triggerSelect();
      });
    }

    if (card) {
      card.addEventListener('click', triggerSelect);
    }
  });
}
