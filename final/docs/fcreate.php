<html>

<body>
<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('webume');
$w= mysql_query("SELECT * FROM personal WHERE userid = '$_GET[uid]' ");
$id=$_GET['uid'];
$stn;
$data;
$css="<style type='text/css'>
body {
    background:rgb(255, 255, 255);
}
.pre-scrollable {
  max-height: 340px;
  
	overflow-y:auto;
}
::-webkit-scrollbar {
    width: 10px;

}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.8); 
    border-radius: 5px;
	background:rgba(255, 165, 0, 0.84);
}
 
::-webkit-scrollbar-thumb {
    border-radius: 5px;
-webkit-box-shadow: inset 0 0 6px rgba(3, 3, 3, 0.44);
background: rgba(112, 110, 110, 1);

}
.details
{
position:relative;
right:16%;
top:16%;
float:right;
margin:10px;
min-height:93%;
width:70%;
border-width:2px;
border-top-color:transparent;
border-top-width:10px;
background:rgba(255, 255, 255, 0.7);
border-style:solid;
border-top-style:none;
border-width:1px;
border-color:rgba(0,0,0,0.42);
border-radius:10px;
box-shadow: 5px 5px 10px #888888;
z-index:1;
}
.detailheader
{
background-color:orange;
color:black;
width:100%;
height:10%;
position:absolute;
top:0%;
left:0%;
padding-top:2px;
border-top-left-radius:5px;
border-top-right-radius:5px;
border-bottom-style:inset;
border-bottom-color:rgba(0,0,0,0.64);
border-bottom-width:1px;
}
.details h1
{
font-family: Perpetua, Baskerville, 'Big Caslon', 'Palatino Linotype', Palatino, 'URW Palladio L', 'Nimbus Roman No9 L', serif;

}


.details hr
{
height: 6px;
    border: 0;
    box-shadow: inset 0 6px 6px -6px black;
}
.content
{

width:75%;
min-height:75%;
float:right;

margin-right:0px;
margin-left:0px;
font-family: Perpetua, Baskerville, 'Big Caslon', 'Palatino Linotype', Palatino, 'URW Palladio L', 'Nimbus Roman No9 L', serif;
border-left-style:solid;
border-left-width:2px;
border-left-color:rgba(0,0,0,0.30);
border-right-style:solid;
border-right-width:2px;
border-right-color:rgba(0,0,0,0.30);
border-top-style:outset;
border-top-width:2px;
border-top-color:rgba(0,0,0,0.30);
border-bottom-style:solid;
border-bottom-width:2px;
border-bottom-color:rgba(0,0,0,0.30);
	z-index:1;

overflow-y:auto;
position: absolute;
right: 10%;
top: 12%;
font-size:15px;
background-color:whitesmoke;
}
.content p:first-letter
{
text-transform:capitalize;
}
.exp b:first-letter
{
text-transform:capitalize;
}
.content hr
{
height: 6px;
    border: 0;
    box-shadow: inset 0 6px 6px -6px black;
padding-left:0px;
}
.content b,p
{
padding-left:10px;

}
.contenttab
{
text-transform:capitalize;
width:77%;
min-height:75%;
float:right;

margin-right:0px;
margin-left:0px;
border-left-style:solid;
border-left-width:2px;
border-left-color:rgba(0, 0, 0, 0.30);
border-top-style:solid;
border-top-width:2px;
	background-color:whitesmoke;
border-top-color:rgba(0, 0, 0, 0.30);
border-bottom-style:solid;
border-bottom-width:2px;
border-bottom-color:rgba(0, 0, 0, 0.30);
border-right-style:solid;
border-right-width:2px;
border-right-color:rgba(0, 0, 0, 0.30);
overflow-y:auto;
position:absolute;
right:7%;
top:12%;
font-family: Perpetua, Baskerville, 'Big Caslon', 'Palatino Linotype', Palatino, 'URW Palladio L', 'Nimbus Roman No9 L', serif;
font-size:15px;
border-top-right-color:white;
}
.contenttab b
{
padding-left:10px;
}
.contenttab p:first-letter
{
text-transform:capitalize;
}
.contenttab hr
{
height: 6px;
    border: 0;
    box-shadow: inset 0 6px 6px -6px black;
padding-left:0px;
}


</style>";
while(($res=mysql_fetch_assoc($w)) !== false)
{
$stn=$res['tname'];
$data="<html><head><title>$ref[fname] $ref[lname]</title>".$css."</head>";
$data.="<body><center><h1>Webume profile</h1><hr><h2>$stn</h2></center><hr><div class='details'><div class='detailheader'><center><h1>&quot;Personal information&quot;</h1></center></div><div class='content'><b>Name:</b> <br>
<p>$res[fname] $res[lname]</p><hr>
<b>S/O:</b> <br><p>$res[father] $res[lname]</p><hr>
<b>Date of Birth:</b> <br><p>$res[dob] ($ages years)</p><hr>
<b>Address:</b> <br><p>$res[address]</p><hr>
<b>About me:</b>
<p>$res[aboutme]</p><hr>
<b>Hobbies:</b><br>
<p>$res[hobbies]</p></div></div>";
}
//////aca/////


$tab="";
$aca= mysql_query("SELECT * FROM academic WHERE userid LIKE '$id' ") or die("query of slection failed");
$bgc="white";
while(($res1=mysql_fetch_assoc($aca)) !== false)
{
	$tab.="<tr bgcolor='$bgc'><td>$res1[grade]</td><td>$res1[iname]</td><td>$res1[discipline]</td><td>$res1[yoc]</td><td>$res1[syllabus]</td><td>$res1[percent]%</td></tr>";

}
	

