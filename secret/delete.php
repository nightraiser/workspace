<html>
<head>
<title>Time out</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="header">
<br>
<center><span class="logo">&nbsp;S3CR3T</span></center><hr>
<p>A free portal to share your secrets </p>
</div>

<?php
session_start();
mysql_connect('localhost','root','livetolearn');
mysql_select_db('secret');
mysql_query("DELETE FROM secrets
WHERE identity = '$_GET[mid]' OR identity = '$_SESSION[mid]';
") or die("error");
echo"<div class='dltmessage' ><h2>Message is deleted</h2> <hr> <br><br> <center><form action='index.php'><input type=submit class='btn btn-primary' value='OK'></center> </div>";

?>
</body>
</<html>
