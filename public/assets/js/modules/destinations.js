/**
 * Avenora — Destinations Page Client Module
 * Handles category filtering, FAQ accordions, and smooth anchor scrolling
 */
document.addEventListener('DOMContentLoaded', () => {
  // 1. Destination Category Filtering
  const filterButtons = document.querySelectorAll('.dest-filter-btn');
  const cards = document.querySelectorAll('.dest-card');
  const emptyState = document.getElementById('dest-empty-state');

  if (filterButtons.length && cards.length) {
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter')?.toLowerCase().trim() || 'all';

        // Update button states
        filterButtons.forEach(b => {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-selected', 'true');

        let visibleCount = 0;

        cards.forEach(card => {
          const region = card.getAttribute('data-region')?.toLowerCase().trim() || '';

          if (filter === 'all' || region === filter) {
            card.style.display = 'flex';
            card.style.opacity = '0';
            card.style.transform = 'translateY(10px)';
            
            // Subtle entrance animation
            requestAnimationFrame(() => {
              card.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            });

            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        // Toggle empty state
        if (emptyState) {
          emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
        }
      });
    });
  }

  // 2. FAQ Accordion Controls
  const faqTriggers = document.querySelectorAll('.dest-faq-trigger');

  faqTriggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
      const panelId = trigger.getAttribute('aria-controls');
      const panel = document.getElementById(panelId);

      // Close all other panels for clean single-accordion behavior (or toggle independently)
      faqTriggers.forEach(otherTrigger => {
        if (otherTrigger !== trigger) {
          otherTrigger.setAttribute('aria-expanded', 'false');
          const otherPanelId = otherTrigger.getAttribute('aria-controls');
          const otherPanel = document.getElementById(otherPanelId);
          if (otherPanel) {
            otherPanel.hidden = true;
          }
        }
      });

      // Toggle current panel
      trigger.setAttribute('aria-expanded', String(!isExpanded));
      if (panel) {
        panel.hidden = isExpanded;
      }
    });
  });

  // 3. Smooth Anchor Scrolling for Hero and CTA Buttons
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
      const targetId = anchor.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });
});
