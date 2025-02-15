<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../../vendor/autoload.php";
require "../config/config.php";

class SendEmail{
    public function sendEmail($name, $email, $subject, $message){

        $mail = new PHPMailer(true);

        try{
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        
            $mail->isSMTP();
            $mail->Host = $config['smtp_host'];
            $mail->SMTPAuth = true;
        
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        
            $mail->Username = $config['smtp_user'];
            $mail->Password = $config['smtp_pass'];
        
            $mail->setFrom($email, $name);
            $mail->addAddress("lianglu3366@gmail.com", "Mr. Lu");
        
            $mail->Subject = $subject;
            $mail->Body = $message;
        
            $mail->send();
        
            return "email sent successfully";
        } catch (Exception $e){
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}