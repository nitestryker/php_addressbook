<body>
<form  method="post" action="<?php echo $PHP_SELF;?>">
txt:&nbsp;<input type="text" name="txt"><input type="submit" value="search">
</form>
</html>
<?php
$text =$_POST['txt'];
function encrypt($text) {
$encrypt = md5($text);
echo $encrypt;
}
if (isset($text)) {
encrypt($text);
}

?>
