<?php

mysql_connect("localhost","root","livetolearn") or die(mysql_error());
mysql_select_db("atm");

if(isset($_POST['login']))
{
	setcookie("firstname", $_POST['firstname']);
	setcookie("lastname",$_POST['lastname']);
	setcookie("email",$_POST['email']);
	header("Location:verbal.html");

}
if(isset($_POST['questions']))
{

$data = [];
$id = 1;
$q1 = mysql_query("SELECT * FROM verbal  ORDER BY RAND() LIMIT 25") or die(mysql_error());
while(($res=mysql_fetch_assoc($q1))!==false)
{
$data[$id]  = array('qid' => $res['qid'],'question' => $res['qs'],'op1' => $res['op1'],'op2' => $res['op2'],'op3' => $res['op3'],'op4' => $res['op4'],'ans' => $res['ans'], );
$id=$id+1;
}

echo json_encode($data);
}

if(isset($_POST['score']))
{
$score=$_POST['score'];
$id = $_COOKIE['firstname']." ".$_COOKIE['lastname'];
$email = $_COOKIE['email'];

$mydate=getdate(date("U"));
$t ="$mydate[year]/$mydate[mon]/$mydate[mday]";

mysql_query("INSERT INTO result2 (fname,email,score,day) VALUES ('$id','$email',$score,'$t')") or die(mysql_error());
echo "done";
}

if(isset($_POST['tid']))
{
	$tid = $_POST['tid'];
$para=$_POST['para'];
$id = $_COOKIE['firstname']." ".$_COOKIE['lastname'];
$email = $_COOKIE['email'];

 $sql = mysql_query("UPDATE result2 SET para = '$para', tid = $tid  WHERE email='$email'") or die(mysql_error());

//mysql_query("INSERT INTO result2 (fname,email,score,day) VALUES ('$id','$email',$score,'$t')") or die(mysql_error());
echo "done";
}


?>