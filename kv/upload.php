<?php
    
      require("dbconfig.php");
    mysql_query("TRUNCATE TABLE future") or die(mysql_error());
    $ack="loading" ; 
    
    $counter=0;
    $handle = fopen("future.csv","r") or die("no file exists");
    while(($line = fgets($handle))!==false)
    {
    
      $str = explode(",", $line);
      	

   // echo "'$str[0]',$str[1],'$str[2]','$str[3]','$str[4]',$str[5],$str[6],$str[7],$str[8],$str[9],$str[10],$str[11]";

      //  mysql_query("INSERT INTO sharesdb (cid,nakshatram,padam,pstart,thidhi,weekday,day,dindex,diifp,startday,high,low,diffs) VALUES (1,'$str[0]',$str[1],'$str[2]','$str[3]','$str[4]','$str[5]',$str[6],$str[7],$str[8],$str[9],$str[10],$str[11])") or die(mysql_error());
       echo $counter."<br>";
        $counter++;
        $str[5]=(string)$str[5];
        
       // echo "<b>".$str[5]."</b>///".$field;
    mysql_query("INSERT INTO future (nakshatram,padam,pstart,thidhi,weekday,day) VALUES ('$str[0]',$str[1],'$str[2]','$str[3]','$str[4]','$str[5]')") or die(mysql_error());   
    
    }
    
echo $counter." rows done";
echo "done";

    








?>
