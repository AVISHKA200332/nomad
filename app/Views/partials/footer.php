<?php
$currentPage = $activePage ?? 'home';
?>
<footer class="site-footer">
  <div class="container">
    <!-- Newsletter Section (Section 13) -->
    <div class="footer-newsletter-section">
      <div class="footer-newsletter-box">
        <div class="footer-newsletter-header">
          <span class="nomad-eyebrow" style="color: var(--color-bg-sky);">STAY CONNECTED</span>
          <h3 class="footer-newsletter-headline">A little more Sri Lanka in your inbox.</h3>
          <p class="footer-newsletter-desc">
            Discover destination inspiration, practical long-stay tips, local recommendations and ideas for experiencing Sri Lanka at your own pace.
          </p>
        </div>
        <form class="footer-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to dispatches!');">
          <div class="footer-input-group">
            <label for="footer-newsletter-email" class="sr-only">Your email address</label>
            <input type="email" id="footer-newsletter-email" placeholder="Your email address" required>
            <button type="submit" class="btn btn-primary">
              <span>Keep Me Inspired</span>
              <span class="arrow-circle arrow-circle-white">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </button>
          </div>
          <p class="footer-newsletter-privacy">
            By subscribing, you agree to receive updates. You can unsubscribe at any time.
          </p>
        </form>
      </div>
    </div>

    <!-- Main Footer Multi-Column Grid -->
    <div class="footer-grid">
      <!-- Brand & Mission Column -->
      <div class="footer-col footer-col-brand">
        <a href="<?= url('/') ?>" class="footer-brand" aria-label="The Lankan Nomad Home">
          <img src="<?= asset('assets/images/logo/logo.png') ?>" alt="The Lankan Nomad" class="site-footer-logo">
        </a>
        <p class="footer-tagline-main">Stay longer. Live locally. Discover Sri Lanka.</p>
        <p class="footer-subtext">A more thoughtful way to plan an extended stay in Sri Lanka.</p>

        <!-- Social Media Icons -->
        <div class="footer-social-row">
          <a href="#" class="social-icon-pill" aria-label="Instagram">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
            <span>Instagram</span>
          </a>
          <a href="#" class="social-icon-pill" aria-label="Facebook">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
            <span>Facebook</span>
          </a>
          <a href="#" class="social-icon-pill" aria-label="Twitter / X">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
            </svg>
            <span>Twitter (X)</span>
          </a>
        </div>
      </div>

      <!-- Column 1: Explore -->
      <div class="footer-col">
        <h4 class="footer-col-title">Explore</h4>
        <ul class="footer-link-list">
          <li><a href="<?= url('/') ?>" class="<?= $currentPage === 'home' ? 'is-active' : '' ?>">Home</a></li>
          <li><a href="<?= url('/services') ?>" class="<?= $currentPage === 'services' ? 'is-active' : '' ?>">Our Services</a></li>
          <li><a href="<?= url('/stay-in-sri-lanka') ?>" class="<?= in_array($currentPage, ['stay', 'packages']) ? 'is-active' : '' ?>">Stay in Sri Lanka</a></li>
          <li><a href="<?= url('/destinations') ?>" class="<?= $currentPage === 'destinations' ? 'is-active' : '' ?>">Destinations</a></li>
          <li><a href="<?= url('/experiences') ?>" class="<?= $currentPage === 'experiences' ? 'is-active' : '' ?>">Experiences</a></li>
          <li><a href="<?= url('/about') ?>" class="<?= $currentPage === 'about' ? 'is-active' : '' ?>">About Us</a></li>
        </ul>
      </div>

      <!-- Column 2: Helpful Information -->
      <div class="footer-col">
        <h4 class="footer-col-title">Helpful Information</h4>
        <ul class="footer-link-list">
          <li><a href="<?= url('/guide') ?>" class="<?= in_array($currentPage, ['guide', 'blog']) ? 'is-active' : '' ?>">Sri Lanka Guide</a></li>
          <li><a href="<?= url('/faq') ?>" class="<?= $currentPage === 'faq' ? 'is-active' : '' ?>">Frequently Asked Questions</a></li>
          <li><a href="<?= url('/contact') ?>" class="<?= $currentPage === 'contact' ? 'is-active' : '' ?>">Contact Us</a></li>
          <li><a href="<?= url('/plan-your-stay') ?>" class="<?= $currentPage === 'plan-your-stay' ? 'is-active' : '' ?>">Plan Your Stay</a></li>
        </ul>
      </div>

      <!-- Column 3: Get in Touch & Legal -->
      <div class="footer-col">
        <h4 class="footer-col-title">Get in Touch</h4>
        <div class="footer-contact-details">
          <div class="contact-item">
            <span class="contact-label">Email:</span>
            <a href="mailto:info@thelankannomad.com" class="contact-val">info@thelankannomad.com</a>
          </div>
          <div class="contact-item">
            <span class="contact-label">WhatsApp:</span>
            <a href="https://wa.me/94770000000" target="_blank" rel="noopener noreferrer" class="contact-val">+94 77 000 0000</a>
          </div>
          <div class="contact-item">
            <span class="contact-label">Business Hours:</span>
            <span class="contact-val">Mon - Fri: 9:00 AM - 6:00 PM (IST)</span>
          </div>
        </div>

        <h4 class="footer-col-title" style="margin-top: 24px;">Legal</h4>
        <ul class="footer-link-list">
          <li><a href="<?= url('/privacy-policy') ?>">Privacy Policy</a></li>
          <li><a href="<?= url('/terms') ?>">Terms &amp; Conditions</a></li>
          <li><a href="<?= url('/cookie-policy') ?>">Cookie Policy</a></li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
      <div class="footer-copyright-group">
        <p class="footer-copyright">
          &copy; All in this document are fully owned by Ardent Hive Creative Marketing Agency - 2026
        </p>
      </div>
      <div class="footer-legal-links">
        <a href="<?= url('/privacy-policy') ?>">Privacy Policy</a>
        <a href="<?= url('/terms') ?>">Terms &amp; Conditions</a>
        <a href="<?= url('/cookie-policy') ?>">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>
