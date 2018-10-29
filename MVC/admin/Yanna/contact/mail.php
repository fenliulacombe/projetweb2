<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$type = $_POST['type'];
	$message = $_POST['message'];
	$formcontent=" From: $name \n Type: $type \n Message: $message";
	$recipient = "webcolors11@gmail.com";
	$subject = "Messagerie Echange";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Le message est envoyé. Merci!" . " -" . "<a href='contact.php' style='text-decoration:none;color:green;'> Retour</a>";
?>
