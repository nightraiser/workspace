<?php
if(isset($_GET['id']))
{
	echo "<h1>Your unique message id is</h1>";
	echo "<h3>$_GET[id]</h3>";
	echo "<b>Follow up the link </b> <a href='view.php?id=$_GET[id]'>Go to message</a>";
}

?>