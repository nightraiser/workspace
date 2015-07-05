<?php 

if(!isset($_COOKIE['userid']))
{
  header("Location:index.php");
}


?>








<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
		<title>ATM</title>
<style>
*
{
margin:0px;
padding:0px;

}
body
{
background:#ecf0f1;
}
header,content
{
display:block;
}
header
{
background:#3498db;
height:80px;


}
.logo
{
color:white;
font-size:25px;
margin-top:20px;
}
content
{
background:#ecf0f1;
font-size:25px;
margin:20px;
padding:10px;
}

content p
{
padding:50px;

}
#timer
{
color:white;
font-size:20px;
font-weight:bold;
}
</style>
<script src="js/jquery.js"></script>

</head>

<body >
<div class="container">
<div style="background:#3498db; border-color:#3498db" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <center>
         <b class="logo">ATM</b>
          </center>
        </div>
        <div class="navbar-collapse collapse">
          
        
           
        </div><!--/.navbar-collapse -->
      </div>
    </div>

<br><br><br><br><Br>
<div class="row">
<div id="content" class="panel panel-primary">
<?php 
$str="";
if($_GET['id']==md5("verbal"))
{
  $str="verbal";
}
elseif($_GET['id']==md5("quants"))
{
  $str = "quants";

}
elseif($_GET['id']==md5("logical"))
{
  $str = "logical";

}
elseif($_GET['id']==md5("technical"))
{
  $str = "technical";
}

 ?>
<div class="panel-heading">
  <center><h3><b>Instructions</b></h3></center>
</div>
<p style="padding:10px;"> 
<center><h4><?php echo ucfirst($str); ?> Module</h4></center>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<hr>
  </p>
<div class="panel-footer">
<center><a class="btn btn-success btn-lg" href="<?php echo $str.".php" ?>"><h4>Start Module</h4></a></center>

</div>
</div>
</body>
</html>

