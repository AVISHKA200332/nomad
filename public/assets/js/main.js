/**
 * The Lankan Nomad - Main Application Scripts
 * © Orbis Global - 2026
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. FAQ Accordion Behavior (Expand on Cursor Hover / MouseEnter + Click, identical to Services)
  const faqGroups = document.querySelectorAll('.faq-accordion-wrap, .faq-nomad-list');

  faqGroups.forEach((group) => {
    const faqItems = group.querySelectorAll('.faq-nomad-item, .faq-item');
    if (!faqItems.length) return;

    let hoverTimer = null;

    const activateFaq = (targetItem) => {
      if (targetItem.classList.contains('is-expanded')) return;

      faqItems.forEach((item) => {
        const questionBtn = item.querySelector('.faq-nomad-trigger, .faq-question-btn');
        const answerPanel = item.querySelector('.faq-nomad-panel, .faq-answer-panel');

        if (item === targetItem) {
          item.classList.add('is-expanded');
          questionBtn?.setAttribute('aria-expanded', 'true');
          if (answerPanel) {
            answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
          }
        } else {
          item.classList.remove('is-expanded');
          questionBtn?.setAttribute('aria-expanded', 'false');
          if (answerPanel) {
            answerPanel.style.maxHeight = null;
          }
        }
      });
    };

    faqItems.forEach((item, index) => {
      const questionBtn = item.querySelector('.faq-nomad-trigger, .faq-question-btn');
      const answerPanel = item.querySelector('.faq-nomad-panel, .faq-answer-panel');

      // Expand first item by default if none is open
      if (index === 0 && !group.querySelector('.is-expanded')) {
        item.classList.add('is-expanded');
      }

      if (item.classList.contains('is-expanded')) {
        questionBtn?.setAttribute('aria-expanded', 'true');
        if (answerPanel) {
          answerPanel.style.maxHeight = answerPanel.scrollHeight + 'px';
        }
      } else {
        questionBtn?.setAttribute('aria-expanded', 'false');
        if (answerPanel) {
          answerPanel.style.maxHeight = null;
        }
      }

      // Expand smoothly when cursor hovers over the card with a gentle intent pause (matches Services)
      item.addEventListener('mouseenter', () => {
        clearTimeout(hoverTimer);
        hoverTimer = setTimeout(() => {
          activateFaq(item);
        }, 120);
      });

      item.addEventListener('mouseleave', () => {
        clearTimeout(hoverTimer);
      });

      // Keep touch/click support for mobile screens and instant user click
      item.addEventListener('click', (e) => {
        if (e.target.closest('a')) return;
        clearTimeout(hoverTimer);

        const isCurrentlyExpanded = item.classList.contains('is-expanded');
        if (isCurrentlyExpanded) {
          // If already expanded and user clicks the toggle/button directly, allow collapsing
          if (e.target.closest('.faq-nomad-trigger, .faq-question-btn')) {
            item.classList.remove('is-expanded');
            questionBtn?.setAttribute('aria-expanded', 'false');
            if (answerPanel) {
              answerPanel.style.maxHeight = null;
            }
          }
        } else {
          activateFaq(item);
        }
      });
    });

    // Re-adjust max-height on window resize for the active panel
    window.addEventListener('resize', () => {
      const activeItem = group.querySelector('.is-expanded');
      if (activeItem) {
        const activePanel = activeItem.querySelector('.faq-nomad-panel, .faq-answer-panel');
        if (activePanel) {
          activePanel.style.maxHeight = activePanel.scrollHeight + 'px';
        }
      }
    }, { passive: true });
  });

  // 2. Smooth anchor scrolling for internal section links
  document.querySelectorAll('a[href^="#"]:not(.dest-nav-item)').forEach((anchor) => {
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

  // 3. Destination Scroll-Spy & Active Progress Indicator (Matches Reference Image)
  const destCards = document.querySelectorAll('.dest-card');
  const navItems = document.querySelectorAll('.dest-nav-item');

  if (destCards.length && navItems.length) {
    let ticking = false;

    const updateActiveDestination = () => {
      const windowHeight = window.innerHeight;
      const centerY = windowHeight * 0.45; // optimal viewport target line

      let bestIndex = 0;
      let minDistance = Infinity;

      destCards.forEach((card, index) => {
        const rect = card.getBoundingClientRect();
        const cardCenter = rect.top + (rect.height / 2);
        const distance = Math.abs(cardCenter - centerY);

        if (distance < minDistance) {
          minDistance = distance;
          bestIndex = index;
        }
      });

      // Update right-side nav indicators
      navItems.forEach((item, index) => {
        const progressEl = item.querySelector('.dest-nav-progress');
        if (index === bestIndex) {
          item.classList.add('is-active');
          const activeCard = destCards[bestIndex];
          const rect = activeCard.getBoundingClientRect();
          const progress = Math.max(20, Math.min(100, Math.round(((centerY - rect.top) / rect.height) * 100)));
          if (progressEl) {
            progressEl.style.width = progress + '%';
          }
        } else {
          item.classList.remove('is-active');
          if (progressEl) {
            progressEl.style.width = (index < bestIndex) ? '100%' : '0%';
          }
        }
      });

      ticking = false;
    };

    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(updateActiveDestination);
        ticking = true;
      }
    }, { passive: true });

    // Initial calculation on load
    updateActiveDestination();

    // Smooth scroll to card when right-side destination name is clicked
    navItems.forEach((item) => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
        const targetSlug = item.getAttribute('data-target');
        const targetCard = document.getElementById(targetSlug);
        if (targetCard) {
          targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      });
    });
  }

  // 4. Interactive Services Accordion (Expand on Cursor Hover / MouseEnter with smooth easing)
  const serviceAccItems = document.querySelectorAll('.service-acc-item');
  if (serviceAccItems.length > 0) {
    let hoverTimer = null;

    const activateItem = (targetItem) => {
      if (targetItem.classList.contains('is-active')) {
        return;
      }
      serviceAccItems.forEach((other) => other.classList.remove('is-active'));
      targetItem.classList.add('is-active');
    };

    serviceAccItems.forEach((item) => {
      // Expand smoothly when cursor hovers over the card with a gentle intent pause
      item.addEventListener('mouseenter', () => {
        clearTimeout(hoverTimer);
        hoverTimer = setTimeout(() => {
          activateItem(item);
        }, 120);
      });

      item.addEventListener('mouseleave', () => {
        clearTimeout(hoverTimer);
      });

      // Keep touch/click support for mobile screens without a mouse cursor
      item.addEventListener('click', (e) => {
        if (e.target.closest('a')) {
          return;
        }
        clearTimeout(hoverTimer);
        activateItem(item);
      });
    });
  }

  // 5. Auto-Changing Perspective Gallery Carousel (Matched to Uploaded Photo)
  const galleryViewport = document.getElementById('galleryViewport');
  const galleryItems = document.querySelectorAll('.gallery-item');

  if (galleryViewport && galleryItems.length > 0) {
    let activeIndex = 0;
    const totalItems = galleryItems.length;
    let autoPlayTimer = null;
    let isHovered = false;

    // Responsive step spacing based on window width
    const getSpacing = () => {
      const w = window.innerWidth;
      if (w < 640) return 170;
      if (w < 991) return 220;
      return 280;
    };

    const updateGalleryPositions = () => {
      const spacing = getSpacing();

      galleryItems.forEach((item, i) => {
        let diff = (i - activeIndex) % totalItems;
        if (diff < -Math.floor(totalItems / 2)) diff += totalItems;
        if (diff > Math.floor(totalItems / 2)) diff -= totalItems;

        item.classList.toggle('is-active', diff === 0);

        if (diff === 0) {
          // Center active card (largest, full opacity, elevated)
          item.style.transform = `translate(-50%, -50%) scale(1)`;
          item.style.zIndex = '10';
          item.style.opacity = '1';
          item.style.pointerEvents = 'auto';
          item.style.filter = 'none';
        } else if (Math.abs(diff) === 1) {
          // Immediate left and right neighbors (scaled to ~0.88)
          const xOffset = diff * spacing;
          item.style.transform = `translate(calc(-50% + ${xOffset}px), -50%) scale(0.88)`;
          item.style.zIndex = '5';
          item.style.opacity = '0.85';
          item.style.pointerEvents = 'auto';
          item.style.filter = 'brightness(0.95)';
        } else if (Math.abs(diff) === 2) {
          // Outer left and right cards (scaled to ~0.74)
          const xOffset = diff * (spacing * 0.94);
          item.style.transform = `translate(calc(-50% + ${xOffset}px), -50%) scale(0.74)`;
          item.style.zIndex = '2';
          item.style.opacity = '0.5';
          item.style.pointerEvents = 'auto';
          item.style.filter = 'brightness(0.9)';
        } else {
          // Offscreen hidden
          const xOffset = diff * spacing;
          item.style.transform = `translate(calc(-50% + ${xOffset}px), -50%) scale(0.6)`;
          item.style.zIndex = '0';
          item.style.opacity = '0';
          item.style.pointerEvents = 'none';
        }
      });
    };

    const nextSlide = () => {
      activeIndex = (activeIndex + 1) % totalItems;
      updateGalleryPositions();
    };

    const prevSlide = () => {
      activeIndex = (activeIndex - 1 + totalItems) % totalItems;
      updateGalleryPositions();
    };

    const startAutoPlay = () => {
      clearInterval(autoPlayTimer);
      autoPlayTimer = setInterval(() => {
        if (!isHovered) {
          nextSlide();
        }
      }, 3400); // Automatically rotates every 3.4 seconds
    };

    // Pause on hover so the user can look at the active card
    galleryViewport.addEventListener('mouseenter', () => {
      isHovered = true;
    });

    galleryViewport.addEventListener('mouseleave', () => {
      isHovered = false;
    });

    // Clicking any visible card shifts it to the center
    galleryItems.forEach((item, idx) => {
      item.addEventListener('click', () => {
        activeIndex = idx;
        updateGalleryPositions();
        startAutoPlay();
      });
    });

    // Mobile touch swipe handling
    let touchStartX = 0;
    galleryViewport.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    galleryViewport.addEventListener('touchend', (e) => {
      const touchEndX = e.changedTouches[0].screenX;
      if (touchEndX < touchStartX - 40) {
        nextSlide();
        startAutoPlay();
      } else if (touchEndX > touchStartX + 40) {
        prevSlide();
        startAutoPlay();
      }
    }, { passive: true });

    window.addEventListener('resize', updateGalleryPositions);

    // Initial positioning & start rotation
    updateGalleryPositions();
    startAutoPlay();
  }

  // 6. Testimonial Slider (Next / Prev Navigation - Matched to Uploaded Photo)
  const testiSlider = document.getElementById('testimonialSlider');
  if (testiSlider) {
    const testiPhoto = document.getElementById('testiPhoto');
    const testiQuote = document.getElementById('testiQuote');
    const testiAuthor = document.getElementById('testiAuthor');
    const testiRole = document.getElementById('testiRole');
    const nextBtn = document.getElementById('testiNextBtn');
    const prevBtn = document.getElementById('testiPrevBtn');

    // Retrieve basePath from existing image src
    const currentSrc = testiPhoto?.getAttribute('src') || '';
    const basePath = currentSrc.substring(0, currentSrc.indexOf('assets/images/'));

    const testimonialsData = [
      {
        quote: "“The Lankan Nomad helped us plan a stay that felt personal from the first day. The accommodation, pacing, and private experiences were exactly what we wanted. Their local insight made our time in Sri Lanka effortless, connecting us with authentic communities across the island.”",
        author: "Patric Stone",
        role: "Traveller",
        image: "assets/images/srilanka/ahangama_coast.jpg"
      },
      {
        quote: "“Moving to Sri Lanka for three months seemed daunting until we connected with The Lankan Nomad. From fiber-optic internet checks to finding our beach house in Ahangama and setting up our transport, everything was seamless.”",
        author: "Elena Rostova",
        role: "Digital Nomad",
        image: "assets/images/srilanka/galle_fort.jpg"
      },
      {
        quote: "“Every journey with them feels respectful and grounded. We took the scenic hill trains, stayed near UNESCO citadels, and explored local food spots we never would have found on our own.”",
        author: "Marcus Vance",
        role: "Long-Stay Resident",
        image: "assets/images/srilanka/nuwara_eliya_tea.jpg"
      }
    ];

    let currentTestiIdx = 0;
    let isTransitioning = false;

    const renderTestimonial = (idx) => {
      if (isTransitioning) return;
      isTransitioning = true;

      // Soft fade out
      if (testiQuote) {
        testiQuote.style.opacity = '0';
        testiQuote.style.transform = 'translateY(6px)';
      }
      if (testiPhoto) {
        testiPhoto.style.opacity = '0';
        testiPhoto.style.transform = 'scale(0.97)';
      }
      if (testiAuthor) testiAuthor.style.opacity = '0';
      if (testiRole) testiRole.style.opacity = '0';

      setTimeout(() => {
        const item = testimonialsData[idx];
        if (testiQuote) testiQuote.textContent = item.quote;
        if (testiAuthor) testiAuthor.textContent = item.author;
        if (testiRole) testiRole.textContent = item.role;
        if (testiPhoto) {
          testiPhoto.src = basePath + item.image;
          testiPhoto.alt = item.author;
        }

        // Soft fade in
        if (testiQuote) {
          testiQuote.style.opacity = '1';
          testiQuote.style.transform = 'translateY(0)';
        }
        if (testiPhoto) {
          testiPhoto.style.opacity = '1';
          testiPhoto.style.transform = 'scale(1)';
        }
        if (testiAuthor) testiAuthor.style.opacity = '1';
        if (testiRole) testiRole.style.opacity = '1';

        // Update button colors
        if (prevBtn) prevBtn.style.color = idx === 0 ? '#94a3b8' : '#2563eb';
        if (nextBtn) nextBtn.style.color = idx === testimonialsData.length - 1 ? '#94a3b8' : '#2563eb';

        setTimeout(() => {
          isTransitioning = false;
        }, 300);
      }, 200);
    };

    nextBtn?.addEventListener('click', () => {
      currentTestiIdx = (currentTestiIdx + 1) % testimonialsData.length;
      renderTestimonial(currentTestiIdx);
    });

    prevBtn?.addEventListener('click', () => {
      currentTestiIdx = (currentTestiIdx - 1 + testimonialsData.length) % testimonialsData.length;
      renderTestimonial(currentTestiIdx);
    });
  }
});
