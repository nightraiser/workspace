<?php 


$i = 1;
while($i<=60)
{
if($i<=9)
{
echo "11n31a120".$i."\t".substr(md5("11n31a120".$i), 0,5)."<br>";
}
else
{
	echo "11n31a12".$i."\t".substr(md5("11n31a12".$i), 0,5)."<br>";
}
$i=$i+1;
}

 ?>