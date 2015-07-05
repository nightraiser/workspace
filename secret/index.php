<html>
<head>
<title>S3cret</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body bgcolor="black">
<header>
<center>
<h1>S3CR3T</h1>
<h4>&quot;Where secrets are kept really a secret&quot;</h4>
</center>
</header>
<BR>
<br>

<div class="gradientBoxesWithOuter">
<h3>Send your information</h3>
<hr>
<form action="index.php" method="post">
Sender email: <input type="text" name="smail"><br>
Receiver email: <input type="text" name="rmail"><br>
Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea rows="10" cols="30" name="message"></textarea><br>
Time in secs:<select name="secs">
<option value="0">User defined</option>
<option value="60">60/<option>
<option value="30">30</option>
<option value="15">15</option>
<option value="10">10</option>
<option value="5">5</option>

</select>
<br>
<br>
<center>
<input class="button"type="submit" value="Send" ></center>
</form>
</div>
<div class="content">
<img height="500px" width="500px" src="Top-Secret-SEO-Tips.png"></div>
</div>
<?php
$sm=$_POST['smail'];
$rm=$_POST['rmail'];
$m = $_POST['message'];
$t = $_POST['secs'];
$ids=md5($m);
mysql_connect('localhost','root','livetolearn') or die("no con");
mysql_select_db('secret') or die("no db");
if($_POST['smail']!="")
{
mysql_query("INSERT INTO secrets (identity,sender,reciever,message,tsecs) VALUES ('$ids','$sm','$rm','$m','$t')") or die("server busy");
header("Location:view.php?id=$ids");
}
if($sm!="")
{
mysql_connect('localhost','root','livetolearn') or die("no con");
mysql_select_db('secret') or die("no db");

}
?>
<center>
<div class="footer">
<center><p class=logobottom>&copy; 2014 A product from <b>Ramblers solutions<b></p><center>
</center>
</body>
</html>
