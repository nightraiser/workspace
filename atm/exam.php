
<?php

mysql_connect("localhost","root","livetolearn") or die(mysql_error());
mysql_select_db("atm");

$q1 = mysql_query("SELECT * FROM ".$_POST['section']." WHERE mode = 'we' ORDER BY RAND() LIMIT 25") or die(mysql_error());
$q2 = mysql_query("SELECT * FROM ".$_POST['section']." WHERE mode = 'medium' ORDER BY RAND() LIMIT 13") or die(mysql_error());
$q3 = mysql_query("SELECT * FROM ".$_POST['section']." WHERE mode = 'hard' ORDER BY RAND() LIMIT 5") or die(mysql_error());

$data = array();


while(($res=mysql_fetch_assoc($q1))!==false)
{
$data[]= $res['qs']."@#$".$res['op1']."@#$".$res['op2']."@#$".$res['op3']."@#$".$res['op4']."@#$".$res['ans']."@#$".$res['mode'];

}


while(($res=mysql_fetch_assoc($q2))!==false)
{
$data[]= $res['qs']."@#$".$res['op1']."@#$".$res['op2']."@#$".$res['op3']."@#$".$res['op4']."@#$".$res['ans']."@#$".$res['mode'];

}


while(($res=mysql_fetch_assoc($q3))!==false)
{
$data[]= $res['qs']."@#$".$res['op1']."@#$".$res['op2']."@#$".$res['op3']."@#$".$res['op4']."@#$".$res['ans']."@#$".$res['mode'];

}
echo json_encode($data);


?>


