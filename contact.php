<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$organization = $_POST['organization'];
$formcontent=" $name from $organization \n Message: $message";
$recipient = "chizwil@gmail.com";
$subject = $_POST['subject'];;
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>