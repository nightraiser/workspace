	<?php 

include('dbconfig.php');
include('framework/Main.php');
$obj =new Main();
$data = $obj->page_Products($_GET['scid']);
if($data!=false)
{
$i=0;
$latestProducts = "";

while($i<count($data))
{
	$latestProducts.='
			<li class="span3">
			  <div class="thumbnail">
				<a  href="product_details.php?pid='.$data[$i]['pid'].'"><img src="assets/products/'.$data[$i]['pid'].'.jpg" alt=""/></a>
				<div class="caption">
				  <h5>'.$data[$i]['product_name'].'</h5>
				 
				  <h4><a class="btn" href="product_details.php?pid='.$data[$i]['pid'].'">VIEW</a> <span class="pull-right">$'.$data[$i]['price'].'</span></h4>
				</div>
			  </div>
			</li>
		';
$i=$i+1;
}
}
else
{
	$latestProducts = "<h1>No products added yet</h1>";
}
?>

<?php include('layouts/header.php');?>

<?php include('layouts/sidebar.php');?>	
<div class="span9">

<div class="item">

		  <ul class="thumbnails">
 <?php 

echo $latestProducts;

 ?>
 </ul>
</div>
</div>






<?php 

include('layouts/footer.php');

?>

</body>