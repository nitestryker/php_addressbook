<?PHP
session_start();
include_once 'db.php';
$link = mysql_connect($server, $db_user, $db_pass)
or die ("Could not connect to mysql because ".mysql_error());

// select the database
mysql_select_db($database)
or die ("Could not select database because ".mysql_error());

// insert the data
$insert = mysql_query("insert into $table values ('".$_POST['addressbookid']."', '".$_POST['FirstName']."','".$_POST['LastName']."', '".$_POST['Email']."', '".$_POST['Home_Street']."','".$_POST['Home_City']."', '".$_POST['State']."', '".$_POST['Zip']."','".$_POST['Country']."', '".$_POST['Home_Phone']."', '".$_POST['Home_Fax']."', '".$_POST['Cell_Phone']."', '".$_POST['Work_Street']."', '".$_POST['Work_City']."', '".$_POST['Work_State']."', '".$_POST['Work_Zip']."', '".$_POST['Work_Country']."', '".$_POST['Company']."', '".$_POST['Job_Title']."', '".$_POST['Work_Phone']."', '".$_POST['Work_Fax']."', '".$_POST['Website']."')")
or die ("Could not select database because ".mysql_error());
// print a success message
echo "contact added";
sleep(3);
header('location:contacts.php'); 
?>
