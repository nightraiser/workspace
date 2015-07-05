<?php
require('Main.php');
$obj = new Main("localhost","root","livetolearn","arceus");
if(isset($_POST['category']))
{
echo $obj->category();
}
if(isset($_POST['add_category'])) 
{
	echo $obj->add_category($_POST['add_category']);
}
if(isset($_POST['add_subcategory'])) 
{
	echo $obj->add_sub_category($_POST['add_subcategory'],$_POST['cid']);
}
if(isset($_POST['sub_category'])) 
{
	echo $obj->sub_category($_POST['sub_category']);
	
}
if(isset($_POST['products']))
{
	echo $obj->products($_POST['products']);
}
if(isset($_POST['orders']))
{
	echo $obj->orders();
}
if(isset($_POST['fullorder']))
{
	echo $obj->fullorder($_POST['fullorder']);
}
if(isset($_POST['remove']))
{
	echo $obj->remove($_POST['remove'],$_POST['type']);
}
?>