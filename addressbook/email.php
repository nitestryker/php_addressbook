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
To: <input type="text" value="<?=$email;?>" size="25" maxlength="25" readonly="readonly" name="to" /></td>
</tr> 
<tr>
<td>From: <input type="text" value="<?=$uemail;?>" size="25" maxlength="25" readonly="readonly" />
</td></tr>
<tr>
<td>Subject: <input type="text" size="70" maxlength="40" name="subject" />
</td></tr>
<tr>
<td><textarea cols="65" rows="20" wrap="OFF" name="body"></textarea>
</td></tr>
<tr>
<td><input type="submit" value="Send" name="submit" /></form>&nbsp;<a href="" onClick="ajaxwin=dhtmlwindow.open('ajaxbox', 'ajax', 'cfull.php?cid=<?=$id;?>', 'Contact #<?=$id;?>', 'width=750px,height=500px,left=60px,top=1px,resize=0 scrolling=0'); return false">Go Back</a></tr></td>
</table>
</body>
</head>
