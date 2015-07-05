<?php

//if(isset($_POST['lid'])&&isset($_POST['pwd']))
{
	session_start();
	$_SESSION['user']=$_POST['lid'];
	header("Location:newindex.php");
}


?>

