<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" media="all" href="dhtmlwindow.css"/>
<link title='' rel='stylesheet' type='text/css' href='style2.css' >
<link rel="stylesheet" href="windowfiles/dhtmlwindow.css" type="text/css" />
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<script type="text/javascript">
var highlightbehavior="TD"

var ns6=document.getElementById&&!document.all
var ie=document.all

function changeto(e,highlightcolor){
source=ie? event.srcElement : e.target
if (source.tagName=="TABLE")
return
while(source.tagName!=highlightbehavior && source.tagName!="HTML")
source=ns6? source.parentNode : source.parentElement
if (source.style.backgroundColor!=highlightcolor&&source.id!="ignore")
source.style.backgroundColor=highlightcolor
}

function contains_ns6(master, slave) { //check if slave is contained by master
while (slave.parentNode)
if ((slave = slave.parentNode) == master)
return true;
return false;
}

function changeback(e,originalcolor){
if (ie&&(event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="ignore")||source.tagName=="TABLE")
return
else if (ns6&&(contains_ns6(source, e.relatedTarget)||source.id=="ignore"))
return
if (ie&&event.toElement!=source||ns6&&e.relatedTarget!=source)
source.style.backgroundColor=originalcolor
}
</script>
<?php
session_start();
$first =$_SESSION['first_name'] ;
$last =$_SESSION['last_name']; 
$username = $_SESSION['username'];
?>
<title><?=$first;?> <?=$last;?>'s addressbook</title>
</head>
<body>
<script type="text/javascript" src="windowfiles/dhtmlwindow.js">
</script>
<?php
session_start();
$username = $_SESSION['username'];
echo "<b>Hello, $first</b>";
?>
<a href="logout.php"> Logout</a>
<br>
<?
include_once 'db.php';
$con = mysql_connect($server, $db_user, $db_pas);
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("dev", $con);

$sql= "SELECT * FROM addressbook_$username WHERE addressbookid = addressbookid";

$result = mysql_query($sql);
?>
<BODY BGCOLOR="white">
<font color="red"><i></i></font><br>
<table width="725" id="multipage_table" border="0">
                <tr id="multipage_table_SHOW_AGAIN" bgcolor="#87CEFA">
  <nobr><span class="caption"></span>
  <tr class="multipage" id="multipage_table_topTR" bgcolor = "#87CEFA">
   <td nowrap width="30" id="multipage_table_topTD"><span class="whitetext_md">&nbsp;Id #</span></td>
    <td nowrap width="35"><span class="whitetext_md">First Name:</span></td>
    <td nowrap width="40"><span class="whitetext_md">Last Name:</span></td>
    <td nowrap width="45"><span class="whitetext_md">Email:</span></td>
    <td nowrap width="50"><span class="whitetext_md">Phone #</span></td>
    <td nowrap width="55"><span class="whitetext_md">Cell Phone #</span></td>
    <td nowrap width="59"><span class="whitetext_md">Delete</span></td>
     
     </tr>
<form action='cfull.php' method='get'>
<?
while ($row = mysql_fetch_array($result))
 {
$e = $row['email'];
$col = $row['addressbookid'];
echo "<tr class='report'>";
?>
<td class='adjacent'nowrap="true"><div class='urg5'><font size="2"><a href="" onClick="ajaxwin=dhtmlwindow.open('ajaxbox', 'ajax', 'cfull.php?cid=<?=$col;?>', 'Contact #<?=$col;?>', 'width=600px,height=460px,left=60px,top=1px,resize=0 scrolling=0'); return false"><?=$col;?></a></div></td>
<?
 echo "<td class='adjacent' nowrap>" . $row['first name'] . "</td>";
 echo "<td class='adjacent' nowrap>" . $row['last name'] . "</td>";
 echo "<td class='adjacent' nowrap><a href='mailto:$e'>" . $row['email'] . "</a>";
 ?>
 <a href="#" onClick="ajaxwin=dhtmlwindow.open('ajaxbox', 'ajax', 'email2.php?eid=<?=$e;?>', 'Email: <?=$e;?>', 'width=600px,height=520px,left=60px,top=1px,resize=1 scrolling=0'); return false"><img src="images/email.png"></a></td>
 <?
 echo "<td class='adjacent' nowrap><font size='1'>"  . $row['home phone'] . "</td>";
 echo "<font size='5'><td class='adjacent' nowrap>"  . $row['cell phone'] . "</td>";

  echo "<font size='5'><td class='adjacent' nowrap><a href='del.php?cid=$col' alt='delete contact<?=$cid;?>'><img src='images/delete.png'></a></td>";
 echo "</tr>";
 }
?>
<table border="0">
<tr>
<th><a class="sample_attach" href="add.html"><img src="images/add.png"> <b>Add Contact</b></a><td> <a class="sample_attach" href="econtacts.php"><img src="images/disk.png"> <b>Export Contacts</b></a>
</table>
<script type="text/javascript">
at_attach("sample_attach_menu_parent", "sample_attach_menu_child", "hover", "y", "pointer");
</script><td>
</div>