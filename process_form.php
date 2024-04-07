<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set recipient email address
    $to = "serions@hotmail.com";
    
    // Set email subject
    $subject = "New Contact Form Submission";
    
    // Construct email message
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you! We will get to you as soon as possible.";
    } else {
        echo "Error: Unable to send email. Please try again later.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: booking.html");
    exit;
}
?>
