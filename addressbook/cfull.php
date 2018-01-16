<?php
session_start();
$username = $_SESSION['username'];
$cid = $_GET['cid'];
$contact = $cid;
include_once 'db.php';
$con = mysql_connect($server, $db_user, $db_pass);
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("dev", $con);
$sql= "SELECT * FROM addressbook_$username WHERE addressbookid = $cid";
$result = mysql_query($sql);
?>
<?
while ($row = mysql_fetch_array($result))
 {
$number = $row['addressbookid'];
$fn = $row['first name']; 
$ln = $row['last name'];
$em = $row['email'];
$hs = $row['home street'];
$hc = $row['home city'];
$st = $row['state'];
$zp = $row['zip']; 
$ct = $row['country'];
$hp = $row['home phone'];
$hf = $row['home fax'];
$cp = $row['cell phone'];
$ws = $row['work street'];
$wc = $row['work city'];
$wst = $row['work state'];
$wz = $row['work zip'];
$wct = $row['work country'];
$cmp = $row['company'];
$jt = $row['job title'];
$wp = $row['work phone'];
$wf = $row['work fax'];
$webp = $row['website'];
$web = $row['website'];
$email = $row['email'];
}
if ($fn == '') echo "<font color='red'>No Data for Contact # $cid";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <link title='' rel='stylesheet' type='text/css' href='styles.css' >
  <title>Viewing Contact #<?=$cid?></title>
  </head>
  <body bgcolor='#FFFFFFF'>

<!-- enclosing table -->
<table width="65%" border="0" cellpadding="0" cellspacing="0" bgcolor="white">
<tr><td colspan="2" style="padding: 1px 0px 1px 0px;"></td></tr>
<tr>
<td style="vertical-align: top;">
<!-- personal info -->
<table>
    <tr>
        <td class="mgFormTableLeft"><b>First Name:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$fn;?></div></B></td>
    </tr>
    <tr>

        <td class="mgFormTableLeft"><b>Last Name:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$ln;?></div></B></td>
    </tr>
     <tr>
        <td class="mgFormTableLeft"><b>E-mail:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><a href='mailto:<?=$email?>'><B><?=$em;?></a> <a href="#" onClick="ajaxwin=dhtmlwindow.open('ajaxbox', 'ajax', 'email.php?eid=<?=$email;?>&id=<?=$cid;?>', 'Email: <?=$e;?>', 'width=650px,height=500px,left=60px,top=1px,resize=0 scrolling=0'); return false"><img src="images/email.png"></a></div></B></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Address:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$hs;?></div></B></td>
    </tr>
    <tr>

        <td class="mgFormTableLeft"><b>City:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$hc;?></div></B></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>State:<b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$st;?></div></B></td>
    </tr>
<tr>
        <td class="mgFormTableLeft"><b>Zip:<b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$zp;?></div></B></b></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Country</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$ct;?></div></B></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Phone:<b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$hp;?></div></B></td>
        </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Fax</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$hf;?></div></b></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Mobile</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$cp;?></div></B></td>
    </tr>
  </table>
</td>
<td style="padding-left: 20px; vertical-align: top;">
<!-- company info -->
<table>
  <tr>
        <td class="mgFormTableLeft"><b>Work Address:</b></td>
    <td class="mgFormTableRight"><div class='urg6'><B><?=$ws;?></div></B></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>City</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$wc;?></div></B></div></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>State</b></td>

        <td class="mgFormTableRight"><div class='urg6'><B><?=$wst;?></div></b></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Zip</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$wz;?></div></b></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Country</b></td>

        <td class="mgFormTableRight"><div class='urg6'><B><?=$wct;?></div></b></td>
        
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Company:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$cmp;?></div></b></td>
    </tr>
    <tr>
        <td class="mgFormTableLeft"><b>Job Title:</b></td>

        <td class="mgFormTableRight"><div class='urg6'><B><?=$jt;?></div></b></td>
        </tr>
         <tr>
        <td class="mgFormTableLeft"><b>Work Phone:</b></td>

        <td class="mgFormTableRight"><div class='urg6'><B><?=$wp;?></div<b></td>
        </tr>
         <tr>
        <td class="mgFormTableLeft"><b>Work Fax:</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><?=$wf;?></div></b></td>
      </tr>
       <tr>
        <td class="mgFormTableLeft"><b>Website</b></td>
        <td class="mgFormTableRight"><div class='urg6'><B><a href="<?=$web;?>"><?=$webp;?></a></div</B></td>
        </form>
        </tr>
        </form>
        </table>
        <br>
        <br>

<!--- Start of the Control Menu -->        
<tr bgcolor="">
<td class="ctrlbox">
<center>
<br>
<font color="black" size="2pt"><b>
<table width="150" border="0" cellpadding="0" cellspacing="150" bgcolor=""><tr>Controls</tr>
</table>
<table width="150" border="0" cellpadding="0" cellspacing="550">
<tr></tr>
<td><form action="edit.php" method="post"><input type="hidden" name="field_1" size="2" value="<?=$cid;?>"><input type="submit" value="Edit"></form><td><form action="contacts.php" method="post"><input type="submit" value="Close Window"></form></table>
</tr>
</body>
</html>