<?php
session_start();
$username = $_SESSION['username'];
$cid = $_GET['cid'];
include_once 'db.php';
$con = mysql_connect($server, $db_user, $db_pass);
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db($database_name, $con);
$query = mysql_query("delete FROM addressbook_$username where addressbookid =$cid")or die(mysql_error());
header('location:contacts.php');
echo "Contact #<?=$cid;?>has been deleted";
?>

