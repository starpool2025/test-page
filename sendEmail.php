<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email settings
    $to = 'michaelurbacz@icloud.com'; // Replace with your email address
    $subject = 'New Message from Contact Form';
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $body = "You have received a new message from your website contact form.\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. We'll get back to you shortly.";
    } else {
        echo "Sorry, something went wrong and we couldn't send your message.";
    }
}
?>