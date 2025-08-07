<?php
if (isset($_POST['submit'])) {
    // Get form data
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Receiver email
    $to = "amna.rizwan127@gmail.com"; 

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank you page or show success
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Email sending failed. Please try again.";
    }
}
?>