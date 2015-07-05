<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$messing = htmlspecialchars($_POST['art']);
$date = date('Y-m-d');
$bes=$_SESSION['name'];
$z=$_GET['dbid'];
if(isset($_POST['artpost']))
{
$bes=$_SESSION['name'];

$fsub=mysql_query("INSERT INTO articles (dbid,message,postby,time) VALUES ('$z','$messing','$bes','$date')") or die("insertion fail");
$cq=mysql_query("SELECT aid FROM comments WHERE aid LIKE '$res[aid]' ORDER BY aid DESC") or die("Gone");
$_SESSION['aid']=$cq;

echo"<h1>$_SESSION[aid]</h1>";
header("Location:article.php?dbid=$z");

}
