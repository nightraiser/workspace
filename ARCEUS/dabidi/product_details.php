<?php 

include('dbconfig.php');
include('framework/Main.php');
$obj =new Main();
$row = $obj->page_Product_details($_GET['pid']);
$i=0;


?>

<?php include('layouts/header.php');?>

<?php include('layouts/sidebar.php');?>	
<div class="span9">
<h2>Product</h2>
		<div id="gallery" class="span2">
  		<a href=<?php echo"assets/products/$row[pid].jpg"; ?> title="<h4>Fujifilm FinePix S2950 Digital Camera</h4>">
			<img src=<?php echo"assets/products/$row[pid].jpg"; ?> width="100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
				</a>
				</div>
				<div class="span6">
				<h3><?php echo"$row[product_name]"; ?> </h3>
				
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" action ="add_to_cart.php" method="post">
				  <div class="control-group">
					<label class="control-label"><span><?php echo"Rs.$row[price]" ?></span></label>
					<div class="controls">
					<input type="number" min="1" max="5" id="qty"class="span1" value="1"/>
					  <button  class="btn btn-large pull-right btn-info" id="add_to_cart" ><i class=" icon-shopping-cart"></i> Add to cart</button>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4><?php echo "$row[availability]"; ?> items in stock</h4>
				<form class="form-horizontal qtyFrm pull-right">
				 
				<!--  <div class="control-group">
					<label class="control-label"><span>Materials</span></label>
					<div class="controls">
					  <select class="span2">
						  <option>Slik</option>
						  <option>Cotton</option>
						  <option>Mix</option>
						  <option>Ruby</option>
						</select>
					</div>
				  </div> -->
				</form>
				<hr class="soft clr"/>
				<p>
				<?php echo"$row[description]"; ?>
				
				</p>
				
				<br class="clr"/>

		
 </ul>
</div>
</div>






<?php 

include('layouts/footer.php');

?>

</body>