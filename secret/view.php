<html>
<head>
<title>Message</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
	
body
{
	background: black;
}
.panel p
{
	padding: 5px;
}
</style>
<?php
mysql_connect('localhost','root','livetolearn');
mysql_select_db('secret');
$q=mysql_query("SELECT * FROM secrets WHERE identity = '$_GET[id]'") or die("query died");
$res1=mysql_fetch_assoc($q);
session_start();
$_SESSION['mid']=$_GET['id'];

?>
<script>
function timer()
{

var foo= <?php echo($res1[tsecs] )?>;
if(foo==0)
{

return 0;
}
var str = "delete.php";
setInterval(function()
{
	if(foo>=0)	
		{
			document.getElementById("101").innerHTML="<center><b>Timer</b><b>"+foo+"</b></center>";
			
			foo=foo-1;
		}
	if(foo==0)
	{
			
			
			document.getElementById('popup-sig').style.display = 'block';


	}
},1000);
}
</script>
<body onload="timer();">
<div class="header">
<br>
<center><span class="logo">&nbsp;S3CR3T</span></center><hr>
<center><h2>A free portal to share your secrets </h2></center>
</div>
<div id="popup-sig" class="popup-info">
<center><h1>Time out..!!</h1></center>
<hr>
<br>
<br>
<br><br>
<form action="delete.php" method="post">


<center><input class="btn btn-primary"type="submit" value="Next" ></center>

<br>
<br>
</form>
</div>
<div class='row' >
<div  class="col-md-6 col-md-offset-3" >
<div class="panel panel-primary">
<div class="panel-heading">Your message <i id="101"></i></div>

<?php
if( $res1['tsecs'] == 0)
{
echo "<div id='100'> <hr><p>$res1[message]";
if($res1['fflag']==1)
{
	echo "<br><a href='uploads/$res1[fname]' download>Download</a>";
}
echo "</p>";
echo"<div class='panel-footer'>From : <B>$res1[sender] <a href='delete.php?id=$res[identity]' class='btn btn-primary pull-right'>Delete</a></div><br></div>";
}
else
{
echo "<p>$res1[message]</p>From : <B>$res1[sender]</div>";
}
?>
</div>
</div>
</div>
</body>
</html>
