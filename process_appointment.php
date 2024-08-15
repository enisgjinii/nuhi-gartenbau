<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requiredFields = ['name', 'email', 'phone', 'service', 'message'];
    $data = [];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Bitte füllen Sie alle Pflichtfelder aus.']);
            exit;
        }
        $data[$field] = $_POST[$field];
    }

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'egjini17@gmail.com';
        $mail->Password   = 'jrytcboyodekbjdf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($data['email'], $data['name']);
        $mail->addAddress('egjini17@gmail.com', 'Developer of Nuhi Gartenbau');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Neue Terminanfrage von ' . $data['name'];
        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;'>
            <img src='cid:logo' alt='Nuhi Gartenbau Logo' style='max-width: 200px; margin-bottom: 20px;'>
            <h2 style='color: #4CAF50;'>Neue Terminanfrage</h2>
            <div style='background-color: #f9f9f9; padding: 20px; border-radius: 5px; text-align: left;'>
                <p><strong>Name:</strong> {$data['name']}</p>
                <p><strong>E-Mail:</strong> {$data['email']}</p>
                <p><strong>Telefon:</strong> {$data['phone']}</p>
                <p><strong>Dienstleistung:</strong> {$data['service']}</p>
                <p><strong>Nachricht:</strong> {$data['message']}</p>
            </div>
            <p style='font-style: italic; margin-top: 20px;'>Diese Anfrage wurde über das Kontaktformular auf nuhi-gartenbau.de gesendet.</p>
        </div>
        ";
        $mail->AddEmbeddedImage('assets/icons8-leaf-96.png', 'logo');

        $mail->send();
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Ihre Terminanfrage wurde erfolgreich gesendet. Wir werden uns in Kürze bei Ihnen melden.']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Es gab einen Fehler beim Senden Ihrer Anfrage. Bitte versuchen Sie es später erneut.']);
    }
} else {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Ungültige Anfrage']);
}