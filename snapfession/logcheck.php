<?php

if(isset($_POST['id']))
{
	$pass = substr(md5($_POST['id']), 0,5);
	if($pass == $_POST['password'])
	{
		session_start();
		$_SESSION['uid']=md5($_POST['id']);
		$_SESSION['nuid']=$_POST['id'];
		echo "done";
	}
	else
	{
		echo "not done";
	}
}


?>