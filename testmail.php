<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';
require 'vendor/PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = ''; // 16-char app password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('', 'Global Hospitals');
$mail->addAddress('');

$mail->Subject = 'Test Mail';
$mail->Body = 'Email service is working';

$mail->send();
echo "Mail sent successfully!";
