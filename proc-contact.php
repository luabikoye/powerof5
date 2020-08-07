<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if(!$name || $name == 'Name' || !$email || $email == 'Email'  || !$message || $message == 'Message' )
{
	$error = 'Kindly fll all fields with asterisk(*)';
	include('contact-us.php');
	exit;
}

$to = 'info@powerof5ng.com';
$subject = 'Enquiries';
$content = 'Contact Person: '.$name."\n"
			.'Email: '.$email."\n"
			.'Phone: '.$phone."\n"
			.'Message: '."\n"
			.'-------------'."\n"
			.$message;
			
$header = "From: Powerof5 Page <noreply@powerof5ng.com>"."\n";
$header .= "Reply-To: $email"."\n";

mail($to,$subject,$content,$header);

$correct = 'Thank you, your message has been received.';
	include('contact-us.php');
	exit;

?>