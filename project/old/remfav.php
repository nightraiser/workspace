<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
/*$f1=mysql_query("SELECT * FROM favs") or die("No happening");
while(($res=mysql_fetch_array(f1))!==false)
{
if(($res['studid']==$_SESSION['sid'])&&($res['dbid']==$_GET['dbid']))
{
echo"<script>alert('You already liked it!!')</script>";
header('Location:dash.php');
}
}*/
$dbs=$_GET['dbid'];
$fsub=mysql_query("DELETE FROM favs WHERE studid='$_SESSION[sid]' AND dbid='$_GET[dbid]'") or die("insertion fail");
header("Location:article.php?dbid=$dbs") or die("redirection fail");
?>
