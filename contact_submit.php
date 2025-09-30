<?php
// Basic mail handler for contact form

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

// Collect and sanitize inputs
function sanitize($value) {
    return trim(filter_var($value, FILTER_SANITIZE_STRING));
}

$name = isset($_POST['name']) ? sanitize($_POST['name']) : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$phone = isset($_POST['phone']) ? sanitize($_POST['phone']) : '';
$website = isset($_POST['website']) ? filter_var(trim($_POST['website']), FILTER_SANITIZE_URL) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Simple validation
if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php#contact');
    exit;
}

$to = 'aravindaviraj99@gmail.com';
$subject = 'New Contact Form Submission - Lakmina Lanka';

$bodyLines = [
    "You have a new contact form submission:",
    "",
    "Name: {$name}",
    "Email: {$email}",
    $phone !== '' ? "Phone: {$phone}" : null,
    $website !== '' ? "Website: {$website}" : null,
    "",
    "Message:",
    $message,
];
$body = implode("\r\n", array_filter($bodyLines, function($line) { return $line !== null; }));

$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'From: Lakmina Lanka <no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'example.com') . '>';
$headers[] = 'Reply-To: ' . $email;

// Attempt to send mail
$sent = @mail($to, $subject, $body, implode("\r\n", $headers));

// Redirect with a simple anchor to show status
if ($sent) {
    header('Location: index.php#contact-success');
} else {
    header('Location: index.php#contact-error');
}
exit;
?>


