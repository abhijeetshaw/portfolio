<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address where you want to receive the form data
    $recipient = "abhijeetshaw2@gmail.com";
    
    // Set the subject of the email
    $subject = "New Contact Form Submission from $name";
    
    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";
    
    // Set the email headers
    $headers = "From: $email";
    
    // Send the email
    $mail_sent = mail($recipient, $subject, $email_content, $headers);
    
    // Check if the email is sent successfully
    if ($mail_sent) {
        // Redirect back to the contact form with a success message
        header("Location: contact.html?status=success");
        exit;
    } else {
        // Redirect back to the contact form with an error message
        header("Location: contact.html?status=error");
        exit;
    }
}
?>



















<nav>
    <div class="left"><strong>Abhijeet's Portfolio</strong></div>
    <div class="right"></div>
    <!-- Add the "hamburger" icon -->
    <i class="fas fa-bars" onclick="toggleMobileMenu()"></i>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#about-me">About</a></li>
        <li><a href="#" onclick="showPopup('services')">Services</a></li>
        <li><a href="#" onclick="showPopup('projects')">Projects</a></li>
        <li><a href="Contact us.html">Contact Me</a></li>
    </ul>
</nav>