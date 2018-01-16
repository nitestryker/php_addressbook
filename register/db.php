<? 
$dbhost = 'localhost';
$dbusername = 'root';
$dbpasswd = '';
$database_name = 'dev';

/* Database Stuff, do not modify below this line */

$connection = mysql_connect("$dbhost","$dbusername","$dbpasswd") 
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
?>