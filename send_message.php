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
        $mail->SMTPDebug = 0;                       // Disable verbose debug output
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';       // Specify SMTP server
        $mail->SMTPAuth   = true;                   // Enable SMTP authentication
        $mail->Username   = 'egjini@bareshamusic.com'; // SMTP username
        $mail->Password   = 'zkccqctglmbgutts';     // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587;                    // TCP port
        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('egjini@bareshamusic.com', 'Nuhi-Gartenbau'); // Add a recipient
        // Content
        $mail->isHTML(true);                        // Set email format to HTML
        $mail->Subject = $subject;
        // Inline CSS email template with garden theme
        $mail->Body = "
        <html>
        <body style='font-family: Arial, sans-serif; background-color: #eafaf1; margin: 0; padding: 0;'>
            <div style='width: 100%; max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);'>
                <div style='text-align: center;'>
                    <img src='https://images.pexels.com/photos/1387568/pexels-photo-1387568.jpeg' alt='Garden Header' style='width: 100%; max-width: 600px; border-radius: 10px;' />
                </div>
                <h1 style='color: #4CAF50; text-align: center;'>Kontaktformular Nachricht</h1>
                <p style='color: #333; font-size: 16px;'><strong>Name:</strong> {$name}</p>
                <p style='color: #333; font-size: 16px;'><strong>Email:</strong> {$email}</p>
                <p style='color: #333; font-size: 16px;'><strong>Betreff:</strong> {$subject}</p>
                <p style='color: #333; font-size: 16px;'><strong>Nachricht:</strong></p>
                <p style='color: #333; font-size: 16px;'>{$message}</p>
                <div style='margin-top: 20px; padding-top: 10px; border-top: 1px solid #ddd; text-align: center; color: #555;'>
                    <h2 style='color: #4CAF50;'>Über Nuhi-Gartenbau</h2>
                    <p style='color: #333; font-size: 14px;'>Wir sind Ihr zuverlässiger Partner für alle Gartenbedürfnisse. Unsere Dienstleistungen umfassen:</p>
                    <ul style='list-style-type: square; color: #333; font-size: 14px;'>
                        <li>Professionelle Gartenpflege</li>
                        <li>Landschaftsgestaltung</li>
                        <li>Baumpflege und -schnitt</li>
                        <li>Blumen- und Pflanzeneinrichtung</li>
                    </ul>
                    <p style='color: #333; font-size: 14px;'>Besuchen Sie unsere Website für weitere Informationen oder um einen Termin zu vereinbaren.</p>
                    <a href='http://example.com' style='display: inline-block; padding: 10px 20px; color: #fff; background-color: #4CAF50; text-decoration: none; border-radius: 5px;'>Unsere Website besuchen</a>
                </div>
                <div style='text-align: center; margin-top: 20px;'>
                    <img src='https://images.pexels.com/photos/257250/pexels-photo-257250.jpeg' alt='Garden Footer' style='width: 100%; max-width: 600px; border-radius: 10px;' />
                </div>
            </div>
        </body>
        </html>";
        $mail->AltBody = strip_tags($message); // Plain text version of the email
        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Message has been sent']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
