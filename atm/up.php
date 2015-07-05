<?php 
	
	
		$file = $_FILES['file']['tmp_name'];
		$handle  = fopen($file,"r");
		while(($fileop=fgetcsv($file))!==false)
		{
			echo $fileop[0];
		}
		
	


?>