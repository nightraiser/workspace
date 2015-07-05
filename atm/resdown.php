
<?php
require("dbconnect.php");
if(isset($_POST['day']))
{
$day = $_POST['day'];
$w = mysql_query("SELECT * FROM result WHERE day = '$day' ORDER BY uid") or die(mysql_error());
$data=("Rollno,Section,Score \r\n");
while(($res=mysql_fetch_assoc($w)) !== false)
{
$data.= ("$res[uid] ,$res[section] ,$res[score] \r\n");
}
echo $data;





$fname = "result".$day.".csv" or die(mysql_error());
$file1 = fopen($fname,"w") or die(mysql_error());

echo fwrite($file1,$data);
fclose($file1);

header("Content-Type: application/octet-stream");

$file = $fname;
header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp); 

unlink($fname);

}
else
{
	header("logout.php");
}
?>