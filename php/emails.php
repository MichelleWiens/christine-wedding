<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['attending'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$attending = $_POST['attending'];

// create email body and send it	
$to = 'christinemontford@hotmail.com'; // put your email
$email_subject = "RSVP From:  $name";
$email_body = "You have received an RSVP. \n\n".
				  "Name: $name\nEmail: $email_address\nAttending: $attending";
$headers = "From: rsvp@christineandtrevor2015.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>