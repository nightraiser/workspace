<?php 
include('dbconfig.php');
if(isset($_GET['pid']))
{

	
	$q = mysql_query("SELECT * FROM products WHERE pid = $_GET[pid]");
	$row = mysql_fetch_array($q);
	$output = array('pid'=>$row['pid'],'pname'=>$row['product_name'],'price'=>$row['price'],'availablity'=>$row['availability'],'imgurl'=>"/assets/products/".$row['pid'].".jpg",'productUrl'=>'product_details.php?pid='.$row['pid']);
	echo json_encode($output);

	
}
if(isset($_GET['scid']))
{


	$q = mysql_query("SELECT * FROM products WHERE scid = $_GET[scid]");
	$output=[];
	$i=0;
	while(($row=mysql_fetch_assoc($q))!==false)
	{
		$output[$i] = array('id'=>$i,'pid'=>$row['pid'],'pname'=>$row['product_name'],'price'=>$row['price'],'availablity'=>$row['availability'],'imgurl'=>"/assets/products/".$row['pid'].".jpg",'productUrl'=>'product_details.php?pid='.$row['pid']);
		$i+=1;
	}
	$output= json_encode($output);
	echo $output;
}


 ?>