<?php


if(isset($_COOKIE['userid']))
{
	setcookie("userid","done",time()-10);
	echo "logged out";
}
header('Location:index.php');




?>