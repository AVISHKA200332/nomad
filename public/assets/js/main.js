/**
 * The Lankan Nomad - Main Application Scripts
 * © Orbis Global - 2026
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. FAQ Accordion Behavior (supporting both .faq-nomad-item and legacy classes)
  const faqItems = document.querySelectorAll('.faq-nomad-item, .faq-item');

  faqItems.forEach((item, index) => {
    const questionBtn = item.querySelector('.faq-nomad-trigger, .faq-question-btn');
    const answerPanel = item.querySelector('.faq-nomad-panel, .faq-answer-panel');

    // Expand first item by default if none is open
    if (index === 0 && !item.classList.contains('is-expanded')) {
      item.classList.add('is-expanded');
      questionBtn?.setAttribute('aria-expanded', 'true');
      if (answerPanel) {
        answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
      }
    }

    questionBtn?.addEventListener('click', () => {
      const isCurrentlyExpanded = item.classList.contains('is-expanded');

      // Close all accordion panels
      faqItems.forEach((otherItem) => {
        otherItem.classList.remove('is-expanded');
        otherItem.querySelector('.faq-nomad-trigger, .faq-question-btn')?.setAttribute('aria-expanded', 'false');
        const otherPanel = otherItem.querySelector('.faq-nomad-panel, .faq-answer-panel');
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
});
