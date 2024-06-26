<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["user_name"];
    $email = $_POST["user_email"];
    $message = $_POST["user_message"];

    
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    $to = "588687@edu.rocmn.nl"; 
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Verzend de e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending the message. Please try again later.";
    }
    
} else {
    echo "Invalid request.";
}
?>

