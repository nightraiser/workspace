<?php 
mysql_connect('localhost','root','livetolearn') or die(mysql_error());
mysql_select_db('shop1') or die(mysql_error());
$mydata  = array('projectName' => 'shop1' );
?>