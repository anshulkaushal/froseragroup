<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

function json_response($success, $message, $status = 200) {
    http_response_code($status);
    echo json_encode([ 'success' => $success, 'message' => $message ]);
    exit;
}

// Get input: support both JSON and x-www-form-urlencoded
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) {
    $data = $_POST;
}

$name = isset($data['name']) ? trim($data['name']) : '';
$email = isset($data['email']) ? trim($data['email']) : '';
$subject = isset($data['subject']) ? trim($data['subject']) : '';
$message = isset($data['message']) ? trim($data['message']) : '';

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    json_response(false, 'Please fill in all fields.', 400);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    json_response(false, 'Please enter a valid email address.', 400);
}

// Optional: send email (configure if desired)
$sendEmails = true; // Enable email sending (ensure your hosting mail is configured)

if ($sendEmails) {
    $to = 'sales@froseragroup.co.nz';
    $subjectLine = 'Frosera Group Contact: ' . $subject;
    $headers  = 'From: noreply@froseragroup.co.nz' . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";
    
    $body = "New contact form submission (froseragroup.co.nz)\n" .
            str_repeat('-', 40) . "\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Subject: $subject\n" .
            "Message:\n$message\n";

    // Attempt to send email; return error if sending fails
    $sent = @mail($to, $subjectLine, $body, $headers);
    if (!$sent) {
        json_response(false, 'Unable to send email at the moment. Please try again later.', 502);
    }
}

json_response(true, 'Thank you for your message! We will get back to you soon.');
