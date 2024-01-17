<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Get the email password from the environment variable
$email_password = getenv('EMAIL_PASSWORD');

// Check if the email password is set and is not empty
if ($email_password === false || empty($email_password)) {
    die('Error: Email password not set in environment variable.');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $name = trim($name); // Remove leading and trailing whitespace
    if (empty($name) || strlen($name) > 50) {
        die('Error: Invalid name. Name must not be empty and should not exceed 50 characters.');
    }

    // Validate and sanitize the email
    $email = $_POST["email"];
    $email = trim($email); // Remove leading and trailing whitespace
    if (empty($email) || strlen($email) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Error: Invalid email. Please provide a valid email address (up to 100 characters).');
    }

    // Validate and sanitize the message
    $message = $_POST["message"];
    $message = trim($message); // Remove leading and trailing whitespace
    if (empty($message) || strlen($message) > 1000) {
        die('Error: Invalid message. Message must not be empty and should not exceed 1000 characters.');
    }

    $subject = "Contact Form Submission";
    $email_body = "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Message:\n" . $message;

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Enable SMTP for sending emails
    $mail->isSMTP();

    // Set the SMTP server details for Namecheap
    $mail->Host = 'mail.privateemail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@jerico-dev.com'; // Your Namecheap email address
    $mail->Password = $email_password; // Use the email password from the environment variable
    $mail->SMTPSecure = 'ssl'; // Use 'tls' if preferred, but 'ssl' is more commonly used with port 465
    $mail->Port = 465; // Use port 587 if preferred, but port 465 is more commonly used with SSL

    // Set email sender and recipient
    $mail->setFrom('contact@jerico-dev.com', 'Your Name'); // Your Namecheap email address
    $mail->addAddress('contact@jerico-dev.com');

    // Set email subject and body
    $mail->Subject = $subject;
    $mail->Body = $email_body;

    // Send the email
    if ($mail->send()) {
        echo "Thank you for your message. We have received it.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
