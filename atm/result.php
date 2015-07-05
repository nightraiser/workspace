<?php
if(isset($_GET['section'])&&isset($_GET['score']))
{
require("dbconnect.php");

$sec = $_GET['section'];
$score=$_GET['score'];
$id = $_COOKIE['userid'];

$mydate=getdate(date("U"));
$t ="$mydate[year]/$mydate[mon]/$mydate[mday]";

mysql_query("INSERT INTO result (uid,section,score,day) VALUES ('$id','$sec',$score,'$t')") or die(mysql_error());
if($sec=="verbal")
{
	header("Location:instruction.php?id=".md5("quants")) or die;

}
elseif ($sec=="quants")
 {
	header("Location:instruction.php?id=".md5("logical"));
}
elseif ($sec=="logical")
 {
	header("Location:instruction.php?id=".md5("technical"));
}
elseif ($sec=="technical")
 {
	header("Location:finish.html");
}
}
else
{
	echo "not done";
}

?>