/**
 * The Lankan Nomad - Plan Your Stay Form Handler
 * © Orbis Global - 2026
 */

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('planStayForm');
  const alertContainer = document.getElementById('enquiry-ajax-alert');
  const submitBtn = document.getElementById('submitEnquiryBtn');

  if (!form) return;

  form.addEventListener('submit', async (e) => {
    // Check HTML5 validity
    if (!form.checkValidity()) {
      e.preventDefault();
      form.reportValidity();
      return;
    }

    // Submit via AJAX for instant feedback
    e.preventDefault();

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.querySelector('span').textContent = 'Submitting Enquiry...';
    }

    if (alertContainer) {
      alertContainer.style.display = 'none';
      alertContainer.innerHTML = '';
      alertContainer.className = '';
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

      const result = await response.json();

      if (alertContainer) {
        alertContainer.style.display = 'block';
        if (result.success) {
          alertContainer.className = 'alert-nomad alert-success-nomad';
          alertContainer.innerHTML = `<strong>Success:</strong> ${result.message}`;
          form.reset();
        } else {
          alertContainer.className = 'alert-nomad alert-error-nomad';
          alertContainer.innerHTML = `<strong>Notice:</strong> ${result.message}`;
        }
        alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    } catch (err) {
      // Fallback: submit standard POST if fetch fails
      form.submit();
    } finally {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.querySelector('span').textContent = 'Send My Enquiry';
      }
    }
  });
});

