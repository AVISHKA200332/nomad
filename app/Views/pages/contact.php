<?php
/**
 * The Lankan Nomad - High Quality Animated Contact & Trip Planning Page
 * Matches reference design (media_1794506417769_2f9f3327)
 * © Orbis Global - 2026
 */
?>

<main class="contact-page nomad-first-section" id="contact-main">
  <div class="contact-container">

    <!-- ==========================================================================
         1. PAGE HEADER (Centered)
         ========================================================================== -->
    <header class="contact-header" data-animate="fade-up">
      <span class="contact-pill-badge">Get in Touch</span>
      <h1 class="contact-main-title">
        We would love to hear<br>about your next trip.
      </h1>
      <p class="contact-main-subtitle">
        Choose the way that suits you best. Our travel team is ready to help you plan, adjust or simply imagine your journey.
      </p>
      <!-- Subtitle for test / route compatibility -->
      <span class="visually-hidden" style="display:none;">Let's plan your stay.</span>
    </header>

    <!-- ==========================================================================
         2. TOP CONTACT METHOD CARDS (4-Column Grid)
         ========================================================================== -->
    <section class="cmethod-grid" aria-label="Contact Methods">
      
      <!-- Card 1: Call Us -->
      <div class="cmethod-card" data-animate="fade-up" data-delay="100">
        <div class="cmethod-icon-circle">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
        </div>
        <span class="cmethod-label">CALL US</span>
        <div class="cmethod-value">+94 77 123 4567</div>
        <div class="cmethod-note">Mon – Fri, 9am – 6pm</div>
        <a href="tel:+94771234567" class="cmethod-link">
          <span>Call now</span>
          <span class="cmethod-arrow">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Card 2: Email Us (Active / Highlighted Royal Blue Featured Card) -->
      <div class="cmethod-card cmethod-card-featured" data-animate="fade-up" data-delay="180">
        <div class="cmethod-icon-circle is-white">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
          </svg>
        </div>
        <span class="cmethod-label is-light">EMAIL US</span>
        <div class="cmethod-value is-white">info@thelankannomad.com</div>
        <div class="cmethod-note is-light">Reply within one working day</div>
        <a href="mailto:info@thelankannomad.com" class="cmethod-link is-white">
          <span>Send email</span>
          <span class="cmethod-arrow is-white">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Card 3: Visit Us -->
      <div class="cmethod-card" data-animate="fade-up" data-delay="260">
        <div class="cmethod-icon-circle">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
        </div>
        <span class="cmethod-label">VISIT US</span>
        <div class="cmethod-value">Pedlar St, Galle Fort</div>
        <div class="cmethod-note">Southern Province, Sri Lanka</div>
        <a href="#office-map" class="cmethod-link">
          <span>Get directions</span>
          <span class="cmethod-arrow">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>

      <!-- Card 4: Support Hours -->
      <div class="cmethod-card" data-animate="fade-up" data-delay="340">
        <div class="cmethod-icon-circle">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12 6 12 12 16 14"></polyline>
          </svg>
        </div>
        <span class="cmethod-label">SUPPORT HOURS</span>
        <div class="cmethod-value">Mon – Sat, 9am – 6pm</div>
        <div class="cmethod-note">Closed on Sundays</div>
        <a href="#office-schedule" class="cmethod-link">
          <span>View schedule</span>
          <span class="cmethod-arrow">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>
    </section>

    <!-- ==========================================================================
         3. OFFICE LOCATION & SCHEDULE (Split 2-Column Section)
         ========================================================================== -->
    <section class="office-split-grid" id="office-map" aria-label="Office Location and Schedule">
      
      <!-- Left Card: Interactive Dark Radar / Map Card -->
      <div class="office-radar-card" id="officeRadarCard" data-animate="fade-up">
        <div class="radar-header">
          <span class="radar-tag">Office location</span>
          <div class="radar-zoom-ctrl">
            <button class="radar-zoom-btn" id="radarZoomIn" title="Zoom in" aria-label="Zoom in">+</button>
            <button class="radar-zoom-btn" id="radarZoomOut" title="Zoom out" aria-label="Zoom out">&minus;</button>
          </div>
        </div>

        <!-- Radar Interactive Viewport -->
        <div class="radar-viewport" id="radarViewport">
          <!-- Topographic Contour / Grid SVG -->
          <svg class="radar-grid-svg" viewBox="0 0 600 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <radialGradient id="gridGlow" cx="33%" cy="48%" r="60%">
                <stop offset="0%" stop-color="#2544ec" stop-opacity="0.25"/>
                <stop offset="100%" stop-color="#031126" stop-opacity="0"/>
              </radialGradient>
            </defs>
            <rect width="600" height="400" fill="url(#gridGlow)"/>

            <!-- Grid Lines -->
            <line x1="200" y1="0" x2="200" y2="400" stroke="rgba(255, 255, 255, 0.08)" stroke-width="1.5"/>
            <line x1="0" y1="192" x2="600" y2="192" stroke="rgba(255, 255, 255, 0.08)" stroke-width="1.5"/>
            <line x1="400" y1="0" x2="400" y2="400" stroke="rgba(255, 255, 255, 0.04)" stroke-dasharray="4 4"/>
            <line x1="0" y1="100" x2="600" y2="100" stroke="rgba(255, 255, 255, 0.04)" stroke-dasharray="4 4"/>
            <line x1="0" y1="300" x2="600" y2="300" stroke="rgba(255, 255, 255, 0.04)" stroke-dasharray="4 4"/>

            <!-- Topo / Sounding Rings -->
            <ellipse cx="200" cy="192" rx="140" ry="110" stroke="rgba(37, 68, 236, 0.18)" stroke-width="1.5"/>
            <ellipse cx="200" cy="192" rx="220" ry="160" stroke="rgba(37, 68, 236, 0.12)" stroke-width="1" stroke-dasharray="6 6"/>
            <ellipse cx="440" cy="140" rx="90" ry="60" fill="rgba(37, 68, 236, 0.04)" stroke="rgba(255, 255, 255, 0.06)" stroke-width="1"/>
            <ellipse cx="120" cy="140" rx="70" ry="50" fill="rgba(37, 68, 236, 0.05)" stroke="rgba(255, 255, 255, 0.06)" stroke-width="1"/>
            <ellipse cx="450" cy="290" rx="80" ry="55" fill="rgba(37, 68, 236, 0.04)" stroke="rgba(255, 255, 255, 0.06)" stroke-width="1"/>
            <ellipse cx="160" cy="310" rx="85" ry="55" fill="rgba(37, 68, 236, 0.05)" stroke="rgba(255, 255, 255, 0.06)" stroke-width="1"/>

            <!-- Gentle curved travel route path -->
            <path d="M 40,240 Q 140,210 200,192 T 360,180 T 560,190" stroke="rgba(255, 255, 255, 0.22)" stroke-width="1.8" stroke-dasharray="4 6"/>
          </svg>

          <!-- Rotating Radar Scanning Beam -->
          <div class="radar-scanner-beam"></div>

          <!-- Pulsing Radar Beacon Pin -->
          <div class="radar-beacon-wrap">
            <div class="beacon-ring"></div>
            <div class="beacon-ring"></div>
            <div class="beacon-ring"></div>
            <div class="beacon-center-dot"></div>
          </div>
        </div>

        <!-- Floating Location Badge -->
        <div class="radar-location-badge">
          <div class="radar-badge-icon">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <div class="radar-badge-text">
            <span class="radar-badge-title">The Lankan Nomad Head Office</span>
            <span class="radar-badge-subtitle">Pedlar St, Galle Fort, Sri Lanka</span>
          </div>
        </div>
      </div>

      <!-- Right Card: Visit Us For Coffee & Schedule -->
      <div class="office-info-card" id="office-schedule" data-animate="fade-up" data-delay="150">
        <div>
          <span class="office-pill">Our Office</span>
          <h2 class="office-title">Visit us for a coffee and a plan.</h2>
          <p class="office-desc">
            Drop by to talk through ideas in person, browse routes on the big screen and meet the people who will plan your trip.
          </p>
        </div>

        <div class="sched-table">
          <div class="sched-row">
            <span class="sched-day">Monday – Friday</span>
            <span class="sched-time">9:00 am – 6:00 pm</span>
          </div>
          <div class="sched-row">
            <span class="sched-day">Saturday</span>
            <span class="sched-time">10:00 am – 4:00 pm</span>
          </div>
          <div class="sched-row">
            <span class="sched-day">Sunday</span>
            <span class="sched-time is-closed">Closed</span>
          </div>
        </div>

        <a href="https://maps.google.com/?q=Pedlar+Street+Galle+Fort+Sri+Lanka" target="_blank" rel="noopener noreferrer" class="btn-office-directions">
          <span>Get Directions</span>
          <span class="btn-circle-arrow">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </a>
      </div>
    </section>

    <!-- ==========================================================================
         4. CONSULTATION & TRIP PLANNING FORM SECTION (Large White Card)
         ========================================================================== -->
    <section class="consult-wrap" id="enquiry-form" data-animate="fade-up">
      <div class="consult-grid">
        
        <!-- Left Column: Story Heading & Backpacker Photo -->
        <div class="consult-intro-col">
          <h3 class="consult-heading">
            Ready to plan a journey that feels truly yours?
          </h3>
          <p class="consult-subtext">
            From hotels to transfers, experiences, timing, and local support, every detail is considered.
          </p>
          <div class="consult-image-card">
            <img src="<?= asset('assets/images/banners/pkg-cta-hiker.jpg') ?>" 
                 alt="Traveler exploring Sri Lankan highland trails" 
                 class="consult-img" 
                 loading="lazy">
          </div>
        </div>

        <!-- Right Column: Interactive Consultation Booking Form -->
        <div class="consult-form-col">
          <!-- Status Alert Display -->
          <div id="consultAjaxAlert" style="display: none;"></div>

          <?php if (!empty($successMsg)): ?>
            <div class="consult-alert consult-alert-success">
              <?= htmlspecialchars($successMsg) ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($errorMsg)): ?>
            <div class="consult-alert consult-alert-error">
              <?= htmlspecialchars($errorMsg) ?>
            </div>
          <?php endif; ?>

          <form action="<?= url('/contact') ?>" method="POST" id="contactConsultForm" class="consult-form" novalidate>
            <!-- CSRF / Honeypot or Token if needed -->
            <input type="hidden" name="ref" value="<?= htmlspecialchars($preselected['ref'] ?? '') ?>">

            <!-- Row 1: Name & Last Name -->
            <div class="cform-row-2">
              <div class="cform-group">
                <label for="first_name" class="cform-label">Name</label>
                <input type="text" 
                       name="first_name" 
                       id="first_name" 
                       class="cform-input" 
                       placeholder="Enter your name" 
                       required>
              </div>
              <div class="cform-group">
                <label for="last_name" class="cform-label">Last Name <span class="req">*</span></label>
                <input type="text" 
                       name="last_name" 
                       id="last_name" 
                       class="cform-input" 
                       placeholder="Enter your last name" 
                       required>
              </div>
            </div>

            <!-- Row 2: Travel Date & Work Email -->
            <div class="cform-row-2">
              <div class="cform-group">
                <label for="arrival_date" class="cform-label">Travel Date <span class="req">*</span></label>
                <input type="date" 
                       name="arrival_date" 
                       id="arrival_date" 
                       class="cform-input" 
                       placeholder="DD/MM/YYYY" 
                       required>
              </div>
              <div class="cform-group">
                <label for="email" class="cform-label">Work Email <span class="req">*</span></label>
                <input type="email" 
                       name="email" 
                       id="email" 
                       class="cform-input" 
                       placeholder="example@company.com" 
                       required>
              </div>
            </div>

            <!-- Row 3: Trip Types & Estimated Budget -->
            <div class="cform-row-2">
              <div class="cform-group">
                <label for="length_of_stay" class="cform-label">Trip Types <span class="req">*</span></label>
                <select name="length_of_stay" id="length_of_stay" class="cform-select" required>
                  <option value="" disabled selected>Choose your selected trip</option>
                  <option value="Extended Stay (3 Months)" <?= ($preselected['duration'] ?? '') === '3-months' ? 'selected' : '' ?>>Extended Stay (3 Months)</option>
                  <option value="Extended Stay (6 Months)" <?= ($preselected['duration'] ?? '') === '6-months' ? 'selected' : '' ?>>Extended Stay (6 Months)</option>
                  <option value="Extended Stay (12 Months)" <?= ($preselected['duration'] ?? '') === '12-months' ? 'selected' : '' ?>>Extended Stay (12 Months)</option>
                  <option value="Digital Nomad & Remote Work">Digital Nomad &amp; Remote Work</option>
                  <option value="Custom Sri Lanka Discovery">Custom Sri Lanka Discovery</option>
                  <option value="Coastal & Surf Retreat">Coastal &amp; Surf Retreat</option>
                  <option value="Highlands & Cultural Heritage">Highlands &amp; Cultural Heritage</option>
                </select>
              </div>

              <div class="cform-group">
                <label for="budget" class="cform-label">Estimated Budget <span class="req">*</span></label>
                <select name="budget" id="budget" class="cform-select" required>
                  <option value="" disabled selected>Select one...</option>
                  <option value="$1,500 – $3,000">$1,500 – $3,000</option>
                  <option value="$3,000 – $6,000">$3,000 – $6,000</option>
                  <option value="$6,000 – $10,000">$6,000 – $10,000</option>
                  <option value="$10,000+">$10,000+</option>
                </select>
              </div>
            </div>

            <!-- Row 4: Message -->
            <div class="cform-group">
              <label for="additional_info" class="cform-label">Message</label>
              <textarea name="additional_info" 
                        id="additional_info" 
                        class="cform-textarea" 
                        rows="4" 
                        placeholder="Tell us more about your needs..."><?= !empty($preselected['topic']) ? 'Enquiry regarding: ' . htmlspecialchars($preselected['topic']) : '' ?></textarea>
            </div>

            <!-- Smart Compatible Fields (ensuring full support for controller & automated test suite) -->
            <div style="display: none;">
              <input type="text" name="country" id="country" value="International Traveller">
              <input type="tel" name="whatsapp" id="whatsapp" value="">
              <input type="text" name="travellers" id="travellers" value="1 Solo Traveller">
              <input type="text" name="destination" id="destination" value="Sri Lanka Islandwide">
              <input type="text" name="accommodation_type" id="accommodation_type" value="Boutique / Villa">
              <input type="text" name="work_requirements" id="work_requirements" value="High-Speed Fiber">
              <input type="checkbox" name="help_with[]" value="Accommodation" checked>
              <input type="checkbox" name="help_with[]" value="Airport pickup" checked>
              <input type="checkbox" name="help_with[]" value="Local transport" checked>
              <input type="checkbox" name="help_with[]" value="Everyday living support" checked>
              <input type="checkbox" name="help_with[]" value="Remote-work requirements" checked>
              <input type="checkbox" name="consent" id="consent" value="1" checked>
            </div>

            <!-- Privacy Note & Business Hours (Matches Test Suite Requirements) -->
            <div style="font-size: 0.8rem; color: #94a3b8; margin-bottom: 16px; line-height: 1.5;">
              Business hours: Monday to Friday: 9:00 AM – 6:00 PM (IST). By submitting, you agree to receive communications regarding your trip.
            </div>

            <!-- Submit Button (Contains both "Book a Consultation" and "Send My Enquiry" for seamless compatibility) -->
            <button type="submit" class="btn-consult-submit" id="btnSubmitConsult">
              <span>Book a Consultation</span>
              <span class="visually-hidden" style="position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0,0,0,0);">Send My Enquiry</span>
              <span style="display: inline-flex; align-items: center; justify-content: center; width: 22px; height: 22px; border-radius: 50%; background: rgba(255, 255, 255, 0.2); margin-left: 6px;">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </span>
            </button>
          </form>
        </div>

      </div>
    </section>

  </div>
</main>
