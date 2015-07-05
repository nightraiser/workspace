<?php 
mysql_connect('localhost','root','livetolearn') or die(mysql_error());
mysql_select_db('Austin') or die(mysql_error());
$mydata  = array('projectName' => 'Austin' );
?>