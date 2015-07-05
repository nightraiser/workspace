<!DOCTYPE HTML>
<!--<html oncontextmenu="alert('Samrtie!!! dont try to view the code'); return false">-->
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
										<h2>My Dash Board</h2> 

										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
echo"<span class='byline'>$_SESSION[name],your dashboards</span>";?>
</header>
</article>
<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$b=$_SESSION['branch'];
$y=$_SESSION['year'];
$sid=$_SESSION['sid'];
$w=mysql_query("SELECT * FROM favs WHERE studid = '$sid'") or die("query problem");
$fb=mysql_query("SELECT * FROM articles");

$search=$_POST['search'];
$output='';

if(isset($_POST['search'])&&$search!=="")
{
$q=mysql_query("SELECT * FROM dbs WHERE dbname LIKE '$search' ORDER BY dbid DESC") or die("wrong query");
$search="";

}
/*if(mysql_num_rows($q)==0)
{
echo "Sorry ".$_SESSION['name'];
echo " <b> No matches found</b>";

}
else*/
//{
$i=1;
echo "<article class='is-post is-post-excerpt'>
";
$snos=1;
while(($rem=mysql_fetch_assoc($w)) !== false)
{
$dash=$rem['dbid'];
$q=mysql_query("SELECT * FROM dbs WHERE dbid = $dash") or die("wrong query");

while(($res=mysql_fetch_assoc($q)) !== false)
{

$nsql=mysql_query("SELECT COUNT(dbid) FROM articles WHERE dbid LIKE $res[dbid] ") or die("ass array prob");
$nscomb=mysql_fetch_array($nsql);



$output .="



<h5>$i)<a href='article.php?dbid=$res[dbid]'>$res[dbname]</a></h5>
<hr>
<br>
";
$i++;

}
echo "</article >";
}
echo $output;
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

<!--search
					<section class="search">
								<form method="post" action="mydash.php">
									<input type="text" class="text" name="search" placeholder="Search here.." />
								</form>
							</section>-->
						<!-- Nav -->



							<nav id="nav">
								<ul>
									<li ><a href="index.php">About LMS</a></li>
<li class='current_page_item'><a href="mydash.php">My Boards</a></li>
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
									<li><form action="dash.php" method="post" align="center"><input class="button" type="submit" value="Logout" name="Logout"/></form></li>
								</ul>
							</nav>

						
							
					
						<!-- Text -->
							<section class="is-text-style1">
								<div class="inner">
									<p>
										&copy; 2013 MRCET.<br />
										<strong>Designed by:</strong> Students of IT dept with the guidance of <a href="www.http://hsprovider.in/">HSP</a> 
									</p>
								</div>
							</section>
					
					
						<!-- Copyright -->
							

					</div>

			</div>

	</body>
</html>
