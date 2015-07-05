

<!DOCTYPE HTML>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false">
	<head>
		<title>MRCET</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/shorcuts.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />

		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="styl/esheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	
	<body class="left-sidebar" >
<script>
shortcut.add("F12",function() {
	alert("Smartie!! even this key is blocked");
});
shortcut.add("Ctrl+S",function() {
	alert("Smartie!! you cannot save this page");
});
</script>
<script language="javascript">
function checking()
{
var x= document.getElementById("comment");

if(x.length == 0)
{
alert("Fill in first");
return false;
}
}


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
echo"<span class='byline'><b>Hie  $_SESSION[name]</b></span>
<h1>Give your valuable feedback</h1>";

if(isset($_POST['Logout']))
{
session_destroy();
header('Location:login.php');
}


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
<?php									
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');

$q1=mysql_query("SELECT * FROM feedback ORDER BY cid DESC") or die(" problem");
$number=mysql_num_rows($q1);
$res1=mysql_fetch_assoc($q1);
?>
<hr><b>Feed Backs::</b>
<?php
echo"
<form name='form1' action='feedback.php' method='post' onsubmit='return checking()'>
<textarea id='fd' rows='2' cols='100' name='art' class='span9' id='comment'> </textarea>&nbsp;&nbsp;
<input type='submit' value='Post' class='button' name='artpost'/></form>
<b>Feeds</b>";
?>
<?php
if(mysql_num_rows($q1)==0)
{
echo"<h2>No feed back obtained yet</h2>";
}
else
{
do
{
$output.=
"
<hr>
<div class='comment pre-scrollable'>
<b>$res1[cmntby]</b> said ::
<p><b>$res1[comment]</b></p>
</div><hr>
"."";
}
while(($res1=mysql_fetch_assoc($q1)) != false);
echo $output;
}
?>

<?php
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$cmnt=$_POST['art'];

if(isset($_POST['artpost']))
{
if(strlen($cmnt)>0)
{
$fsub=mysql_query("INSERT INTO  feedback (comment,cmntby) VALUES ('$cmnt','$_SESSION[name]')") or die("insertion fail");

$_POST['art']="";
header("Location:feedback.php");
}
else
{
echo"<script>alert('Fill the comment')</script>";
}
}

?>

								</article>
						
							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<h1>MRCET</h1>
							</div>
				
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="index.php">About LMS</a></li>
									
									<li><a href="mydash.php">Quick Fedds</a></li>
									<li ><a href="dash.php">Dash Boards</a></li>	
									<?php
									
									if($_SESSION['status']=='student')
									{
									echo"<li><a href='student.php'>Latest Updates</a></li>";
									}
									else
									{
									echo"<li><a href='faculty.php'>Post Updates</a></li>";
									}
									?>
									<li><a href="books.php">Library</a></li>
<li><a href="bookrate.php">Rate books</a></li>
<li class='current_page_item'><a href='feedback.php'>Feed Back</a></li>
				<li><form action="logout.php" method="post"><input class="button" type="submit" value="Logout" name="Logout"/></form></li>
									
								</ul>
							</nav>

						<!-- Search 
							<section class="is-search">
								<form method="post" action="#">
									<input type="text" class="text" name="search" placeholder="Search" />
								</form>
							</section>-->
					
						<!-- Text -->
							<section class="is-text-style1">
								<div class="inner">
									<p>
										<strong>Designed by:</strong> <a href="https://www.facebook.com/Ramblerssolutions">Ramblers Solutions</a>  
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
