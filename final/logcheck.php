<?php

$id = $_POST['login'];
$pass = md5($_POST['password']);
require('config.php');
$q=mysql_query("SELECT * FROM users WHERE username LIKE '$id'  AND password ='$pass' ") or die("wrong query");                                              
if(mysql_num_rows($q)==1)
{
	$res= mysql_fetch_assoc($q);

	setcookie("userid",$res['userid'],time()+10800);




$str = "Location:profile.php?pid=" .$res['userid'];
header($str);
}

else
{
	header("Location:logfail.php");
}




?>