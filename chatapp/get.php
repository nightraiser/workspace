<?php

mysql_connect("localhost","root","livetolearn");
mysql_select_db("chatapp");
$q = mysql_query("SELECT * FROM chat order by id asc");
$arr =[];
$i=0;
while(($res = mysql_fetch_assoc($q))!==false)
{
$arr[$i] = array('id'=>$res['id'],'message' => $res['message'],"sender"=>$res['sender'] );
$i+=1;
}
echo json_encode($arr);
?>