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
	<meta http-equiv="refresh" content="15">
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
								<!--<article class="is-post ">
									<header>
										-->
										
										 

										<?php 

session_start();
if($_SESSION['name']=="")
{
header('Location:login.php');
}
//echo"<span class='byline'>$_SESSION[name],your &quot;Qiuck Feeds&quot;</span>";?>
<!--</header>
</article>-->
<?php
session_start();
$con=mysql_connect('localhost','root','livetolearn');
$db=mysql_select_db('updates');
$b=$_SESSION['branch'];
$y=$_SESSION['year'];
$sid=$_SESSION['sid'];
$w=mysql_query("SELECT * FROM favs WHERE studid = '$sid'") or die("query problem");
$fb = mysql_query("SELECT * FROM articles ORDER BY aid DESC") or die("article problem");
$dbarr;
$j=0;
while(($res=mysql_fetch_assoc($w)) !== false)
{
$dbarr[$j]=$res['dbid'];
$j=$j+1;
}
$nsql1=mysql_query("SELECT COUNT(*) FROM favs") or die("ass array prob");
$nscomb1=mysql_fetch_array($nsql1);
$j=0;




	while(($fbres=mysql_fetch_assoc($fb)) !== false)
	{
		$i=0;
		$mn=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		$date = $fbres['time'];
		$d = date_parse_from_format("Y/m/d H:i:s", $date);
		$numb=$d['month']-1;
		$nsql=mysql_query("SELECT COUNT(aid) FROM comments WHERE aid LIKE $fbres[aid] ORDER BY aid DESC") or die("ass array prob");
		$nscomb=mysql_fetch_array($nsql);
		if($nscomb1[0]>0)
		{
		while($i<=$nscomb1[0])
		{
		
		if($fbres['dbid']==$dbarr[$i])
		{
			$dbname=mysql_query("SELECT dbname FROM dbs WHERE dbid=$fbres[dbid]") or die("query probs");
			$dbn=mysql_fetch_array($dbname);
			$output.="<article class='is-fb'>
		<header>
										
										<a href='article.php?dbid=$dbarr[$i]'><h2>$dbn[dbname]</h2></a>
<b>Article on</b>
<span style='font-size=2px'>$mn[$numb]-$d[day]-$d[year]<br>
<b>Posted By </b>$fbres[postby]<hr></span>
			
			</header>
			
		
			
			<p><strong>Hello!</strong>  $fbres[message]</p><hr>
			
			<center>$nscomb[0] Replies</center> <center><a class='button' href='fullview.php?aid=$fbres[aid]'>Reply</a></center><br><br>
			</article>";
		}
$i=$i+1;
	}
}
		else
			{

			echo"<h1>No favourties available</h1>";
}

}

echo $output;
if(isset($_POST['Logout']))
{

session_destroy();
header('Location:login.php');
}


?>
</article>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar" style="position:fixed;">
					
						<!-- Logo -->
							<a href="index.php"><div id="logo">
								<h1>MRCET</h1>
							</div></a>

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
<li class='current_page_item'><a href="mydash.php">Quick Fedds</a></li>
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
