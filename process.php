<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Configure your email settings
    $to = "sig97ne@gmail.com"; // Replace with your email address
    $subject = "Contact Us Form Submission from $name";
    $headers = "From: $email";
    
    // Send the email using the built-in mail function (make sure your server supports it)
    $mailSent = mail($to, $subject, $message, $headers);
    
    if ($mailSent) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
