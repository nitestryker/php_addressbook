<?php
session_start();
$username = $_SESSION['username'];
$uemail = $_SESSION['email_address']; 
$email = $_GET ['eid'];
$id = $_GET['id'];
?>
<html>
<head>
<body>
<br />
<form action="send.php" method="post">
<table>
<tr>
<td>
&nbsp; &nbsp; To: <input type="text" value="<?=$email;?>" size="25" maxlength="25" readonly="readonly" name="to" /></td>
</tr> 
<tr>
<td>From: <input type="text"  name="from" value="<?=$uemail;?>" size="25" maxlength="25" readonly="readonly" />
</td></tr>
<tr>
<td>Subject: <input type="text" size="70" maxlength="40" name="subject" />
</td></tr>
<tr>
<td><textarea cols="65" rows="20" wrap="OFF" name="body"></textarea>
</td></tr>
<tr>
<td><input type="submit" value="Send" name="submit" /></form>&nbsp;</tr></td>
</table>
</body>
</head>
