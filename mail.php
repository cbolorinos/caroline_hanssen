<?php
$name = $_POST['name'];
$email = $_POST['email'];
$call = $_POST['call'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent=" From: $name \n Email: $email \n Add to Mailing List: $call \n Message: $message";
$recipient = "caroline.hanssen@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: thank_you.html');
exit();
?>