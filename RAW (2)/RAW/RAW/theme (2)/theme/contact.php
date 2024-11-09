<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove any unnecessary whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["mail"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Email settings
    $to = "ajithshanagonda@gmail.com";
    $subject = "Contact Form Submission: $subject";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Create the email content
    $email_content = "<h1>New Contact Form Submission</h1>";
    $email_content .= "<p><strong>Name:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Message:</strong><br>$message</p>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
