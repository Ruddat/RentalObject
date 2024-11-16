<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    public static function sendEmail($to, $subject, $body, $toName = '')
    {
        $mail = new PHPMailer(true);

        try {
            // Server-Einstellungen aus der .env-Datei laden
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'smtp.example.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME', 'your_username');
            $mail->Password   = env('MAIL_PASSWORD', 'your_password');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', PHPMailer::ENCRYPTION_STARTTLS);
            $mail->Port       = env('MAIL_PORT', 587);

            // UTF-8 Einstellungen
            $mail->CharSet    = 'UTF-8';  // Setze die Zeichenkodierung auf UTF-8
            $mail->Encoding   = 'base64'; // Setze das Encoding auf Base64

            // Absenderadresse setzen
            $mail->setFrom(env('MAIL_FROM_ADDRESS', 'no-reply@example.com'), env('MAIL_FROM_NAME', 'Your Application Name'));

            // Empfängeradresse
            $mail->addAddress($to, $toName);

            // E-Mail-Inhalt
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            // E-Mail senden
            $mail->send();
            return true;
        } catch (Exception $e) {
            // Fehler protokollieren
            logger()->error('Mail konnte nicht gesendet werden. Fehler: ' . $mail->ErrorInfo);
            return false;
        }
    }
}
