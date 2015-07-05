<!DOCTYPE HTML>
<html oncontextmenu="alert('Smartie!!! dont try to view the code'); return false">
	<head>
		<title>MRCET</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
<script src="js/extravote.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.rating.css" />

<link rel="stylesheet" href="css/extravote.css" />
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
								<article class="is-post">
									<header>
										
										<h1>Learning Management System</h1><hr>
										<h1>Library books</h1> 

										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
echo"<span class='byline'>$_SESSION[name],Explore the books in library</span>";?>
</header>
</article>
<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$b=$_SESSION['branch'];
$y=$_SESSION['year'];
$q=mysql_query("SELECT * FROM books ORDER BY sub ASC") or die("query problem");
$search=$_POST['search'];
$output='';
$rate="";


if(isset($_POST['search'])&&$search!=="")
{
$q=mysql_query("SELECT * FROM books WHERE sub LIKE '$search' ORDER BY rating DESC") or die("wrong query");
$search="";
$res=mysql_fetch_assoc($q);
}
if(mysql_num_rows($q)==0)
{
echo "Sorry ".$_SESSION['name'];
echo " <b> No matches found</b>";
}
else
{
$i=0;
while(($res=mysql_fetch_assoc($q)) !== false)
{

$avg=intval($res['rating']/$res['hits']);
while($i<$avg)
{
$rate.="<img src='images/star-on.png' />
";
$i=$i+1;
}
if($res['avail']==0)
{
$bc="<B style='color:red'>Out of stock!!!</B>";
}
else
{
$bc=$res['avail']." Books";
}
$output .="
<article class='is-post is-post-excerpt'>
<div class='info'>
<b align='center'>Subject</b>
<span class='day'>$res[sub]</span>
</div>
Book name: <b>$res[name]</b><br>
Author:
<b> $res[author]</b><br>
Availablity
: <b>$bc</b><br>

<b>Avg Rating (Rating recorded by $res[hits])</b>::<br> ".$rate."
<hr>
</form>
</article>";
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
<!--search-->
					<section class="search">
	











							<form method="post" action="books.php">
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
									echo"<li ><a href='student.php'>Latest Updates</a></li>";
									}
									else
									{
									echo"<li ><a href='faculty.php'>Post Updates</a></li>";
									}
									?>
									<li class='current_page_item'><a href="books.php">Library</a></li>
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
