<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

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
        $mail->setFrom($email, $name);
        $mail->addAddress('egjini17@gmail.com', 'Developer of Nuhi-Gartenbau');
        $mail->addAddress('egjini@bareshamusic.com', 'Developer of Nuhi-Gartenbau');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;

        // Minimalistic email template with inline CSS and leaf icon
        $mail->Body = "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; padding: 20px; background-color: #f9f9f9;'>
            <div style='text-align: center; margin-bottom: 20px;'>
            
                <img src='cid:logo' alt='Leaf Icon' style='width: 60px; height: 60px;'>
            </div>
            <h2 style='color: #4CAF50; border-bottom: 1px solid #ddd; padding-bottom: 10px; text-align: center;'>Neue Nachricht von Kontaktformular</h2>
            <p style='margin: 10px 0;'><strong>Name:</strong> {$name}</p>
            <p style='margin: 10px 0;'><strong>Email:</strong> {$email}</p>
            <p style='margin: 10px 0;'><strong>Betreff:</strong> {$subject}</p>
            <p style='margin: 10px 0;'><strong>Nachricht:</strong></p>
            <p style='background-color: #fff; padding: 10px; border-radius: 5px;'>{$message}</p>
            <div style='margin-top: 20px; font-size: 12px; color: #666; text-align: center;'>
                <p>Dies ist eine automatisch generierte E-Mail. Bitte antworten Sie nicht direkt auf diese Nachricht.</p>
            </div>
        </div>";

        $mail->AltBody = strip_tags($message);

        // Image attachment
        $mail->AddEmbeddedImage('assets/icons8-leaf-96.png', 'logo');
        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Nachricht wurde gesendet']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Nachricht konnte nicht gesendet werden. Fehler: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Ungültige Anfragemethode']);
}