<?php
include("dbconfig.php");

$q = mysql_query("SELECT * FROM sharesdb");
$i=0;
while(($res=mysql_fetch_assoc($q))!==false)
{
	mysql_query("INSERT INTO `dates`(`nakshatram`, `padam`, `pstart`, `thidhi`, `weekday`, `day`) VALUES ('$res[nakshatram]',$res[padam],'$res[pstart]','$res[thidhi]','$res[weekday]','$res[day]')") or die(mysql_error());
	echo $i;
	$i=$i+1;
}
echo "done with sharesdb";
$q1 = mysql_query("SELECT * FROM future");
while(($res=mysql_fetch_assoc($q1))!==false)
{
	mysql_query("INSERT INTO `dates`(`nakshatram`, `padam`, `pstart`, `thidhi`, `weekday`, `day`) VALUES ('$res[nakshatram]',$res[padam],'$res[pstart]','$res[thidhi]','$res[weekday]','$res[day]')") or die(mysql_error());
	echo $i;
	$i=$i+1;
}

echo "done with futre";

//mysql_query("TRUNCATE table dates");
//echo "done";
?>