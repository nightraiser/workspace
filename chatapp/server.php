<?php
mysql_connect("localhost","root","livetolearn");
mysql_select_db("chatapp");
$message = $_GET['message'];
$sender=$_GET['sender'];
mysql_query("INSERT INTO chat (message,sender) values ('$message','$sender')") or die(mysql_error());
echo true;


?>