<?php
$query = mysql_query("SELECT * FROM category");
$str="";
while(($res=mysql_fetch_assoc($query))!==false)
{
	$query2 = mysql_query("SELECT * FROM sub_category WHERE cid=$res[cid]");
	$str.="<li class='subMenu'><a>$res[category_name]</a> <ul>";
	while(($res2=mysql_fetch_assoc($query2))!==false)
	{
		

		$str.="
			<li><a  href='products.php?scid=$res2[scid]'>$res2[sub_category_name]</a></li>";
	}
	$str.="</ul></li>";

}

?>
<div class="row">
	<div id="sidebar" class="span3">
	<ul class="nav nav-list bs-docs-sidenav" style="display: block;">
	<?php 

	echo $str;

	?>	
	</ul>
	</div>