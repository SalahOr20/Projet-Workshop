<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



include ('php-mailer/src/Exception.php');
include ('php-mailer/src/PHPMailer.php');
include ('php-mailer/src/SMTP.php');



$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'salahor20@gmail.com'; // Votre adresse e-mail
    $mail->Password = 'scnp hxez rsaj mdet'; // Votre mot de passe
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // SSL ou TLS (selon votre fournisseur)
    $mail->Port = 587; 

    // Destinataire
    $mail->setFrom('salahor20@gmail.com', 'OURAMDAN Salah Eddine');
    $mail->addAddress('destinataire@example.com', 'Nom du Destinataire');

    // Contenu de l'e-mail
    $mail->isHTML(true);
    $mail->Subject = '$_POST[sujet]';
    $mail->Body = '$_POST[message]';

    // Envoyer l'e-mail
    $mail->send();
    echo 'E-mail envoyé avec succès!';
} catch (Exception $e) {
    echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
}
?>
