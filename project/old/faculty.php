<!DOCTYPE HTML>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false">
	<head>
		<title>MRCET</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/shorcuts.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">
<script>
shortcut.add("F12",function() {
	alert("Smartie!! even this key is blocked");
});
shortcut.add("Ctrl+S",function() {
	alert("Smartie!! You cant save the page");
});
</script>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div id="content-inner">
					
							<!-- Post -->
								<article class="is-post is-post-excerpt">
									<header>
										
										<h2>Welcome to MRCET's LMS</h2><hr>
										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
if($_SESSION['status']=='student')
{

session_destroy();
header('Location:login.php');
}
echo"<span class='byline'><b>Heya  $_SESSION[name]</b></span>";


?>
									</header>
									<div class="info">
Date
										<!--
	
											
											
										-->
<?php
$date = date('Y-m-d');
$d = date_parse_from_format("Y-m-d", $date);
$mn=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$numb=$d['month']-1;
									echo"<span class='date'><span class='month'><b>$mn[$numb]</b></span> <span class='day'>$d[day]</span><span class='year'>$d[year]</span></span>";?>
										
										
									</div>
									<ul>
<div class="gradientBoxesWithOuterShadows">
<header2><h4>Post your update</h4></header2><br><br><br>
<form id='myform'  method='post' align='center'  enctype="multipart/form-data">

Year <select name="year">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><br>
Branch <select name="branch">
  <option value="IT">IT</option>
  <option value="CSE">CSE</option>
  <option value="AERO">AERO</option>
  <option value="MECH">MECH</option>
<option value="ECE">ECE</option>
</select><br>
Subject <input type='text' name='sub' class="span3"><br>
Message <textarea rows="10" cols="30" name='message' class="span3"> </textarea><br>

      <input type="checkbox" value="1" name="upload" > Upload a file <br><br>
  
<input type="file" name="file"/><br><br>
<input type='submit' value="Post" name="ok" class="button">
<?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates') or die("selection of db problem");
$s=$_POST['sub'];
$m=$_POST['message'];
$date = date('Y/m/d H:i:l;s');
$statement="";
$y=$_POST['year'];
$b=$_POST['branch'];
$pb=$_SESSION['name'];
if($s=='')
{
$statement="";

}

else
{
if($_POST['upload'] == 1)
{
$fn=$_FILES['file']['name'];
$fsub=mysql_query("INSERT INTO faculty (year,branch,subject,message,time,fflag,fname) VALUES ('$y','$b','$s','$m','$date',1,'$fn')") or die("insertion fail"); 
$to="uploads/".$_POST['branch']."/".$_FILES['file']['name'];
if(move_uploaded_file($_FILES['file']['tmp_name'],$to))
{
echo
"<script> alert('Your update is posted')</script>";
}
else
{
echo"<script> alert('Error:Server busy')</script>";

}
}
else{	
$fsub=mysql_query("INSERT INTO faculty (year,branch,subject,message,time) VALUES ('$y','$b','$s','$m','$date')") or die("insertion failed");
echo"<script> alert('Your update is posted')</script>";

}
}

$s='';
mysql_close($con);
if(isset($_POST['Logout']))
{
session_destroy();
header('Location:login.php');
}
?>

</form>
</div>
</ul>
								</article>
						

						
							

						</div>
					</div>


				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">MRCET</a></h1>
							</div>
					
						<!-- Nav -->





							<nav id="nav">
								<ul>
									<li ><a href="index.php">About LMS</a></li>
									
									<li ><a href="dash.php">Dash Boards</a></li>
										<li><a href="mydash.php">My dashboards</a></li>
									<?php
									
									if($_SESSION['status']=='student')
									{
									echo"<li class='current_page_item'><a href='student.php'>Latest Updates</a></li>";
									}
									else
									{
									echo"<li class='current_page_item'><a href='facutly.php'>Post Updates</a></li>";
									}
									?>
									<li><a href="books.php">Library</a></li>
<li><a href="bookrate.php">Rate books</a></li>
<li><a href='feedback.php'>Feed Back</a></li>
									<li><form action="logout.php" method="post"  align="center"><input class="button" type="submit" value="Logout" name="Logout" /></form></li>
								</ul>
							</nav>

						
					
						<!-- Text -->
							<section class="is-text-style1">
								<div class="inner">
									<p>
									      <strong>Designed by:</strong>  <a href="https://www.facebook.com/Ramblerssolutions">Ramblers Solutions</a> 
 									</p>
								</div>
							</section>
					
					

						<!-- Copyright -->
							<div id="copyright">
								<p>
									&copy; 2013 MRCET.<br />
									Visit@: <a href="http://www.mrcet.ac.in">MRCET</a>, 
								</p>
							</div>

					</div>

			</div>

	</body>
</html>
