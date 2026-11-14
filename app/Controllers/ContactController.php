<?php

namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller
{
    public function index(): void
    {
        if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
            @session_start();
        }

        $successMsg = isset($_SESSION['enquiry_success']) ? $_SESSION['enquiry_success'] : null;
        $errorMsg = isset($_SESSION['enquiry_error']) ? $_SESSION['enquiry_error'] : null;
        if (isset($_SESSION)) {
            unset($_SESSION['enquiry_success'], $_SESSION['enquiry_error']);
        }

        $data = [
            'metaTitle' => 'Plan Your Stay | The Lankan Nomad - Contact Us',
            'metaDescription' => 'Tell us what your Sri Lankan stay looks like. Share details on length of stay, preferred region, accommodation preferences, and practical support needed.',
            'activePage' => 'contact',

            'hero' => [
                'eyebrow' => 'START THE CONVERSATION',
                'headline' => 'Tell us what your Sri Lankan stay looks like.',
                'lead' => "Whether you already know where you'd like to live or need help exploring your options, we're here to start the conversation.\n\nShare a few details about your plans, and we'll take it from there.",
                'formTitle' => "Let's plan your stay."
            ],

            'successMsg' => $successMsg,
            'errorMsg' => $errorMsg,

            'preselected' => [
                'duration' => $_GET['duration'] ?? '',
                'destination' => $_GET['destination'] ?? '',
                'service' => $_GET['service'] ?? '',
                'topic' => $_GET['topic'] ?? '',
                'experience' => $_GET['experience'] ?? '',
                'ref' => $_GET['ref'] ?? ''
            ],

            'directContact' => [
                'email' => 'info@thelankannomad.com',
                'whatsapp' => '+94 77 000 0000',
                'whatsappLink' => 'https://wa.me/94770000000',
                'businessHours' => 'Monday to Friday: 9:00 AM – 6:00 PM (IST / GMT+5:30)'
            ]
        ];

        $this->render('pages/contact', $data);
    }

    public function submit(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }

        // Validate required fields
        $firstName = trim($_POST['first_name'] ?? '');
        $lastName = trim($_POST['last_name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $country = trim($_POST['country'] ?? '');
        $arrivalDate = trim($_POST['arrival_date'] ?? '');
        $lengthOfStay = trim($_POST['length_of_stay'] ?? '');
        $travellers = trim($_POST['travellers'] ?? '');
        $destination = trim($_POST['destination'] ?? '');
        $consent = isset($_POST['consent']);

        $isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
               || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

        if (
            empty($firstName) || empty($lastName) || empty($email) ||
            empty($country) || empty($arrivalDate) || empty($lengthOfStay) ||
            empty($travellers) || empty($destination) || !$consent
        ) {
            $errorText = "We couldn't submit your enquiry. Please check the required fields and try again, or contact us directly.";

            if ($isAjax) {
                if (!headers_sent()) {
                    header('Content-Type: application/json');
                    http_response_code(422);
                }
                echo json_encode(['success' => false, 'message' => $errorText]);
                return;
            }

            if (isset($_SESSION)) {
                $_SESSION['enquiry_error'] = $errorText;
            }
            if (!headers_sent()) {
                header('Location: ' . url('/plan-your-stay#enquiry-form'));
            }
            return;
        }

        // Persist enquiry to log file
        $enquiryData = [
            'timestamp' => date('Y-m-d H:i:s'),
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'country' => $country,
            'whatsapp' => trim($_POST['whatsapp'] ?? ''),
            'arrival_date' => $arrivalDate,
            'length_of_stay' => $lengthOfStay,
            'travellers' => $travellers,
            'destination' => $destination,
            'help_with' => $_POST['help_with'] ?? [],
            'budget' => trim($_POST['budget'] ?? ''),
            'accommodation_type' => trim($_POST['accommodation_type'] ?? ''),
            'work_requirements' => trim($_POST['work_requirements'] ?? ''),
            'accessibility' => trim($_POST['accessibility'] ?? ''),
            'additional_info' => trim($_POST['additional_info'] ?? '')
        ];

        $logDir = defined('ROOT_PATH') ? ROOT_PATH . '/storage/logs' : __DIR__ . '/../../storage/logs';
        if (is_dir($logDir)) {
            @file_put_contents(
                $logDir . '/enquiries.log',
                json_encode($enquiryData, JSON_UNESCAPED_UNICODE) . PHP_EOL,
                FILE_APPEND
            );
        }

        // Send Consultation Email directly to info@thelankannomad.com
        $this->sendConsultationEmail($enquiryData);

        $successText = "Thank you for reaching out to The Lankan Nomad. Your enquiry has been submitted. Our team will review your details and contact you using the information provided.";

        if ($isAjax) {
            if (!headers_sent()) {
                header('Content-Type: application/json');
            }
            echo json_encode(['success' => true, 'message' => $successText]);
            return;
        }

        if (isset($_SESSION)) {
            $_SESSION['enquiry_success'] = $successText;
        }
        if (!headers_sent()) {
            header('Location: ' . url('/plan-your-stay#enquiry-form'));
        }
        return;
    }

    /**
     * Send email notification to info@thelankannomad.com
     */
    private function sendConsultationEmail(array $data): bool
    {
        $to = 'info@thelankannomad.com';
        $clientName = htmlspecialchars($data['first_name'] . ' ' . $data['last_name']);
        $clientEmail = htmlspecialchars($data['email']);
        $subject = 'New Consultation Booking: ' . $data['first_name'] . ' ' . $data['last_name'] . ' - The Lankan Nomad';

        $bodyHtml = '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif; background: #f4f7fa; color: #1e293b; margin: 0; padding: 24px; }
  .email-container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
  .email-header { background: #031126; color: #ffffff; padding: 28px 32px; border-bottom: 3px solid #2544ec; }
  .email-header h2 { margin: 0 0 6px; font-size: 22px; }
  .email-header p { margin: 0; font-size: 13px; color: #94a3b8; }
  .email-body { padding: 32px; }
  .badge { display: inline-block; background: #2544ec; color: #ffffff; font-size: 11px; font-weight: 600; padding: 4px 12px; border-radius: 9999px; text-transform: uppercase; margin-bottom: 20px; }
  .info-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
  .info-table td { padding: 10px 0; border-bottom: 1px solid #f1f5f9; font-size: 14px; }
  .info-table td.label { font-weight: 600; color: #64748b; width: 36%; }
  .info-table td.val { color: #0f172a; font-weight: 500; }
  .message-box { background: #f8fafc; border-left: 4px solid #2544ec; border-radius: 6px; padding: 16px; margin: 20px 0; font-size: 14px; line-height: 1.6; color: #334155; }
  .email-footer { background: #f8fafc; padding: 20px 32px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; text-align: center; }
</style>
</head>
<body>
  <div class="email-container">
    <div class="email-header">
      <h2>The Lankan Nomad</h2>
      <p>New Trip Consultation Booking Request</p>
    </div>
    <div class="email-body">
      <span class="badge">Consultation Booking</span>
      <p style="font-size: 15px; margin-top: 0;">A new consultation booking enquiry has been received from the website.</p>
      
      <table class="info-table">
        <tr><td class="label">Client Name:</td><td class="val"><strong>' . $clientName . '</strong></td></tr>
        <tr><td class="label">Work Email:</td><td class="val"><a href="mailto:' . $clientEmail . '" style="color: #2544ec; text-decoration: none;">' . $clientEmail . '</a></td></tr>
        <tr><td class="label">Travel Date:</td><td class="val">' . htmlspecialchars($data['arrival_date'] ?? 'N/A') . '</td></tr>
        <tr><td class="label">Trip Types:</td><td class="val">' . htmlspecialchars($data['length_of_stay'] ?? 'N/A') . '</td></tr>
        <tr><td class="label">Estimated Budget:</td><td class="val">' . htmlspecialchars($data['budget'] ?? 'N/A') . '</td></tr>
        <tr><td class="label">Destination Focus:</td><td class="val">' . htmlspecialchars($data['destination'] ?? 'Sri Lanka') . '</td></tr>
        <tr><td class="label">Submission Time:</td><td class="val">' . $data['timestamp'] . '</td></tr>
      </table>

      <h4 style="margin: 20px 0 8px; color: #0f172a; font-size: 14px;">Client Message & Details:</h4>
      <div class="message-box">
        ' . (!empty($data['additional_info']) ? nl2br(htmlspecialchars($data['additional_info'])) : '<em>No additional message provided.</em>') . '
      </div>
    </div>
    <div class="email-footer">
      Sent automatically by The Lankan Nomad Platform to <strong>info@thelankannomad.com</strong>.
    </div>
  </div>
</body>
</html>';

        // Prepare email headers
        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=UTF-8',
            'From: The Lankan Nomad <no-reply@thelankannomad.com>',
            'Reply-To: ' . $data['first_name'] . ' ' . $data['last_name'] . ' <' . $data['email'] . '>',
            'X-Mailer: PHP/' . phpversion()
        ];

        // 1. Send via PHP mail()
        $sent = @mail($to, $subject, $bodyHtml, implode("\r\n", $headers));

        // 2. Persist email record to storage/emails and sent_emails.log
        $emailDir = defined('ROOT_PATH') ? ROOT_PATH . '/storage/emails' : __DIR__ . '/../../storage/emails';
        if (!is_dir($emailDir)) {
            @mkdir($emailDir, 0777, true);
        }

        $emailRecord = [
            'timestamp' => $data['timestamp'],
            'to' => $to,
            'from' => 'no-reply@thelankannomad.com',
            'reply_to' => $data['email'],
            'subject' => $subject,
            'client_name' => $data['first_name'] . ' ' . $data['last_name'],
            'client_email' => $data['email'],
            'travel_date' => $data['arrival_date'],
            'trip_type' => $data['length_of_stay'],
            'budget' => $data['budget'],
            'message' => $data['additional_info'],
            'mail_sent_status' => $sent ? 'SENT_VIA_MAIL' : 'LOGGED_STORED'
        ];

        $logDir = defined('ROOT_PATH') ? ROOT_PATH . '/storage/logs' : __DIR__ . '/../../storage/logs';
        @file_put_contents(
            $logDir . '/sent_emails.log',
            json_encode($emailRecord, JSON_UNESCAPED_UNICODE) . PHP_EOL,
            FILE_APPEND
        );

        // Store HTML snapshot of email for direct viewing/audit
        $safeFilename = date('Ymd_His') . '_' . preg_replace('/[^a-zA-Z0-9]/', '_', $data['first_name'] . '_' . $data['last_name']) . '.html';
        @file_put_contents($emailDir . '/' . $safeFilename, $bodyHtml);

        return true;
    }
}
