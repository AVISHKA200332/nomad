<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <!-- Top Navigation Links with Active State -->
      <nav class="footer-nav" aria-label="Footer Navigation">
        <a href="<?= url('/') ?>" class="<?= ($activePage ?? 'home') === 'home' ? 'is-active' : '' ?>">Home</a>
        <a href="<?= url('/about') ?>" class="<?= ($activePage ?? 'home') === 'about' ? 'is-active' : '' ?>">About</a>
        <a href="<?= url('/destinations') ?>" class="<?= ($activePage ?? 'home') === 'destinations' ? 'is-active' : '' ?>">Destination</a>
        <a href="<?= url('/packages') ?>" class="<?= ($activePage ?? 'home') === 'packages' ? 'is-active' : '' ?>">Package</a>
        <a href="<?= url('/contact') ?>" class="<?= ($activePage ?? 'home') === 'contact' ? 'is-active' : '' ?>">Contact</a>
      </nav>

      <!-- Large Centered Email Display -->
      <a href="mailto:Avenora@gmail.com" class="footer-email-link">Avenora@gmail.com</a>

      <!-- Social Media Icons with Labels -->
      <div class="footer-socials">
        <a href="#" class="social-btn" aria-label="Facebook">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
          </svg>
          <span>Facebook</span>
        </a>
        <a href="#" class="social-btn" aria-label="Instagram">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
          </svg>
          <span>Instagram</span>
        </a>
        <a href="#" class="social-btn" aria-label="Twitter / X">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
          </svg>
          <span>Twitter (X)</span>
        </a>
      </div>

      <!-- Newsletter Heading and Input -->
      <div class="footer-newsletter-wrap">
        <h4 class="footer-newsletter-title">Newsletter</h4>
        <form class="footer-newsletter" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Avenora travel dispatches!');">
          <label for="footer-email-input" class="sr-only">Your email address</label>
          <input type="email" id="footer-email-input" placeholder="Enter your email" required>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>

    <!-- Footer Bottom Legal & Copyright -->
    <div class="footer-bottom">
      <p class="footer-copyright">All Copyright &mdash; Avenora Design by Creative Discovery Studio</p>
      <div class="footer-legal-links">
        <a href="#">Style Guide</a>
        <a href="#">Licenses</a>
        <a href="#">Changelog</a>
        <a href="#">404</a>
      </div>
    </div>
  </div>
</footer>
