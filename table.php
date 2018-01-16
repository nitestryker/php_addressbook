<?php
$username = $_POST['username'];
include 'db.php';
// Create table
$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
mysql_query("CREATE TABLE `addressbook_$username` (
	`addressbookid` int(11) NOT NULL auto_increment,
	`first name` VARCHAR(255) NOT NULL,
	`last name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`home street` LONGTEXT NOT NULL,
	`home city` VARCHAR(255) NOT NULL,
	`state` VARCHAR(255) NOT NULL,
	`zip` VARCHAR(255) NOT NULL,
	`country` VARCHAR(255) NOT NULL,
	`home phone` VARCHAR(255)  NOT NULL,
	`home fax` VARCHAR(255)  NOT NULL,
	`cell phone` VARCHAR(255) NOT NULL,
	`work street` VARCHAR(255) NOT NULL,
	`work city` VARCHAR(255) NOT NULL,
	`work state` VARCHAR(255) NOT NULL,
	`work zip` VARCHAR(255) NOT NULL,
	`work country` VARCHAR(255) NOT NULL,
	`company` VARCHAR(255) NOT NULL,
	`job title` VARCHAR(255) NOT NULL,
	`work phone` VARCHAR(255)  NOT NULL,
	`work fax` VARCHAR(255) NOT NULL,
	`website` LONGTEXT NOT NULL, PRIMARY KEY  (`addressbookid`))")
 or die(mysql_error()); 
mysql_close($connection);
?> 

