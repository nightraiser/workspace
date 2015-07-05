<?php 

/**
* 
*/
class Main
{
	
	function __construct($host,$login,$password,$dbname)
	{
		mysql_connect($host,$login,$password);
		mysql_select_db($dbname);
	}
	function page_index($param)
	{
		$q = mysql_query("SELECT * FROM articles WHERE dbid=$param");
	 $arr = array();
		$i=1;
		while(($res=mysql_fetch_assoc($q))!==false)
		{
			$arr['id'.$i]= array('aid' => $res['aid'],'dbid'=>$res['dbid'],'message'=>$res['message'],'postby' => $res['postby'],'time'=>$res['time'] );
			$i=$i+1;
		}
		return json_encode($arr);
	}
}

?>