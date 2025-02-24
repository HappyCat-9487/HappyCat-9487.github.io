<?php
require 'includes/send_email.php';  // Include the send_email.php file

header("Content-Type: application/json"); // To tell the browser that it is JSON

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new SendEmail();  // Create a new SendEmail object

    $result = $mail->sendEmail($name, $email, $subject, $message);  // Call the sendEmail method

    if(strpos($result, "successfully") != false) {
        echo json_encode(["success" => true, "message" => "Email sent successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => $result]);
    } 
} else {
    echo json_encode(["success" => false, "message" => "Invalid request."]);
}