<?php
	$name = $_POST['firstName'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = "Randall_gosnell@yahoo.com";
	$email_subject = "New Form Submission";
	$email_body = "You have recieved a new message from the user $name.\n"."Here is the message:\n $message";

	$to ="Randall_gosnell@Yahoo.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);

?>