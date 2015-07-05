<?php 

if(isset($_POST['comment']))
{

$uploaddir = './uploads/';
include('dbconfig.php');
session_start();
$q= mysql_query("SELECT max(pid) AS max_cols FROM posts");
$max = mysql_fetch_array($q);
$uploadfile = 'uploads/'.($max['max_cols']+1).".jpg";
echo $uploadfile;
echo '<pre>';
//move_uploaded_file($_FILES['snap']['tmp_name'], $uploadfile) or die($_FILES['snap']['error']);

if (move_uploaded_file($_FILES['snap']['tmp_name'], $uploadfile)) 
{
	chmod($uploadfile, 0777);
	mysql_query("INSERT INTO posts (name,comment) values ('$_SESSION[nuid]','$_POST[comment]')") or die(mysql_error());
   header("Location:home.php");
} 

else {
	echo $_FILES['snap']['error']."<br>";
    echo "Possible file upload attack!\n";
}



}



 ?>