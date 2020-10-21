<!-- <?php
$name = $Post['name'];
$email = $Post['email'];
$message = $Post['message'];

$email_form = 'rivercpadgett@gmail.com';
$email_subject = 'New Contact Sub';

$email_body = "Name: $name .\n". 
                "Email: $email.\n". 
                "Message: $message.\n"

$to = "padgettcriver@gmail.com";

$headers = "From: $email \r\n";
$headers = "Reply to: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");



?> -->

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>