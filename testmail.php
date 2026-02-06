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
$mail->Username = 'prem.baraskar24@sakec.ac.in';
$mail->Password = 'ngkg qoep tgel hoys'; // 16-char app password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('prem.baraskar24@sakec.ac.in', 'Global Hospitals');
$mail->addAddress('manthan.warandekar24@sakec.ac.in');

$mail->Subject = 'Test Mail';
$mail->Body = 'Email service is working';

$mail->send();
echo "Mail sent successfully!";
