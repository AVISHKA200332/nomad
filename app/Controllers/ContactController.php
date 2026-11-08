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
                'email' => 'hello@thelankannomad.com',
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
}
