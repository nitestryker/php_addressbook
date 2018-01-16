<?php
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['body'];
$from = $_POST['from'];
$headers = "From: $from";
mail($to,$subject,$message,$headers);
include 'contacts.php';
echo "<font color='red'><i>E-mail Sent.</i></font>";
header( 'refresh: 3; url=contacts.php' );
?>