<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ericcool@gmail.com"
$mail->Password = "tifrnbjthrzhejwt"

$mail->setFrom($email, $name);
$mail->addAddress("lianglu3366@gmail.com", "Mr. Lu")

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";

