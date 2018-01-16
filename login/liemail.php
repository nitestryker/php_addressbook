<?php
$email2 = "email@example.com";
$subject2 = "$username, has logged into the system";
$message2 = "$username, has logged in.
The User Below has logged into the system 
echo date('l jS \of F Y h:i:s A');

Userid: $userid
First Name: $first_name
Last Name: $last_name
Email Address:$email_address 
Info: $info

	This is an automated response, please do not reply!";
mail ($email2, $subject2, $message2, "From: nitestryker Webmaster<admin@mydomain.com>\nX-Mailer: PHP/" . phpversion());
?>
