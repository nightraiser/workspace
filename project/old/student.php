<!DOCTYPE HTML>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false">
	<head>
		<title>MRCET</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
<script src="js/shorcuts.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
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
	<body class="left-sidebar" >
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
								<article class="is-post ">
									<header>
										
										<h1>Learning Management System</h1><hr>
										<h2>Latest Updates</h2> 

										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
echo"<span class='byline'>$_SESSION[name],updates from your facutly</span>";?>
</header>
</article>
<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$b=$_SESSION['branch'];
$y=$_SESSION['year'];
$q=mysql_query("SELECT * FROM faculty WHERE branch LIKE '$b' AND year LIKE '$y' ORDER BY id DESC") or die("query problem");
$search=$_POST['search'];
$output='';

if(isset($_POST['search'])&&$search!=="")
{
$q=mysql_query("SELECT * FROM faculty WHERE branch LIKE '$b' AND year LIKE '$y' AND subject LIKE '%$search%' ORDER BY id DESC") or die("wrong query");
$search="";

}
if(mysql_num_rows($q)==0)
{
echo "Sorry ".$_SESSION['name'];
echo " <b> No matches found</b>";

}
else
{
while(($res=mysql_fetch_assoc($q)) !== false)
{
$mn=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$date = $res['time'];
$d = date_parse_from_format("Y/m/d H:i:s", $date);


$numb=$d['month']-1;
if($res['fflag']==1)
{
$fn="uploads/".$_SESSION['branch']."/".$res['fname'];
$output .="
<article class='is-post is-post-excerpt'>
<div class='info'>
<b align='center'>On</b>
<span class='date'><span class='month'><b>$mn[$numb]</b></span> <span class='day'>$d[day]</span><span class='year'>$d[year]</span></span>
</div>

<b>Subject <br></b>$res[subject]
<hr>
<p>
<b>Message</b>
<p><strong>Hello!</strong>  $res[message]</p>
<hr>
<b>Download the attachments :: </b>
<a href='$fn' download>Download</a><hr>

</article>";
}
else
{
$output .="
<article class='is-post is-post-excerpt'>
<div class='info'>
<b align='center'>On</b>
<span class='date'><span class='month'><b>$mn[$numb]</b></span> <span class='day'>$d[day]</span><span class='year'>$d[year]</span></span>




</div>

<b>Subject <br></b>$res[subject]
<hr>
<p>
<b>Message</b>
<p><strong>Hello!</strong>  $res[message]</p>
<hr>

</article>";
}
}
echo $output;
}
if(isset($_POST['Logout']))
{

session_destroy();
header('Location:login.php');
}


?>


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
					
						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">MRCET</a></h1>
							</div>

					<section class="search">
								<form method="post" action="student.php">
									<input type="text" class="text" name="search" placeholder="Search here.." />
								</form>
							</section>
						<!-- Nav -->



							<nav id="nav">
								<ul>
									<li ><a href="index.php">About LMS</a></li>
									<li><a href="mydash.php">Quick Fedds</a></li>
									<li ><a href="dash.php">Dash Boards</a></li>
									
										
									<?php
									
									if($_SESSION['status']=='student')
									{
									echo"<li class='current_page_item'><a href='student.php'>Latest Updates</a></li>";
									}
									else
									{
									echo"<li><a href='facutly.php'>Post Updates</a></li>";
									}
									?>
									<li><a href="books.php">Library</a></li>
<li><a href="bookrate.php">Rate books</a></li>
<li><a href='feedback.php'>Feed Back</a></li>
									<li><form action="logout.php" method="post" align="center"><input class="button" type="submit" value="Logout" name="Logout"/></form></li>
								</ul>
							</nav>

						
							
					
						<!-- Text -->
							<section class="is-text-style1">
								<div class="inner">
									<p>
										&copy; 2013 MRCET.<br />
										<strong>Designed by:</strong> <a href="https://www.facebook.com/Ramblerssolutions">Ramblers Solutions</a> 
									</p>
								</div>
							</section>
					
					
						<!-- Copyright -->
							

					</div>

			</div>

	</body>
</html>
