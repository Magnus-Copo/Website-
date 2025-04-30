<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'keertigundanoor@gmail.com';
$mail->Password = 'pnkaiqaexdzdraes'; // paste your actual app password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('keertigundanoor@gmail.com', 'Keerti');
$mail->addAddress('naveenmg966@gmail.com', '');
$mail->addAddress('gksiddanna197@gmail.com', '');

$mail->isHTML(true);
$mail->Subject = 'Test Email from PHPMailer';
$mail->Body    = 'This is a <b>test email</b> sent using PHPMailer.';



if($mail->send()) {
    echo 'Mail sent successfully!';
} else {
    echo 'Mail sending failed: ' . $mail->ErrorInfo;
}
?>
