/**
 * The Lankan Nomad — About Page Interactive Module
 * High-Quality Animation, Hover Physics, & Timeline Step Controls
 * Handles:
 * 1. Interactive Expanding Travel Experience Cards on Hover & Click (Section 04)
 * 2. Selectable Journey Timeline Steps & Dynamic Step Counter (Section 05)
 */

document.addEventListener('DOMContentLoaded', () => {
  initExperienceSelector();
  initTimelineStepper();
});

/**
 * Section 04: Expanding Travel Experience Showcase (Hover + Click)
 */
function initExperienceSelector() {
  const cards = document.querySelectorAll('.about-exp-card');
  if (!cards.length) return;

  let hoverTimer = null;

  function activateCard(activeCard) {
    if (activeCard.classList.contains('is-expanded')) return;

    cards.forEach((c) => {
      c.classList.remove('is-expanded');
      c.setAttribute('aria-expanded', 'false');
    });

    activeCard.classList.add('is-expanded');
    activeCard.setAttribute('aria-expanded', 'true');
  }

  cards.forEach((card) => {
    // Hover intent expansion on desktop
    card.addEventListener('mouseenter', () => {
      clearTimeout(hoverTimer);
      hoverTimer = setTimeout(() => {
        activateCard(card);
      }, 110);
    });

    card.addEventListener('mouseleave', () => {
      clearTimeout(hoverTimer);
    });

    // Click / Touch Handler
    card.addEventListener('click', (e) => {
      if (card.classList.contains('is-expanded')) return;
      if (e.target.closest('.btn-white-pill')) return;

      clearTimeout(hoverTimer);
      activateCard(card);
    });

    // Keyboard Accessibility (Enter or Space)
    card.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        if (!card.classList.contains('is-expanded')) {
          e.preventDefault();
          clearTimeout(hoverTimer);
          activateCard(card);
        }
      }
    });
  });
}

/**
 * Section 05: Dark Navy Journey Timeline Interactivity (Hover + Click)
 */
function initTimelineStepper() {
  const stepCols = document.querySelectorAll('.about-timeline-col');
  const counterElement = document.getElementById('timeline-step-current');
  if (!stepCols.length) return;

  let stepHoverTimer = null;

  stepCols.forEach((col) => {
    const markerBtn = col.querySelector('.timeline-marker-btn');
    const card = col.querySelector('.timeline-card');
    const stepNum = col.getAttribute('data-step') || '03';

    const triggerSelect = () => {
      if (col.classList.contains('is-active')) return;

      stepCols.forEach((c) => {
        c.classList.remove('is-active');
        const cCard = c.querySelector('.timeline-card');
        const cMarker = c.querySelector('.timeline-marker-btn');
        if (cCard) {
          cCard.classList.remove('timeline-card-blue');
          cCard.classList.add('timeline-card-white');
        }
        if (cMarker) {
          cMarker.setAttribute('aria-pressed', 'false');
        }
      });

      col.classList.add('is-active');
      if (card) {
        card.classList.remove('timeline-card-white');
        card.classList.add('timeline-card-blue');
      }
      if (markerBtn) {
        markerBtn.setAttribute('aria-pressed', 'true');
      }

      if (counterElement) {
        counterElement.style.opacity = '0';
        counterElement.style.transform = 'translateY(-4px)';
        setTimeout(() => {
          counterElement.textContent = String(stepNum).padStart(2, '0');
          counterElement.style.opacity = '1';
          counterElement.style.transform = 'translateY(0)';
        }, 150);
      }
    };

    // Hover on marker button or column
    col.addEventListener('mouseenter', () => {
      clearTimeout(stepHoverTimer);
      stepHoverTimer = setTimeout(triggerSelect, 120);
    });

    col.addEventListener('mouseleave', () => {
      clearTimeout(stepHoverTimer);
    });

    if (markerBtn) {
      markerBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        clearTimeout(stepHoverTimer);
        triggerSelect();
      });
    }

    if (card) {
      card.addEventListener('click', () => {
        clearTimeout(stepHoverTimer);
        triggerSelect();
      });
    }
  });
}
