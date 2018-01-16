<? 
$server = 'localhost';
$db_user = 'admin';
$db_pass = 'password';
$database_name = 'dev';

/* Database Stuff, do not modify below this line */

$connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd") 
	or die ("Couldn't connect to server.");
$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
?>