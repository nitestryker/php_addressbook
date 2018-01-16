<?php
include 'contacts.php';
/* redirect */
function redirect(){
header('refresh: 3; url=http://www.example.com/abproject/');
echo "Please wait.. Logging you out";
}
redirect();
 ?> 
