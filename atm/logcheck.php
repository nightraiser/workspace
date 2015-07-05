<?php
if(isset($_POST['uid']))
{
	require("dbconnect.php");
	$uid = $_POST['uid'];
	$pwd = md5($_POST['pwd']);
	$q = mysql_query("SELECT * FROM users WHERE uid = '$uid' AND password = '$pwd'") or die(mysql_error());
	if(mysql_num_rows($q)==1)
	{
			$r = mysql_fetch_assoc($q);
			setcookie("userid",$r['uid']);
			if($r['status']=="admin")
			{
				header("Location:admin.php");

			}
			else
			{
				header("Location:instruction.php?id=".md5("verbal")."");

			}
	}
	else
	{
		header("Location:index.php");
	}
}



?>