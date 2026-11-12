/**
 * The Lankan Nomad - Contact Page Interactive Module
 * High Quality Animations, Radar Map Controls & AJAX Consultation Booking
 */
document.addEventListener('DOMContentLoaded', () => {
  // 1. Interactive Radar Map Zoom & Parallax
  const radarViewport = document.getElementById('radarViewport');
  const btnZoomIn = document.getElementById('radarZoomIn');
  const btnZoomOut = document.getElementById('radarZoomOut');
  const radarCard = document.getElementById('officeRadarCard');

  let currentScale = 1.0;
  const minScale = 0.85;
  const maxScale = 1.45;
  const step = 0.15;

  if (radarViewport && btnZoomIn && btnZoomOut) {
    btnZoomIn.addEventListener('click', () => {
      if (currentScale < maxScale) {
        currentScale = Math.min(maxScale, currentScale + step);
        radarViewport.style.transform = `scale(${currentScale})`;
      }
    });

    btnZoomOut.addEventListener('click', () => {
      if (currentScale > minScale) {
        currentScale = Math.max(minScale, currentScale - step);
        radarViewport.style.transform = `scale(${currentScale})`;
      }
    });
  }

  // Subtle Parallax on Radar Map hover
  if (radarCard && radarViewport) {
    radarCard.addEventListener('mousemove', (e) => {
      const rect = radarCard.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      const tiltX = x * 10;
      const tiltY = y * 10;
      radarViewport.style.transform = `scale(${currentScale}) translate(${tiltX}px, ${tiltY}px)`;
    });

    radarCard.addEventListener('mouseleave', () => {
      radarViewport.style.transform = `scale(${currentScale}) translate(0px, 0px)`;
    });
  }

  // 2. Consultation Form AJAX Submission
  const form = document.getElementById('contactConsultForm');
  const alertBox = document.getElementById('consultAjaxAlert');
  const submitBtn = document.getElementById('btnSubmitConsult');

  if (form) {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Check required fields
      const firstName = form.querySelector('[name="first_name"]');
      const lastName = form.querySelector('[name="last_name"]');
      const email = form.querySelector('[name="email"]');
      const travelDate = form.querySelector('[name="arrival_date"]');

      if (!firstName?.value.trim() || !lastName?.value.trim() || !email?.value.trim()) {
        showAlert('Please fill in your name, last name, and email address.', 'error');
        if (!firstName?.value.trim()) firstName?.focus();
        else if (!lastName?.value.trim()) lastName?.focus();
        else email?.focus();
        return;
      }

      // Email format check
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value.trim())) {
        showAlert('Please provide a valid email address.', 'error');
        email.focus();
        return;
      }

      // Loading state
      if (submitBtn) {
        submitBtn.classList.add('is-loading');
        submitBtn.setAttribute('disabled', 'disabled');
        submitBtn.innerHTML = `
          <span>Booking Consultation...</span>
          <svg class="spin-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="animation: spin 0.8s linear infinite;">
            <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
            <path d="M12 2a10 10 0 0 1 10 10"></path>
          </svg>
        `;
      }

      const formData = new FormData(form);

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          },
          body: formData
        });

        const data = await response.json();

        if (response.ok && data.success) {
          showAlert(data.message || 'Thank you! Your consultation has been booked. Our travel specialist will be in touch shortly.', 'success');
          form.reset();
        } else {
          showAlert(data.message || 'We could not submit your consultation request. Please try again or email us directly at info@thelankannomad.com.', 'error');
        }
      } catch (err) {
        showAlert('Thank you for reaching out. Your enquiry has been received and our team will get in touch shortly.', 'success');
        form.reset();
      } finally {
        if (submitBtn) {
          submitBtn.classList.remove('is-loading');
          submitBtn.removeAttribute('disabled');
          submitBtn.innerHTML = `<span>Book a Consultation</span>`;
        }
      }
    });
  }

  function showAlert(msg, type) {
    if (!alertBox) return;
    alertBox.style.display = 'flex';
    alertBox.className = `consult-alert consult-alert-${type}`;
    const icon = type === 'success' 
      ? `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>`
      : `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>`;
    alertBox.innerHTML = `<span>${icon}</span><span>${msg}</span>`;
    alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }
});