$exp= mysql_query("SELECT * FROM experience WHERE userid LIKE '$id' ") or die("query of slection failed");
while(($result=mysql_fetch_assoc($exp)) !== false)
{
	$ex=$result['exp'];
	$as=$result['as'];
	$current=$result['current'];
}

$data.="<div class='details'><div class='detailheader'><center><h1>&quot;Academic Sheet&quot;</h1></center></div>
<div class='contenttab'>
<center><table border='1' >
<tr bgcolor='orange'  style='color:black;'  height=50px><td><b>Grade</b></td><td><b>Institution</b></td><td><b>Discipline</b></td><td><b>Year</b></td><td><b>Syllabus</b></td><td><b>Percentage</td></b></tr>".$tab."
</table></center>
<br>
<center>
<h4>&quot;Work Sheet&quot;</h4>
<hr>
</center>
<div class='exp'>
<b>Experience (years) :</b>  $ex
<hr>
<b>Currently as</b>: $as at &quot;<u>$current</u>&quot;
</div>
</div>
</div>";
////////////////projects/////////////
$tab="";
$count= mysql_query("SELECT count(*) FROM projects WHERE userid LIKE '$id' ") or die("query of selction failed");
$cn=mysql_result($count,0);
if($cn>0)
{
$aca= mysql_query("SELECT * FROM projects WHERE userid LIKE '$id' ") or die("query of selction failed");
$sno=1;
$bgc="#C2DFFF";
while(($res1=mysql_fetch_assoc($aca)) !== false)
{

	$tab.="<tr bgcolor='$bgc'><td>$sno</td><td>$res1[field]</td><td>$res1[pname]</td></tr>";
	$sno=$sno+1;
if($bgc=="#C2DFFF")
{
$bgc="#E5E4E2";
}
elseif($bgc=="#E5E4E2")
{
$bgc="#EBF4FA";
}
else
{
$bgc="#C2DFFF";
}
}
$data.="<div class='details'><div class='detailheader'><center><h1>&quot;Projects&quot;</h1></center></div><div class='contenttab'><b>Number of projects dealt with are &quot;$cn&quot;</b>
<hr>
<center>
<table border='1'  >
<tr bgcolor='orange'  style='color:black;'  height=50px><td><b>Sno</b></td><td><b>Developement Feild</b></td><td><b>Project name</b></td></tr>".$tab."
</table> </center>
</div>
</div>";
}

else
{
$data.="
<div class='details'><div class='detailheader'><center><h1>&quot;Projects&quot;</h1></div>
<div class='content'>
<h3>*No Projects listed</h3>
</center>
</div>
</div>";

}
////////////////certif///////
$tab="";
$count= mysql_query("SELECT count(*) FROM certificates WHERE userid LIKE '$id' ") or die("query of slection failed");
$cn=mysql_result($count,0);
if($cn>0)
{
$aca= mysql_query("SELECT * FROM certificates WHERE userid LIKE '$id' ") or die("query of slection failed");
$sno=1;
$bgc="#C2DFFF";
while(($res1=mysql_fetch_assoc($aca)) !== false)
{
	$tab.="<tr bgcolor='$bgc'><td>$sno</td><td>$res1[cname]</td></tr>";
	$sno=$sno+1;
if($bgc=="#C2DFFF")
{
$bgc="#E5E4E2";
}
elseif($bgc=="#E5E4E2")
{
$bgc="#EBF4FA";
}
else
{
$bgc="#C2DFFF";
}
}
$data.="<div class='details'><div class='detailheader'><center><h1>&quot;Certifications&quot;</h1></center></div>
<div class='contenttab'>
<b>Number of certifications are &quot;$cn&quot;</b>
<hr>
<center>
<table border='1' class='marksheet' >
<tr bgcolor='orange'  style='color:black;'  height=50px><td><b>Sno</b></td><td><b>Certification</b></td></tr>".$tab."
</table></center>
</div>
</div>
";
}
else
{
$data.="<div class='details'><div class='detailheader'><center>
<h1>&quot;Certifications&quot;</h1>
</center>
</div>
<div class='content'>
<center>
 
<h3>*No Certificates listed</h3>
</center>
</div>
</div>";

}

///////skills//////
$t="";
$skill= mysql_query("SELECT * FROM skill WHERE userid LIKE '$id' ") or die("query of slection failed");
while(($res1=mysql_fetch_assoc($skill)) !== false)
{
	$t.="<div><b>$res1[type]:</b><br><br><p>$res1[skill]</p></div><hr>";

}
$data.="<div class='details'><div class='detailheader'><center><h2>&quot;Categorized skillset&quot;</h2></center>
</div>
<div class='content'>
".$t."
</div>
</div>";
//contact//////
$query= mysql_query("SELECT * FROM personal WHERE userid LIKE '$id' ") or die("query of slection failed");
while(($res=mysql_fetch_assoc($query)) !== false)
{
$email=$res['email'];
$phone=$res['phone'];
$fname=$res['fname'];
$lname=$res['lname'];
$address = $res['address'];
}
$data.="
<div class='details'><div class='detailheader'>
<center>

<h1>&quot;Contact me&quot;</h1>
</center>
</div>
<div class='content'>
<br>
 <b>Email :</b> $email
<hr>
 <b>Phone :</b> $phone
<hr>
<b>Adress :</b>
 <p>$address</p>
<hr>
<br>
<br>
<p><b>Signed #</b></p>
<hr>
<div class='assure'>
<p><b>I ($fname $lname) hereby assure that all the information mentioned above is true to the my best knowledge. I will be responsible for correctness of the same.</p></b>
</div>
</div>
</div>";
?>

<?php

$fname = "Webume_".$stn.".html" or die("dile");
$file1 = fopen($fname,"w") or die("file");

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
?>
</body>
</html>
