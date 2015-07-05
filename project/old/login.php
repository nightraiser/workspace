<!DOCTYPE html>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false" >
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<noscript>
			
		
			
		
		</noscript>
<script src="js/shorcuts.js"></script>
</head>
<body class="bdbg" >

<div class="mask">

</div>
<img class="mimg" src="images/flashbanner1.jpg">
<header3 ><h3>Malla Reddy College of Engieering and Technology</h3><h4>Learning Management System</h4></header3>
<script>
shortcut.add("F12",function() {
	alert("Smartie!! even this key is blocked");
});
shortcut.add("Ctrl+S",function() {
	alert("Smartie!! You cant save the page");
});
</script>
	<div class="gradientBoxesWithOuterShadowssmall">


<header3><h3 align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LMS's Login </h3></header3><hr><br>
<?php $stat="";  ?>
<br><br>
	<form id='myform'  method='post' align='center' >

<img src="images/Dummy_user.png" height="30px" width="30px" />&nbsp;&nbsp; <input type="text" name="id" class="span3"><br>
<img src="images/Access_key.png" height="30px" width="30px" />&nbsp;&nbsp; <input type="password" name="pass" class="span3"> </textarea><br>
<input type='submit' value="Login" name="ok" class="buttonred">
</form><br><br><br><br><br>
<center><strong>Designed by:</strong> <a href="https://www.facebook.com/Ramblerssolutions">Ramblers Solutions</a></center>
</div>
<?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$id=$_POST['id'];
$pass=md5($_POST['pass']);
$q=$q=mysql_query("SELECT * FROM users WHERE sid LIKE '$id'  AND paswd ='$pass' ORDER BY id DESC") or die("wrong query");     
if(isset($_POST['id']))
{                                         
if(mysql_num_rows($q)==1)
{
$res=mysql_fetch_assoc($q);
session_start();
$_SESSION['sid']=$res['sid'];
$_SESSION['name']=$res['name'];
$_SESSION['status']=$res['status'];
$_SESSION['year']=$res['year'];
$_SESSION['branch']=$res['branch'];
$_SESSION['bell']=true;

header('Location:index.php');

}
else
{

header('Location:logfail.php');
}
}


?>


</body>
</html>
