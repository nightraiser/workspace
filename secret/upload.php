<?php
$sm=$_POST['smail'];
$rm=$_POST['rmail'];
$m = $_POST['message'];
$t = $_POST['secs'];
$ids=md5($m);
//mysql_connect('localhost','root','livetolearn') or die("no con");
include("dbconfig.php");
//mysql_select_db('secret') or die("no db");
if($_POST['smail']!="")
{
	$newfilename = $ids.".".end(explode('.', $_FILES['file']['name']));
	//echo $newfilename;
	move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $newfilename) or die("error");
mysql_query("INSERT INTO secrets (identity,sender,reciever,message,tsecs,fflag,fname) VALUES ('$ids','$sm','$rm','$m','$t',true,'$newfilename')") or die("server busy");
header("Location:link.php?id=$ids");
}

?>