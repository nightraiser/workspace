	<?php

	/**
	* 
	*/

	class Main 
	{
		
		function __construct()
		{
			include('dbconfig.php');
		}
		function page_Index()
		{
			$data = [];
			$query1 = mysql_query("SELECT * FROM products ORDER BY pid DESC LIMIT 6");
			$i = 0;
			while(($res1 = mysql_fetch_assoc($query1))!==false)
			{
				$data[$i] = array('pid'=>$res1['pid'],'product_name'=>$res1['product_name'],'price'=>$res1['price'])	;
				$i=$i+1;
			}

			return $data;
		}
		function page_Product_details($param)
		{
			$query1 = mysql_query("SELECT * FROM products WHERE pid = $param");
			$data = mysql_fetch_array($query1);
			return $data;
		}
		function page_Search_results($param)
		{
			$query1 = mysql_query("SELECT * FROM products WHERE product_name LIKE '$param%' OR keywords LIKE '%$param%'") or die(mysql_error());
			if(mysql_num_rows($query1)==0)
			{
				return false;
			}

			$data = [];
			$i = 0;
			while(($res1 = mysql_fetch_assoc($query1))!==false)
			{
				$data[$i] = array('pid'=>$res1['pid'],'product_name'=>$res1['product_name'],'price'=>$res1['price'])	;
				$i=$i+1;
			}
			return $data;
			
			

		}
		function page_Products($param)
		{
			$data = [];
			$query1 = mysql_query("SELECT * FROM products WHERE scid = $param ORDER BY product_name ASC");
			if(mysql_num_rows($query1)==0)
			{
				return false;
			}
			$i = 0;
			while(($res1 = mysql_fetch_assoc($query1))!==false)
			{
				$data[$i] = array('pid'=>$res1['pid'],'product_name'=>$res1['product_name'],'price'=>$res1['price'])	;
				$i=$i+1;
			}

			return $data;
		}

	}







	?>