<!DOCTYPE html>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false" >
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<noscript>
			
		
			
		
		</noscript>
<script src="js/shorcuts.js"></script>
</head>
<body class="bdbg" style="background-image:url(images/flashbanner1.jpg)" >
<div class="mask"></mask>
<script>
shortcut.add("F12",function() {
	alert("Smartie!! even this key is blocked");
});
shortcut.add("Ctrl+S",function() {
	alert("Smartie!! You cant save the page");
});
</script>
	<div class="gradientBoxesWithOuterShadowssmall">


<header3><h3 align="center"> MRCET's LMS </h3></header3><hr><br>
<?php $stat="";  ?>
<br><br>
	<form id='myform'  method='post' align='center' >
	<p style="color:red;">Login failed!!, invalid username/password</p>
<img src="images/Dummy_user.png" height="30px" width="30px" />&nbsp;&nbsp; <input type="text" name="id" class="span3"><br>
<img src="images/Access_key.png" height="30px" width="30px" />&nbsp;&nbsp; <input type="password" name="pass" class="span3"> </textarea><br>
<input type='submit' value="Login" name="ok" class="button">
</form>
<?php $stat ?>
</div>
<?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$id=$_POST['id'];
$pass=$_POST['pass'];
$q=$q=mysql_query("SELECT * FROM users WHERE sid LIKE '$id'  AND paswd ='$pass' ORDER BY id DESC") or die("wrong query");                                              
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


}



?>


</body>
</html>
