<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // קבלת נתונים מהטופס
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // כתובת המייל שאליה יישלח המייל
    $to = "asheryungryiz@gmail.com"; // החלף את זה לכתובת המייל שלך
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    // שליחת המייל
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
