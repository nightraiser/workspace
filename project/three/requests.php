<?php

require 'main.php';
$obj = new Main("localhost","root","livetolearn","updates");
if(isset($_POST['index']))
{

echo $obj->page_index($_POST['index']);
}




?>

