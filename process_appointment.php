<?php
// process_appointment.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Perform additional validation
    if (empty($name) || empty($email) || empty($phone) || empty($service)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Bitte füllen Sie alle Pflichtfelder aus.']);
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'egjini@bareshamusic.com';
        $mail->Password   = 'zkccqctglmbgutts';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('egjini17@gmail.com', 'Nuhi Gartenbau');
        $mail->addAddress('egjini17@gmail.com', 'Nuhi Gartenbau'); // Change this to the actual recipient
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Neue Terminanfrage von ' . $name;

        // HTML Email Template
        $mail->Body = '
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neue Terminanfrage</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        h1 { color: #4CAF50; }
        .info { background-color: #f4f4f4; padding: 15px; border-radius: 5px; }
        .info p { margin: 5px 0; }
        .footer { margin-top: 20px; font-size: 0.9em; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Neue Terminanfrage</h1>
        <div class="info">
            <p><strong>Name:</strong> ' . $name . '</p>
            <p><strong>E-Mail:</strong> ' . $email . '</p>
            <p><strong>Telefon:</strong> ' . $phone . '</p>
            <p><strong>Dienstleistung:</strong> ' . $service . '</p>
            <p><strong>Nachricht:</strong> ' . $message . '</p>
        </div>
        <div class="footer">
            <p>Diese Anfrage wurde über das Kontaktformular auf nuhi-gartenbau.de gesendet.</p>
        </div>
    </div>
</body>
</html>
        ';

        $mail->send();

        // Send a success response
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Ihre Terminanfrage wurde erfolgreich gesendet. Wir werden uns in Kürze bei Ihnen melden.']);
    } catch (Exception $e) {
        // Send an error response
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Es gab einen Fehler beim Senden Ihrer Anfrage. Bitte versuchen Sie es später erneut.']);
    }
} else {
    // Send an error response for invalid requests
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Ungültige Anfrage']);
}
