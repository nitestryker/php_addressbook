<?php
session_start();
include_once 'db.php';
$link = mysql_connect($server, $db_user, $db_pass);
mysql_select_db($db);

require 'export.php';

$table="addressbook_$username"; // this is the tablename that you want to export to csv from mysql.

exportMysqlToCsv($table);
?>
