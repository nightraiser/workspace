<?php
//echo "hello";
class Main
{

	function __construct($host,$login,$password,$dbname)
	{
		session_start();
		if(isset($_SESSION['ADMIN']))
		{
		require('../../dbconfig.php');
		}
		else
		{
			header("Location:login.php");
		}
	}
	
	function category()
	{
		$q1 = mysql_query("SELECT * FROM category ORDER BY category_name ASC") or die(mysql_error());
		$id=1;
		$output =[];
		if(mysql_num_rows($q1)>0)
		{
		while(($res=mysql_fetch_assoc($q1))!==false)
		{
			$output[$id] = array('cid'=>$res['cid'],'category_name' => $res['category_name'] );
			$id=$id+1;
		}

		return json_encode($output);
		}
		else
		{
			return false;
		}
	}

	function sub_category($param)
	{
		$q1="";
		if($param=="all")
		{
		$q1 = mysql_query("SELECT * FROM sub_category ORDER BY sub_category_name ASC") or die(mysql_error());
		}
		else
		{
			$q1 = mysql_query("SELECT * FROM sub_category WHERE cid=$param ORDER BY sub_category_name ASC") or die(mysql_error());
		}
			$id=1;
			$output =[];
			if(mysql_num_rows($q1)>0)
			{
				while(($res=mysql_fetch_assoc($q1))!==false)
				{
					$output[$id] = array('cid'=>$res['scid'],'sub_category_name' => $res['sub_category_name'] );
					$id=$id+1;
				}

				return json_encode($output);
			}
			else
			{
			return false;
			}
	}

	function add_category($param)
	{
		$q1 = mysql_query("SELECT * FROM category WHERE category_name LIKE '$param'");
		if(mysql_num_rows($q1)>=1)
		{
			return false;
		}
		
		else
		{
			mysql_query("INSERT INTO category (category_name) VALUES ('$param')") or die(mysql_error());
			return true;
		}
	}

	function add_sub_category($param,$cid)
	{

		$q1 = mysql_query("SELECT * FROM sub_category WHERE sub_category_name LIKE '$param' AND cid = $cid");
		if(mysql_num_rows($q1)>=1)
		{
			return false;
		}
		
		else
		{
			$cid = intval($cid);
			mysql_query("INSERT INTO sub_category (cid,sub_category_name) VALUES ($cid,'$param')") or die(mysql_error());
			return true;
		}
	}

		function products($param)
	{
		
		
			$q1 = mysql_query("SELECT * FROM products WHERE scid=$param ORDER BY product_name ASC") or die(mysql_error());
		
			$id=1;
			$output =[];
			if(mysql_num_rows($q1)>0)
			{
				while(($res=mysql_fetch_assoc($q1))!==false)
				{
					$output[$id] = array('pid'=>$res['pid'],'product_name' => $res['product_name'] );
					$id=$id+1;
				}

				return json_encode($output);
			}
			else
			{
			return false;
			}
	}

	function orders()
	{
		$q1 = mysql_query("SELECT o.oid, u.email FROM orders AS o JOIN users AS u ON o.uid = u.uid") or die(mysql_error());
		$id=1;
			$output =[];
			if(mysql_num_rows($q1)>0)
			{
				while(($res=mysql_fetch_assoc($q1))!==false)
				{
					$output[$id] = array('oid'=>md5($res['oid']),'email' => $res['email'] , 'ooid'=>$res['oid']);
					$id=$id+1;
				}

				return json_encode($output);
			}
			else
			{
			return false;
			}
	}	


	function fullorder($param)
	{
		$order_details = mysql_fetch_array(mysql_query("SELECT * FROM orders WHERE oid = $param"));
		$productsids = implode(",",array_map("intval",explode(",", $order_details['pid'])));
		$quantites = explode(",",$order_details['quantities'] );
		//print_r($productsids);
		$q1 = mysql_query("SELECT * FROM products where pid IN ($productsids)	")or die(mysql_error());
		$id = 1;
		$count =0;
		$output1 = [];
		$amount = 0;
		$user_details = mysql_fetch_array(mysql_query("SELECT o.oid, u.email FROM orders AS o JOIN users AS u ON o.uid = u.uid where o.oid = $param") or die(mysql_error()));
		if(mysql_num_rows($q1)>0)
		{
			while(($res=mysql_fetch_assoc($q1))!==false)
			{
				$output1[$id]  = array('product_name' => $res['product_name'],'quantity' => $quantites[$count],'amount'=>($res['price']*$quantites[$count]));
				$amount +=($res['price']*$quantites[$count]);
				$id = $id+1;
				$count=$count+1;

			}
			$output  = array('product_details' => $output1,'fullamount'=>$amount,'address'=>$order_details['delivery_address'],'user_details'=>$user_details['email'] );
			return json_encode($output);
		}	
		else
		{
			return false;
		}
	}

function remove($param,$type)
{
	if($type=='cid')
	{
		$cid = $param;
		mysql_query("DELETE FROM category WHERE cid =$cid") or die(mysql_error());
		//header("Location:products.html");
		return true;
	}
	if($type=='scid')
	{
		$scid = $param;
		
		mysql_query("DELETE FROM sub_category WHERE scid =$scid") or die(mysql_error());
		//header("Location:subcategories.html?scid=$ccid");
		return true;
	}
return false;
}
}	

//echo $obj->category();
//echo $obj->category();
//$obj = new Main("localhost","root","livetolearn","arceus");
//echo $obj->fullorder(1);
?>

