<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'ilesanmi3451@gmail.com';

// Set the email subject
$subject = 'New message from ' . $name;

// Set the email message
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  // Redirect to a thank-you page
  header('Location: thank-you.html');
} else {
  // Display an error message
  echo 'There was an error sending the email.';
}
?>