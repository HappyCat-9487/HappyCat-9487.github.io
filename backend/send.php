<?php
require 'includes/send_email.php';  // Include the send_email.php file

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new SendEmail();  // Create a new SendEmail object

    $mail->sendEmail($name, $email, $subject, $message);  // Call the sendEmail method
}