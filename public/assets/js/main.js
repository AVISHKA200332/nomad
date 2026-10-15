/**
 * Main Application Scripts
 * Handles FAQ accordion and interactive behaviors
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. FAQ Accordion Behavior
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach((item, index) => {
    const questionBtn = item.querySelector('.faq-question-btn');
    const answerPanel = item.querySelector('.faq-answer-panel');

    // Expand the first FAQ item by default to match premium reference
    if (index === 0) {
      item.classList.add('is-expanded');
      questionBtn?.setAttribute('aria-expanded', 'true');
      if (answerPanel) {
        answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
      }
    } else {
      questionBtn?.setAttribute('aria-expanded', 'false');
    }

    questionBtn?.addEventListener('click', () => {
      const isCurrentlyExpanded = item.classList.contains('is-expanded');

      // Close all accordion panels first
      faqItems.forEach((otherItem) => {
        otherItem.classList.remove('is-expanded');
        otherItem.querySelector('.faq-question-btn')?.setAttribute('aria-expanded', 'false');
        const otherPanel = otherItem.querySelector('.faq-answer-panel');
        if (otherPanel) {
          otherPanel.style.maxHeight = null;
        }
      });

      // Toggle current panel
      if (!isCurrentlyExpanded) {
        item.classList.add('is-expanded');
        questionBtn.setAttribute('aria-expanded', 'true');
        if (answerPanel) {
          answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
        }
      }
    });
  });

  // 2. Smooth anchor scrolling for internal section links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
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

  // 3. Floating Hero Card Video Interaction Placeholder
  const heroCardPlay = document.querySelector('.hero-card-play');
  if (heroCardPlay) {
    heroCardPlay.addEventListener('click', (e) => {
      e.preventDefault();
      // Subtle ripple / toast notification for video preview
      const toast = document.createElement('div');
      toast.textContent = 'Mountain Expedition video teaser coming soon in Phase 03!';
      toast.style.cssText = 'position:fixed;bottom:24px;right:24px;background:#031126;color:#fff;padding:12px 24px;border-radius:9999px;box-shadow:0 10px 30px rgba(0,0,0,0.3);z-index:9999;font-size:0.9rem;border:1px solid rgba(255,255,255,0.1);';
      document.body.appendChild(toast);
      setTimeout(() => toast.remove(), 3000);
    });
  }
});
