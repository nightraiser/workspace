<!DOCTYPE html>
<html>
<head>
	<title>ATM</title>
</head>
<body>
<form action="login.php" method="post">
<table>
<tr>
<td>Userid</td>
<td>
	<input type="text" name="sid">
	</td>
</tr>
<tr>
<td>Password</td>
<td>
	<input type="password" name="pswd">
	</td>
	</tr>
<tr>
<td>
<input type="submit" name="submit" value="Login">
</td>
</tr>
	
</table>



</form>


<?php
if(isset($_POST['submit']))
{
mysql_connect("localhost","root","livetolearn") or die("failed to connect");
mysql_select_db("atm");


$uid = $_POST['sid'];
$p = md5($_POST['pswd']);

$q=mysql_query("SELECT * FROM users WHERE uid = '$uid' AND password = '$p'") or die("query");
if(mysql_num_rows($q)==1)
{
setcookie("session_id",md5($uid),time()+10800);

}
else
{

echo "failed";
}
$res= mysql_fetch_row($q);
echo $res[2];
if($res[2]=="student")
{
header('Location:exam.php');

}
else
{
header('Location:admin.php');

}
}

?>
</body>
</html>
