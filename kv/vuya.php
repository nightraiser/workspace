<?php

require('dbconfig.php');
$day = $_POST['day'];
$cid = $_POST['cid'];
$q = mysql_query("SELECT * FROM future WHERE  day='$day'") or die(mysql_error());
$row = mysql_fetch_row($q);
session_start();
$_SESSION['day']=$day;
$_SESSION['cid']=$cid;
$q11 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND diifp > 0") or die(mysql_error());
$q12 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]'") or die(mysql_error());

$q21 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND diifp > 0") or die(mysql_error());
$q22 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2]") or die(mysql_error());

$q31 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND diifp > 0") or die(mysql_error());
$q32 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]'") or die(mysql_error());

$q41 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND thidhi='$row[4]' AND diifp > 0") or die(mysql_error());
$q42 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND thidhi='$row[4]'") or die(mysql_error());

$q51 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND thidhi='$row[4]' AND weekday='$row[5]' AND diifp > 0") or die(mysql_error());
$q52 = mysql_query("SELECT COUNT(*) FROM sharesdb WHERE cid=$cid AND nakshatram='$row[1]' AND padam=$row[2] AND pstart='$row[3]' AND thidhi='$row[4]' AND weekday='$row[5]'") or die(mysql_error());


echo mysql_result($q11, 0)/mysql_result($q12, 0).",".mysql_result($q21, 0)/mysql_result($q22, 0).",".mysql_result($q31, 0)/mysql_result($q32, 0).",".mysql_result($q41, 0)/mysql_result($q42, 0).",".mysql_result($q51, 0)/mysql_result($q52, 0);

?>