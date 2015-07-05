<!DOCTYPE HTML>
<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false">
	<head>
		<title>MRCET</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/shorcuts.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div id="content-inner">
					
							<!-- Post -->
								<article class="is-post is-post-excerpt">
									<header>
										<!--
											Note: Titles and bylines will wrap automatically when necessary, so don't worry
											if they get too long. You can also remove the "byline" span entirely if you don't
											need a byline.
										-->

										<h2>Welcome to MRCET's LMS</h2><hr>
										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
echo"<span class='byline'><b>Hie  $_SESSION[name]</b></span>";

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
										<!--
											Note: You can change the number of list items in "stats" to whatever you want.
										-->
										
									</div>
									<a href="#" class="image image-full"><img src="images/flashbanner1.jpg" alt="" /></a>
									<p>
										<strong>Hello!</strong> You are in the MRCET's <b>Learning Management System</b> the very first of its kind. <b>Live To Learn and Learn to Share</b> Holding strong the value of this caption MRCET provides another EDU environment to help students to get in touch with the faculty updates directly and use the library resources efficiently
									</p>
								</article>
						
							<!-- Post -->
								<article class="is-post is-post-excerpt">
									<header>
										<h2><a href="#">Faculty Updates</a></h2>
										
									</header>
									
									<a href="#" class="image image-full"><img src="images/8.jpg" alt="" /></a>
									<p>
										The prerequisite for a good edu environment is to fill the gap between the faculty and the students this is could be archieved to some extent by directly enabling the faculty to post their updates onto our site and students retrive their updates here @ <a href="student.php">Latest Updates Page </a>.You recieve a sorted out post depending on your year and branch details and the time the update was posted.Yoy can search for a post one the basis of it subject in the search bar
									</p>
								</article>
<article class="is-post is-post-excerpt">
<article class="is-post is-post-excerpt">
									<header>
										<h2><a href="#">Library</a></h2>
										
									</header>
									
									<a href="#" class="image image-full"><img src="images/11.jpg" alt="" /></a>
									<p>
										The books are the best friends of a student MRCET has versatile library which acts as huge resource of books to students @ <a href="books.php">Library Page</a>.You can know the availability of a book and its rate it and view the ratings of your faculty and other co studnents which will help you to choose the right book
									</p>
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

									<li class="current_page_item"><a href="index.php">About LMS</a></li>
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
<li><a href='feedback.php'>Feed Back</a></li>



				<li><form action="logout.php" method="post"><input class="button" type="submit" value="Logout" name="Logout"/></form></li>
									
								</ul>
							</nav>

						
							
					
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
