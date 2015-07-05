<?php 
mysql_connect('localhost','root','livetolearn') or die(mysql_error());
mysql_select_db('dabidi') or die(mysql_error());
$mydata  = array('projectName' => 'dabidi' );
?>