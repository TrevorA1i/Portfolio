<?php
// Get the form fields, removes html tags and whitespace.
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

// Set the recipient email address.
$recipient = "ali.p.trevor@outlook.com";

// Set the email subject.
$subject = "New message from $name";

// Build the email content.
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Message:\n$message\n";

// Build the email headers.
$email_headers = "From: $name <$email>";

// Send the email.
if (mail($recipient, $subject, $email_content, $email_headers)) {
    // If the email was sent successfully, redirect to the thank you page.
    header("Location: thank-you.html");
} else {
    // If the email failed to send, display an error message.
    echo "Oops! Something went wrong and we couldn't send your message.";
}
?>