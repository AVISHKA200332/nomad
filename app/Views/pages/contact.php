<?php
/**
 * The Lankan Nomad - Contact / Plan Your Stay View (PAGE 09)
 * © Orbis Global - 2026
 */
?>

<!-- Hero Section (No Hero Picture) -->
<section class="nomad-hero-inner" style="min-height: 42vh; padding: 135px 0 65px;">
  <div class="container nomad-hero-content">
    <span class="nomad-eyebrow nomad-eyebrow-light"><?= htmlspecialchars($hero['eyebrow']) ?></span>
    <h1 class="nomad-hero-title"><?= htmlspecialchars($hero['headline']) ?></h1>
    <div class="nomad-hero-lead">
      <p>Whether you already know where you'd like to live or need help exploring your options, we're here to start the conversation.</p>
      <p>Share a few details about your plans, and we'll take it from there.</p>
    </div>
  </div>
</section>

<!-- Plan Your Stay Form Section -->
<section class="section" id="enquiry-form">
  <div class="container" style="max-width: 960px;">
    <div class="nomad-section-header text-center">
      <span class="nomad-eyebrow">YOUR STAY ENQUIRY</span>
      <h2 class="nomad-section-title"><?= htmlspecialchars($hero['formTitle']) ?></h2>
      <p class="nomad-section-desc">
        Complete the form below to receive a personalized consultation and quotation.
      </p>
    </div>

    <div class="plan-stay-wrap">
      <!-- Status Alerts -->
      <?php if (!empty($successMsg)): ?>
        <div class="alert-nomad alert-success-nomad" role="alert">
          <strong>Success:</strong> <?= htmlspecialchars($successMsg) ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($errorMsg)): ?>
        <div class="alert-nomad alert-error-nomad" role="alert">
          <strong>Notice:</strong> <?= htmlspecialchars($errorMsg) ?>
        </div>
      <?php endif; ?>

      <!-- Dynamic AJAX Alert Container -->
      <div id="enquiry-ajax-alert" style="display: none;"></div>

      <form action="<?= url('/contact') ?>" method="POST" id="planStayForm" novalidate>
        <!-- Part 1: About You -->
        <h3 class="plan-section-title">About You</h3>
        <div class="form-grid-2">
          <div class="form-group">
            <label for="first_name" class="form-label">First name <span class="req">*</span></label>
            <input type="text" id="first_name" name="first_name" class="form-control" required placeholder="e.g. Maya">
          </div>
          <div class="form-group">
            <label for="last_name" class="form-label">Last name <span class="req">*</span></label>
            <input type="text" id="last_name" name="last_name" class="form-control" required placeholder="e.g. Lin">
          </div>
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label for="email" class="form-label">Email address <span class="req">*</span></label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="e.g. maya@example.com">
          </div>
          <div class="form-group">
            <label for="country" class="form-label">Country of residence <span class="req">*</span></label>
            <input type="text" id="country" name="country" class="form-control" required placeholder="e.g. United Kingdom, Germany, Australia">
          </div>
        </div>

        <div class="form-group">
          <label for="whatsapp" class="form-label">WhatsApp number <span style="font-weight: normal; color: var(--color-text-muted);">(optional)</span></label>
          <input type="tel" id="whatsapp" name="whatsapp" class="form-control" placeholder="+44 7911 123456">
        </div>

        <!-- Part 2: Your Plans -->
        <h3 class="plan-section-title">Your Plans</h3>
        <div class="form-grid-2">
          <div class="form-group">
            <label for="arrival_date" class="form-label">Intended arrival date <span class="req">*</span></label>
            <input type="date" id="arrival_date" name="arrival_date" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="length_of_stay" class="form-label">Length of stay <span class="req">*</span></label>
            <select id="length_of_stay" name="length_of_stay" class="form-control" required>
              <option value="">Select your stay duration</option>
              <option value="3 months" <?= ($preselected['duration'] ?? '') === '3 months' ? 'selected' : '' ?>>3 months</option>
              <option value="6 months" <?= ($preselected['duration'] ?? '') === '6 months' ? 'selected' : '' ?>>6 months</option>
              <option value="12 months" <?= ($preselected['duration'] ?? '') === '12 months' ? 'selected' : '' ?>>12 months</option>
              <option value="Flexible" <?= ($preselected['duration'] ?? '') === 'Flexible' ? 'selected' : '' ?>>Flexible</option>
            </select>
          </div>
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label for="travellers" class="form-label">Number of travellers <span class="req">*</span></label>
            <select id="travellers" name="travellers" class="form-control" required>
              <option value="1 solo traveller">1 solo traveller</option>
              <option value="2 people (couple / friends)">2 people (couple / friends)</option>
              <option value="Family (3-4 people)">Family (3-4 people)</option>
              <option value="Group (5+ people)">Group (5+ people)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="destination" class="form-label">Preferred destination <span class="req">*</span></label>
            <select id="destination" name="destination" class="form-control" required>
              <option value="">Select a region</option>
              <option value="Colombo" <?= stripos($preselected['destination'] ?? '', 'Colombo') !== false ? 'selected' : '' ?>>Colombo</option>
              <option value="South Coast" <?= stripos($preselected['destination'] ?? '', 'South') !== false ? 'selected' : '' ?>>South Coast</option>
              <option value="Kandy-Hill Country" <?= stripos($preselected['destination'] ?? '', 'Kandy') !== false ? 'selected' : '' ?>>Kandy-Hill Country</option>
              <option value="Ella" <?= stripos($preselected['destination'] ?? '', 'Ella') !== false ? 'selected' : '' ?>>Ella</option>
              <option value="Cultural Triangle" <?= stripos($preselected['destination'] ?? '', 'Cultural') !== false ? 'selected' : '' ?>>Cultural Triangle</option>
              <option value="Not sure yet" <?= ($preselected['ref'] ?? '') === 'help-me-choose' ? 'selected' : '' ?>>Not sure yet</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>

        <!-- Part 3: What Do You Need Help With? -->
        <h3 class="plan-section-title">What Do You Need Help With?</h3>
        <p style="font-size: 0.92rem; color: var(--color-text-muted); margin-bottom: 16px;">Select all areas where you would like our team's guidance:</p>
        <div class="checkbox-grid-nomad">
          <?php
          $helpOptions = [
              'Accommodation',
              'Airport pickup',
              'Local transport',
              'Everyday living support',
              'Travel and experiences',
              'Remote-work requirements',
              'Personalised stay planning',
              'Other'
          ];
          $selectedService = $preselected['service'] ?? '';
          foreach ($helpOptions as $opt):
              $isChecked = (!empty($selectedService) && stripos($selectedService, explode(' ', $opt)[0]) !== false);
          ?>
            <label class="checkbox-pill-label">
              <input type="checkbox" name="help_with[]" value="<?= htmlspecialchars($opt) ?>" <?= $isChecked ? 'checked' : '' ?>>
              <span><?= htmlspecialchars($opt) ?></span>
            </label>
          <?php endforeach; ?>
        </div>

        <!-- Part 4: Your Preferences -->
        <h3 class="plan-section-title">Your Preferences</h3>
        <div class="form-grid-2">
          <div class="form-group">
            <label for="budget" class="form-label">Approximate accommodation budget</label>
            <input type="text" id="budget" name="budget" class="form-control" placeholder="e.g. $1,200 - $1,800 USD / month">
          </div>
          <div class="form-group">
            <label for="accommodation_type" class="form-label">Preferred accommodation type</label>
            <select id="accommodation_type" name="accommodation_type" class="form-control">
              <option value="">Select preference</option>
              <option value="Private Apartment">Private Apartment</option>
              <option value="Coastal Villa">Coastal Villa</option>
              <option value="Boutique Guesthouse">Boutique Guesthouse</option>
              <option value="Shared House / Coliving">Shared House / Coliving</option>
              <option value="Flexible / Open to suggestions">Flexible / Open to suggestions</option>
            </select>
          </div>
        </div>

        <div class="form-grid-2">
          <div class="form-group">
            <label for="work_requirements" class="form-label">Work or lifestyle requirements</label>
            <input type="text" id="work_requirements" name="work_requirements" class="form-control" placeholder="e.g. High-speed fiber internet, quiet room, desk, generator">
          </div>
          <div class="form-group">
            <label for="accessibility" class="form-label">Accessibility or dietary considerations, if relevant</label>
            <input type="text" id="accessibility" name="accessibility" class="form-control" placeholder="e.g. Ground floor access, vegan dining nearby">
          </div>
        </div>

        <div class="form-group">
          <label for="additional_info" class="form-label">Additional information</label>
          <textarea id="additional_info" name="additional_info" class="form-control" rows="4" placeholder="Tell us more about your ideal routine, work hours, hobbies, or questions..."><?php
            if (!empty($preselected['topic'])) {
                echo 'Enquiring regarding guide: ' . htmlspecialchars($preselected['topic']);
            } elseif (!empty($preselected['experience'])) {
                echo 'Enquiring regarding experience: ' . htmlspecialchars($preselected['experience']);
            }
          ?></textarea>
        </div>

        <!-- Required Consent -->
        <div class="consent-row">
          <label class="consent-label">
            <input type="checkbox" name="consent" id="consent" required>
            <span>
              I agree to be contacted about my enquiry and understand that my information will be handled according to the <a href="<?= url('/privacy-policy') ?>" target="_blank" style="color: var(--color-primary); font-weight: 600;">Privacy Policy</a>. <span class="req">*</span>
            </span>
          </label>
        </div>

        <button type="submit" class="btn btn-primary" id="submitEnquiryBtn" style="width: 100%; justify-content: center; padding: 16px; font-size: 1.05rem;">
          <span>Send My Enquiry</span>
          <span class="arrow-circle arrow-circle-white">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </span>
        </button>
      </form>
    </div>

    <!-- Alternative Direct Contact (PAGE 09) -->
    <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-2xl); padding: 40px; margin-top: 48px; box-shadow: var(--shadow-sm);">
      <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-navy); margin-bottom: 8px;">
        Prefer to contact us directly?
      </h3>
      <p style="font-size: 0.95rem; color: var(--color-text-body); margin-bottom: 24px;">
        Reach out via email or message our support team on WhatsApp during business hours.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
        <div style="background: #f8fafc; padding: 20px; border-radius: var(--radius-lg);">
          <div style="font-size: 0.82rem; font-weight: 700; text-transform: uppercase; color: var(--color-primary); margin-bottom: 6px;">Email</div>
          <a href="mailto:<?= htmlspecialchars($directContact['email']) ?>" style="font-size: 1.05rem; font-weight: 600; color: var(--color-navy); text-decoration: none;">
            <?= htmlspecialchars($directContact['email']) ?>
          </a>
        </div>

        <div style="background: #f8fafc; padding: 20px; border-radius: var(--radius-lg);">
          <div style="font-size: 0.82rem; font-weight: 700; text-transform: uppercase; color: var(--color-primary); margin-bottom: 6px;">WhatsApp</div>
          <a href="<?= htmlspecialchars($directContact['whatsappLink']) ?>" target="_blank" rel="noopener noreferrer" style="font-size: 1.05rem; font-weight: 600; color: var(--color-navy); text-decoration: none;">
            <?= htmlspecialchars($directContact['whatsapp']) ?>
          </a>
        </div>

        <div style="background: #f8fafc; padding: 20px; border-radius: var(--radius-lg);">
          <div style="font-size: 0.82rem; font-weight: 700; text-transform: uppercase; color: var(--color-primary); margin-bottom: 6px;">Business hours</div>
          <div style="font-size: 0.98rem; font-weight: 600; color: var(--color-navy);">
            <?= htmlspecialchars($directContact['businessHours']) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
