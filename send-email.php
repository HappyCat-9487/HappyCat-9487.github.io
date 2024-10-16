<?php

$name = $_POST["name"];
$email = $_POST["email"];
$email = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "ericcool@gmail.com";
    $mail->Password = "tifrnbjthrzhejwt";

    $mail->setFrom($email, $name);
    $mail->addAddress("lianglu3366@gmail.com", "Mr. Lu");

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    echo "email sent successfully";
} catch (Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
