<?php
$name = $_POST['name'];
$email = $_POST['email'];
$call = $_POST['call'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent=" From: $name \n Add to Mailing List: $call \n Message: $message";
$recipient = "cbolorinos@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Location: thankyou.html";
?>
