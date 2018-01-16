<HTML>
<form action="hash.php" method="post">
<center><br>
<input tpye="text" name="field_1" size="60"><br>
<input type="submit" value="Encrypt">
</center>
</form>
</html>
<?php
$password = $_POST['field_1'];
$encrypt = md5($password);
echo "<center>";
print $encrypt;
echo "</center>";
?>
