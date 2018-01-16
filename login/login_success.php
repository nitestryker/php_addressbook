<?php
session_start();
session_register("count");  
$username = $_SESSION['username'];
header('Location:http://www.example.com/abproject/addressbook');
$count = 1;
if(!isset($count)) {

  }

$count++;
echo $username;
echo "Welcome ". $_SESSION['first_name'] ." ". $_SESSION['last_name'] ."! You have made it to the members area!<br /><br />";
echo "<br>";
echo "You have been to this page $count times";
echo "<br>";
?>
<a href="<?session_destroy();?>">Logout<a>
<BODY>
</HTML>