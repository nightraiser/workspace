<?php 
mysql_connect('localhost','root','livetolearn') or die(mysql_error());
mysql_select_db('hudibaba') or die(mysql_error());
$mydata  = array('projectName' => 'hudibaba' );
?>