/**
 * Navigation Functionality
 * Handles sticky navbar and mobile menu drawer
 */

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const navToggle = document.querySelector('.nav-toggle');
  const navDrawer = document.querySelector('.mobile-nav-drawer');
  const navBackdrop = document.querySelector('.mobile-nav-backdrop');
  const navClose = document.querySelector('.mobile-nav-close');

  // Sticky header on scroll
  const handleScroll = () => {
    if (window.scrollY > 50) {
      header?.classList.add('is-scrolled');
    } else {
      header?.classList.remove('is-scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // Mobile drawer controls
  const openMenu = () => {
    navDrawer?.classList.add('is-open');
    navBackdrop?.classList.add('is-open');
    navToggle?.classList.add('is-open');
    navToggle?.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  };

  const closeMenu = () => {
    navDrawer?.classList.remove('is-open');
    navBackdrop?.classList.remove('is-open');
    navToggle?.classList.remove('is-open');
    navToggle?.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  };

  navToggle?.addEventListener('click', () => {
    const isOpen = navDrawer?.classList.contains('is-open');
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  navClose?.addEventListener('click', closeMenu);
  navBackdrop?.addEventListener('click', closeMenu);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && navDrawer?.classList.contains('is-open')) {
      closeMenu();
    }
  });
});
