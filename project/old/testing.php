<?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$q=mysql_query("SELECT * FROM dbs");
$res=mysql_fetch_array($q);
$i=3;
while($i<5)
{
echo"<h1>$res[$i]</h1>";
$i=$i+1;
}
?>
